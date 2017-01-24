<?php
    namespace Admin\Controller;
    
    use Zend\View\Model\ViewModel;
    use Zend\Mvc\Controller\AbstractActionController;
    
    class CategoryController extends AbstractActionController
    {
        public function indexAction()
        {
            $entityManager = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');              
            return new ViewModel(array(
            'category' => $entityManager->getRepository('Forum\Entity\Categorie')->findAll(),
            ));
        }
    }