<div class="language-switcher">
  <a href="{{ route('language.switch', 'en') }}" class="nav-link-2 w-nav-link {{ get_locale() === 'en' ? 'active' : '' }}">EN</a>
  <a href="{{ route('language.switch', 'fr') }}" class="nav-link-2 w-nav-link {{ get_locale() === 'fr' ? 'active' : '' }}">FR</a>
  <a href="{{ route('language.switch', 'de') }}" class="nav-link-2 w-nav-link {{ get_locale() === 'de' ? 'active' : '' }}">DE</a>
</div>
