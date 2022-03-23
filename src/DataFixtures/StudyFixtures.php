<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Study;

class StudyFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $name  = "Nom Test";
        $sponsor = "Sponsor Test";
        $lastActivity = new \DateTime('now');
        for ($i = 1; $i <= 20; $i++) {
            $study = new Study();

            $study->setName($name . $i);
            $study->setSponsor($sponsor . $i);
            $study->setLastActivity($lastActivity);

            $manager->persist($study);
        }
        $manager->flush();
    }
}
