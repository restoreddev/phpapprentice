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
     * Directory holding chapter files
     *
     */
    'chapter_dir' => __DIR__ . '/chapters',

    /*
     *
     * Directory to PHP templates used by pages
     *
     */
    'templates_dir' => __DIR__ . '/assets/templates',

    /*
     *
     * Output directory for html files and assets
     *
     */
    'output_dir' => __DIR__ . '/.build',

    /*
     *
     * Static files that should be loaded into output directory
     *
     */
    'files_dir' => __DIR__ . '/assets/files',

    /*
     *
     * Configuration for all pages on the site
     *
     */
    'pages' => [
        Page::create('index', null, [], 'index.phtml'),
        Page::create('installing-php', null, [], 'installing-php.phtml'),
        Page::create('credits', null, [], 'credits.phtml'),
        Page::create('404', null, [], '404.phtml'),
        Page::create('basics', 'basics/01-basics.md', [
            'title' => 'Basics',
            'subtitle' => 'Getting started',
            'next' => 'variables',
        ]),
        Page::create('variables', 'basics/02-variables.md', [
            'title' => 'Variables',
            'subtitle' => 'The building blocks of PHP',
            'previous' => 'basics',
            'next' => 'arithmetic',
        ]),
        Page::create('arithmetic', 'basics/03-arithmetic.md', [
            'title' => 'Arithmetic',
            'subtitle' => 'Doing math like a pro',
            'previous' => 'variables',
            'next' => 'strings',
        ]),
        Page::create('strings', 'basics/04-strings.md', [
            'title' => 'Strings',
            'subtitle' => 'Working with text',
            'previous' => 'arithmetic',
            'next' => 'comparisons',
        ]),
        Page::create('comparisons', 'basics/05-comparisons.md', [
            'title' => 'Comparisons',
            'subtitle' => 'Equality checking',
            'previous' => 'strings',
            'next' => 'boolean-logic',
        ]),
        Page::create('boolean-logic', 'basics/06-boolean-logic.md', [
            'title' => 'Boolean Logic',
            'subtitle' => 'Is it a yes or a no?',
            'previous' => 'comparisons',
            'next' => 'conditionals',
        ]),
        Page::create('conditionals', 'basics/07-conditionals.md', [
            'title' => 'Conditionals',
            'subtitle' => 'Checking the if before the what',
            'previous' => 'boolean-logic',
            'next' => 'loops',
        ]),
        Page::create('loops', 'basics/08-loops.md', [
            'title' => 'Loops',
            'subtitle' => 'Increase your repetitions',
            'previous' => 'conditionals',
            'next' => 'arrays',
        ]),
        Page::create('arrays', 'basics/09-arrays.md', [
            'title' => 'Arrays',
            'subtitle' => 'Time to make a list',
            'previous' => 'loops',
            'next' => 'functions',
        ]),
        Page::create('functions', 'basics/10-functions.md', [
            'title' => 'Functions',
            'subtitle' => 'Reusable code',
            'previous' => 'arrays',
            'next' => 'classes',
        ]),
        Page::create('classes', 'basics/11-classes.md', [
            'title' => 'Classes',
            'subtitle' => 'Object-oriented programming',
            'previous' => 'functions',
            'next' => 'classes-inheritance',
        ]),
        Page::create('classes-inheritance', 'basics/12-classes-inheritance.md', [
            'title' => 'Classes: Inheritance',
            'subtitle' => 'Extend your objects',
            'previous' => 'classes',
            'next' => 'classes-visibility',
        ]),
        Page::create('classes-visibility', 'basics/13-classes-visibility.md', [
            'title' => 'Classes: Visibility',
            'subtitle' => 'Privatizing your objects',
            'previous' => 'classes-inheritance',
            'next' => 'classes-constructor',
        ]),
        Page::create('classes-constructor', 'basics/14-classes-constructor.md', [
            'title' => 'Classes: Constructor',
            'subtitle' => 'Construct your objects',
            'previous' => 'classes-visibility',
            'next' => 'static',
        ]),
        Page::create('static', 'basics/15-static.md', [
            'title' => 'Static',
            'subtitle' => 'Class properties and methods',
            'previous' => 'classes-constructor',
            'next' => 'interfaces',
        ]),
        Page::create('interfaces', 'basics/16-interfaces.md', [
            'title' => 'Interfaces',
            'subtitle' => 'Writing code contracts',
            'previous' => 'static',
            'next' => 'abstract',
        ]),
        Page::create('abstract', 'basics/17-abstract.md', [
            'title' => 'Abstract Classes',
            'subtitle' => 'Inheriting an interface',
            'previous' => 'interfaces',
            'next' => 'exceptions',
        ]),
        Page::create('exceptions', 'basics/18-exceptions.md', [
            'title' => 'Exceptions',
            'subtitle' => 'Throwing errors',
            'previous' => 'abstract',
            'next' => 'web/http',
        ]),
        Page::create('web/http', 'web/01-http.md', [
            'title' => 'HTTP',
            'subtitle' => 'Understanding the format of the web',
            'previous' => 'exceptions',
            'next' => 'web/http-post',
        ]),
        Page::create('web/http-post', 'web/02-http-post.md', [
            'title' => 'HTTP POST',
            'subtitle' => 'Sending data to a server',
            'previous' => 'web/http',
            'next' => 'web/http-server',
        ]),
        Page::create('web/http-server', 'web/03-http-server.md', [
            'title' => 'PHP HTTP Server',
            'subtitle' => 'Handling HTTP Requests in PHP',
            'previous' => 'web/http-post',
            'next' => '',
        ]),
    ],
];
