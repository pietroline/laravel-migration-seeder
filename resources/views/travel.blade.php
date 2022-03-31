@extends("layouts.base")

@section("pageTitle", "travel")

@section("content")
    <h1>Benvenuto nel sito di viaggi</h1>

    <h3>Questi sono i pacchetti viaggio disponibili:</h3>

    <ul>
        @foreach ($viaggi as $viaggio)
            <li>
                <p>
                    <ul>
                        <li><span>Resort name: {{$viaggio["resort_name"]}}</span></li>
                        <li><span>Resort rating: {{$viaggio["resort_rating"]}} /5</span></li>
                        <li><span>Start date: {{$viaggio["start_date"]}}</span></li>
                        <li><span>End date: {{$viaggio["end_date"]}}</span></li>
                        <li><span>type: {{$viaggio["type"]}}</span></li>
                        <li><span>Amount: {{$viaggio["amount"]}}</span></li>
                        <li><span>City: {{$viaggio["city"]}}</span></li>
                        <li><span>Travel rating: {{$viaggio["travel_rating"]}} /10</span></li>
                        <li>
                            <span>
                                Passport:
                                @if ($viaggio["passport"] == 0)
                                    no
                                @else
                                    si
                                @endif  
                            </span>
                        </li>
                        <li>
                            <span>
                                Passport:
                                @if ($viaggio["travel_included"] == 0)
                                    no
                                @else
                                    si
                                @endif  
                            </span>
                        </li>
                       
                        
                    </ul>
                </p>
            </li>
        @endforeach
    </ul>
@endsection