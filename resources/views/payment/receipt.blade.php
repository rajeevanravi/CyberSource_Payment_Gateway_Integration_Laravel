@extends('layouts.app')

@section('content')
    <fieldset id="response">
        <legend>Receipt</legend>
        <div>
            <h2>payment received</h2>

            {{-- <h3>Raw Data:</h3>
            <pre>{{ $raw }}</pre>

            <h3>Parsed POST Data:</h3>
            @if (!empty($post))
                <ul>
                    @foreach ($post as $key => $value)
                        <li><strong>{{ $key }}:</strong> {{ $value }}</li>
                    @endforeach
                </ul>
            @else
                <p>No POST data received.</p>
            @endif --}}
        </div>
    </fieldset>
@endsection
