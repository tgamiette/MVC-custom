<?php

namespace App\Framework\Actions;

abstract class AbstractClass
{
    /**
     * @param array $array
     */
    public function __construct(array $array = [])
    {
        $this->hydrate($array);
    }
    
    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set'.str_replace(' ', '', ucwords(str_replace('_', ' ', $key)));
            if (is_callable(array($this,$method))){
                $this->$method($value);
            }
        }
    }
}