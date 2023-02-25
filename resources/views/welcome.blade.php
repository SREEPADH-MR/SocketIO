<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <script src="{{ asset('/js/app.js') }}"></script>
    <script>
        window.Echo.channel('test-channel')
            .listen('.test-event', (e) => {
                console.log(e);
                alert(e.message);
            });

        Echo.channel('test-channel')
            .listen('.test-event', (e) => {
                console.log(e);
                alert(e.message);
            })

        // window.Echo.channel('test-channel')
        //     .listen('test-event', (e) => {
        //         console.log(e);
        //         alert(e.message);
        //     });

        // Echo.channel('test-channel')
        //     .listen('test-event', (e) => {
        //         console.log(e);
        //         alert(e.message);
        //     })

        console.log(window.Echo)
    </script>

</body>

</html>