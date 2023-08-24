@extends('layouts.public')
@section('show')
<div id="content">
<style>
        /* Set the maximum width for the image */
        img {
            max-width: 100%; /* Adjust the percentage as needed */
            height: auto; /* Maintain aspect ratio */
        }
    </style>
  @isset($autos)
    @foreach ($autos as $product)
        <div class="prod">
            <div class="prod-bgtop">
                <div class="prod-bgbtm">
                    <div class="oneitem">
                        <div class="image">
                            <img class= "imagefrm" src="{{ asset('images/autoIMG/' . $product->foto)}}" >
                        </div>
                        <div class="info">
                            <h1 class="title">Modello: {{ $product->modello }}</h1>
                            <p class="meta">
                                Marca: {{ $product->marca }}<br>
                                Numero porte: {{ $product->numeroPorte }}<br>
                                Cilindrata: {{ $product->cilindrata }} cv<br>
                                Tipo cambio: {{ $product->tipoCambio }}<br>
                                Optional: {{ $product->optional }}
                            </p>
                            <p class="price">Prezzo giornaliero: {{ $product->prezzoGiornaliero }}€</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
  @endisset
{{--    penso che questo serva per sistemare la pagina ma non funziona--}}
{{--    @include('pagination.paginator', ['paginator' => $autos])--}}


<!-- fine sezione prodotti -->

<div id="sidebar">


<h2>Filtro prezzo</h2>
<p>Inserisci il minimo e il massimo prezzo giornaliero che desideri</p>
    <div class="filter">
      <label for="minPrice"></label>
      <input type="number" id="minPrice" step="5" placeholder="Inserisci prezzo minimo">
    </div>
    <div class="filter">
      <label for="maxPrice"></label>
      <input type="number" id="maxPrice" step="5" placeholder="Inserisci prezzo massimo">
    </div>


<h2>Filtro data</h2>
<p>Inserisci la data di inizio e fine del tuo nolleggio</p>
    <div class="filter">
      <label for="startDate">Inizio nolleggio:</label>
      <input type="date" id="dataInizio" step="1">
    </div>
    <div class="filter">
      <label for="finishDate">Fine nolleggio:</label>
      <input type="date" id="dataFine" step="1">
    </div>


<h2>Filtro  posti</h2>
<p>Inserisci il numero di posti che desideri nella tua auto a nolleggio</p>
    <div class="filter">
      <label for="numPosti">Inizio nolleggio:</label>
      <input type="number" id="numero_posti" step="1" placeholder="esempio: 4">
    </div>

{{--    <br><button onclick="applySeatsFilter()">Applica i Filtri</button>--}}

  </div>
{{--<!--versione vecchia-->--}}
{{--    <!----}}
{{--    <ul>--}}
{{--        <li>--}}
{{--            <h2>Filtri</h2>--}}
{{--            <ul>--}}
{{--                @foreach ($topCategories as $category)--}}
{{--                <li><a href="{{ route('catalog2', [$category->catId]) }}">{{ $category->name }}</a><span>{{ $category->desc }}</span></li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </li>--}}

{{--        @isset($selectedTopCat)--}}
{{--        <li>--}}
{{--            <h2>In {{ $selectedTopCat->name }}</h2>--}}
{{--            <ul>--}}
{{--                @foreach ($subCategories as $subCategory)--}}
{{--                <li><a href="{{ route('catalog3', [$selectedTopCat->catId, $subCategory->catId]) }}">{{ $subCategory->name }}</a><span>{{ $subCategory->desc }}</span></li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        @endisset--}}
{{--    </ul>--}}
{{--    -->--}}
</div>
<!-- fine sezione laterale -->
@endsection



