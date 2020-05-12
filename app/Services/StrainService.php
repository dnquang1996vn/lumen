<?php


namespace App\Services;


use App\Repositories\StrainRepositoryInterface;
use Illuminate\Support\Facades\Request;

class StrainService
{
    /**
     * @var StrainRepositoryInterface
     */
    private $strainRepository;

    /**
     * UserService constructor.
     * @param StrainRepositoryInterface $strainRepository
     */
    public function __construct(StrainRepositoryInterface $strainRepository)
    {
        $this->strainRepository = $strainRepository;
    }

    public function getAll()
    {
        return $this->strainRepository->all();
    }

    public function create($data)
    {
        return $this->strainRepository->create($data);
    }
}
