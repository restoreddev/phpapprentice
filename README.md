# PHP Apprentice
PHP Apprentice is a project for sharing knowledge about the PHP programming language.
It is an online book that currently includes pages for learning the basics of PHP programming.
PHP Apprentice is a work in progress so any constructive feedback is appreciated.

## Contributing
The codebase is a static site generator. It takes the Markdown files in the `chapters` folder
and builds them with PHP templates in `assets/templates`. All of the setup is controlled from the
`config.php` file. In `config.php`, the different chapters are ordered and template variables are placed.
To make a change to a chapter, just edit the Markdown file and merge with `master` and Travis will automatically
build the page again. Any page additions need to be included in the `config.php` file.

### Running Locally
To develop locally, clone the repository and run `composer install` and `npm install` in your terminal.
Then, you can run `php apprentice build` to build all the pages and `php apprentice server` to start a
development server on `localhost:8080`. The development server automatically rebuilds pages on load,
so you can use it to easily view changes. To build the JavaScript and CSS, run `npm run build` or `npm run watch`.

## Roadmap
Moving forward, there are three sections I would like to add to the site:
- Web
- Database
- Advanced

The web section will outline the basics of HTTP, how to handle requests and response and generating HTML.

The database section will cover PDO setup, fetching data and securely running queries.

Advanced will hold deeper PHP topics like traits, closures, Composer, auto-loading and namespaces.

If you would like to request a topic or see one section before another, feel free to open an issue.
