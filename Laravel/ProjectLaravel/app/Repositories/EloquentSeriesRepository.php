<?php

namespace App\Repositories;

use App\Models\Series;
use App\Models\Season;
use App\Models\Episode;
use App\Http\Requests\SeriesFormRequest;
use Illuminate\Support\Facades\DB;

class EloquentSeriesRepository implements SeriesRepository
{
  public function add(SeriesFormRequest $request): Series {
     return DB::transaction(function () use($request) {
            $series = Series::create($request->all());
            $temporadas = [];
            for ($seasons = 1; $seasons <= $request->seasonsQty; $seasons++) {
                $temporadas[] = [
                    'series_id' => $series->id,
                    'number' => $seasons
                ];
            }

            Season::insert($temporadas);

            $episodios = [];
            foreach ($series->seasons as $season) {
                for ($episodes = 1; $episodes <= $request->episodesPerSeason; $episodes++) {
                    $episodios[] = [
                        'season_id' => $season->id,
                        'number' => $episodes
                    ];
                }
            }

            Episode::insert($episodios);

            return $series;
        });
  }
}