<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN B: KEPUASAN KERJA</h5>
    <span>Sila TANDAKAN pada skala yang menunjukkan persetujuan anda mengenai <b>kepuasan kerja anda.</b></span><br><br>
    <p>Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</p>
    <x-form-global-error/>
    <form action="{{route('updateSectionB')}}" method="POST" onsubmit="this.querySelectorAll('input').forEach(i => i.disabled = false)">
        @csrf
        <div class="introPage <x-form-validation-error key='B1'/>" style="margin-bottom: 10px;">
            <p>1. Saya berasa dibayar dengan gaji yang setimpal dengan kerja yang saya lakukan.</p>
                <x-ratings-components initialQuestion="0" questionNumber="1" sectionQuestion="B" :userData="$userData[0]->B1"/>
         </div>
         <div class="introPage <x-form-validation-error key='B3'/>" style="margin-bottom: 10px;">
            <p>2. Mereka yang bekerja dengan baik lebih berpeluang mendapat kenaikan pangkat.</p>
            <x-ratings-components initialQuestion="0" questionNumber="2" sectionQuestion="B" :userData="$userData[0]->B3"/>
         </div>
         <div class="introPage <x-form-validation-error key='B2'/>" style="margin-bottom: 10px;">
            <p>3. Saya berasa puas dengan peluang kenaikan gaji.</p>
            <x-ratings-components initialQuestion="0" questionNumber="3" sectionQuestion="B" :userData="$userData[0]->B2"/>
         </div>
         <div class="introPage <x-form-validation-error key='B4'/>" style="margin-bottom: 10px;">
            <p>4. Saya berpuas hati dengan kepimpinan ketua saya (Penilai 1)<br>Nota: Ketua adalah merujuk kepada Penilai 1 dalam penilaian prestasi tahunan
            </p>
            <x-ratings-components initialQuestion="0" questionNumber="4" sectionQuestion="B" :userData="$userData[0]->B4"/>
         </div>
         @if ($penilai[0]->penilai == 2)
            <div class="introPage <x-form-validation-error key='B5'/>" id="penilai2" style="margin-bottom: 10px;">
            <p style="margin: 0px">5. Saya berpuas hati dengan kepimpinan ketua saya (Penilai 2)<br>Nota: Ketua adalah merujuk kepada Penilai 2 dalam penilaian prestasi tahunan.</p>
            <x-ratings-components initialQuestion="0" questionNumber="5" sectionQuestion="B" :userData="$userData[0]->B5"/>
            </div>
         @else
            <div class="introPage <x-form-validation-error key='B5'/>" id="penilai2" style="margin-bottom: 10px;">
            <p style="margin: 0px">5. Saya berpuas hati dengan kepimpinan ketua saya (Penilai 2)<br><span style="font-size: 12px;font-style: italic;">Nota: Soalan ini hanya terbuka kepada yang mempunyai penilai ke-2</span></p>
            </div>
         @endif
         
         <div class="introPage <x-form-validation-error key='B6'/>" style="margin-bottom: 10px;">
            <p>6. Banyak peraturan dan prosedur kerja menyukarkan saya untuk melakukan kerja dengan baik.</p>
            
            <x-ratings-components initialQuestion="0" questionNumber="6" sectionQuestion="B" :userData="$userData[0]->B6"/>
            
         </div>
         <div class="introPage <x-form-validation-error key='B7'/>" style="margin-bottom: 10px;">
            <p>7. Usaha saya untuk bekerja dengan baik jarang dihalang oleh birokrasi.</p>
            
            <x-ratings-components initialQuestion="0" questionNumber="7" sectionQuestion="B" :userData="$userData[0]->B7"/>
            
         </div>
         <div class="introPage <x-form-validation-error key='B8'/>" style="margin-bottom: 10px;">
            <p>8. Terlalu banyak kerja yang perlu saya lakukan di tempat kerja.</p>
            
            <x-ratings-components initialQuestion="0" questionNumber="8" sectionQuestion="B" :userData="$userData[0]->B8"/>
            
         </div>
         <div class="introPage <x-form-validation-error key='B9'/>" style="margin-bottom: 10px;">
            <p>9. Saya perlu bekerja keras kerana rakan sekerja saya yang tidak berkebolehan.</p>
            
            <x-ratings-components initialQuestion="0" questionNumber="9" sectionQuestion="B" :userData="$userData[0]->B9"/>
            
         </div>
         <div class="introPage <x-form-validation-error key='B10'/>" style="margin-bottom: 10px;">
            <p>10. Terlalu banyak pertengkaran dan konflik yang berlaku di tempat kerja saya.</p>
            
            <x-ratings-components initialQuestion="0" questionNumber="10" sectionQuestion="B" :userData="$userData[0]->B10"/>
            
         </div>
         <div class="introPage <x-form-validation-error key='B11'/>" style="margin-bottom: 10px;">
            <p>11. Kadang kala, saya berasa bahawa kerja saya tidak bermakna.</p>
            
            <x-ratings-components initialQuestion="0" questionNumber="11" sectionQuestion="B" :userData="$userData[0]->B11"/>
            
         </div>
         <div class="introPage <x-form-validation-error key='B12'/>" style="margin-bottom: 10px;">
            <p>12. Saya berasa bangga dengan pekerjaan saya.</p>
            
            <x-ratings-components initialQuestion="0" questionNumber="12" sectionQuestion="B" :userData="$userData[0]->B12"/>
            
         </div>
         <div class="introPage <x-form-validation-error key='B13'/>" style="margin-bottom: 10px;">
            <p>13. Pekerjaan saya menyeronokkan.</p>
            
            <x-ratings-components initialQuestion="0" questionNumber="13" sectionQuestion="B" :userData="$userData[0]->B13"/>
            
         </div>
         <div class="introPage <x-form-validation-error key='B14'/>" style="margin-bottom: 10px;">
            <p>14. Komunikasi agak baik dalam organisasi ini.</p>
            
            <x-ratings-components initialQuestion="0" questionNumber="14" sectionQuestion="B" :userData="$userData[0]->B14"/>
            
         </div>
         <div class="introPage <x-form-validation-error key='B15'/>" style="margin-bottom: 10px;">
            <p>15. Matlamat organisasi ini tidak jelas bagi saya.</p>
            
            <x-ratings-components initialQuestion="0" questionNumber="15" sectionQuestion="B" :userData="$userData[0]->B15"/>
            
         </div>
         <div class="introPage <x-form-validation-error key='B16'/>" style="margin-bottom: 10px;">
            <p>16. Tugasan kerja yang diberikan tidak dijelaskan dengan sepenuhnya.</p>
            
            <x-ratings-components initialQuestion="0" questionNumber="16" sectionQuestion="B" :userData="$userData[0]->B16"/>
            
         </div>
         <div class="introPage <x-form-validation-error key='B17'/>" style="margin-bottom: 10px;">
            <p>17. Saya berpuas hati dengan keselamatan di tempat kerja saya.</p>
            
            <x-ratings-components initialQuestion="0" questionNumber="17" sectionQuestion="B" :userData="$userData[0]->B17"/>
            
         </div>
         <div class="introPage <x-form-validation-error key='B18'/>" style="margin-bottom: 10px;">
            <p>18. Saya berpuas hati dengan persekitaran tempat kerja saya yang selesa.</p>
            <div class="ratingContainer">
                <x-ratings-components initialQuestion="0" questionNumber="18" sectionQuestion="B" :userData="$userData[0]->B18"/>
            </div>
         </div>
         <button class="subBtn twelve columns" type="submit">Simpan</button>
    </form>
</div>
<div class="four columns userLinks">
    <x-users-links 
    :user="$user" 
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