<?php

namespace App\Http\Controllers;
use App\Models\Weather;
use Illuminate\Http\Request;

/**
 * @group  Weather
 * APIs for managing Weather
 */
class WeatherController extends Controller
{
    /**
     *
     * @response {
     *   "clima_id": 1,
     *   "temp": "28.75",
     *   "feels_like": "31.85",
     *   "temp_min": "26.67",
     *   "temp_max": "32.00",
     *   "pressure": 1016,
     *   "humidity": 68
     * }
     */
    public function index()
    {
        $weathers = Weather::all();
        return $weathers;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * @bodyParam  temp float required The temperature of the weather.
     * @bodyParam  feels_like float required The temperature that human feels like.
     * @bodyParam  temp_min float required The minimum temperature.
     * @bodyParam  temp_max float required The maximum temperature.
     * @bodyParam  pressure integer required The pressure in hPa unit.
     * @bodyParam  humidity integer required The humidity in percentage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'temp' => 'required',
                'feels_like' => 'required',
                'temp_min' => 'required',
                'temp_max' => 'required',
                'pressure' => 'required',
                'humidity' => 'required',
                'cities_id' => 'required',

            ]);

            $clima = new Weather;

            $clima = Weather::create([
                'temp' => $request->input('temp'),
                'feels_like' => $request->input('feels_like'),
                'temp_min' => $request->input('temp_min'),
                'temp_max' => $request->input('temp_max'),
                'pressure' => $request->input('pressure'),
                'humidity' => $request->input('humidity'),
                'cities_id' => $request->input('cities_id'),

            ]);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return response()->json(['message' => 'Registration completed successfully!', 'clima' => $clima]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
