@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Stazione di arrivo:</th>
        <th scope="col">Orario di partenza:</th>
        <th scope="col">Orario di arrivo:</th>
        <th scope="col">Numero carrozze:</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
        <tr>
          <td>{{$train->arr_station}}</td>
          <td>{{$train->dep_time}}</td>
          <td>{{$train->arr_time}}</td>
          <td>{{$train->carriages_num}}</td>
        </tr>  
        @endforeach

    </tbody>
  </table>
@endsection
