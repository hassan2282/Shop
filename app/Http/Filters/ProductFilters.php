<?php

namespace App\Http\Filters;

use App\Models\Product;

class ProductFilters
{
    private $queryParam;
    private $searchKey;
    private $page;
    private $per_page;
    private $sort;
    private $query;
    private $q;
    private $name;
    private $minPrice;
    private $maxPrice;
    private $weight;
    private $voltage;
    private $model;
    private $color;
    private $result;


    public function __construct($queryParam, $per_page)
    {
        $this->queryParam = $queryParam;
        $this->per_page = $per_page;
        $this->query = Product::query();
        $this->filter();
    }

    public function extractKeyByKeyName($key)
    {
        if (isset($this->queryParam[$key])) {
            $q = $this->queryParam[$key];
            unset($this->queryParam[$key]);
            return $q;
        }
    }

    private function extractSearchKey()
    {
        $this->searchKey = $this->extractKeyByKeyName('searchKey');
    }

    private function extractPage()
    {
        $this->page = $this->extractKeyByKeyName('page');
    }

    private function extractName()
    {
        $this->name = $this->extractKeyByKeyName('name');
    }

    private function extractMinPrice()
    {
        $this->price = $this->extractKeyByKeyName('minPrice');
    }

    private function extractMaxPrice()
    {
        $this->price = $this->extractKeyByKeyName('maxPrice');
    }

    private function extractWeight()
    {
        $this->weight = $this->extractKeyByKeyName('weight');
    }

    private function extractVoltage()
    {
        $this->voltage = $this->extractKeyByKeyName('voltage');
    }

    private function extractColor()
    {
        $this->color = $this->extractKeyByKeyName('color');
    }

    private function extractModel()
    {
        $this->model = $this->extractKeyByKeyName('model');
    }


    public function createQuery()
    {
        if ($this->q) {
            $this->query->where('name', 'LIKE', '%' . $this->searchKey . '%')
                ->orWhere('weight', $this->searchKey)
                ->orWhere('voltage', $this->searchKey)
                ->orWhere('model', 'LIKE', '%' . $this->searchKey . '%')
                ->orWhere('color', 'LIKE', '%' . $this->searchKey . '%');
        }
        if ($this->voltage) {
            $this->query->where('voltage', $this->voltage);
        }
        if ($this->weight) {
            $this->query->where('weight', $this->weight);
        }
        if ($this->color) {
            $this->query->where('color', $this->color);
        }
        if ($this->model) {
            $this->query->where('model', $this->model);
        }
        if ($this->minPrice) {
            $this->query->where('price','>=', $this->minPrice);
        }
        if ($this->maxPrice) {
            $this->query->where('price', '<=', $this->maxPrice);
        }
    }

    public function fetchData()
    {
        $this->result = $this->query->latest()->orderBy('id',$this->sort)->paginate($this->per_page);
    }

    public function filter()
    {
        $this->extractName();
        $this->extractColor();
        $this->extractModel();
        $this->extractVoltage();
        $this->extractWeight();
        $this->extractPage();
        $this->extractMinPrice();
        $this->extractMaxPrice();
        $this->createQuery();
        $this->fetchData();
    }
    public function getResult()
    {
        return $this->result;
    }
}
