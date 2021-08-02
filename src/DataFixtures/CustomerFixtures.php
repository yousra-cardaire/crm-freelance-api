<?php

namespace App\DataFixtures;

use App\Entity\Customer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CustomerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i=0 ; $i<10 ; $i++){
            $customer = new Customer();
            $customer 
            ->setFirstName("First name: $i")
            ->setLastName("Last name: $i")
            ->setEmail("email_".$i."@test.fr")
            ->setAddress("fake address n°$i")
            ->setCompanyName("fake company name n°$i");

            $invoice = $this->getReference("invoice_".rand(0,10));
            $customer->addInvoice($invoice);

            $manager->persist($invoice);
        }

        $manager->flush();
    }
}
