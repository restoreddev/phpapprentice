<?php

use Apprentice\Page;

return [
    'icon_dir' => __DIR__ . '/../icons',
    'chapter_dir' => __DIR__ . '/chapter',
    'templates_dir' => __DIR__ . '/templates',
    'output_dir' => '/tmp/apprentice_output',
    'files_dir' => __DIR__ . '/files',
    'pages' => [
        Page::create('index', null, [], 'index.phtml'),
        Page::create('test', 'test.md', [
            'title' => 'Test Title',
            'subtitle' => 'Test Subtitle',
            'description' => 'Test Description',
        ]),
    ],
];
