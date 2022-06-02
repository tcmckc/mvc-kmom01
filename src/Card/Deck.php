<?php

namespace App\Card;

class Deck extends Card{
    public array $deck = [];
    public array $shuffle = [];

    public array $marks = ["❤️", "♦️", "♠️", "♣️"];
    public array $values = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];

    public function getDeck() {
        for($i = 0; $i < 4; $i++) {
            foreach ($this->values as $v) {
                $part = array($this->marks[$i], $v);
                array_push($this->deck, $part);
            }
        }
        return $this->deck;
    }

    // public function getDeckAsString(): string {
    //     return "[{ $this->deck}]";
    // }

    public function getShuffle($deckToShuffle) {
        shuffle($deckToShuffle);
        return $deckToShuffle;

    }


    // public function newDeck(): static
    // {
    //     foreach ($this->marks as $mark) {
    //         $color = $this->getColor($mark);
    //         foreach ($this->values as $value) {
    //             $card = new Card($suit, $value, $color);
    //             $this->deck[] = $card;
    //         }
    //     }

    // }
}