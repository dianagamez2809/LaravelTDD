<?php
$I = new WebGuy($scenario);
$I->wantTo('verificar que la ruta home funciona');
$I->amOnPage('/');
$I->see('Home');
