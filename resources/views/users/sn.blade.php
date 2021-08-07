<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN N: TUJUAN</h5>
    <span>Sila TANDAKAN (/) pada skala yang menunjukkan persetujuan anda mengenai <b>tujuan/makna</b> dalam pekerjaan anda.<br><br>
    <p>Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut./p>
   <x-form-global-error/>
   <form action="{{route('updateSectionN')}}" method="POST">
    @csrf
    <div class="introPage <x-form-validation-error key='N1'/>" style="margin-bottom: 10px;">
        <p>1. Pekerjaan saya mempunyai tujuan/makna yang jelas.</p>
        <x-ratings-components initialQuestion="0" questionNumber="1" sectionQuestion="N" :userData="$userData[0]->N1"/> 
     </div>
     <div class="introPage <x-form-validation-error key='N2'/>" style="margin-bottom: 10px;">
        <p>2. Saya mempunyai pemahaman yang jelas tentang apa yang membuatkan pekerjaan saya bermakna.</p>
        <x-ratings-components initialQuestion="0" questionNumber="2" sectionQuestion="N" :userData="$userData[0]->N2"/>
     </div>
     <div class="introPage <x-form-validation-error key='N3'/>" style="margin-bottom: 10px;">
        <p>3. Organisasi selalu mengingatkan saya tentang tujuan dan makna pekerjaan saya dalam memberi perkhidmatan kepada masyarakat.</p>
        <x-ratings-components initialQuestion="0" questionNumber="3" sectionQuestion="N" :userData="$userData[0]->N3"/>
        
     </div>
     <div class="introPage <x-form-validation-error key='N4'/>" style="margin-bottom: 10px;">
        <p>4. Saya berpuas hati dengan penglibatan saya dalam pembuatan keputusan berkaitan kerja.</p>
        <x-ratings-components initialQuestion="0" questionNumber="4" sectionQuestion="N" :userData="$userData[0]->N4"/>
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