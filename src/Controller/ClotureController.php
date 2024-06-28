<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Cloture;
use App\Entity\Categorie;


class ClotureController extends AbstractController
{
    /**
     * @Route("/", name="cloture")
     */
    public function index()
    {
        return $this->render('cloture/index.html.twig', [
            'controller_name' => 'ClotureController',
        ]);
    }

    /**
     * @Route("/catalogue", name="catalogue")
     */
    public function catalogue()
    {
        /**
         * PAGE CATALOGUE
         */
        $repo = $this->getDoctrine()->getRepository(Cloture::class);
        $repo2 = $this->getDoctrine()->getRepository(Categorie::class);
        $clotures = $repo->findAll();
        $categories = $repo2->findAll();

        return $this->render('cloture/catalogue.html.twig', [
            'clotures' => $clotures ,
            'categories' => $categories    
        ]);
    }


    /**
     * @Route("/choix{categorie}", name="idCategorie")
     */
    public function choix($categorie)
    {
        /**
         * AFFICHE LA PAGE EN FONCTION DE LA CATEGORIE SELECTIONNEE
         */
        $repo = $this->getDoctrine()->getRepository(Cloture::class);
        $repo2 = $this->getDoctrine()->getRepository(Categorie::class);
        $clotures = $repo->findBycategorieID($categorie);
        $categories = $repo2->findAll();

        return $this->render('cloture/choix.html.twig', [
            'clotures' => $clotures,
            'categories' => $categories,
        ]);
    }


    /**
     * @Route("/article{num}", name="idArticle")
     */
    public function article($num)
    {
        $categ = $this->getDoctrine()->getRepository(Cloture::class);
        $repo = $this->getDoctrine()->getRepository(Cloture::class); 
        $clotures = $repo->find($num);
        $categorie=$categ->findAll();
        

       
        $manager = $this->getDoctrine()->getManager();
        $compteur = $clotures->Compteur();
        $compteur++;
        $clotures->Compteur($compteur);
        $manager->flush();

        return $this->render('cloture/article.html.twig', [
            'controler_name' => 'ClotureController',
            'clotures' => $clotures,
            'categorie'=>$categorie

        ]);
    }

    /**
     * @Route("/tendance", name="tendance")
     */
    public function tendance()
    {
        
        $repo= $this->getDoctrine()->getRepository(Cloture::class);
        $clotures = $repo->findBy(array(), array('Compteur' => 'DESC'), 5);

        return $this->render('cloture/tendance.html.twig', [
            'clotures' => $clotures
        ]);
    }
}
