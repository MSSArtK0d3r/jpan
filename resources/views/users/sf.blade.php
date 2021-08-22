<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN F: KETERLIBATAN KERJA</h5>
    <span>Sila TANDAKAN pada skala yang menunjukkan persetujuan anda mengenai <b>keterlibatan anda di tempat kerja</b>.<br><br>
    <p>Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</p>
    <x-form-global-error/>    
    <form action="{{route('updateSectionF')}}" method="POST">
            @csrf
            <div class="introPage <x-form-validation-error key='F1'/>" style="margin-bottom: 10px;">
                <p>1. Saya berasa sangat bertenaga di tempat kerja.</p>
                <x-ratings-components initialQuestion="0" questionNumber="1" sectionQuestion="F" :userData="$userData[0]->F1"/>
             </div>
             <div class="introPage <x-form-validation-error key='F2'/>" style="margin-bottom: 10px;">
                <p>2. Apabila bangun pagi, saya mahu pergi bekerja.</p>
                <x-ratings-components initialQuestion="0" questionNumber="2" sectionQuestion="F" :userData="$userData[0]->F2"/>
             </div>
             <div class="introPage <x-form-validation-error key='F3'/>" style="margin-bottom: 10px;">
                <p>3. Saya bersemangat dengan kerja saya.</p>
                <x-ratings-components initialQuestion="0" questionNumber="3" sectionQuestion="F" :userData="$userData[0]->F3"/>
             </div>
             <div class="introPage <x-form-validation-error key='F4'/>" style="margin-bottom: 10px;">
                <p>4. Kerja saya memberi inspirasi kepada saya.</p>
                <x-ratings-components initialQuestion="0" questionNumber="4" sectionQuestion="F" :userData="$userData[0]->F4"/>
             </div>
             <div class="introPage <x-form-validation-error key='F5'/>" style="margin-bottom: 10px;">
                <p>5. Saya terlibat sepenuhnya dalam pekerjaan saya.</p>
                <x-ratings-components initialQuestion="0" questionNumber="5" sectionQuestion="F" :userData="$userData[0]->F5"/>
             </div>
             <div class="introPage <x-form-validation-error key='F6'/>" style="margin-bottom: 10px;">
                <p>6. Saya terlalu mementingkan pekerjaan sehingga leka dengan segalanya.</p>
                <x-ratings-components initialQuestion="0" questionNumber="6" sectionQuestion="F" :userData="$userData[0]->F6"/>
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