<x-header />
<div class="contents twevle columns">
    <div style="display: flex;flex-wrap: wrap;justify-content: center;" class="row">
        <form action="{{route('verifypin')}}" style="margin: 0;width:400px;" method="POST">
            @csrf
            <div class="user-login">{{$user}}<br><a href="{{route('logout')}}">(Log keluar)</a></div>
            <div>
                <p style="text-align: justify;margin-bottom:5px;">Masukkan 6 digit PIN anda</p>
            </div>
            <div> <input type="password" name="pin" style="width: 100%">
            <br>
            <a href="#" style="font-size: 12px">Lupa PIN keselamatan</a>
            </div>
            @if ($errors->any())
                <span style="color: red">{{ $errors->first() }}</span>
            @endif
            <div>
                <button class="subBtn verifyBtn" type="submit"><a href="{{ route('logout') }}"
                        style="color:white;text-decoration:none;">Log Masuk</a></button>
            </div>
        </form>
    </div>
</div>
<x-footer />
