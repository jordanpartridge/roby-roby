<?php

it('has a factory', function () {
    $factory = \App\Models\User::factory();
    $this->assertInstanceOf(\Database\Factories\UserFactory::class, $factory);
});

