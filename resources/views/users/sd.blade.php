<x-header/>
<div class="contents eight columns">
    <form action="{{route('updateSectionD')}}" method="POST">
        @csrf
        <h5 class="title-center">BAHAGIAN D: PENILAIAN HIDUP</h5>
        <span>Sila TANDAKAN pada skala yang menunjukkan <b>penilaian hidup anda</b> sebagai seorang pekerja.</span><br><br><p>Skala 0 menunjukkan kehidupan bekerja yang sukar, manakala Skala 10 menunjukkan kehidupan bekerja yang terbaik.</p>
        <x-form-global-error/>
        <div class="introPage <x-form-validation-error key='D1'/>" style="margin-bottom: 10px;">
            <p>Berdasarkan Gambar Rajah di bawah, kehidupan anda berada di tahap mana?</p>
            <img class="img-center" src="{{ URL::asset('images/tangga.png') }}">
            <x-ratings-components initialQuestion="0" :completedR="userData[0]->completedR" questionNumber="1" sectionQuestion="D" :userData="$userData[0]->D1"/>
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
    :paymentChoose="$userProgress[0]->paymentChoose"
    />
 </div>
<x-footer/>