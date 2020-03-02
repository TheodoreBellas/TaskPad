<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

{{-- Head Include --}}
@include('layouts.partials.head')
{{-- End Include --}}

<body>
    <div id="app">
        {{-- Navigation Include --}}
        @include('layouts.partials.nav')
        {{-- End Include --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
