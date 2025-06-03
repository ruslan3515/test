<?php
class Cart {
    private $items = [];

    public function addItem($item) {
        $this->items[] = $item;
    }

    public function getItemCount() {
        return count($this->items);
    }

    public function isEmpty() {
        return empty($this->items);
    }
}
