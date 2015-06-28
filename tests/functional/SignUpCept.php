<?php 
$I = new FunctionalTester($scenario);

$I->am('a guest');

$I->wantTo('sign up for an account');

$I->amOnPage('/auth/register');



$I->fillField('email', 'johndoe@gmail.com');

$I->fillField('name', 'John Doe');

$I->fillField('password', 'sudhir');

$I->fillField('password_confirmation', 'sudhir');

$I->click('Sign Up');

$I->seeCurrentUrlEquals('/home');

$I->seeRecord('users', array('email' => 'johndoe@gmail.com'));

$I->see('You\'re logged in.');
