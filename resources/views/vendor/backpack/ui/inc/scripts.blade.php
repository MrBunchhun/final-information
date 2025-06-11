<head>
    <meta name="csrf-token" content="your_csrf_token_here">
    
    <!-- 1. Load jQuery first -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- 2. Then your custom script -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        });
    </script>
</head>
