<?php

return array(
    'router' => array(
        'routes' => array(
            'membre' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/membre',
                    'defaults' => array(
//                        '__NAMESPACE__' => 'Forum\Controller',
                        'controller' => 'User/Controller/Membre',
                        'action' => 'membre',
                    ),
                ),
            ),
            'detail' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/membre/detail[/:id]',
                    'constraints' => array(
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
//                        '__NAMESPACE__' => 'Forum\Controller',
                        'controller' => 'User/Controller/Membre',
                        'action' => 'detail',
                    ),
                ),
            ),
            'user' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/membre/setting[/:id]',
                    'constraints' => array(
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'User\Controller\Membre',
                        'action' => 'setting',
                    ),
                ),
            ),
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'User\Controller\Membre' => 'User\Controller\MembreController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../../Forum/view/layout/layout.phtml',
            'user/membre/membre' => __DIR__ . '/../view/user/membre/membre.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml'
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
