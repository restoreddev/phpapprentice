<?php

namespace Apprentice\Command;

use Apprentice\Build;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class BuildCommand extends Command
{
    protected function configure()
    {
        $this->setName('build')
             ->setDescription('Builds PHP templates into HTML files.')
             ->setHelp('Help!');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $build = new Build;
        $build->buildAll();
    }
}
