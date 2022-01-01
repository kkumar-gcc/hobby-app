@extends('layouts.app')
@section('page_title', 'details view of hobby')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Detailed view') }}</div>

                    <div class="card-body">
                        <b>{{ $hobby->name }}</b>
                        <p>{{ $hobby->description }}</p>
                    </div>
                </div>
                <div class="mt-2">
                    <a href="{{ URL::previous() }}" class="btn btn-success"><i class="fas fa-arrow-circle-up"></i> back to overview</a>
                </div>
            </div>
        </div>
    </div>
@endsection
