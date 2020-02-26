<?php


namespace App\Controller;


use App\Entity\Flag;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FlagController extends AbstractController
{
    /**
     * @Route("/flag", name="flag")
     */
    public function index() {
        $em = $this->getDoctrine()->getManager();
        $displaySwitch = $em->getRepository(Flag::class)->findBy(['displaySwitch' => true]);
        return $this->render('flag.html.twig',['displaySwitch' => $displaySwitch]);
    }
}
