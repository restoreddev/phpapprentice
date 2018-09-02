<?php

namespace Apprentice;

use Apprentice\Command;
use Symfony\Component\Console\Application;

class App
{
    /**
     * Runs cli application
     *
     * @return void
     */
    public function main(): void
    {
        $cli = new Application;
        $cli->add(new Command\BuildCommand);
        $cli->add(new Command\ServerCommand);
        $cli->run();
    }
}
