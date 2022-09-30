@extends('layout.app')
@section('title', 'Rejestr osobowy')
@section('content')

    @include('partials._search')

    <!DOCTYPE html>
    <html lang="pl">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rejestr osobowy</title>
    </head>

    <body>
        <header>
            <h1 class="text-center mt-3">Rejestr osobowy</h1>
        </header>
        <main>
            <hr />
            <div class="row mt-1">
                <div class="col-12 text-right">
                    <a class="btn btn-primary" href="{{ route('person.create') }}">+
                        Nowa osoba</a>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <table class="table">
                        <tr>
                            <th>Imię</th>
                            <th>Nazwisko</th>
                            <th>Wiek</th>
                            <th>Płeć</th>
                            <th>Kod pocztowy</th>
                            <th>Miasto</th>
                            <th>Ulica</th>
                            <th>Nr domu</th>
                            <th>Nr mieszkania</th>
                        </tr>
                        @foreach ($people as $person)
                            <tr>
                                <td>{{ $person->firstname }}</td>
                                <td>{{ $person->lastname }}</td>
                                <td>{{ $person->age }}</td>
                                <td>{{ $person->gender }}</td>
                                <td>{{ $person->zipcode }}</td>
                                <td>{{ $person->city }}</td>
                                <td>{{ $person->street }}</td>
                                <td>{{ $person->housenumber }}</td>
                                <td>{{ $person->apartmentnumber }}</td>
                                <td>
                                    <a class="btn btn-sm btn-secondary" href="{{ route('person.edit', $person->id) }}">
                                        Edytuj
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('person.destroy', $person->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit">Usuń</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $people->links() !!}
                    </div>
        </main>
    </body>

    </html>
