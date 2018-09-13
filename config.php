<?php

use Apprentice\Page;

return [
    /*
     *
     * Directory for SVG icons that can be used in templates
     *
     */
    'icon_dir' => __DIR__ . '/assets/icons',

    /*
     *
     * Directory holding code files used in examples
     *
     */
    'code_dir' => __DIR__ . '/code',
    'templates_dir' => __DIR__ . '/assets/templates',
    'output_dir' => __DIR__ . '/.build',
    'files_dir' => __DIR__ . '/assets/files',
    'pages' => [
        Page::create('index', 'index.phtml'),
        Page::create('installing-php', 'installing-php.phtml'),
        Page::create('credits', 'credits.phtml'),
        Page::create('404', '404.phtml'),
        Page::create('basics', null, 'basics.php', [
            'title' => 'Basics',
            'subtitle' => 'Getting started',
            'next' => 'variables',
        ]),
        Page::create('variables', null, 'variables.php', [
            'title' => 'Variables',
            'subtitle' => 'The building blocks of PHP',
            'previous' => 'basics',
            'next' => 'arithmetic',
        ]),
        Page::create('arithmetic', null, 'arithmetic.php', [
            'title' => 'Arithmetic',
            'subtitle' => 'Doing math like a pro',
            'previous' => 'variables',
            'next' => 'strings',
        ]),
        Page::create('strings', null, 'strings.php', [
            'title' => 'Strings',
            'subtitle' => 'Working with text',
            'previous' => 'arithmetic',
            'next' => 'comparisons',
        ]),
        Page::create('comparisons', null, 'comparisons.php', [
            'title' => 'Comparisons',
            'subtitle' => 'Equality checking',
            'previous' => 'strings',
            'next' => 'boolean-logic',
        ]),
        Page::create('boolean-logic', null, 'boolean-logic.php', [
            'title' => 'Boolean Logic',
            'subtitle' => 'Is it a yes or a no?',
            'previous' => 'comparisons',
            'next' => 'conditionals',
        ]),
        Page::create('conditionals', null, 'conditionals.php', [
            'title' => 'Conditionals',
            'subtitle' => 'Checking the if before the what',
            'previous' => 'boolean-logic',
            'next' => 'loops',
        ]),
        Page::create('loops', null, 'loops.php', [
            'title' => 'Loops',
            'subtitle' => 'Increase your repetitions',
            'previous' => 'conditionals',
            'next' => 'arrays',
        ]),
        Page::create('arrays', null, 'arrays.php', [
            'title' => 'Arrays',
            'subtitle' => 'Time to make a list',
            'previous' => 'loops',
            'next' => 'functions',
        ]),
        Page::create('functions', null, 'functions.php', [
            'title' => 'Functions',
            'subtitle' => 'Reusable code',
            'previous' => 'arrays',
            'next' => 'classes',
        ]),
        Page::create('classes', null, 'classes.php', [
            'title' => 'Classes',
            'subtitle' => 'Object-oriented programming',
            'previous' => 'functions',
            'next' => 'classes-inheritance',
        ]),
        Page::create('classes-inheritance', null, 'classes-inheritance.php', [
            'title' => 'Classes: Inheritance',
            'subtitle' => 'Extend your objects',
            'previous' => 'classes',
            'next' => 'classes-visibility',
        ]),
        Page::create('classes-visibility', null, 'classes-visibility.php', [
            'title' => 'Classes: Visibility',
            'subtitle' => 'Privatizing your objects',
            'previous' => 'classes-inheritance',
            'next' => 'classes-constructor',
        ]),
        Page::create('classes-constructor', null, 'classes-constructor.php', [
            'title' => 'Classes: Constructor',
            'subtitle' => 'Construct your objects',
            'previous' => 'classes-visibility',
            'next' => 'static',
        ]),
        Page::create('static', null, 'static.php', [
            'title' => 'Static',
            'subtitle' => 'Class properties and methods',
            'previous' => 'classes-constructor',
            'next' => '',
        ]),
    ],
];
