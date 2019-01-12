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
     * Name of chapter file to load and parse
     * Will be skipped if none is provided
     *
     * @var string|null
     */
    public $chapter;

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
     * @param string|null $chapter
     * @param array       $variables
     */
    public function __construct(
        string $name,
        ?string $chapter = null,
        ?array $variables = [],
        ?string $template = null
    ) {
        $this->name = $name;
        $this->chapter = $chapter;
        $this->variables = $variables;
        $this->template = $template;
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
        ?string $chapter = null,
        ?array $variables = [],
        ?string $template = null
    ): Page {
        return new static($name, $chapter, $variables, $template);
    }
}
