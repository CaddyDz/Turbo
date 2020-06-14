<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Support\Collection;
use App\Http\Requests\YearsBrandRequest;

class BrandsController extends Controller
{
    /**
     * Get Brands by year.
     *
     * Select brand names where year is passed year
     *
     * @param int \App\Http\Requests\YearsBrandRequest the year integer
     * @return \Illuminate\Support\Collection $brands
     **/
    public function getByYear(YearsBrandRequest $request): Collection
    {
        $brands = Vehicle::where('year', $request->year)->select('brand')->distinct()->orderBy('brand')->pluck('brand');

        return $brands;
    }
}
