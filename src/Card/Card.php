<?php

namespace App\Card;

class Card {

    public $mark;
    public $value;

    public function setValue($value) {
        $this->value = $value;
    }

    public function setMark($mark) {
        $this->mark = $mark;
    }

    // public function __construct($value) {
    //     $this->value = $value;
    //     $this->mark = $mark;
    // }

    // public function getCard () {
    //     $card = [];
    //     $card[] = $this->value;
    //     // $card[] = $this->mark;
    //     return $this->card;
    // }

}

// class Card {
//     public $mark;
//     public $value;

//     public function __construct($value) {
//         $this->value = $value;
//         $this->mark = $mark;
//     }

//     public function getCard () {
//         $card = [];
//         $card[] = $this->value;
//         $card[] = $this->mark;
//         return $this->card;
//     }

// }

// class Card　{
//     public function __construct()
//     {
//         $this->$value = array (
//             "heart"=>["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"],
//             "diamonds"=>["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"],
//             "spades"=>["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"],
//             "clubs"=>["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"],
//         )
//     }
// }