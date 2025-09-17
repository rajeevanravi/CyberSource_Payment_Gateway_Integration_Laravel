<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberSource Payment Demo</title>

    {{-- Bootstrap for styling --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Custom CSS --}}
    <style>
        body {
            background: #f8f9fa;
            font-family: Arial, sans-serif;
            padding-top: 30px;
        }

        .container {
            max-width: 800px;
        }

        fieldset {
            background: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        legend {
            font-weight: bold;
            font-size: 1.2rem;
        }

        span.fieldName {
            display: inline-block;
            width: 220px;
            font-weight: bold;
        }

        span.fieldValue {
            display: inline-block;
            width: 400px;
        }
    </style>

    @stack('styles')
</head>

<body>
    <div class="container">
        <h2 class="mb-4 text-center">CyberSource Payment Demo</h2>

        {{-- Content from child views --}}
        @yield('content')
    </div>

    {{-- jQuery & Bootstrap JS --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>

</html>
