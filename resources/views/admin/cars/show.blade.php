@extends('layouts.app')

@section('content')
<div >
    @if (session("message"))
            <div class="alert alert-success">
                {{session("message")}}
            </div>
        @endif
    <div class="container-fluid text-white">
        <div class="text-secondary text-center">
            <h1 class="text-white pt-4">
                Auto Singola
            </h1>
            <div class="mb-4 d-flex justify-content-around">
                <a  href="{{route('welcome')}}">
                        <button class="btn btn-secondary">
                            Home page
                        </button>
                </a>
                <a href="{{route("admin.cars.index")}}">
                    <button class="btn btn-secondary">
                        Lista completa
                    </button>
                </a>
            </div>
            <div class="card shadow mb-4 mx-4 w-75 mx-auto">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">{{$car->marca}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$car->model}} </h6>
                    <p class="card-text">{{$car->alimentazione}}</p>
                    <p class="card-text">€ {{$car->prezzo}}</p>
                </div>

            </div>
            <form action="{{route("admin.cars.destroy", $car)}}" method="POST" class="pb-4">
                @csrf
                @method("DELETE")
                <button class="btn  btn-danger " type="submit">Elimina</button>
            </form>
        </div>
    </div>
</div>
@endsection


