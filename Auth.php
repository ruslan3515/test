<?php
class Auth {
    public function login($username, $password) {
        if ($username === 'admin' && $password === '1234') {
            return "Login successful";
        }
        return "Invalid credentials";
    }
}
