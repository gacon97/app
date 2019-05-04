<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateImageEventAPIRequest;
use App\Http\Requests\API\UpdateImageEventAPIRequest;
use App\Models\ImageEvent;
use App\Repositories\ImageEventRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ImageEventController
 * @package App\Http\Controllers\API
 */

class ImageEventAPIController extends AppBaseController
{
    /** @var  ImageEventRepository */
    private $imageEventRepository;

    public function __construct(ImageEventRepository $imageEventRepo)
    {
        $this->imageEventRepository = $imageEventRepo;
    }

    /**
     * Display a listing of the ImageEvent.
     * GET|HEAD /imageEvents
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->imageEventRepository->pushCriteria(new RequestCriteria($request));
        $this->imageEventRepository->pushCriteria(new LimitOffsetCriteria($request));
        $imageEvents = $this->imageEventRepository->all();

        return $this->sendResponse($imageEvents->toArray(), 'Image Events retrieved successfully');
    }

    /**
     * Store a newly created ImageEvent in storage.
     * POST /imageEvents
     *
     * @param CreateImageEventAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateImageEventAPIRequest $request)
    {
        $input = $request->all();

        $imageEvents = $this->imageEventRepository->create($input);

        return $this->sendResponse($imageEvents->toArray(), 'Image Event saved successfully');
    }

    /**
     * Display the specified ImageEvent.
     * GET|HEAD /imageEvents/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ImageEvent $imageEvent */
        $imageEvent = $this->imageEventRepository->findWithoutFail($id);

        if (empty($imageEvent)) {
            return $this->sendError('Image Event not found');
        }

        return $this->sendResponse($imageEvent->toArray(), 'Image Event retrieved successfully');
    }

    /**
     * Update the specified ImageEvent in storage.
     * PUT/PATCH /imageEvents/{id}
     *
     * @param  int $id
     * @param UpdateImageEventAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateImageEventAPIRequest $request)
    {
        $input = $request->all();

        /** @var ImageEvent $imageEvent */
        $imageEvent = $this->imageEventRepository->findWithoutFail($id);

        if (empty($imageEvent)) {
            return $this->sendError('Image Event not found');
        }

        $imageEvent = $this->imageEventRepository->update($input, $id);

        return $this->sendResponse($imageEvent->toArray(), 'ImageEvent updated successfully');
    }

    /**
     * Remove the specified ImageEvent from storage.
     * DELETE /imageEvents/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ImageEvent $imageEvent */
        $imageEvent = $this->imageEventRepository->findWithoutFail($id);

        if (empty($imageEvent)) {
            return $this->sendError('Image Event not found');
        }

        $imageEvent->delete();

        return $this->sendResponse($id, 'Image Event deleted successfully');
    }
}
