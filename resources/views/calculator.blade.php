@extends('layout/header')
@section('content')
    <form action="{{ route('calculator.store') }}" method="post">
        @csrf
        <div class="container" >
            <div class="row mt-5">
                <h1>Калькулятор расчета стоимости доставки</h1>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <select class="form-select" name="month">
                        @foreach($monthsList as $value)
                            <option value="{{$value}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <select class="form-select" name="type">
                        @foreach($typesList as $value)
                            <option value="{{$value}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <select class="form-select" name="tonnage">
                        @foreach($tonnagesList as $value)
                            <option value="{{$value}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mt-5 d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Расчитать</button>
            </div>
            @if(isset($result))
            <div class="mt-5 d-flex justify-content-center">
                <h2>Результат: {{"$result->price"}}</h2>
            </div>
            @endif
        </div>
    </form>
@endsection
