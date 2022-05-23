@extends('layouts.app')

@section('content')
    <h1>
        creazione nuova auto
    </h1>
    <div class="container mt-5">
        <form class="row g-3" action="{{route("admin.cars.store")}}" method="post">
        @csrf
        <div class="col-4">
            <label for="numero_telaio">Numero di telaio</label>
            <input type="text" name="numero_telaio" id="numero_telaio">
        </div>
        <div class="col-4">
            <label for="model">Modello</label>
            <input type="text" name="model" id="model">    
        </div>
        <div class="col-4">
            <label for="porte">Porte</label>
            <input type="number" name="porte" id="porte">    
        </div>
        <div class="col-4">
            <label for="data_immatricolazione">Immatricolazione</label>
            <input type="date" name="data_immatricolazione" id="data_immatricolazione">
        </div>
        <div class="col-4">
            <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca">
        </div>
        <div class="col-4">
            <label for="alimentazione">Alimentazione</label>
            <input type="text" name="alimentazione" id="alimentazione"> 
        </div>
        <div class="col-4">
            <label for="prezzo">Prezzo</label>
            <input type="number" name="prezzo" id="prezzo">
        </div>
        <div class="col-12">
            <button class="btn btn-outline-primary">send</button>
        </div>
        </form>
    </div>
@endsection