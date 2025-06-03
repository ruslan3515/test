<?php
class Permission {
    public function check($hasPermission) {
        return $hasPermission ? "Access granted." : "Access denied.";
    }
}
