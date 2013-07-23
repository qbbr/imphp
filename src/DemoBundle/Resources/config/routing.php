<?php

return [
    'demo_index' => [
        'pattern' => '^/$',
        'controller' => 'DemoBundle:Demo:index'
    ],
    'demo_test' => [
        'pattern' => '^/hello/(?P<name>\w+)/((?P<surname>\w+)/)?$',
        'controller' => 'DemoBundle:Demo:hello'
    ],
    'demo_json' => [
        'pattern' => '^/json/(?P<id>\d+)/$',
        'controller' => 'DemoBundle:Demo:testJson'
    ]
];
