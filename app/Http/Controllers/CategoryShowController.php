<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Inertia\Response;

class CategoryShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Category $category): Response
    {
        return inertia()->render('CategoryShow', [
            'category' => CategoryResource::make($category)
        ]);
    }
}
