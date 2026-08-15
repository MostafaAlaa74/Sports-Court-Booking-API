<?php

namespace App\Repository\Interfaces;

interface CourtCacheInterface
{
    public function getCourts($filters);

    public function clearCache();
}
