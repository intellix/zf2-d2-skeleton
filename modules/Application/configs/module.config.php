<?php
return array(
    'bootstrap_class' => 'Application\Bootstrap',
    'layout'          => 'layouts/layout.phtml',
    'di'              => array(
        'instance' => array(
                    'doctrine-em' => array(
                'parameters' => array(
                    'conn' => array(
                        'driver'   => 'pdo_mysql',
                        'host'     => 'localhost',
                        'port'     => 3306,
                        'user'     => 'doctrineConsumer',
                        'password' => 'doctrineConsumer',
                        'dbname'   => 'doctrineConsumer'
                    ),
                    //'eventManager' => 'Doctrine\Common\EventManager'
                ),
            ),
            'doctrine-config' => array(
                'parameters' => array(
                    'entityPaths' => array(
                        'doctrine-consumer' => __DIR__ . '/../src/DoctrineConsumer/Entity',
                    )
                )
            ),
            'alias' => array(
                'index' => 'Application\Controller\IndexController',
                'error' => 'Application\Controller\ErrorController',
                'view'  => 'Zend\View\PhpRenderer',
            ),

            'Zend\View\HelperLoader' => array(
                'parameters' => array(
                    'map' => array(
                        'url' => 'Application\View\Helper\Url',
                    ),
                ),
            ),

            'Zend\View\HelperBroker' => array(
                'parameters' => array(
                    'loader' => 'Zend\View\HelperLoader',
                ),
            ),

            'Zend\View\PhpRenderer' => array(
                'parameters' => array(
                    'resolver' => 'Zend\View\TemplatePathStack',
                    'options'  => array(
                        'script_paths' => array(
                            'application' => __DIR__ . '/../views',
                        ),
                    ),
                    'broker' => 'Zend\View\HelperBroker',
                ),
            ),
        ),
    ),

    'routes' => array(
        'default' => array(
            'type'    => 'Zend\Mvc\Router\Http\Regex',
            'options' => array(
                'regex'    => '/(?P<controller>[^/]+)(/(?P<action>[^/]+)?)?',
                'spec'     => '/%controller%/%action%',
                'defaults' => array(
                    'controller' => 'error',
                    'action'     => 'index',
                ),
            ),
        ),
        'home' => array(
            'type' => 'Zend\Mvc\Router\Http\Literal',
            'options' => array(
                'route'    => '/',
                'defaults' => array(
                    'controller' => 'index',
                    'action'     => 'index',
                ),
            ),
        ),
    ),
);
