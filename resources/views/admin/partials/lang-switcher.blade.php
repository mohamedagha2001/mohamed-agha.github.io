@php
$locale=LaravelLocalization::getCurrentLocale()  == 'ar' ? 'en' : 'ar'
@endphp
<a class="nav-link text-muted my-2 text-primary" href="{{ LaravelLocalization::getLocalizedURL( $locale) }}" id="LangSwitcher"  >
{{  LaravelLocalization::getCurrentLocale()  == 'ar' ? 'EN' : 'العربية';}}
</a>