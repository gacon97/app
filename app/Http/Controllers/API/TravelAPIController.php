<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTravelAPIRequest;
use App\Http\Requests\API\UpdateTravelAPIRequest;
use App\Models\Travel;
use App\Models\Image;
use App\Repositories\TravelRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use DB;
use Storage;

/**
 * Class TravelController
 * @package App\Http\Controllers\API
 */

class TravelAPIController extends AppBaseController
{
    /** @var  TravelRepository */
    private $travelRepository;

    public function __construct(TravelRepository $travelRepo)
    {
        $this->travelRepository = $travelRepo;
    }

    /**
     * Display a listing of the Travel.
     * GET|HEAD /travels
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->travelRepository->pushCriteria(new RequestCriteria($request));
        $this->travelRepository->pushCriteria(new LimitOffsetCriteria($request));
        $travels = $this->travelRepository->all();

        return $this->sendResponse($travels->toArray(), 'Travels retrieved successfully');
    }

    /**
     * Store a newly created Travel in storage.
     * POST /travels
     *
     * @param CreateTravelAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTravelAPIRequest $request)
    {
        $input = $request->all();

        $travels = $this->travelRepository->create($input);

        return $this->sendResponse($travels->toArray(), 'Travel saved successfully');
    }

    /**
     * Display the specified Travel.
     * GET|HEAD /travels/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Travel $travel */
        $travel = $this->travelRepository->findWithoutFail($id);

        if (empty($travel)) {
            return $this->sendError('Travel not found');
        }

        return $this->sendResponse($travel->toArray(), 'Travel retrieved successfully');
    }

    /**
     * Update the specified Travel in storage.
     * PUT/PATCH /travels/{id}
     *
     * @param  int $id
     * @param UpdateTravelAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTravelAPIRequest $request)
    {
        $input = $request->all();

        /** @var Travel $travel */
        $travel = $this->travelRepository->findWithoutFail($id);

        if (empty($travel)) {
            return $this->sendError('Travel not found');
        }

        $travel = $this->travelRepository->update($input, $id);

        return $this->sendResponse($travel->toArray(), 'Travel updated successfully');
    }

    /**
     * Remove the specified Travel from storage.
     * DELETE /travels/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Travel $travel */
        $travel = $this->travelRepository->findWithoutFail($id);

        if (empty($travel)) {
            return $this->sendError('Travel not found');
        }

        $travel->delete();

        return $this->sendResponse($id, 'Travel deleted successfully');
    }
    public function getPlace(Request $request)
    {
        $lat = $request->lat;
        $lng = $request->lng;
        $radius = $request->radius;
        $raw  = 'SELECT *, ( 6371 * acos( cos( radians('.$lat.') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('.$lng.') ) + sin( radians('.$lat.') ) * sin( radians( lat ) ) ) ) AS distance FROM travels HAVING distance < '.$radius.' ORDER BY distance, created_at DESC LIMIT 0 , 100;';
        $travels = DB::select(DB::raw($raw));
        // return count($travels);
        return $this->sendResponse($travels, 'lay thanh cong');
    }

    public function getImagesTravel($id)
    {
        $travel = $this->travelRepository->findWithoutFail($id);
        $images = $travel->images;
        return $this->sendResponse($images->toArray(), 'Get images successfully');
    }

    public function search($keyword)
    {
        $travel = $this->travelRepository->search($keyword);
        return $this->sendResponse($travel->toArray(), 'Get images successfully');
    }

    public function uploadImage(Request $request)
    {
        $image = new \App\Models\Image();
        // if ($request->ImageName) {
        //     $path = $request->file(base64_decode($request->base64))->store('public/images');
        //     $link = Storage::url($path);
        //     $image->image = $link;
        //     // $image->travel_id = $request->travel_id;
        //     // $image->save();
        //     return 'ok';
        // }
        // else
        // {
        //     return "no";
        // }
        // return $request->base64;

        // error_reporting(E_ALL);
        if(isset($request->ImageName)){
            // return $request->travel_id;
            $imgname = $request->ImageName;
            $imsrc = base64_decode($request->base64);
            // $path = Storage::putFile('images', file($imgname,$imsrc);
            // $fp = fopen($imgname, 'w');
            // fwrite($fp, $imsrc);

            // $path = $imsrc->store('avatars');
            Storage::put('/public/images/'.$imgname, $imsrc);
            $link = Storage::url('images/'.$imgname);
            $image->image = $link;
            $image->travel_id = (int)$request->travel_id;
            $image->save();
            // return $path;
            // Storage::move('/public/'.$imgname, '/public/images/'.$imgname);
            // $url = Storage::url($imgname);
            // if(fclose($fp)){
            return $link;
            // }else{
            // return "Error uploading image";
            // }
        }
    }
}
