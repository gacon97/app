<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ImageEventApiTest extends TestCase
{
    use MakeImageEventTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateImageEvent()
    {
        $imageEvent = $this->fakeImageEventData();
        $this->json('POST', '/api/v1/imageEvents', $imageEvent);

        $this->assertApiResponse($imageEvent);
    }

    /**
     * @test
     */
    public function testReadImageEvent()
    {
        $imageEvent = $this->makeImageEvent();
        $this->json('GET', '/api/v1/imageEvents/'.$imageEvent->id);

        $this->assertApiResponse($imageEvent->toArray());
    }

    /**
     * @test
     */
    public function testUpdateImageEvent()
    {
        $imageEvent = $this->makeImageEvent();
        $editedImageEvent = $this->fakeImageEventData();

        $this->json('PUT', '/api/v1/imageEvents/'.$imageEvent->id, $editedImageEvent);

        $this->assertApiResponse($editedImageEvent);
    }

    /**
     * @test
     */
    public function testDeleteImageEvent()
    {
        $imageEvent = $this->makeImageEvent();
        $this->json('DELETE', '/api/v1/imageEvents/'.$imageEvent->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/imageEvents/'.$imageEvent->id);

        $this->assertResponseStatus(404);
    }
}
