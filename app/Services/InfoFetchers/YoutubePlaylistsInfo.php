<?php

namespace App\Services\InfoFetchers;

use Embed\Embed;

/**
 * Class YoutubePlaylists
 *
 * @package App\Services\Fetchers
 */
class YoutubePlaylistsInfo implements InfoFetcher
{
    /**
     * @param  array  $playlist
     *
     * @return array
     */
    public function fetch(array $playlist): array
    {
        $info = Embed::create($playlist['url']);
    
        return array_merge($playlist, [
            'src' => $this->getSrcAttribute($info->code),
            'title' => $info->title
        ]);
    }
    
    /**
     * @param  string  $element
     *
     * @return mixed
     */
    private function getSrcAttribute(string $element)
    {
        $doc = new \DOMDocument();
        $doc->loadHTML($element);
    
        /** @var \DOMElement $iframe */
        $iframe = $doc->getElementsByTagName( "iframe" )[0];
        
        return $iframe->getAttribute('src');
    }
}
