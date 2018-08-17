<?php

namespace App\Olveneer\TwigComponentsBundle;


use App\Olveneer\TwigComponentsBundle\Resources\src\TwigComponentPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class OlveneerTwigComponentsBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new TwigComponentPass());
    }
}