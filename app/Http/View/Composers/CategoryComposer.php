<?php

namespace App\Http\View\Composers;
use App\Services\CategoryService;
use Illuminate\View\View;

class CategoryComposer
{
    protected  $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function compose(View $view)
    {
        // Récupérer les catégories et les passer à la vue
        $categories = $this->categoryService->getCategories();
        $view->with('categories', $categories);
    }
}
