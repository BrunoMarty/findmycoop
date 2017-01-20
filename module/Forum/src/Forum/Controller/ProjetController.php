<?php
 
namespace Forum\Controller;
 
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
 
class ProjetController extends AbstractActionController {

    
   public function projetAction() {
        $entityManager = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');              
        return new ViewModel(array(
             'projet' => $entityManager->getRepository('Forum\Entity\Categorie')->findAll(),
         ));
    }
}