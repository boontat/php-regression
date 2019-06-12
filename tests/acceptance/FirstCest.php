<?php 

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Love beautiful code? We do too.');
        $I->wait(20);
        $I->click('Documentation');
        $I->wait(30);
    }

    /*
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Google');
    }
    */
}
