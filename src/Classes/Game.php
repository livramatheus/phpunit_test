<?php

namespace Livramatheus\PhpunitTest\Classes;

use Livramatheus\PhpunitTest\Classes\Player;

class Game {

    /** @var Player */
    private $Player;

    private $score;
    private $kills;
    private $lifes;

    public function __construct(Player $Player) {
        $this->setPlayer($Player);
        $this->score = 0;
        $this->kills = 0;
        $this->lifes = 3;
        echo '<h4>Game Started!</h4>';
    }

    public function getScore() {
        return $this->score;
    }

    public function setScore($score) {
        $this->score = $score;
    }

    public function getKills() {
        return $this->kills;
    }

    public function setKills($kills) {
        $this->kills = $kills;
    }

    public function getPlayer() {
        return $this->Player;
    }

    public function setPlayer($Player) {
        $this->Player = $Player;
    }

    public function getLifes() {
        return $this->lifes;
    }

    public function setLifes($lifes) {
        $this->lifes = $lifes;
    }

    public function kill() {
        $this->kills += 1;
        $this->score += 1500;
        
        echo '<h4>Kill! +1500</h4>';
    }
    
    public function takeDamage() {
        $this->lifes -= 1;
        echo '<h4>Oh no! You took damage!</h4>';


        if ($this->lifes == 0) {
            return $this->endGame();
        }
    }

    private function endGame() {
        echo '<fieldset>';
        echo '<p>Game ended!</p>';
        echo '<p>Kills: ' .$this->kills. '</p>';
        echo '<p>Total Score: ' .$this->score. '</p>';
        echo '</fieldset>';

        return $this->getScore();
    }
}
