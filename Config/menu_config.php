<?php
return [
    'Menu' => [
        'Admin' => [
            'header' => 'Admin Menu',
            'type' => 'default',
            'items' => [
                __('Posts') => [
                    'subItems' => [
                        __('Add') => [
                            'url' => [
                                'action' => 'add',
                                'controller' => 'posts'
                            ],
                            'icon' => 'plus'
                        ]
                    ]
                ]
            ]
        ]
    ]
];

