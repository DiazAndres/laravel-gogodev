@foreach (Config::get('languages') as $lang => $language)
    @if ($lang != App::getLocale())
        <a href="{{ route('lang.switch', $lang) }}">{{ $language }}</a>
    @endif
    {{-- <li class="nav-item">
        <a class="nav-link {{ app()->getLocale() == $lang ? 'active' : '' }}" href="{{ route('lang.switch', $lang) }}">
            <img src="{{ asset('images/flags/' . $lang . '.png') }}" alt="{{ $language }}" class="flag-icon">
            {{ $language }}
        </a>
    </li> --}}
@endforeach
