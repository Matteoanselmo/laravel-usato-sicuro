      @extends('layouts.app')

      @section('content')
      <h1 class="text-center text-white pt-4">
        Modifica {{$car->title}}
      </h1>
      <div class="container mt-5 p-5">
        <form class="row g-3 bg-primary rounded shadow text-white p-4" action="{{route("admin.cars.update", $car)}}" method="POST">
          @method("PUT")
          @csrf
        <div class="col-4 shadow p-3">
            <label for="numero_telaio">Numero di telaio</label>
            <input type="text" name="numero_telaio" id="numero_telaio" value="{{$car->numero_telaio}}" class="rounded">
          </div>
        <div class="col-4 p-3">
            <label for="model">Modello</label>
            <input type="text" name="model" id="model" value="{{$car->model}}" class="rounded">
        </div>
        <div class="col-4 p-3">
            <label for="porte">Porte</label>
            <input type="number" name="porte" id="porte" value="{{$car->porte}}">
        </div>
        <div class="col-4 p-3">
            <label for="data_immatricolazione">Immatricolazione</label>
            <input type="date" name="data_immatricolazione" id="data_immatricolazione" value="{{$car->data_immatricolazione}}" class="rounded">
        </div>
        <div class="col-4 p-3">
            <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca" value="{{$car->marca}}" class="rounded">
        </div>
        <div class="col-4 p-3">
            <label for="alimentazione">Alimentazione</label>
            <input type="text" name="alimentazione" id="alimentazione" value="{{$car->alimentazione}}" class="rounded">
        </div>
        <div class="col-4 p-3">
            <label for="prezzo">Prezzo</label>
            <input type="number" name="prezzo" id="prezzo" value="{{$car->prezzo}}" class="rounded">
        </div>
        <div class="col-12 pb-5">
            <button class="btn btn-success text-white">Send</button>
        </div>
        </form>
    </div>
@endsection
