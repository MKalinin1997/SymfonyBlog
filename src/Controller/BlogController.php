<?php

namespace App\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Blog;

/**
* Blog controller.
*/
class BlogController extends Controller
{
/**
* Show a blog entry
*/
    /**
     * Creates an Article resource
     * @Rest\Post("/articles")
     * @param Request $request
     * @return View
     */
    /**
     * @Route("/posts/{id}", name="showPost")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $blog = $em->getRepository('App:Blog')->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        $comments = $em->getRepository('App:Comment')
            ->getCommentsForBlog($blog->getId());

        return $this->render('product/show.html.twig', array(
            'blog'      => $blog,
            'comments'  => $comments
        ));
    }
}