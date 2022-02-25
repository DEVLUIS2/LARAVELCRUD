@extends('Header&Footer.header')
@section('conteudo1')

<body class="antialiased ">
  <div id="carouselExampleIndicators" class="carousel slide" style="align-content:center; margin-top: 40px " data-bs-ride="carousel">
      <div class="carousel-indicators ">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner rounded mx-auto d-block " style="height: 300px">
        <div class="carousel-item active" >
          <img src="{{asset('Image/pizza1.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" >
          <img src="{{asset('Image/pizza2.jpg')}}" class="d-block w-100 " alt="...">
        </div>
        <div class="carousel-item" >
          <img src="{{asset('Image/pizza3.jpg')}}" class="d-block w-100 " alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="false"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="false"></span>
        <span class="visually-hidden">Next</span>
      </button>
  </div>

  <div class="text-center bg-red-700 h-20 mt-10" style="display: flex;justify-content: center;align-items: center">
    <h1 class="text-white">PIZZAS MAIS COMPRADAS</h1>
  </div>

  <!-- cards das pizzas mais compradas -->

  <div class="row row-cols-1 row-cols-md-2 g-4 w-100 p-10 m-0">
    <div class="col">
      <div class="card ">
        <img src="{{asset('Image/pizza10.jpg')}}" class="card-img-top h-50" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">OVO COM CALABRESA</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="{{asset('Image/pizza2.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">MANJERICÃO</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="{{asset('Image/pizza3.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">QUEIJO COM CEBOLA ROXA</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="{{asset('Image/pizza8.jpg')}}" class="card-img-top h-50" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">TOMATE SECO</h5>
        </div>
      </div>
    </div>
  </div>

</body>
@endsection

