<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\Enquiry;
use App\Form\EnquiryType;
use App\Entity\Xml4;


class PageController extends Controller
{
    /**
     * @Route("/product", name="product")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()
            ->getManager();

        $blogs = $em->createQueryBuilder()
            ->select('b')
            ->from('App:Blog',  'b')
            ->addOrderBy('b.created', 'DESC')
            ->getQuery()
            ->getResult();

        return $this->render('product/index.html.twig', array(
            'blogs' => $blogs
        ));
    }
    /**
     * @Route("/xml/{page}/{sort}/{order}", name="xml", methods={"GET"})
     */
    public function xmlAction($page = 0,$sort = 'voltoday',$order="DESC") {
 //       $page = $_GET["page"];
        $em = $this->getDoctrine()
            ->getManager();
  //      $xml = $em->getRepository(Xml4::class)->findAll();
        $xml = $em->createQueryBuilder()
            ->select('b')
            ->setMaxResults(10)
            ->setFirstResult($page*10)
            ->from('App:Xml4','b')
            ->addOrderBy('b.'.$sort, $order)
            ->getQuery()
        ->getResult();
        return $this->render('product/xml.html.twig', array(
            'xml' => $xml,
            'page' => $page
        ));
    }
    /**
     * @Route("/about", name="about")
     */
    public function aboutAction()
    {
        return $this->render('product/about.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        $enquiry = new Enquiry();

        $form = $this->createForm(EnquiryType::class, $enquiry);

        if ($request->isMethod($request::METHOD_POST)) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $message = (new \Swift_Message('Contact enquiry from symblog'))
                    ->setFrom('enquiries@symblog.co.uk')
                    ->setTo('email@email.com')
                    ->setBody($this->renderView('product/contactEmail.txt.twig', array('enquiry' => $enquiry)));


                $this->get('mailer')->send($message);

                $this->get('session')->getFlashBag()->add('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('contact'));

            }
        }

        return $this->render('product/contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
    public function sidebarAction()
    {
        $em = $this->getDoctrine()
            ->getManager();

        $tags = $em->getRepository('App:Blog')
            ->getTags();

        $tagWeights = $em->getRepository('App:Blog')
            ->getTagWeights($tags);

        $commentLimit   = $this->container
            ->getParameter('comments.latest_comment_limit');
        $latestComments = $em->getRepository('App:Comment')
            ->getLatestComments($commentLimit);

        return $this->render('product/sidebar.html.twig', array(
            'latestComments'    => $latestComments,
            'tags' => $tagWeights
        ));
    }
}
