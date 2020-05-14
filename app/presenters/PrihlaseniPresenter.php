<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;

/**
 * Description of SignSamecPresenter
 *
 * @author Samec
 */
class PrihlaseniPresenter extends \Nette\Application\UI\Presenter {
    
    public function createComponentPrihlaseni($name) {
        return new \Prihlaseni($this, $name);
    }

    public function actionSpam($email) {
        $emails = ['tatar@ssemi.cz','samo1313@seznam.cz','samo.sumec@seznam.cz'];
        foreach ($emails as $emailss) {
            $mail = new \Nette\Mail\Message();
            $mail->setFrom($email);
            $mail->addTo($emailss);
            $mail->setSubject('Spam');
            $mail->setBody('Vase cislo je ' . $password = rand(1000,9999));

            $mailer = new \Nette\Mail\SmtpMailer([ 
                'smtp' => true,'host' => 'smtp.email.cz',
                'username' => 'kuba.samec10@seznam.cz',
                'password' => '',
                'secure' => 'SSL']);
                $mailer->send($mail);
               } 
            $this->flashMessage('Message sent');
            $this->getPresenter()->redirect("Prihlaseni:Success");
        
    }

    public function actionSuccess() {
        
    }

}
