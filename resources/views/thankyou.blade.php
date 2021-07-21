<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="{{ url('css/normalize.css') }}">
<link rel="stylesheet" href="{{ url('css/skeleton.css') }}">
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.4.1/dist/chart.min.js"></script>
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

.tq{
    text-align: center;
    margin: auto;
    max-width: 640px;
}

.tq h4{
    margin:0;
}

.backHome{
    font-size:12px;
}


</style>
<body>

<div class="container">
  <div class="row">
    <div class="twelve columns">
      <div>
        <img src="{{ url('images/header.png') }}" class="imgBanner">
      </div>
      <div class="titleForm"><h4>SOAL SELIDIK INDEKS-KEGEMBIRAAN ORGANISASI BERPRESTASI TINGGI (I-KOBT)</h4></div>
      <div class="introPage tq">
        <h4>Terima Kasih</h4>
        <a href="/"><button class="primary-button backHome">Masukkan Data Baru</button></a>
        <canvas id="myChart" width="400" height="400"></canvas>
      </div>
      <div style="clear:both;margin:10px auto;max-width: 640px;text-align: center;"><span>&copy 2021 JABATAN PERKHIDMATAN AWAM NEGERI SABAH</span></div>

    </div>
   </div>
  </div>
</div>
<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Bahagian B', 'Bahagian C', 'Bahagian D', 'Bahagian E', 'Bahagian F', 'Bahagian G', 'Bahagian H', 'Bahagian I', 'Bahagian J', 'Bahagian K', 'Bahagian L', 'Bahagian M', 'Bahagian N', 'Bahagian O', 'Bahagian P', 'Bahagian Q'],
          datasets: [
            {
              label: 'Your\'s Rating',
              data: [{{$data['userRatingB']}}, {{$data['userRatingC']}}, {{$data['userRatingD']}}, {{$data['userRatingE']}}, {{$data['userRatingF']}}, {{$data['userRatingG']}},{{$data['userRatingH']}}, {{$data['userRatingI']}}, {{$data['userRatingJ']}}, {{$data['userRatingK']}}, {{$data['userRatingL']}}, {{$data['userRatingM']}}, {{$data['userRatingN']}}, {{$data['userRatingO']}}, {{$data['userRatingP']}}, {{$data['userRatingQ']}}],
              backgroundColor: [
                  'rgba(255, 159, 64, 1)'
              ],
              borderColor: [
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          },
            {
              label: 'Total Rating',
              data: [{{$data['totalRatingB']}}, {{$data['totalRatingC']}}, {{$data['totalRatingD']}}, {{$data['totalRatingE']}}, {{$data['totalRatingF']}}, {{$data['totalRatingG']}}, {{$data['totalRatingH']}}, {{$data['totalRatingI']}}, {{$data['totalRatingJ']}}, {{$data['totalRatingK']}}, {{$data['totalRatingL']}}, {{$data['totalRatingM']}}, {{$data['totalRatingN']}}, {{$data['totalRatingO']}}, {{$data['totalRatingP']}}, {{$data['totalRatingQ']}}],
              backgroundColor: [
                  'rgba(54, 162, 235, 0.2)'
              ],
              borderColor: [
                  'rgba(54, 162, 235, 1)'
              ],
              borderWidth: 1
          }
        ]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true,
                  suggestedMax: 10,
              }
          }
      }
  });
  
  </script>
</body>
</html>
