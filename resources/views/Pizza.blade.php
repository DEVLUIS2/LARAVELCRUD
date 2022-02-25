@extends('Header&Footer.header')

@section('conteudo1')

<style>
.produtos{
    margin: 100px 100px;
    display:flex;
    flex-wrap: wrap;
    justify-content: space-around;
    
}
.pizzas img{
    height: 300px;
    width: 100%;
}
.pizzas{
    border:1px solid black;
    width: 300px;
    text-align: center;
    margin: 20px 20px;
}
.pizzas input[type="submit"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid rgb(161, 5, 5);
    padding: 14px 40px;
    outline: none;
    width: 200px;
    color: red;
    border-radius: 24px;
    transition: 0.25s;  
    cursor: pointer; 
}
</style>

<div class="produtos">
@foreach ($pizza as $pizza)
        <div class="pizzas">
            <img src="{{asset('Image/pizza1.jpg')}}" alt="">
            <h3 class="text-uppercase">{{$pizza->name}} - R${{$pizza->registro}},00</h3>
            <input type="submit" value="Comprar">
        </div>
@endforeach
</div>

@endsection