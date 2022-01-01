@extends('layouts.app')
@section('page_title', 'hobbies')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($hobbies as $hobby)
                                <li class="list-group-item container-fluid">
                                    <a title="show details" href="/hobby/{{ $hobby->id }}">{{ $hobby->name }}</a>
                                    @auth
                                        <a href="/hobby/{{ $hobby->id }}/edit" class="btn btn-sm btn-light ml-2"> <i
                                                class="fas fa-edit"></i>
                                            edit hobby</a>
                                    @endauth

                                    <span class="mx-2">{{ $hobby->user->name }} ({{ $hobby->user->hobbies->count() }} hobbies)</span>
                                    @auth

                                        <form class="float-right" style="display: inline" action="/hobby/{{ $hobby->id }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-sm btn-outline-danger" value="delete">

                                        </form>
                                    @endauth
                                    <span class="float-right mx-2">{{ $hobby->created_at->diffForHumans() }}</span>
                                </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="mt-3">
                    {{ $hobbies->links() }}
                </div>
                @auth
                    <div class="mt-2">
                        <a href="/hobby/create" class="btn btn-success"><i class="fas fa-plus-circle"></i> create new hobby</a>
                    </div>
                @endauth

            </div>
        </div>
    </div>
@endsection
