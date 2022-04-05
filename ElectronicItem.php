<?php

include_once 'ElectronicItems.php';

abstract class ElectronicItem {

    protected $price;
    protected $wired;
    protected $extras;

    protected abstract function maxExtras();

    public function addExtra($extra) {
        if($this->extras == null) {
            $this->extras = new ElectronicItems(array());
        }

        $size = count($this->extras->getItems());
        if($size < $this->maxExtras()) {
            $this->extras->addItem($extra);
        }
    }

    public function getExtras() {
        return $this->extras;
    }

    public function getTotalPrice() {
        $total = $this->price;

        if($this->extras != null) {
            $items = $this->extras->getItems();
            foreach ($items as $item) {
                $total += $item->getPrice();
            }
        }
        return $total;
    }

    public function getSortedExtras() {
        if($this->extras != null) {
            return $this->extras->getSortedItems();
        }
        return null;
    }

    public function getPrice() { return $this->price; } 
    public function getWired() { return $this->wired; } 
    public function setPrice($price) { $this->price = $price; } 
    public function setWired($wired) { $this->wired = $wired; }
}

?>