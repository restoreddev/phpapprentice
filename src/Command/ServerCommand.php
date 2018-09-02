<?php

namespace Apprentice\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ServerCommand extends Command
{
    protected function configure()
    {
        $this->setName('server')
             ->setDescription('Runs PHP server that automatically builds files')
             ->setHelp('Help!');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Starting development server on localhost:8080');
        system('php -S localhost:8080 -t docs src/util/router.php');
    }
}
