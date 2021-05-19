@extends('layouts.app')

@section('main')
    <p>{{$title_page}}</p>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Destinazione</td>
                    <td>Durata</td>
                    <td>Hotel di alloggio</td>
                    <td>Nome del tour operator</td>
                    <td>Prezzo</td>
                    <td>Numero persone</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($holidays as $holiday)
                <tr>
                    <td>{{$holiday->id}}</td>
                    <td>{{$holiday->destination}}</td>
                    <td>{{$holiday->days}} giorni</td>
                    <td>{{$holiday->name_hotel}}</td>
                    <td>{{$holiday->name_operator}}</td>
                    <td>€{{$holiday->price}}</td>
                    <td>{{$holiday->people}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection