<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN H: ORGANISASI BERPRESTASI TINGGI<br><span>( Bhgn. 1 )</span></h5>
    <span>Sila TANDAKAN pada skala yang menunjukkan persetujuan anda mengenai <b>organisasi di tempat kerja anda</b>.<br><br>
    <p>Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</p>
    <x-form-global-error/>
    <form action="{{route('updateSectionH1')}}" method="POST">
        @csrf
        <div class="introPage <x-form-validation-error key='H1'/>" style="margin-bottom: 10px;">
            <p>1. Pengurusan organisasi saya dipercayai oleh ahli organisasi.</p>
            <x-ratings-components initialQuestion="0" questionNumber="1" sectionQuestion="H" :userData="$userData[0]->H1"/> 
        </div>
         <div class="introPage <x-form-validation-error key='H2'/>" style="margin-bottom: 10px;">
            <p>2. Pengurusan organisasi saya mempunyai integriti.</p>
            <x-ratings-components initialQuestion="0" questionNumber="2" sectionQuestion="H" :userData="$userData[0]->H2"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H3'/>" style="margin-bottom: 10px;">
            <p>3. Pengurusan organisasi saya adalah contoh bagi anggota organisasi.</p>
            <x-ratings-components initialQuestion="0" questionNumber="3" sectionQuestion="H" :userData="$userData[0]->H3"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H4'/>" style="margin-bottom: 10px;">
            <p>4. Pengurusan organisasi saya membuat keputusan dengan cepat.</p>
            <x-ratings-components initialQuestion="0" questionNumber="4" sectionQuestion="H" :userData="$userData[0]->H4"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H5'/>" style="margin-bottom: 10px;">
            <p>5. Pengurusan organisasi saya mengambil tindakan dengan segera.</p>
            <x-ratings-components initialQuestion="0" questionNumber="5" sectionQuestion="H" :userData="$userData[0]->H5"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H6'/>" style="margin-bottom: 10px;">
            <p>6. Pengurusan organisasi saya memberi bimbingan kepada semua warga untuk meningkatkan pencapaian.</p>
            <x-ratings-components initialQuestion="0" questionNumber="6" sectionQuestion="H" :userData="$userData[0]->H6"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H7'/>" style="margin-bottom: 10px;">
            <p>7. Pengurusan organisasi saya memberi tumpuan kepada hasil pencapaian.</p>
            <x-ratings-components initialQuestion="0" questionNumber="7" sectionQuestion="H" :userData="$userData[0]->H7"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H8'/>" style="margin-bottom: 10px;">
            <p>8. Pengurusan di organisasi saya adalah berkesan.</p>
            <x-ratings-components initialQuestion="0" questionNumber="8" sectionQuestion="H" :userData="$userData[0]->H8"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H9'/>" style="margin-bottom: 10px;">
            <p>9. Pengurusan organisasi saya mempunyai kepimpinan yang kukuh.</p>
            <x-ratings-components initialQuestion="0" questionNumber="9" sectionQuestion="H" :userData="$userData[0]->H9"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H10'/>" style="margin-bottom: 10px;">
            <p>10. Pengurusan organisasi saya menyakinkan.</p>
            <x-ratings-components initialQuestion="0" questionNumber="10" sectionQuestion="H" :userData="$userData[0]->H10"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H11'/>" style="margin-bottom: 10px;">
            <p>11. Pengurusan organisasi saya mengambil tindakan tegas terhadap warga berprestasi rendah.</p>
            <x-ratings-components initialQuestion="0" questionNumber="11" sectionQuestion="H" :userData="$userData[0]->H11"/> 
         </div>
         <div class="introPage <x-form-validation-error key='H12'/>" style="margin-bottom: 10px;">
            <p>12. Pengurusan organisasi sentiasa memastikan ahli organisasi bertanggungjawab terhadap hasil kerja mereka.</p>
            <x-ratings-components initialQuestion="0" questionNumber="12" sectionQuestion="H" :userData="$userData[0]->H12"/> 
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