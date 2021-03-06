<?php

namespace Olveneer\TwigComponentsBundle;

use Olveneer\TwigComponentsBundle\Service\ComponentPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class OlveneerTwigComponentsBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ComponentPass());
    }
}
