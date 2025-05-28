@include('layouts.masterHeader')
<div class="page-wrapper">
    @include('layouts.header')
    @include('layouts.sidebar')
    <div class="content-wrapper">
        @yield('main-page')
        @include('layouts.footer')
    </div>
</div>
@include('layouts.themePanel')
@include('layouts.pageBackdrops')
@include('layouts.masterFooter')