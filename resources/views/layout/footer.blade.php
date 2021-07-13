<footer class="site-footer">
    <div class="footer_line">
        <span></span>
    </div>
    <div id="pageTop">PAGE TOP</div>

    <div class="footer_content">
        <div class="menu-footer-container">
            <ul id="menu-footer" class="footerMenu">
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
        <div class="footer_logo">
            <img src="{{asset('img/logo.png')}}" alt="futures-logo">
            <p> ©️ NEXT ITM Inc. All Rights Reserved</p>
        </div>
    </div>
</footer>
