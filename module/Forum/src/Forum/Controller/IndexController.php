<?php
 
namespace Forum\Controller;
 
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
 
class IndexController extends AbstractActionController {
    
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