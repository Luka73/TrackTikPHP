
<?php

class Television extends ElectronicItem {

    public function __construct(){
        parent::__construct();
    }

    public function maxExtras() {
        return PHP_INT_MAX;
    }
}

?>