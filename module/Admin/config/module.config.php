<?php
return array(
    'router' => array(
    'routes' => array(
        'zfcadmin' => array(
            'child_routes' => array(
                'category' => array(
                    'type' => 'segment',
                    'options' => array(
                        'route' => '/category',
                       
                        'defaults' => array(
                            '__NAMESPACE__' => 'Admin\Controller',
                            'controller' => 'Category',
                            'action' => 'index',
                     
                        )
                    )
                   
                            )
                        )
                    )
                )
            ),
       
    

       'controllers' => array(
        'invokables' => array(
            'Admin\Controller\Category' => 'Admin\Controller\CategoryController',
        ),
     
    ),
      'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../../Forum/view/layout/layout.phtml',
            'admin/category/index' => __DIR__ . '/../view/admin/category/category.phtml',
          
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml'
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);