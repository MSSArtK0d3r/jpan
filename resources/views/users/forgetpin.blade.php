<x-header/>

<div class="contents twelve columns">
    <h5 class="title-center">Lupa PIN keselamatan</h5>
    <p class="title-center">Masukkan alamat email anda yang berdaftar dengan I-KOBT</p>

    <form action="{{route('pinrecovered')}}" method="post" class="title-center">
        @csrf
        <input class="w400" type="text" name="email" required /><br/>
        <button class="subBtn" type="submit">Submit</button>
    </form>
    <div class="title-center"><a href="{{route('home')}}"><span>balik ke laman utama</span></a></div>
</div>
<x-footer/>