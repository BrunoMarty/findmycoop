<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
 
namespace Forum\Controller;
 
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
 
class BarController extends AbstractActionController {

    
   public function barAction() {
        $entityManager = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');              
        return new ViewModel(array(
<<<<<<< HEAD
             'bar' => $entityManager->getRepository('Forum\Entity\Categorie')->findAll(),
=======
             'bar' => $entityManager->getRepository('Forum\Entity\Souscategorie')->findAll(),
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
         ));
    }
 
    
}
<<<<<<< HEAD
=======
=======
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
>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
