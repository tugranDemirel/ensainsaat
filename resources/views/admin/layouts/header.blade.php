<header>
    <nav class="navbar navbar-default">
        <!-- Search Bar -->
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="material-icons">swap_vert</i>
                </button>
                <a href="javascript:void(0);" class="left-toggle-left-sidebar js-left-toggle-left-sidebar">
                    <i class="material-icons">menu</i>
                </a>
                <!-- Logo -->
                <a class="navbar-brand" href="">
                    <span class="logo-minimized">Eİ</span>
                    <span class="logo">{{ config('app.name') }}</span>
                </a>
                <!-- #END# Logo -->
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="javascript:void(0);" class="toggle-left-sidebar js-toggle-left-sidebar">
                            <i class="material-icons">menu</i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- User Menu -->
                    <li class="dropdown user-menu">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">

                            <span class="hidden-xs">{{ auth()->user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">

                                <div class="user">
                                    {{ auth()->user()->name }}

                                </div>
                            </li>
                            <li class="footer">
                                <div class="row clearfix">
                                    <div class="col-xs-2"></div>
                                    <div class="col-xs-5">
                                        <a href="javascript:void(0);" onclick="document.getElementById('logout').submit()" class="btn btn-default btn-sm btn-block">Çıkış Yap</a>
                                    </div>
                                    <form action="{{ route('logout') }}" id="logout" method="post">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# User Menu -->

                </ul>
            </div>
        </div>
    </nav>
</header>
