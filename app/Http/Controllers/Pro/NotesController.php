<?php

namespace App\Http\Controllers\Pro;

use App\Services\GitlabService;
use Illuminate\Support\Arr;
use Intervention\Image\Facades\Image;
use Parsedown;

class NotesController extends Controller
{
    /**
     * @param $schoolYear
     * @param $class
     * @param $author
     * @param $resource
     *
     * @return mixed
     */
    public function navigate($schoolYear, $class, $author, $resource) {
        $fileTree = app(GitlabService::class)->getFileTree("$schoolYear/$class/$author/$resource");
        
        $fileTree = array_map(function ($file) {
            return Arr::last(explode('/', $file));
        }, $fileTree);
        
        return view('notes.navigate')
            ->with('files', $fileTree)
            ->with('schoolYear', $schoolYear)
            ->with('class', $class)
            ->with('author', $author)
            ->with('resource', $resource);
    }
    
    /**
     * @param  string  $schoolYear
     * @param  string  $class
     * @param  string  $author
     * @param  string  $resource
     * @param  string  $file
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function renderFile(string $schoolYear, string $class, string$author, string $resource, string $file) {
        $filepath = "/$schoolYear/$class/$author/$resource/$file.md";
    
        $file = app(GitlabService::class)->getFile($filepath);
        
        return view('notes.note')
            ->with('downloadLink', "/notes/$schoolYear/$class/$author/$resource/$file/download")
            ->with('content', (new Parsedown())->text( $file ));
    }
    
    /**
     * @param  string  $schoolYear
     * @param  string  $class
     * @param  string  $author
     * @param  string  $resource
     * @param  string  $image
     *
     * @return mixed
     */
    public function serveImage(string $schoolYear, string $class, string $author, string $resource, string $image) {
        $filepath = "/$schoolYear/$class/$author/$resource/assets/$image";
    
        $file = app(GitlabService::class)->getFile($filepath);
        
        return Image::make($file)->response();
    }
}
