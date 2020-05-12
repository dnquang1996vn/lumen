<?php

namespace App\Repositories;

use App\Models\Strain;
use Exception;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Throwable;

interface StrainRepositoryInterface extends BaseRepositoryInterface
{
    public function __construct(Strain $strain);

    /**
     * @param  int  $limit
     * @param  string  $orderBy
     * @param  string  $sort
     *
     * @return LengthAwarePaginator
     */
    public function getPaginated($limit = 10, $orderBy = 'created_at', $sort = 'desc'): LengthAwarePaginator;

}
