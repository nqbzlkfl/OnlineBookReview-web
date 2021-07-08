@extends('layouts.homenav')

@section('content')
<div class="container h-full">
    <div class="row justify-content-center my-12 md:mt-24 md:mb-72">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-blue-200 text-gray-800 font-semibold text-center">{{ __('Successfully Login!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="text-center">{{ __('Welcome to BookReview.') }}</div>
                    <div class="text-center">{{ __('Start browse you favourite book now!') }}</div>
                    <div class="text-center">
                        <button class="bg-blue-600 hover:bg-blue-700 border rounded-md shadow-sm p-2 m-2 text-white" onclick="window.location='{{ url('book-list') }}'">Browse</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
