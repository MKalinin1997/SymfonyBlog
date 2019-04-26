<?php
// src/Blogger/BlogBundle/Controller/CommentController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Comment;
use App\Form\CommentType;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Routing\Annotation\Route;

/**
 * Comment controller.
 */
class CommentController extends Controller
{
    public function newAction($blog_id)
    {
        $blog = $this->getBlog($blog_id);

        $comment = new Comment();
        $comment->setBlog($blog);
        $form   = $this->createForm(CommentType::class, $comment);

        return $this->render('product/Comment/form.html.twig', array(
            'comment' => $comment,
            'form'   => $form->createView()
        ));
    }

    /**
     * @Route("/add_comment/{blog_id}", name="addComment")
     */
    public function createAction(Request $request, $blog_id)
    {
        $blog = $this->getBlog($blog_id);

        $comment  = new Comment();
        $comment->setBlog($blog);
        $form    = $this->createForm(CommentType::class, $comment,  ['action' => $this->generateUrl('addComment', ["blog_id" => $blog_id])]);
        $form->handleRequest($request);

        dump($form->isSubmitted());
            if ($form->isSubmitted() && $form->isValid()) {
                dump($form);
                $em = $this->getDoctrine()
                    ->getManager();
                $em->persist($comment);
                $em->flush();

                return $this->redirect($this->generateUrl('showPost', array(
                        'id' => $comment->getBlog()->getId())) .
                    '#comment-' . $comment->getId()
                );
            }
        return $this->render('product/Comment/create.html.twig', array(
            'comment' => $comment,
            'form'    => $form->createView()
        ));
    }

    protected function getBlog($blog_id)
    {
        $em = $this->getDoctrine()
            ->getManager();

        $blog = $em->getRepository('App:Blog')->find($blog_id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        return $blog;
    }

}