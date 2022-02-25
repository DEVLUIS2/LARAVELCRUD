<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto Integrador</title>

    <link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <header>
        <div class="bg-red-700 pagination" style=" display:flex;justify-content:space-between ;align-items: center; ">
          <div class="">
              <img src="{{asset('Image/logo.jpg')}}" class="w-12  " style="border-radius: 10px; margin:10px 10px;" alt="">
          </div>
    
          <nav class=" text-uppercase "   style="margin-left: 10px; width: 300px; margin-right: 10px;">
            <a href="/" class="page-item text-sm text-white  no-underline " style="margin-right: 10px">Inicial</a>
            <a href="/pizza" class="page-item text-sm text-white  no-underline " style="margin-right: 10px">Pizzas</a>
            <a href="/drink" class="page-item text-sm text-white  no-underline " style="margin-right: 30px">Bebidas</a>
          @if (Route::has('login'))
                  @auth
                      <a href="{{ url('/dashboard') }}" class="text-sm text-white no-underline">Painel</a>
                  @else
                      <a href="{{ route('login') }}" class="text-sm text-white  no-underline ">Entrar</a>
    
                  @endauth
          </nav>
          @endif
      </div>

      <div class="contemtudo">
        @yield('conteudo1')
      </div>

      <footer class=" text-white h-15 bg-red-700" >

        <div class="" style="display:flex;flex-wrap: wrap;justify-content:space-evenly ;">

          <div class="text-center ">
            <h3 >Rua general marchal, Nº256</h3>
            <h3 >Av Park Ibirapuera</h3>
          </div>

          <div style="display: flex;align-items: center">
            <h3 >copyright@ <?php echo date('Y')?></h3>
          </div>

          <div>
            <a href="">
              Facebook<img src="" alt="">
            </a>
            <a href="">
              Instagram<img src="" alt="">
            </a>
          </div>

        </div>
      </footer>

      <script src="{{ asset('site/bootstrap.js')}}"></script>
      <script src="{{ asset('site/jquery.js') }}"></script>
    </header> 
</body>
</html>