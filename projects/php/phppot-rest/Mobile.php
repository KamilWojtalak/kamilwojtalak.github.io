<?php

class Mobile {

    private $mobiles = array(
        'Samsung Galaxy Mini2',
        'Samsung Galaxy J3',
        'Xiaomi Mi A2 Lite',
        'Xiaomi Redmi Note 9',
        'Apple iPhone 6S Plus',  			
		'LG G4',  			
		'Samsung Galaxy S6 edge',  
		'OnePlus 2',
		'Apple iPhone 10',
    );

    public function getAllMobile() {
        return $this->mobiles;
    }

    public function getMobile($id) {
        $mobile = array($id => ($this->mobiles[$id]) ?? 'There is no such id');
        return $mobile;
    }
}