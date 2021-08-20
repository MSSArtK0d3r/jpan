<x-header/>
<div class="contents twevle columns">
  <!--<h5 class="title-center">SOAL SELIDIK<br>INDEKS-KEGEMBIRAAN ORGANISASI BERPRESTASI TINGGI<br>(I-KOBT)</h5>-->
    <div class="six columns">
        <div id="map"></div>
    </div>
    <div class="six columns">
        <h5>Hubungi Kami</h5>
        <p>
            <strong>JABATAN PERKHIDMATAN AWAM NEGERI SABAH</strong><br>
            Tingkat 12-14, Blok A, Pusat Pentadbiran Negeri Sabah,<br>
            Jalan Sulaman, Teluk Likas, 88400 Kota Kinabalu Sabah.<br>
        </p>
        <div class="hubungiKami">
                <div><img src="{{url('images/phone.svg')}}" alt=""> 088-368600 / 368601<br></div>
                <div><img src="{{url('images/www.svg')}}" alt=""> jpan.sabah.gov.my <br></div>
                <div><img src="{{url('images/fb.svg')}}" alt=""> Jabatan Perkhidmatan Awam Negeri Sabah<br></div>
                <div><img src="{{url('images/ig.svg')}}" alt=""> @myjpans</div>
        </div>
    </div>

</div>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsOWr8_ezugUsgQXdfXB1xzbxOl82dpts&callback=initMap&libraries=&v=weekly" async></script>
    <script>
    function initMap() {
        // The location of Uluru
        const jpan = { lat: 6.014892209644736, lng: 116.11091052192599 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 15,
          center: jpan,
        });

        const iconBuild = '{{url('images/building.png')}}';

        const contentString = '<strong class="mapTooltipTitle">Jabatan Perkhidmatan Awam Negeri Sabah</strong><br><br><span style="text-align:justify;">Tingkat 12-14, Blok A, Pusat Pentadbiran Negeri Sabah, Jalan Sulaman, Teluk Likas, 88400 Kota Kinabalu Sabah.</span>';
        const infowindow = new google.maps.InfoWindow({
        content: contentString,
        maxWidth: 1000,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          icon: iconBuild,
          position: jpan,
          map: map,
        });
        infowindow.open({
        anchor: marker,
        map,
        shouldFocus: true,
        });
        marker.addListener("click", () => {
        infowindow.open({
        anchor: marker,
         map,
        shouldFocus: true,
    });
  });
  
}</script>
<x-footer/>