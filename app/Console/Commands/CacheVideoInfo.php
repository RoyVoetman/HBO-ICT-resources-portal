<?php

namespace App\Console\Commands;

use App\Services\VideoInfoService;
use Illuminate\Console\Command;

class CacheVideoInfo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'videos:cache';
    
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Caches all video resource info from config/video-resources.php';
    
    /**
     * @var \App\Services\VideoInfoService
     */
    private $service;
    
    /**
     * CacheVideoInfo constructor.
     *
     * @param  \App\Services\VideoInfoService  $service
     */
    public function __construct(VideoInfoService $service)
    {
        parent::__construct();
        
        $this->service = $service;
    }
    
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->service->cacheAll();
    }
}
