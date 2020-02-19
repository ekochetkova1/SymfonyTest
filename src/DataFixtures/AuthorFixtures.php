<?php

namespace App\DataFixtures;

use App\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\DataFixtures\BookFixtures;
use App\Entity\Book;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class AuthorFixtures extends Fixture /*implements DependentFixtureInterface*/
{
    public function load(ObjectManager $manager)
    {

        $author = new Author();
        $author->setName('Author Name ');

        $manager->persist($author);


        $manager->flush();
    }

}
