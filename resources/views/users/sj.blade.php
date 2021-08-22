<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN J: PERSONALITI</h5>
    <span>Sila TANDAKAN pada skala yang menunjukkan persetujuan anda mengenai <b>mengenai diri anda.</b><br><br>
    <p>Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</p>
    <x-form-global-error/>
    <form action="{{route('updateSectionJ')}}" method="POST">
        @csrf
        <div class="introPage <x-form-validation-error key='J1'/>" style="margin-bottom: 10px;">
            <p>1. Tidak teragak-agak untuk meninggalkan sesuatu yang belum selesai.</p>
            <x-ratings-components initialQuestion="0" :completedR="userData[0]->completedR" questionNumber="1" sectionQuestion="J" :userData="$userData[0]->J1"/>
         </div>
         <div class="introPage <x-form-validation-error key='J2'/>" style="margin-bottom: 10px;">
            <p>2. Tidak berdaya saing.</p>
            <x-ratings-components initialQuestion="0" :completedR="userData[0]->completedR" questionNumber="2" sectionQuestion="J" :userData="$userData[0]->J2"/>
         </div>
         <div class="introPage <x-form-validation-error key='J3'/>" style="margin-bottom: 10px;">
            <p>3. Mendengar dengan baik dan membiarkan dahulu orang lain selesai bercakap.</p>
            <x-ratings-components initialQuestion="0" :completedR="userData[0]->completedR" questionNumber="3" sectionQuestion="J" :userData="$userData[0]->J3"/>
            
         </div>
         <div class="introPage <x-form-validation-error key='J4'/>" style="margin-bottom: 10px;">
            <p>4. Menyatakan perasaan secara terbuka.</p>
            <x-ratings-components initialQuestion="0" :completedR="userData[0]->completedR" questionNumber="4" sectionQuestion="J" :userData="$userData[0]->J4"/>
         </div>
         <div class="introPage <x-form-validation-error key='J5'/>" style="margin-bottom: 10px;">
            <p>5. Menyelesaikan satu perkara pada satu masa.</p>
            <x-ratings-components initialQuestion="0" :completedR="userData[0]->completedR" questionNumber="5" sectionQuestion="J" :userData="$userData[0]->J5"/>
         </div>
         <div class="introPage <x-form-validation-error key='J6'/>" style="margin-bottom: 10px;">
            <p>6. Tidak tergesa-gesa walaupun dalam keadaan tertekan.</p>
            <x-ratings-components initialQuestion="0" :completedR="userData[0]->completedR" questionNumber="6" sectionQuestion="J" :userData="$userData[0]->J6"/>
         </div>
         <div class="introPage <x-form-validation-error key='J7'/>" style="margin-bottom: 10px;">
            <p>7. Mudah bergaul.</p>
            <x-ratings-components initialQuestion="0" :completedR="userData[0]->completedR" questionNumber="7" sectionQuestion="J" :userData="$userData[0]->J7"/>
         </div>
         <div class="introPage <x-form-validation-error key='J8'/>" style="margin-bottom: 10px;">
            <p>8. Mementingkan kepuasan diri, bukan orang lain.</p>
            <x-ratings-components initialQuestion="0" :completedR="userData[0]->completedR" questionNumber="8" sectionQuestion="J" :userData="$userData[0]->J8"/>
         </div>
         <div class="introPage <x-form-validation-error key='J9'/>" style="margin-bottom: 10px;">
            <p>9. Lambat dalam melakukan sesuatu perkara.</p>
            <x-ratings-components initialQuestion="0" :completedR="userData[0]->completedR" questionNumber="9" sectionQuestion="J" :userData="$userData[0]->J9"/>
         </div>
         <div class="introPage <x-form-validation-error key='J10'/>" style="margin-bottom: 10px;">
            <p>10. Tidak begitu teliti.</p>
            <x-ratings-components initialQuestion="0" :completedR="userData[0]->completedR" questionNumber="10" sectionQuestion="J" :userData="$userData[0]->J10"/>
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