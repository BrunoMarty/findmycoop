<?php

namespace User\Controller;

use User\Form\UserForm;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class MembreController extends AbstractActionController {

    public function membreAction() {
        $entityManager = $this
                ->getServiceLocator()
                ->get('Doctrine\ORM\EntityManager');
        return new ViewModel(array(
            'membre' => $entityManager->getRepository('Forum\Entity\Membre')->findAll(),
        ));
    }

    public function detailAction() {
        $entityManager = $this
                ->getServiceLocator()
                ->get('Doctrine\ORM\EntityManager');
        $id = (int) $this->params()->fromRoute('id', 0);
        return new ViewModel(
                array(
            'detail' => $entityManager->getRepository('Forum\Entity\Membre')->find($id),
        ));
    }

    public function settingAction() {
        $entityManager = $this
                ->getServiceLocator()
                ->get('Doctrine\ORM\EntityManager');

        $id = (int) $this->params()->fromRoute('id', 0);
        $set = $entityManager->getRepository('Forum\Entity\Membre')->find($id);
        $viewData['set'] = $set;
        $form = new UserForm($entityManager, $set);
        $viewData['form'] = $form;
        return new ViewModel($viewData);
    }

}
