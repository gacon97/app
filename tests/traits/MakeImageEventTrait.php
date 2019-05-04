<?php

use Faker\Factory as Faker;
use App\Models\ImageEvent;
use App\Repositories\ImageEventRepository;

trait MakeImageEventTrait
{
    /**
     * Create fake instance of ImageEvent and save it in database
     *
     * @param array $imageEventFields
     * @return ImageEvent
     */
    public function makeImageEvent($imageEventFields = [])
    {
        /** @var ImageEventRepository $imageEventRepo */
        $imageEventRepo = App::make(ImageEventRepository::class);
        $theme = $this->fakeImageEventData($imageEventFields);
        return $imageEventRepo->create($theme);
    }

    /**
     * Get fake instance of ImageEvent
     *
     * @param array $imageEventFields
     * @return ImageEvent
     */
    public function fakeImageEvent($imageEventFields = [])
    {
        return new ImageEvent($this->fakeImageEventData($imageEventFields));
    }

    /**
     * Get fake data of ImageEvent
     *
     * @param array $postFields
     * @return array
     */
    public function fakeImageEventData($imageEventFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'event_id' => $fake->randomDigitNotNull,
            'image' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s')
        ], $imageEventFields);
    }
}
