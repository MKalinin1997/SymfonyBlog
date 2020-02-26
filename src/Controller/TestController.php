<?php


namespace App\Controller;


use App\Form\TestType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index(Request $request)
    {
        $form = $this->createForm(TestType::class,null,  ['action' => $this->generateUrl('test')]);
        $form->handleRequest($request);
        return $this->render('product/test.html.twig',['form' => $form->createView()]);
    }
}