@extends('brackets/admin-ui::admin.layout.default')
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.0/dist/chart.min.js"></script>
<script src={{ url('js/chartjs-plugin-datalabels.min.js') }}></script>
@section('body')
    <h1>Total Vote</h1>
    <div id="chartContainer"></div>
    <script type="application/javascript">
    document.addEventListener("DOMContentLoaded", 
    function () {
        document.getElementById("chartContainer").innerHTML = '<canvas id="votes"></canvas>';
        var ctx = document.getElementById('votes').getContext('2d');
        Chart.register(ChartDataLabels);
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Bahagian B', 'Bahagian C', 'Bahagian D', 'Bahagian E', 'Bahagian F', 'Bahagian G', 'Bahagian H', 'Bahagian I', 'Bahagian J', 'Bahagian K', 'Bahagian L', 'Bahagian M', 'Bahagian N', 'Bahagian O', 'Bahagian P', 'Bahagian Q'],
                datasets: [
                    {
                     label: 'Total Rating',
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