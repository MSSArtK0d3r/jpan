<?php

namespace App\Exports;

use App\Models\Entry;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;


class EntryExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Entry::all();
        return DB::table('entries')->select(
        'email',
        'phone',
        'umur',
        'jantina',
        'agama',
        'lainAgamaDetail',
        'bangsa',
        'lainBangsaDetail',
        'daerahBertugas',
        'status',
        'bilAnak',
        'bilIsiRumah',
        'tinggalBersamaPasangan',
        'bilBilikTidur',
        'education',
        'agensi',
        'kumpulanPerkhidmatan',
        'tarafJawatan',
        'skimPerkhidmatan',
        'gredJawatan',
        'gajiKasarBulanan',
        'gajiBersihBulanan',
        'kesukaranGaji',
        'tempohPerkhidmatanTahun',
        'tempohPerkhidmatanBulan',
        'masalahKesihatan',
        'masalahKesihatanDetail',
        'tempatTinggal',
        'tempatTinggalDetail',
        'tinggalBersama',
        'tinggalBersamaDetail',
        'kenderaanKerja',
        'kenderaanKerjaDetail',
        'penilai',
        'lntp',
        'B1',
        'B2',
        'B3',
        'B4',
        'B5',
        'B6',
        'B7',
        'B8',
        'B9',
        'B10',
        'B11',
        'B12',
        'B13',
        'B14',
        'B15',
        'B16',
        'B17',
        'B18',
        'C1',
        'C2',
        'D1',
        'E1',
        'E2',
        'E3',
        'E4',
        'E5',
        'E6',
        'F1',
        'F2',
        'F3',
        'F4',
        'F5',
        'F6',
        'G1',
        'G2',
        'G3',
        'G4',
        'G5',
        'G6',
        'G7',
        'G8',
        'G9',
        'G10',
        'H1',
        'H2',
        'H3',
        'H4',
        'H5',
        'H6',
        'H7',
        'H8',
        'H9',
        'H10',
        'H11',
        'H12',
        'H13',
        'H14',
        'H15',
        'H16',
        'H17',
        'H18',
        'H19',
        'H20',
        'H21',
        'H22',
        'H23',
        'H24',
        'H25',
        'H26',
        'H27',
        'H28',
        'H29',
        'H30',
        'H31',
        'H32',
        'H33',
        'H34',
        'H35',
        'I1',
        'I2',
        'I3',
        'J1',
        'J2',
        'J3',
        'J4',
        'J5',
        'J6',
        'J7',
        'J8',
        'J9',
        'J10',
        'K1',
        'K2',
        'K3',
        'K4',
        'K5',
        'K6',
        'K7',
        'K8',
        'K9',
        'K10',
        'L1',
        'L2',
        'L3',
        'L4',
        'M1',
        'M2',
        'M3',
        'N1',
        'N2',
        'N3',
        'N4',
        'O1',
        'O2',
        'O3',
        'O4',
        'O5',
        'P1',
        'P2',
        'Q1',
        'Q2',
        'Q3',
        'Q4',
        'komen',
        'cadangan',
        'start_at',
        'finish_at',
        'bankCompany',
        'bankAccNo',
        'bankFullName'
        )->where('completedR', 1)
        ->where('verified', 'verified')
        ->get();
    }

    public function headings(): array
    {
        return [
            'Email',
            'Phone',
            'Umur',
            'Jantina',
            'Agama',
            'Agama (Nyatakan)',
            'Bangsa',
            'Bangsa (Nyatakan)',
            'Daerah bertugas',
            'Status',
            'Bilangan anak',
            'Bilangan isi rumah',
            'Tingal bersama pasangan',
            'Bilangan bilik tidur',
            'Tahap pendidikan',
            'Agensi',
            'Kumpulan Perkhidmatan',
            'Taraf Jawatan',
            'Skim Perkhidmatan',
            'Gred Jawatan',
            'Gaji kasar (Bulanan)',
            'Gaji bersih (Bulanan)',
            'Kesukaran Gaji',
            'Tempoh Perkhidmatan (Tahun)',
            'Tempoh Perkidmatan (Bulan)',
            'Masalah kesihatan',
            'Nyatakan masalah kesihatan',
            'Tempat tinggal',
            'Tempat tinggal (Nyatakan)',
            'Tinggal bersama',
            'Tingal bersama (Nyatakan)',
            'Kenderaan kerja',
            'Kenderaan kerja (Nyatakan)',
            'Jumlah Penilai',
            'LNTP',
            'B1',
            'B2',
            'B3',
            'B4',
            'B5',
            'B6',
            'B7',
            'B8',
            'B9',
            'B10',
            'B11',
            'B12',
            'B13',
            'B14',
            'B15',
            'B16',
            'B17',
            'B18',
            'C1',
            'C2',
            'D1',
            'E1',
            'E2',
            'E3',
            'E4',
            'E5',
            'E6',
            'F1',
            'F2',
            'F3',
            'F4',
            'F5',
            'F6',
            'G1',
            'G2',
            'G3',
            'G4',
            'G5',
            'G6',
            'G7',
            'G8',
            'G9',
            'G10',
            'H1',
            'H2',
            'H3',
            'H4',
            'H5',
            'H6',
            'H7',
            'H8',
            'H9',
            'H10',
            'H11',
            'H12',
            'H13',
            'H14',
            'H15',
            'H16',
            'H17',
            'H18',
            'H19',
            'H20',
            'H21',
            'H22',
            'H23',
            'H24',
            'H25',
            'H26',
            'H27',
            'H28',
            'H29',
            'H30',
            'H31',
            'H32',
            'H33',
            'H34',
            'H35',
            'I1',
            'I2',
            'I3',
            'J1',
            'J2',
            'J3',
            'J4',
            'J5',
            'J6',
            'J7',
            'J8',
            'J9',
            'J10',
            'K1',
            'K2',
            'K3',
            'K4',
            'K5',
            'K6',
            'K7',
            'K8',
            'K9',
            'K10',
            'L1',
            'L2',
            'L3',
            'L4',
            'M1',
            'M2',
            'M3',
            'N1',
            'N2',
            'N3',
            'N4',
            'O1',
            'O2',
            'O3',
            'O4',
            'O5',
            'P1',
            'P2',
            'Q1',
            'Q2',
            'Q3',
            'Q4',
            'komen',
            'cadangan',
            'Tarikh/Masa mula menjawap',
            'Tarikh/masa lengkap menjawap',
            'Nama syarikat bank',
            'Nombor akaun bank',
            'Nama Penuh'
        ];
    }


}
