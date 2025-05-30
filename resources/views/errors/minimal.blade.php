<!DOCTYPE html>
<html lang="en">
    <head>
        @php  
            $sitInfo        = getSiteInfo();
            $siteFavicon    = $sitInfo['site_favicon'];
            $siteDarkLogo   = $sitInfo['site_dark_logo'];
            $siteLiteLogo   = $sitInfo['site_lite_logo'];
            $currentURL     = url()->current();
            $siteLogo       = url('/') == $currentURL ? $siteDarkLogo : $siteLiteLogo;

            $header_menu    = getHeaderMenu();
        @endphp
        <meta charset="utf-8">
        @if( !empty($siteFavicon) )
            <link rel="icon" href="{{ asset('storage/'.$siteFavicon) }}" type="image/x-icon">
        @endif
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/feather-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('common/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body>
    <main>
        <section class="tk-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8 m-auto">
                        <div class="tk-errorpage">
                            <figure>
                                <img src="@yield('img')" />
                            </figure>
                            <div class="tk-notfound-title">
                                <h2>@yield('message')</h2>
                                @hasSection('message_desc')
                                    <p>@yield('message_desc')<p>
                                @endif
                                <em>{{ __('general.error_text_desc') }} <a href="{{ url('/') }}">{{ __('general.go_to_home_link') }}</a></em>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <x-footer />
    </main>

        <script src="{{ asset('common/js/jquery.min.js') }}"></script>
		<script defer src="{{ asset('common/js/bootstrap.min.js') }}"></script>
        <script defer src="{{ asset('common/js/jquery.mCustomScrollbar.min.js') }}"></script>
		<script defer src="{{ asset('js/main.js')}}"></script>
    </body>
</html>
