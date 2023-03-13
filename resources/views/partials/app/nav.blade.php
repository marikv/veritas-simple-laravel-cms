<?php
$locale = \App\Http\Controllers\Application\LangController::getLocale();
?>
<style>
</style>

<nav id="top-nav" class="navbar is-transparent is-fixed-top">
    <div class="navbar-brand">
        <a href="{{ route('root') }}" class="brand-wrapper">
            <img class="brand-img" src="{{ asset(config('settings.logo')) }}" alt="{{ config('settings.site_title') }}">
            <span class="brand-text">{{ config('settings.site_title') }}</span>
        </a>
        <a href="javascript:void(0)" onclick="toggleMobileMenu()" role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div id="menu" class="navbar-menu">
        <div class="navbar-end">
            <a class="navbar-item navbar-main-links" href="/">
                @if ($locale === 'ru')
                    Главная
                @else
                    Home
                @endif
            </a>
            @foreach (getMenu() as $p)
                @if ($p->children->count() > 0)
                    <div class="navbar-item has-dropdown is-hoverable">
                        <div class="navbar-link">
                            <a class="navbar-item navbar-main-links {{ active($p) }}" href="{{ $p->link }}">
                                @if ($locale === 'ru')
                                    {{ $p->title_ru }}
                                @else
                                    {{ $p->title }}
                                @endif
                            </a>
                        </div>
                        <div class="navbar-dropdown">
                            @foreach ($p->children as $child)
                                <a class="navbar-item {{ active($child) }}" href="{{ $child->link }}">
                                    @if ($locale === 'ru')
                                        {{ $child->title_ru }}
                                    @else
                                        {{ $child->title }}
                                    @endif
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a class="navbar-item navbar-main-links" href="{{ $p->link }}">
                        @if ($locale === 'ru')
                            {{ $p->title_ru }}
                        @else
                            {{ $p->title }}
                        @endif
                    </a>
                @endif
            @endforeach
            <a class="navbar-item navbar-main-links" href="/#contacts">
                @if ($locale === 'ru')
                    Контакты
                @else
                    Contacte
                @endif
            </a>
            <div class="is-flex">
                <a href="{{ route('changeLang') }}?lang=ru" class="navbar-item lang {{ session()->get('locale') == 'ru' ? 'active' : '' }}">Ru</a>
                <a href="{{ route('changeLang') }}?lang=ro" class="navbar-item lang {{ session()->get('locale') == 'ro' ? 'active' : '' }}">Ro</a>
            </div>
            <div class="navbar-item" style="padding-top: 3px;padding-right: 1px;">
                <a href="" class="button is-danger no-radius p-5">
                    +373 69 022 534
                </a>
            </div>
        </div>
    </div>
</nav>


<script>
    let lastKnownScrollPosition = 0;
    let ticking = false;

    function onVerticalScroll(scrollPos) {
        if (scrollPos > 90) {
            // document.getElementById('top-nav').classList.remove('is-transparent');
            document.getElementById('top-nav').classList.add('nav-white-bg');
        } else {
            // document.getElementById('top-nav').classList.add('is-transparent');
            document.getElementById('top-nav').classList.remove('nav-white-bg');
        }
    }

    document.addEventListener("scroll", (event) => {
        lastKnownScrollPosition = window.scrollY;

        if (!ticking) {
            window.requestAnimationFrame(() => {
                onVerticalScroll(lastKnownScrollPosition);
                ticking = false;
            });

            ticking = true;
        }
    });

    function toggleMobileMenu() {
        const burger = document.querySelector('.navbar-burger');
        const menu = document.querySelector('.navbar-menu');
        const navbar = document.querySelector('#top-nav');
        const wasActive = burger.classList.contains('is-active');
        const wasWhite = navbar.classList.contains('nav-white-bg');
        burger.classList.toggle('is-active');
        menu.classList.toggle('is-active');

        if (!wasActive) {
            navbar.classList.add('nav-white-bg');
        } else {
            if (!wasWhite) {
                navbar.classList.remove('nav-white-bg');
            }
        }
    }
</script>
