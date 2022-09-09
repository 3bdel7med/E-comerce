@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if(Auth::user()->admin==0)
                        <div class="alert alert-success" role="alert">
                           login successfuly
                        </div>
                    @endif

                    {{ __('You are logged in!') }}  <div class="crd-body">
                        @if(Auth::user()->admin)
                         <a href="/dashboard">dashboard</a>
                        @endif
                    </div>


</div>

            </div>
        </div>
    </div>
</div>
@endsection
