<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
        'umur',
        'jantina',
        'agama',
        'bangsa',
        'status',
        'bilAnak',
        'tinggalBersamaPasangan',
        'education',
        'jumlahGaji',
        'kesukaranGaji',
        'pernahTukarKerja',
        'masalahKesihatan',
        'tempatTinggal',
        'tinggalBersama',
        'kenderaanKerja',
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
        'B19',
        'B20',
        'B21',
        'B22',
        'B23',
        'B24',
        'B25',
        'B26',
        'B27',
        'B28',
        'B29',
        'B30',
        'B31',
        'B32',
        'B33',
        'B34',
        'B35',
        'B36',
        'B37',
        'B38',
        'B39',
        'B40',
        'B41',
        'B42',
        'B43',
        'B44',
        'B45',
        'C1',
        'C2',
        'C3',
        'C4',
        'C5',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/entries/'.$this->getKey());
    }
}
