<?php

namespace App\Framework\Session;

class Session
{
    public function get(string $key, $default = null)
    {
        $this->started();
        if (array_key_exists($key, $_SESSION)) {
            return $_SESSION[$key];
        }
    }

    public function set(string $key, $value): void
    {
        $this->started();
        $_SESSION[$key] = $value;
    }

    public function delete(string $key): void
    {
        $this->started();
        unset($_SESSION[$key]);
    }

    /**
     * verifie si une session a besoin d'etre starté
     */
    private function started()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }
}