<?php

namespace App\Http\Requests\Admin\Entry;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreEntry extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.entry.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'umur' => ['required', 'string'],
            'jantina' => ['required', 'string'],
            'agama' => ['required', 'string'],
            'bangsa' => ['required', 'string'],
            'status' => ['required', 'string'],
            'bilAnak' => ['required', 'string'],
            'tinggalBersamaPasangan' => ['required', 'string'],
            'education' => ['required', 'string'],
            'jumlahGaji' => ['required', 'string'],
            'kesukaranGaji' => ['required', 'string'],
            'pernahTukarKerja' => ['required', 'string'],
            'masalahKesihatan' => ['required', 'string'],
            'tempatTinggal' => ['required', 'string'],
            'tinggalBersama' => ['required', 'string'],
            'kenderaanKerja' => ['required', 'string'],
            'B1' => ['required', 'string'],
            'B2' => ['required', 'string'],
            'B3' => ['required', 'string'],
            'B4' => ['required', 'string'],
            'B5' => ['required', 'string'],
            'B6' => ['required', 'string'],
            'B7' => ['required', 'string'],
            'B8' => ['required', 'string'],
            'B9' => ['required', 'string'],
            'B10' => ['required', 'string'],
            'B11' => ['required', 'string'],
            'B12' => ['required', 'string'],
            'B13' => ['required', 'string'],
            'B14' => ['required', 'string'],
            'B15' => ['required', 'string'],
            'B16' => ['required', 'string'],
            'B17' => ['required', 'string'],
            'B18' => ['required', 'string'],
            'B19' => ['required', 'string'],
            'B20' => ['required', 'string'],
            'B21' => ['required', 'string'],
            'B22' => ['required', 'string'],
            'B23' => ['required', 'string'],
            'B24' => ['required', 'string'],
            'B25' => ['required', 'string'],
            'B26' => ['required', 'string'],
            'B27' => ['required', 'string'],
            'B28' => ['required', 'string'],
            'B29' => ['required', 'string'],
            'B30' => ['required', 'string'],
            'B31' => ['required', 'string'],
            'B32' => ['required', 'string'],
            'B33' => ['required', 'string'],
            'B34' => ['required', 'string'],
            'B35' => ['required', 'string'],
            'B36' => ['required', 'string'],
            'B37' => ['required', 'string'],
            'B38' => ['required', 'string'],
            'B39' => ['required', 'string'],
            'B40' => ['required', 'string'],
            'B41' => ['required', 'string'],
            'B42' => ['required', 'string'],
            'B43' => ['required', 'string'],
            'B44' => ['required', 'string'],
            'B45' => ['required', 'string'],
            'C1' => ['required', 'string'],
            'C2' => ['required', 'string'],
            'C3' => ['required', 'string'],
            'C4' => ['required', 'string'],
            'C5' => ['required', 'string'],
            
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
