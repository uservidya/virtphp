<?php
/*
 * This file is part of VirtPHP.
 *
 * (c) Jordan Kasper <github @jakerella> 
 *     Ben Ramsey <github @ramsey>
 *     Jacques Woodcock <github @jwoodcock> 
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Virtphp\Workers;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class Destroyer
{

    /**
     * @var InputInterface
     */
    protected $input = null;
    /**
     * @var OutputInterface
     */
    protected $output = null;
    /**
     * @var stirng
     */
    private $rootPath;


    public function __construct(InputInterface $input, OutputInterface $output, $rootPath = ".") {
        $this->input = $input;
        $this->output = $output;
        $this->setRootPath($rootPath);
    }


    public function getRootPath() { return $this->rootPath; }
    public function setRootPath($path = ".") {
        $this->rootPath = strval($path);
    }


    public function execute() {

        $this->removeStructure();
        // TODO: what else?
    }

    protected function removeStructure() {
        $this->output->writeln("<info>Removing direcotry structure</info>");
        // TODO: remove all created folders
    }

}