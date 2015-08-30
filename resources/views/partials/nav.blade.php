<header class="header-6">
    <div class="container">
        <div class="row">
            <div class="navbar col-sm-12" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle"></button>
                    <a class="brand" href="/"><img src="/img/mr_switch_logo.png" width="60" height="60" alt="Mr. Switch"/> Mr. Switch</a>
                    <div class="social-btns">
                        <a href="https://plus.google.com/+MrswitchIndia" target="_blank">
                            <div class="fui-googleplus"></div>
                            <div class="fui-googleplus"></div>
                        </a>
                        <a href="https://www.facebook.com/MrSwitchIndia" target="_blank">
                            <div class="fui-facebook"></div>
                            <div class="fui-facebook"></div>
                        </a>
                        <a href="https://twitter.com/MrSwitchIndia" target="_blank">
                            <div class="fui-twitter"></div>
                            <div class="fui-twitter"></div>
                        </a>
                    </div>
                </div>
                <div class="collapse navbar-collapse">
                    <?php $menuItems = ['FEATURES','PRICING','SERVICES']; ?>
                    <ul class="nav">
                        <li><a href="/">HOME</a></li>
                        @foreach($menuItems as $name)
                        <li><a href="/#{{ strtolower($name) }}">{{ $name }}</a></li>
                        @endforeach
                        <li><a href="/contact" class="{{ isset($activeMenu) && $activeMenu == 'CONTACT' ? 'active' : ''}}">CONTACT</a></li>
                        <li class="button-outline">
                            <a href="/auth/login" class="{{ isset($activeMenu) && $activeMenu == 'LOG IN' ? 'active' : ''}}">
                                <b>LOG IN</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>