@foreach($data as $key=>$va)
<h1>{{$va['ID']}}</h1>
<!-- <ul>
    <li>{{$va['Country']}}</li>
    <li>{{$va['CountryCode']}}</li>
    <li>{{$va['Slug']}}</li>
    <li>{{$va['NewConfirmed']}}</li>
    <li>{{$va['TotalConfirmed']}}</li>
    <li>{{$va['NewDeaths']}}</li>
    <li>{{$va['TotalDeaths']}}</li>
    <li>{{$va['NewRecovered']}}</li>
    <li>{{$va['TotalRecovered']}}</li>
    <li>{{$va['Date']}}</li>
    <li>{{$va['Premium']}}</li>
</ul> -->
@endforeach

