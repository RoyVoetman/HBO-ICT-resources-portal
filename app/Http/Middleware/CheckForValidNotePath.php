<?php

namespace App\Http\Middleware;

use Closure;

class CheckForValidNotePath
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $structure = config('notes');
    
        $schoolYear = $request->route('schoolYear');
        $class = $request->route('class');
        $author = $request->route('author');
        $resource = $request->route('resource');
        $file = $request->route('file') ?? $request->route('image') ?? null;
        
        // Check folder path
        if(
            !in_array($schoolYear, $structure['schoolYears']) ||
            !in_array($class, $structure['classes'][$schoolYear]) ||
            !in_array($author, $structure['authors']) ||
            !in_array($resource, $structure['resources'])
        ) abort(404);
        
        // Check file/image param if provided
        if(!is_null($file) && !preg_match('/^[a-zA-Z0-9_-]*(?:.jpg|.png)?$/', $file))
            abort(404);
        
        // Passed validation
        return $next($request);
    }
}
