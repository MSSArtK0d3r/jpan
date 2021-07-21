<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="{{ url('css/normalize.css') }}">
<link rel="stylesheet" href="{{ url('css/skeleton.css') }}">
<style>
   * {
      box-sizing: border-box;
   }

   body {
      background-image: url('/images/jpan.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      font-family: "Raleway";
   }

   #regForm {
      margin: 20px auto;
      font-family: "Raleway";
      max-width: 640px;
   }

   label {
      font-weight: normal;
   }

   h1 {
      text-align: center;
   }

   input {
      outline: none;
      padding: 5px 10px;
      font-size: 14px;
      font-family: Raleway;
      border-bottom: 1px solid #aaaaaa;
      border-top: 0px;
      border-left: 0px;
      border-right: 0px;
      text-align: center;
      margin-bottom: 0;
   }

   .small-input {
      width: 70px;
   }

   .big-input {
      width: 50%;
   }

   label {
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

   #prevBtn button:hover {
      color: white !important;
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

   .imgBanner {
      width: 100%;
   }

   .titleForm {
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

   .title-center {
      text-align: center;
   }

   .titleCategory {
      margin: 20px 0px;
   }

   .fiftyPercent {
      width: 50%;
      margin-bottom: 0;
   }

   .inBlock {
      display: inline-block;
   }

   .introPage {
      display: block;
      padding: 25px;
      background-color: white;
      border-radius: 8px;
      border: 1px solid #d2d2d2;
   }

   .rating {
      margin: 0 20px;
      width: 10px;
      display: inline-block;
   }

   .ratingContainer {
      text-align: center;
   }

   .lain-lain {
      display: none;
   }

   #LainAgama:checked~#lainAgamaInput {
      display: inline-block;
   }

   #adaMasalahKesihatanYa:checked~#inputKesihatan {
      display: inline-block;
   }

   #lainTempatTingal:checked~#inputTempatTinggal {
      display: inline-block;
   }

   #lainTinggalBersamaLain:checked~#inputTinggalBersama {
      display: inline-block;
   }

   #lainKenderaanKerja:checked~#inputKenderaanKerja {
      display: inline-block;
   }


   .selectBox {
      border-bottom: 1px solid #aaaaaa;
      border-top: 0px;
      border-left: 0px;
      border-right: 0px;
      margin-bottom: 0px;
      outline: none;
      border-radius: 0px;
   }

   .img-center{
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 70%;
   }
</style>

<body>

   <div class="container">
      <div class="row">
         <div class="twelve columns">
            <div>
               <img src="{{ url('images/header.png') }}" class="imgBanner">
            </div>
            <form id="regForm" method="POST" action="/submit">
               @csrf
               <div class="titleForm">
                  <h5>SOAL SELIDIK<br>INDEKS-KEGEMBIRAAN ORGANISASI BERPRESTASI TINGGI<br>(I-KOBT)</h5>
               </div>
               <!-- One "tab" for each step in the form: -->
               <div class="tab introPage">
                  <div>
                     <p>Tuan/Puan,</p>
                     <p>Indeks-Kegembiraan Organisasi Berprestasi Tinggi (I-KOBT) ini bertujuan untuk mengukur kegembiraan di tempat kerja bagi penjawat awam di negeri Sabah. Dapatan indeks ini akan dijadikan indikator dalam merangka dasar, merancang dan melaksanakan program pembangunan, pencegahan dan intervensi ke atas penjawat awam di negeri Sabah.</p>
                     <p>Tuan/Puan terpilih sebagai responden untuk kajian ini. Sehubungan dengan itu, pihak kami memohon kerjasama dan jasa baik daripada pihak Tuan/Puan untuk melengkapkan maklumat dalam soal selidik ini. Pihak kami amat berbesar hati sekiranya pihak Tuan/Puan dapat menjawab semua maklumat secara JUJUR dan IKHLAS. Segala maklumat yang pihak Tuan/Puan berikan adalah dirahsiakan dan digunakan hanya untuk tujuan penyelidikan sahaja.</p>
                     <p>Kerjasama daripada pihak Tuan/Puan meluangkan masa menjawab soalan kaji selidik ini amat dihargai dan didahului dengan ucapan terima kasih.</p>
                     <p>Selamat menjawab. Terima kasih.</p>
                     <p><b>Arahan dan Makluman:</b>
                     <ol>
                        <li>Penyertaan anda dalam kajian ini adalah secara sukarela.</li>
                        <li>Anda mestilah seorang <b>PENJAWAT AWAM</b> Jabatan Perkhidmatan Awam Negeri Sabah.</li>
                        <li>Anda dikehendaki memberikan respons kepada <b>SEMUA</b> pernyataan/soalan.</li>
                        <li>Anda digalakkan untuk memberikan respons dengan <b>JUJUR DAN IKHLAS</b> memandangkan tidak ada jawapan ‘betul’ atau ‘salah.’</li>
                     </ol>
                     </p>
                  </div>
               </div>
               <div class="tab">
                  <!-- Bahagian A -->
                  <div class="titleCategory introPage"><span>
                        <h5 class="title-center">BAHAGIAN A: DEMOGRAFI</h5><span>Sila isi setiap maklumat yang diperlukan. Nyatakan atau tandakan ( / ) pada ruangan yang disediakan.</span>
                     </span>
                  </div>
                  
                  <div class="introPage" style="margin-bottom: 10px;">
                     <label>1. Umur :</label>
                     <select name="umur" class="selectBox">
                        <option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option>
                     </select> tahun
                     <input name="uuid" type="hidden" value="{{Uuid::generate(4)}}">
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>2. Jantina :</p>
                     <input type="radio" id="Lelaki" name="jantina" value="Lelaki">
                     <label class="inBlock" for="Lelaki">Lelaki</label><br>
                     <input type="radio" id="Perempuan" name="jantina" value="Perempuan">
                     <label class="inBlock" for="Perempuan">Perempuan</label>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>3. Agama :</p>
                     <input type="radio" onclick="clearInput('lainAgamaInput')" id="Islam" name="agama" value="Islam">
                     <label class="inBlock" for="Islam">Islam</label><br>
                     <input type="radio" onclick="clearInput('lainAgamaInput')" id="Kristian" name="agama" value="Kristian">
                     <label class="inBlock" for="Kristian">Kristian</label><br>
                     <input type="radio" onclick="clearInput('lainAgamaInput')" id="Buddha" name="agama" value="Buddha">
                     <label class="inBlock" for="Buddha">Buddha</label><br>
                     <input type="radio" onclick="clearInput('lainAgamaInput')" id="Hindu" name="agama" value="Hindu">
                     <label class="inBlock" for="Hindu">Hindu</label><br>
                     <input type="radio" onclick="clearInput('lainAgamaInput')" id="Tiada" name="agama" value="Tiada">
                     <label class="inBlock" for="Tiada">Tidak Menganut Agama</label><br>
                     <input type="radio" id="LainAgama" name="agama">
                     <label class="inBlock" for="LainAgama">Lain-lain (sila nyatakan) :</label> <input id="lainAgamaInput" class="lain-lain fiftyPercent" name="lainAgamaDetail">
                  </div>

                  <div class="introPage" style="margin-bottom: 10px;">
                     <label>4. Bangsa : </label>
                     <select name="bangsa" class="selectBox">
                        <option value="Melayu">Melayu</option>
                        <option value="Cina">Cina</option>
                        <option value="India">India</option>
                        <option value="Bumiputra Sabah">Bumiputra Sabah</option>
                        <option value="Bumiputra Sarawak">Bumiputra Sarawak</option>
                        <option value="Lain-lain">Lain-lain</option>
                     </select>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <label>5. Daerah Bertugas : </label>
                     <select name="daerahBertugas" class="selectBox">
                        <option value="Beaufort">Beaufort</option>
                        <option value="Beluran">Beluran</option>
                        <option value="Keningau">Keningau</option>
                        <option value="Kinabatangan">Kinabatangan</option>
                        <option value="Kota Belud">Kota Belud</option>
                        <option value="Kota Kinabalu">Kota Kinabalu</option>
                        <option value="Kota Marudu">Kota Marudu</option>
                        <option value="Kuala Penyu">Kuala Penyu</option>
                        <option value="Kudat">Kudat</option>
                        <option value="Kunak">Kunak</option>
                        <option value="Lahad Datu">Lahad Datu</option>
                        <option value="Labuan">Labuan</option>
                        <option value="Nabawan">Nabawan</option>
                        <option value="Papar">Papar</option>
                        <option value="Penampang">Penampang</option>
                        <option value="Pitas">Pitas</option>
                        <option value="Putatan">Putatan</option>
                        <option value="Ranau">Ranau</option>
                        <option value="Sandakan">Sandakan</option>
                        <option value="Semporna">Semporna</option>
                        <option value="Sipitang">Sipitang</option>
                        <option value="Tambunan">Tambunan</option>
                        <option value="Tawau">Tawau</option>
                        <option value="Telupid">Telupid</option>
                        <option value="Tenom">Tenom</option>
                        <option value="Tongod">Tongod</option>
                        <option value="Tuaran">Tuaran</option>
                     </select>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>6. Status Perkahwinan :</p>
                     <input type="radio" id="Bujang" name="status" value="Bujang">
                     <label class="inBlock" for="Bujang">Bujang</label><br>
                     <input type="radio" id="Berkahwin" name="status" value="Berkahwin">
                     <label class="inBlock" for="Berkahwin">Berkahwin</label><br>
                     <input type="radio" id="Duda" name="status" value="Duda">
                     <label class="inBlock" for="Duda">Duda</label><br>
                     <input type="radio" id="Janda" name="status" value="Janda">
                     <label class="inBlock" for="Janda">Janda</label><br>
                     <input type="radio" id="Balu" name="status" value="Balu">
                     <label class="inBlock" for="Balu">Balu</label><br>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <label>7. Bilangan Anak : </label>
                     <input class="small-input" name="bilAnak"> Orang
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <label>8. Bilangan Isi Rumah : </label>
                     <input class="small-input" name="bilIsiRumah"> Orang
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>9. Adakah anda tinggal bersama pasangan anda? :</p>
                     <input type="radio" id="Ya" name="tinggalBersamaPasangan" value="Ya">
                     <label class="inBlock" for="Ya">Ya</label><br>
                     <input type="radio" id="tidak" name="tinggalBersamaPasangan" value="Tidak">
                     <label class="inBlock" for="tidak">Tidak</label><br>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <label>10. Bilangan Bilik Tidur di Rumah : </label>
                     <input class="small-input" name="bilBilikTidur"> Buah Bilik
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>11. Tahap Pendidikan Tertinggi :</p>
                     <input type="radio" id="sr" name="education" value="Sekolah Rendah">
                     <label class="inBlock" for="sr">Sekolah Rendah</label><br>
                     <input type="radio" id="PMR/SRP" name="education" value="PMR/SRP">
                     <label class="inBlock" for="PMR/SRP">PMR/SRP</label><br>
                     <input type="radio" id="SPM/Setara" name="education" value="SPM/Setara">
                     <label class="inBlock" for="SPM/Setara">SPM/Setara</label><br>
                     <input type="radio" id="STPM/Setara" name="education" value="STPM/Setara">
                     <label class="inBlock" for="STPM/Setara">STPM/Setara</label><br>
                     <input type="radio" id="Diploma" name="education" value="Diploma">
                     <label class="inBlock" for="Diploma">Diploma</label><br>
                     <input type="radio" id="SarjanaMuda" name="education" value="Sarjana Muda">
                     <label class="inBlock" for="SarjanaMuda">Sarjana Muda</label><br>
                     <input type="radio" id="Sarjana" name="education" value="Sarjana">
                     <label class="inBlock" for="Sarjana">Sarjana</label><br>
                     <input type="radio" id="PhD" name="education" value="PhD">
                     <label class="inBlock" for="PhD">Ph.D</label><br>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>12. Agensi (Kementerian/Jabatan/dll) : </p>
                     <input class="big-input" name="agensi">
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>13. Kumpulan Perkhidmatan : </p>
                     <input id="pt" type="radio" name="kumpulanPerkhidmatan" value="Pengurusan Tertinggi">
                     <label class="inBlock" for="pt">Pengurusan Tertinggi</label><br>
                     <input id="pp" type="radio" name="kumpulanPerkhidmatan" value="Pengurusan-Professional">
                     <label for="pp" class="inBlock">Pengurusan & Professional</label><br>
                     <input id="kp" type="radio" name="kumpulanPerkhidmatan" value="Kumpulan Pelaksana">
                     <label for="kp" class="inBlock">Kumpulan Pelaksana</label>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>14. Taraf Jawatan : </p>
                     <input id="tetap" type="radio" name="tarafJawatan" value="Tetap">
                     <label for="tetap" class="inBlock">Tetap</label><br>
                     <input id="sementara" type="radio" name="tarafJawatan" value="Sementara">
                     <label for="sementara" class="inBlock">Sementara</label><br>
                     <input id="kontrak" type="radio" name="tarafJawatan" value="Kontrak">
                     <label for="kontrak" class="inBlock">Kontrak</label>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>15. Skim Perkhidmatan : </p>
                     <input class="big-input" name="skimPerkhidmatan">
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <label>16. Gred Jawatan : </label>
                     <input class="small-input" name="gredJawatan">
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <label>17. Gaji Kasar Bulanan : RM </label>
                     <input class="small-input" name="gajiKasarBulanan">
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <label>18. Gaji Bersih Bulanan : RM </label>
                     <input class="small-input" name="gajiBersihBulanan">
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>19. Adakah anda mengalami kesukaran menjalani kehidupan dengan jumlah gaji anda?</p>
                     <input type="radio" id="sukarGajiYa" name="kesukaranGaji" value="Ya">
                     <label class="inBlock" for="sukarGajiYa">Ya</label><br>
                     <input type="radio" id="sukarGajiTidak" name="kesukaranGaji" value="Tidak">
                     <label class="inBlock" for="sukarGajiTidak">Tidak</label>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <label>20. Tempoh Perkhidmatan : </label>
                     <select name="tempohPerkhidmatanTahun" class="selectBox">
                        <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option>
                     </select>
                     tahun
                     <select name="tempohPerkhidmatanBulan" class="selectBox">
                        <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option>
                     </select>
                     bulan
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>21. Adakah anda mengalami masalah kesihatan? (Jika Ya, sila nyatakan)</p>
                     <input type="radio" id="adaMasalahKesihatanYa" name="masalahKesihatan">
                     <label class="inBlock" for="adaMasalahKesihatanYa">Ya</label><br><input placeholder="Nyatakan masalah kesihatan" id="inputKesihatan" class="big-input lain-lain" name="masalahKesihatanDetail"><br>
                     <input type="radio" onclick="clearInput('inputKesihatan')" id="adaMasalahKesihatanTidak" name="masalahKesihatan" value="Tidak">
                     <label class="inBlock" for="adaMasalahKesihatanTidak">Tidak</label>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>22. Status Rumah Tempat Tinggal : </p>
                     <input type="radio" onclick="clearInput('inputTempatTinggal')" id="RumahSendiri" name="tempatTinggal" value="Rumah Sendiri">
                     <label class="inBlock" for="RumahSendiri">Rumah Sendiri</label><br>
                     <input type="radio" onclick="clearInput('inputTempatTinggal')" id="RumahSewa" name="tempatTinggal" value="Rumah Sewa">
                     <label class="inBlock" for="RumahSewa">Rumah Sewa</label><br>
                     <input type="radio" onclick="clearInput('inputTempatTinggal')" id="BilikSewa" name="tempatTinggal" value="Bilik Sewa">
                     <label class="inBlock" for="BilikSewa">Bilik Sewa</label><br>
                     <input type="radio" id="lainTempatTingal" name="tempatTinggal" value="lain-lain">
                     <label class="inBlock" for="lainTempatTingal">Lain-lain (Nyatakan) : </label><input id="inputTempatTinggal" class="big-input lain-lain" name="tempatTinggalDetail">
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>23. Status Tinggal Bersama : </p>
                     <input type="radio" onclick="clearInput('inputTinggalBersama')" id="bersamaIbuBapa" name="tinggalBersama" value="Bersama Ibu Bapa">
                     <label class="inBlock" for="bersamaIbuBapa">Bersama Ibu Bapa</label><br>
                     <input type="radio" onclick="clearInput('inputTinggalBersama')" id="BersamaKeluargaMertua" name="tinggalBersama" value="Bersama Keluarga Mertua">
                     <label class="inBlock" for="BersamaKeluargaMertua">Bersama Keluarga Mertua</label><br>
                     <input type="radio" id="hbsi" onclick="clearInput('inputTinggalBersama')" name="tinggalBersama" value="Hanya Bersama Suami/Isteri dan Anak">
                     <label class="inBlock" for="hbsi">Hanya Bersama Suami/Isteri dan Anak</label><br>
                     <input type="radio" id="tjdp" onclick="clearInput('inputTinggalBersama')" name="tinggalBersama" value="Tinggal Berjauhan Dengan Pasangan">
                     <label class="inBlock" for="tjdp">Tinggal Berjauhan Dengan Pasangan</label><br>
                     <input type="radio" id="lainTinggalBersamaLain" name="tinggalBersama" value="lain-lain">
                     <label class="inBlock" for="lainTinggalBersamaLain">Lain-lain (Nyatakan) : </label><input id="inputTinggalBersama" class="big-input lain-lain" name="tinggalBersamaDetail">
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>24. Apakah jenis pengangkutan anda ke tempat kerja?</p>
                     <input type="radio" onclick="clearInput('inputKenderaanKerja')" id="KeretaSendiri" name="kenderaanKerja" value="Kereta Sendiri">
                     <label class="inBlock" for="KeretaSendiri">Kereta Sendiri</label><br>
                     <input type="radio" onclick="clearInput('inputKenderaanKerja')" id="MenumpangRakan" name="kenderaanKerja" value="Menumpang Rakan">
                     <label class="inBlock" for="MenumpangRakan">Menumpang Rakan</label><br>
                     <input type="radio" onclick="clearInput('inputKenderaanKerja')" id="ehailing" name="kenderaanKerja" value="e-Hailing">
                     <label class="inBlock" for="ehailing">e-Hailing</label><br>
                     <input type="radio" onclick="clearInput('inputKenderaanKerja')" id="BasTeksi" name="kenderaanKerja" value="Bas Teksi">
                     <label class="inBlock" for="BasTeksi">Bas/Teksi</label><br>
                     <input type="radio" id="lainKenderaanKerja" name="kenderaanKerja" value="lain-lain">
                     <label class="inBlock" for="lainKenderaanKerja">Lain-lain (Nyatakan) : </label><input id="inputKenderaanKerja" class="big-input lain-lain" name="kenderaanKerjaDetail">
                  </div>

               </div>
               <div class="tab">
                  <!-- Start B2 Section -->
                  <div class="titleCategory introPage">
                     <span>
                        <h5 class="title-center">BAHAGIAN B: KEPUASAN KERJA</h5>
                        <span>Sila TANDAKAN (/) pada skala yang menunjukkan persetujuan anda mengenai <b>kepuasan kerja anda.</b></span><br><br>
                        <p>Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</p>
                     </span>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>1. Saya berasa dibayar dengan gaji yang setimpal dengan kerja yang saya lakukan.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                              <input type="radio" id="1" name="B1" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                              <input type="radio" id="1" name="B1" value="1">1
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
                     <p>2. Mereka yang bekerja dengan baik lebih berpeluang mendapat kenaikan pangkat.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                              <input type="radio" id="0" name="B2" value="0">0
                           </label>
                        </div>
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
                     <p>3. Saya berasa puas dengan peluang kenaikan gaji saya .</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                              <input type="radio" id="0" name="B3" value="0">0
                           </label>
                        </div>
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
                     <p>4. Saya berpuas hati dengan kepimpinan ketua saya.
                     </p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                              <input type="radio" id="0" name="B4" value="0">0
                           </label>
                        </div>
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
                     <p>5. Banyak peraturan dan prosedur kerja menyukarkan saya untuk melakukan kerja dengan baik.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                              <input type="radio" id="0" name="B5" value="0">0
                           </label>
                        </div>
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
                     <p>6. Usaha saya untuk bekerja dengan baik jarang dihalang oleh birokrasi.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                              <input type="radio" id="0" name="B6" value="0">0
                           </label>
                        </div>
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
                     <p>7. Terlalu banyak kerja yang perlu saya lakukan di tempat kerja.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                              <input type="radio" id="0" name="B7" value="0">0
                           </label>
                        </div>
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
                     <p>8. Saya perlu bekerja keras kerana rakan sekerja saya yang tidak berkebolehan.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                              <input type="radio" id="0" name="B8" value="0">0
                           </label>
                        </div>
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
                     <p>9. Terlalu banyak pertengkaran dan konflik yang berlaku di tempat kerja saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                              <input type="radio" id="0" name="B9" value="0">0
                           </label>
                        </div>
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
                     <p>10. Kadang kala, saya berasa bahawa kerja saya tidak bermakna.
                     </p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                              <input type="radio" id="0" name="B10" value="0">0
                           </label>
                        </div>
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
                     <p>11. Saya berasa bangga dengan pekerjaan saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                              <input type="radio" id="0" name="B11" value="0">0
                           </label>
                        </div>
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
                     <p>12. Pekerjaan saya menyeronokkan.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                              <input type="radio" id="0" name="B12" value="0">0
                           </label>
                        </div>
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
                     <p>13. Komunikasi agak baik dalam organisasi ini.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                              <input type="radio" id="0" name="B13" value="0">0
                           </label>
                        </div>
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
                     <p>14. Matlamat organisasi ini tidak jelas bagi saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                              <input type="radio" id="0" name="B14" value="0">0
                           </label>
                        </div>
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
                     <p>15. Tugasan kerja yang diberikan tidak dijelaskan dengan sepenuhnya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                              <input type="radio" id="0" name="B15" value="0">0
                           </label>
                        </div>
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
                     <p>16. Saya berpuas hati dengan reputasi jabatan di mana saya bekerja.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                              <input type="radio" id="0" name="B16" value="0">0
                           </label>
                        </div>
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
                     <p>17. Saya berpuas hati dengan keselamatan di tempat kerja saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                              <input type="radio" id="0" name="B17" value="0">0
                           </label>
                        </div>
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
                     <p>18. Saya berpuas hati dengan persekitaran tempat kerja saya yang selesa.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                              <input type="radio" id="0" name="B18" value="0">0
                           </label>
                        </div>
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
               </div> <!-- End B2 Section-->
               <div class="tab">
                  <!--Bahagian C Start-->
                  <div class="titleCategory introPage">
                     <span>
                        <h5 class="title-center">BAHAGIAN C: KEPUASAN HIDUP</h5>
                        <span>Sila TANDAKAN (/) pada skala yang menunjukkan persetujuan anda mengenai <b>kepuasan hidup anda</b>.<br><br>
                           Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</span>
                     </span>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>1. Dalam banyak perkara, kehidupan saya adalah hampir dengan ciri kehidupan ideal (sempurna) saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="C1" value="0">0
                           </label>
                        </div>
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
                        <div class="rating">
                           <input type="radio" id="6" name="C1" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="C1" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="C1" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="C1" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="C1" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>2. Saya berpuas hati dengan kehidupan saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="C2" value="0">0
                           </label>
                        </div>
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
                        <div class="rating">
                           <input type="radio" id="6" name="C2" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="C2" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="C2" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="C2" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="C2" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  
               </div> <!-- Bahagian 3 Tamat -->
               <!-- Bahagian D -->
               <div class="tab">
                  <div class="titleCategory introPage">
                     <span>
                        <h5 class="title-center">BAHAGIAN D: PENILAIAN HIDUP</h5>
                        <span>Sila TANDAKAN (/) pada skala yang menunjukkan <b>penilaian hidup anda</b> sebagai seorang pekerja.
                              Skala 0 menunjukkan kehidupan bekerja yang sukar, manakala Skala 10 menunjukkan kehidupan bekerja yang terbaik.</span>
                        </span>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>Berdasarkan Gambar Rajah di bawah, kehidupan anda berada di tahap mana?</p>
                     <img class="img-center" src="{{ URL::asset('images/tangga.png') }}">
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="D1" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="D1" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="D1" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="D1" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="D1" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="D1" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="D1" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="D1" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="D1" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="D1" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="D1" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
               </div>
               <!--Bahagian D Tamat -->
               <!-- Bahagian E-->
               <div class="tab">
                  <div class="titleCategory introPage">
                     <span>
                        <h5 class="title-center">BAHAGIAN E: AFEK</h5>
                        <span>Sila TANDAKAN (/) pada skala yang menunjukkan persetujuan anda mengenai <b>perasaan atau emosi anda</b>.<br>
                        Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</span>
                        </span>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>1. Saya berasa teruja semasa bekerja.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="E1" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="E1" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="E1" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="E1" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="E1" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="E1" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="E1" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="E1" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="E1" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="E1" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="E1" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>2. Saya selalu aktif melakukan pekerjaan.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="E2" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="E2" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="E2" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="E2" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="E2" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="E2" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="E2" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="E2" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="E2" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="E2" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="E2" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>3. Saya berasa bangga dengan pekerjaan saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="E3" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="E3" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="E3" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="E3" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="E3" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="E3" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="E3" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="E3" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="E3" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="E3" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="E3" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>4. Saya kecewa dengan pekerjaan saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="E4" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="E4" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="E4" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="E4" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="E4" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="E4" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="E4" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="E4" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="E4" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="E4" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="E4" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>5. Saya selalu berasa gelisah semasa bekerja.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="E5" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="E5" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="E5" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="E5" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="E5" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="E5" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="E5" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="E5" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="E5" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="E5" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="E5" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>6. Saya merasa lesu disebabkan oleh kerja saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="E6" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="E6" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="E6" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="E6" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="E6" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="E6" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="E6" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="E6" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="E6" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="E6" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="E6" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Bahagian F-->
               <div class="tab">
                  <div class="titleCategory introPage">
                     <span>
                        <h5 class="title-center">BAHAGIAN F: KETERLIBATAN KERJA</h5>
                        <span>Sila TANDAKAN (/) pada skala yang menunjukkan persetujuan anda mengenai <b>keterlibatan anda di tempat kerja</b>.<br>
                        Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</span>
                        </span>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>1. Saya berasa sangat bertenaga di tempat kerja.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="F1" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="F1" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="F1" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="F1" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="F1" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="F1" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="F1" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="F1" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="F1" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="F1" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="F1" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>2. Apabila bangun pagi, saya mahu pergi bekerja.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="F2" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="F2" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="F2" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="F2" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="F2" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="F2" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="F2" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="F2" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="F2" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="F2" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="F2" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>3. Saya bersemangat dengan kerja saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="F3" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="F3" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="F3" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="F3" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="F3" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="F3" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="F3" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="F3" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="F3" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="F3" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="F3" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>4. Kerja saya memberi inspirasi kepada saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="F4" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="F4" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="F4" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="F4" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="F4" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="F4" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="F4" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="F4" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="F4" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="F4" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="F4" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>5. Saya terlibat sepenuhnya dalam pekerjaan saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="F5" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="F5" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="F5" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="F5" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="F5" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="F5" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="F5" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="F5" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="F5" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="F5" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="F5" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>6. Saya terlalu mementingkan pekerjaan sehingga leka dengan segalanya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="F6" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="F6" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="F6" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="F6" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="F6" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="F6" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="F6" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="F6" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="F6" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="F6" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="F6" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Bahagian G-->
               <div class="tab">
                  <div class="titleCategory introPage">
                     <span>
                        <h5 class="title-center">BAHAGIAN G: PRESTASI KERJA</h5>
                        <span>Sila TANDAKAN (/) pada skala yang menunjukkan persetujuan anda mengenai <b>prestasi kerja anda</b>.<br>
                        Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</span>
                        </span>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>1. Saya merancang pekerjaan dengan teliti agar dapat diselesaikan pada waktunya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="G1" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="G1" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="G1" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="G1" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="G1" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="G1" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="G1" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="G1" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="G1" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="G1" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="G1" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>2. Saya sentiasa mengingati hasil kerja yang perlu dicapai.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="G2" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="G2" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="G2" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="G2" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="G2" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="G2" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="G2" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="G2" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="G2" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="G2" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="G2" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>3. Saya dapat melaksanakan kerja saya dengan cekap.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="G3" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="G3" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="G3" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="G3" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="G3" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="G3" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="G3" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="G3" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="G3" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="G3" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="G3" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>4. Saya berusaha memastikan kemahiran pekerjaan saya selaras dengan keperluan terkini.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="G4" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="G4" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="G4" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="G4" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="G4" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="G4" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="G4" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="G4" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="G4" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="G4" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="G4" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>5. Saya menghasilkan penyelesaian kreatif terhadap masalah-masalah yang baru.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="G5" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="G5" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="G5" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="G5" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="G5" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="G5" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="G5" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="G5" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="G5" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="G5" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="G5" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>6. Saya juga memikul tanggungjawab lain dalam pekerjaan.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="G6" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="G6" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="G6" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="G6" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="G6" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="G6" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="G6" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="G6" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="G6" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="G6" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="G6" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>7. Saya terus mencari cabaran-cabaran baru dalam pekerjaan saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="G7" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="G7" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="G7" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="G7" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="G7" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="G7" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="G7" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="G7" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="G7" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="G7" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="G7" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>8. Saya terlibat secara aktif dalam mesyuarat dan/atau perundingan.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="G8" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="G8" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="G8" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="G8" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="G8" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="G8" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="G8" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="G8" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="G8" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="G8" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="G8" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>9. Saya mengadu tentang isu-isu kecil berkaitan pekerjaan di tempat kerja.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="G9" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="G9" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="G9" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="G9" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="G9" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="G9" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="G9" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="G9" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="G9" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="G9" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="G9" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>10. Saya menumpukan kepada aspek-aspek negatif sesuatu keadaan di tempat kerja saya berbanding aspek-aspek positif.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="G10" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="G10" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="G10" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="G10" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="G10" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="G10" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="G10" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="G10" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="G10" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="G10" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="G10" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Bahagian H-->
               <div class="tab">
                  <div class="titleCategory introPage">
                     <span>
                        <h5 class="title-center">BAHAGIAN H: ORGANISASI BERPRESTASI TINGGI</h5>
                        <span>Sila TANDAKAN (/) pada skala yang menunjukkan persetujuan anda mengenai <b>organisasi di tempat kerja anda</b>.<br>
                        Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</span>
                        </span>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>1. Pengurusan organisasi saya dipercayai oleh ahli organisasi.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H1" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H1" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H1" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H1" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H1" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H1" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H1" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H1" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H1" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H1" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H1" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>2. Pengurusan organisasi saya mempunyai integriti.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H2" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H2" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H2" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H2" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H2" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H2" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H2" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H2" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H2" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H2" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H2" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>3. Pengurusan organisasi saya adalah contoh bagi anggota organisasi.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H3" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H3" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H3" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H3" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H3" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H3" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H3" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H3" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H3" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H3" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H3" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>4. Pengurusan organisasi saya membuat keputusan dengan cepat.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H4" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H4" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H4" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H4" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H4" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H4" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H4" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H4" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H4" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H4" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H4" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>5. Pengurusan organisasi saya mengambil tindakan dengan segera.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H5" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H5" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H5" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H5" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H5" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H5" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H5" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H5" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H5" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H5" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H5" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>6. Pengurusan organisasi saya memberi bimbingan kepada semua warga untuk meningkatkan pencapaian.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H6" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H6" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H6" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H6" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H6" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H6" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H6" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H6" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H6" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H6" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H6" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>7. Pengurusan organisasi saya memberi tumpuan kepada hasil pencapaian.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H7" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H7" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H7" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H7" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H7" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H7" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H7" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H7" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H7" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H7" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H7" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>8. Pengurusan di organisasi saya adalah berkesan.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H8" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H8" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H8" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H8" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H8" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H8" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H8" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H8" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H8" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H8" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H8" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>9. Pengurusan organisasi saya mempunyai kepimpinan yang kukuh.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H9" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H9" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H9" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H9" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H9" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H9" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H9" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H9" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H9" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H9" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H9" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>10. Pengurusan organisasi saya menyakinkan.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H10" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H10" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H10" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H10" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H10" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H10" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H10" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H10" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H10" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H10" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H10" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>11. Pengurusan organisasi saya mengambil tindakan tegas terhadap warga berprestasi rendah.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H11" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H11" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H11" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H11" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H11" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H11" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H11" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H11" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H11" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H11" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H11" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>12. Pengurusan organisasi sentiasa memastikan ahli organisasi bertanggungjawab terhadap hasil kerja mereka.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H12" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H12" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H12" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H12" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H12" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H12" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H12" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H12" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H12" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H12" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H12" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>13. Strategi organisasi yang jelas.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H13" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H13" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H13" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H13" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H13" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H13" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H13" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H13" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H13" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H13" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H13" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>14. Proses/sistem kerja sentiasa diperbaiki.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H14" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H14" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H14" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H14" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H14" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H14" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H14" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H14" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H14" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H14" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H14" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>15. Proses/sistem kerja dipermudahkan secara berterusan.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H15" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H15" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H15" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H15" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H15" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H15" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H15" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H15" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H15" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H15" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H15" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>16. Proses/sistem kerja diselaraskan.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H16" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H16" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H16" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H16" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H16" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H16" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H16" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H16" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H16" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H16" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H16" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>17. Prestasi organisasi dilaporkan secara jelas.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H17" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H17" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H17" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H17" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H17" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H17" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H17" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H17" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H17" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H17" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H17" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>18. Maklumat kewangan dan bukan kewangan dilaporkan kepada semua warga.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H18" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H18" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H18" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H18" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H18" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H18" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H18" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H18" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H18" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H18" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H18" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>19. Sentiasa meningkatkan kecekapan melalui inovasi.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H19" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H19" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H19" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H19" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H19" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H19" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H19" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H19" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H19" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H19" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H19" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>20. Organisasi saya terus berinovasi dalam produk, proses dan perkhidmatannya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H20" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H20" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H20" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H20" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H20" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H20" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H20" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H20" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H20" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H20" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H20" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>21. Organisasi saya mengekalkan hubungan baik jangka panjang dengan semua pihak yang berkepentingan (stake holders).</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H21" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H21" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H21" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H21" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H21" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H21" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H21" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H21" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H21" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H21" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H21" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>22. Organisasi saya memberi perkhidmatan terbaik.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H22" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H22" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H22" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H22" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H22" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H22" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H22" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H22" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H22" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H22" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H22" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>23. Organisasi saya mempunyai strategi jangka panjang.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H23" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H23" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H23" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H23" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H23" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H23" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H23" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H23" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H23" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H23" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H23" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>24. Peluang kenaikan pangkat wujud secara dalaman.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H24" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H24" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H24" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H24" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H24" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H24" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H24" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H24" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H24" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H24" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H24" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>25. Tempat kerja yang selamat.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H25" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H25" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H25" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H25" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H25" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H25" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H25" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H25" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H25" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H25" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H25" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>26. Pengurusan di organisasi saya memberi inspirasi kepada ahli organisasi untuk mencapai prestasi luar biasa.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H26" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H26" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H26" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H26" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H26" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H26" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H26" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H26" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H26" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H26" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H26" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>27. Pekerja diberi latihan supaya berdaya tahan dan berdaya saing.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H27" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H27" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H27" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H27" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H27" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H27" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H27" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H27" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H27" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H27" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H27" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>28. Organisasi saya mempunyai tenaga kerja yang pelbagai dan saling melengkapi.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H28" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H28" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H28" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H28" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H28" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H28" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H28" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H28" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H28" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H28" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H28" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>29. Organisasi saya membangun melalui usaha perkongsian dengan pelbagai pelanggan.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H29" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H29" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H29" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H29" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H29" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H29" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H29" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H29" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H29" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H29" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H29" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>30. Pengurusan di organisasi saya sering mengadakan sesi berdialog dengan pekerja.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H30" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H30" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H30" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H30" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H30" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H30" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H30" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H30" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H30" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H30" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H30" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>31. Warga organisasi sentiasa berkomunikasi, bertukar pengetahuan dan pembelajaran.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H31" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H31" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H31" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H31" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H31" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H31" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H31" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H31" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H31" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H31" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H31" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>32. Warga organisasi sentiasa terlibat dalam proses-proses dan peristiwa utama.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H32" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H32" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H32" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H32" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H32" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H32" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H32" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H32" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H32" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H32" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H32" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>33. Pengurusan organisasi tidak menghukum kesilapan dan menggalakkan pengalaman dan pembelajaran.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H33" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H33" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H33" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H33" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H33" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H33" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H33" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H33" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H33" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H33" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H33" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>34. Pengurusan organisasi saya mengalu-alukan perubahan.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H34" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H34" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H34" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H34" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H34" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H34" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H34" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H34" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H34" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H34" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H34" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>35. Organisasi saya adalah berpandukan prestasi.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="H35" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="H35" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="H35" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="H35" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="H35" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="H35" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="H35" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="H35" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="H35" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="H35" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="H35" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Bahagian I-->
               <div class="tab">
                  <div class="titleCategory introPage">
                     <span>
                        <h5 class="title-center">BAHAGIAN I: PRODUKTIVITI</h5>
                        <span>Sila TANDAKAN (/) pada skala yang menunjukkan persetujuan anda mengenai <b>produktiviti di tempat kerja anda.</b>.<br>
                        Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</span>
                        </span>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>1. Saya mampu menyiapkan tugasan yang sukar walaupun saya mempunyai masalah.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="I1" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="I1" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="I1" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="I1" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="I1" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="I1" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="I1" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="I1" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="I1" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="I1" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="I1" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>2. Saya merasa tidak berdaya menyiapkan tugas-tugas tertentu disebabkan masalah saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="I2" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="I2" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="I2" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="I2" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="I2" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="I2" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="I2" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="I2" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="I2" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="I2" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="I2" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>3. Saya mampu memberikan perhatian dalam mencapai matlamat kerja walaupun saya sedang mempunyai masalah.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="I3" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="I3" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="I3" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="I3" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="I3" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="I3" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="I3" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="I3" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="I3" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="I3" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="I3" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Bahagian J-->
               <div class="tab">
                  <div class="titleCategory introPage">
                     <span>
                        <h5 class="title-center">BAHAGIAN J: PERSONALITI</h5>
                        <span>Sila TANDAKAN (/) pada skala yang menunjukkan persetujuan anda mengenai <b>mengenai diri anda.</b>.<br>
                        Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</span>
                        </span>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>1. Tidak teragak-agak untuk meninggalkan sesuatu yang belum selesai.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="J1" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="J1" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="J1" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="J1" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="J1" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="J1" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="J1" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="J1" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="J1" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="J1" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="J1" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>2. Tidak berdaya saing.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="J2" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="J2" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="J2" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="J2" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="J2" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="J2" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="J2" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="J2" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="J2" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="J2" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="J2" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>3. Mendengar dengan baik dan membiarkan dahulu orang lain selesai bercakap.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="J3" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="J3" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="J3" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="J3" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="J3" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="J3" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="J3" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="J3" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="J3" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="J3" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="J3" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>4. Menyatakan perasaan secara terbuka.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="J4" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="J4" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="J4" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="J4" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="J4" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="J4" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="J4" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="J4" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="J4" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="J4" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="J4" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>5. Menyelesaikan satu perkara pada satu masa.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="J5" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="J5" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="J5" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="J5" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="J5" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="J5" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="J5" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="J5" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="J5" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="J5" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="J5" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>6. Tidak tergesa-gesa walaupun dalam keadaan tertekan.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="J6" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="J6" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="J6" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="J6" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="J6" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="J6" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="J6" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="J6" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="J6" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="J6" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="J6" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>7. Mudah bergaul.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="J7" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="J7" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="J7" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="J7" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="J7" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="J7" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="J7" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="J7" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="J7" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="J7" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="J7" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>8. Mementingkan kepuasan diri, bukan orang lain.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="J8" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="J8" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="J8" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="J8" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="J8" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="J8" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="J8" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="J8" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="J8" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="J8" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="J8" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>9. Lambat dalam melakukan sesuatu perkara.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="J9" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="J9" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="J9" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="J9" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="J9" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="J9" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="J9" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="J9" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="J9" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="J9" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="J9" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>10. Tidak begitu teliti.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="J10" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="J10" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="J10" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="J10" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="J10" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="J10" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="J10" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="J10" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="J10" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="J10" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="J10" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Bahagian K-->
               <div class="tab">
                  <div class="titleCategory introPage">
                     <span>
                        <h5 class="title-center">BAHAGIAN K: KESEJAHTERAAN KELUARGA</h5>
                        <span>Sila TANDAKAN (/) pada skala yang menunjukkan persetujuan anda mengenai <b>kesejahteraan keluarga anda</b>.<br>
                        Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</span>
                        </span>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>1. Secara keseluruhannya, saya berpuas hati dengan hubungan saya bersama pasangan saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="K1" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="K1" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="K1" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="K1" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="K1" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="K1" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="K1" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="K1" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="K1" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="K1" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="K1" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>2. Secara keseluruhannya, saya berpuas hati dengan hubungan kekeluargaan saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="K2" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="K2" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="K2" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="K2" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="K2" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="K2" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="K2" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="K2" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="K2" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="K2" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="K2" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>3. Secara keseluruhannya, saya berpuas hati dengan pencapaian keluarga saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="K3" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="K3" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="K3" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="K3" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="K3" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="K3" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="K3" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="K3" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="K3" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="K3" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="K3" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>4. Secara keseluruhannya, saya berpuas hati dengan tahap kesihatan keluarga saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="K4" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="K4" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="K4" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="K4" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="K4" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="K4" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="K4" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="K4" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="K4" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="K4" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="K4" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>5. Secara keseluruhannya, saya berpuas hati dengan tahap keselamatan keluarga saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="K5" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="K5" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="K5" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="K5" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="K5" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="K5" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="K5" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="K5" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="K5" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="K5" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="K5" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>6. Secara keseluruhannya, saya berpuas hati mengenai hubungan keluarga saya dengan komuniti (cth; Jiran, NGO, Persatuan, dll).</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="K6" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="K6" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="K6" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="K6" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="K6" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="K6" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="K6" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="K6" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="K6" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="K6" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="K6" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>7. Secara keseluruhannya, saya berpuas hati dengan amalan keagamaan keluarga saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="K7" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="K7" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="K7" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="K7" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="K7" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="K7" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="K7" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="K7" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="K7" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="K7" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="K7" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>8. Secara keseluruhannya, saya berpuas hati dengan keperluan asas di kawasan tempat tinggal saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="K8" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="K8" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="K8" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="K8" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="K8" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="K8" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="K8" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="K8" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="K8" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="K8" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="K8" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>9. Keluarga saya mempunyai simpanan kewangan yang cukup.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="K9" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="K9" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="K9" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="K9" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="K9" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="K9" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="K9" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="K9" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="K9" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="K9" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="K9" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>10. Keluarga saya mempunyai beban hutang yang banyak.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="K10" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="K10" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="K10" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="K10" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="K10" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="K10" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="K10" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="K10" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="K10" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="K10" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="K10" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Bahagian L-->
               <div class="tab">
                  <div class="titleCategory introPage">
                     <span>
                        <h5 class="title-center">BAHAGIAN L: KESEJAHTERAAN KEWANGAN</h5>
                        <span>Sila TANDAKAN (/) pada skala yang menunjukkan persetujuan anda mengenai <b>kesejahteraan kewangan anda</b>.<br>
                        Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</span>
                        </span>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>1. Kewangan saya cukup-cukup untuk hidup.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="L1" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="L1" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="L1" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="L1" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="L1" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="L1" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="L1" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="L1" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="L1" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="L1" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="L1" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>2. Saya bimbang simpanan kewangan saya tidak akan bertahan lama.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="L2" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="L2" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="L2" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="L2" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="L2" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="L2" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="L2" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="L2" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="L2" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="L2" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="L2" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>3. Kewangan saya mengawal hidup saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="L3" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="L3" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="L3" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="L3" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="L3" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="L3" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="L3" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="L3" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="L3" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="L3" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="L3" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>4. Saya mempunyai baki simpanan hingga hujung bulan.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="L4" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="L4" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="L4" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="L4" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="L4" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="L4" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="L4" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="L4" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="L4" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="L4" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="L4" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Bahagian M-->
               <div class="tab">
                  <div class="titleCategory introPage">
                     <span>
                        <h5 class="title-center">BAHAGIAN M: KESEJAHTERAAN SOSIAL</h5>
                        <span>Sila TANDAKAN (/) pada skala yang menunjukkan persetujuan anda mengenai <b>kesejahteraan sosial anda</b>.<br>
                        Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</span>
                        </span>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>1. Saya mempunyai sesuatu yang penting untuk disumbangkan kepada komuniti.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="M1" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="M1" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="M1" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="M1" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="M1" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="M1" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="M1" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="M1" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="M1" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="M1" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="M1" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>2. Saya terlibat aktif dalam kerja komuniti.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="M2" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="M2" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="M2" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="M2" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="M2" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="M2" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="M2" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="M2" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="M2" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="M2" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="M2" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>3. Komuniti di tempat saya adalah baik.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="M3" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="M3" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="M3" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="M3" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="M3" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="M3" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="M3" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="M3" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="M3" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="M3" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="M3" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Bahagian N-->
               <div class="tab">
                  <div class="titleCategory introPage">
                     <span>
                        <h5 class="title-center">BAHAGIAN N: TUJUAN</h5>
                        <span>Sila TANDAKAN (/) pada skala yang menunjukkan persetujuan anda mengenai <b>tujuan/makna</b> dalam pekerjaan anda.<br>
                        Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</span>
                        </span>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>1. Pekerjaan saya mempunyai tujuan/makna yang jelas.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="N1" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="N1" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="N1" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="N1" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="N1" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="N1" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="N1" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="N1" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="N1" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="N1" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="N1" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>2. Saya mempunyai pemahaman yang jelas tentang apa yang membuatkan pekerjaan saya bermakna.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="N2" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="N2" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="N2" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="N2" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="N2" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="N2" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="N2" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="N2" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="N2" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="N2" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="N2" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>3. Organisasi selalu mengingatkan saya tentang tujuan dan makna pekerjaan saya dalam memberi perkhidmatan kepada masyarakat.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="N3" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="N3" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="N3" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="N3" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="N3" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="N3" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="N3" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="N3" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="N3" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="N3" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="N3" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>4. Saya berpuas hati dengan penglibatan saya dalam pembuatan keputusan berkaitan kerja.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="N4" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="N4" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="N4" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="N4" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="N4" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="N4" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="N4" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="N4" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="N4" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="N4" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="N4" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Bahagian O-->
               <div class="tab">
                  <div class="titleCategory introPage">
                     <span>
                        <h5 class="title-center">BAHAGIAN O: DAYA TAHAN</h5>
                        <span>Sila TANDAKAN (/) pada skala yang menunjukkan persetujuan anda mengenai <b>daya tahan</b> anda di dalam pekerjaan.<br>
                        Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</span>
                        </span>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>1. Saya tahu kekuatan peribadi saya dan akan menggunakannya dengan kerap dalam pekerjaan saya.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="O1" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="O1" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="O1" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="O1" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="O1" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="O1" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="O1" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="O1" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="O1" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="O1" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="O1" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>2. Saya mempunyai rakan di tempat kerja yang saya percayai boleh menyokong saya apabila saya memerlukan sokongan.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="O2" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="O2" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="O2" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="O2" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="O2" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="O2" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="O2" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="O2" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="O2" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="O2" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="O2" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>3. Saya cenderung untuk bangkit semula dengan cepat selepas berhadapan dengan masalah sukar yang berkaitan dengan pekerjaan.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="O3" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="O3" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="O3" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="O3" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="O3" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="O3" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="O3" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="O3" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="O3" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="O3" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="O3" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>4. Saya sedar bahawa penyampaian perkhidmatan terbaik adalah menerusi perkhidmatan digital.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="O4" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="O4" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="O4" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="O4" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="O4" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="O4" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="O4" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="O4" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="O4" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="O4" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="O4" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>5. Saya mampu beradaptasi dengan keperluan teknologi masa kini.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="O5" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="O5" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="O5" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="O5" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="O5" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="O5" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="O5" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="O5" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="O5" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="O5" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="O5" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Bahagian P-->
               <div class="tab">
                  <div class="titleCategory introPage">
                     <span>
                        <h5 class="title-center">BAHAGIAN P: KINDNESS</h5>
                        <span>Sila TANDAKAN (/) pada skala yang menunjukkan persetujuan anda mengenai <i>kindness</i> di tempat kerja.<br>
                        Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</span>
                        </span>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>1. Organisasi bersikap fleksibel dan mengambil berat dalam isu-isu keperluan kebajikan pekerja.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="P1" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="P1" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="P1" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="P1" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="P1" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="P1" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="P1" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="P1" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="P1" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="P1" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="P1" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>2. Organisasi bersikap fleksibel tentang keseimbangan kehidupan berkerjaya dan kehidupan seharian.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="P2" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="P2" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="P2" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="P2" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="P2" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="P2" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="P2" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="P2" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="P2" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="P2" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="P2" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Bahagian Q-->
               <div class="tab">
                  <div class="titleCategory introPage">
                     <span>
                        <h5 class="title-center">BAHAGIAN Q: ALTRUISME</h5>
                        <span>Sila TANDAKAN (/) pada skala yang menunjukkan persetujuan anda mengenai <i>altruisme</i> di tempat kerja.<br>
                        Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</span>
                        </span>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>1. Organisasi di tempat kerja saya sentiasa bersedia dalam memberi bantuan kepada pelanggan tanpa mengambil kira waktu.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="Q1" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="Q1" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="Q1" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="Q1" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="Q1" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="Q1" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="Q1" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="Q1" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="Q1" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="Q1" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="Q1" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>2. Organisasi di tempat kerja saya sentiasa bersedia untuk turun padang bagi memberi khidmat kepada masyarakat.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="Q2" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="Q2" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="Q2" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="Q2" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="Q2" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="Q2" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="Q2" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="Q2" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="Q2" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="Q2" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="Q2" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>3. Organisasi di tempat kerja saya sentiasa mengingatkan kepentingan perkhidmatan kepada rakyat dan pelanggan.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="Q3" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="Q3" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="Q3" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="Q3" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="Q3" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="Q3" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="Q3" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="Q3" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="Q3" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="Q3" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="Q3" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <p>4. Saya berpuas hati dengan perkhidmatan yang diberikan oleh jabatan saya kepada pelanggan.</p>
                     <div class="ratingContainer">
                        <div class="rating">
                           <label for="0">
                           <input type="radio" id="1" name="Q4" value="0">0
                           </label>
                        </div>
                        <div class="rating">
                           <label for="1">
                           <input type="radio" id="1" name="Q4" value="1">1
                           </label>
                        </div>
                        <div class="rating"><input type="radio" id="2" name="Q4" value="2">
                           <label for="2">2</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="3" name="Q4" value="3">
                           <label class="inBlock" for="3">3</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="4" name="Q4" value="4">
                           <label class="inBlock" for="4">4</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="5" name="Q4" value="5">
                           <label class="inBlock" for="5">5</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="6" name="Q4" value="6">
                           <label class="inBlock" for="6">6</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="7" name="Q4" value="7">
                           <label class="inBlock" for="7">7</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="8" name="Q4" value="8">
                           <label class="inBlock" for="8">8</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="9" name="Q4" value="9">
                           <label class="inBlock" for="9">9</label>
                        </div>
                        <div class="rating">
                           <input type="radio" id="10" name="Q4" value="10">
                           <label class="inBlock" for="10">10</label>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Bahagian R-->
               <div class="tab">
                  <div class="titleCategory introPage">
                     <span>
                        <h5 class="title-center">BAHAGIAN R (SOALAN TERBUKA)</h5>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <label>1. Apakah komen anda mengenai soal selidik ini? (Jika ada)</label>
                     <textarea rows="10" class="big-input" name="komen" value=''></textarea><br>
                     <label>2. Apakah cadangan/komen ada berkaitan kegembiraan dan prestasi anda sebagai penjawat awam negeri Sabah? (Jika ada)</label><br>
                     <textarea rows="10" class="big-input" name="cadangan" value=''></textarea>
                     
                  </div>
               </div>
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
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
               </div>
            </div>
            <div style="clear:both;margin:10px auto;max-width: 640px;text-align: center;"><span>&copy 2021 I-KOBT</span></div>
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
         window.scroll({
            top: 0, 
            left: 0, 
            behavior: 'smooth' 
            });
      }

      function validateForm() {
         // This function deals with validation of the form fields
         var x, y, i, valid = true;
         x = document.getElementsByClassName("tab");
         //y = x[currentTab].getElementsByTagName("input");
         // A loop that checks every input field in the current tab:
         //   for (i = 0; i < y.length; i++) {
         //     // If a field is empty...
         //     if (y[i].value == "") {
         //       // add an "invalid" class to the field:
         //       y[i].className += " invalid";
         //       // and set the current valid status to false
         //       valid = false;
         //     }
         //   }
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

      function clearInput(n) {
         document.getElementById(n).value = '';
      }
   </script>
</body>

</html>