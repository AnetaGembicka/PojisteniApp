<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Form;


final class HomePresenter extends BasePresenter
{
    public function actionDefault()
    {
        $this->template->pojistenci = $this->pojistenecModel->getData()->fetchAll();

    }


    public function createComponentPojistenecForm($name)
    {
        $form = new Form;
        $form->addText('jmeno', 'Jméno')->setRequired('Toto pole je poviné');
        $form->addText('prijmeni', 'Příjmení');
        $form->addText('telefon', 'Telefon');
        $form->addText('vek', 'Věk');
        $form->addSubmit('send', 'Uložit');
        $form->onSuccess[] = [$this, 'pojistenecFormSucceeded'];
        return $form;
    }

    public function PojistenecFormSucceeded(Form $form, $values)
    {
        $this->pojistenecModel->getData()->insert($values);
        $this->flashMessage('Pojištěnec založen.');
        $this->redirect('this');

    }
}
