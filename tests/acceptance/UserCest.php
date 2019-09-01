<?php namespace App\Tests;
use App\Tests\AcceptanceTester;

class UserCest
{
    public function testUsersInDb(AcceptanceTester $I)
    {
        $I->seeInRepository('App\Entity\User', [
            'username' => 'user'
        ]);
        $I->seeInRepository('App\Entity\User', [
            'username' => 'admin'
        ]);
        $I->seeInRepository('App\Entity\User', [
            'username' => 'matt'
        ]);
    }

    public function testAddToDatabase(AcceptanceTester $I)
    {
        $I->haveInRepository('App\Entity\User', [
            'username' => 'userTEMP',
            'password' => 'sdf',
            'roles' => ['ROLE_USER']
        ]);
        $I->seeInRepository('App\Entity\User', [
            'username' => 'userTEMP'
        ]);
    }
    public function testTEMPNoLongerInDatabase(AcceptanceTester $I)
    {
        $I->dontSeeInRepository('App\Entity\User', [
            'username' => 'userTEMP'
        ]);
    }

}
