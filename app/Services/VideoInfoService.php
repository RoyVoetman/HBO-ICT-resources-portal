<?php

namespace App\Services;

use App\Services\InfoFetchers\InfoFetcher;
use App\Services\InfoFetchers\YoutubeChannelInfo;
use App\Services\InfoFetchers\YoutubePlaylistsInfo;
use Illuminate\Support\Facades\Cache;

/**
 * Class FetchChannelInfo
 *
 * @package App\services
 */
class VideoInfoService
{
    /**
     * @var \Illuminate\Support\Collection
     */
    private $videoResources;
    
    /**
     * @var array
     */
    private $fetchers = [
        'playlists' => YoutubePlaylistsInfo::class,
        'channels' => YoutubeChannelInfo::class
    ];
    
    /**
     * VideoInfoService constructor.
     */
    public function __construct()
    {
        $this->videoResources = config('video-resources') ?? [];
    }
    
    /**
     * @param  string  $index
     *
     * @return mixed
     */
    public function get(string $index)
    {
        return Cache::remember("video-resources.{$index}", null, function () use ($index) {
            $this->cachePut($index, resolve($this->fetchers[$index]));
        });
    }
    
    /**
     *
     */
    public function cacheAll()
    {
        foreach ($this->fetchers as $index => $fetcher) {
            $this->cachePut($index, resolve($fetcher));
        }
    }
    
    /**
     * @param  string  $type
     * @param  \App\Services\InfoFetchers\InfoFetcher  $fetcher
     *
     * @return bool
     */
    protected function cachePut(string $type, InfoFetcher $fetcher) {
        $resource = collect($this->videoResources[$type] ?? []);
    
        $resource = $resource->map(function ($listItem) use ($fetcher) {
            if(isset($listItem['header'])) {
                return $listItem;
            }
        
            return $fetcher->fetch($listItem);
        })->toArray();
    
        Cache::put("video-resources.{$type}", $resource, null);
        
        return $resource;
    }
}
