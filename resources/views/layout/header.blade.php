<header id="header" class="site-header">
    <div class="site-branding">
        <h1 class="site-title">
            <a href="{{url('/')}}" class="custom-logo-link" rel="home" itemprop="url">
                <img width="228"
                     height="45"
                     src="{{asset('img/logo.png')}}"
                     class="custom-logo"
                     alt="NEXTITM"
                     itemprop="logo">
            </a>
        </h1>
    </div><!-- .site-branding -->

    <nav id="site-navigation" class="main-navigation">
        <div class="menu-headermenu-container">
            <ul id="primary-menu" class="headerMenu">
                <li id="menu-item-5"
                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-5">
                    <a href="{{url('/')}}" class="">TOP</a></li>
                <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21">
                    <a href="{{route('company')}}" class="">COMPANY</a></li>
                <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">
                    <a href="{{route('service')}}" class="">SERVICE</a></li>
                <li id="menu-item-19" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19">
                    <a href="{{route('recruit')}}" class="">RECRUIT</a></li>
                <li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17">
                    <a href="{{route('contact')}}" class="">CONTACT</a></li>
            </ul>
        </div>
    </nav><!-- #site-navigation -->
    <button id="navSpBtn" class="spMenuToggle" aria-controls="primary-menu" aria-expanded="false">
        <span class="spMenuToggle_border"></span>
        <span class="spMenuToggle_border"></span>
        <span class="spMenuToggle_border"></span>
    </button>
    <nav id="sp-site-navigation" class="main-navigation">
        <div class="spMenu-header-container">
            <ul id="sp-primary-menu" class="headerMenu">
                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-5">
                    <a href="{{url('/')}}">TOP</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a
                        href="{{route('company')}}">COMPANY</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a
                        href="{{route('service')}}">SERVICE</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a
                        href="{{route('recruit')}}">RECRUIT</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17"><a
                        href="{{route('contact')}}">CONTACT</a></li>
            </ul>
        </div>
    </nav>
</header><!-- #masthead -->
