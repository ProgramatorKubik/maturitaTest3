<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SignNguyen
 *
 * @author Dancing Rain
 */
class Prihlaseni extends Nette\Application\UI\Form{
    public function __construct($parent, $name) {
        parent::__construct();

        $this->setAction($parent->link('Prihlaseni:spam'));
        
        $this->setMethod("formSubmitted");
        
        $this->addEmail('email', 'Email')
                ->setRequired(' je potreba vyplnit email')
                ->addRule(\Nette\Forms\Form::EMAIL, 'toto neni emailova adresa');
        
        $this->addSubmit('odeslat', 'Odeslat');
        
   
        
    }
}

