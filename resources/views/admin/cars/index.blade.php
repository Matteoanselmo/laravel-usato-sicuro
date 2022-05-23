@extends('layouts.app')

@section('content')
    @if (session("message"))
        <div class="allert allert-success">
            {{session("message")}}
        </div>
    @endif
    <h1 class="text-center">
        Lista auto
    </h1>
    {{-- <a href="{{route("home")}}">Torna alla Home</a> --}}
    <div class="text-center">
        <a href="{{route("admin.cars.create")}}">
            <button class="btn btn-dark">
                Aggiungi Auto
            </button>

        </a>
    </div>
    <div class="wrapper d-flex flex-wrap justify-content-center">

        @foreach ($cars as $car)
        <div class="card text-center m-5 p-5 bg-primary text-white shadow">
            <div class="card-body">
                <h3 class="card-title">
                    {{$car->marca}}
                </h3>
                <h4 class="card-subtitle mb-3">
                    {{$car->numero_telaio}}
                </h4>
                <div class="p-3">
                    <a class="text-white" href="{{route("admin.cars.show", $car->id)}}">
                        <button class="btn btn-info">
                            Dettagli
                        </button>
                    </a>
                    <a class="text-white" href="{{route("admin.cars.edit", $car->id)}}">
                        <button-btn class="btn btn-warning">
                            Modifica
                        </button-btn>
                    </a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
@endsection


