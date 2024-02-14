<footer class="bg-gray">
    <?php 
        $dcComics = config('dccomics');
        $dcCompany = config('dccompany');
        $shop = config('shop');
        $sites = config('sites');
    ?>
    <div class="dc-background">
        <div class="container">
            <div>
                <h3 class="menu-title">DC COMICS</h3>
                <ul>
                    @foreach ($dcComics as $option)
                    <li>
                        <span class="menu-option">
                            {{ $option }}
                        </span>
                    </li>
                    @endforeach
                </ul>

                <h3 class="menu-title">SHOP</h3>
                <ul>
                    @foreach ($shop as $option)
                    <li>
                        <span class="menu-option">
                            {{ $option }}
                        </span>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h3 class="menu-title">DC</h3>
                <ul>
                    @foreach ($dcCompany as $option)
                    <li>
                        <span class="menu-option">
                            {{ $option }}
                        </span>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h3 class="menu-title">SITES</h3>
                <ul>
                    @foreach ($sites as $option)
                    <li>
                        <span class="menu-option">
                            {{ $option }}
                        </span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="dc-logo-div">
            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png')}}" class="dc-logo-bg">
        </div>
    </div>

    <div class="container">
        <div class="sign-up-btn">
            SIGN UP NOW!
        </div>
        
        <div class="d-flex">
            <div class="follow-btn">
                FOLLOW US
            </div>
            <div>
                <img src="{{ Vite::asset('resources/img/footer-facebook.png')}}">
            </div>
            <div>
                <img src="{{ Vite::asset('resources/img/footer-twitter.png')}}">
            </div>
            <div>
                <img src="{{ Vite::asset('resources/img/footer-youtube.png')}}">
            </div>
            <div>
                <img src="{{ Vite::asset('resources/img/footer-pinterest.png')}}">
            </div>
            <div>
                <img src="{{ Vite::asset('resources/img/footer-periscope.png')}}">
            </div>
        </div>
    </div>
</footer>