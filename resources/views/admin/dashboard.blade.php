@extends('brackets/admin-ui::admin.layout.default')
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.0/dist/chart.min.js"></script>
<script src={{ url('js/chartjs-plugin-datalabels.min.js') }}></script>
@section('body')
    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-indigo">
            <div class="card-body">
                <div class="h4 m-0">{{$data['IndeksKegembiraanKeseluruhan']}}%</div>
                <div>Indeks Kegembiraan</div>
                <div class="progress-xs my-3 mb-0 progress progress-white">
                    <div role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="{{$data['IndeksKegembiraanKeseluruhan']}}" class="progress-bar" style="width: {{$data['IndeksKegembiraanKeseluruhan']}}%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-spotify">
            <div class="card-body">
                <div class="h4 m-0">{{$data['IndeksOBTKeseluruhan']}}%</div>
                <div>Indeks OBT</div>
                <div class="progress-xs my-3 mb-0 progress progress-white">
                    <div role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="{{$data['IndeksOBTKeseluruhan']}}" class="progress-bar" style="width: {{$data['IndeksOBTKeseluruhan']}}%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-foursquare">
            <div class="card-body">
                <div class="h4 m-0">{{$totalResponden}}</div>
                <div>Total Responden</div>
                <div class="progress-xs my-3 mb-0 progress progress-white">
                    <div role="progressbar" aria-valuemin="0" aria-valuemax="6122" aria-valuenow="{{$totalResponden}}" class="progress-bar" style="width: {{round($totalResponden / 6122 * 100,2)}}%;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
    <h1>Skor Keseluruhan </h1>
    <div id="chartContainer"></div>
    </div>
</div>
    <script type="application/javascript">
    document.addEventListener("DOMContentLoaded", 
    function () {
        document.getElementById("chartContainer").innerHTML = '<canvas id="votes"></canvas>';
        var ctx = document.getElementById('votes').getContext('2d');
        Chart.register(ChartDataLabels);
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Kepuasan Kerja', 'Kepuasan Hidup', 'Penilaian Hidup', 'Afek Positif', 'Keterlibatan Kerja', 'Prestasi Kerja', 'Organisasi Berprestasi Tinggi', 'Produktiviti', 'Personaliti', 'Kesejahteraan Keluarga', 'Kesejahteraan Kewangan', 'Kesejahteraan Sosial', 'Tujuan', 'Daya Tahan', 'Kindness', 'Altruisme'],
                datasets: [
                    {
                    label: 'Skor Keseluruhan',
                    data: [{{$data['totalRatingB']}}, {{$data['totalRatingC']}}, {{$data['totalRatingD']}}, {{$data['totalRatingE']}}, {{$data['totalRatingF']}}, {{$data['totalRatingG']}}, {{$data['totalRatingH']}}, {{$data['totalRatingI']}}, {{$data['totalRatingJ']}}, {{$data['totalRatingK']}}, {{$data['totalRatingL']}}, {{$data['totalRatingM']}}, {{$data['totalRatingN']}}, {{$data['totalRatingO']}}, {{$data['totalRatingP']}}, {{$data['totalRatingQ']}}],
                     backgroundColor: ['rgba(54, 162, 235, 1)'],
                     borderColor: ['rgba(54, 162, 235, 1)'],
                     borderWidth: 1,
                     datalabels: {
                        formatter: function(value){
                            return value + ' %';
                        },
                         anchor: 'end',
                         align: 'top',
                         color: 'black',
                         font: {
                             weight: 'bold'
                         }
                     }
                    }
              ]
            },
            options: {
                scales: {
                    x: {
                        stacked: true
                    },
                    y: {
                        stacked: true,
                        beginAtZero: true,
                        suggestedMax: 100,
                    }
                },
            },
        });
   }
);
        
        </script>
@endsection