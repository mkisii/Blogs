<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Models\Headquarter;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cars = Car::all();
       
        return view('cars.index',
            [
                'cars' => $cars
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Model instance

        try {
            $car = new Car();
            $car->name = $request->input('name');
            $car->founded = $request->input('founded');
            $car->description = $request->input('description');
            $car->save();
            return redirect()->route('cars.index');
        } catch (\Exception $e) {
            return redirect()->route('cars.create')->with('error', $e->getMessage());
        }

        // Passing it through a model
        // try {
        //     $car = Car::create([
        //         'name' => $request->name,
        //         'founded' => $request->founded,
        //         'description' => $request->description,
        //     ]);
        //     return redirect()->route('cars.index');
        // } catch (\Exception $e) {
        //     return redirect()->route('cars.create')->with('error', $e->getMessage());
        // }
       


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $car = Car::find($id);

        
        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $car = Car::find($id)->first();
        // dd($id);

        return view('cars.edit')->with ('car',$car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $car = Car::find('id',$id)->update([
                'name' => $request->input('name'),
                'founded' => $request->input('founded'),
                'description' => $request->input('description')

            ]);
            $car->save();
            return redirect()->route('cars.index');
        } catch (\Exception $e) {
            return redirect()->route('cars.edit')->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
        
        $car->delete();

        return redirect('/cars');
    }
}
