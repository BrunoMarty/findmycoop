<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
 
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
<<<<<<< HEAD
=======
=======
namespace Forum\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ProjetController extends AbstractActionController
{
    protected $projetTable;


    public function setProjetTable($projet)
    {
    	$this->projetTable = $projet;
    }
        public function projetAction()
    {
           return new ViewModel(array(
             'projet' => $this->getProjetTable()->fetchAll(),
         ));
    }
        public function getProjetTable()
     {
         if (!$this->projetTable) {
             $sm = $this->getServiceLocator();
             $this->projetTable = $sm->get('Forum\Model\ProjetTable');
         }
         return $this->projetTable;
     }


    public function listAction()
    {
        $id_projet = $this->params()->fromRoute('id', null);

        if (!is_null($id_projet)) {
            $projet = $this->projetTable->getProjet($id_projet);
    
            return new ViewModel(
                array(
                    'projet' => $projet,
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
>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
}