<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/skeleton.css') }}">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color:rgb(243, 236, 230);
}

#regForm {
    /* border-radius: 5px;
    background-color: #ffffff; */
    margin: 20px auto;
    font-family: Roboto;
    max-width: 640px;
    /* border:1px solid #d4d4d4; */
}

h1 {
  text-align: center;  
}

input {
  padding: 15px 10px;
    font-size: 14px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
    border-radius: 3px;
}

label{
  font-family: 'Raleway';
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 1;
}

#prevBtn {
  background-color: #62469a !important;
    font-size: 13px;
    padding: 0px 24px;
    box-shadow: 0 2px 1px -1px rgb(0 0 0 / 20%), 0 1px 1px 0 rgb(0 0 0 / 14%), 0 1px 3px 0 rgb(0 0 0 / 12%);
    text-transform: none;
}

#prevBtn button:hover{
  color:white !important;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #14a119;
}

.imgBanner{
  width: 100%;
}

.titleForm{
    max-width: 640px;
    text-align: center;
    margin: 20px auto;
    text-align: center;
}

.nextBtn {
    background-color: #ffffff !important;
    font-size: 13px;
    padding: 0px 24px;
    box-shadow: 0 2px 1px -1px rgb(0 0 0 / 20%), 0 1px 1px 0 rgb(0 0 0 / 14%), 0 1px 3px 0 rgb(0 0 0 / 12%);
    text-transform: none;
    color: #752303 !important;
}

.bottomNav {
  max-width: 640px;
  margin: 0px auto;
}

.titleCategory{
  margin: 20px 0px;
}

.fiftyPercent {
  width:50%;
  margin-bottom: 0;
}

.inBlock {
  display: inline-block;
}

.introPage{
  display: block;
    padding: 25px;
    background-color: white;
    border-radius: 8px;
    border: 1px solid #d2d2d2;
}

.introPage label,input{}

.rating{
    margin: 0 15px;
    width: 10px;
    display: inline-block;
}

.ratingContainer{
  text-align: center;
}


</style>
<body>

<div class="container">
  <div class="row">
    <div class="twelve columns">
      <div>
        <img src="{{ URL::asset('images/header.png') }}" class="imgBanner">
      </div>
      <form id="regForm" method="POST" action="/formMasuk">
      @csrf
        <div class="titleForm"><h4>SOAL SELIDIK INDEKS-KEGEMBIRAAN ORGANISASI BERPRESTASI TINGGI (I-KOBT)</h4></div>
        <!-- One "tab" for each step in the form: -->
        <div class="tab introPage">
          <div>
            <p>Tuan/Puan,</p>
            <p>Indeks ini bertujuan untuk mengukur kegembiraan di tempat kerja bagi penjawat awam di negeri Sabah. Dapatan indeks ini akan dijadikan indikator dalam merangka dasar, merancang dan melaksanakan program pembangunan, pencegahan dan intervensi ke atas penjawat awam di negeri Sabah.</p>
            <p>Tuan/Puan terpilih sebagai reponden untuk kajian ini. Sehubungan dengan itu, pihak kami memohon kerjasama dan jasa baik daripada pihak tuan/puan untuk melengkapkan maklumat dalam soal selidik ini. Pihak kami amat berbesar hati sekiranya pihak tuan/puan dapat menjawab semua maklumat secara JUJUR dan IKHLAS. Segala maklumat yang pihak tuan/puan berikan adalah dirahsiakan dan digunakan hanya untuk tujuan penyelidikan sahaja.</p>
            <p>Kerjasama dari pihak tuan/puan meluangkan masa menjawab soalan kaji selidik ini amat dihargai dan didahului dengan ucapan terima kasih.</p>
            <p>Selamat menjawab. Terima kasih.</p>
            <p>Arahan dan Makluman:
              <ol>
                <li>Penyertaan anda dalam kajian ini adalah secara sukarela.</li>
                <li>Anda mestilah seorang PENJAWAT AWAM, Jabatan Perkhidmatan Awam Negeri Sabah.</li>
                <li>Anda dikehendaki memberikan respons kepada SEMUA pernyataan.</li>
                <li>Anda digalakkan untuk memberikan respons dengan JUJUR DAN IKHLAS memandangkan tidak ada jawapan ‘betul’ atau ‘salah’.</li>
                <li>Data hanya akan dianalisis berdasarkan keseluruhan responden dan bukan secara individu.</li>
              </ol>
            </p>
          </div>
        </div>
         <div class="tab">
                  <div class="titleCategory introPage"><span><strong>BAHAGIAN A</strong><br><span>Sila isi setiap maklumat yang diperlukan</span></span>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <label>1. Umur ( tahun ) :</label>
                     <input class="fiftyPercent" placeholder="Umur anda" oninput="this.className = ''" name="umur" value="23">
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>2. Jantina :</p>
                     <input type="radio" id="Lelaki" name="jantina" value="Lelaki" checked="checked">
                     <label class="inBlock" for="Lelaki">Lelaki</label><br>
                     <input type="radio" id="Perempuan" name="jantina" value="Perempuan">
                     <label class="inBlock" for="Perempuan">Perempuan</label><br>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>3. Agama :</p>
                     <input type="radio" id="Islam" name="agama" value="Islam" checked="checked">
                     <label class="inBlock" for="Islam">Islam</label><br>
                     <input type="radio" id="Kristian" name="agama" value="Kristian">
                     <label class="inBlock" for="Kristian">Kristian</label><br>
                     <input type="radio" id="Buddha" name="agama" value="Buddha">
                     <label class="inBlock" for="Buddha">Buddha</label><br>
                     <input type="radio" id="Hindu" name="agama" value="Hindu">
                     <label class="inBlock" for="Hindu">Hindu</label><br>
                     <input type="radio" id="Tiada" name="agama" value="Tiada">
                     <label class="inBlock" for="Tiada">Tidak Menganut Agama</label><br>
                  </div>
               
               <div class="introPage" style="margin-bottom: 10px;">
                  <label>4. Bangsa :</label>
                  <input class="fiftyPercent" placeholder="Bangsa" oninput="this.className = ''" name="bangsa" value="Melayu">
               </div>
               <div class="introPage" style="margin-bottom: 10px;">
                  <p>5. Status Perkahwinan :</p>
                  <input type="radio" id="Bujang" name="status" value="Bujang" checked="checked">
                  <label class="inBlock" for="Bujang">Bujang</label><br>
                  <input type="radio" id="Berkahwin" name="status" value="Berkahwin">
                  <label class="inBlock" for="Berkahwin">Berkahwin</label><br>
                  <input type="radio" id="Balu/Duda" name="status" value="Balu/Duda">
                  <label class="inBlock" for="Balu/Duda">Balu/Duda</label><br>
                  <input type="radio" id="Bercerai" name="status" value="Bercerai">
                  <label class="inBlock" for="Bercerai">Bercerai</label><br>
                  <input type="radio" id="other" name="status" value="Other">
                  <label class="inBlock" for="other">Other:</label><br>
                </div>
               <div class="introPage" style="margin-bottom: 10px;">
               <label>6. Bilangan Anak :</label>
               <input class="fiftyPercent" placeholder="Bilangan anak" oninput="this.className = ''" name="bilAnak" value="0">
               </div>
               <div class="introPage" style="margin-bottom: 10px;">
               <p>7. Adakah anda tinggal bersama pasangan anda? :</p>
               <input type="radio" id="Ya" name="tinggalBersamaPasangan" value="Ya" checked="checked">
               <label class="inBlock" for="Ya">Ya</label><br>
               <input type="radio" id="tidak" name="tinggalBersamaPasangan" value="Tidak">
               <label class="inBlock" for="tidak">Tidak</label><br>
               </div>
               <div class="introPage" style="margin-bottom: 10px;">
               <p>8. Tahap Pencapaian Akademik Tertinggi :</p>
               <input type="radio" id="UPSR" name="education" value="UPSR" checked="checked">
               <label class="inBlock" for="UPSR">UPSR</label><br>
               <input type="radio" id="PMR" name="education" value="PMR">
               <label class="inBlock" for="PMR">PMR</label><br>
               <input type="radio" id="SPM" name="education" value="SPM">
               <label class="inBlock" for="SPM">SPM</label><br>
               <input type="radio" id="Sijil" name="education" value="Sijil">
               <label class="inBlock" for="Sijil">Sijil</label><br>
               <input type="radio" id="STPM/Diploma" name="education" value="STPM/Diploma">
               <label class="inBlock" for="STPM/Diploma">STPM/Diploma</label><br>
               <input type="radio" id="SarjanaMuda" name="education" value="SarjanaMuda">
               <label class="inBlock" for="SarjanaMuda">Sarjana Muda</label><br>
               <input type="radio" id="Master/PhD" name="education" value="Master/PhD">
               <label class="inBlock" for="Master/PhD">Master/PhD</label><br>
               <input type="radio" id="TidakBersekolah" name="education" value="TidakBersekolah">
               <label class="inBlock" for="TidakBersekolah">Tidak Bersekolah</label><br>
               <input type="radio" id="TidakTamatSekolah" name="education" value="TidakTamatSekolah">
               <label class="inBlock" for="TidakTamatSekolah">Tidak Tamat Sekolah</label>
               </div>
               <div class="introPage" style="margin-bottom: 10px;">
                     <label>9. Jumlah Gaji : RM</label>
                     <input class="fiftyPercent" placeholder="Jumlah gaji" oninput="this.className = ''" name="jumlahGaji" value="2500">
               </div>
               <div class="introPage" style="margin-bottom: 10px;">
               <p>10. Adakah anda mengalami kesukaran menjalani kehidupan dengan jumlah gaji anda?</p>
               <input type="radio" id="Ya" name="kesukaranGaji" value="Ya" checked="checked">
               <label class="inBlock" for="Ya">Ya</label><br>
               <input type="radio" id="Tidak" name="kesukaranGaji" value="Tidak">
               <label class="inBlock" for="Tidak">Tidak</label>
               </div>
               <div class="introPage" style="margin-bottom: 10px;">
               <p>11. Adakah anda pernah berpindah/menukar pekerjaan sebelum ini?</p>
               <input type="radio" id="Ya" name="pernahTukarKerja" value="Ya" checked="checked">
               <label class="inBlock" for="Ya">Ya</label><br>
               <input type="radio" id="Tidak" name="pernahTukarKerja" value="Tidak">
               <label class="inBlock" for="Tidak">Tidak</label>
               </div>
               <div class="introPage" style="margin-bottom: 10px;">
               <p>12. Adakah anda mengalami masalah kesihatan? (Jika YA, sila nyatakan)</p>
               <input type="radio" id="Ya" name="masalahKesihatan" value="Ya" checked="checked">
               <label class="inBlock" for="Ya">Ya</label><br>
               <input type="radio" id="Tidak" name="masalahKesihatan" value="Tidak">
               <label class="inBlock" for="Tidak">Tidak</label>
               </div>
               <div class="introPage" style="margin-bottom: 10px;">
               <p>13. Status Rumah Tempat Tinggal : </p>
               <input type="radio" id="RumahSendiri" name="tempatTinggal" value="RumahSendiri checked="checked"">
               <label class="inBlock" for="RumahSendiri">Rumah Sendiri</label><br>
               <input type="radio" id="RumahSewa" name="tempatTinggal" value="RumahSewa">
               <label class="inBlock" for="RumahSewa">Rumah Sewa</label><br>
               <input type="radio" id="BilikSewa" name="tempatTinggal" value="BilikSewa">
               <label class="inBlock" for="BilikSewa">Bilik Sewa</label><br>
               <input type="radio" id="other" name="tempatTinggal" value="other">
               <label class="inBlock" for="other">Other</label>
               </div>
               <div class="introPage" style="margin-bottom: 10px;">
               <p>14. Status Tinggal Bersama : </p>
               <input type="radio" id="bersamaIbuBapa" name="tinggalBersama" value="bersamaIbuBapa" checked="checked">
               <label class="inBlock" for="bersamaIbuBapa">Bersama Ibu Bapa</label><br>
               <input type="radio" id="BersamaKeluargaMertua" name="tinggalBersama" value="BersamaKeluargaMertua">
               <label class="inBlock" for="BersamaKeluargaMertua">Bersama Keluarga Mertua</label><br>
               <input type="radio" id="HanyaBersamaSuamiDanAnak" name="tinggalBersama" value="HanyaBersamaSuamiDanAnak">
               <label class="inBlock" for="HanyaBersamaSuamiDanAnak">Bersama Suami dan Anak</label><br>
               <input type="radio" id="other" name="tinggalBersama" value="other">
               <label class="inBlock" for="other">Other</label>
               </div>
            <div class="introPage" style="margin-bottom: 10px;">
               <p>15. Apakah jenis pengangkutan anda ke tempat kerja?</p>
               <input type="radio" id="KeretaSendiri" name="kenderaanKerja" value="KeretaSendiri" checked="checked">
               <label class="inBlock" for="KeretaSendiri">Kereta Sendiri</label><br>
               <input type="radio" id="MenumpangRakan" name="kenderaanKerja" value="MenumpangRakan">
               <label class="inBlock" for="MenumpangRakan">Menumpang Rakan</label><br>
               <input type="radio" id="ehailing" name="kenderaanKerja" value="ehailing">
               <label class="inBlock" for="ehailing">e-Hailing</label><br>
               <input type="radio" id="BasTeksi" name="kenderaanKerja" value="BasTeksi">
               <label class="inBlock" for="BasTeksi">Bas/Teksi</label><br>
               <input type="radio" id="other" name="kenderaanKerja" value="other">
               <label class="inBlock" for="other">Other</label><br>
            </div>
      
         </div>
        <div class="tab"> <!-- Start B2 Section -->
          <div class="titleCategory introPage">
            <span>
              <strong style="font-size:20px;">BAHAGIAN B</strong><br>
              <span>Sila TANDAKAN (/) pada skala yang menunjukkan persetujuan anda. Skala 0 menunjukkan anda Sangat Tidak Bersetuju dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</span>
          </span>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>1. Saya berpuas hati dengan gaji yang bersesuaian dengan jawatan saya.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B1" value="1"checked="checked">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B1" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B1" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B1" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B1" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B1" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B1" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B1" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B1" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B1" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
                      <p>2. Saya berpuas hati dengan peluang kenaikan pangkat saya.</p>
                      
                      <div class="ratingContainer">
                        <div class="rating">
                          <label for="1">
                          <input type="radio" id="1" name="B2" value="1">1
                          </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="B2" value="2">
                        <label for="2">2</label>
                        </div>
                        <div class="rating">
                          <input type="radio" id="3" name="B2" value="3">
                          <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                          <input type="radio" id="4" name="B2" value="4">
                          <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                          <input type="radio" id="5" name="B2" value="5">
                          <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                          <input type="radio" id="6" name="B2" value="6">
                          <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                          <input type="radio" id="7" name="B2" value="7">
                          <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                          <input type="radio" id="8" name="B2" value="8">
                          <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                          <input type="radio" id="9" name="B2" value="9">
                          <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                          <input type="radio" id="10" name="B2" value="10">
                          <label class="inBlock" for="10">10</label>
                        </div>
                      </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
                      <p>3. Saya berpuas hati dengan cara ketua saya menyelia kerja saya.</p>
                      
                      <div class="ratingContainer">
                        <div class="rating">
                          <label for="1">
                          <input type="radio" id="1" name="B3" value="1">1
                          </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="B3" value="2">
                        <label for="2">2</label>
                        </div>
                        <div class="rating">
                          <input type="radio" id="3" name="B3" value="3">
                          <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                          <input type="radio" id="4" name="B3" value="4">
                          <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                          <input type="radio" id="5" name="B3" value="5">
                          <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                          <input type="radio" id="6" name="B3" value="6">
                          <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                          <input type="radio" id="7" name="B3" value="7">
                          <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                          <input type="radio" id="8" name="B3" value="8">
                          <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                          <input type="radio" id="9" name="B3" value="9">
                          <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                          <input type="radio" id="10" name="B3" value="10">
                          <label class="inBlock" for="10">10</label>
                        </div>
                      </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>4. Saya berpuas hati dengan faedah yang saya terima dan sesuai dengan jawatan saya.
             </p>
                              
                              <div class="ratingContainer">
                                <div class="rating">
                                  <label for="1">
                                  <input type="radio" id="1" name="B4" value="1">1
                                  </label>
                                </div>
                                <div class="rating"><input type="radio" id="2" name="B4" value="2">
                                <label for="2">2</label>
                                </div>
                                <div class="rating">
                                  <input type="radio" id="3" name="B4" value="3">
                                  <label class="inBlock" for="3">3</label>
                                </div>
                                <div class="rating">
                                  <input type="radio" id="4" name="B4" value="4">
                                  <label class="inBlock" for="4">4</label>
                                </div>
                                <div class="rating">
                                  <input type="radio" id="5" name="B4" value="5">
                                  <label class="inBlock" for="5">5</label>
                                </div>
                                <div class="rating">
                                  <input type="radio" id="6" name="B4" value="6">
                                  <label class="inBlock" for="6">6</label>
                                </div>
                                <div class="rating">
                                  <input type="radio" id="7" name="B4" value="7">
                                  <label class="inBlock" for="7">7</label>
                                </div>
                                <div class="rating">
                                  <input type="radio" id="8" name="B4" value="8">
                                  <label class="inBlock" for="8">8</label>
                                </div>
                                <div class="rating">
                                  <input type="radio" id="9" name="B4" value="9">
                                  <label class="inBlock" for="9">9</label>
                                </div>
                                <div class="rating">
                                  <input type="radio" id="10" name="B4" value="10">
                                  <label class="inBlock" for="10">10</label>
                                </div>
                             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>5. Saya berpuas hati dengan penghargaan yang diberikan kepada saya di tempat kerja.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B5" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B5" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B5" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B5" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B5" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B5" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B5" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B5" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B5" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B5" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>6. Saya berpuas hati dengan peraturan dan prosedur di tempat kerja saya yang menyenangkan tugas saya.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B6" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B6" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B6" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B6" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B6" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B6" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B6" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B6" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B6" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B6" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>7. Saya mempunyai hubungan yang baik dengan rakan sekerja di tempat kerja.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B7" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B7" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B7" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B7" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B7" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B7" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B7" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B7" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B7" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B7" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>8. Saya berpuas hati dengan perkara/kerja yang saya lakukan di tempat kerja saya.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B8" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B8" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B8" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B8" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B8" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B8" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B8" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B8" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B8" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B8" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>9. Saya mempunyai komunikasi yang baik dengan rakan sekerja.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B9" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B9" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B9" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B9" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B9" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B9" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B9" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B9" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B9" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B9" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>10. Saya mempunyai komunikasi yang baik dengan ketua saya.
            </p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B10" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B10" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B10" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B10" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B10" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B10" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B10" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B10" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B10" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B10" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>11. Saya berasa bertenaga dan bersemangat apabila bekerja.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B11" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B11" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B11" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B11" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B11" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B11" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B11" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B11" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B11" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B11" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>12. Saya melakukan kerja saya dengan berdedikasi.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B12" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B12" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B12" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B12" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B12" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B12" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B12" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B12" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B12" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B12" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>13. Saya terlibat sepenuhnya dengan kerja yang saya lakukan di tempat kerja.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B13" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B13" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B13" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B13" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B13" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B13" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B13" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B13" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B13" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B13" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>14. Saya gembira dengan cara kerja di tempat kerja saya.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B14" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B14" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B14" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B14" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B14" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B14" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B14" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B14" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B14" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B14" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>15. Saya suka dengan gaya kepimpinan ketua saya.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B15" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B15" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B15" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B15" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B15" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B15" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B15" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B15" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B15" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B15" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>16. Saya berpuas hati dengan jarak antara lokasi kerja dengan rumah saya.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B16" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B16" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B16" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B16" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B16" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B16" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B16" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B16" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B16" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B16" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>17. Saya berpuas hati dengan reputasi jabatan di tempat saya bekerja.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B17" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B17" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B17" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B17" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B17" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B17" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B17" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B17" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B17" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B17" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>18. Saya berpuas hati dengan pembangunan kerjaya di tempat kerja saya.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B18" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B18" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B18" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B18" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B18" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B18" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B18" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B18" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B18" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B18" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>19. Saya berpuas hati dengan pencapaian potensi saya di tempat kerja.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B19" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B19" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B19" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B19" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B19" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B19" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B19" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B19" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B19" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B19" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>20. Saya berpuas hati dengan kehidupan saya.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B20" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B20" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B20" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B20" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B20" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B20" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B20" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B20" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B20" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B20" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>21. Saya merasa bersemangat dalam tempoh seminggu ini.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B21" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B21" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B21" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B21" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B21" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B21" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B21" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B21" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B21" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B21" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>22. Saya merasa bangga dalam tempoh seminggu ini.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B22" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B22" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B22" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B22" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B22" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B22" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B22" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B22" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B22" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B22" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>23. Saya merasakan kekecewaan dalam tempoh seminggu ini.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B23" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B23" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B23" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B23" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B23" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B23" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B23" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B23" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B23" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B23" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>24. Saya merasakan kegelisahan dalam tempoh seminggu ini.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B24" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B24" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B24" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B24" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B24" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B24" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B24" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B24" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B24" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B24" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>25. Saya merasa tidak begitu berharga sebagai seorang pekerja.
            </p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B25" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B25" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B25" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B25" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B25" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B25" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B25" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B25" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B25" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B25" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>26. Saya berasa takut tanpa sebab yang munasabah semasa bekerja.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B26" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B26" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B26" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B26" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B26" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B26" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B26" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B26" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B26" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B26" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>27. Saya rasa sukar untuk relaks semasa bekerja.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B27" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B27" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B27" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B27" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B27" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B27" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B27" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B27" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B27" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B27" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>28. Saya berasa penat apabila bangun pagi dan terpaksa menghadapi waktu kerja yang sama setiap hari.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B28" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B28" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B28" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B28" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B28" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B28" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B28" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B28" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B28" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B28" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>29. Saya merasa lesu disebabkan oleh kerja saya.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B29" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B29" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B29" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B29" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B29" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B29" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B29" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B29" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B29" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B29" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>30. Saya semakin menjadi seseorang yang tidak berperasaan terhadap orang lain semenjak saya memegang jawatan ini.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B30" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B30" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B30" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B30" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B30" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B30" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B30" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B30" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B30" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B30" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>31. Saya merasakan bahawa saya mempengaruhi kehidupan orang lain secara positif melalui tugasan kerja yang saya laksanakan.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B31" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B31" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B31" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B31" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B31" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B31" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B31" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B31" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B31" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B31" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>32. Semasa saya bertugas, saya tenang ketika berhadapan dengan masalah-masalah yang beremosi.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B32" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B32" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B32" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B32" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B32" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B32" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B32" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B32" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B32" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B32" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>33. Saya berpuas hati dengan keseimbangan antara kehidupan bekerjaya dan kehidupan peribadi saya.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B33" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B33" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B33" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B33" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B33" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B33" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B33" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B33" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B33" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B33" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>34. Saya berpuas hati dengan perkhidmatan yang diberikan kepada pelanggan oleh jabatan saya.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B34" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B34" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B34" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B34" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B34" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B34" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B34" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B34" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B34" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B34" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>35. Saya berpuas hati dengan pengurusan Persatuan Pekerja terhadap kebajikan saya.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B35" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B35" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B35" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B35" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B35" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B35" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B35" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B35" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B35" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B35" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>36. Saya boleh melakukan kerja dengan lebih baik sekiranya saya tidak mempunyai banyak tugas/aktiviti yang dilakukan dalam satu masa.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B36" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B36" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B36" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B36" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B36" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B36" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B36" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B36" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B36" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B36" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>37. Saya berpuas hati dengan penglibatan saya dalam pembuatan keputusan berkaitan kerja.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B37" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B37" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B37" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B37" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B37" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B37" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B37" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B37" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B37" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B37" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>38. Saya berasa bahawa pekerjaan saya disifatkan sebagai pekerjaan yang penting.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B38" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B38" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B38" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B38" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B38" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B38" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B38" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B38" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B38" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B38" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>39. Saya berpuas hati dengan persekitaran tempat kerja saya yang selesa.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B39" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B39" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B39" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B39" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B39" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B39" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B39" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B39" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B39" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B39" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>40. Saya berpuas hati dengan keselamatan di tempat kerja saya.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B40" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B40" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B40" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B40" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B40" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B40" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B40" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B40" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B40" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B40" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>41. Saya berniat untuk berhenti daripada pekerjaan saya sekarang.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B41" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B41" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B41" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B41" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B41" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B41" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B41" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B41" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B41" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B41" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>42. Saya berniat untuk berpindah/menukar pekerjaan saya.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B42" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B42" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B42" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B42" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B42" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B42" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B42" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B42" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B42" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B42" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>43. Saya berniat untuk mengambil cuti rehat yang panjang disebabkan pekerjaan saya.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B43" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B43" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B43" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B43" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B43" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B43" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B43" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B43" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B43" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B43" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>44. Saya memberikan komitmen yang sepenuhnya kepada pekerjaan saya.</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B44" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B44" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B44" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B44" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B44" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B44" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B44" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B44" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B44" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B44" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>45. Sila bayangkan satu tangga yang mana tapak yang paling bawah adalah bernilai 0 dan tapak paling atas adalah bernilai 10. Puncak tangga tersebut merupakan kehidupan yang paling baik bagi anda manakala bahagian paling bawah tangga tersebut adalah kehidupan yang paling teruk bagi anda. Pada tapak manakah anda berdiri di tangga ini sekarang?</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="B45" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="B45" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="B45" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="B45" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="B45" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
                <div class="rating">
                   <input type="radio" id="6" name="B45" value="6">
                   <label class="inBlock" for="6">6</label>
                </div>
                <div class="rating">
                   <input type="radio" id="7" name="B45" value="7">
                   <label class="inBlock" for="7">7</label>
                </div>
                <div class="rating">
                   <input type="radio" id="8" name="B45" value="8">
                   <label class="inBlock" for="8">8</label>
                </div>
                <div class="rating">
                   <input type="radio" id="9" name="B45" value="9">
                   <label class="inBlock" for="9">9</label>
                </div>
                <div class="rating">
                   <input type="radio" id="10" name="B45" value="10">
                   <label class="inBlock" for="10">10</label>
                </div>
             </div>
          </div>
        </div> <!-- End B2 Section-->
        <div class="tab"> <!--Bahagian 3 Section Start-->
          <div class="titleCategory introPage">
            <span>
              <strong style="font-size:20px;">BAHAGIAN C</strong><br>
              <span>Sila TANDAKAN (/) pada skala yang menunjukkan persetujuan anda berkaitan pekerjaan anda.<br>1 = Sangat Tidak Setuju (STS)<br>2 = Tidak Setuju (TS)<br>3 = Kurang Setuju (KS)<br>4 = Setuju (S)<br>5 = Sangat Setuju (SS)</span>
          </span>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>Gaji yang memuaskan</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="C1" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="C1" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="C1" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="C1" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="C1" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>Persekitaran tempat kerja yang menyenangkan</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="C2" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="C2" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="C2" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="C2" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="C2" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>Hubungan rakan sekerja yang baik</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="C3" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="C3" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="C3" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="C3" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="C3" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>Adanya peluang kenaikan pangkat</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="C4" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="C4" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="C4" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="C4" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="C4" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
             </div>
          </div>
          <div class="introPage" style="margin-bottom: 10px;">
             <p>Ketua saya menghargai sumbangan saya</p>
             <div class="ratingContainer">
                <div class="rating">
                   <label for="1">
                   <input type="radio" id="1" name="C5" value="1">1
                   </label>
                </div>
                <div class="rating"><input type="radio" id="2" name="C5" value="2">
                   <label for="2">2</label>
                </div>
                <div class="rating">
                   <input type="radio" id="3" name="C5" value="3">
                   <label class="inBlock" for="3">3</label>
                </div>
                <div class="rating">
                   <input type="radio" id="4" name="C5" value="4">
                   <label class="inBlock" for="4">4</label>
                </div>
                <div class="rating">
                   <input type="radio" id="5" name="C5" value="5">
                   <label class="inBlock" for="5">5</label>
                </div>
             </div>
          </div>
        </div> <!-- Bahagian 3 Tamat -->
        <!-- Circles which indicates the steps of the form: -->
      </form>
      <div class="bottomNav">
        <div style="float: left;">
          <button type="button" id="prevBtn" onclick="nextPrev(-1)">Back</button>
          <button class="button-primary nextBtn" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
        <div style="float: right;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>
      </div>
      <div style="clear:both;margin:10px auto;max-width: 640px;text-align: center;"><span>&copy 2021 JABATAN PERKHIDMATAN AWAM NEGERI SABAH</span></div>
    </div>
   </div>
  </div>
</div>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</body>
</html>
