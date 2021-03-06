@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('New Product') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('products.store') }}">

                            @include('products.partials._form', ['btnText' => 'Save'])

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
