<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Filiere;
use App\Entity\Livre;
use App\Entity\Stock;
use App\Entity\User;
use App\Form\LivreSearchType;
use App\Form\StockSearchType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="search", methods={"GET", "POST"})
     */
    public function index(): Response
    {
        return $this->render('search/index.html.twig', [
            'controller_name' => 'SearchController',
        ]);
    }

    /**
     * @Route("/search_livres", name="app_searchLivre", methods={"GET", "POST"})
     * @param Request $request
     * @return Response
     */
    public function rechercheLivres(Request $request)
    {
        $em = $this->getDoctrine()->getManager();



        $form = $this->createForm(LivreSearchType::class);
        $form->handleRequest($request);


        if ($form->isSubmitted()) {
            $search = $request->get('livre_search');
            $criteres = [];
            if($search['auteur']){
                $criteres['auteur'] = $search['auteur'];
            }

            if($search['titre_livre']){
                $criteres['titre_livre'] = $search['titre_livre'];
            }
            $categorie= $em->getRepository(Categorie::class)->find($search['categorie']);
            $filiere= $em->getRepository(Filiere::class)->find($search['filiere']);
            $criteres['categorie'] = $categorie;
            $criteres['filiere'] = $filiere;
            $livres= $em->getRepository(Livre::class)->findBy($criteres);



            return $this->render('search/resultat.html.twig', [
                'livres' => $livres,
            ]);

        }




        return $this->render('search/livre.html.twig', [
            'searchForm' => $form->createView(),

        ]);
    }

    /**
     * Matches /recherche
     * @Route("/recherche", name="app_recherche", methods={"GET", "POST"})
     * @param Request $request
     * @return Response
     */
    public function recherche(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $form = $this->createForm(StockSearchType::class);
        $form->handleRequest($request);

        $stock = $em->getRepository(Stock::class);

        if ($form->isSubmitted()) {

            $stock = $form->get('stocks')->getData();
            $stock = $stock->getId();
            return $this->redirectToRoute('app_resultat', [
                'stock' => $stock,
            ]);

        }
        return $this->render('search/stock.html.twig', [
            'searchForm' => $form->createView(),

        ]);
    }



}
