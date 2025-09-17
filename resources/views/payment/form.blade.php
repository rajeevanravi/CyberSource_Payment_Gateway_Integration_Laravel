@extends('layouts.app')

@section('content')
    <form id="payment_form" action="{{ url('/payment/confirm') }}" method="post">
        @csrf
        <input type="hidden" name="access_key" value="{{ config('services.cybersource.access_key') }}">
        <input type="hidden" name="profile_id" value="{{ config('services.cybersource.profile_id') }}">
        <input type="hidden" name="transaction_uuid" value="{{ uniqid() }}">
        <input type="hidden" name="signed_field_names"
            value="access_key,profile_id,transaction_uuid,signed_field_names,unsigned_field_names,signed_date_time,locale,transaction_type,reference_number,amount,currency,payment_method,bill_to_forename,bill_to_surname,bill_to_address_line1,bill_to_address_city,bill_to_address_state,bill_to_address_country,bill_to_address_postal_code,bill_to_email">
        <input type="hidden" name="unsigned_field_names">
        <input type="hidden" name="signed_date_time" value="{{ gmdate('Y-m-d\TH:i:s\Z') }}">
        <input type="hidden" name="locale" value="en">
        <input type="hidden" name="payment_method" value="card">

        <fieldset>
            <legend>Payment Details</legend>
            <span>transaction_type:</span><input type="text" name="transaction_type"><br />
            <span>reference_number:</span><input type="text" name="reference_number"><br />
            <span>amount:</span><input type="text" name="amount"><br />
            <span>currency:</span><input type="text" name="currency"><br />
            <span>bill_to_forename:</span><input type="text" name="bill_to_forename"><br />
            <span>bill_to_surname:</span><input type="text" name="bill_to_surname"><br />
            <span>bill_to_address_line1:</span><input type="text" name="bill_to_address_line1"><br />
            <span>bill_to_address_city:</span><input type="text" name="bill_to_address_city"><br />
            <span>bill_to_address_state:</span><input type="text" name="bill_to_address_state"><br />
            <span>bill_to_address_country:</span><input type="text" name="bill_to_address_country"><br />
            <span>bill_to_address_postal_code:</span><input type="text" name="bill_to_address_postal_code"><br />
            <span>bill_to_email:</span><input type="email" name="bill_to_email"><br />
        </fieldset>

        <button type="submit">Submit</button>
    </form>
@endsection
