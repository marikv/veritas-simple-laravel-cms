@extends('layouts.app')
<?php
$locale = \App\Http\Controllers\Application\LangController::getLocale();
?>

@include('partials.app.sections', [
'title' => getTitle($title),
'description' => getDescription($description),
'image' => getImage()
])

<?php

    $block1Title = 'Consiliere juridică, abordare specială pentru tine și compania ta.';
    $block1Description = 'Folosim abordări inovatoare pentru a rezolva cele mai grele provocări pentru afaceri.';
    $block2Title = 'Firmă de avocatură care oferă consultanță pe o gamă largă de probleme corporative';
    $block2Description = 'Virtutea dreptății constă în moderație, așa cum este reglementată de înțelepciune.';
    $block3Title = 'Consultanță la inițierea afacerii';
    $block3Description = 'Utilizăm cadrele agile pentru a oferi un rezumat solid pentru prezentări de ansamblu la nivel înalt. Abordări iterative ale strategiei corporative.';
    $block4Title = 'Justiție pentru toți';
    $block4Description = 'Creșteți organic viziunea holistică asupra inovației perturbatoare prin diversitatea la locul de muncă și împuternicirea valorii generale.';
    $block5Title = 'Suntem specializati in drept corporativ, litigii, proprietati comerciale si rezidentiale.';
    $block5Description = '';
    $block6Title = 'Echipa noastră de conducere profesionistă se angajează cu adevărat să producă cele mai bune rezultate pentru clienții noștri cu mare succes.';
    $block6Description = 'Obiectivul pe care ni-l propunem este reprezentarea unui punct de referință pentru fiecare tip de activitate antreprenorială, capabilă să garanteze o gamă vastă de servicii de consultanță înalt calificate, în sprijinul diferitelor nevoi de afaceri.';
    $block7Title = 'Este datoria noastră să găsim soluții producând cele mai bune rezultate';
    $block7Description = '';
    $block8Title = 'La Legal-Veritas, suntem conduși de viziunea comună a succesului, nu de taxe.';
    $block8Description = '';
    $block9Title = 'Noi suntem aici pentru tine 24 de ore pe zi, 7 zile pe săptămână';
    $block9Description = '';

    if ($blocks) {
        foreach ($blocks as $block) {
            ${'block'.$block->id.'Title'} = $locale === 'ru' ? $block->title_ru : $block->title;
            ${'block'.$block->id.'Description'} = $locale === 'ru' ? $block->description_ru : $block->description;
        }
    }
?>
@section('content')
    <style>
        html, body {
            width: auto !important;
            overflow-x: hidden !important;
        }

        .blocks-wrapper {
            background: #f8f9fa;
            display: flex;
            flex-wrap: nowrap;
        }
        .blocks-column {
            width: 50%;
            padding: 90px 15px 70px 15px;
        }
        .blocks-column__button-wrapper {
            cursor: pointer;
            width: 50%;
        }
        .landing-blocks__icon {
            -webkit-transition: all 280ms ease;
            -moz-transition: all 280ms ease;
            transition: all 280ms ease;
            -webkit-flex: 1 0 auto;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
            display: block;
            vertical-align: middle;
            text-align: center;
            width: 75px;
            min-width: 75px;
            max-width: 75px;
            height: 75px;
            max-height: 75px;
            min-height: 75px;
            line-height: 2;
            text-decoration: none;
            margin-bottom: 0;
            background-color: #bf0000;
            border: 1px solid #bf0000;
            color: white;
            margin-right: 15px;
        }
        .landing-blocks__pen {
            background-image: url('/i/icons/pen_2_white.svg');
            background-size: 70%;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .landing-blocks__pen:hover {
            background-image: url('/i/icons/pen_2_red.svg');
            background-color: white !important;
        }
        .landing-blocks__court {
            background-image: url('/i/icons/court_white.svg');
            background-size: 70%;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .landing-blocks__court:hover {
            background-image: url('/i/icons/court_red.svg');
            background-color: white !important;
        }
        .landing-blocks__line-chart {
            background-image: url('/i/icons/line-chart_white.svg');
            background-size: 70%;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .landing-blocks__line-chart:hover {
            background-image: url('/i/icons/line-chart_red.svg');
            background-color: white !important;
        }
        .landing-blocks__line-map {
            background-image: url('/i/icons/map_white.svg');
            background-size: 70%;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .landing-blocks__line-map:hover {
            background-image: url('/i/icons/map_red.svg');
            background-color: white !important;
        }
        .landing-blocks__certificate {
            background-image: url('/i/icons/certificate_white.svg');
            background-size: 70%;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .landing-blocks__certificate:hover {
            background-image: url('/i/icons/certificate_red.svg');
            background-color: white !important;
        }
        .landing-blocks__admin {
            background-image: url('/i/icons/desk-chair_white.svg');
            background-size: 70%;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .landing-blocks__admin:hover {
            background-image: url('/i/icons/desk-chair_red.svg');
            background-color: white !important;
        }
        .landing-blocks__house {
            background-image: url('/i/icons/house_white.svg');
            background-size: 70%;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .landing-blocks__house:hover {
            background-image: url('/i/icons/house_red.svg');
            background-color: white !important;
        }
        .landing-blocks__clock {
            background-image: url('/i/icons/clock_white.svg');
            background-size: 70%;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .landing-blocks__clock:hover {
            background-image: url('/i/icons/clock_red.svg');
            background-color: white !important;
        }
        .landing-blocks__phone {
            background-image: url('/i/icons/phone_white.svg');
            background-size: 70%;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .landing-blocks__phone:hover {
            background-image: url('/i/icons/phone_red.svg');
            background-color: white !important;
        }
        .landing-blocks__email {
            background-image: url('/i/icons/email_white.svg');
            background-size: 70%;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .landing-blocks__email:hover {
            background-image: url('/i/icons/email_red.svg');
            background-color: white !important;
        }
        .landing-blocks__home {
            background-image: url('/i/icons/home_white.svg');
            background-size: 70%;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .landing-blocks__home:hover {
            background-image: url('/i/icons/home_red.svg');
            background-color: white !important;
        }
        .landing-blocks__money {
            background-image: url('/i/icons/account-money_white.svg');
            background-size: 70%;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .landing-blocks__money:hover {
            background-image: url('/i/icons/account-money_red.svg');
            background-color: white !important;
        }

        .blocks-column-1 {
            background-image: url('/i/uploads/bg/inner_hero_red.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: end;
            padding-right: 30px;
            color: white;
        }
        .blocks-column-1 .landing-blocks__title,
        .blocks-column-1 .landing-blocks__subtitle,
        .blocks-column-1 .landing-blocks__text {
            color: white;
        }
        .blocks-column-2 {
            padding-left: 60px;
        }
        .blocks-column__inner {
            max-width: 650px;
        }
        .progress {
            border: 1px solid white;
            border-radius: 2px;
        }
        a.blocks-column__button-arrow-right {
            display:block;
            height: 20px;
            width: 40px;
            background-color: transparent;
            border: none;
            background-image: url('/i/icons/right-arrow_red.svg');
            background-repeat: no-repeat;
            background-size: contain;
        }
        .blocks-column__button-wrapper:hover a.blocks-column__button-arrow-right {
            background-image: url('/i/icons/right-arrow_black.svg');
        }

        .blocks-column__button-wrapper:hover .landing-blocks__certificate {
            background-image: url('/i/icons/certificate_red.svg');
            background-color: white !important;
        }
        .blocks-column__button-wrapper:hover .landing-blocks__admin {
            background-image: url('/i/icons/desk-chair_red.svg');
            background-color: white !important;
        }
        .blocks-column__button-wrapper:hover .landing-blocks__house {
            background-image: url('/i/icons/house_red.svg');
            background-color: white !important;
        }
        .blocks-column__button-wrapper:hover .landing-blocks__clock {
            background-image: url('/i/icons/clock_red.svg');
            background-color: white !important;
        }
        .blocks-column__button-wrapper:hover .landing-blocks__phone {
            background-image: url('/i/icons/phone_red.svg');
            background-color: white !important;
        }
        .blocks-column__button-wrapper:hover .landing-blocks__email {
            background-image: url('/i/icons/email_red.svg');
            background-color: white !important;
        }
        .blocks-column__button-wrapper:hover .landing-blocks__home {
            background-image: url('/i/icons/home_red.svg');
            background-color: white !important;
        }

        .blocks-column__button-wrapper:hover .landing-blocks__money {
            background-image: url('/i/icons/account-money_red.svg');
            background-color: white !important;
        }
        .blocks-column__button-text {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .blocks-column-3 {
            background-image: none;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: end;
            padding-right: 30px;
            padding-top: 160px;
        }
        .blocks-column-4 {
            background-image: url('/i/uploads/persons/people_look_up.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .landing-blocks__court-3 {
            position: absolute;
            right: 0;
            top: 0;
            height: 110px;
            width: 110px;
            min-width: 110px;
            min-height: 110px;
            margin: 0;
        }
        .blocks-column-3 .landing-blocks__subtitle {
            margin-top: 60px;
            margin-bottom: 60px;
        }

        .blocks-column-5 {
            background-image: url('/i/uploads/persons/hands.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .blocks-column-6 {
            background-image: none;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: start;
            padding-left: 60px;
            padding-top: 160px;
        }
        .landing-blocks__line-map-6,
        .landing-blocks__line-chart-6 {
            position: absolute;
            left: 0;
            top: 0;
            height: 110px;
            width: 110px;
            min-width: 110px;
            min-height: 110px;
            margin: 0;
        }
        .clients-list img {
            max-height: 150px;
        }
        @media (max-width: 1024px) {
            .blocks-column__map {
                display:none;
            }
            .blocks-column-6 {
                padding-left: 15px;
                padding-top: 60px;
            }
            .landing-blocks__icon,
            .landing-blocks__court-3,
            .landing-blocks__line-map-6,
            .landing-blocks__line-chart-6 {
                height: 50px;
                width: 50px;
                min-width: 50px;
                min-height: 50px;
                max-width: 50px;
                max-height: 50px;
            }
            .landing-top-text {
                width: calc(100% - 15px);
                margin: 170px 15px;
            }
            .landing-top-text__square {
                left: -10px;
                top: -40px;
                z-index: 1;
                width: 120px;
                height: 120px;
            }
            .landing-top-text__title {
                font-size: 30px;
                font-weight: 600;
                line-height: 1.3;
            }
            .landing-top-text__subtitle {
                font-size: 20px;
                font-weight: 300;
                line-height: 1.2;
                padding-top: 25px;
            }
        }
        @media (max-width: 768px) {
            .column {
                padding-right: 0;
                padding-left: 0;
            }
            .landing-top-person {
                background-image: none !important;
            }
            .blocks-wrapper {
                display: flex;
                flex-wrap: wrap;
            }
            .blocks-column {
                width: 100%;
                padding: 40px 10px 30px 10px;
            }
            .blocks-column-4 {
                min-height: 500px;
                background-position: center;
            }
            .blocks-column-5 {
                display: none;
            }
            .blocks-column__button-wrapper {
                width: 100%;
            }
            .landing-blocks__subtitle {
                font-size: 22px;
                line-height: 24px;
                margin-bottom: 30px;
            }
            .landing-blocks__subtitle2 {
                font-size: 17px;
                line-height: 20px;
                margin-bottom: 6px;
            }
            .landing-double-blocks {
                margin: 10px 0 10px 0;
                padding: 18px;
            }
            .landing-double-blocks-2 {
                margin-top: 10px
            }
            .clients-list img {
                max-height: 100px;
            }
        }
    </style>

    <div class="landing-top-wrapper">
        <div class="container" style="position: relative;" >
            <div class="landing-top-text">
                <div class="landing-top-text__square"></div>
                <div class="landing-top-text__title">
                    {{ $block1Title }}
                    <div class="landing-top-text__subtitle">
                        {{ $block1Description }}
                    </div>
                    <div class="landing-top-text__subtitle">
                        <a class="button is-danger is-outlined is-medium is-responsive is-inverted text-white no-radius p-5 " href="/#contacts">
                            @if ($locale === 'ru')
                                НАШИ КОНТАКТЫ
                            @else
                                CONTACTELE NOASTRE
                            @endif
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="landing-top-person"></div>
    </div>

    <div style="background: #eff3f4;">
        <div class="container" >
            <div class="columns">
                <div  data-aos="fade-left" class="column is-half-desktop is-full-mobile landing-double-blocks landing-double-blocks-1">
                    <div class="landing-blocks__title">
                    @if ($locale === 'ru')
                        01 _____ О НАС
                    @else
                        01 _____ DESPRE NOI
                    @endif
                    </div>
                    <h3 class="landing-blocks__subtitle">{{ $block2Title }}</h3>
                    <div class="landing-blocks__text">{{ $block2Description }}</div>
                </div>
                <div data-aos="fade-right" data-aos-delay="300" class="column is-half-desktop is-full-mobile landing-double-blocks landing-double-blocks-2">
                    <div class="landing-blocks__text is-flex is-flex-wrap-nowrap pb-4">
                        <div class="landing-blocks__icon landing-blocks__pen"></div>
                        <div >
                            <h3 class="landing-blocks__subtitle2">{{ $block3Title }}</h3>
                            <div class="landing-blocks__text">{{ $block3Description }}</div>
                        </div>
                    </div>
                    <div class="landing-blocks__text is-flex is-flex-wrap-nowrap">
                        <div class="landing-blocks__icon landing-blocks__court"></div>
                        <div >
                            <h3 class="landing-blocks__subtitle2">{{ $block4Title }}</h3>
                            <div class="landing-blocks__text">{{ $block4Description }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blocks-wrapper">
        <div class="blocks-column blocks-column-1" >
            <div data-aos="fade-left" class="blocks-column__inner">
                @if ($locale === 'ru')
                    <div class="landing-blocks__title">02 _____ DOMENIILE DE EXPERȚIE</div>
                @else
                    <div class="landing-blocks__title">02 _____ ОБЛАСТИ ЗНАНИЙ</div>
                @endif
                <h3 class="landing-blocks__subtitle">{{ $block5Title }}</h3>
                <div class="landing-blocks__text">
                    <div class="columns mb-0">
                        <div class="column py-0">
                            @if ($locale === 'ru')
                                Недвижимость и конструкции
                            @else
                                Proprietăți și construcții
                            @endif
                        </div>
                        <div class="column is-one-fifth has-text-right py-0">87%</div>
                    </div>
                    <progress class="progress is-danger" value="87" max="100">87%</progress>

                    <div class="columns mb-0">
                        <div class="column py-0">
                            @if ($locale === 'ru')
                                Банки и финансы
                            @else
                                Bănci și finanțe
                            @endif
                        </div>
                        <div class="column is-one-fifth has-text-right py-0">93%</div>
                    </div>
                    <progress class="progress is-danger" value="93" max="100">93%</progress>

                    <div class="columns mb-0">
                        <div class="column py-0">
                            @if ($locale === 'ru')
                                Технологии и медиа
                            @else
                                Tehnologii și media
                            @endif
                        </div>
                        <div class="column is-one-fifth has-text-right py-0">86%</div>
                    </div>
                    <progress class="progress is-danger" value="86" max="100">86%</progress>

                    <div class="columns mb-0">
                        <div class="column py-0">
                            @if ($locale === 'ru')
                                Споры
                            @else
                                Litigii
                            @endif
                        </div>
                        <div class="column is-one-fifth has-text-right py-0">95%</div>
                    </div>
                    <progress class="progress is-danger" value="95" max="100">95%</progress>
                </div>
            </div>
        </div>
        <div class="blocks-column blocks-column-2">
            <div data-aos="fade-right"  data-aos-delay="300" class="blocks-column__inner">
                <h4 class="landing-blocks__subtitle2">{{ $block6Title }}</h4>
                <div class="landing-blocks__text">{{ $block6Description }}</div>
                <div class="landing-blocks__text is-flex is-flex-wrap-wrap pt-5">
                    <div class="blocks-column__button-wrapper landing-blocks__text is-flex is-flex-wrap-nowrap pb-4">
                        <div class="landing-blocks__icon landing-blocks__certificate"></div>
                        <div class="blocks-column__button-text" >
                            <h3 class="landing-blocks__subtitle2">
                                @if ($locale === 'ru')
                                    Юридические<br>услуги
                                @else
                                    Servicii<br>Juridice
                                @endif
                            </h3>
                            <div class="landing-blocks__text">
                                <a href="" class="blocks-column__button-arrow-right"></a>
                            </div>
                        </div>
                    </div>
                    <div class="blocks-column__button-wrapper landing-blocks__text is-flex is-flex-wrap-nowrap pb-4">
                        <div class="landing-blocks__icon landing-blocks__money"></div>
                        <div class="blocks-column__button-text">
                            <h3 class="landing-blocks__subtitle2">
                                @if ($locale === 'ru')
                                    Бухгалтерские<br>услуги
                                @else
                                    Servicii<br>Contabile
                                @endif
                            </h3>
                            <div class="landing-blocks__text">
                                <a href="" class="blocks-column__button-arrow-right"></a>
                            </div>
                        </div>
                    </div>
                    <div class="blocks-column__button-wrapper landing-blocks__text is-flex is-flex-wrap-nowrap pb-4">
                        <div class="landing-blocks__icon landing-blocks__house"></div>
                        <div class="blocks-column__button-text">
                            <h3 class="landing-blocks__subtitle2">
                                @if ($locale === 'ru')
                                    Услуги в сфере<br>недвижимости
                                @else
                                    Servicii<br>Imobiliare
                                @endif
                            </h3>
                            <div class="landing-blocks__text">
                                <a href="" class="blocks-column__button-arrow-right"></a>
                            </div>
                        </div>
                    </div>
                    <div class="blocks-column__button-wrapper landing-blocks__text is-flex is-flex-wrap-nowrap pb-4">
                        <div class="landing-blocks__icon landing-blocks__admin"></div>
                        <div class="blocks-column__button-text">
                            <h3 class="landing-blocks__subtitle2">
                                @if ($locale === 'ru')
                                    Административные<br>услуги
                                @else
                                    Servicii<br>Administrative
                                @endif
                            </h3>
                            <div class="landing-blocks__text">
                                <a href="" class="blocks-column__button-arrow-right"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blocks-wrapper" style="background: #eff3f4;">
        <div class="container py-6">
            <div class="landing-blocks__title">
                @if ($locale === 'ru')
                    03 _____ НАШИ КЛИЕНТЫ
                @else
                    03 _____ CLIENȚII NOȘTRI
                @endif
            </div>
            <div class="is-flex is-flex-wrap-wrap is-justify-content-center clients-list">
                <img src="/i/uploads/companies/client-logo-04.png" alt=""  />
                <img src="/i/uploads/companies/creditbox.png" alt="" />
            </div>
        </div>
    </div>

    <div class="blocks-wrapper">
        <div data-aos="fade-left"  data-aos-delay="0" class="blocks-column blocks-column-3 is-relative">
            <div class="landing-blocks__icon landing-blocks__court landing-blocks__court-3" style=""></div>

            <div class="blocks-column__inner">
                <div class="landing-blocks__title">
                    @if ($locale === 'ru')
                        04 _____ РАБОТАЙ С НАМИ
                    @else
                        04 _____ LUCREAZĂ CU NOI
                    @endif
                </div>
                <h3 class="landing-blocks__subtitle">{{ $block7Title }}</h3>
                <a href="#" class="button is-danger is-outlined no-radius p-4 py-5 mb-5">
                    @if ($locale === 'ru')
                        ЗАПРОСИТЬ БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ
                    @else
                        CERE O CONSULTAȚIE GRATUITA
                    @endif
                </a>
            </div>
        </div>
        <div data-aos="fade-right"  data-aos-delay="300" class="blocks-column blocks-column-4">
        </div>
    </div>

    <div class="blocks-wrapper">
        <div data-aos="fade-left"  data-aos-delay="0" class="blocks-column blocks-column-5"></div>
        <div data-aos="fade-right"  data-aos-delay="300" class="blocks-column blocks-column-6 is-relative">
            <div class="landing-blocks__icon landing-blocks__line-chart landing-blocks__line-chart-6" style=""></div>

            <div class="blocks-column__inner">
                <div class="landing-blocks__title pt-6">
                    @if ($locale === 'ru')
                        05 _____ НАШ ВЗГЛЯД
                    @else
                        05 _____ VIZIUNEA NOASTRĂ
                    @endif
                </div>
                <h3 class="landing-blocks__subtitle pt-6">{{ $block8Title }}</h3>
                <a href="/p/despre-noi" class="button is-danger is-outlined no-radius p-4 py-5 mb-5">
                    @if ($locale === 'ru')
                        О НАС
                    @else
                        DESPRE NOI
                    @endif
                </a>
            </div>
        </div>
    </div>

    @include('partials.app.hero')

    <div id="contacts" class="blocks-wrapper">
        <div class="blocks-column blocks-column__map" style="padding: 0;">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa510d0e2c7d34ab5922e693ce356b39fde2f87308cd3b6a0ce757384e95eefba&amp;source=constructor" width="100%" height="720" frameborder="0"></iframe>
        </div>
        <div class="blocks-column blocks-column-6 is-relative">
            <div class="landing-blocks__icon landing-blocks__line-map landing-blocks__line-map-6" style=""></div>

            <div class="blocks-column__inner">
                <div class="landing-blocks__title pt-6">
                    @if ($locale === 'ru')
                        06 _____ КОНТАКТЫ И МЕСТОПОЛОЖЕНИЕ
                    @else
                        06 _____ CONTACTE ȘI LOCAȚIE
                    @endif
                </div>
                <h3 class="landing-blocks__subtitle pt-6">{{ $block9Title }}</h3>

                <div class="landing-blocks__text is-flex is-flex-wrap-wrap pt-5">
                    <div data-aos="fade-left" data-aos-duration="300" data-aos-delay="0"
                         class="blocks-column__button-wrapper landing-blocks__text is-flex is-flex-wrap-nowrap pb-4">
                        <div class="landing-blocks__icon landing-blocks__phone"></div>
                        <div class="blocks-column__button-text" >
                            <h3 class="landing-blocks__subtitle2">
                                @if ($locale === 'ru')
                                    Телефон
                                @else
                                    Telefon
                                @endif
                            </h3>
                            <div class="landing-blocks__text">
                                <a href="" class="">+373 (231) 4-59-99</a>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-duration="300" data-aos-delay="300"
                         class="blocks-column__button-wrapper landing-blocks__text is-flex is-flex-wrap-nowrap pb-4">
                        <div class="landing-blocks__icon landing-blocks__home"></div>
                        <div class="blocks-column__button-text">
                            <h3 class="landing-blocks__subtitle2">
                                @if ($locale === 'ru')
                                    Адрес
                                @else
                                    Adresa
                                @endif
                            </h3>
                            <div class="landing-blocks__text">
                                <a href="" class="">or. Bălți, str. Ștefan cel Mare, 57</a>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-duration="300" data-aos-delay="600"
                         class="blocks-column__button-wrapper landing-blocks__text is-flex is-flex-wrap-nowrap pb-4">
                        <div class="landing-blocks__icon landing-blocks__clock"></div>
                        <div class="blocks-column__button-text">
                            <h3 class="landing-blocks__subtitle2">
                                @if ($locale === 'ru')
                                    Часы
                                @else
                                    Ore
                                @endif
                            </h3>
                            <div class="landing-blocks__text">
                                Luni-Vineri: 8:00 - 18:00
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-duration="300" data-aos-delay="900" class="blocks-column__button-wrapper landing-blocks__text is-flex is-flex-wrap-nowrap pb-4">
                        <div class="landing-blocks__icon landing-blocks__email"></div>
                        <div class="blocks-column__button-text">
                            <h3 class="landing-blocks__subtitle2">Email</h3>
                            <div class="landing-blocks__text">
                                <a href="mailto:legalveritasmd@gmail.com" class="">legalveritasmd@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <section class="section">--}}
{{--        <div class="container">--}}
{{--            @include('partials.app.articles')--}}
{{--        </div>--}}
{{--    </section>--}}
@endsection
