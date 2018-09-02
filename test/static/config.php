<?php

use Apprentice\Page;

return [
    'icon_dir' => __DIR__ . '/../icons',
    'code_dir' => __DIR__ . '/code',
    'templates_dir' => __DIR__ . '/templates',
    'output_dir' => '/tmp/apprentice_output',
    'files_dir' => __DIR__ . '/files',
    'pages' => [
        Page::create('index', 'index.phtml'),
        Page::create('test', null, 'test.php', [
            'title' => 'Test Title',
            'subtitle' => 'Test Subtitle',
            'description' => 'Test Description',
        ]),
    ],
];
