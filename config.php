<?php

return [
    'compiler' => [
        'css' => [
            'components/font-awesome' => [
                'scss/*.scss' => 'lightning.css',
            ],
        ],
        'copy' => [
            'components/font-awesome' => [
                'webfonts/*' => 'fonts/font-awesome',
            ],
        ],
        'sass' => [
            'vars' => [
                '$fa-font-path' => '/fonts/font-awesome',
            ],
            'includes' => [
                'fontawesome' => 'vendor/components/font-awesome',
            ],
        ],
    ],
];
