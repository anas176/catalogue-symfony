<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Categoriee;

class CategFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $categorie = new Categoriee();
        $categorie->setCateg(1);
        $categorie->setNom("Panneau eden");
        $manager->persist($categorie);

        $categorie = new Categoriee();
        $categorie->setCateg(2);
        $categorie->setNom("Panneau helsinki");
        $manager->persist($categorie);

        $categorie = new Categoriee();
        $categorie->setCateg(3);
        $categorie->setNom("Panneau horizon");
        $manager->persist($categorie);

        $categorie = new Categoriee();
        $categorie->setCateg(4);
        $categorie->setNom("Panneau miami");
        $manager->persist($categorie);

        $categorie = new Categoriee();
        $categorie->setCateg(5);
        $categorie->setNom("Panneau rialto");
        $manager->persist($categorie);

        $categorie = new Categoriee();
        $categorie->setCateg(6);
        $categorie->setNom("Panneau rivoli");
        $manager->persist($categorie);

        $categorie = new Categoriee();
        $categorie->setCateg(7);
        $categorie->setNom("Panneau sanchez");
        $manager->persist($categorie);

        $categorie = new Categoriee();
        $categorie->setCateg(8);
        $categorie->setNom("Panneau shanghai");
        $manager->persist($categorie);

        $categorie = new Categoriee();
        $categorie->setCateg(9);
        $categorie->setNom("Panneau venise");
        $manager->persist($categorie);

        $categorie = new Categoriee();
        $categorie->setCateg(10);
        $categorie->setNom("accessoires");
        $manager->persist($categorie);

        $manager->flush();
    }
}
