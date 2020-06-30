<?php

namespace Tests;

final class AgendaTest extends \PHPUnit\Framework\TestCase {

    public function test01ClaseExiste() {
        $this->assertTrue(class_exists("\GH\Agenda"));
    }
}
