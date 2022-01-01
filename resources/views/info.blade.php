@extends('layouts.app')
@section('page_title','about this page!')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ auth()->user()->name ?? '' }}
                    
                    {{ __('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam minus autem, non alias cumque ducimus atque! Aut veniam officia, deserunt nam unde dicta dolorum fugit praesentium voluptas inventore debitis aliquid?') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
