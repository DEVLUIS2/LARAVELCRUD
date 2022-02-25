@extends('Header&Footer.header')

<style>
.produtos{
    margin: 100px 100px;
    display:flex;
    flex-wrap: wrap;
    justify-content: space-around;
    
}
.bebidas img{
    height: 300px;
}
.bebidas{
    border:1px solid black;
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    margin: 20px 20px;
}
.bebidas input[type = "submit"]{
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

@section('conteudo1')

<div class="produtos">
    @foreach ($drink as $drink)
    <div class="bebidas">
        <img src="{{asset('Image/suco.jpg')}}" alt="">
        <h3 class="text-uppercase">{{$drink->name}} - R${{$drink->registro}},00</h3>
        <input type="submit" value="Comprar">
    </div>
    @endforeach
</div>

@endsection