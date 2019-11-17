<?php

namespace App\Services\InfoFetchers;

/**
 * Interface Fetcher
 *
 * @package App\Services\Fetchers
 */
interface InfoFetcher
{
    /**
     * @param  array  $channel
     *
     * @return mixed
     */
    public function fetch(array $channel): array;
}
