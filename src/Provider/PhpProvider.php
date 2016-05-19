<?php

namespace Zelenin\Zend\Expressive\Config\Provider;

use Zelenin\Zend\Expressive\Config\Util\ArrayUtil;

final class PhpProvider implements Provider
{
    /**
     * @var string
     */
    private $pattern;

    /**
     * @param string $pattern
     */
    public function __construct($pattern)
    {
        $this->pattern = $pattern;
    }

    /**
     * @inheritdoc
     */
    public function getConfig()
    {
        $config = [];
        foreach ($this->glob($this->pattern) as $file) {
            $config = ArrayUtil::merge($config, include $file);
        }
        return $config;
    }

    /**
     * @param string $pattern
     *
     * @return array
     */
    private function glob($pattern)
    {
        return glob($pattern, GLOB_BRACE);
    }
}
