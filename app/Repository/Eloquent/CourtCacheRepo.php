<?php

namespace App\Repository\Eloquent;

use App\Repository\Interfaces\CourtCacheInterface;
use App\Repository\Interfaces\CourtInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class CourtCacheRepo implements CourtCacheInterface
{
    public function __construct(private CourtInterface $courtRepository)
    {
    }

    private function generateCacheKey($filters) : string
    {
        return sprintf(
            'courts:type:%s:min:%s:max:%s',
            $filters['filter_type'] ?? 'all',
            $filters['filter_price_min'] ?? 'all',
            $filters['filter_price_max'] ?? 'all',
        );
    }
    public function getCourts($filters)
    {
        $key = $this->generateCacheKey($filters);
        return Cache::tags(['courts'])->remember(
            $key,
            3600,
            function () use ($filters) {
                return $this->courtRepository->getCourts($filters);
            }
        );
    }
    public function clearCache() : void{
        Cache::tags(['courts'])->flush();
    }
}
