@extends('layouts.app')

@section('title', 'Contact')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
    <div class="contact-container">
        <h1>Contacteer ons</h1>
        <p>Heb je vragen? Vul het onderstaande formulier in.</p>

        <form class="contact-form">
            <label for="name">Naam</label>
            <input type="text" id="name" name="name" placeholder="Jouw naam" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Jouw e-mail" required>

            <label for="message">Bericht</label>
            <textarea id="message" name="message" placeholder="Jouw bericht..." required></textarea>

            <button type="submit">Verstuur</button>
        </form>
    </div>
@endsection
