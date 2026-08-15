<?php

namespace App\Repository\Eloquent;

use App\Models\Court;
use App\Repository\Interfaces\CourtInterface;
use Illuminate\Support\Collection;

class CourtRepo implements CourtInterface
{
    public function getCourts($request) : Collection
    {
//        dd($request);
        return Court::query()
            ->with('reviews', 'venue')
            ->when($request->filter_type, function ($query, $type) {
                $query->courtType($type);
            })
            ->when(
                $request->filter_price_min &&
                $request->filter_price_max,
                function ($query) use ($request) {
                    $query->priceRange(
                        $request->filter_price_min,
                        $request->filter_price_max
                    );
                }
            )
            ->get();


    }
}
