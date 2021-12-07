<?php

namespace App\Framework\Session;

class Flash
{
    const FLASH_ERROR = 'error';
    const FLASH_WARNING = 'warning';
    const FLASH_INFO = 'info';
    const FLASH_SUCCESS = 'success';

    /**
     * @var Session
     */
    private Session $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }



    public static function setFlash(string $message): void
    {
        $_SESSION['flash'] = htmlspecialchars($message);
    }

    public static function deleteFlash()
    {
    }

    public static function hasFlash()
    {
        return isset($_SESSION['flash']);
    }

    public function create($sessionKey, string $message, string $type)
    {
        $flash = $this->session->get($sessionKey, []);
        $flash[$type] = $message;
        $flash = $this->session->set($sessionKey, $flash);
    }

    public function get(string $sessionKey)
    {
        $flash = $this->session->get($sessionKey, []);
        if (array_key_exists($sessionKey, $flash)){
            return $flash[$sessionKey];
        }
        return null;
    }
}