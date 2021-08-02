<?php

namespace App\DataFixtures;

use App\Entity\Invoice;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class InvoiceFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i=0 ; $i<10 ; $i++){
            $invoice = new Invoice();
            $invoice 
            ->setAmount(rand(100,100)."euros")
            ->setDeadline("A payer avant le: XX/XX/20XX ");

            $status = $this->getReference("status_".rand(0,4));
            $invoice->setStatus($status);

            $manager->persist($invoice);
        }

        $manager->flush();
    }
}
