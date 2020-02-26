<?php


namespace App\Controller;


use App\Form\BlockButtonType;
use App\Form\BlockType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlockController extends AbstractController
{
    /**
     * @Route("/block", name="block");
     */
    public function index() {
        $formBlock = $this->createForm(BlockType::class,null,['action' => $this->redirectToRoute('block')]);
        $formBlockButton = $this->createForm(BlockButtonType::class,null,['action' => $this->redirectToRoute('block')]);
        return $this->render('product/block.html.twig',['formBlock' => $formBlock->createView(), 'formBlockButton' => $formBlockButton->createView()]);
    }
}
