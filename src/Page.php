<?php

namespace Apprentice;

/**
 * A class representing a single page in the build process
 */
class Page
{
    /**
     * Name of page, used in filename
     *
     * @var string
     */
    public $name;

    /**
     * Name of template to use
     * If none is provided, a default will be used
     *
     * @var string|null
     */
    public $template;

    /**
     * Name of code file to load as table
     * Will be skipped if none is provided
     *
     * @var string|null
     */
    public $code;

    /**
     * Map of data to passed to template
     *
     * @var array
     */
    public $variables;

    /**
     * Creates new page
     *
     * @param string      $name
     * @param string|null $template
     * @param string|null $code
     * @param array       $variables
     */
    public function __construct(
        string $name,
        ?string $template = null,
        ?string $code = null,
        ?array $variables = []
    ) {
        $this->name = $name;
        $this->template = $template;
        $this->code = $code;
        $this->variables = $variables;
    }

    /**
     * Static constructor
     *
     * @param  string      $name
     * @param  string|null $template
     * @param  string|null $code
     * @param  array       $variables
     * @return Apprentice\Page
     */
    public static function create(
        string $name,
        ?string $template = null,
        ?string $code = null,
        ?array $variables = []
    ): Page {
        return new static($name, $template, $code, $variables);
    }
}
