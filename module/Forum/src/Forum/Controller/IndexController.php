<?php
 
namespace Forum\Controller;
 
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
 
class IndexController extends AbstractActionController {

    
   public function indexAction() {
        $entityManager = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');              
        return new ViewModel(array(
             'site' => $entityManager->getRepository('Forum\Entity\Site')->findAll(),
         ));
    }
 
    
}
