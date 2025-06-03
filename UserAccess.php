<?php
class UserAccess {
    public function checkAge($age) {
        return $age >= 18 ? "Access granted." : "Access denied.";
    }
}
