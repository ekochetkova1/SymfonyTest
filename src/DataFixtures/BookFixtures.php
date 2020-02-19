<?php

namespace App\DataFixtures;

use App\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Book;


class BookFixtures extends Fixture
{
    public const AUTHOR_REFERENCE = 'author-book';

    public function load(ObjectManager $manager)
    {

        $author2 = new Author();
        $author2->setName('Author Name 2');

        $manager->persist($author2);
        $manager->flush();

        for ($i=1; $i<4; $i++) {
            $book = new Book();
            $book->setTitle('Lord of the Ring ' . $i);

            $book->setAuthor($author2);
            $manager->persist($book);
            $manager->flush();

        }

        $author3 = new Author();
        $author3->setName('Author Name 3');

        $manager->persist($author3);
        $manager->flush();

        for ($i=1; $i<8; $i++) {
            $book = new Book();
            $book->setTitle('Harry Potter ' . $i);

            $book->setAuthor($author3);
            $manager->persist($book);
            $manager->flush();

        }


    }
}
