<?php

it('can be created with a factory', function () {
     $visit = \App\Models\Visit::factory()->create();
     $this->assertDatabaseHas('visits', $visit->toArray());
});
