@extends('brackets/admin-ui::admin.layout.default')
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.0/dist/chart.min.js"></script>
<script src={{ url('js/chartjs-plugin-datalabels.min.js') }}></script>
@section('body')
    <span>Agensi</span>
    <h1>{{$data['title']}}</h1>
    @if ( $data['nodata'] === 1)
        <div class="row">
            <div class="col-x-12">
                No data avaiable
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-indigo">
                    <div class="card-body">
                        <div class="h4 m-0">{{ $data['IndeksKegembiraanKeseluruhan'] }}%</div>
                        <div>Indeks Kegembiraan</div>
                        <div class="progress-xs my-3 mb-0 progress progress-white">
                            <div role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                aria-valuenow="{{ $data['IndeksKegembiraanKeseluruhan'] }}" class="progress-bar"
                                style="width: {{ $data['IndeksKegembiraanKeseluruhan'] }}%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-spotify">
                    <div class="card-body">
                        <div class="h4 m-0">{{ $data['IndeksOBTKeseluruhan'] }}%</div>
                        <div>Indeks OBT</div>
                        <div class="progress-xs my-3 mb-0 progress progress-white">
                            <div role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                aria-valuenow="{{ $data['IndeksOBTKeseluruhan'] }}" class="progress-bar"
                                style="width: {{ $data['IndeksOBTKeseluruhan'] }}%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-foursquare">
                    <div class="card-body">
                        <div class="h4 m-0">{{ $data['totalResponden'] }}</div>
                        <div>Total Responden</div>
                        <div class="progress-xs my-3 mb-0 progress progress-white">
                            <div role="progressbar" aria-valuemin="0" aria-valuemax="6122"
                                aria-valuenow="{{ $data['totalResponden'] }}" class="progress-bar"
                                style="width: {{ round(($data['totalResponden'] / 6122) * 100, 2) }}%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="card-title mb-0">Skor Keseluruhan</h4>
                    </div>
                </div>
                <div id="chartContainer"></div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0 black">Indeks Berdasarkan Jantina</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-6">
                                <h5>INDEKS KEGEMBIRAAN</h5>
                                <hr class="mt-0">
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>Lelaki</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['IndeksKegembiraanKeseluruhanMale'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                style="width: {{ $data['IndeksKegembiraanKeseluruhanMale'] }}%"
                                                aria-valuenow="{{ $data['IndeksKegembiraanKeseluruhanMale'] }}"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>Perempuan</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['IndeksKegembiraanKeseluruhanFemale'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: {{ $data['IndeksKegembiraanKeseluruhanFemale'] }}%"
                                                aria-valuenow="{{ $data['IndeksKegembiraanKeseluruhanFemale'] }}"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5>ORGANISASI BERPRESTASI TINGGI</h5>
                                <hr class="mt-0">
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>Lelaki</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['IndeksOBTKeseluruhanMale'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                style="width: {{ $data['IndeksOBTKeseluruhanMale'] }}%"
                                                aria-valuenow="{{ $data['IndeksOBTKeseluruhanMale'] }}" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>Perempuan</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['IndeksOBTKeseluruhanFemale'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: {{ $data['IndeksOBTKeseluruhanFemale'] }}%"
                                                aria-valuenow="{{ $data['IndeksOBTKeseluruhanFemale'] }}"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5>Dimensi dan Sub-Dimensi KEPUASAN KERJA</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-6">
                                <h5>KEPUASAN KERJA</h5>
                                <hr class="mt-0">
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>GAJI</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['totalRatingBGaji'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar gaji-pg" role="progressbar"
                                                style="width: {{ $data['totalRatingBGaji'] }}%"
                                                aria-valuenow="{{ $data['totalRatingBGaji'] }}" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>PANGKAT</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['totalRatingBPangkat'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar pangkat-pg" role="progressbar"
                                                style="width: {{ $data['totalRatingBPangkat'] }}%"
                                                aria-valuenow="{{ $data['totalRatingBPangkat'] }}" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>KETUA</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['totalRatingBKetua'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar ketua-pg" role="progressbar"
                                                style="width: {{ $data['totalRatingBKetua'] }}%"
                                                aria-valuenow="{{ $data['totalRatingBKetua'] }}" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>PROSEDUR OPERASI</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['totalRatingBProsedurOperasi'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar po-pg" role="progressbar"
                                                style="width: {{ $data['totalRatingBProsedurOperasi'] }}%"
                                                aria-valuenow="{{ $data['totalRatingBProsedurOperasi'] }}"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>RAKAN SEKERJA</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['totalRatingBRakanSekerja'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar rs-pg" role="progressbar"
                                                style="width: {{ $data['totalRatingBRakanSekerja'] }}%"
                                                aria-valuenow="{{ $data['totalRatingBRakanSekerja'] }}" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>SIFAT KERJA</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['totalRatingBSifatKerja'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar sk-pg" role="progressbar"
                                                style="width: {{ $data['totalRatingBSifatKerja'] }}%"
                                                aria-valuenow="{{ $data['totalRatingBSifatKerja'] }}" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>KOMUNIKASI</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['totalRatingBKomunikasi'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar kom-pg" role="progressbar"
                                                style="width: {{ $data['totalRatingBKomunikasi'] }}%"
                                                aria-valuenow="{{ $data['totalRatingBKomunikasi'] }}" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>PERSEKITARAN</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['totalRatingBPersekitaran'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar persekitaran-pg" role="progressbar"
                                                style="width: {{ $data['totalRatingBPersekitaran'] }}%"
                                                aria-valuenow="{{ $data['totalRatingBPersekitaran'] }}" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div id="KPChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5>Dimensi dan Sub-Dimensi KETERLIBATAN PEKERJA</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-6">
                                <h5>KETERLIBATAN KERJA</h5>
                                <hr class="mt-0">
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>SEMANGAT</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['totalRatingFSemangat'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar gaji-pg" role="progressbar"
                                                style="width: {{ $data['totalRatingFSemangat'] }}%"
                                                aria-valuenow="{{ $data['totalRatingFSemangat'] }}" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>DEDKASI</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['totalRatingFDedikasi'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar pangkat-pg" role="progressbar"
                                                style="width: {{ $data['totalRatingFDedikasi'] }}%"
                                                aria-valuenow="{{ $data['totalRatingFDedikasi'] }}" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>KESUNGGUHAN</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['totalRatingFKesungguhan'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar ketua-pg" role="progressbar"
                                                style="width: {{ $data['totalRatingFKesungguhan'] }}%"
                                                aria-valuenow="{{ $data['totalRatingFKesungguhan'] }}" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div id="KKChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5>Dimensi dan Sub-Dimensi PRESTASI KERJA</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-6">
                                <h5>PRESTASI KERJA</h5>
                                <hr class="mt-0">
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>PRESTASI TUGAS</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['totalRatingGPrestasiTugas'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar gaji-pg" role="progressbar"
                                                style="width: {{ $data['totalRatingGPrestasiTugas'] }}%"
                                                aria-valuenow="{{ $data['totalRatingGPrestasiTugas'] }}" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>PRESTASI KONTEKSTUAL</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['totalRatingGPrestasiKontekstual'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar pangkat-pg" role="progressbar"
                                                style="width: {{ $data['totalRatingGPrestasiKontekstual'] }}%"
                                                aria-valuenow="{{ $data['totalRatingGPrestasiKontekstual'] }}"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>TINGKAH LAKU KERJA PRODUKTIF</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['totalRatingGTingkahLakuKerjaTidakProduktif'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar ketua-pg" role="progressbar"
                                                style="width: {{ $data['totalRatingGTingkahLakuKerjaTidakProduktif'] }}%"
                                                aria-valuenow="{{ $data['totalRatingGTingkahLakuKerjaTidakProduktif'] }}"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div id="PKChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5>Dimensi dan Sub-Dimensi ORGANISASI BERPRESTASI TINGGI (OBT)</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-6">
                                <h5>ORGANISASI BERPRESTASI TINGGI (OBT)</h5>
                                <hr class="mt-0">
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>KUALITI PENGURUSAN</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['totalRatingHKualitiPengurusan'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar gaji-pg" role="progressbar"
                                                style="width: {{ $data['totalRatingHKualitiPengurusan'] }}%"
                                                aria-valuenow="{{ $data['totalRatingHKualitiPengurusan'] }}" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>PENAMBAHBAIKAN DAN PEMBAHARUAN BERTERUSAN</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['totalRatingHPPB'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar pangkat-pg" role="progressbar"
                                                style="width: {{ $data['totalRatingHPPB'] }}%"
                                                aria-valuenow="{{ $data['totalRatingHPPB'] }}"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>ORIENTASI JANGKA PANJANG</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['totalRatingHOJP'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar ketua-pg" role="progressbar"
                                                style="width: {{ $data['totalRatingHOJP'] }}%"
                                                aria-valuenow="{{ $data['totalRatingHOJP'] }}"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>KUALITI PEKERJA</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['totalRatingHKP2'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar po-pg" role="progressbar"
                                                style="width: {{ $data['totalRatingHKP2'] }}%"
                                                aria-valuenow="{{ $data['totalRatingHKP2'] }}"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <div>KETERBUKAAN DAN ORIENTASI TINDAKAN</div>
                                        <div class="mfs-auto font-weight-bold">
                                            {{ $data['totalRatingHKOT'] }}%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar rs-pg" role="progressbar"
                                                style="width: {{ $data['totalRatingHKOT'] }}%"
                                                aria-valuenow="{{ $data['totalRatingHKOT'] }}"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div id="OBTChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="application/javascript">
            document.addEventListener("DOMContentLoaded",
                function() {
                    document.getElementById("chartContainer").innerHTML = '<canvas id="votes"></canvas>';
                    var ctx = document.getElementById('votes').getContext('2d');
                    Chart.register(ChartDataLabels);
                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Kepuasan Kerja', 'Kepuasan Hidup', 'Penilaian Hidup', 'Afek Positif',
                                'Keterlibatan Kerja', 'Prestasi Kerja', 'Organisasi Berprestasi Tinggi',
                                'Produktiviti', 'Personaliti', 'Kesejahteraan Keluarga',
                                'Kesejahteraan Kewangan', 'Kesejahteraan Sosial', 'Tujuan', 'Daya Tahan',
                                'Kebaikan', 'Altruisme'
                            ],
                            datasets: [{
                                label: 'Skor Keseluruhan',
                                data: [{{ $data['totalRatingB'] }}, {{ $data['totalRatingC'] }},
                                    {{ $data['totalRatingD'] }}, {{ $data['totalRatingE'] }},
                                    {{ $data['totalRatingF'] }}, {{ $data['totalRatingG'] }},
                                    {{ $data['totalRatingH'] }}, {{ $data['totalRatingI'] }},
                                    {{ $data['totalRatingJ'] }}, {{ $data['totalRatingK'] }},
                                    {{ $data['totalRatingL'] }}, {{ $data['totalRatingM'] }},
                                    {{ $data['totalRatingN'] }}, {{ $data['totalRatingO'] }},
                                    {{ $data['totalRatingP'] }}, {{ $data['totalRatingQ'] }}
                                ],
                                backgroundColor: ['rgba(54, 162, 235, 1)'],
                                borderColor: ['rgba(54, 162, 235, 1)'],
                                borderWidth: 1,
                                datalabels: {
                                    formatter: function(value) {
                                        return value + ' %';
                                    },
                                    anchor: 'end',
                                    align: 'top',
                                    color: 'black',
                                    font: {
                                        weight: 'bold'
                                    }
                                }
                            }]
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

        <script type="application/javascript">
            document.addEventListener("DOMContentLoaded",
                function() {
                    document.getElementById("KPChart").innerHTML = '<canvas id="KPChartinner"></canvas>';
                    var ctx = document.getElementById('KPChartinner').getContext('2d');
                    Chart.register(ChartDataLabels);
                    new Chart(ctx, {
                        type: 'polarArea',
                        data: {
                            labels: ['Gaji', 'Pangkat', 'Ketua', 'Prosedur Operasi', 'Rakan Sekerja',
                                'Sifat Sekerja', 'Komunikasi', 'Persekitaran'
                            ],
                            datasets: [{
                                label: 'Kepuasan Kerja',
                                data: [
                                    {{ $data['totalRatingBGaji'] }},
                                    {{ $data['totalRatingBPangkat'] }},
                                    {{ $data['totalRatingBKetua'] }},
                                    {{ $data['totalRatingBProsedurOperasi'] }},
                                    {{ $data['totalRatingBRakanSekerja'] }},
                                    {{ $data['totalRatingBSifatKerja'] }},
                                    {{ $data['totalRatingBKomunikasi'] }},
                                    {{ $data['totalRatingBPersekitaran'] }}
                                ],
                                backgroundColor: [
                                    'rgba(245, 117, 66, 1)',
                                    'rgba(245, 212, 66, 1)',
                                    'rgba(96, 245, 66, 1)',
                                    'rgba(35, 219, 201, 1)',
                                    'rgba(31, 91, 171, 1)',
                                    'rgba(120, 37, 184, 1)',
                                    'rgba(191, 21, 152, 1)',
                                    'rgba(237, 76, 95, 1)'
                                ],


                                datalabels: {
                                    formatter: function(value) {
                                        return value + ' %';
                                    },
                                    anchor: 'end',
                                    align: 'top',
                                    color: 'black',
                                    font: {
                                        weight: 'bold'
                                    }
                                }
                            }]
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

        <script type="application/javascript">
            document.addEventListener("DOMContentLoaded",
                function() {
                    document.getElementById("KKChart").innerHTML = '<canvas id="KKChartinner"></canvas>';
                    var ctx = document.getElementById('KKChartinner').getContext('2d');
                    Chart.register(ChartDataLabels);
                    new Chart(ctx, {
                        type: 'polarArea',
                        data: {
                            labels: ['Semangat', 'Dedikasi', 'Kesungguhan'],
                            datasets: [{
                                label: 'Keterlibatan Kerja',
                                data: [
                                    {{ $data['totalRatingFSemangat'] }},
                                    {{ $data['totalRatingFDedikasi'] }},
                                    {{ $data['totalRatingFKesungguhan'] }},
                                ],
                                backgroundColor: [
                                    'rgba(245, 117, 66, 1)',
                                    'rgba(245, 212, 66, 1)',
                                    'rgba(96, 245, 66, 1)'
                                ],


                                datalabels: {
                                    formatter: function(value) {
                                        return value + ' %';
                                    },
                                    anchor: 'end',
                                    align: 'top',
                                    color: 'black',
                                    font: {
                                        weight: 'bold'
                                    }
                                }
                            }]
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

        <script type="application/javascript">
            document.addEventListener("DOMContentLoaded",
                function() {
                    document.getElementById("PKChart").innerHTML = '<canvas id="PKChartinner"></canvas>';
                    var ctx = document.getElementById('PKChartinner').getContext('2d');
                    Chart.register(ChartDataLabels);
                    new Chart(ctx, {
                        type: 'polarArea',
                        data: {
                            labels: ['Prestasi Kerja', 'Prestasi Kontekstual', 'Tingkah Laku Kerja Tidak Produktif'],
                            datasets: [{
                                label: 'Prestasi Kerja',
                                data: [
                                    {{ $data['totalRatingGPrestasiTugas'] }},
                                    {{ $data['totalRatingGPrestasiKontekstual'] }},
                                    {{ $data['totalRatingGTingkahLakuKerjaTidakProduktif'] }}
                                ],
                                backgroundColor: [
                                    'rgba(245, 117, 66, 1)',
                                    'rgba(245, 212, 66, 1)',
                                    'rgba(96, 245, 66, 1)'
                                ],


                                datalabels: {
                                    formatter: function(value) {
                                        return value + ' %';
                                    },
                                    anchor: 'end',
                                    align: 'top',
                                    color: 'black',
                                    font: {
                                        weight: 'bold'
                                    }
                                }
                            }]
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

        <script type="application/javascript">
            document.addEventListener("DOMContentLoaded",
                function() {
                    document.getElementById("OBTChart").innerHTML = '<canvas id="OBTChartinner"></canvas>';
                    var ctx = document.getElementById('OBTChartinner').getContext('2d');
                    Chart.register(ChartDataLabels);
                    new Chart(ctx, {
                        type: 'polarArea',
                        data: {
                            labels: ['Kualiti Pengurusan', 'Penambahbaikan dan Pembaharuan Berterusan', 'Orientasi Jangka Panjang','Kualiti Pekerja','Keterbukaan dan Orientasi Tindakan'],
                            datasets: [{
                                label: 'OBT',
                                data: [
                                    {{ $data['totalRatingHKualitiPengurusan'] }},
                                    {{ $data['totalRatingHPPB'] }},
                                    {{ $data['totalRatingHOJP'] }},
                                    {{ $data['totalRatingHKP2'] }},
                                    {{ $data['totalRatingHKOT'] }}
                                ],
                                backgroundColor: [
                                    'rgba(245, 117, 66, 1)',
                                    'rgba(245, 212, 66, 1)',
                                    'rgba(96, 245, 66, 1)',
                                    'rgba(35, 219, 201, 1)',
                                    'rgba(31, 91, 171, 1)',
                                ],


                                datalabels: {
                                    formatter: function(value) {
                                        return value + ' %';
                                    },
                                    anchor: 'end',
                                    align: 'top',
                                    color: 'black',
                                    font: {
                                        weight: 'bold'
                                    }
                                }
                            }]
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
    @endif

@endsection
