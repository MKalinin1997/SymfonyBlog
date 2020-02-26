<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RecetteController extends AbstractController
{
//    /**
//     * @Route("/new", name="recette_new", methods={"GET","POST"})
//     */
//    public function new(Request $request): Response
//    {
//        $recette = new Recette();
//        $sousRecette = new SousRecette();
//        $ustensile = new Ustensile();
//        $ingredient = new Ingredient();
//        $etape = new Etape();
//
//        $sousRecette->addIngredient($ingredient);
//        $sousRecette->addEtape($etape);
//        $sousRecette->addUstensile($ustensile);
//        $recette->addSousRecette($sousRecette);
//
//        $form = $this->createForm(RecetteType::class, $recette);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            dump($form);
//            dump($recette);
//            $entityManager = $this->getDoctrine()->getManager();
//            $entityManager->persist($recette);
//            $entityManager->flush();
//
//            return $this->redirectToRoute('recette_index');
//        }
//
//        return $this->render('recette/new.html.twig', [
//            'recette' => $recette,
//            'formRecette' => $form->createView(),
//        ]);
//    }
}