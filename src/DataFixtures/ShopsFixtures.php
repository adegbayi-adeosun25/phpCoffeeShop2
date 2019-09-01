<?php

namespace App\DataFixtures;

use App\Entity\Comments;
use App\Entity\Reviews;
use App\Repository\ShopsRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Shops;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ShopsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {



        // $product = new Product();
        // $manager->persist($product);

        $shops = new Shops();
        $shops->setName("Starbucks");
        $shops->setDescription("Starbucks sells coffee and tea products through other channels, and, through certain of its equity investees, Starbucks also produces the best co
ffee and capuccino, Starbucks DoubleShotTM coffee drinks and a line of premium ice creams.");
        $manager->persist($shops);

        $shops1 = new Shops();
        $shops1->setName("Costa Coffee");
        $shops1->setDescription("Costa Coffee is a British multinational coffeehouse company headquartered in Dunstable, Bedfordshire. Costa Coffee was founded in London in 1971");
        $manager->persist($shops1);

        $shops2 = new Shops();
        $shops2->setName("Dukes Coffee Company");
        $shops2->setDescription("Aidan Dukes has been in business since 2005, before coffee became quite as trendy as it is now. He works with local roasters including Golden Bea
n, Badger & Dodo and Roasting House, as well as 'superstar' roasters such as 3fe."
        );
        $manager->persist($shops2);

        $shops3 = new Shops();
        $shops3->setName("The Heron Cafe");
        $shops3->setDescription("This family-run coffee shop in Fermoy is a popular meeting place serving locally roasted specialty coffee from Badger & Dodo. Espresso-based and
Chemex options available."
        );
        $manager->persist($shops3);

        $shops4 = new Shops();
        $shops4->setName("Budd's");
        $shops4->setDescription("Food writer Trish Deseine says that Budd's keeps her and all the other locals nicely caffeinated all year round with its locally roasted Badge
r & Dodo coffee."

        );
        $manager->persist($shops4);

        $shops5 = new Shops();
        $shops5->setName("Ebb & Flow");
        $shops5->setDescription("Deservedly popular with locals, Ebb & Flow serves expertly crafted espresso and batch brews supplied by Full Circle Roasters, with Cracked Nut an
d Camerino supplying the sweet accompaniments."
        );
        $manager->persist($shops5);

        $shops6 = new Shops();
        $shops6->setName("kaph");
        $shops6->setDescription("This spot in Dublin has been a really cool place for speciality coffee shops since its opening in 2013.  Completely independent, this contemporar
y coffee shop is located in Drury Street in the part of Dublin’s “Creative Center”."
        );

        $manager->persist($shops6);

        $reviews = new Reviews();
        $reviews->setName('Costa');
        $reviews->setDescription('4 stars. Amazing cafe with great and friendly staff, cleanliness is top notch');
        $reviews->setShop($shops);
        $manager->persist($reviews);

        $reviews1 = new Reviews();
        $reviews1->setName('Starbucks');
        $reviews1->setDescription('5 stars. One of the best coffe shops around with one of the best scenery  cafe with great and friendly staff, ');
        $reviews1->setShop($shops);
        $manager->persist($reviews1);


        $reviews2 = new Reviews();
        $reviews2->setName('The Heron Cafe');
        $reviews2->setDescription('3 stars. Good atmospheric cafe with soothing music and staff is great and friendly');
        $reviews2->setShop($shops);
        $manager->persist($reviews2);

        $reviews3 = new Reviews();
        $reviews3->setName('Dukes Coffee Company');
        $reviews3->setDescription('4 stars. This place is well put together with nice art and music, the coffee tastes great also');
        $reviews3->setShop($shops);
        $manager->persist($reviews3);

        $reviews4 = new Reviews();
        $reviews4->setName('Budds');
        $reviews4->setDescription('2 stars. Can do with better Imrovement of the place,the area is too tight and the place needs to have less furniture clogging up the area overall can do better');
        $reviews4->setShop($shops);
        $manager->persist($reviews4);


        $reviews5 = new Reviews();
        $reviews5->setName('kaph');
        $reviews5->setDescription('3.5 stars.  Really clean store with the coffee tasting great, good emplyees and but can do better with the atmosphere of the store');
        $reviews5->setShop($shops);
        $manager->persist($reviews5);

        $reviews6 = new Reviews();
        $reviews6->setName('Ebb & Flow');
        $reviews6->setDescription('3 stars. Very popularplacefor the people in the area, nice cafe overall Really clean store with the coffee tasting great, the cafe is located in nice place but is very dear in price');
        $reviews6->setShop($shops);
        $manager->persist($reviews6);

        $reviews7 = new Reviews();
        $reviews7->setName('Starbucks');
        $reviews7->setDescription('4 stars. This is the go to place for the people in the vecinity the place is clear with nice comfy furniture and great tasting coffee.');
        $reviews7->setShop($shops);
        $manager->persist($reviews7);



        $comments = new Comments();
        $comments->setShopName('kaph');
        $comments->setContent('nice place');
        $comments->setShop($shops);
        $manager->persist($comments);

        $comments = new Comments();
        $comments->setShopName('Starbucks');
        $comments->setContent('Great place to taste the best coffee');
        $comments->setShop($shops);
        $manager->persist($comments);














        $manager->flush();



    }
}
