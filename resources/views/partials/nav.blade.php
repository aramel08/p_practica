<nav class="navbar bg-white shadow-sm">
    <a class="navbar-brand" href="{{route('home')}}">
    {{config('app.name')}}
</a>
<ul class="nav">
    <li class="{{setActive('home') }}"><a href="/">@lang('Home')</a></li>
    <li class="{{setActive('contact')}}"><a href="/contact">@lang('Contact')</a></li>
</ul>

</nav>