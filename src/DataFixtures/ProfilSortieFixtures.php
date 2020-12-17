<?php

namespace App\DataFixtures;

use App\Entity\Apprenant;
use App\Entity\ProfilSortie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProfilSortieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $profilsorties = ["Designer", "Full Stack", "CMS", "Intégrateur"];
        foreach ($profilsorties as $val) {
            $profilsortie = new ProfilSortie();
            $profilsortie->setLibelle($val);
            $manager->persist($profilsortie);
            $manager->flush();
        }
        $apprenants = $manager->getRepository(Apprenant::class)->findAll();

        foreach ($apprenants as $apprenant) {

            $ps = $manager->getRepository(ProfilSortie::class)->findAll();
            $id = rand(0, count($ps) - 1);
            $apprenant->addProfilSorty($ps[$id]);
            $ps[$id]->addApprenant($apprenant);

            $manager->persist($ps[$id]);
            $manager->flush();
        }
    }
}
