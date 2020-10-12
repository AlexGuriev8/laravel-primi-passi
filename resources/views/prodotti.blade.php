
    @extends('layout.app')

    @section('titolo','Prodotti Molisana')
    
       @section('main')
                <h2>Le Lunghe</h2>
        <div class="cards">
            @foreach ($lunghe as $card)
                <div class="card">
                    <img src="{{$card['src']}}" alt="{{$card['titolo']}}">
                </div>
            @endforeach
        </div>
        <h2>Le Corte</h2>
        <div class="cards">
            @foreach ($corte as $card)
                <div class="card">
                    <img src="{{$card['src']}}" alt="{{$card['titolo']}}">
                </div>
            @endforeach
        </div>
        <h2>Le Cortissime</h2>
        <div class="cards">
            @foreach ($cortissime as $card)
                <div class="card">
                    <img src="{{$card['src']}}" alt="{{$card['titolo']}}">
                </div>
            @endforeach
        </div>  
       @endsection 