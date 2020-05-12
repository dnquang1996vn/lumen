<?php

namespace App\Repositories\Eloquent;

use App\Models\Strain;
use App\Repositories\StrainRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;

class StrainRepository extends BaseRepository implements StrainRepositoryInterface
{
    /**
     * @var Model|Strain
     */
    protected $model;

    public function __construct(Strain $strain)
    {
        $this->model = $strain;
    }

    public function getPaginated($limit = 10, $orderBy = 'created_at', $sort = 'desc'): LengthAwarePaginator
    {
        return $this->orderBy($orderBy, $sort)
            ->paginate($limit);
    }
}
