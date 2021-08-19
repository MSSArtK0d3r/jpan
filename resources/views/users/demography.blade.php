<x-header/>
{{-- your data is {{var_dump($userData[0])}} --}}
{{-- your data is {{var_dump($userProgress[0])}} --}}
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN A: DEMOGRAFI</h5>
    <p>Sila isi setiap maklumat yang diperlukan. Nyatakan atau tandakan pada ruangan yang disediakan.</p>
    <x-form-global-error/>
    <form action="{{route('updateDemografi')}}" method="POST">
      @csrf
    <div class="introPage <x-form-validation-error key='umur'/>" style="margin-bottom: 10px;">
            <label>1. Umur :</label>
                     <select name="umur" class="selectBox">
                        @if ($userData[0]->umur == NULL)
                        <option value="" selected disabled>Sila pilih</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option>
                        @else
                        <option value="{{$userData[0]->umur}}">[Pilihan] - {{$userData[0]->umur}}</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option>
                        @endif
                    </select> tahun
                  </div>
                  <div class="introPage <x-form-validation-error key='jantina'/>" style="margin-bottom: 10px;">
                     <label>2. Jantina :</label>
                     <input style="margin-left: 15px" type="radio" id="Lelaki" name="jantina" value="Lelaki" {{ $userData[0]->jantina == 'Lelaki' ? 'checked' : ''}}>
                     <label class="inBlock" for="Lelaki">Lelaki</label>
                     <input style="margin-left: 15px" type="radio" id="Perempuan" name="jantina" value="Perempuan" {{ $userData[0]->jantina == 'Perempuan' ? 'checked' : ''}}>
                     <label class="inBlock" for="Perempuan">Perempuan</label>
                  </div>
                  <div class="introPage <x-form-validation-error key='agama'/>" style="margin-bottom: 10px;">
                     <label>3. Agama :</label><br>
                        <input type="radio" onclick="clearInput('lainAgamaInput')" id="Islam" name="agama" value="Islam" {{ $userData[0]->agama == 'Islam' ? 'checked' : '' }}>
                        <label class="inBlock" for="Islam">Islam</label><br>
                        <input type="radio" onclick="clearInput('lainAgamaInput')" id="Kristian" name="agama" value="Kristian" {{ $userData[0]->agama == 'Kristian' ? 'checked' : '' }}>
                        <label class="inBlock" for="Kristian">Kristian</label><br>
                        <input type="radio" onclick="clearInput('lainAgamaInput')" id="Buddha" name="agama" value="Buddha" {{ $userData[0]->agama == 'Buddha' ? 'checked' : '' }}>
                        <label class="inBlock" for="Buddha">Buddha</label><br>
                        <input type="radio" onclick="clearInput('lainAgamaInput')" id="Hindu" name="agama" value="Hindu" {{ $userData[0]->agama == 'Hindu' ? 'checked' : '' }}>
                        <label class="inBlock" for="Hindu">Hindu</label><br>
                        <input type="radio" onclick="clearInput('lainAgamaInput')" id="Tiada" name="agama" value="Tiada" {{ $userData[0]->agama == 'Tiada' ? 'checked' : '' }}>
                        <label class="inBlock" for="Tiada">Tidak Menganut Agama</label><br>
                        <input type="radio" id="LainAgama" value="lain-lain" name="agama" {{ $userData[0]->agama == 'lain-lain' ? 'checked' : '' }}>
                        <label class="inBlock" for="LainAgama">Lain-lain (sila nyatakan) :</label> <input id="lainAgamaInput" class="lain-lain fiftyPercent" name="lainAgamaDetail" value="{{ $userData[0]->agama == 'lain-lain' ? $userData[0]->lainAgamaDetail : '' }}">
                     </div>

                  <div class="introPage <x-form-validation-error key='bangsa'/>" style="margin-bottom: 10px;">
                     <label>4. Bangsa : </label>
                     <select name="bangsa" class="selectBox">
                     @if ($userData[0]->bangsa == NULL)
                           <option value="" selected disabled>Sila pilih</option>
                           <option value="Melayu">Melayu</option>
                           <option value="Cina">Cina</option>
                           <option value="India">India</option>
                           <option value="Bumiputera Sabah">Bumiputera Sabah</option>
                           <option value="Bumiputera Sarawak">Bumiputera Sarawak</option>
                           <option value="Lain-lain">Lain-lain</option>
                     @else
                           <option value="{{$userData[0]->bangsa}}">[Pilihan] - {{$userData[0]->bangsa}}</option>
                           <option value="Melayu">Melayu</option>
                           <option value="Cina">Cina</option>
                           <option value="India">India</option>
                           <option value="Bumiputera Sabah">Bumiputera Sabah</option>
                           <option value="Bumiputera Sarawak">Bumiputera Sarawak</option>
                           <option value="Lain-lain">Lain-lain</option>
                     @endif
                     </select>
                  </div>
                  <div class="introPage <x-form-validation-error key='daerahBertugas'/>" style="margin-bottom: 10px;">
                     <label>5. Daerah Bertugas : </label>
                     <select name="daerahBertugas" class="selectBox">
                        @if ( $userData[0]->daerahBertugas == NULL )
                        <option value="" selected disabled>Sila pilih</option>
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
                        @else
                        <option value="{{$userData[0]->daerahBertugas}}">[Pilihan] - {{$userData[0]->daerahBertugas}}</option>
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
                        @endif
                     </select>
                  </div>
                  <div class="introPage <x-form-validation-error key='status'/>" style="margin-bottom: 10px;">
                     <p>6. Status Perkahwinan :</p>
                     <input type="radio" id="Bujang" name="status" value="Bujang" {{$userData[0]->status == 'Bujang' ? 'checked' : ''}}>
                     <label class="inBlock" for="Bujang">Bujang</label><br>
                     <input type="radio" id="Berkahwin" name="status" value="Berkahwin" {{$userData[0]->status == 'Berkahwin' ? 'checked' : ''}}>
                     <label class="inBlock" for="Berkahwin">Berkahwin</label><br>
                     <input type="radio" id="Duda" name="status" value="Duda" {{$userData[0]->status == 'Duda' ? 'checked' : ''}}>
                     <label class="inBlock" for="Duda">Duda</label><br>
                     <input type="radio" id="Janda" name="status" value="Janda" {{$userData[0]->status == 'Jandi' ? 'checked' : ''}}>
                     <label class="inBlock" for="Janda">Janda</label><br>
                     <input type="radio" id="Balu" name="status" value="Balu" {{$userData[0]->status == 'Balu' ? 'checked' : ''}}>
                     <label class="inBlock" for="Balu">Balu</label><br>
                     
                  </div>
                  <div class="introPage <x-form-validation-error key='bilAnak'/>" style="margin-bottom: 10px;">
                     <label>7. Bilangan Anak : </label> 
                     <select name="bilAnak" class="selectBox">
                        @if ( $userData[0]->bilAnak == NULL )
                        <option value="" selected disabled>Sila pilih</option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option>
                        @else
                        <option value="{{$userData[0]->bilAnak}}">[Pilihan] - {{$userData[0]->bilAnak}}</option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option>
                        @endif
                     </select> Orang
                     </div>
                  <div class="introPage <x-form-validation-error key='bilIsiRumah'/>" style="margin-bottom: 10px;">
                     <label>8. Bilangan Isi Rumah : </label>
                     <input class="small-input" value="{{ $userData[0]->bilIsiRumah == NULL ? '' : $userData[0]->bilIsiRumah }}" name="bilIsiRumah"> Orang
                     </div>
                  <div class="introPage <x-form-validation-error key='tinggalBersamaPasangan'/>" style="margin-bottom: 10px;">
                     <p>9. Adakah anda tinggal bersama pasangan anda? :</p>
                     <input type="radio" id="Ya" name="tinggalBersamaPasangan" value="Ya" {{ $userData[0]->tinggalBersamaPasangan == 'Ya' ? 'checked' : '' }}>
                     <label class="inBlock" for="Ya">Ya</label><br>
                     <input type="radio" id="tidak" name="tinggalBersamaPasangan" value="Tidak" {{ $userData[0]->tinggalBersamaPasangan == 'Tidak' ? 'checked' : '' }}>
                     <label class="inBlock" for="tidak">Tidak</label><br>
                     </div>
                  <div class="introPage <x-form-validation-error key='bilBilikTidur'/>" style="margin-bottom: 10px;">
                     <label>10. Bilangan Bilik Tidur di Rumah : </label>
                     <select name="bilBilikTidur" class="selectBox">
                        @if ( $userData[0]->bilBilikTidur == NULL )
                        <option value="" selected disabled>Sila pilih</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>
                        @else
                        <option value="{{$userData[0]->bilBilikTidur}}">[Pilihan] - {{$userData[0]->bilBilikTidur}}</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>   
                        @endif
                     </select>
                     Buah Bilik
                     </div>
                  <div class="introPage <x-form-validation-error key='education'/>" style="margin-bottom: 10px;">
                     <p>11. Tahap Pendidikan Tertinggi :</p>
                     <input type="radio" id="sr" name="education" value="Sekolah Rendah" {{ $userData[0]->education == 'Sekolah Rendah' ? 'checked' : '' }}>
                     <label class="inBlock" for="sr">Sekolah Rendah</label><br>
                     <input type="radio" id="PMR/SRP" name="education" value="PMR/SRP" {{ $userData[0]->education == 'PMR/SRP' ? 'checked' : '' }}>
                     <label class="inBlock" for="PMR/SRP">PMR/SRP</label><br>
                     <input type="radio" id="SPM/Setara" name="education" value="SPM/Setara" {{ $userData[0]->education == 'SPM/Setara' ? 'checked' : '' }}>
                     <label class="inBlock" for="SPM/Setara">SPM/Setara</label><br>
                     <input type="radio" id="STPM/Setara" name="education" value="STPM/Setara" {{ $userData[0]->education == 'STPM/Setara' ? 'checked' : '' }}>
                     <label class="inBlock" for="STPM/Setara">STPM/Setara</label><br>
                     <input type="radio" id="Diploma" name="education" value="Diploma" {{ $userData[0]->education == 'Diploma' ? 'checked' : '' }}>
                     <label class="inBlock" for="Diploma">Diploma</label><br>
                     <input type="radio" id="SarjanaMuda" name="education" value="Sarjana Muda" {{ $userData[0]->education == 'Sarjana Muda' ? 'checked' : '' }}>
                     <label class="inBlock" for="SarjanaMuda">Sarjana Muda</label><br>
                     <input type="radio" id="Sarjana" name="education" value="Sarjana" {{ $userData[0]->education == 'Sarjana' ? 'checked' : '' }}>
                     <label class="inBlock" for="Sarjana">Sarjana</label><br>
                     <input type="radio" id="PhD" name="education" value="PhD" {{ $userData[0]->education == 'PhD' ? 'checked' : '' }}>
                     <label class="inBlock" for="PhD">Ph.D</label><br>
                     </div>
                  <div class="introPage <x-form-validation-error key='agensi'/>" style="margin-bottom: 10px;">
                     <p>12. Agensi (Kementerian/Jabatan/dll) : </p>
                     <select name="agensi" class="selectBox">
                        @if ( $userData[0]->agensi == NULL )
                           <option value="Pejabat Yang Dipertua Negeri Sabah / Istana Negeri">Pejabat Yang Dipertua Negeri Sabah / Istana Negeri</option><option value="Pejabat Ketua Menteri">Pejabat Ketua Menteri</option><option value="Pejabat Setiausaha Kerajaan Negeri">Pejabat Setiausaha Kerajaan Negeri</option><option value="" selected disabled>Sila pilih</option><option value="Kementerian Pembangunan Luar Bandar">Kementerian Pembangunan Luar Bandar</option><option value="Kementerian Kewangan">Kementerian Kewangan</option><option value="Kementerian Pertanian dan Perikanan">Kementerian Pertanian dan Perikanan</option><option value="Kementerian Kerja Raya">Kementerian Kerja Raya</option><option value="Kementerian Kerajaan Tempatan dan Perumahan">Kementerian Kerajaan Tempatan dan Perumahan</option><option value="Kementerian Pembangunan Masyarakat dan Kesejahteraan Rakyat">Kementerian Pembangunan Masyarakat dan Kesejahteraan Rakyat</option><option value="Kementerian Pelancongan, Kebudayaan dan Alam Sekitar">Kementerian Pelancongan, Kebudayaan dan Alam Sekitar</option><option value="Kementerian Pembangunan Perindustrian">Kementerian Pembangunan Perindustrian</option><option value="Kementerian Belia dan Sukan Sabah">Kementerian Belia dan Sukan Sabah</option><option value="Kementerian Sains, Teknologi dan Inovasi">Kementerian Sains, Teknologi dan Inovasi</option><option value="Pejabat Dewan Undangan Negeri">Pejabat Dewan Undangan Negeri</option><option value="Suruhanjaya Perkhidmatan Awam Negeri">Suruhanjaya Perkhidmatan Awam Negeri</option><option value="Pejabat Timbalan Setiausaha Kerajaan Negeri (Pentadbiran)">Pejabat Timbalan Setiausaha Kerajaan Negeri (Pentadbiran)</option><option value="Pejabat Timbalan Setiausaha Kerajaan Negeri (Pembangunan)">Pejabat Timbalan Setiausaha Kerajaan Negeri (Pembangunan)</option><option value="Jabatan Arkib Negeri Sabah">Jabatan Arkib Negeri Sabah</option><option value="Jabatan Peguam Besar Negeri">Jabatan Peguam Besar Negeri</option><option value="Jabatan Cetak Kerajaan">Jabatan Cetak Kerajaan</option><option value="Jabatan Perkhidmatan Awam Negeri">Jabatan Perkhidmatan Awam Negeri</option><option value="Jabatan Tanah &amp; Ukur">Jabatan Tanah &amp; Ukur</option><option value="Jabatan Perhutanan Sabah">Jabatan Perhutanan Sabah</option><option value="Jabatan Hal Ehwal Agama Islam Negeri Sabah">Jabatan Hal Ehwal Agama Islam Negeri Sabah</option><option value="Unit Perancang Ekonomi Negeri">Unit Perancang Ekonomi Negeri</option><option value="Unit Pemimpin Pembangunan Masyarakat">Unit Pemimpin Pembangunan Masyarakat</option><option value="Pejabat Perhubungan Negeri Sabah">Pejabat Perhubungan Negeri Sabah</option><option value="Bahagian Istiadat dan Protokol">Bahagian Istiadat dan Protokol</option><option value="Bahagian Pengurusan dan Kewangan">Bahagian Pengurusan dan Kewangan</option><option value="Bahagian Kabinet dan Dasar">Bahagian Kabinet dan Dasar</option><option value="Pejabat Akhbar dan Penerbitan">Pejabat Akhbar dan Penerbitan</option><option value="Pejabat Mufti Negeri">Pejabat Mufti Negeri</option><option value="Pejabat Hasil Bumi">Pejabat Hasil Bumi</option><option value="Pejabat Hal Ehwal Dalam Negeri dan Penyelidikan">Pejabat Hal Ehwal Dalam Negeri dan Penyelidikan</option><option value="Jabatan Bendahari Negeri">Jabatan Bendahari Negeri</option><option value="Jabatan Perkhidmatan Komputer Negeri">Jabatan Perkhidmatan Komputer Negeri</option><option value="Jabatan Perikanan">Jabatan Perikanan</option><option value="Jabatan Perkhidmatan Veterinar Sabah">Jabatan Perkhidmatan Veterinar Sabah</option><option value="Jabatan Pengairan dan Saliran">Jabatan Pengairan dan Saliran</option><option value="Jabatan Pertanian">Jabatan Pertanian</option><option value="Jabatan Air Negeri Sabah">Jabatan Air Negeri Sabah</option><option value="Jabatan Perkhidmatan Pembetungan Sabah">Jabatan Perkhidmatan Pembetungan Sabah</option><option value="Jabatan Kerja Raya">Jabatan Kerja Raya</option><option value="Jabatan Keretapi Negeri Sabah">Jabatan Keretapi Negeri Sabah</option><option value="Jabatan Pelabuhan dan Dermaga Sabah">Jabatan Pelabuhan dan Dermaga Sabah</option><option value="Jabatan Perancang Bandar dan Wilayah">Jabatan Perancang Bandar dan Wilayah</option><option value="Jabatan Hal Ehwal Anak Negeri Sabah">Jabatan Hal Ehwal Anak Negeri Sabah</option><option value="Jabatan Perkhidmatan Kebajikan Am">Jabatan Perkhidmatan Kebajikan Am</option><option value="Jabatan Hal Ehwal Wanita Negeri">Jabatan Hal Ehwal Wanita Negeri</option><option value="Jabatan Hidupan Liar">Jabatan Hidupan Liar</option><option value="Jabatan Perlindungan Alam Sekitar">Jabatan Perlindungan Alam Sekitar</option><option value="Jabatan Muzium Sabah">Jabatan Muzium Sabah</option><option value="Jabatan Pembangunan Perindustrian dan Penyelidikan">Jabatan Pembangunan Perindustrian dan Penyelidikan</option><option value="Perpustakaan Negeri Sabah">Perpustakaan Negeri Sabah</option><option value="Jabatan Pembangunan Sumber Manusia">Jabatan Pembangunan Sumber Manusia</option>
                        @else
                           <option value="{{$userData[0]->agensi}}">[Pilihan] - {{$userData[0]->agensi}}</option><option value="Pejabat Yang Dipertua Negeri Sabah / Istana Negeri">Pejabat Yang Dipertua Negeri Sabah / Istana Negeri</option><option value="Pejabat Ketua Menteri">Pejabat Ketua Menteri</option><option value="Pejabat Setiausaha Kerajaan Negeri">Pejabat Setiausaha Kerajaan Negeri</option><option value="Kementerian Pembangunan Luar Bandar">Kementerian Pembangunan Luar Bandar</option><option value="Kementerian Kewangan">Kementerian Kewangan</option><option value="Kementerian Pertanian dan Perikanan">Kementerian Pertanian dan Perikanan</option><option value="Kementerian Kerja Raya">Kementerian Kerja Raya</option><option value="Kementerian Kerajaan Tempatan dan Perumahan">Kementerian Kerajaan Tempatan dan Perumahan</option><option value="Kementerian Pembangunan Masyarakat dan Kesejahteraan Rakyat">Kementerian Pembangunan Masyarakat dan Kesejahteraan Rakyat</option><option value="Kementerian Pelancongan, Kebudayaan dan Alam Sekitar">Kementerian Pelancongan, Kebudayaan dan Alam Sekitar</option><option value="Kementerian Pembangunan Perindustrian">Kementerian Pembangunan Perindustrian</option><option value="Kementerian Belia dan Sukan Sabah">Kementerian Belia dan Sukan Sabah</option><option value="Kementerian Sains, Teknologi dan Inovasi">Kementerian Sains, Teknologi dan Inovasi</option><option value="Pejabat Dewan Undangan Negeri">Pejabat Dewan Undangan Negeri</option><option value="Suruhanjaya Perkhidmatan Awam Negeri">Suruhanjaya Perkhidmatan Awam Negeri</option><option value="Pejabat Timbalan Setiausaha Kerajaan Negeri (Pentadbiran)">Pejabat Timbalan Setiausaha Kerajaan Negeri (Pentadbiran)</option><option value="Pejabat Timbalan Setiausaha Kerajaan Negeri (Pembangunan)">Pejabat Timbalan Setiausaha Kerajaan Negeri (Pembangunan)</option><option value="Jabatan Arkib Negeri Sabah">Jabatan Arkib Negeri Sabah</option><option value="Jabatan Peguam Besar Negeri">Jabatan Peguam Besar Negeri</option><option value="Jabatan Cetak Kerajaan">Jabatan Cetak Kerajaan</option><option value="Jabatan Perkhidmatan Awam Negeri">Jabatan Perkhidmatan Awam Negeri</option><option value="Jabatan Tanah &amp; Ukur">Jabatan Tanah &amp; Ukur</option><option value="Jabatan Perhutanan Sabah">Jabatan Perhutanan Sabah</option><option value="Jabatan Hal Ehwal Agama Islam Negeri Sabah">Jabatan Hal Ehwal Agama Islam Negeri Sabah</option><option value="Unit Perancang Ekonomi Negeri">Unit Perancang Ekonomi Negeri</option><option value="Unit Pemimpin Pembangunan Masyarakat">Unit Pemimpin Pembangunan Masyarakat</option><option value="Pejabat Perhubungan Negeri Sabah">Pejabat Perhubungan Negeri Sabah</option><option value="Bahagian Istiadat dan Protokol">Bahagian Istiadat dan Protokol</option><option value="Bahagian Pengurusan dan Kewangan">Bahagian Pengurusan dan Kewangan</option><option value="Bahagian Kabinet dan Dasar">Bahagian Kabinet dan Dasar</option><option value="Pejabat Akhbar dan Penerbitan">Pejabat Akhbar dan Penerbitan</option><option value="Pejabat Mufti Negeri">Pejabat Mufti Negeri</option><option value="Pejabat Hasil Bumi">Pejabat Hasil Bumi</option><option value="Pejabat Hal Ehwal Dalam Negeri dan Penyelidikan">Pejabat Hal Ehwal Dalam Negeri dan Penyelidikan</option><option value="Jabatan Bendahari Negeri">Jabatan Bendahari Negeri</option><option value="Jabatan Perkhidmatan Komputer Negeri">Jabatan Perkhidmatan Komputer Negeri</option><option value="Jabatan Perikanan">Jabatan Perikanan</option><option value="Jabatan Perkhidmatan Veterinar Sabah">Jabatan Perkhidmatan Veterinar Sabah</option><option value="Jabatan Pengairan dan Saliran">Jabatan Pengairan dan Saliran</option><option value="Jabatan Pertanian">Jabatan Pertanian</option><option value="Jabatan Air Negeri Sabah">Jabatan Air Negeri Sabah</option><option value="Jabatan Perkhidmatan Pembetungan Sabah">Jabatan Perkhidmatan Pembetungan Sabah</option><option value="Jabatan Kerja Raya">Jabatan Kerja Raya</option><option value="Jabatan Keretapi Negeri Sabah">Jabatan Keretapi Negeri Sabah</option><option value="Jabatan Pelabuhan dan Dermaga Sabah">Jabatan Pelabuhan dan Dermaga Sabah</option><option value="Jabatan Perancang Bandar dan Wilayah">Jabatan Perancang Bandar dan Wilayah</option><option value="Jabatan Hal Ehwal Anak Negeri Sabah">Jabatan Hal Ehwal Anak Negeri Sabah</option><option value="Jabatan Perkhidmatan Kebajikan Am">Jabatan Perkhidmatan Kebajikan Am</option><option value="Jabatan Hal Ehwal Wanita Negeri">Jabatan Hal Ehwal Wanita Negeri</option><option value="Jabatan Hidupan Liar">Jabatan Hidupan Liar</option><option value="Jabatan Perlindungan Alam Sekitar">Jabatan Perlindungan Alam Sekitar</option><option value="Jabatan Muzium Sabah">Jabatan Muzium Sabah</option><option value="Jabatan Pembangunan Perindustrian dan Penyelidikan">Jabatan Pembangunan Perindustrian dan Penyelidikan</option><option value="Perpustakaan Negeri Sabah">Perpustakaan Negeri Sabah</option><option value="Jabatan Pembangunan Sumber Manusia">Jabatan Pembangunan Sumber Manusia</option>
                        @endif
                     </select>
                     </div>
                  <div class="introPage <x-form-validation-error key='kumpulanPerkhidmatan'/>" style="margin-bottom: 10px;">
                     <p>13. Kumpulan Perkhidmatan : </p>
                     <input id="pt" type="radio" name="kumpulanPerkhidmatan" value="Pengurusan Tertinggi" {{ $userData[0]->kumpulanPerkhidmatan == 'Pengurusan Tertinggi' ? 'checked' : '' }}>
                     <label class="inBlock" for="pt">Pengurusan Tertinggi</label><br>
                     <input id="pp" type="radio" name="kumpulanPerkhidmatan" value="Pengurusan Professional" {{ $userData[0]->kumpulanPerkhidmatan == 'Pengurusan Professional' ? 'checked' : '' }}>
                     <label for="pp" class="inBlock">Pengurusan & Professional</label><br>
                     <input id="kp" type="radio" name="kumpulanPerkhidmatan" value="Kumpulan Pelaksana" {{ $userData[0]->kumpulanPerkhidmatan == 'Kumpulan Pelaksana' ? 'checked' : '' }}>
                     <label for="kp" class="inBlock">Kumpulan Pelaksana</label>
                  </div>
                  <div class="introPage <x-form-validation-error key='tarafJawatan'/>" style="margin-bottom: 10px;">
                     <p>14. Taraf Jawatan : </p>
                     <input id="tetap" type="radio" name="tarafJawatan" value="Tetap" {{ $userData[0]->tarafJawatan == 'Tetap' ? 'checked' : '' }} >
                     <label for="tetap" class="inBlock">Tetap</label><br>
                     <input id="sementara" type="radio" name="tarafJawatan" value="Sementara" {{ $userData[0]->tarafJawatan == 'Sementara' ? 'checked' : '' }}>
                     <label for="sementara" class="inBlock">Sementara</label><br>
                     <input id="kontrak" type="radio" name="tarafJawatan" value="Kontrak" {{ $userData[0]->tarafJawatan == 'Kontrak' ? 'checked' : '' }}>
                     <label for="kontrak" class="inBlock">Kontrak</label>
                     </div>
                  <div class="introPage <x-form-validation-error key='skimPerkhidmatan'/>" style="margin-bottom: 10px;">
                     <p>15. Skim Perkhidmatan : </p>
                     <select name="skimPerkhidmatan" class="selectBox">
                        @if ( $userData[0]->skimPerkhidmatan == NULL )
                           <option value="" selected disabled>Sila pilih</option>
                           <option value="A">A</option>
                           <option value="B">B</option>
                           <option value="C">C</option>
                           <option value="DG">DG</option>
                           <option value="DV">DV</option>
                           <option value="E">E</option>
                           <option value="F">F</option>
                           <option value="G">G</option>
                           <option value="H">H</option>
                           <option value="J">J</option>
                           <option value="KP">KP</option>
                           <option value="L">L</option>
                           <option value="N">N</option>
                           <option value="NT">NT</option>
                           <option value="N">N</option>
                           <option value="Q">Q</option>
                           <option value="S">S</option>
                           <option value="U">U</option>
                           <option value="W">W</option>
                        @else
                           <option value="{{$userData[0]->skimPerkhidmatan}}">[Pilihan] - {{$userData[0]->skimPerkhidmatan}}</option>
                           <option value="A">A</option>
                           <option value="B">B</option>
                           <option value="C">C</option>
                           <option value="DG">DG</option>
                           <option value="DV">DV</option>
                           <option value="E">E</option>
                           <option value="F">F</option>
                           <option value="G">G</option>
                           <option value="H">H</option>
                           <option value="J">J</option>
                           <option value="KP">KP</option>
                           <option value="L">L</option>
                           <option value="N">N</option>
                           <option value="NT">NT</option>
                           <option value="N">N</option>
                           <option value="Q">Q</option>
                           <option value="S">S</option>
                           <option value="U">U</option>
                           <option value="W">W</option>
                        @endif
                     </select>
                     </div>
                  <div class="introPage <x-form-validation-error key='gredJawatan'/>" style="margin-bottom: 10px;">
                     <label>16. Gred Jawatan : </label>
                     <select class="selectBox" name="gredJawatan">
                        @if ( $userData[0]->gredJawatan == NULL )
                           <option value="" selected disabled>Sila pilih</option><option value="Gred Pengurusan Tertinggi">Gred Pengurusan Tertinggi</option><option value="Gred 54">Gred 54</option><option value="Gred 53">Gred 53</option><option value="Gred 52">Gred 52</option><option value="Gred 51">Gred 51</option><option value="Gred 50">Gred 50</option><option value="Gred 49">Gred 49</option><option value="Gred 48">Gred 48</option><option value="Gred 47">Gred 47</option><option value="Gred 46">Gred 46</option><option value="Gred 45">Gred 45</option><option value="Gred 44">Gred 44</option><option value="Gred 43">Gred 43</option><option value="Gred 42">Gred 42</option><option value="Gred 41">Gred 41</option><option value="Gred 40">Gred 40</option><option value="Gred 39">Gred 39</option><option value="Gred 38">Gred 38</option><option value="Gred 37">Gred 37</option><option value="Gred 36">Gred 36</option><option value="Gred 35">Gred 35</option><option value="Gred 34">Gred 34</option><option value="Gred 33">Gred 33</option><option value="Gred 32">Gred 32</option><option value="Gred 31">Gred 31</option><option value="Gred 30">Gred 30</option><option value="Gred 29">Gred 29</option><option value="Gred 28">Gred 28</option><option value="Gred 27">Gred 27</option><option value="Gred 26">Gred 26</option><option value="Gred 25">Gred 25</option><option value="Gred 24">Gred 24</option><option value="Gred 23">Gred 23</option><option value="Gred 22">Gred 22</option><option value="Gred 21">Gred 21</option><option value="Gred 20">Gred 20</option><option value="Gred 19">Gred 19</option><option value="Gred 18">Gred 18</option><option value="Gred 17">Gred 17</option><option value="Gred 16">Gred 16</option><option value="Gred 15">Gred 15</option><option value="Gred 14">Gred 14</option><option value="Gred 13">Gred 13</option><option value="Gred 12">Gred 12</option><option value="Gred 11">Gred 11</option><option value="Gred 10">Gred 10</option><option value="Gred 9">Gred 9</option><option value="Gred 8">Gred 8</option><option value="Gred 7">Gred 7</option><option value="Gred 6">Gred 6</option><option value="Gred 5">Gred 5</option><option value="Gred 4">Gred 4</option><option value="Gred 3">Gred 3</option><option value="Gred 2">Gred 2</option><option value="Gred 1">Gred 1</option>
                        @else
                           <option value="{{$userData[0]->gredJawatan}}">[Pilihan] - {{$userData[0]->gredJawatan}}</option><option value="Gred Pengurusan Tertinggi">Gred Pengurusan Tertinggi</option><option value="Gred 54">Gred 54</option><option value="Gred 53">Gred 53</option><option value="Gred 52">Gred 52</option><option value="Gred 51">Gred 51</option><option value="Gred 50">Gred 50</option><option value="Gred 49">Gred 49</option><option value="Gred 48">Gred 48</option><option value="Gred 47">Gred 47</option><option value="Gred 46">Gred 46</option><option value="Gred 45">Gred 45</option><option value="Gred 44">Gred 44</option><option value="Gred 43">Gred 43</option><option value="Gred 42">Gred 42</option><option value="Gred 41">Gred 41</option><option value="Gred 40">Gred 40</option><option value="Gred 39">Gred 39</option><option value="Gred 38">Gred 38</option><option value="Gred 37">Gred 37</option><option value="Gred 36">Gred 36</option><option value="Gred 35">Gred 35</option><option value="Gred 34">Gred 34</option><option value="Gred 33">Gred 33</option><option value="Gred 32">Gred 32</option><option value="Gred 31">Gred 31</option><option value="Gred 30">Gred 30</option><option value="Gred 29">Gred 29</option><option value="Gred 28">Gred 28</option><option value="Gred 27">Gred 27</option><option value="Gred 26">Gred 26</option><option value="Gred 25">Gred 25</option><option value="Gred 24">Gred 24</option><option value="Gred 23">Gred 23</option><option value="Gred 22">Gred 22</option><option value="Gred 21">Gred 21</option><option value="Gred 20">Gred 20</option><option value="Gred 19">Gred 19</option><option value="Gred 18">Gred 18</option><option value="Gred 17">Gred 17</option><option value="Gred 16">Gred 16</option><option value="Gred 15">Gred 15</option><option value="Gred 14">Gred 14</option><option value="Gred 13">Gred 13</option><option value="Gred 12">Gred 12</option><option value="Gred 11">Gred 11</option><option value="Gred 10">Gred 10</option><option value="Gred 9">Gred 9</option><option value="Gred 8">Gred 8</option><option value="Gred 7">Gred 7</option><option value="Gred 6">Gred 6</option><option value="Gred 5">Gred 5</option><option value="Gred 4">Gred 4</option><option value="Gred 3">Gred 3</option><option value="Gred 2">Gred 2</option><option value="Gred 1">Gred 1</option>
                        @endif
                     </select>
                  </div>
                  <div class="introPage <x-form-validation-error key='gajiKasarBulanan'/>" style="margin-bottom: 10px;">
                     <label>17. Gaji Kasar Bulanan : RM </label>
                     <input class="small-input" name="gajiKasarBulanan" value="{{ $userData[0]->gajiKasarBulanan == NULL ? '' : $userData[0]->gajiKasarBulanan }}">
                  </div>
                  <div class="introPage <x-form-validation-error key='gajiBersihBulanan'/>" style="margin-bottom: 10px;">
                     <label>18. Gaji Bersih Bulanan : RM </label>
                     <input class="small-input" name="gajiBersihBulanan" value="{{ $userData[0]->gajiBersihBulanan == NULL ? '' : $userData[0]->gajiBersihBulanan }}">
                  </div>
                  <div class="introPage <x-form-validation-error key='masalahKesihatan'/>" style="margin-bottom: 10px;">
                     <p>19. Adakah anda mengalami masalah kesihatan? (Jika Ya, sila nyatakan)</p>
                     <input type="radio" id="adaMasalahKesihatanYa" value="Ya" name="masalahKesihatan" {{ $userData[0]->masalahKesihatan == 'Ya' ? 'Checked' : '' }} >
                     <label class="inBlock" for="adaMasalahKesihatanYa">Ya</label><br><input placeholder="Nyatakan masalah kesihatan" id="inputKesihatan" class="big-input lain-lain" name="masalahKesihatanDetail" value="{{ $userData[0]->masalahKesihatan == 'Ya' ? $userData[0]->masalahKesihatanDetail : '' }}"><br>
                     <input type="radio" onclick="clearInput('inputKesihatan')" id="adaMasalahKesihatanTidak" name="masalahKesihatan" value="Tidak" {{ $userData[0]->masalahKesihatan == 'Tidak' ? 'Checked' : '' }}>
                     <label class="inBlock" for="adaMasalahKesihatanTidak">Tidak</label>
                  </div>
                  <div class="introPage <x-form-validation-error key='tempatTinggal'/>" style="margin-bottom: 10px;">
                     <p>20. Status Rumah Tempat Tinggal : </p>
                     <input type="radio" onclick="clearInput('inputTempatTinggal')" id="RumahSendiri" name="tempatTinggal" value="Rumah Sendiri" {{ $userData[0]->tempatTinggal == 'Rumah Sendiri' ? 'checked' : '' }}>
                     <label class="inBlock" for="RumahSendiri">Rumah Sendiri</label><br>
                     <input type="radio" onclick="clearInput('inputTempatTinggal')" id="RumahSewa" name="tempatTinggal" value="Rumah Sewa" {{ $userData[0]->tempatTinggal == 'Rumah Sewa' ? 'checked' : '' }}>
                     <label class="inBlock" for="RumahSewa">Rumah Sewa</label><br>
                     <input type="radio" onclick="clearInput('inputTempatTinggal')" id="BilikSewa" name="tempatTinggal" value="Bilik Sewa" {{ $userData[0]->tempatTinggal == 'Bilik Sewa' ? 'checked' : '' }}>
                     <label class="inBlock" for="BilikSewa">Bilik Sewa</label><br>
                     <input type="radio" id="lainTempatTingal" name="tempatTinggal" value="lain-lain" {{ $userData[0]->tempatTinggal == 'lain-lain' ? 'checked' : '' }}>
                     <label class="inBlock" for="lainTempatTingal">Lain-lain (Nyatakan) : </label><input id="inputTempatTinggal" class="big-input lain-lain" name="tempatTinggalDetail" value="{{ $userData[0]->tempatTinggal == 'lain-lain' ? $userData[0]->tempatTinggalDetail : '' }}">
                  </div>
                  <div class="introPage <x-form-validation-error key='tinggalBersama'/>" style="margin-bottom: 10px;">
                     <p>21. Status Tinggal Bersama : </p>
                     <input type="radio" onclick="clearInput('inputTinggalBersama')" id="bersamaIbuBapa" name="tinggalBersama" value="Bersama Ibu Bapa" {{ $userData[0]->tinggalBersama == 'Bersama Ibu Bapa' ? 'checked' : '' }}>
                     <label class="inBlock" for="bersamaIbuBapa">Bersama Ibu Bapa</label><br>
                     <input type="radio" onclick="clearInput('inputTinggalBersama')" id="BersamaKeluargaMertua" name="tinggalBersama" value="Bersama Keluarga Mertua" {{ $userData[0]->tinggalBersama == 'Bersama Keluarga Mertua' ? 'checked' : '' }}>
                     <label class="inBlock" for="BersamaKeluargaMertua">Bersama Keluarga Mertua</label><br>
                     <input type="radio" id="hbsi" onclick="clearInput('inputTinggalBersama')" name="tinggalBersama" value="Hanya Bersama Suami/Isteri dan Anak" {{ $userData[0]->tinggalBersama == 'Hanya Bersama Suami/Isteri dan Anak' ? 'checked' : '' }}>
                     <label class="inBlock" for="hbsi">Hanya Bersama Suami/Isteri dan Anak</label><br>
                     <input type="radio" id="tjdp" onclick="clearInput('inputTinggalBersama')" name="tinggalBersama" value="Tinggal Berjauhan Dengan Pasangan" {{ $userData[0]->tinggalBersama == 'Tinggal Berjauhan Dengan Pasangan' ? 'checked' : '' }}>
                     <label class="inBlock" for="tjdp">Tinggal Berjauhan Dengan Pasangan</label><br>
                     <input type="radio" id="lainTinggalBersamaLain" name="tinggalBersama" value="lain-lain" {{ $userData[0]->tinggalBersama == 'lain-lain' ? 'checked' : '' }}>
                     <label class="inBlock" for="lainTinggalBersamaLain">Lain-lain (Nyatakan) : </label><input id="inputTinggalBersama" class="big-input lain-lain" name="tinggalBersamaDetail" value="{{ $userData[0]->tinggalBersama == 'lain-lain' ? $userData[0]->tinggalBersamaDetail : '' }}">
                  </div>
                  <div class="introPage <x-form-validation-error key='kenderaanKerja'/>" style="margin-bottom: 10px;">
                     <p>22. Apakah jenis pengangkutan anda ke tempat kerja?</p>
                     <input type="radio" onclick="clearInput('inputKenderaanKerja')" id="KeretaSendiri" name="kenderaanKerja" value="Kereta Sendiri" {{ $userData[0]->kenderaanKerja == 'Kereta Sendiri' ? 'checked' : '' }}>
                     <label class="inBlock" for="KeretaSendiri">Kereta Sendiri</label><br>
                     <input type="radio" onclick="clearInput('inputKenderaanKerja')" id="MenumpangRakan" name="kenderaanKerja" value="Menumpang Rakan" {{ $userData[0]->kenderaanKerja == 'Menumpang Rakan' ? 'checked' : '' }}>
                     <label class="inBlock" for="MenumpangRakan">Menumpang Rakan</label><br>
                     <input type="radio" onclick="clearInput('inputKenderaanKerja')" id="ehailing" name="kenderaanKerja" value="e-Hailing" {{ $userData[0]->kenderaanKerja == 'e-Hailing' ? 'checked' : '' }}>
                     <label class="inBlock" for="ehailing">e-Hailing</label><br>
                     <input type="radio" onclick="clearInput('inputKenderaanKerja')" id="BasTeksi" name="kenderaanKerja" value="Bas Teksi" {{ $userData[0]->kenderaanKerja == 'Bas Teksi' ? 'checked' : '' }}>
                     <label class="inBlock" for="BasTeksi">Bas/Teksi</label><br>
                     <input type="radio" id="lainKenderaanKerja" name="kenderaanKerja" value="lain-lain" {{ $userData[0]->kenderaanKerja == 'lain-lain' ? 'checked' : '' }}>
                     <label class="inBlock" for="lainKenderaanKerja">Lain-lain (Nyatakan) : </label><input id="inputKenderaanKerja" class="big-input lain-lain" name="kenderaanKerjaDetail" value="{{ $userData[0]->kenderaanKerja == 'lain-lain' ? $userData[0]->kenderaanKerjaDetail : '' }}">
                  </div>
                  <div class="introPage <x-form-validation-error key='kesukaranGaji'/>" style="margin-bottom: 10px;">
                     <p>23. Adakah anda mengalami kesukaran menjalani kehidupan dengan jumlah gaji anda?</p>
                     <input type="radio" id="sukarGajiYa" name="kesukaranGaji" value="Ya" {{ $userData[0]->kesukaranGaji == 'Ya' ? 'checked' : '' }}>
                     <label class="inBlock" for="sukarGajiYa">Ya</label><br>
                     <input type="radio" id="sukarGajiTidak" name="kesukaranGaji" value="Tidak" {{ $userData[0]->kesukaranGaji == 'Tidak' ? 'checked' : '' }}>
                     <label class="inBlock" for="sukarGajiTidak">Tidak</label>
                  </div>
                  <div class="introPage <x-form-validation-error key='tempohPerkhidmatanTahun'/>" style="margin-bottom: 10px;">
                     <label>24. Tempoh Perkhidmatan : </label>
                     <select name="tempohPerkhidmatanTahun" class="selectBox">
                        @if ( $userData[0]->tempohPerkhidmatanTahun == NULL)
                        <option value="" selected disabled>Sila pilih</option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option>
                        @else
                        <option value="{{$userData[0]->tempohPerkhidmatanTahun}}">[Pilihan] - {{$userData[0]->tempohPerkhidmatanTahun}}</option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option> 
                        @endif
                     </select>
                     tahun
                     <select name="tempohPerkhidmatanBulan" class="selectBox">
                        @if ( $userData[0]->tempohPerkhidmatanBulan == NULL )
                        <option value="" selected disabled>Sila pilih</option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option>
                        @else
                           <option value="{{$userData[0]->tempohPerkhidmatanBulan}}">[Pilihan] - {{$userData[0]->tempohPerkhidmatanBulan}}</option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option> 
                        @endif
                     </select>
                     bulan
                  </div>
                  <div class="introPage <x-form-validation-error key='masalahKesihatan'/>" style="margin-bottom: 10px;">
                     <p>25. Adakah anda mempunyai seorang atau dua orang penilai.</p>
                     <input style="margin-left: 15px" type="radio" id="penilai1" name="penilai" value="1" {{ $userData[0]->penilai == '1' ? 'checked' : ''}}>
                     <label class="inBlock" for="penilai1">Seorang Penilai</label>
                     <input style="margin-left: 15px" type="radio" id="penilai2" name="penilai" value="2" {{ $userData[0]->penilai == '2' ? 'checked' : ''}}>
                     <label class="inBlock" for="penilai2">Dua Orang Penilai</label>
                  </div>
                  <div class="introPage" style="margin-bottom: 10px;">
                     <label>26. Laporan Nilaian Prestasi Tahunan (LNTP) </label>
                     <input class="small-input" name="lntp" value="{{ $userData[0]->lntp == NULL ? '' : $userData[0]->lntp }}">%
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