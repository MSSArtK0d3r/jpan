<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN G: PRESTASI KERJA</h5>
    <span>Sila TANDAKAN pada skala yang menunjukkan persetujuan anda mengenai <b>prestasi kerja anda</b>.<br><br>
    <p>Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</p>
    <x-form-global-error/>
    <form action="{{route('updateSectionG')}}" method="POST">
    @csrf
    <div class="introPage <x-form-validation-error key='G1'/>" style="margin-bottom: 10px;">
        <p>1. Saya merancang pekerjaan dengan teliti agar dapat diselesaikan pada waktunya.</p>
        <x-ratings-components initialQuestion="0" :completedR="$userProgress[0]->completedR" questionNumber="1" sectionQuestion="G" :userData="$userData[0]->G1"/>
     </div>
     <div class="introPage <x-form-validation-error key='G2'/>" style="margin-bottom: 10px;">
        <p>2. Saya sentiasa mengingati hasil kerja yang perlu dicapai.</p>
        <x-ratings-components initialQuestion="0" :completedR="$userProgress[0]->completedR" questionNumber="2" sectionQuestion="G" :userData="$userData[0]->G2"/>
     </div>
     <div class="introPage <x-form-validation-error key='G3'/>" style="margin-bottom: 10px;">
        <p>3. Saya dapat melaksanakan kerja saya dengan cekap.</p>
        <x-ratings-components initialQuestion="0" :completedR="$userProgress[0]->completedR" questionNumber="3" sectionQuestion="G" :userData="$userData[0]->G3"/>
     </div>
     <div class="introPage <x-form-validation-error key='G4'/>" style="margin-bottom: 10px;">
        <p>4. Saya berusaha memastikan kemahiran pekerjaan saya selaras dengan keperluan terkini.</p>
        <x-ratings-components initialQuestion="0" :completedR="$userProgress[0]->completedR" questionNumber="4" sectionQuestion="G" :userData="$userData[0]->G4"/>
     </div>
     <div class="introPage <x-form-validation-error key='G5'/>" style="margin-bottom: 10px;">
        <p>5. Saya menghasilkan penyelesaian kreatif terhadap masalah-masalah yang baru.</p>
        <x-ratings-components initialQuestion="0" :completedR="$userProgress[0]->completedR" questionNumber="5" sectionQuestion="G" :userData="$userData[0]->G5"/>
     </div>
     <div class="introPage <x-form-validation-error key='G6'/>" style="margin-bottom: 10px;">
        <p>6. Saya juga memikul tanggungjawab lain dalam pekerjaan.</p>
        <x-ratings-components initialQuestion="0" :completedR="$userProgress[0]->completedR" questionNumber="6" sectionQuestion="G" :userData="$userData[0]->G6"/>
     </div>
     <div class="introPage <x-form-validation-error key='G7'/>" style="margin-bottom: 10px;">
        <p>7. Saya terus mencari cabaran-cabaran baru dalam pekerjaan saya.</p>
        <x-ratings-components initialQuestion="0" :completedR="$userProgress[0]->completedR" questionNumber="7" sectionQuestion="G" :userData="$userData[0]->G7"/>
     </div>
     <div class="introPage <x-form-validation-error key='G8'/>" style="margin-bottom: 10px;">
        <p>8. Saya terlibat secara aktif dalam mesyuarat dan/atau perundingan.</p>
        <x-ratings-components initialQuestion="0" :completedR="$userProgress[0]->completedR" questionNumber="8" sectionQuestion="G" :userData="$userData[0]->G8"/>
     </div>
     <div class="introPage <x-form-validation-error key='G9'/>" style="margin-bottom: 10px;">
        <p>9. Saya mengadu tentang isu-isu kecil berkaitan pekerjaan di tempat kerja.</p>
        <x-ratings-components initialQuestion="0" :completedR="$userProgress[0]->completedR" questionNumber="9" sectionQuestion="G" :userData="$userData[0]->G9"/>
     </div>
     <div class="introPage <x-form-validation-error key='G10'/>" style="margin-bottom: 10px;">
        <p>10. Saya menumpukan kepada aspek-aspek negatif sesuatu keadaan di tempat kerja saya berbanding aspek-aspek positif.</p>
        <x-ratings-components initialQuestion="0" :completedR="$userProgress[0]->completedR" questionNumber="10" sectionQuestion="G" :userData="$userData[0]->G10"/>
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