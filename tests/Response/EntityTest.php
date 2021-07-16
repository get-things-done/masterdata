<?php
namespace GetThingsDone\Masterdata\Tests\Response;

use GetThingsDone\Masterdata\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use GetThingsDone\Masterdata\Models\Entity;

class EntityTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_should_store_by_array()
    {
        $entity = Entity::create();

        $response = $entity->response()->create(['value'=> ['key' => 'value']]);

        $this->assertEquals(
            $response->value,
            (object) [
                'key' => 'value'
            ]
        );
    }
}
