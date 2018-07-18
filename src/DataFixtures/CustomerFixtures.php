<?php

/*
 * This file is part of the barberia-API package.
 *
 * (c) Esteban Martin <esteban.martin.busto@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\DataFixtures;

use App\Model\Customer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CustomerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
            $customer = new Customer();
            $customer->setName('customer_' . ($i + 1));
            $customer->setGender(($i % 2) == 0);
            $manager->persist($customer);
        }

        $manager->flush();
    }
}