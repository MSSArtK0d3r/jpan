<a href="#">
    <div class="bahagian">
        <span>Selamat datang,<br>
            <strong>{{$user}}</strong><br>
            {{-- <a href="{{url('/users/logout')}}"><span class="btnLogout">Log keluar</span></a> --}}
        </span>
    </div>
</a>
<a href="{{route('logout')}}">
    <div class="bahagian">
        <span>Log keluar</span>
    </div>
</a>
<a href="{{route('demograph')}}">
    <div class="bahagian {{Route::currentRouteName() == 'demograph' ? 'activeSection' : ''}}">
        <span class="topik">BAHAGIAN A<span class="{{$completedA == 1 ? 'completed' : 'notComplete'}}">{{$completedA == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Demografi</strong>
    </div>
</a>
<a href="{{route('sb')}}">
    <div class="bahagian {{Route::currentRouteName() == 'sb' ? 'activeSection' : ''}}">
        <span class="topik">Bahagian B<span class="{{$completedB == 1 ? 'completed' : 'notComplete'}}">{{$completedB == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Kepuasan Kerja</strong>
    </div>
</a>
<a href="{{route('sc')}}">
    <div class="bahagian {{Route::currentRouteName() == 'sc' ? 'activeSection' : ''}}"><span class="topik">Bahagian C<span class="{{$completedC == 1 ? 'completed' : 'notComplete'}}">{{$completedC == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Kepuasan Hidup</strong>
    </div>
</a>
<a href="{{route('sd')}}">
    <div class="bahagian {{Route::currentRouteName() == 'sd' ? 'activeSection' : ''}}"><span class="topik">Bahagian D<span class="{{$completedD == 1 ? 'completed' : 'notComplete'}}">{{$completedD == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Penilaian Hidup</strong>
    </div>
</a>
<a href="{{route('se')}}">
    <div class="bahagian {{Route::currentRouteName() == 'se' ? 'activeSection' : ''}}"><span class="topik">Bahagian E<span class="{{$completedE == 1 ? 'completed' : 'notComplete'}}">{{$completedE == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Afek</strong>
    </div>
</a>
<a href="{{route('sf')}}">
    <div class="bahagian {{Route::currentRouteName() == 'sf' ? 'activeSection' : ''}}"><span class="topik">Bahagian F<span class="{{$completedF == 1 ? 'completed' : 'notComplete'}}">{{$completedF == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Keterlibatan Kerja</strong>
    </div>
</a>
<a href="{{route('sg')}}">
    <div class="bahagian {{Route::currentRouteName() == 'sg' ? 'activeSection' : ''}}"><span class="topik">Bahagian G<span class="{{$completedG == 1 ? 'completed' : 'notComplete'}}">{{$completedG == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Prestasi Kerja</strong> 
    </div>
</a>
<a href="{{route('sh1')}}">
    <div class="bahagian {{Route::currentRouteName() == 'sh1' ? 'activeSection' : ''}}"><span class="topik">Bahagian H (Bhgn 1)<span class="{{$completedH1 == 1 ? 'completed' : 'notComplete'}}">{{$completedH1 == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Organisasi Berprestasi Tinggi</strong>
    </div>
</a>
<a href="{{route('sh2')}}">
    <div class="bahagian {{Route::currentRouteName() == 'sh2' ? 'activeSection' : ''}}"><span class="topik">Bahagian H (Bhgn 2)<span class="{{$completedH2 == 1 ? 'completed' : 'notComplete'}}">{{$completedH2 == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Organisasi Berprestasi Tinggi</strong>
     </div>
</a>
<a href="{{route('sh3')}}">
    <div class="bahagian {{Route::currentRouteName() == 'sh3' ? 'activeSection' : ''}}"><span class="topik">Bahagian H (Bhgn 3)<span class="{{$completedH3 == 1 ? 'completed' : 'notComplete'}}">{{$completedH3 == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Organisasi Berprestasi Tinggi</strong>
    </div>
</a>
<a href="{{route('sh4')}}">
    <div class="bahagian {{Route::currentRouteName() == 'sh4' ? 'activeSection' : ''}}"><span class="topik">Bahagian H (Bhgn 4)<span class="{{$completedH4 == 1 ? 'completed' : 'notComplete'}}">{{$completedH4 == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Organisasi Berprestasi Tinggi</strong>
    </div>
</a>
<a href="{{route('si')}}">
    <div class="bahagian {{Route::currentRouteName() == 'si' ? 'activeSection' : ''}}"><span class="topik">Bahagian I<span class="{{$completedI == 1 ? 'completed' : 'notComplete'}}">{{$completedI == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Produktiviti</strong>
    </div>
</a>
<a href="{{route('sj')}}">
    <div class="bahagian {{Route::currentRouteName() == 'sj' ? 'activeSection' : ''}}"><span class="topik">Bahagian J<span class="{{$completedJ == 1 ? 'completed' : 'notComplete'}}">{{$completedJ == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Personaliti</strong>
    </div>
</a>
<a href="{{route('sk')}}">
    <div class="bahagian {{Route::currentRouteName() == 'sk' ? 'activeSection' : ''}}"><span class="topik">Bahagian K<span class="{{$completedK == 1 ? 'completed' : 'notComplete'}}">{{$completedK == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Kesejahteraan Keluarga</strong>
    </div>
</a>
<a href="{{route('sl')}}">
    <div class="bahagian {{Route::currentRouteName() == 'sl' ? 'activeSection' : ''}}"><span class="topik">Bahagian L<span class="{{$completedL == 1 ? 'completed' : 'notComplete'}}">{{$completedL == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Kesejahteraan Kewangan</strong>
    </div>
</a>
<a href="{{route('sm')}}">
    <div class="bahagian {{Route::currentRouteName() == 'sm' ? 'activeSection' : ''}}"><span class="topik">Bahagian M<span class="{{$completedM == 1 ? 'completed' : 'notComplete'}}">{{$completedM == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Kesejahteraan Sosial</strong>
    </div>
</a>
<a href="{{route('sn')}}">
    <div class="bahagian {{Route::currentRouteName() == 'sn' ? 'activeSection' : ''}}"><span class="topik">Bahagian N<span class="{{$completedN == 1 ? 'completed' : 'notComplete'}}">{{$completedN == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Tujuan</strong>
    </div>
</a>
<a href="{{route('so')}}">
    <div class="bahagian {{Route::currentRouteName() == 'so' ? 'activeSection' : ''}}"><span class="topik">Bahagian O<span class="{{$completedO == 1 ? 'completed' : 'notComplete'}}">{{$completedO == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Daya Tahan</strong>
    </div>
</a>
<a href="{{route('sp')}}">
    <div class="bahagian {{Route::currentRouteName() == 'sp' ? 'activeSection' : ''}}"><span class="topik">Bahagian P<span class="{{$completedP == 1 ? 'completed' : 'notComplete'}}">{{$completedP == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Kindness</strong>
    </div>
</a>
<a href="{{route('sq')}}">
    <div class="bahagian {{Route::currentRouteName() == 'sq' ? 'activeSection' : ''}}"><span class="topik">Bahagian Q<span class="{{$completedQ == 1 ? 'completed' : 'notComplete'}}">{{$completedQ == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Altruisme</strong>
    </div>
</a>
<a href="{{route('sr')}}">
    <div class="bahagian {{Route::currentRouteName() == 'sr' ? 'activeSection' : ''}}"><span class="topik">Bahagian R<span class="{{$completedR == 1 ? 'completed' : 'notComplete'}}">{{$completedR == 1 ? 'selesai' : 'Belum selesai'}}</span></span><br>
        <strong>Soalan Terbuka</strong>
    </div>
</a>
<a href="{{route('home')}}">
    <div class="bahagianLast {{Route::currentRouteName() == 'home' ? 'activeSection' : ''}}">
        <strong>Keputusan I-KOBT</strong>
    </div>
</a>