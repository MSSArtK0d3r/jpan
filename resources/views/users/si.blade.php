<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN I: PRODUKTIVITI</h5>
    <span>Sila TANDAKAN pada skala yang menunjukkan persetujuan anda mengenai <b>produktiviti di tempat kerja anda.</b><br><br>
    <p>Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</p>
    <x-form-global-error/>
    <form action="{{route('updateSectionI')}}" method="POST">
        @csrf
        <div class="introPage <x-form-validation-error key='I1'/>" style="margin-bottom: 10px;">
            <p>1. Saya mampu menyiapkan tugasan yang sukar walaupun saya mempunyai masalah.</p>
            <x-ratings-components initialQuestion="0" questionNumber="1" sectionQuestion="I" :userData="$userData[0]->I1"/> 
         </div>
         <div class="introPage <x-form-validation-error key='I2'/>" style="margin-bottom: 10px;">
            <p>2. Saya merasa tidak berdaya menyiapkan tugas-tugas tertentu disebabkan masalah saya.</p>
            <x-ratings-components initialQuestion="0" questionNumber="2" sectionQuestion="I" :userData="$userData[0]->I2"/>
         </div>
         <div class="introPage <x-form-validation-error key='I3'/>" style="margin-bottom: 10px;">
            <p>3. Saya mampu memberikan perhatian dalam mencapai matlamat kerja walaupun saya sedang mempunyai masalah.</p>
            <x-ratings-components initialQuestion="0" questionNumber="3" sectionQuestion="I" :userData="$userData[0]->I3"/>
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