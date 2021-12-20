<?php

use Livramatheus\PhpunitTest\Classes\Game;
use Livramatheus\PhpunitTest\Classes\Player;
use PHPUnit\Framework\TestCase;

final class GameTest extends TestCase {

    private $Player;

    protected function setUp() : void {
        $this->Player = new Player();
    }

    public function testFullGame() {
        $Game = new Game($this->Player);
        $Game->kill();
        $Game->kill();
        $Game->takeDamage();
        $Game->takeDamage();
        
        $this->assertIsInt($Game->takeDamage());
    }

    public function testNewGameWithoutPlayer() {
        $this->expectException(ArgumentCountError::class);
        $Game = new Game();
    }

    public function testScore() {
        $Game = new Game($this->Player);
        $Game->kill();
        $Game->kill();

        $this->assertEquals(3000, $Game->getScore());
    }

    public function testKills() {
        $Game = new Game($this->Player);
        $Game->kill();
        $Game->kill();

        $this->assertEquals(2, $Game->getKills());
    }

}