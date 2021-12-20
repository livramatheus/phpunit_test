<?php

namespace Livramatheus\PhpunitTest\Classes;

class Player {

    private $nickName;
    private $email;
    private $age;

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getNickName() {
        return $this->nickName;
    }

    public function setNickName($nickName) {
        $this->nickName = $nickName;
    }
}
