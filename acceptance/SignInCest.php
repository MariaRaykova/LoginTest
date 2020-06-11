<?php 

class SignInCest
{
    public function _before(Tester $I)
    {
    }
    public function _after(Tester $I)
    {
    }

    public function tryToTest(Tester $I)
    {

$I->amOnPage('/');
$I->wait(3);

$I->click(['name'=>'email']);
$I->fillField(['name'=>'email'],'mimi.raykova@gmail.com');
$I->wait(3);

$I->click(['name'=>'password']);
$I->fillField(['name'=>'password'], 'maria123');
$I->wait(3);

$I->click(['class'=>'btn']);
    }
}
