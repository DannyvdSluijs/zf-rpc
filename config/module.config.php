<?php
return array(
    'zf-rpc' => array(
        // Array of Controller service name / configuration
        //
        // Configuration should include:
        // - http_methods: allowed HTTP methods
        // - route_name: name of route that will match this endpoint
        //
        // Configuration may include:
        // - callable: the PHP callable to invoke; only necessary if not
        //   using a standard ZF2 Zend\Stdlib\DispatchableInterface or 
        //   Zend\Mvc\Controller implementation.
        //
        // Example:
        //
        //   'Api\LoginController' => array(
        //       'http_options' => array('POST'),
        //       'route_name'   => 'api-login',
        //       'callable'     => 'Api\Controller\Login::process',
        //   ),
    ),
    'controllers' => array(
        'abstract_factories' => array(
            'ZF\Rpc\Factory\RpcControllerFactory',
        ),
    ),
);
