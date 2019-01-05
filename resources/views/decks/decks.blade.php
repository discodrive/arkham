@extends('layouts.layout')

@section('title', 'Arkham Horror - Decks')
    
@section('body')
    <h1 class="title">All Decks</h1>

    <ul class="level">
        @foreach ($decks as $deck)
            <li class="level-item">
                <section class="c-single-deck">
                    <a href="/decks/{{ $deck->id() }}">
                        <h3>{{ $deck->title() }}</h3>
                        <div class="c-single-deck-desc">
                            {{ $deck->description() }}
                        </div>
                    </a>
                </section>
            </li>
        @endforeach
    </ul>

    <a href="/decks/investigator" class="button is-link is-outlined">Create a deck</a>
@endsection