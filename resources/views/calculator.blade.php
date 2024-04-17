@extends('layout/header')
@section('content')
    <h1>Калькулятор стоимости доставки сырья</h1>
    <div class="container text-center">
        <div class="row g-2 py-5">
            <div class="col">
                <div class="form-floating">

                </div>
            </div>
            <div class="col">
                <div class="form-floating">
                    <form>
                        <select class="form-select">
                            @foreach($monthsList as $value)
                                <option>{{$value}}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
            </div>
            <div class="col">
                <div class="form-floating">

                </div>
            </div>
        </div>
        <div class="row justify-content-md-center py-5">
            <div class="col">

            </div>
        </div>
        <div class="row justify-content-md-center py-5" id="result-container"></div>
    </div>
@endsection
