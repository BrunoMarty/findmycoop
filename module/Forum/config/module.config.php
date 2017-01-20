<?php
<<<<<<< HEAD
namespace Forum;
=======

>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf
return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                  '__NAMESPACE__' => 'Forum\Controller',
                        'controller' => 'Index',
                        'action'     => 'index',
                    ),
                ),
            ),
<<<<<<< HEAD
            'membre' => array(
                'type'    => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/membre',
                    'defaults' => array(
//                        '__NAMESPACE__' => 'Forum\Controller',
                        'controller'    => 'Forum/Controller/Membre',
                        'action'        => 'membre',
                    ),
                ),
            ),
            'detail' => array(
                'type'    => 'segment',
                'options' => array(
                'route'    => '/membre/detail[/:id]',
                'constraints' => array(
                         'id'     => '[0-9]+',
                    
                     ),
                     'defaults' => array(
//                        '__NAMESPACE__' => 'Forum\Controller',
                        'controller'    => 'Forum/Controller/Detail',
                        'action'        => 'detail',
                    ),
                      ),
    ),
=======
>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf
            'projet' => array(
                'type'    => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/projet',
                    'defaults' => array(
//                        '__NAMESPACE__' => 'Forum\Controller',
                        'controller'    => 'Forum/Controller/Projet',
                        'action'        => 'projet',
                    ),
                ),
<<<<<<< HEAD
            ),

=======
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf
            'bar' => array(
                'type'    => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/bar',
                    'defaults' => array(
//                        '__NAMESPACE__' => 'Forum\Controller',
                        'controller'    => 'Forum/Controller/Bar',
                        'action'        => 'bar',
                    ),
                ),
<<<<<<< HEAD
            ),
            'event' => array(
                'type'    => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/event',
                    'defaults' => array(
//                        '__NAMESPACE__' => 'Forum\Controller',
                        'controller'    => 'Forum/Controller/Event',
                        'action'        => 'event',
                    ),
                ),
            ),
 
        ),
    ),
=======
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
 
>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf
    'service_manager' => array(
        'factories' => array(
            'translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',
        ),
    ),
<<<<<<< HEAD
    // Doctrine config
   'doctrine' => array(
       'driver' => array(
           __NAMESPACE__ . '_driver' => array(
               'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
               'cache' => 'array',
               'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
           ),
           'orm_default' => array(
               'drivers' => array(
                   __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
               )
           )
       )
   ),

=======
>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Forum\Controller\Index' => 'Forum\Controller\IndexController',
            'Forum\Controller\Projet' => 'Forum\Controller\ProjetController',
<<<<<<< HEAD
           'Forum\Controller\Membre' => 'Forum\Controller\MembreController',
            'Forum\Controller\Detail' => 'Forum\Controller\DetailController',
            'Forum\Controller\Bar' => 'Forum\Controller\BarController',
            'Forum\Controller\Event' => 'Forum\Controller\EventController',
           
=======
            'Forum\Controller\Bar' => 'Forum\Controller\BarController'
>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf
        ),
     
    ),
 
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'forum/index/index' => __DIR__ . '/../view/forum/index/index.phtml',
          
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml'
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);