<?php
namespace GetThingsDone\Masterdata\Tests\Ttl;

use GetThingsDone\Masterdata\Models\Entity;
use GetThingsDone\Masterdata\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EntityTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_should_alive()
    {
        $entity = Entity::create()->ttl()->create(['expired_at' => now()->addHour()]);
        $this->assertNotNull(
            Entity::whereId($entity->id)
                ->alive()
                ->first()
        );
    }

    /** @test */
    public function it_should_expired()
    {
        $entity = Entity::create()->ttl()->create(['expired_at' => now()->addHour()]);
        $this->assertNotNull(
            Entity::whereId($entity->id)
                ->alive()
                ->first()
        );
    }
}
