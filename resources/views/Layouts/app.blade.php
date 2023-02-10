<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acme</title>
</head>
<body>
        @yield('content')

        @section('sidebar')
            <div class="sidebar">
                <h3>Sidebar</h3>
                This is a side bar
                @show

            </div>
</body>
</html>

