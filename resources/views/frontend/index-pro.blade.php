@extends('frontend.layouts.master')
@section('title', 'ECO-Services || HOME PRO')
@section('main-content')
    <!-- Slider Area -->
    {{-- @if (count($banners->where('status', 'inactive')) > 0)
        <section id="Gslider" class="carousel slide" data-ride="carousel">
            @if (count($banners->where('status', 'inactive')) > 1)
                <ol class="carousel-indicators">
                    @foreach ($banners->where('status', 'inactive') as $key => $banner)
                        <li data-target="#Gslider" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}">
                        </li>
                    @endforeach
                </ol>
            @endif
            <div class="carousel-inner" role="listbox">
                @foreach ($banners->where('status', 'inactive') as $key => $banner)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img class="first-slide" src="{{ $banner->photo }}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block text-center">
                            <h1 class="wow fadeInDown">{{ $banner->title }}</h1>
                            <p>{!! html_entity_decode($banner->description) !!}</p>
                            <a class="btn-donate wow fadeInUpBig" href="{{ route('product-grids') }}"
                                role="button">Donate<i class="far fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
            @if (count($banners->where('status', 'inactive')) > 1)
                <a class="carousel-control-prev" href="#Gslider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#Gslider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            @endif
        </section>
    @endif --}}
    <!--/ End Slider Area -->

    <div class="moto-widget moto-widget-block moto-bg-color1_3 moto-background-fixed moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto"
        data-widget="block" data-spacing="lala"
        style="background-image:url(/storage/photos/1/Banner/mt-1961-content-bg-1.jpg);background-position:center;background-repeat:no-repeat;background-size:cover;"
        data-bg-position="center">


        <div class="container-fluid">
            <div class="row">
                <div class="moto-cell col-sm-12" data-container="container">

                    <div data-widget-id="wid_1543669195_jlz9md7sv"
                        class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto moto-visible-on_tablet_hidden moto-visible-on_mobile-h_hidden moto-visible-on_mobile-v_hidden"
                        data-widget="spacer" data-preset="default" data-spacing="lasa" data-visible-on="+desktop">
                        <div class="moto-widget-spacer-block" style="height:10px"></div>
                    </div>
                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-small"
                        data-widget="text" data-preset="default" data-spacing="asss" data-animation="">
                        <div class="moto-widget-text-content moto-widget-text-editable">
                            <h1 class="moto-text_system_5" style="text-align: center;">BE A FORCE FOR NATURE</h1>
                        </div>
                    </div>
                    <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto"
                        data-grid-type="sm" data-widget="row" data-spacing="aama" style=""
                        data-bg-position="left top">


                        <div class="container-fluid">
                            <div class="row" data-container="container">


                                <div class="moto-widget moto-widget-row__column moto-cell col-sm-2 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                    style="" data-widget="row.column" data-container="container" data-spacing="aaaa"
                                    data-bg-position="left top">


                                </div>
                                <div class="moto-widget moto-widget-row__column moto-cell col-sm-8 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                    style="" data-widget="row.column" data-container="container" data-spacing="aaaa"
                                    data-bg-position="left top">


                                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                        data-widget="text" data-preset="default" data-spacing="aaaa" data-animation="">
                                        <div class="moto-widget-text-content moto-widget-text-editable">
                                            <p class="moto-text_system_9" style="text-align: center;">An in-depth look at
                                                the process behind one of the most successful application ever created on
                                                iOS AppStore from our developer team.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="moto-widget moto-widget-row__column moto-cell col-sm-2 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                    style="" data-widget="row.column" data-container="container" data-spacing="aaaa"
                                    data-bg-position="left top">


                                </div>

                            </div>
                        </div>
                    </div>
                    <div data-widget-id="wid_1543669098_7s14gkbq7"
                        class="moto-widget moto-widget-button moto-preset-default moto-preset-provider-default moto-align-center moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-auto moto-spacing-left-small  "
                        data-widget="button">
                        <a href="#" data-action="popup" data-popup-id="7"
                            class="moto-widget-button-link moto-size-large moto-link"><span
                                class="fa moto-widget-theme-icon" wfd-invisible="true"></span><span
                                class="moto-widget-button-divider" wfd-invisible="true"></span><span
                                class="moto-widget-button-label">JOIN US</span></a>
                    </div>
                    <div data-widget-id="wid_1543669227_ojz3c0qna"
                        class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto moto-visible-on_tablet_hidden moto-visible-on_mobile-h_hidden moto-visible-on_mobile-v_hidden"
                        data-widget="spacer" data-preset="default" data-spacing="lama" data-visible-on="+desktop">
                        <div class="moto-widget-spacer-block" style="height:10px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ Start Donation Area -->
    <div class="moto-cell col-sm-12" data-container="container" style="margin-top: 6%;">

        <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
            data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="" data-bg-position="left top">


            <div class="container-fluid">
                <div class="row" data-container="container">


                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-5 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                        style="" data-widget="row.column" data-container="container" data-spacing="aaaa"
                        data-bg-position="left top">


                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto"
                            data-widget="text" data-preset="default" data-spacing="sasa" data-animation="">
                            <div class="moto-widget-text-content moto-widget-text-editable">
                                <h2 class="moto-text_system_6">Saving The Grizzlies</h2>
                            </div>
                        </div>
                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto"
                            data-widget="text" data-preset="default" data-spacing="aasa" data-animation=""
                            data-draggable-disabled="">
                            <div class="moto-widget-text-content moto-widget-text-editable">
                                <p class="moto-text_system_7">We're Protecting The Ocean From The Global Challenges</p>
                            </div>
                        </div>
                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto"
                            data-widget="text" data-preset="default" data-spacing="aama" data-animation="">
                            <div class="moto-widget-text-content moto-widget-text-editable">
                                <p class="moto-text_normal">Lorem ipsum dolor sit amet, te scaevola interesset has. Erant
                                    evertitur cu mel, cum eu utinam facete everti. Duo nibh iracundia cu. Graece vocent
                                    facilisis est ex, iisque impedit at sed. In eos tractatos eloquentiam interpretaris,
                                    sale porro dissentias id sea.</p>
                            </div>
                        </div>
                        <div id="wid_1543693882_cm1d2oy8n" data-widget-id="wid_1543693882_cm1d2oy8n"
                            class="moto-widget moto-widget-completion_bars moto-preset-default  moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto moto-after-in-viewport"
                            data-widget="completion_bars">
                            <div
                                class="moto-widget-completion_bars__items moto-widget-completion_bars__rounded-foreground">
                                <div class="moto-widget-completion_bars__item ">
                                    <div class="moto-widget-completion_bars__item-wrapper">
                                        <div class="moto-widget-completion_bars__header">
                                            <span
                                                class="moto-widget-completion_bars__header-item moto-widget-completion_bars__header-label moto-text_186">$94,490
                                                of $150,000 goal</span>
                                            <span
                                                class="moto-widget-completion_bars__header-item moto-widget-completion_bars__header-progress moto-text_normal">
                                                40%
                                            </span>
                                        </div>
                                        <div class="moto-widget-completion_bars__stripe">
                                            <div class="moto-widget-completion_bars__stripe-background moto-bg-color1_3"
                                                style="height:13px;border-radius:13px;border-width:0;">
                                                <div class="moto-widget-completion_bars__stripe-foreground moto-bg-color4_3"
                                                    style="width:40%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto"
                            data-widget="text" data-preset="default" data-spacing="aasa" data-animation="">
                            <div class="moto-widget-text-content moto-widget-text-editable">
                                <p class="moto-text_normal">Eirmod vituperata disputationi duo cu, ne vis exerci
                                    deterruisset, ne est putent repudiare interpretaris. Movet nonumes ut pro, vel id
                                    detraxit consequat.</p>
                            </div>
                        </div>
                        <div data-widget-id="wid_1543694714_ae1gis1gv"
                            class="moto-widget moto-widget-paypal_button moto-widget_with-deferred-content moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto  "
                            data-widget="paypal_button" data-preset="default">
                            <form action="https://www.paypal.com/cgi-bin/webscr" target="_blank"
                                class="moto-widget-paypal_button__form ng-pristine ng-valid">
                                <input type="hidden" name="charset" value="utf-8" wfd-invisible="true">
                                <input type="hidden" name="cmd" value="_donations" wfd-invisible="true">
                                <input type="hidden" name="business" value="" wfd-invisible="true">
                                <input type="hidden" name="item_name" value="" wfd-invisible="true">
                                <input type="hidden" name="currency_code" value="USD" wfd-invisible="true">
                                <div data-widget-id="wid__button__66ab7e645639e"
                                    class="moto-widget moto-widget-button moto-preset-default moto-preset-provider-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  "
                                    data-widget="button">
                                    <button name="submit"
                                        class="moto-widget-button-link moto-size-medium moto-link"><span
                                            class="moto-widget-button-label">DONATE</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-7 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                        style="" data-widget="row.column" data-container="container" data-spacing="aaaa"
                        data-bg-position="left top">


                        <div data-widget-id="wid_1543693222_9p1a79ctw"
                            class="moto-widget moto-widget-image moto-widget_with-deferred-content moto-preset-default moto-align-right moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  "
                            data-widget="image">
                            <span class="moto-widget-image-link">
                                <img data-src="/storage/photos/1/mt-1961-img-1.jpg"
                                    src="/storage/photos/1/mt-1961-img-1.jpg"
                                    class="moto-widget-image-picture moto-widget-deferred-content lazyloaded"
                                    data-id="181" title="" alt="">
                            </span>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <div class="moto-cell col-sm-12" data-container="container" style="margin-top: 6%;">


        <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
            data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style=""
            data-bg-position="left top">


            <div class="container-fluid">
                <div class="row" data-container="container">


                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-7 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                        style="" data-widget="row.column" data-container="container" data-spacing="aaaa"
                        data-bg-position="left top">



                        <div data-widget-id="wid_1580115902_ovvneptqu"
                            class="moto-widget moto-widget-image moto-widget_with-deferred-content moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  "
                            data-widget="image">
                            <span class="moto-widget-image-link">
                                <img data-src="/storage/photos/1/mt-1961-img-6.jpg"
                                    src="/storage/photos/1/mt-1961-img-6.jpg"
                                    class="moto-widget-image-picture moto-widget-deferred-content lazyloaded"
                                    data-id="186" title="" alt="">
                            </span>
                        </div>


                    </div>




                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-5 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                        style="" data-widget="row.column" data-container="container" data-spacing="aaaa"
                        data-bg-position="left top">



                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto"
                            data-widget="text" data-preset="default" data-spacing="sasa" data-visible-on="-"
                            data-animation="">
                            <div class="moto-widget-text-content moto-widget-text-editable">
                                <h2 class="moto-text_system_6">Saving The Penguins</h2>
                            </div>
                        </div>



                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto"
                            data-widget="text" data-preset="default" data-spacing="aasa" data-visible-on="-"
                            data-animation="">
                            <div class="moto-widget-text-content moto-widget-text-editable">
                                <p class="moto-text_system_7">We're Protecting The Ocean From The Global Challenges</p>
                            </div>
                        </div>



                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto"
                            data-widget="text" data-preset="default" data-spacing="aama" data-visible-on="-"
                            data-animation="">
                            <div class="moto-widget-text-content moto-widget-text-editable">
                                <p class="moto-text_normal">Lorem ipsum dolor sit amet, te scaevola interesset has. Erant
                                    evertitur cu mel, cum eu utinam facete everti. Duo nibh iracundia cu. Graece vocent
                                    facilisis est ex, iisque impedit at sed. In eos tractatos eloquentiam interpretaris,
                                    sale porro dissentias id sea.</p>
                            </div>
                        </div>



                        <div id="wid_1580115902_ybxcm3cif" data-widget-id="wid_1580115902_ybxcm3cif"
                            class="moto-widget moto-widget-completion_bars moto-preset-default  moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto moto-after-in-viewport"
                            data-widget="completion_bars">
                            <div
                                class="moto-widget-completion_bars__items moto-widget-completion_bars__rounded-foreground">
                                <div class="moto-widget-completion_bars__item ">
                                    <div class="moto-widget-completion_bars__item-wrapper">
                                        <div class="moto-widget-completion_bars__header">
                                            <span
                                                class="moto-widget-completion_bars__header-item moto-widget-completion_bars__header-label moto-text_186">$94,490
                                                of $150,000 goal</span>
                                            <span
                                                class="moto-widget-completion_bars__header-item moto-widget-completion_bars__header-progress moto-text_normal">
                                                40%
                                            </span>
                                        </div>
                                        <div class="moto-widget-completion_bars__stripe">
                                            <div class="moto-widget-completion_bars__stripe-background moto-bg-color1_3"
                                                style="height:13px;border-radius:13px;border-width:0;">
                                                <div class="moto-widget-completion_bars__stripe-foreground moto-bg-color4_3"
                                                    style="width:40%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto"
                            data-widget="text" data-preset="default" data-spacing="aasa" data-visible-on="-"
                            data-animation="">
                            <div class="moto-widget-text-content moto-widget-text-editable">
                                <p class="moto-text_normal">Eirmod vituperata disputationi duo cu, ne vis exerci
                                    deterruisset, ne est putent repudiare interpretaris. Movet nonumes ut pro, vel id
                                    detraxit consequat.</p>
                            </div>
                        </div>



                        <div data-widget-id="wid_1580115902_0x1dnn2gb"
                            class="moto-widget moto-widget-paypal_button moto-widget_with-deferred-content moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto  "
                            data-widget="paypal_button" data-preset="default">
                            <form action="https://www.paypal.com/cgi-bin/webscr" target="_blank"
                                class="moto-widget-paypal_button__form ng-pristine ng-valid">
                                <input type="hidden" name="charset" value="utf-8" wfd-invisible="true">
                                <input type="hidden" name="cmd" value="_donations" wfd-invisible="true">
                                <input type="hidden" name="business" value="" wfd-invisible="true">
                                <input type="hidden" name="item_name" value="" wfd-invisible="true">
                                <input type="hidden" name="currency_code" value="USD" wfd-invisible="true">
                                <div data-widget-id="wid__button__66ab7e6457134"
                                    class="moto-widget moto-widget-button moto-preset-default moto-preset-provider-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  "
                                    data-widget="button">
                                    <button name="submit"
                                        class="moto-widget-button-link moto-size-medium moto-link"><span
                                            class="moto-widget-button-label">DONATE</span></button>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="moto-cell col-sm-12" data-container="container" style="margin-top:6%; padding-right: 17%;">

        <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
            data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style=""
            data-bg-position="left top">


            <div class="container-fluid">
                <div class="row" data-container="container">


                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-7 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                        style="" data-widget="row.column" data-container="container" data-spacing="aaaa"
                        data-bg-position="left top">


                        <div class="moto-widget moto-widget-row moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                            data-grid-type="md" data-widget="row" data-visible-on="-" data-spacing="maaa"
                            style="" data-bg-position="left top">


                            <div class="container-fluid">
                                <div class="row" data-container="container">


                                    <div class="moto-widget moto-widget-row__column moto-cell col-md-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                        style="" data-widget="row.column" data-container="container"
                                        data-spacing="aaaa" data-bg-position="left top">


                                    </div>
                                    <div class="moto-widget moto-widget-row__column moto-cell col-md-7 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                        style="" data-widget="row.column" data-container="container"
                                        data-spacing="aaaa" data-bg-position="left top">


                                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto"
                                            data-widget="text" data-preset="default" data-spacing="aasa"
                                            data-visible-on="-" data-animation="">
                                            <div class="moto-widget-text-content moto-widget-text-editable">
                                                <p class="moto-text_system_10"><span
                                                        class="moto-content-image-plugin-wrapper moto-spacing-top-zero moto-spacing-right-small moto-spacing-bottom-zero moto-spacing-left-zero"><span
                                                            class="moto-content-image-container"><img
                                                                class="moto-content-image" data-id="200" alt=""
                                                                width="21" height="10"
                                                                src="/storage/photos/1/mt-1961-title-icon-1.png"></span></span>UPCOMING
                                                    EVENT</p>
                                                <p class="moto-text_system_10">&nbsp;</p>
                                                <h2 class="moto-text_system_6">Saving The Whales</h2>
                                            </div>
                                        </div>
                                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto"
                                            data-widget="text" data-preset="default" data-spacing="aasa"
                                            data-animation="">
                                            <div class="moto-widget-text-content moto-widget-text-editable">
                                                <p class="moto-text_system_13">Location: United States, Memphis,
                                                    Shelby Farms Park Date: 25 December 2018</p>
                                                <p class="moto-text_system_13">&nbsp;</p>
                                                <p class="moto-text_normal">Lorem ipsum dolor sit amet, te scaevola
                                                    interesset has. Erant evertitur cu mel, cum eu utinam facete
                                                    everti. Duo nibh iracundia cu. Graece vocent facilisis est ex,
                                                    iisque impedit at sed. In eos tractatos eloquentiam
                                                    interpretaris, sale porro dissentias id sea.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="moto-widget moto-widget-row__column moto-cell col-md-1 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                        style="" data-widget="row.column" data-container="container"
                                        data-spacing="aaaa" data-bg-position="left top">


                                    </div>



                                </div>
                            </div>
                        </div>
                        <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                            data-grid-type="md" data-widget="row" data-visible-on="-" data-spacing="aaaa"
                            style="" data-bg-position="left top">


                            <div class="container-fluid">
                                <div class="row" data-container="container">


                                    <div class="moto-widget moto-widget-row__column moto-cell col-md-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                        style="" data-widget="row.column" data-container="container"
                                        data-spacing="aaaa" data-bg-position="left top">


                                    </div>
                                    <div class="moto-widget moto-widget-row__column moto-cell col-md-8 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                        style="" data-widget="row.column" data-container="container"
                                        data-spacing="aaaa" data-bg-position="left top">


                                        <div data-widget-id="wid_1580130558_p9lpmjgjd"
                                            class="moto-widget moto-widget-countdown moto-preset-default moto-align-left moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto  "
                                            data-widget="countdown" data-on-expiry="stop" data-time="43200000"
                                            data-type="timer">
                                            <timer countdown="countdownTime" interval="1000" class="countdown-timer"
                                                max-time-unit="'day'">
                                                <div class="countdown-item">
                                                    <div class="countdown-item-wrapper">
                                                        <div class="countdown-item-block">
                                                            <div class="countdown-item-content">
                                                                <div class="countdown-item-amount">0
                                                                </div>
                                                                <div class="countdown-item-unit"
                                                                    data-ng-bind="days|humanizeDuration:'days':'en'">
                                                                    days</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="countdown-item-delimiter">:</div>
                                                </div>
                                                <div class="countdown-item">
                                                    <div class="countdown-item-wrapper">
                                                        <div class="countdown-item-block">
                                                            <div class="countdown-item-content">
                                                                <div class="countdown-item-amount">
                                                                    07</div>
                                                                <div class="countdown-item-unit"
                                                                    data-ng-bind="hours|humanizeDuration:'hours':'en'">
                                                                    hours</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="countdown-item-delimiter">:</div>
                                                </div>
                                                <div class="countdown-item">
                                                    <div class="countdown-item-wrapper">
                                                        <div class="countdown-item-block">
                                                            <div class="countdown-item-content">
                                                                <div class="countdown-item-amount">22</div>
                                                                <div class="countdown-item-unit"
                                                                    data-ng-bind="minutes|humanizeDuration:'minutes':'en'">
                                                                    minutes</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="countdown-item-delimiter">:</div>
                                                </div>
                                                <div class="countdown-item">
                                                    <div class="countdown-item-wrapper">
                                                        <div class="countdown-item-block">
                                                            <div class="countdown-item-content">
                                                                <div class="countdown-item-amount">15</div>
                                                                <div class="countdown-item-unit"
                                                                    data-ng-bind="seconds|humanizeDuration:'seconds':'en'">
                                                                    seconds</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </timer>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                        <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto"
                            data-grid-type="md" data-widget="row" data-visible-on="-" data-spacing="aama"
                            style="" data-bg-position="left top">


                            <div class="container-fluid">
                                <div class="row" data-container="container">


                                    <div class="moto-widget moto-widget-row__column moto-cell col-md-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                        style="" data-widget="row.column" data-container="container"
                                        data-spacing="aaaa" data-bg-position="left top">

                                    </div>

                                    <div class="moto-widget moto-widget-row__column moto-cell col-md-7 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                        style="" data-widget="row.column" data-container="container"
                                        data-spacing="aaaa" data-bg-position="left top">

                                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto"
                                            data-widget="text" data-preset="default" data-spacing="sasa"
                                            data-visible-on="-" data-animation="">
                                            <div class="moto-widget-text-content moto-widget-text-editable">
                                                <p class="moto-text_normal">No distance is too far to save a child.
                                                    You can be a superhero to children in need by running the
                                                    marathon and donating:</p>
                                            </div>
                                        </div>




                                        <div id="wid_1580130558_tpu5sd3ek"
                                            class="moto-widget moto-widget-contact_form moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  "
                                            data-preset="default" data-widget="contact_form" data-spacing="aaaa">
                                            <div ng-controller="widget.ContactForm.Controller"
                                                ng-init="hash = '2@eyJoIjoiZHdYTzZwcUVpaEZkMTBvYVZIOUtOWFwvN0dDQlpqbXQ0eFZ4NktjTG5oVnM9IiwiaSI6IlwvSmJTTitRUmNWd1Ntb0ZoUWorbFV3PT0iLCJ2IjoidUNqS3RoNG9ZQlM3OTRYYUlxTk5ZSGhOOFdCb3V4WlBEcnF3TUE0Vk4wbXFJRVVQTGE5dFpnMUg1ckY0ODNCNitocFBLck9pR05hRENCNDJYZGY5SjFBN2FnZ3E0elhIQ3pOZXdqKzJnXC80PSJ9';actionAfterSubmission={&quot;action&quot;:&quot;none&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;id&quot;:&quot;&quot;};resetAfterSubmission=false">
                                                <form id="wid_1580130558_tpu5sd3ek__form"
                                                    class="moto-widget-contact_form-form ng-pristine ng-invalid ng-invalid-required"
                                                    role="form" name="contactForm" ng-submit="submit()"
                                                    novalidate="">
                                                    <div ng-show="sending" class="contact-form-loading ng-hide"
                                                        wfd-invisible="true"></div>


                                                    <div class="moto-widget-contact_form-group">
                                                        <label for="field_email_wid_1580130558_tpu5sd3ek"
                                                            class="moto-widget-contact_form-label"
                                                            wfd-invisible="true">Email</label>
                                                        <input type="text"
                                                            class="moto-widget-contact_form-field moto-widget-contact_form-input ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched"
                                                            placeholder="Email *" ng-blur="validate('email')"
                                                            required="" ng-model-options="{ updateOn: 'blur' }"
                                                            name="email" id="field_email_wid_1580130558_tpu5sd3ek"
                                                            ng-model="message.email">
                                                        {{-- <span class="moto-widget-contact_form-field-error"
                                                                    ng-show="contactForm.email.$invalid &amp;&amp; !contactForm.email.$pristine &amp;&amp; !contactForm.email.emailInvalid"
                                                                    wfd-invisible="true">Field is required</span> --}}
                                                        {{-- <span class="moto-widget-contact_form-field-error ng-hide"
                                                                    ng-show="contactForm.email.emailInvalid &amp;&amp; !contactForm.email.$pristine"
                                                                    wfd-invisible="true">Incorrect email</span> --}}
                                                    </div>


                                                    {{-- <div class="moto-widget-contact_form-success ng-hide"
                                                                ng-show="showSuccessMessage" wfd-invisible="true">
                                                                Your message was sent successfully
                                                            </div>
                                                            <div class="moto-widget-contact_form-danger ng-hide"
                                                                ng-show="emailError" wfd-invisible="true">
                                                                Sorry, your message was not sent
                                                            </div> --}}
                                                    <div class="moto-widget-contact_form-buttons">

                                                        <div data-widget-id="wid__button__66ab7e6457c78"
                                                            class="moto-widget moto-widget-button moto-preset-default moto-preset-provider-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  "
                                                            data-widget="button">
                                                            <button type="submit"
                                                                class="moto-widget-button-link moto-size-medium moto-link"><span
                                                                    class="moto-widget-button-label">Send</span></button>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="moto-widget moto-widget-row__column moto-cell col-md-1 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                        style="" data-widget="row.column" data-container="container"
                                        data-spacing="aaaa" data-bg-position="left top">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-5 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                        style="background-image:url(/storage/photos/1/mt-1961-content-bg-4.jpg);background-position:center;background-repeat:no-repeat;background-size:cover;"
                        data-widget="row.column" data-container="container" data-spacing="aaaa"
                        data-bg-position="center">


                        <div data-widget-id="wid_1543690537_fszs14a0d"
                            class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto "
                            data-widget="spacer" data-preset="default" data-spacing="aaaa"
                            data-visible-on="+desktop,tablet,mobile-h,mobile-v">
                            <div class="moto-widget-spacer-block" style="height:300px"></div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <div class="moto-widget moto-widget-block moto-bg-color_custom4 moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto moto-background-fixed"
        data-widget="block" data-spacing="mama"
        style="margin-top:10%; background-image:url(/storage/photos/1/mt-1961-content-bg-5.jpg" data-bg-position="center">

        <div class="container-fluid">
            <div class="row">
                <div class="moto-cell col-sm-12" data-container="container">

                    <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                        data-grid-type="sm" data-widget="row" data-spacing="aaaa" style=""
                        data-bg-position="left top">


                        <div class="container-fluid">
                            <div class="row" data-container="container">


                                <div class="moto-widget moto-widget-row__column moto-cell col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                    style="" data-widget="row.column" data-container="container"
                                    data-spacing="aaaa" data-bg-position="left top">


                                    <div id="wid_1580116324_e3doyc7bi"
                                        class="moto-widget moto-widget-counter moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-after-in-viewport"
                                        data-widget="counter"
                                        data-moto-counter-options="{&quot;countFrom&quot;:0,&quot;countTo&quot;:1053,&quot;duration&quot;:3}">
                                        <div class="moto-widget-counter__wrapper">
                                            <span class="moto-widget-counter__value moto-text_system_4">1053</span>
                                        </div>
                                    </div>
                                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto"
                                        data-widget="text" data-preset="default" data-spacing="aasa" data-visible-on="-"
                                        data-animation="">
                                        <div class="moto-widget-text-content moto-widget-text-editable">
                                            <p class="moto-text_system_9" style="text-align: center;">happy clients</p>
                                        </div>
                                    </div>
                                </div>



                                <div class="moto-widget moto-widget-row__column moto-cell col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                    style="" data-widget="row.column" data-container="container"
                                    data-spacing="aaaa" data-bg-position="left top">



                                    <div id="wid_1580116347_x7zhzqz3n"
                                        class="moto-widget moto-widget-counter moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-after-in-viewport"
                                        data-widget="counter"
                                        data-moto-counter-options="{&quot;countFrom&quot;:0,&quot;countTo&quot;:378,&quot;duration&quot;:3}">
                                        <div class="moto-widget-counter__wrapper">
                                            <span class="moto-widget-counter__value moto-text_system_4">378</span>
                                        </div>
                                    </div>
                                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto"
                                        data-widget="text" data-preset="default" data-spacing="aasa" data-visible-on="-"
                                        data-animation="">
                                        <div class="moto-widget-text-content moto-widget-text-editable">
                                            <p class="moto-text_system_9" style="text-align: center;">working employments
                                            </p>
                                        </div>
                                    </div>


                                </div>
                                <div class="moto-widget moto-widget-row__column moto-cell col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                    style="" data-widget="row.column" data-container="container"
                                    data-spacing="aaaa" data-bg-position="left top">



                                    <div id="wid_1580116358_9vmt0clp5"
                                        class="moto-widget moto-widget-counter moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-after-in-viewport"
                                        data-widget="counter"
                                        data-moto-counter-options="{&quot;countFrom&quot;:0,&quot;countTo&quot;:5360,&quot;duration&quot;:3}">
                                        <div class="moto-widget-counter__wrapper">
                                            <span class="moto-widget-counter__value moto-text_system_4">5360</span>
                                        </div>
                                    </div>


                                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto"
                                        data-widget="text" data-preset="default" data-spacing="aasa" data-visible-on="-"
                                        data-animation="">
                                        <div class="moto-widget-text-content moto-widget-text-editable">
                                            <p class="moto-text_system_9" style="text-align: center;">working hours</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="moto-widget moto-widget-row__column moto-cell col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                    style="" data-widget="row.column" data-container="container"
                                    data-spacing="aaaa" data-bg-position="left top">



                                    <div id="wid_1580116366_hvzj1kpfq"
                                        class="moto-widget moto-widget-counter moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-after-in-viewport"
                                        data-widget="counter"
                                        data-moto-counter-options="{&quot;countFrom&quot;:0,&quot;countTo&quot;:981,&quot;duration&quot;:3}">
                                        <div class="moto-widget-counter__wrapper">
                                            <span class="moto-widget-counter__value moto-text_system_4">981</span>
                                        </div>
                                    </div>
                                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto"
                                        data-widget="text" data-preset="default" data-spacing="aasa" data-visible-on="-"
                                        data-animation="">
                                        <div class="moto-widget-text-content moto-widget-text-editable">
                                            <p class="moto-text_system_9" style="text-align: center;">awards won</p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ End Donation Area -->
    <!--/ End Slider Area -->
    @include('frontend.layouts.newsletter')

@endsection

@push('styles')
    {{-- <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script> --}}
    <style>
        #Gslider .carousel-inner .carousel-caption .btn-donate {
            font-weight: 700;
            background-color: #3cc88f;
            border-color: transparent;
            font-size: 24px;
            padding: 13px 10px;
            min-width: 150px;
            position: relative;
            z-index: 4;
            transition: .3s;
            line-height: 20px;
            border-width: 1px;
            border-style: solid;
            border-radius: 35px;
            display: flex;
            justify-content: center;
            display: inline-block;
            cursor: pointer;
            margin-top: 27px;

        }

        #Gslider .carousel-inner .carousel-caption .btn-donate:hover {
            background-color: #ffffff;
            /* Inverted background color */
            color: #3cc88f;
            /* Inverted text color to match the original background */
        }

        /* Banner Sliding */
        #Gslider .carousel-inner {
            background: #000000;
            color: black;
        }

        #Gslider .carousel-inner {
            height: 550px;
        }

        #Gslider .carousel-inner img {
            width: 100% !important;
            opacity: .8;
        }

        #Gslider .carousel-inner .carousel-caption {
            bottom: 52%;
        }

        #Gslider .carousel-inner .carousel-caption h1 {
            font-size: 75px;
            font-weight: bold;
            line-height: 100%;
            color: #ffffff;
            text-align: center;
        }

        #Gslider .carousel-inner .carousel-caption p {
            font-size: 18px;
            color: rgb(255, 250, 250);
            margin: 28px 0 28px;
            width: 870px;
            text-align: center;
            margin-left: 155px;
            font-weight: lighter;
        }

        #Gslider .carousel-indicators {
            bottom: 70px;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        /*==================================================================
                                                                                [ Isotope ]*/
        var $topeContainer = $('.isotope-grid');
        var $filter = $('.filter-tope-group');

        // filter items on button click
        $filter.each(function() {
            $filter.on('click', 'button', function() {
                var filterValue = $(this).attr('data-filter');
                $topeContainer.isotope({
                    filter: filterValue
                });
            });

        });

        // init Isotope
        $(window).on('load', function() {
            var $grid = $topeContainer.each(function() {
                $(this).isotope({
                    itemSelector: '.isotope-item',
                    layoutMode: 'fitRows',
                    percentPosition: true,
                    animationEngine: 'best-available',
                    masonry: {
                        columnWidth: '.isotope-item'
                    }
                });
            });
        });

        var isotopeButton = $('.filter-tope-group button');

        $(isotopeButton).each(function() {
            $(this).on('click', function() {
                for (var i = 0; i < isotopeButton.length; i++) {
                    $(isotopeButton[i]).removeClass('how-active1');
                }

                $(this).addClass('how-active1');
            });
        });
    </script>
    <script>
        function cancelFullScreen(el) {
            var requestMethod = el.cancelFullScreen || el.webkitCancelFullScreen || el.mozCancelFullScreen || el
                .exitFullscreen;
            if (requestMethod) { // cancel full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
        }

        function requestFullScreen(el) {
            // Supports most browsers and their versions.
            var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen || el
                .msRequestFullscreen;

            if (requestMethod) { // Native full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
            return false
        }
    </script>
@endpush
