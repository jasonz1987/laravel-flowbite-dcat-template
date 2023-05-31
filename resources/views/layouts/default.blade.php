<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css
" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])

    @yield('css')
</head>

<body>

    @include('includes.header')

    @yield('content')

    @include('includes.footer')


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js
"></script>


    @yield('script')

    <script>
        $(document).ready(function() {
            $('#language-dropdown-menu li').on('click', function() {
                var lang = $(this).data('lang');
                $.ajax({
                    url: "{{url('locale/switch')}}",
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        locale: lang
                    },
                    success: function(response) {
                        if (response.code == 200) {
                            window.location.reload();
                        }
                    }
                });
            })


        });

    </script>

    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?274a7cc186abdbc66fff437b79a5763b";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();

    </script>




</body>

</html>
