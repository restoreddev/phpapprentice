<?php

use Apprentice\Page;

return [
    'icon_dir' => __DIR__ . '/assets/icons',
    'code_dir' => __DIR__ . '/code',
    'templates_dir' => __DIR__ . '/assets/templates',
    'output_dir' => __DIR__ . '/.build',
    'pages' => [
        Page::create('index', 'index.phtml'),
        Page::create('credits', 'credits.phtml'),
        Page::create('basics', null, 'basics.php', [
            'title' => 'Basics',
            'subtitle' => 'Getting started',
            'description' => 'Let us get started with the basics.',
            'next' => 'variables',
        ]),
        Page::create('variables', null, 'variables.php', [
            'title' => 'Variables',
            'subtitle' => 'The building blocks of PHP',
            'description' => '',
            'previous' => 'basics',
            'next' => 'arithmetic',
        ]),
        Page::create('arithmetic', null, 'arithmetic.php', [
            'title' => 'Arithmetic',
            'subtitle' => 'Doing math like a pro',
            'description' => '',
            'previous' => 'variables',
            'next' => 'comparisons',
        ]),
        Page::create('comparisons', null, 'comparisons.php', [
            'title' => 'Comparisons',
            'subtitle' => 'Equality checking',
            'description' => '',
            'previous' => 'arithmetic',
            'next' => 'boolean-logic',
        ]),
        Page::create('boolean-logic', null, 'boolean-logic.php', [
            'title' => 'Boolean Logic',
            'subtitle' => 'Is it a yes or a no?',
            'description' => '',
            'previous' => 'comparisons',
            'next' => 'conditionals',
        ]),
        Page::create('conditionals', null, 'conditionals.php', [
            'title' => 'Conditionals',
            'subtitle' => 'Checking the if before the what',
            'description' => '',
            'previous' => 'boolean-logic',
            'next' => 'loops',
        ]),
        Page::create('loops', null, 'loops.php', [
            'title' => 'Loops',
            'subtitle' => 'Increase your repetitions',
            'description' => '',
            'previous' => 'conditionals',
            'next' => 'arrays',
        ]),
        Page::create('arrays', null, 'arrays.php', [
            'title' => 'Arrays',
            'subtitle' => 'Time to make a list',
            'description' => '',
            'previous' => 'loops',
            'next' => 'functions',
        ]),
        Page::create('functions', null, 'functions.php', [
            'title' => 'Functions',
            'subtitle' => 'Reusable code',
            'description' => '',
            'previous' => 'arrays',
            'next' => 'classes',
        ]),
        Page::create('classes', null, 'classes.php', [
            'title' => 'Classes',
            'subtitle' => 'Object-oriented programming',
            'description' => '',
            'previous' => 'functions',
            'next' => 'classes-visibility',
        ]),
        Page::create('classes-visibility', null, 'classes-visibility.php', [
            'title' => 'Classes Visibility',
            'subtitle' => 'Privatizing your objects',
            'description' => '',
            'previous' => 'classes',
            'next' => '',
        ]),
    ],
];
