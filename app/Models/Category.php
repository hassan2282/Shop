<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    Protected $fillable = ['name','parent_id'];
    public static function categoriesTree(){

        $allCategories = Category::all();
        $rootCategories = $allCategories->where('parent_id', 0);
        self::createCategoriesTree($allCategories, $rootCategories);
            return $rootCategories;
    }

    public static function createCategoriesTree($allCategories, $categories){
        foreach ($categories as $category){

            $category->children = $allCategories->where('parent_id', $category->id);

                if ($category->children->isNotEmpty())
                    self::createCategoriesTree($allCategories, $category->children);
        }
    }
}
