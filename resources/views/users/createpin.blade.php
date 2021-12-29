<x-header />
<div class="contents twevle columns">
    <div style="display: flex;flex-wrap: wrap;justify-content: center;" class="row">
        <form action="{{route('createpin')}}" style="margin: 0;width:400px;" method="POST">
            @csrf
            <div class="user-login">{{$user}}<br><a href="{{route('logout')}}">(Log keluar)</a></div>
            <div>
                <p style="text-align: justify;margin-bottom:5px;">Masukkan PIN pilihan anda</p>
            </div>
            <div><input type="password" name="pin" style="width: 100%">
            <ul>
                <li style="font-style: italic;font-size:12px;">Pin 6 digit sahaja</li>
            </ul>
            </div>
            @if ($errors->any())
                <span style="color: red">{{ $errors->first() }}</span>
            @endif
            <div>
                <button class="subBtn verifyBtn" type="submit">Simpan Pin</button>
            </div>
        </form>
    </div>
</div>
<x-footer />
