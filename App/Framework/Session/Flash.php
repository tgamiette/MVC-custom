<?php

namespace App\Framework\Session;

class Flash extends Session
{
    const TYPE_ERROR = 'error';
    const TYPE_WARNING = 'warning';
    const TYPE_INFO = 'info';
    const TYPE_SUCCESS = 'success';

    /**
     * @var Session
     */

    public function deleteFlash()
    {
        $this->delete("flash");
    }

    public  function hasFlash()
    {
        return $this->get("flash");
    }

    public function setFlash(string $message): void
    {
        $this->set("flash", htmlspecialchars($message));
    }

}