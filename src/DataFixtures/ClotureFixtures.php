<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Cloture;

class ClotureFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        //cloture EDEN 
        $cloture = new Cloture();
        $cloture->setNom("Panneau Eden droit");
        $cloture->setImage("img/test.jpg");
        $cloture->setDescription("
        Essence : Epicéa <br>
        Traitement : Classe 4 en autoclave <br>
        Garantie du traitement : 20 ans hors-sol et 15 ans en contact avec le sol <br>

        Composants : <br>
        Cadre : 46 x 68 mm <br>
        Remplissage : lamelles rabotées <br>

        Montage : <br>
        Type d’assemblage : pré-monté avec vis inox <br>

        Epaisseur: 46 mm <br>
        Longueur: 0,90 m <br>
        Hauteur	1800 mm
        "
        );
        $cloture->setCategorieID(1);
        $cloture->setReference("10020");
        $cloture->setCpt(0);
        $manager->persist($cloture);

        //cloture HELSINKI
        $cloture = new Cloture();
        $cloture->setNom("Panneau Helsinki droit");
        $cloture->setImage("img/test.jpg");
        $cloture->setDescription("
        Essence : Epicéa <br>
        Traitement : Classe 4 en autoclave <br>
        Garantie du traitement : 20 ans hors-sol et 15 ans en contact avec le sol <br>

        Composants : <br>
        Cadre : 46 x 68 mm <br>
        Remplissage : Lames bombées <br>

        Montage : <br>
        Type d’assemblage : pré-monté avec vis inox et lames assemblées à mi-bois <br>

        Epaisseur: 46 mm <br>
        Longueur: 0,90 m <br>
        Hauteur	1800 mm
        "
        );
        $cloture->setCategorieID(2);
        $cloture->setReference("10090");
        $cloture->setCpt(0);
        $manager->persist($cloture);

        //cloture HORIZON
        $cloture = new Cloture();
        $cloture->setNom("Panneau Horizon droit");
        $cloture->setImage("img/test.jpg");
        $cloture->setDescription("
        Essence : Epicéa <br>
        Traitement : Classe 4 en autoclave <br>
        Garantie du traitement : 20 ans hors-sol et 15 ans en contact avec le sol <br>

        Composants : <br>
        Cadre lamellé-collé : 43 x 68 mm <br>
        Etrésillons : 16 x 36 mm <br>
        Remplissage : plexiglass d’épaisseur 6 mm <br>

        Montage : <br>
        Type d’assemblage : pré-monté avec vis inox <br>

        Epaisseur: 43 mm <br>
        Longueur: 1,80 m <br>
        Hauteur	1800 mm
        "
        );
        $cloture->setCategorieID(3);
        $cloture->setReference("10010");
        $cloture->setCpt(0);
        $manager->persist($cloture);

        //cloture MIAMI
        $cloture = new Cloture();
        $cloture->setNom("Panneau Miami droit");
        $cloture->setImage("img/test.jpg");
        $cloture->setDescription("
        Essence : Epicéa <br>
        Traitement : Classe 4 en autoclave <br>
        Garantie du traitement : 20 ans hors-sol et 15 ans en contact avec le sol <br>

        Composants : <br>
        Cadre : 36 x 75 mm <br>
        Remplissage : Lames rabotées <br>

        Montage : <br>
        Type d’assemblage : pré-monté avec vis inox <br>

        Epaisseur: 75 mm <br>
        Longueur: 1,80 m <br>
        Hauteur	1800 mm
        "
        );
        $cloture->setCategorieID(4);
        $cloture->setReference("10030");
        $cloture->setCpt(0);
        $manager->persist($cloture);

        //cloture RIALTO
        $cloture = new Cloture();
        $cloture->setNom("Panneau Rialto droit");
        $cloture->setImage("img/test.jpg");
        $cloture->setDescription("
        Essence : Epicéa <br>
        Traitement : Classe 4 en autoclave <br>
        Garantie du traitement : 20 ans hors-sol et 15 ans en contact avec le sol <br>

        Composants : <br>
        Cadre : 46 x 68 mm <br>
        Remplissage : lamelles rabotées <br>

        Montage : <br>
        Type d’assemblage : pré-monté avec vis inox et lames assemblées à mi-bois <br>

        Epaisseur: 46 mm <br>
        Longueur: 0,90 m <br>
        Hauteur	1800 mm
        "
        );
        $cloture->setCategorieID(5);
        $cloture->setReference("10100");
        $cloture->setCpt(0);
        $manager->persist($cloture);

        //cloture RIVOLI
        $cloture = new Cloture();
        $cloture->setNom("Panneau Rivoli droit");
        $cloture->setImage("img/test.jpg");
        $cloture->setDescription("
        Essence : Epicéa <br>
        Traitement : Classe 4 en autoclave <br>
        Garantie du traitement : 20 ans hors-sol et 15 ans en contact avec le sol <br>

        Composants : <br> 
        Cadre : 46 x 46 mm <br>
        Etrésillons : 46 x 46 mm <br>
        Remplissage : Contre plaqué de couleur sombre <br>

        Montage : <br>
        Type d’assemblage : pré-monté avec vis inox <br>

        Epaisseur: 46 mm <br>
        Longueur: 1,80 m <br>
        Hauteur	1800 mm
        "
        );
        $cloture->setCategorieID(6);
        $cloture->setReference("10050");
        $cloture->setCpt(0);
        $manager->persist($cloture);

        //cloture SANCHEZ
        $cloture = new Cloture();
        $cloture->setNom("Panneau Sanchez droit");
        $cloture->setImage("img/test.jpg");
        $cloture->setDescription("
        Essence : Epicéa <br>
        Traitement : Classe 4 en autoclave <br>
        Garantie du traitement : 20 ans hors-sol et 15 ans en contact avec le sol <br>
        
        Composants : <br>
        Cadre : 46 x 46 mm <br>
        Remplissage : lamelles rabotées superposées <br>
        
        Montage : <br>
        Type d’assemblage : pré-monté avec vis inox et lames assemblées à mi-bois <br>
        
        Epaisseur: 46 mm <br>
        Longueur: 0,90 m <br>
        Hauteur	1800 mm <br>
        "
        );
        $cloture->setCategorieID(7);
        $cloture->setReference("10080");
        $cloture->setCpt(0);
        $manager->persist($cloture);

        //cloture SHANGAI
        $cloture = new Cloture();
        $cloture->setNom("Panneau Shanghai droit");
        $cloture->setImage("img/test.jpg");
        $cloture->setDescription("
        Essence : Epicéa <br>
        Traitement : Classe 4 en autoclave <br>
        Garantie du traitement : 20 ans hors-sol et 15 ans en contact avec le sol <br>
        
        Composants : <br>
        Cadre : 46 x 68 mm <br>
        Remplissage : clins bombées <br>
        Raidisseurs : lames bombées <br>
         
        Montage : <br>
        Type d’assemblage : pré-monté avec vis inox <br>
        
        Epaisseur: 46 mm <br>
        Longueur: 0,90 m <br>
        Hauteur	1800 mm
        "
        );
        $cloture->setCategorieID(8);
        $cloture->setReference("10040");
        $cloture->setCpt(0);
        $manager->persist($cloture);

        //cloture VENISE
        $cloture = new Cloture();
        $cloture->setNom("Panneau Venise droit");
        $cloture->setImage("img/test.jpg");
        $cloture->setDescription("
        Essence : Epicéa <br>
        Traitement : Classe 4 en autoclave <br> 
        Garantie du traitement : 20 ans hors-sol et 15 ans en contact avec le sol <br>
        
        Composants : <br>
        Cadre : 46 x 68 mm <br>
        Remplissage : lamelles rabotées <br>
        
        Montage : <br>
        Type d’assemblage : pré-monté avec vis inox et lames assemblées à mi-bois <br>
        
        Epaisseur: 46 mm <br>
        Longueur: 0,90 m <br>
        Hauteur	1800 mm
        "
        );
        $cloture->setCategorieID(9);
        $cloture->setReference("10060");
        $cloture->setCpt(0);
        $manager->persist($cloture);

        //ACCESSOIRES
        $cloture = new Cloture();
        $cloture->setNom("Support de poteaux à fixer ");
        $cloture->setImage("img/test.jpg");
        $cloture->setDescription("
        En acier galvanisé <br>
        Dimensions: 90x90mm <br>
        Largeur de la base 150mm
        "
        );
        $cloture->setCategorieID(10);
        $cloture->setReference("50010");
        $cloture->setCpt(0);
        $manager->persist($cloture);

        $manager->flush();
    }
}
