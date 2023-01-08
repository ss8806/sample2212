{{-- 検索ボックス --}}
<div class="p-serch">
    <form class="p-form" method="GET" action="{{ route('home') }}">
        <div class="p-serch__group">
            <!-- 投稿日で検索 -->
            <span>投稿日検索　　</span>
            <span class="u-br"><!-- レスポンシブで改行 -->
                <input type="date" name="aboveday" class="c-input__day" value="{{$defaults['aboveday']}}">
                <span>~</span>
                <input type="date" name="belowday" class="c-input__day" value="{{$defaults['belowday']}}">
        </div>

        <div class="c-serch-group">
            <span>価格検索　　　</span>
            <span class="u-br"><!-- レスポンシブで改行 --> 
            <!-- 価格 以上で検索 -->
            <input type="number" name="aboveprice" class="c-input__price" value="{{$defaults['aboveprice']}}"  placeholder="価格検索 以上">
            <span>~</span>
            <!-- 価格 以下で検索 -->
            <input type="number" name="belowprice" class="c-input__price" value="{{$defaults['belowprice']}}" placeholder="価格検索 以下">
        </div>

        <!-- 検索ボタン -->
        <button type="submit" class="c-btn c-btn__serch">
            <i class="fas fa-search"></i>
        </button>
    </form>

    @error('aboveprice')
    <div class="c-error" role="alert">
        <strong>{{ $message }}</strong>
    </div>
    @enderror
    @error('belowprice')
    <div class="c-error" role="alert">
        <strong>{{ $message }}</strong>
    </div>
    @enderror
</div>