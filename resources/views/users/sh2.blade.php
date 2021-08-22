<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN H: ORGANISASI BERPRESTASI TINGGI<br><span>( Bhgn. 2 )</span></h5>
    <span>Sila TANDAKAN pada skala yang menunjukkan persetujuan anda mengenai <b>organisasi di tempat kerja anda</b>.<br><br>
    <p>Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</p>
    <x-form-global-error/>
    <form action="{{route('updateSectionH2')}}" method="POST">
        @csrf
         <div class="introPage <x-form-validation-error key='H13'/>" style="margin-bottom: 10px;">
            <p>13. Strategi organisasi yang jelas.</p>
            <x-ratings-components initialQuestion="0"  questionNumber="13" sectionQuestion="H" :userData="$userData[0]->H13"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H14'/>" style="margin-bottom: 10px;">
            <p>14. Proses/sistem kerja sentiasa diperbaiki.</p>
            <x-ratings-components initialQuestion="0"  questionNumber="14" sectionQuestion="H" :userData="$userData[0]->H14"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H15'/>" style="margin-bottom: 10px;">
            <p>15. Proses/sistem kerja dipermudahkan secara berterusan.</p>
            <x-ratings-components initialQuestion="0"  questionNumber="15" sectionQuestion="H" :userData="$userData[0]->H15"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H16'/>" style="margin-bottom: 10px;">
            <p>16. Proses/sistem kerja diselaraskan.</p>
            <x-ratings-components initialQuestion="0"  questionNumber="16" sectionQuestion="H" :userData="$userData[0]->H16"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H17'/>" style="margin-bottom: 10px;">
            <p>17. Prestasi organisasi dilaporkan secara jelas.</p>
            <x-ratings-components initialQuestion="0"  questionNumber="17" sectionQuestion="H" :userData="$userData[0]->H17"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H18'/>" style="margin-bottom: 10px;">
            <p>18. Maklumat kewangan dan bukan kewangan dilaporkan kepada semua warga.</p>
            <x-ratings-components initialQuestion="0"  questionNumber="18" sectionQuestion="H" :userData="$userData[0]->H18"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H19'/>" style="margin-bottom: 10px;">
            <p>19. Sentiasa meningkatkan kecekapan melalui inovasi.</p>
            <x-ratings-components initialQuestion="0"  questionNumber="19" sectionQuestion="H" :userData="$userData[0]->H19"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H20'/>" style="margin-bottom: 10px;">
            <p>20. Organisasi saya terus berinovasi dalam produk, proses dan perkhidmatannya.</p>
            <x-ratings-components initialQuestion="0"  questionNumber="20" sectionQuestion="H" :userData="$userData[0]->H20"/> 
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