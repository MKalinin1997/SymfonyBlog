<?php

namespace App\Controller\Rest;

use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Blog;
use FOS\RestBundle\View\View;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
//use Symfony\Component\Form\Extension\Core\Type\StringType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\AbstractType;
use App\Form\BlogType;
use App\Form\CommentType;
use JMS\Serializer\Annotation\Since;
use JMS\Serializer\Annotation\Until;
use JMS\Serializer\Annotation\ExclusionPolicy;
class ArticleController extends FOSRestController

{
    /**
     * Creates an Article resource
     * @Rest\Post("/articles/post")
     * @param Request $request
     * @return View
     */
    public function postArticle(Request $request): View
    {
        $form = $this->createForm(BlogType::class, null, [
            'csrf_protection' => false,
        ]);
        $form->submit($request->request->all());

        $blog = $form->getData();

        $em = $this->getDoctrine()->getManager();
        $em->persist($blog);
        $em->flush();

        // In case our POST was a success we need to return a 201 HTTP CREATED response
        return View::create($blog, Response::HTTP_CREATED);
  }
    /**
     * Creates an Article resource
     * @Rest\Post("/articles/post_comment")
     * @param Request $request
     * @return View
     */
    public function postComment(Request $request): View
    {
        $form = $this->createForm(CommentType::class, null, [
            'csrf_protection' => false,
        ]);
        $form->submit($request->request->all());

        $blog = $form->getData();

        $em = $this->getDoctrine()->getManager();
        $em->persist($blog);
        $em->flush();

        // In case our POST was a success we need to return a 201 HTTP CREATED response
        return View::create($blog, Response::HTTP_CREATED);
    }
    /**
     * Replaces Article resource
     * @Rest\Put("/articles/edit_article/{articleId}")
     */
    public function putArticle(int $articleId, Request $request): View
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('App:Blog')->find($articleId);
        $form = $this->createForm(BlogType::class, $article, [
            'csrf_protection' => false,
        ]);
        $form->submit($request->request->all());

        $article = $form->getData();

        $em = $this->getDoctrine()->getManager();
        $em->flush();

        // In case our POST was a success we need to return a 201 HTTP CREATED response
        return View::create($article, Response::HTTP_CREATED);
    }
    /**
     * Removes the Article resource
     * @Rest\Delete("/articles/delete_article/{articleId}")
     */
    public function deleteArticle(int $articleId): View
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('App:Blog')->find($articleId);
        $em->remove($article);
        $em->flush();
        // In case our DELETE was a success we need to return a 204 HTTP NO CONTENT response. The object is deleted.
        return View::create([], Response::HTTP_NO_CONTENT);
    }
    /**
     * Retrieves an Article resource
     * @Rest\Get("/articles/{articleId}")
     */
    public function getArticle(int $articleId):View
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('App:Blog')->find($articleId);
        // In case our GET was a success we need to return a 200 HTTP OK response with the request object
        return View::create($article, Response::HTTP_OK);
    }
    /**
     * Retrieves a collection of Article resource
     * @Rest\Get("/articles")
     */
    public function getArticles():View
    {
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('App:Blog')->findAll();
        return View::create($articles, Response::HTTP_OK);
    }
}