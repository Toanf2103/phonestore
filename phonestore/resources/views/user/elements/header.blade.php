<header id="header">
    <div class="container flex">
        <div class="header-logo">
            <a href="/phonestore"><img src="{{asset('public/imgs/logo.png')}}" alt="Logo của tao"></a>            
        </div>
        <nav>
            <ul class="flex">
                <li><a href=".">trang chủ</a></li>                
                <li><a href="#footer">liên hệ</a></li>
            </ul>
        </nav>
        <form action="{{ route('search') }}" class="header-search flex">
            <input type="text" name="search" placeholder="Tìm kiếm...">
            <button><i class="fas fa-search"></i></button>
        </form>	
        <input type="checkbox" class="user-check" id="user-check">	
        <div class="header-user">
            @if(session()->get('Quyen_id') != null)
                <label for="user-check">
                    <i class="fas fa-user"></i>
                </label>
                <ul class="ul1">
                    <li><a href="{{ route('user.inf') }}">{{ Session()->get('Ho').' '.Session()->get('Ten') }}</a></li>
                    <li><a href="{{ route('don_mua') }}">Đơn mua</a></li>
                    <li><a href="{{ route('doi_mk') }}">Đổi mật khẩu</a></li>
                    <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                </ul>
                
            @else
                <span><a href="{{ route('login_view') }}" class="the_a_dang_nhap">Đăng Nhập</a></span>
                <span><a href="{{ route('dang_ki_view') }}" class="the_a_dang_nhap">Đăng kí</a></span>
            @endif                
        </div>
        <label class="overlay" for="user-check"></label>
        <div class="header-cart">
            <a href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>
</header>