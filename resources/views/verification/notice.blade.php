@extends('layouts.app')

@section('content')

    <div class="bg-light p-5 rounded">
        <h1>@lang('words.Dashboard')</h1>
        
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                @lang('words.fresh-email')
            </div>
        @endif

        @lang('words.before-proceeding')
        <form action="{{ route('verification.resend') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="d-inline btn btn-link p-0">
                @lang('words.click here to request another')
            </button>.
        </form>
    </div>
@endsection