<?php
 
namespace Forum\Controller;
 
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
 
class EventController extends AbstractActionController {

    
   public function eventAction() {
        $entityManager = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');              
        return new ViewModel(array(
             'event' => $entityManager->getRepository('Forum\Entity\Event')->findAll(),
         ));
    }
}