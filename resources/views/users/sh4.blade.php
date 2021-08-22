<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN H: ORGANISASI BERPRESTASI TINGGI<br><span>( Bhgn. 4 )</span></h5>
    <span>Sila TANDAKAN pada skala yang menunjukkan persetujuan anda mengenai <b>organisasi di tempat kerja anda</b>.<br><br>
    <p>Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</p> 
    <x-form-global-error/>
    <form action="{{route('updateSectionH4')}}" method="POST">
        @csrf
        <div class="introPage <x-form-validation-error key='H30'/>" style="margin-bottom: 10px;">
        <p>30. Pengurusan di organisasi saya sering mengadakan sesi berdialog dengan pekerja.</p>
        <x-ratings-components initialQuestion="0" :completedR="$userProgress[0]->completedR" questionNumber="30" sectionQuestion="H" :userData="$userData[0]->H30"/> 
         </div>
        <div class="introPage <x-form-validation-error key='H31'/>" style="margin-bottom: 10px;">
            <p>31. Warga organisasi sentiasa berkomunikasi, bertukar pengetahuan dan pembelajaran.</p>
            <x-ratings-components initialQuestion="0" :completedR="$userProgress[0]->completedR" questionNumber="31" sectionQuestion="H" :userData="$userData[0]->H31"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H32'/>" style="margin-bottom: 10px;">
            <p>32. Warga organisasi sentiasa terlibat dalam proses-proses dan peristiwa utama.</p>
            <x-ratings-components initialQuestion="0" :completedR="$userProgress[0]->completedR" questionNumber="32" sectionQuestion="H" :userData="$userData[0]->H32"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H33'/>" style="margin-bottom: 10px;">
            <p>33. Pengurusan organisasi tidak menghukum kesilapan dan menggalakkan pengalaman dan pembelajaran.</p>
            <x-ratings-components initialQuestion="0" :completedR="$userProgress[0]->completedR" questionNumber="33" sectionQuestion="H" :userData="$userData[0]->H33"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H34'/>" style="margin-bottom: 10px;">
            <p>34. Pengurusan organisasi saya mengalu-alukan perubahan.</p>
            <x-ratings-components initialQuestion="0" :completedR="$userProgress[0]->completedR" questionNumber="34" sectionQuestion="H" :userData="$userData[0]->H34"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H35'/>" style="margin-bottom: 10px;">
            <p>35. Organisasi saya adalah berpandukan prestasi.</p>
            <x-ratings-components initialQuestion="0" :completedR="$userProgress[0]->completedR" questionNumber="35" sectionQuestion="H" :userData="$userData[0]->H35"/> 
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