<header class="l-header l-header__base">
    <nav class="p-nav">

        <div class="p-nav--left">
            <a  href="{{ url('home') }}">
                <div class="c-title__main">Sample2212</div>
            </a>
        </div>

        <div class="p-nav p-nav--right"> 
            <ul class="p-nav p-nav__menu">
                <li><a class="p-nav__menu--name">

                @guest
                    {{-- ログインしてない場合は何も表示しない --}}
                @else
                    {{-- ヘッダーにナビを表示 --}}
                    </a></li>
                    <li>
                        @if (!empty($user->avatar_file_name))
                            <img src="https://backend0622.s3-ap-northeast-1.amazonaws.com/{{$user->avatar_file_name}}" class="c-avatar">
                        @else
                            <img src="/images/avatar-default.svg" class="c-avatar">
                        @endif
                    </li>
                    <li>ようこそ {{ Auth::user()->name }}様</li>
                    <li><a class="p-nav__menu" href="{{ route('mypage') }}">マイページ</a></li>
                    <li><a class="p-nav__menu">投稿する</a></li>
                    <li><a class="p-nav__menu" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        ログアウト
                        </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </li>
                @endguest
            </ul>

            {{-- ドロップダウンメニュー（レスポンシブ用） --}}
            <div class="p-nav p-nav__hamberger">
                @guest
                @else
                <div id="hamberger" data-user="{{ json_encode(Auth::user()->name) }}" data-logout="{{ json_encode(route('logout')) }}"></div>
                @endguest
            </div>           
        </div>
    </nav>  
</header>