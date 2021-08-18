<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN H: ORGANISASI BERPRESTASI TINGGI<br><span>( Bhgn. 3 )</span></h5>
    <span>Sila TANDAKAN pada skala yang menunjukkan persetujuan anda mengenai <b>organisasi di tempat kerja anda</b>.<br><br>
    <p>Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</p>
    <x-form-global-error/>
    <form action="{{route('updateSectionH3')}}" method="POST">
    @csrf
    <div class="introPage <x-form-validation-error key='H21'/>" style="margin-bottom: 10px;">
        <p>21. Organisasi saya mengekalkan hubungan baik jangka panjang dengan semua pihak yang berkepentingan (stake holders).</p>
        <x-ratings-components initialQuestion="0" questionNumber="21" sectionQuestion="H" :userData="$userData[0]->H21"/> 
     </div>
     <div class="introPage <x-form-validation-error key='H22'/>" style="margin-bottom: 10px;">
        <p>22. Organisasi saya memberi perkhidmatan terbaik.</p>
        <x-ratings-components initialQuestion="0" questionNumber="22" sectionQuestion="H" :userData="$userData[0]->H22"/> 
     </div>
     <div class="introPage <x-form-validation-error key='H23'/>" style="margin-bottom: 10px;">
        <p>23. Organisasi saya mempunyai strategi jangka panjang.</p>
        <x-ratings-components initialQuestion="0" questionNumber="23" sectionQuestion="H" :userData="$userData[0]->H23"/> 
     </div>
     <div class="introPage <x-form-validation-error key='H24'/>" style="margin-bottom: 10px;">
        <p>24. Peluang kenaikan pangkat wujud secara dalaman.</p>
        <x-ratings-components initialQuestion="0" questionNumber="24" sectionQuestion="H" :userData="$userData[0]->H24"/> 
     </div>
     <div class="introPage <x-form-validation-error key='H25'/>" style="margin-bottom: 10px;">
        <p>25. Tempat kerja yang selamat.</p>
        <x-ratings-components initialQuestion="0" questionNumber="25" sectionQuestion="H" :userData="$userData[0]->H25"/> 
     </div>
     <div class="introPage <x-form-validation-error key='H26'/>" style="margin-bottom: 10px;">
        <p>26. Pengurusan di organisasi saya memberi inspirasi kepada ahli organisasi untuk mencapai prestasi luar biasa.</p>
        <x-ratings-components initialQuestion="0" questionNumber="26" sectionQuestion="H" :userData="$userData[0]->H26"/> 
        
     </div>
     <div class="introPage <x-form-validation-error key='H27'/>" style="margin-bottom: 10px;">
        <p>27. Pekerja diberi latihan supaya berdaya tahan dan berdaya saing.</p>
        <x-ratings-components initialQuestion="0" questionNumber="27" sectionQuestion="H" :userData="$userData[0]->H27"/> 
     </div>
     <div class="introPage <x-form-validation-error key='H28'/>" style="margin-bottom: 10px;">
        <p>28. Organisasi saya mempunyai tenaga kerja yang pelbagai dan saling melengkapi.</p>
        <x-ratings-components initialQuestion="0" questionNumber="28" sectionQuestion="H" :userData="$userData[0]->H28"/> 
        
     </div>
     <div class="introPage <x-form-validation-error key='H29'/>" style="margin-bottom: 10px;">
        <p>29. Organisasi saya membangun melalui usaha perkongsian dengan pelbagai pelanggan.</p>
        <x-ratings-components initialQuestion="0" questionNumber="29" sectionQuestion="H" :userData="$userData[0]->H29"/> 
        </div>

    <button class="subBtn twelve columns" type="submit">Simpan</button>
</form>
</div>
<div class="four columns userLinks">
    <x-users-links :user="$user" 
    :completedA="$userProgress[0]->completedA"
    :completedB="$userProgress[0]->completedB"
    :completedC="$userProgress[0]->completedC"
    :completedD="$userProgress[0]->completedD"
    :completedE="$userProgress[0]->completedE"
    :completedF="$userProgress[0]->completedF"
    :completedG="$userProgress[0]->completedG"
    :completedH1="$userProgress[0]->completedH1"
    :completedH2="$userProgress[0]->completedH2"
    :completedH3="$userProgress[0]->completedH3"
    :completedH4="$userProgress[0]->completedH4"
    :completedI="$userProgress[0]->completedI"
    :completedJ="$userProgress[0]->completedJ"
    :completedK="$userProgress[0]->completedK"
    :completedL="$userProgress[0]->completedL"
    :completedM="$userProgress[0]->completedM"
    :completedN="$userProgress[0]->completedN"
    :completedO="$userProgress[0]->completedO"
    :completedP="$userProgress[0]->completedP"
    :completedQ="$userProgress[0]->completedQ"
    :completedR="$userProgress[0]->completedR"
    />
 </div>
<x-footer/>