@extends('layouts.app')

@section('content')
    <form id="payment_confirmation" action="https://testsecureacceptance.cybersource.com/pay" method="post">
        <fieldset>
            <legend>Review Payment Details</legend>
            <div>
                @foreach ($params as $name => $value)
                    <div>
                        <span class="fieldName">{{ $name }}</span>
                        <span class="fieldValue">{{ $value }}</span>
                    </div>
                    <input type="hidden" name="{{ $name }}" value="{{ $value }}">
                @endforeach
                <input type="hidden" name="signature" value="{{ $signature }}">
            </div>
        </fieldset>
        <button type="submit">Confirm</button>
    </form>
@endsection
