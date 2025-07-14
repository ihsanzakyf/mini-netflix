<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use App\Models\Category;

class CategoryController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            'auth',
            'check.device.limit'
        ];
    }

    public function show(Category $category)
    {
        $movies = $category->movies()->latest()->get();

        return view('categories.show', [
            'category' => $category,
            'movies' => $movies
        ]);
    }
}
