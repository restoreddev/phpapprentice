<?php

/**
 * Runs a scoped require on a partial
 *
 * The filename must start with an underscore
 * and end with .php or .phtml
 *
 * @param  string $path Name of partial
 * @param  array  $vars Variables to use for the partial
 * @return void
 */
function partial(string $path, array $vars = []) {
    $dir = config('templates_dir');
    if (file_exists($dir. '/' . "_$path.php")) {
        $file = $dir. '/' . "_$path.php";
    } elseif (file_exists($dir . '/' . "_$path.phtml")) {
        $file = $dir. '/' . "_$path.phtml";
    } else {
        throw new Exception('Partial could not be found: ' . $dir . '/' . "_$path.php");
    }

    extract($vars);

    require $file;
}

/**
 * Gets url path to page
 *
 * @param  string $page Name of page
 * @return string
 */
function page_path(string $page): string {
    return '/' . $page . '.html';
}

/**
 * Safely escapes text for display in html
 *
 * @param  string $text
 * @return string
 */
function escape(string $text): string {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8', true);
}

/**
 * Loads content of svg icon from assets folder
 *
 * @param  string $name Name of icon without extension
 * @return string       Contents of file
 */
function icon(string $name): string {
    $dir = config('icon_dir');
    $path = $dir . '/' . $name . '.svg';
    if (file_exists($path)) {
        return file_get_contents($path);
    }

    return '';
}

/**
 * Takes string of PHP code and converts it into html for display
 *
 * @param  string $code
 * @return string
 */
function code_table(string $code): string {
    $tokens = token_get_all($code);
    $output = '<div class="grid-code">' .
                '<div class="doc"></div>' .
                '<div class="code">' .
                    '<pre>' .
                        '<code class="language-php">';

    $previousTokenWasComment = false;
    foreach ($tokens as $token) {
        if (is_string($token)) {
            $output .= $token;
            continue;
        }

        $id = $token[0];
        $text = $token[1];

        if ($id == T_COMMENT || $id == T_DOC_COMMENT) {
            $text = htmlspecialchars(trim(str_replace('/', '', $text)));

            if ($previousTokenWasComment) {
                $output .= ' ' . $text;
            } else {
                $output .= '</code>' .
                        '</pre>' .
                    '</div>' .
                    '<div class="doc">' .
                        $text;
            }

            $previousTokenWasComment = true;
        } else {
            if ($previousTokenWasComment) {
                $output .= '</div>' .
                            '<div class="code">' .
                                '<pre>' .
                                    '<code class="language-php">';
            }

            $output .= htmlspecialchars($text);
            $previousTokenWasComment = false;
        }
    }

    $output .= '</code>' .
           '</pre>' .
        '</div>' .
    '</div>';

    return $output;
}

/**
 * Loads config file into a global
 *
 * @param  string $path
 * @return void
 */
function load_config(string $path) {
    $config = require $path;

    if (!is_array($config)) {
        throw new \Exception('Config file does not return an array.');
    }

    $GLOBALS['APPRENTICE_CONFIG'] = $config;
}

/**
 * Returns config value
 *
 * @param  string $key
 * @return mixed
 */
function config(string $key) {
    $config = $GLOBALS['APPRENTICE_CONFIG'] ?? [];

    return $config[$key] ?? null;
}

/**
 * Returns path to asset based on manifes.json file
 *
 * @param  string $name
 * @return string
 */
function asset(string $name): string {
    $outputDir = config('output_dir');

    if (file_exists($outputDir . '/manifest.json')) {
        $text = file_get_contents($outputDir . '/manifest.json');
        $paths = json_decode($text, true);

        if (isset($paths[$name])) {
            return $paths[$name];
        }
    }

    return '/' . $name;
}
