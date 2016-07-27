<?php

namespace ApiBundle\DependencyInjection\CompilerPass;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class DoctrineRepositoriesPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
    }
}