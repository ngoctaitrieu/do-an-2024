<div class="dash-header">
    <div class="container dash-header__inner">
        <div class="dash-search">
            <div class="dash-search__input">
                <input type="text" placeholder="Tìm kiếm sản phẩm">
                <button><img src="{{ asset('dist/images/search.svg') }}" alt="search"></button>
            </div>
        </div>
        <div class="dash-button">
            <div class="dash-button__inner d-none">
                <button><img src="{{ asset('dist/images/dflash.svg') }}" alt="dflash">Săn deal</button>
            </div>
            <div class="cart">
                <div class="cart__item">
                    <a href="#!">
                        <img src="{{ asset('dist/images/dcart.svg') }}" alt="cart">
                        <div class="cart__label qty__cart">0</div>
                    </a>
                </div>
                {{--<div class="cart__item">--}}
                {{--<a href="#!">--}}
                {{--<img src="dist/images/dcart-2.svg" alt="cart">--}}
                {{--<div class="cart__label">9</div>--}}
                {{--</a>--}}
                {{--</div>--}}
                <div class="user">
                    <div class="user__item">
                        <div class="user__img"><img src="{{ asset('dist/images/user.svg') }}" alt="user"></div>
                        <div class="user__label">
                            <span>Xin chào!</span>
                            <h4>{{ auth()->user()->name }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>