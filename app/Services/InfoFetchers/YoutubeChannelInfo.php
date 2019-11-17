<?php

namespace App\Services\InfoFetchers;

use Embed\Embed;

/**
 * Class YoutubeChannels
 *
 * @package App\Services\Fetchers
 */
class YoutubeChannelInfo implements InfoFetcher
{
    /**
     * @param  array  $channel
     *
     * @return array
     */
    public function fetch(array $channel): array
    {
        $info = Embed::create($channel['url']);
    
        return array_merge($channel, [
            'image' => $info->image,
            'title' => $info->title
        ]);
    }
}
