<?php

namespace App\Http\Controllers;

use App\Models\Strain;
use App\Services\StrainService;
use Illuminate\Http\Request;

class StrainController extends Controller
{
    /**
     * @var StrainService
     */
    private $strainService;

    /**
     * Create a new controller instance.
     *
     * @param StrainService $strainService
     */
    public function __construct(StrainService $strainService)
    {
        $this->strainService = $strainService;
    }

    public function index()
    {
        $strains = $this->strainService->getAll();

        return $this->responseSuccess($strains);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => "required",
        ]);

        $newStrain = $this->strainService->create($request->all());

        return $this->responseSuccess($newStrain);
    }

    public function show($id)
    {
        return $this->responseSuccess(Strain::findOrFail($id));
    }

    public function update($id, Request $request)
    {
        $strain = Strain::query()->find($id);

        $strain->update($request->all());

        return $this->responseSuccess($strain);
    }
}
