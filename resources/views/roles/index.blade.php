<!DOCTYPE html>
@extends('layouts.app')

@section('title', 'Liste des rôles')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

    <table>
        <thead>
            <tr>
                <th>Rôles</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roles as $r)
            <tr>
                <td>{{ $r->roles }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
