<?php

namespace App\Repository;

use App\Http\Filters\ProductFilters;

class ProductRepository implements ProductRepositoryInterface
{
    public function getProductsByFilters()
    {
        $queryParam = [
            'q' => request()->q
        ];
        $categories = new ProductFilters($queryParam, 15);
        $categories->filter();
        $categories->getResult();
    }
}
