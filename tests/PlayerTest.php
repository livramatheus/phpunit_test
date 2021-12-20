<?php

namespace Tests;

use Livramatheus\PhpunitTest\Classes\Player;
use PHPUnit\Framework\TestCase;

final class PlayerTest extends TestCase {
    
    public function testGetAge() {
        $Player = new Player();
        $Player->setAge(27);
        $this->assertIsInt($Player->getAge());
    }

}