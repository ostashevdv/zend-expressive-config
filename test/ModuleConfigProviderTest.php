<?php

namespace Zelenin\Zend\Expressive\Config\Test;

use PHPUnit_Framework_TestCase;
use Zelenin\Zend\Expressive\Config\Test\Resources\ModuleConfigProvider;

final class ModuleConfigProviderTest extends PHPUnit_Framework_TestCase
{
    public function testConfig()
    {
        $provider = new ModuleConfigProvider();

        $this->assertEquals(['bar' => 'foo'], $provider->getConfig());
    }
}
