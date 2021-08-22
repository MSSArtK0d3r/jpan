<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN C: KEPUASAN HIDUP</h5>
    <span>Sila TANDAKAN pada skala yang menunjukkan persetujuan anda mengenai <b>kepuasan hidup anda</b>.<br><br>Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</span>
    <x-form-global-error/>
    <form action="{{route('updateSectionC')}}" method="POST" onsubmit="this.querySelectorAll('input').forEach(i => i.disabled = false)">
        @csrf
        <div class="introPage <x-form-validation-error key='C1'/>" style="margin-bottom: 10px;">
            <p>1. Dalam banyak perkara, kehidupan saya adalah hampir dengan ciri kehidupan ideal (sempurna) saya.</p>
            <x-ratings-components initialQuestion="0" questionNumber="1" sectionQuestion="C" :userData="$userData[0]->C1"/>
         </div>
         <div class="introPage <x-form-validation-error key='C2'/>" style="margin-bottom: 10px;">
            <p>2. Saya berpuas hati dengan kehidupan saya.</p>
            <x-ratings-components initialQuestion="0" questionNumber="2" sectionQuestion="C" :userData="$userData[0]->C2"/>
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