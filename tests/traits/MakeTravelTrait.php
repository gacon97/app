<?php

use Faker\Factory as Faker;
use App\Models\Travel;
use App\Repositories\TravelRepository;

trait MakeTravelTrait
{
    /**
     * Create fake instance of Travel and save it in database
     *
     * @param array $travelFields
     * @return Travel
     */
    public function makeTravel($travelFields = [])
    {
        /** @var TravelRepository $travelRepo */
        $travelRepo = App::make(TravelRepository::class);
        $theme = $this->fakeTravelData($travelFields);
        return $travelRepo->create($theme);
    }

    /**
     * Get fake instance of Travel
     *
     * @param array $travelFields
     * @return Travel
     */
    public function fakeTravel($travelFields = [])
    {
        return new Travel($this->fakeTravelData($travelFields));
    }

    /**
     * Get fake data of Travel
     *
     * @param array $postFields
     * @return array
     */
    public function fakeTravelData($travelFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'place' => $fake->word,
            'feature' => $fake->word,
            'category_id' => $fake->randomDigitNotNull,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s')
        ], $travelFields);
    }
}
