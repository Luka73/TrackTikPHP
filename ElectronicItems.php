<?php


include_once 'ElectronicItem.php';

class ElectronicItems {

    private $items = array();

    public function __construct (array $items){

        $this->items = $items;

    }

    public function addItem($item) {
        array_push($this->items, $item); 
    }

    public function getItems() {
        return $this->items;
    }
    

    public function getTotalAmount() {
        $amount = 0;
        foreach($this->items as $item) {
            $amount += $item->getTotalPrice();
        }
        return $amount;
    }

    public function getSortedItems(){

        $sorted = array();

        foreach ($this->items as $item) {

            $sorted[($item->getPrice() * 100)] = $item;

        }

        return (ksort($sorted, SORT_NUMERIC)) ? $sorted : null;
    }

}