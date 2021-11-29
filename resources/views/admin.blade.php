@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin.
                    <div class="countdown">
                        Limited Time Only!
                        <span id="clock"></span>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@push('head')
<!-- Scripts -->
<script src="{{ asset('js/pizza.js')}}"></script>
@endpush




