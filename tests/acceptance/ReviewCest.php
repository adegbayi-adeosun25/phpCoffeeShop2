<?php namespace App\Tests;
use App\Tests\AcceptanceTester;

class ReviewCest
{
    public function tryToTest(AcceptanceTester $I)
    {


        // --- expect 1 in DB from fixturs
        $expectedCount = 1;
        $users = $I->grabEntitiesFromRepository('App\Entity\Review');
        $numReviews = count($users);
// assert
        $I->assertEquals($expectedCount, $numReviews);
// --- create new recipe via FORM
// title suffix RANDOM numbner: 'Costa<randNum>'
        $randomNumber = rand(1,100);
        $reviewsName = 'Costa' . $randomNumber;


        $I->amOnPage('/reviews/new');
        $I->fillField('#reviews_name', 'Costa');
        $I->fillField('#reviews_description', '4 stars. Amazing cafe with great and friendly staff, cleanliness is top notch');
        $I->click('Save');

        // ---- check added to repository
        $I->seeInRepository('App\Entity\Recipe', [
            'title' => $reviewsName
        ]);
// --- now should be 2 in DB
        $expectedCount = 2;
        $users = $I->grabEntitiesFromRepository('App\Entity\Recipe');
        $numReviews = count($users);
// assert
        $I->assertEquals($expectedCount, $numReviews);
    }

}
