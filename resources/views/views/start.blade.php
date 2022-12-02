@extends('layouts.layout')
@section('content')
    <div class="container">

            <div>
                <h3>Bin ich wirklich zu dick?</h3><br>
                <p>Oder schätze ich mein Gewicht ganz falsch ein?<br> Der BMI (Body-Mass-Index) hilft,
                das Körpergewicht richtig zu<br> deuten. Mit unserem BMI-Rechner <br>lässt sich ganz
                einfach berechnen, ob Sie Normalgewicht haben, <br>unter- oder übergewichtig sind.
                Sie brauchen nur Alter<br> aktuelles Gewicht und <br>Größe, um unseren Rechner gleich
                jetzt zu nutzen.</p>
                <img style="float: right; margin-top: -189px" src="{{ asset('img/905879308-whr.jpg') }}">
            </div>

        <div class="clear"></div>
        <div>
            <p><strong>Jetzt BMi rechnen?</strong> bitte wählen Sie aus:</p>
                <a href="adultPeople">
                    <button type="button" class="btn btn-outline-secondary">Erwachsene</button>
                </a>
            <a href="kids">
                <button type="button" class="btn btn-outline-secondary">Kinder</button>
            </a>
        </div>
    </div>
@endsection
