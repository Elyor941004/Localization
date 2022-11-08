@extends('layouts.app')
@section('content')
    <div class="container">
        <p>{{__('main.you can edit products')}}</p>
        <div class="status">
            @if(session('status'))
                <label class="badge badge-success">
                    {{session('status')}}
                </label>
            @endif
        </div>
        <label for="">Products</label>
        <table class="table">
            <thead>
                <tr>
                    <th>{{__('main.Products')}}</th>
                    <th>{{__('main.Price')}}</th>
                    <th>{{__('main.Quantity')}}</th>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->name[app()->getLocale()]}}</td>
                    <td>{{$product->price[app()->getLocale()]}}</td>
                    <td>{{$product->quantity[app()->getLocale()]}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="form">
            <form class="form-group" action="{{route('productStore', app()->getLocale())}}" method="POST">
                @csrf
                @method('POST')
                <label for="">{{__('EN')}}</label><br>
                <label for="">{{__('main.Enter product name')}}</label>
                <input class="form-control" type="text" name="name_en">
                <label for="">{{__('main.Enter product price')}}</label>
                <input class="form-control" type="text" name="price_en">
                <label for="">{{__('main.Enter product quantity')}}</label>
                <input  class="form-control" type="text" name="quantity_en">
                <label for="">{{__('RU')}}</label><br>
                <label for="">{{__('main.Enter product name')}}</label>
                <input class="form-control" type="text" name="name_ru">
                <label for="">{{__('main.Enter product price')}}</label>
                <input class="form-control" type="text" name="price_ru">
                <label for="">{{__('main.Enter product quantity')}}</label>
                <input  class="form-control" type="text" name="quantity_ru">
                 <label for="">{{__('UZ')}}</label><br>
                <label for="">{{__('main.Enter product name')}}</label>
                <input class="form-control" type="text" name="name_uz">
                <label for="">{{__('main.Enter product price')}}</label>
                <input class="form-control" type="text" name="price_uz">
                <label for="">{{__('main.Enter product quantity')}}</label>
                <input  class="form-control" type="text" name="quantity_uz">
                <button class="btn btn-success">Submit</button>
            </form>
        </div>

    </div>
    <style>
        .form{
            width: 50%;
        }
        .form input{
            margin-bottom: 24px;
        }
    </style>
@endsection
