<?php
 
namespace Forum\Controller;
 
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
 
class BarController extends AbstractActionController {

    
   public function barAction() {
        $entityManager = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');              
        return new ViewModel(array(
             'bar' => $entityManager->getRepository('Forum\Entity\Souscategorie')->findAll(),
         ));
    }
 
    
}
