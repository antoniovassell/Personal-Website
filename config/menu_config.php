<?php
return [
    'Menu' => [
        'Admin' => [
            'header' => 'Admin Menu',
            'type' => 'default',
            'items' => [
                __('Dashboard') => [
                    'subItems' => [
                        __('General') => [
                            'url' => [
                                'action' => 'dashboard',
                                'controller' => 'posts'
                            ],
                            'icon' => 'plus'
                        ]
                    ]
                ],
                __('Blog') => [
                    'subItems' => [
                        __('All Posts') => [
                            'url' => [
                                'action' => 'index',
                                'controller' => 'posts'
                            ],
                            'icon' => 'plus'
                        ],
                        __('Published') => [
                            'url' => [
                                'action' => 'published',
                                'controller' => 'posts'
                            ],
                            'icon' => 'book'
                        ]
                    ]
                ],
                __('Messages') => [
                    'subItems' => [
                        __('All Messages') => [
                            'url' => [
                                'action' => 'index',
                                'controller' => 'messages'
                            ],
                            'icon' => 'plus'
                        ],
                        __('Unread') => [
                            'url' => [
                                'action' => 'unread',
                                'controller' => 'messages'
                            ],
                            'icon' => 'book'
                        ]
                    ]
                ],
                __('Settings') => [
                    'subItems' => [
                        __('Categories') => [
                            'url' => [
                                'action' => 'index',
                                'controller' => 'categories'
                            ],
                            'icon' => 'plus'
                        ],
                        __('Tags') => [
                            'url' => [
                                'action' => 'index',
                                'controller' => 'tags'
                            ],
                            'icon' => 'book'
                        ]
                    ]
                ]
            ]
        ]
    ]
];

