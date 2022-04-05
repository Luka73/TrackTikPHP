<?php

include_once 'ArrayList.php';

class ElectronicItem {

    protected $price;
    protected $wired;
    protected $extras;

    public function __construct(){ 
        
    }

    protected function maxExtras() {
        return 0;
    }

    public function addExtra($extra) {
        if($this->extras == null) {
            $this->extras = new ArrayList(array());
        }

        $size = $this->extras->getItems();

        if($size < $this->maxExtras()) {
            $this->extras->addItem($extra);
        }

    }

    public function getPrice() { return $this->price; } 
    public function getWired() { return $this->wired; } 
    public function setPrice($price) { $this->price = $price; } 
    public function setWired($wired) { $this->wired = $wired; }
}

?>