@extends('layouts.layout')

@section('title', 'Arkham Horror - Create Deck')
    
@section('body')
    <h1 class="title">Create Deck</h1>

    <form method="POST" action="/decks">
        @csrf

        <div class="field">
            <div class="control">
                <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" placeholder="Deck Title" value="{{ old('title') }}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" cols="30" rows="10" placeholder="Deck Description">{{ old('description') }}</textarea><br/>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link is-outlined">Create Deck</button>
            </div>
        </div>

        @include ('errors')
    </form>
@endsection