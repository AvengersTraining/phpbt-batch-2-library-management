<?php

return [
    'search' => ['id', 'name', 'role'],

    'gender' => [
        'male' => 1,
        'female' => 0,
    ],

    'role' => [
        'banned_user' => 1,
        'normal_user' => 2,
        'admin' => 3,
    ],

    'paginate' => 15,

    'email_verified' => [
        'verified' => 1,
        'unverified' => 0,
    ],

    'order_status' => [
        0 => [
            'text' => 'borrowed',
            'color' => 'success'
        ],
        1 => [
            'text' => 'returned',
            'color' => 'default']
        ,
        2 => [
            'text' => 'lost',
            'color' => 'danger'
        ],
        3 => [
            'text' => 'out_date',
            'color' => 'warning',
        ]
    ]
];
