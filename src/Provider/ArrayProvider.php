<?php

namespace Zelenin\Zend\Expressive\Config\Provider;

final class ArrayProvider implements Provider
{
    /**
     * @var array
     */
    private $array;

    /**
     * @param array $array
     */
    public function __construct(array $array)
    {
        $this->array = $array;
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->array;
    }
}