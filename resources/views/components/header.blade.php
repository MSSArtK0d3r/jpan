<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ url('css/normalize.css') }}">
<link rel="stylesheet" href="{{ url('css/skeleton.css') }}">
<link rel="stylesheet" href="{{ url('css/tingle.min.css') }}">
<style>
   * {
      box-sizing: border-box;
   }

   body {
      background-image: url('/images/jpan.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      font-family: "Open Sans";
   }

#map {
  height: 400px;
  /* The height is 400 pixels */
  width: 100%;
  /* The width is the width of the web page */
}

.mapTooltipTitle{
   font-size: 12px;
   text-transform: uppercase;
}

.jumlahResponded{
    padding: 0px 10px;
    margin-left: 10px;
    background-color: blue;
    border-radius: 4px;
}

   #regForm {
      margin: 20px auto;
      font-family: inherit;
      max-width: 640px;
   }

   div.hubungiKami div{
      display: flex;
      align-items: center;
      margin: 10px 0px;
      font-size: 12px
   }
   
   div.hubungiKami img{
      width: 18px;
      margin-right: 10px;
   }

   .contents {
      padding: 20px;
      margin: 20px auto;
      background-color: white;
      border-radius: 4px;
   }

   .notCompleteAllSection {
      display: flex;
      margin-left: 0px;
      align-items: center;
      margin-top:0px;
      padding: 10px 20px;
      border-radius:2px;
      color: white;
      background-color: purple;
      text-align: center;
   }

   .notCompleteAllSection p{
      margin: 0;
      width: 100%;
   }

   .widgetContainerSubDimensiTitle{
      margin-top: 30px;
    border-bottom: 3px solid #6390e2;
   }
   .widgetContainer{
      margin-bottom:40px
   }

   .widgetContainerDimensi{
      display: flex;
      align-items: center;
      margin-bottom:0px;
      padding: 10px 20px;
   }

   .widgetContainerSubDimensi {
      display: flex;
      margin-left: 0px;
      align-items: center;
      margin-top:0px;
      padding: 10px 20px;
      color: white;
      background-color: purple;
   }

   .dimensiSection {
      text-align: center;
      width: 50px;
      background-color: #7a00ff;
      color: white;
      border-radius: 4px;
   }

   .dimensiPercent{
      line-height: 0.7em;
      text-align: end;
      font-size:25px;
   }

   .dimensiPointsInfo {
    padding: 4px 8px;
    font-size: 11px;
    text-transform: uppercase;
    border-radius: 4px;
   }

   .dimensiPointInfoTinggi{
      background-color: green;
      color: white;
   }

   .dimensiPointInfoSederhana{
      background-color: orange;
      color: black;
   }

   .dimensiPointInfoRendah{
      background-color: red;
      color: white;
   }

   .dimensiSubject {
      width: 45%;
      padding-left: 10px;
   }
   
   .dimensiLine{
      border-top: 3px solid #7a01ff;
   }

   .widgetIndex{
      background-color: #7a00ff;
      color: white;
      border-radius: 2px;
      padding: 15px 30px;
   }
   .widgetIndex span{
      text-transform: uppercase;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 2px;
   }
   .widgetIndex hr{
      border-width: 0;
      border-top: 2px solid #E1E1E1;
      margin-top: 1rem;
      margin-bottom: 0rem;
   }

   .floatLeft{
      float: left;
   }

   .floatRight{
      float: right;
   }

   .noMargin{
      margin: 0px;
   }

   .noPadding{
      padding:0px;
   }

   .context{
      text-align: left;
      max-width: 800px;
      margin: 20px auto;
   }

   .subBtn {
      border-radius: 4px;
      margin: 10px 0px;
      background-color: #7f30e8;
      font-size: 14px;
      padding: 9px 20px;
      color: white;
   }

   .userEmail{
      padding: 4px 10px;
      background-color: purple;
      border-radius: 2px;
      color: white;
   }

   label {
      font-weight: normal;
   }

   .activeSection {
      background-color: #550d6d;
   }

   h1 {
      text-align: center;
   }

   .emailInput{
      width: 90%;
      border-radius: 0px !important;
   }

   input {
      outline: none;
      padding: 5px 10px;
      font-size: 14px;
      font-family: inherit;
      border-bottom: 1px solid #aaaaaa;
      border-top: 0px;
      border-left: 0px;
      border-right: 0px;
      text-align: center;
      margin-bottom: 0;
   }

   .listMain{
      list-style: decimal;
      padding-left: 1em;
      list-style-type: decimal;
   }

   #meter0{
      margin: 20px;
      width: 65px;
      font-size: 15px;
      position: relative;
   }

   .small-input {
      width: 70px;
   }

   .big-input {
      width: 50%;
   }

   label {
      font-family: inherit;
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
      font-family: inherit;
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
      text-align: left;
      max-width: 600px;
      margin: 7px auto;
      padding: 7px 20px;
      background-color: white;
      border-radius: 2px;
      border: 1px solid #b3b3b3;
   }

   .btnLogout {
      padding: 5px 10px;
      background-color: #6717d2;
      font-size: 11px;
      border-radius: 4px;
      text-transform: uppercase;
   }

   .rating {
      margin: 0 15px;
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

   #LainBangsa:checked~#lainBangsaInput {
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

   .userLinks {
      background-color: purple;
      margin-top: 20px;
      border-radius: 4px;
      color: white;
   }
   .userLinks a {
      text-decoration: none;
      color: white;
   }

   .bahagian{
      border-bottom: 1px solid #a94aa9;
      padding: 5px 14px;
   }
   .bahagianLast{
      background-color: #269c1e;
      border-bottom: none;
      padding: 5px 14px;
   }
   .topik{
      text-transform: uppercase;
      font-size:11px;
   }

   .Err{
      color: red;
      font-size: 13px;
   }

   .completed {
      margin-left: 10px;
      color: #ffffff;
      font-size: 11px;
      padding: 1px 9px;
      font-weight: bold;
      text-transform: uppercase;
      background-color: green;
      border-radius: 2px;
   }

   .notComplete {
      margin-left: 10px;
      font-size: 11px;
      padding: 1px 9px;
      font-weight: bold;
      text-transform: uppercase;
      background-color: red;
      border-radius: 2px;
   }

   .btnTiada {
      color: white;
      text-transform: uppercase;
      font-size: 10px;
      border-radius: 3px;
      background-color: #149e25;
      padding: 3px 10px;
      cursor: pointer;
   }

   .errForm{
      border: 2px solid red !important;
   }

   .validateErr{
      text-align: center;
      color: white;
      background-color: red;
      padding: 10px;
      font-size: 13px;
      border-radius: 4px;
   }

   /*custom rating css*/
   .radio {
      margin: 10px;
      text-align: center;
      background:#273fc1;
      padding: 4px;
      border-radius: 4px;
      position: relative;
   }

.radio input {
   width: auto;
    /* margin: 0px 10px; */
    height: 100%;
    /* padding: 0px 3px; */
    appearance: none;
    outline: none;
    cursor: pointer;
    font-weight: bold;
    border: 0px;
    font-family: inherit;
    border-radius: 2px;
    padding: 5px 15px;
    background: none;
    color: white;
    font-size: 14px;
    transition: all 100ms linear;
}

.radio input:checked {
	background-color: #12e048;
	color: #fff;
	box-shadow: 0 1px 1px #8670702e;
	text-shadow: 0 1px 0px #79485f7a;
}

.radio input:before {
	content: attr(label);
	display: inline-block;
	text-align: center;
	width: 100%;
}

.sectionDone{
   pointer-events: none;
   color: grey !important;
}

.navigation{
   background-color: #540b89;
}

.menu li{
   display: inline;
   background-color: #540b89;
}

.nav2{
   padding: 15px 0px;
   text-align: center;
   background-color: #540b89;
}

.nav2 a{
   margin: 10px 25px;
   text-decoration: none;
   color: white;
}

.wrapper{
  display: inline-flex;
  background-color:#d1e9ff;
  height: 100px;
  width: 100%;
  align-items: center;
  justify-content: space-evenly;
  border-radius: 5px 5px 0px 0px;
  padding: 25px 40px;
}
.wrapper .option{
  background: #fff;
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 10px;
  border-radius: 5px;
  cursor: pointer;
  
  border: 2px solid lightgrey;
  transition: all 0.3s ease;
}
.wrapper .option .dot{
  height: 20px;
  width: 20px;
  background: #d9d9d9;
  border-radius: 50%;
  position: relative;
}
.wrapper .option .dot::before{
  position: absolute;
  content: "";
  top: 4px;
  left: 4px;
  width: 12px;
  height: 12px;
  background: #0069d9;
  border-radius: 50%;
  opacity: 0;
  transform: scale(1.5);
  transition: all 0.3s ease;
}
.wrapper input[type="radio"]{
  display: none;
}
#ewallet:checked:checked ~ .option-1,
#bank:checked:checked ~ .option-2{
  border-color: #0069d9;
  background: #0069d9;
}
#ewallet:checked:checked ~ .option-1 .dot,
#bank:checked:checked ~ .option-2 .dot{
  background: #fff;
}
#ewallet:checked:checked ~ .option-1 .dot::before,
#bank:checked:checked ~ .option-2 .dot::before{
  opacity: 1;
  transform: scale(1);
}
.wrapper .option span{
  font-size: 15px;
  margin-left: 15px;
  color: #808080;
}
#ewallet:checked:checked ~ .option-1 span,
#bank:checked:checked ~ .option-2 span{
  color: #fff;
}

.ewalletForm{
   display: none;
   background-color: #f7f7f7;
    border-bottom: 1px solid rgb(219, 219, 219);
    border-left: 1px solid rgb(219, 219, 219);
    border-right: 1px solid rgb(219, 219, 219);
    border-top: 0px solid rgb(248, 248, 248);
    overflow: auto;
    padding: 10px 40px;
    border-radius: 0px 0px 5px 5px;
}

.ewalletForm span {
   font-size: 12px;
}

.ewalletForm input[type="text"]{
   border: 1px solid #8a8a8a;
    border-radius: 2px;
    background-color: #fbfbfb;
    color: #565555;
    font-size: 11px;
}


.bankForm{
   display: block;
   background-color: #f7f7f7;
   border-bottom: 1px solid rgb(219, 219, 219);
    border-left: 1px solid rgb(219, 219, 219);
    border-right: 1px solid rgb(219, 219, 219);
    border-top: 0px solid rgb(248, 248, 248);
    overflow: auto;
    padding: 10px 40px;
    border-radius: 0px 0px 5px 5px;
}

.bankForm div{
   display: flex;
    margin: 10px 0px;
    overflow: auto;
    align-items: center;
}

.bankForm span {
   font-size: 12px;
}

.bankForm input[type="text"]{
   text-align: start;
   border: 1px solid #8a8a8a;
    border-radius: 2px;
    background-color: #fbfbfb;
    color: #565555;
    font-size: 11px;
}

.rewardErr {
   border: 1px solid red !important;
}

.rewardErr::placeholder {
   color: red !important;
}

.bankPengesahan {
    padding: 10px 20px;
    background-color: #4a4af5;
    border-radius: 4px;
    color: white;
}

.verifyBtn {
   width: 100%
}

.user-login{
   text-align: center;
    font-size: 13px;
    padding: 4px 10px;
    border-radius: 4px;
    background-color: #540b88;
    color: white;
}

</style>

<body>
   <div class="navigation nav2">
      <a href="/pengenalan">Pengenalan</a>
      <a href="/informasi">Informasi</a>
      <a href="/">Soal Selidik I-KOBT</a>
      <a href="/hubungi">Hubungi Kami</a>
      <a href="/admin">Pentadbir</a>
   </div>
   <div class="container">
      <div class="row">
         <div class="twelve columns">
            <div>
               <img src="{{ url('images/header.png') }}" class="imgBanner">
            </div>