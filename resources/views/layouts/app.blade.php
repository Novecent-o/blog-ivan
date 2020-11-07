<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  {{-- Header --}}
  @include('partials.head')

<body>

  {{-- Wrapper --}}
  <div class="wrapper_blog">

    {{-- Header --}}
    @include('partials.header')

    {{-- Main --}}
    <main class="p-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

  </div>

  {{-- Jquery --}}
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}

  {{-- JavaScript --}}
  {{-- <script src="script.js"></script> --}}

</body>
</html>
