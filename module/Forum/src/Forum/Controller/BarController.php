<?php
namespace Forum\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BarController extends AbstractActionController
{
    protected $barTable;


    public function setBarTable($bar)
    {
    	$this->barTable = $bar;
    }
        public function barAction()
    {
           return new ViewModel(array(
             'bar' => $this->getBarTable()->fetchAll(),
         ));
    }
        public function getBarTable()
     {
         if (!$this->barTable) {
             $sm = $this->getServiceLocator();
             $this->barTable = $sm->get('Forum\Model\BarTable');
         }
         return $this->barTable;
     }


    public function listAction()
    {
        $id_bar = $this->params()->fromRoute('id', null);

        if (!is_null($id_bar)) {
            $bar = $this->barTable->getBar($id_bar);
    
            return new ViewModel(
                array(
                    'bar' => $bar,
                )
            );
        } else {
            $this->getResponse()->setStatusCode(404);
            return;
        }
    }
    
    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
}