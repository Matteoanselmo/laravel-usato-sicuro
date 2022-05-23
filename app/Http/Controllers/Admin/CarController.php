<?php

namespace App\Http\Controllers\Admin;

use App\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view("admin.cars.index", compact("cars"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.cars.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero_telaio' => 'unique:cars,numero_telaio,id|required|max:20',
            'model' => 'required|max:20',
            'porte' => 'required|max:5|numeric',
            'data_immatricolazione' => 'required',
            'marca' => 'required|max:20',
            'alimentazione' => 'required',
            'prezzo' => 'required|numeric',
        ]);
        $car = new Car();
        $data = $request->all();
            // $car->numero_telaio= $data["numero_telaio"];
            // $car->model=$data["model"];
            // $car->porte=$data["porte"];
            // $car->data_immatricolazione=$data["data_immatricolazione"];
            // $car->marca=$data["marca"];
            // $car->alimentazione=$data["alimentazione"];
            // $car->prezzo=$data["prezzo"];
        $car->fill($data);

        $car->save();

            return redirect()->route("admin.cars.show", $car->id)->with('message', 'Car created correctly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car= Car::findOrFail($id);
        return view("admin.cars.show", compact("car"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view("admin.cars.edit", compact("car"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $data = $request->all();
        $car->numero_telaio= $data["numero_telaio"];
        $car->model=$data["model"];
        $car->porte=$data["porte"];
        $car->data_immatricolazione=$data["data_immatricolazione"];
        $car->marca=$data["marca"];
        $car->alimentazione=$data["alimentazione"];
        $car->prezzo=$data["prezzo"];
        $car->save();
        return redirect()->route("admin.cars.show", $car)->with("message","Cars è stato modificato con successo!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route("admin.cars.index", $car)->with("message","$car->name è stato eliminato con successo!");
    }
}
