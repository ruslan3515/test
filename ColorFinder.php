<?php
class ColorFinder {
    public function findBlue($colors) {
        foreach ($colors as $color) {
            if ($color === 'blue') {
                return "Found blue!";
            }
        }
        return "Blue not found.";
    }
}
