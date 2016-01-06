<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'ApiRest\Controller\ApiRest' => 'ApiRest\Controller\ApiRestController',
        ),
    ),

    // The following section is new` and should be added to your file
    'router' => array(
        'routes' => array(
            'api-rest' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/api-rest[/:model][/:id]',
                    'constraints' => array(
                        'model'     => '[a-zA-Z][a-zA-Z0-9_-|]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'ApiRest\Controller\ApiRest',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
    'zendexperts_zedb' => array(
        'adapter' => array(
            'driver' => 'Pdo_Mysql',
            'charset' => 'UTF8',
            'database' => 'citrus_gotas',
            'username' => 'citrus',
            'password' => 'XquyyJGpGLFKrTZN'
        ),
        'models' => array(
            'ApiRest\Model\Table\Tasks' => array(
                'tableName' => 'mod_Products_item',
                'entityClass' => 'ApiRest\Entity\Table',
            ),
            'ApiRest\Model\View\Tasks' => array(
                'tableName' => 'Crm_Model_View_Task',
                'entityClass' => 'ApiRest\Entity\Table',
            ),            
        ),
    ),
);