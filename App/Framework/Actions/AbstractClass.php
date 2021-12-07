<?php

namespace App\Framework\Actions;

abstract class AbstractClass
{
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