@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About of {{ Auth::user()->name }} </div>

                <div class="card-body">
                   
                   
                   

                   <ol>
                       <li> User Name: {{ Auth::user()->name }} </li>
                       <li> Email: {{ Auth::user()->email }} </li>
                       <li> Phone: {{ Auth::user()->phone }}</li>
                   </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
