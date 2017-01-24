<?php

namespace Forum;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\ModuleManager\ModuleManager;
<<<<<<< HEAD
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

class Module {

    public function onBootstrap(MvcEvent $e) {
=======
<<<<<<< HEAD
=======
use Forum\Model\Projet;
use Forum\Model\ProjetTable;
use Forum\Model\Site;
use Forum\Model\SiteTable;
use Forum\Model\Bar;
use Forum\Model\BarTable;
>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
        $e->getApplication()->getServiceManager()->get('translator');
        $eventManager = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }
<<<<<<< HEAD

    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig() {
=======
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
<<<<<<< HEAD
    }  
=======
    }
   
    public function getServiceConfig()
    {
        return array(
            'factories' => array(                  
                'Forum\Model\SiteTable' =>  function($sm) {
                	$tableGateway = $sm->get('SiteTableGateway');
                	$table = new SiteTable($tableGateway);
                	return $table;
                },
                'SiteTableGateway' => function ($sm) {
                	$dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                	$resultSetPrototype = new ResultSet();
                	$resultSetPrototype->setArrayObjectPrototype(new Site());
                	return new TableGateway('Site', $dbAdapter, null, $resultSetPrototype);
                },
                'Forum\Model\ProjetTable' =>  function($sm) {
                    $tableGateway = $sm->get('ProjetTableGateway');
                    $table = new ProjetTable($tableGateway);
                    return $table;
                },
                'ProjetTableGateway' => function ($sm) {
                	$dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                	$resultSetPrototype = new ResultSet();
                	$resultSetPrototype->setArrayObjectPrototype(new Projet());
                	return new TableGateway('Categorie', $dbAdapter, null, $resultSetPrototype);
                },
                'Forum\Model\BarTable' =>  function($sm) {
                    $tableGateway = $sm->get('BarTableGateway');
                    $table = new BarTable($tableGateway);
                    return $table;
                },
                'BarTableGateway' => function ($sm) {
                	$dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                	$resultSetPrototype = new ResultSet();
                	$resultSetPrototype->setArrayObjectPrototype(new Bar());
                	return new TableGateway('SousCategorie', $dbAdapter, null, $resultSetPrototype);
                },
                
            ),
        );
    }   
>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf

    public function getAutoloaderConfig()
    {
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
<<<<<<< HEAD

}
=======
}
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
