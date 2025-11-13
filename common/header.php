<header id="header" class="header u-fix">
    <div class="header__inner u-rel">
        <div class="header__logo logo u-rel">
            <a href="/" class="u-tex-left u-pointer">
                <img src="/image/logo.svg" alt="">
            </a>
        </div>
        <nav class="header__nav-box nav">
            <a href="/work" class="header__nav-text-box u-tex-left u-pointer">
                <p class="header__text u-font-mont u-fon5">WORK</p>
            </a>
            <a href="/profile" class="header__nav-text-box u-tex-left u-pointer">
                <p class="header__text u-font-mont u-fon5">PROFILE</p>
            </a>
            <a href="/#contact" class="header__nav-text-box u-tex-left u-pointer">
                <p class="header__text u-font-mont u-fon5">CONTACT</p>
            </a>
        </nav>

        <!-- ハンバーガーボタン -->
        <button id="hamburger-button" class="header__hamburger-button u-sp u-abs u-pointer">
            <div class="header__hamburger-border"></div>
            <div class="header__hamburger-border"></div>
            <div class="header__hamburger-border"></div>
        </button>

        <!-- ハンバーガーメニュー -->
        <div id="hamburger-wrap" class="header__hamburger-wrap u-sp u-fix">
            <nav class="header__hamburger-nav-box nav u-abs">
                <a href="/" class="header__hamburger-nav-text-box nav__text-box u-tex-left u-pointer">
                    <p class="header__text u-fon2 u-font-mont">HOME</p>
                </a>
                <a href="/work" class="header__hamburger-nav-text-box nav__text-box u-tex-left u-pointer">
                    <p class="header__text u-fon2 u-font-mont">WORK</p>
                </a>
                <a href="/profile" class="header__hamburger-nav-text-box nav__text-box u-tex-left u-pointer">
                    <p class="header__text u-fon2 u-font-mont">PROFILE</p>
                </a>
                <a href="/#contact" class="header__hamburger-nav-text-box nav__text-box u-tex-left u-pointer">
                    <p class="header__text u-fon2 u-font-mont">CONTACT</p>
                </a>
            </nav>

            <div class="header__hamburger-wrap-background u-abs"></div>
        </div>
    </div>

    <script>
        const body = document.querySelector("body");
        const hamburgerButton = document.getElementById("hamburger-button");
        const hamburgerWrap = document.getElementById("hamburger-wrap");
        const hamburgerNav = document.getElementsByClassName("header__hamburger-nav-text-box");
        console.log(hamburgerNav);

        hamburgerButton.addEventListener('click', function() {
            body.classList.toggle("body__hamburger-button--open");
            hamburgerButton.classList.toggle("header__hamburger-button--open");
            hamburgerWrap.classList.toggle("header__hamburger-wrap--open");
        }, false);

        // 複数ナビ要素にクリックイベントを付与
        for (let i = 0; i < hamburgerNav.length; i++) {
            hamburgerNav[i].addEventListener('click', function() {
                body.classList.remove("body__hamburger-button--open");
                hamburgerButton.classList.remove("header__hamburger-button--open");
                hamburgerWrap.classList.remove("header__hamburger-wrap--open");
            }, false);
        }
    </script>
</header>