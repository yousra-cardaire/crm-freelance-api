<?php

namespace App\DataFixtures;

use App\Entity\Status;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StatusFixtures extends Fixture
{
    const STATUS = ["to do", "created", "pending", "paid"];

    public function load(ObjectManager $manager)
    {
        foreach(self::STATUS as $key => $value){
            $status = new Status();
            $status->setName($value);
            $this->addReference("status_$key", $status);

            $manager->persist($status);
        }

        $manager->flush();
    }
}
