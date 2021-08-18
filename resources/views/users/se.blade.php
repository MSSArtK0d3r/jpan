<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN E: AFEK</h5>
    <span>Sila TANDAKAN pada skala yang menunjukkan persetujuan anda mengenai <b>perasaan atau emosi anda</b>.<br><br>
    <p>Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</p>
    <x-form-global-error/>
    <form action="{{route('updateSectionE')}}" method="POST">
        @csrf
        <div class="introPage <x-form-validation-error key='E1'/>" style="margin-bottom: 10px;">
            <p>1. Saya berasa teruja semasa bekerja.</p>
            <x-ratings-components initialQuestion="0" questionNumber="1" sectionQuestion="E" :userData="$userData[0]->E1"/>
         </div>
         <div class="introPage <x-form-validation-error key='E2'/>" style="margin-bottom: 10px;">
            <p>2. Saya selalu aktif melakukan pekerjaan.</p>
            <x-ratings-components initialQuestion="0" questionNumber="2" sectionQuestion="E" :userData="$userData[0]->E2"/>
         </div>
         <div class="introPage <x-form-validation-error key='E3'/>" style="margin-bottom: 10px;">
            <p>3. Saya berasa bangga dengan pekerjaan saya.</p>
            <x-ratings-components initialQuestion="0" questionNumber="3" sectionQuestion="E" :userData="$userData[0]->E3"/>
         </div>
         <div class="introPage <x-form-validation-error key='E4'/>" style="margin-bottom: 10px;">
            <p>4. Saya kecewa dengan pekerjaan saya.</p>
            <x-ratings-components initialQuestion="0" questionNumber="4" sectionQuestion="E" :userData="$userData[0]->E4"/>
         </div>
         <div class="introPage <x-form-validation-error key='E5'/>" style="margin-bottom: 10px;">
            <p>5. Saya selalu berasa gelisah semasa bekerja.</p>
            <x-ratings-components initialQuestion="0" questionNumber="5" sectionQuestion="E" :userData="$userData[0]->E5"/>
         </div>
         <div class="introPage <x-form-validation-error key='E6'/>" style="margin-bottom: 10px;">
            <p>6. Saya merasa lesu disebabkan oleh kerja saya.</p>
            <x-ratings-components initialQuestion="0" questionNumber="6" sectionQuestion="E" :userData="$userData[0]->E6"/>
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