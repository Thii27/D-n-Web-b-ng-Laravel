<a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
    <!-- Uncomment the line below if you also wish to use an image logo -->
    <!-- <img src="assets/img/logo.png" alt=""> -->
    <h1 class="sitename">ZenBlog</h1>
</a>

<nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="/" class="active">Trang Chủ</a></li>

        @foreach ($categories as $category)
            <li><a href="{{route('client.article', $category->id)}}">{{ $category->name }}</a></li>
        @endforeach





        <!-- Kiểm tra người dùng đã đăng nhập hay chưa -->
        @if (Auth::check())
            <!-- Nếu đã đăng nhập, hiển thị tên người dùng và dropdown -->
            <li class="dropdown">
                <a href="#">
                    {{ Auth::user()->name }} <i class="bi bi-chevron-down toggle-dropdown"></i>
                </a>
                <ul>
                    <li><a href="#">Xem Trang Cá Nhân</a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Đăng Xuất
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        @else
            <!-- Nếu chưa đăng nhập, hiển thị Đăng Nhập/Đăng Ký -->
            <li class="dropdown">
                <a href="#"><span> <i class="fa fa-user-circle fs-4 me-2"></i> Đăng Nhập</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                    <li><a href="{{ route('login') }}">Đăng Nhập</a></li>
                    <li><a href="{{ route('register') }}">Đăng Ký</a></li>
                </ul>
            </li>
        @endif


    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

<div class="header-social-links">
    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
</div>
