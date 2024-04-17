<?php

it('can be created with a factory', function () {
     $user = \App\Models\User::factory()->create();
     $this->assertDatabaseHas('users', $user->toArray());
});
