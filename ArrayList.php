<?php

class ArrayList {

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

    public function getSortedItems(){

        $sorted = array();

        foreach ($this->items as $item) {

            $sorted[($item->price * 100)] = $item;

        }

        return ksort($sorted, SORT_NUMERIC);

    }

}