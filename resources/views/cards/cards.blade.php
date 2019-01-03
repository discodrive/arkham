@extends('layouts.layout')

@section('title', 'Arkham Horror - Cards')

@section('body')
<ul class="columns is-multiline">
    @foreach ($cards as $card)
        <li class="column is-one-quarter">
            <section class="c-single-card">
                <a href="/cards/{{ $card->id }}">
                    <h3>{{ $card->name }}</h3>
                    <div class="c-single-desc">{{ $card->text }}</div>
                </a>

                <form method="POST" action="/cards/{{ $card->id }}">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <a href="/cards/{{ $card->id }}/edit" class="button is-link is-outlined">Edit</a>
                    <button type="submit" class="button is-danger is-outlined">
                        <span>Delete</span>
                        <span class="icon is-small">
                            <i class="fas fa-times"></i>
                        </span>
                    </button>       
                </form>
            </section>
        </li>
    @endforeach
</ul>
@endsection