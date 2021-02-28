<?php

namespace App\Http\Requests\Admin\Entry;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateEntry extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.entry.edit', $this->entry);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'umur' => ['sometimes', 'string'],
            'jantina' => ['sometimes', 'string'],
            'agama' => ['sometimes', 'string'],
            'bangsa' => ['sometimes', 'string'],
            'status' => ['sometimes', 'string'],
            'bilAnak' => ['sometimes', 'string'],
            'tinggalBersamaPasangan' => ['sometimes', 'string'],
            'education' => ['sometimes', 'string'],
            'jumlahGaji' => ['sometimes', 'string'],
            'kesukaranGaji' => ['sometimes', 'string'],
            'pernahTukarKerja' => ['sometimes', 'string'],
            'masalahKesihatan' => ['sometimes', 'string'],
            'tempatTinggal' => ['sometimes', 'string'],
            'tinggalBersama' => ['sometimes', 'string'],
            'kenderaanKerja' => ['sometimes', 'string'],
            'B1' => ['sometimes', 'string'],
            'B2' => ['sometimes', 'string'],
            'B3' => ['sometimes', 'string'],
            'B4' => ['sometimes', 'string'],
            'B5' => ['sometimes', 'string'],
            'B6' => ['sometimes', 'string'],
            'B7' => ['sometimes', 'string'],
            'B8' => ['sometimes', 'string'],
            'B9' => ['sometimes', 'string'],
            'B10' => ['sometimes', 'string'],
            'B11' => ['sometimes', 'string'],
            'B12' => ['sometimes', 'string'],
            'B13' => ['sometimes', 'string'],
            'B14' => ['sometimes', 'string'],
            'B15' => ['sometimes', 'string'],
            'B16' => ['sometimes', 'string'],
            'B17' => ['sometimes', 'string'],
            'B18' => ['sometimes', 'string'],
            'B19' => ['sometimes', 'string'],
            'B20' => ['sometimes', 'string'],
            'B21' => ['sometimes', 'string'],
            'B22' => ['sometimes', 'string'],
            'B23' => ['sometimes', 'string'],
            'B24' => ['sometimes', 'string'],
            'B25' => ['sometimes', 'string'],
            'B26' => ['sometimes', 'string'],
            'B27' => ['sometimes', 'string'],
            'B28' => ['sometimes', 'string'],
            'B29' => ['sometimes', 'string'],
            'B30' => ['sometimes', 'string'],
            'B31' => ['sometimes', 'string'],
            'B32' => ['sometimes', 'string'],
            'B33' => ['sometimes', 'string'],
            'B34' => ['sometimes', 'string'],
            'B35' => ['sometimes', 'string'],
            'B36' => ['sometimes', 'string'],
            'B37' => ['sometimes', 'string'],
            'B38' => ['sometimes', 'string'],
            'B39' => ['sometimes', 'string'],
            'B40' => ['sometimes', 'string'],
            'B41' => ['sometimes', 'string'],
            'B42' => ['sometimes', 'string'],
            'B43' => ['sometimes', 'string'],
            'B44' => ['sometimes', 'string'],
            'B45' => ['sometimes', 'string'],
            'C1' => ['sometimes', 'string'],
            'C2' => ['sometimes', 'string'],
            'C3' => ['sometimes', 'string'],
            'C4' => ['sometimes', 'string'],
            'C5' => ['sometimes', 'string'],
            
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
