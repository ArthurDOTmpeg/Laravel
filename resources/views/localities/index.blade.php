<!DOCTYPE html>
@extends('layouts.app')

@section('title', 'Liste des Localités')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

    <table>
        <thead>
            <tr>
                <th>Localités</th>
            </tr>
        </thead>
        <tbody>
        @foreach($localities as $l)
            <tr>
                <td>{{ $l->localities }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
