<?php

namespace App\DataFixtures;

use App\Entity\Profil;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Profilfixtures extends Fixture
{
    public const ADMIN_REFERENCE = 'ADMIN';
    public const APPRENANT_USER_REFERENCE = 'APPRENANT';
    public const CM_REFERENCE = 'CM';
    public const FORMATEUR_REFERENCE = 'FORMATEUR';

    public function load(ObjectManager $manager)
    {
        $profils = ["APPRENANT", "ADMIN", "FORMATEUR", "CM"];

        for ($i = 0; $i < count($profils); $i++) {
            $profil = new Profil();
            $profil->setArchive(0);
            $profil->setLibelle($profils[$i]);
            if ($profils[$i] === "APPRENANT") {
                $this->addReference(self::APPRENANT_USER_REFERENCE, $profil);
            } elseif ($profils[$i] === "FORMATEUR") {
                $this->addReference(self::FORMATEUR_REFERENCE, $profil);
            } elseif ($profils[$i] === "CM") {
                $this->addReference(self::CM_REFERENCE, $profil);
            }else{
                $this->addReference(self::ADMIN_REFERENCE, $profil);
            }
            $manager->persist($profil);
        }
        $manager->flush();
    }
}
