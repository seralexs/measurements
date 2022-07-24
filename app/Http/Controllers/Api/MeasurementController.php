<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\MeasurementService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MeasurementController extends Controller
{
    public function __construct(
        private MeasurementService $measurementService
    ) {

    }

    public function store(Request $request): JsonResponse
    {
        $dto = $request;
        $this->measurementService->createMeasurement($dto);
        return response()->json('created');
    }
}
