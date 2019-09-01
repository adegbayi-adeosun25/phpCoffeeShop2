<?php namespace App\Tests;
use App\Tests\AcceptanceTester;

class HomeCest
{
    public function homeContent(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('home');
    }

    public function homeLinkToAbout(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('about_new');
        $I->seeInCurrentUrl('/about_new');
        $I->see('about_new');
    }
}
