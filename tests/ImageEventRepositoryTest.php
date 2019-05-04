<?php

use App\Models\ImageEvent;
use App\Repositories\ImageEventRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ImageEventRepositoryTest extends TestCase
{
    use MakeImageEventTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ImageEventRepository
     */
    protected $imageEventRepo;

    public function setUp()
    {
        parent::setUp();
        $this->imageEventRepo = App::make(ImageEventRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateImageEvent()
    {
        $imageEvent = $this->fakeImageEventData();
        $createdImageEvent = $this->imageEventRepo->create($imageEvent);
        $createdImageEvent = $createdImageEvent->toArray();
        $this->assertArrayHasKey('id', $createdImageEvent);
        $this->assertNotNull($createdImageEvent['id'], 'Created ImageEvent must have id specified');
        $this->assertNotNull(ImageEvent::find($createdImageEvent['id']), 'ImageEvent with given id must be in DB');
        $this->assertModelData($imageEvent, $createdImageEvent);
    }

    /**
     * @test read
     */
    public function testReadImageEvent()
    {
        $imageEvent = $this->makeImageEvent();
        $dbImageEvent = $this->imageEventRepo->find($imageEvent->id);
        $dbImageEvent = $dbImageEvent->toArray();
        $this->assertModelData($imageEvent->toArray(), $dbImageEvent);
    }

    /**
     * @test update
     */
    public function testUpdateImageEvent()
    {
        $imageEvent = $this->makeImageEvent();
        $fakeImageEvent = $this->fakeImageEventData();
        $updatedImageEvent = $this->imageEventRepo->update($fakeImageEvent, $imageEvent->id);
        $this->assertModelData($fakeImageEvent, $updatedImageEvent->toArray());
        $dbImageEvent = $this->imageEventRepo->find($imageEvent->id);
        $this->assertModelData($fakeImageEvent, $dbImageEvent->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteImageEvent()
    {
        $imageEvent = $this->makeImageEvent();
        $resp = $this->imageEventRepo->delete($imageEvent->id);
        $this->assertTrue($resp);
        $this->assertNull(ImageEvent::find($imageEvent->id), 'ImageEvent should not exist in DB');
    }
}
