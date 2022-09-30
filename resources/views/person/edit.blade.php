@extends('layout.app')
@section('title', 'Nowy osoba')
@section('content')

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edycja danych | Rejestr osobowy</title>
</head>

<body>
    <header>
        <h1 class="text-center mt-3">Edycja danych</h1>
    </header>
    <main>
        @if ($errors->any())
        <div class="row mt-1">
            <div class="alert alert-danger" role="alert">
            <div>
                <strong>Walidacja danych</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('person.update', $person->id) }}" method="POST">
            @csrf
            @method('PUT')
        

            <label for="firstname">Imię:</label><br>
            <input type="text" id="firstname" name="firstname" placeholder="npJan" value="{{ $person->firstname }}"><br>

            <label for="lastname">Nazwisko:</label><br>
            <input type="text" id="lastname" name="lastname" placeholder="np.Kowalski" value="{{ $person->lastname }}"><br>

            <label for="age">Wiek:</label><br>
            <input type="text" id="age" name="age" placeholder="np. 23" value="{{ $person->age}}"><br>

            <label for="gender">Płeć:</label><br>
            <input type="text" id="gender" name="gender" placeholder="np. 23" value="{{ $person->gender}}"><br>
            
            <label for="zipcode">Kod pocztowy:</label><br>
            <input type="zipcode" id="zipcode" name="zipcode" placeholder="np. 23456" value="{{ $person->zipcode}}"><br>
            
            <label for="city">Miasto:</label><br>
            <input type="city" id="city" name="city" placeholder="np. Poznań" value="{{ $person->city}}"><br>

            <label for="street">Ulica:</label><br>
            <input type="street" id="street" name="street" placeholder="np. Akacjowa" value="{{ $person->street}}"><br>

            <label for="housenumber">Numer domu:</label><br>
            <input type="housenumber" id="housenumber" name="housenumber" placeholder="np. 23" value="{{ $person->housenumber}}"><br>

            
            <label for="apartmentnumber">Numer mieszkania:</label><br>
            <input type="apartmentnumber" id="apartmentnumber" name="apartmentnumber" placeholder="np. 23" value="{{ $person->apartmentnumber}}"><br>




            <input type="submit" value="Zapisz">
        </form>
    </main>
</body>

</html>
