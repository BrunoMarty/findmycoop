<?php
 
namespace Forum\Controller;
 
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
 
class IndexController extends AbstractActionController {
<<<<<<< HEAD

    
   public function indexAction() {
        $entityManager = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');              
        return new ViewModel(array(
             'site' => $entityManager->getRepository('Forum\Entity\Site')->findAll(),
         ));
    }
 
    
}
=======
    
    protected $siteTable;
    
    public function indexAction()
     {
         return new ViewModel(array(
             'site' => $this->getSiteTable()->fetchAll(),
         ));
     }
     
    public function getSiteTable()
     {
         if (!$this->siteTable) {
             $sm = $this->getServiceLocator();
             $this->siteTable = $sm->get('Forum\Model\SiteTable');
         }
         return $this->siteTable;
     }
     
}
>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf
