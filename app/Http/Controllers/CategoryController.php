<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    /**
     * @var array
     */
    private $categories;
    
    /**
     * CategoryController constructor.
     */
    public function __construct()
    {
        $this->categories = config('categories');
    }
    
    /**
     * @param $requestUri
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render($requestUri) {
        $categoryIndex = array_search($requestUri,
            array_column($this->categories, 'route')
        );
        
        if($categoryIndex === false)
            abort('404');
        
        $currentCategory = $this->categories[$categoryIndex];
    
        return view($currentCategory['blade'])
            ->with('category', $currentCategory);
    }
}
