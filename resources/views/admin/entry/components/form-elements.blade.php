<div class="form-group row align-items-center" :class="{'has-danger': errors.has('umur'), 'has-success': fields.umur && fields.umur.valid }">
    <label for="umur" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.umur') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.umur" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('umur'), 'form-control-success': fields.umur && fields.umur.valid}" id="umur" name="umur" placeholder="{{ trans('admin.entry.columns.umur') }}">
        <div v-if="errors.has('umur')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('umur') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B34'), 'has-success': fields.B34 && fields.B34.valid }">
    <label for="B34" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B34') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B34" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B34'), 'form-control-success': fields.B34 && fields.B34.valid}" id="B34" name="B34" placeholder="{{ trans('admin.entry.columns.B34') }}">
        <div v-if="errors.has('B34')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B34') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B21'), 'has-success': fields.B21 && fields.B21.valid }">
    <label for="B21" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B21') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B21" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B21'), 'form-control-success': fields.B21 && fields.B21.valid}" id="B21" name="B21" placeholder="{{ trans('admin.entry.columns.B21') }}">
        <div v-if="errors.has('B21')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B21') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B22'), 'has-success': fields.B22 && fields.B22.valid }">
    <label for="B22" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B22') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B22" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B22'), 'form-control-success': fields.B22 && fields.B22.valid}" id="B22" name="B22" placeholder="{{ trans('admin.entry.columns.B22') }}">
        <div v-if="errors.has('B22')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B22') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B23'), 'has-success': fields.B23 && fields.B23.valid }">
    <label for="B23" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B23') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B23" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B23'), 'form-control-success': fields.B23 && fields.B23.valid}" id="B23" name="B23" placeholder="{{ trans('admin.entry.columns.B23') }}">
        <div v-if="errors.has('B23')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B23') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B24'), 'has-success': fields.B24 && fields.B24.valid }">
    <label for="B24" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B24') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B24" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B24'), 'form-control-success': fields.B24 && fields.B24.valid}" id="B24" name="B24" placeholder="{{ trans('admin.entry.columns.B24') }}">
        <div v-if="errors.has('B24')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B24') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B25'), 'has-success': fields.B25 && fields.B25.valid }">
    <label for="B25" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B25') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B25" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B25'), 'form-control-success': fields.B25 && fields.B25.valid}" id="B25" name="B25" placeholder="{{ trans('admin.entry.columns.B25') }}">
        <div v-if="errors.has('B25')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B25') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B26'), 'has-success': fields.B26 && fields.B26.valid }">
    <label for="B26" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B26') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B26" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B26'), 'form-control-success': fields.B26 && fields.B26.valid}" id="B26" name="B26" placeholder="{{ trans('admin.entry.columns.B26') }}">
        <div v-if="errors.has('B26')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B26') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B27'), 'has-success': fields.B27 && fields.B27.valid }">
    <label for="B27" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B27') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B27" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B27'), 'form-control-success': fields.B27 && fields.B27.valid}" id="B27" name="B27" placeholder="{{ trans('admin.entry.columns.B27') }}">
        <div v-if="errors.has('B27')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B27') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B28'), 'has-success': fields.B28 && fields.B28.valid }">
    <label for="B28" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B28') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B28" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B28'), 'form-control-success': fields.B28 && fields.B28.valid}" id="B28" name="B28" placeholder="{{ trans('admin.entry.columns.B28') }}">
        <div v-if="errors.has('B28')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B28') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B29'), 'has-success': fields.B29 && fields.B29.valid }">
    <label for="B29" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B29') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B29" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B29'), 'form-control-success': fields.B29 && fields.B29.valid}" id="B29" name="B29" placeholder="{{ trans('admin.entry.columns.B29') }}">
        <div v-if="errors.has('B29')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B29') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B30'), 'has-success': fields.B30 && fields.B30.valid }">
    <label for="B30" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B30') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B30" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B30'), 'form-control-success': fields.B30 && fields.B30.valid}" id="B30" name="B30" placeholder="{{ trans('admin.entry.columns.B30') }}">
        <div v-if="errors.has('B30')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B30') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B31'), 'has-success': fields.B31 && fields.B31.valid }">
    <label for="B31" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B31') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B31" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B31'), 'form-control-success': fields.B31 && fields.B31.valid}" id="B31" name="B31" placeholder="{{ trans('admin.entry.columns.B31') }}">
        <div v-if="errors.has('B31')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B31') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B32'), 'has-success': fields.B32 && fields.B32.valid }">
    <label for="B32" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B32') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B32" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B32'), 'form-control-success': fields.B32 && fields.B32.valid}" id="B32" name="B32" placeholder="{{ trans('admin.entry.columns.B32') }}">
        <div v-if="errors.has('B32')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B32') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B33'), 'has-success': fields.B33 && fields.B33.valid }">
    <label for="B33" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B33') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B33" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B33'), 'form-control-success': fields.B33 && fields.B33.valid}" id="B33" name="B33" placeholder="{{ trans('admin.entry.columns.B33') }}">
        <div v-if="errors.has('B33')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B33') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B35'), 'has-success': fields.B35 && fields.B35.valid }">
    <label for="B35" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B35') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B35" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B35'), 'form-control-success': fields.B35 && fields.B35.valid}" id="B35" name="B35" placeholder="{{ trans('admin.entry.columns.B35') }}">
        <div v-if="errors.has('B35')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B35') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B19'), 'has-success': fields.B19 && fields.B19.valid }">
    <label for="B19" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B19') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B19" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B19'), 'form-control-success': fields.B19 && fields.B19.valid}" id="B19" name="B19" placeholder="{{ trans('admin.entry.columns.B19') }}">
        <div v-if="errors.has('B19')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B19') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B36'), 'has-success': fields.B36 && fields.B36.valid }">
    <label for="B36" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B36') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B36" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B36'), 'form-control-success': fields.B36 && fields.B36.valid}" id="B36" name="B36" placeholder="{{ trans('admin.entry.columns.B36') }}">
        <div v-if="errors.has('B36')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B36') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B37'), 'has-success': fields.B37 && fields.B37.valid }">
    <label for="B37" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B37') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B37" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B37'), 'form-control-success': fields.B37 && fields.B37.valid}" id="B37" name="B37" placeholder="{{ trans('admin.entry.columns.B37') }}">
        <div v-if="errors.has('B37')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B37') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B38'), 'has-success': fields.B38 && fields.B38.valid }">
    <label for="B38" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B38') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B38" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B38'), 'form-control-success': fields.B38 && fields.B38.valid}" id="B38" name="B38" placeholder="{{ trans('admin.entry.columns.B38') }}">
        <div v-if="errors.has('B38')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B38') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B39'), 'has-success': fields.B39 && fields.B39.valid }">
    <label for="B39" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B39') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B39" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B39'), 'form-control-success': fields.B39 && fields.B39.valid}" id="B39" name="B39" placeholder="{{ trans('admin.entry.columns.B39') }}">
        <div v-if="errors.has('B39')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B39') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B40'), 'has-success': fields.B40 && fields.B40.valid }">
    <label for="B40" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B40') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B40" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B40'), 'form-control-success': fields.B40 && fields.B40.valid}" id="B40" name="B40" placeholder="{{ trans('admin.entry.columns.B40') }}">
        <div v-if="errors.has('B40')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B40') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B41'), 'has-success': fields.B41 && fields.B41.valid }">
    <label for="B41" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B41') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B41" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B41'), 'form-control-success': fields.B41 && fields.B41.valid}" id="B41" name="B41" placeholder="{{ trans('admin.entry.columns.B41') }}">
        <div v-if="errors.has('B41')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B41') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B42'), 'has-success': fields.B42 && fields.B42.valid }">
    <label for="B42" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B42') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B42" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B42'), 'form-control-success': fields.B42 && fields.B42.valid}" id="B42" name="B42" placeholder="{{ trans('admin.entry.columns.B42') }}">
        <div v-if="errors.has('B42')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B42') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B43'), 'has-success': fields.B43 && fields.B43.valid }">
    <label for="B43" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B43') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B43" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B43'), 'form-control-success': fields.B43 && fields.B43.valid}" id="B43" name="B43" placeholder="{{ trans('admin.entry.columns.B43') }}">
        <div v-if="errors.has('B43')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B43') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B44'), 'has-success': fields.B44 && fields.B44.valid }">
    <label for="B44" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B44') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B44" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B44'), 'form-control-success': fields.B44 && fields.B44.valid}" id="B44" name="B44" placeholder="{{ trans('admin.entry.columns.B44') }}">
        <div v-if="errors.has('B44')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B44') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B45'), 'has-success': fields.B45 && fields.B45.valid }">
    <label for="B45" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B45') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B45" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B45'), 'form-control-success': fields.B45 && fields.B45.valid}" id="B45" name="B45" placeholder="{{ trans('admin.entry.columns.B45') }}">
        <div v-if="errors.has('B45')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B45') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('C1'), 'has-success': fields.C1 && fields.C1.valid }">
    <label for="C1" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.C1') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.C1" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('C1'), 'form-control-success': fields.C1 && fields.C1.valid}" id="C1" name="C1" placeholder="{{ trans('admin.entry.columns.C1') }}">
        <div v-if="errors.has('C1')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('C1') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('C2'), 'has-success': fields.C2 && fields.C2.valid }">
    <label for="C2" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.C2') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.C2" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('C2'), 'form-control-success': fields.C2 && fields.C2.valid}" id="C2" name="C2" placeholder="{{ trans('admin.entry.columns.C2') }}">
        <div v-if="errors.has('C2')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('C2') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('C3'), 'has-success': fields.C3 && fields.C3.valid }">
    <label for="C3" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.C3') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.C3" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('C3'), 'form-control-success': fields.C3 && fields.C3.valid}" id="C3" name="C3" placeholder="{{ trans('admin.entry.columns.C3') }}">
        <div v-if="errors.has('C3')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('C3') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('C4'), 'has-success': fields.C4 && fields.C4.valid }">
    <label for="C4" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.C4') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.C4" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('C4'), 'form-control-success': fields.C4 && fields.C4.valid}" id="C4" name="C4" placeholder="{{ trans('admin.entry.columns.C4') }}">
        <div v-if="errors.has('C4')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('C4') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B20'), 'has-success': fields.B20 && fields.B20.valid }">
    <label for="B20" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B20') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B20" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B20'), 'form-control-success': fields.B20 && fields.B20.valid}" id="B20" name="B20" placeholder="{{ trans('admin.entry.columns.B20') }}">
        <div v-if="errors.has('B20')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B20') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B18'), 'has-success': fields.B18 && fields.B18.valid }">
    <label for="B18" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B18') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B18" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B18'), 'form-control-success': fields.B18 && fields.B18.valid}" id="B18" name="B18" placeholder="{{ trans('admin.entry.columns.B18') }}">
        <div v-if="errors.has('B18')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B18') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jantina'), 'has-success': fields.jantina && fields.jantina.valid }">
    <label for="jantina" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.jantina') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.jantina" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('jantina'), 'form-control-success': fields.jantina && fields.jantina.valid}" id="jantina" name="jantina" placeholder="{{ trans('admin.entry.columns.jantina') }}">
        <div v-if="errors.has('jantina')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jantina') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B1'), 'has-success': fields.B1 && fields.B1.valid }">
    <label for="B1" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B1') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B1" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B1'), 'form-control-success': fields.B1 && fields.B1.valid}" id="B1" name="B1" placeholder="{{ trans('admin.entry.columns.B1') }}">
        <div v-if="errors.has('B1')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B1') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('agama'), 'has-success': fields.agama && fields.agama.valid }">
    <label for="agama" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.agama') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.agama" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('agama'), 'form-control-success': fields.agama && fields.agama.valid}" id="agama" name="agama" placeholder="{{ trans('admin.entry.columns.agama') }}">
        <div v-if="errors.has('agama')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('agama') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('bangsa'), 'has-success': fields.bangsa && fields.bangsa.valid }">
    <label for="bangsa" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.bangsa') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.bangsa" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('bangsa'), 'form-control-success': fields.bangsa && fields.bangsa.valid}" id="bangsa" name="bangsa" placeholder="{{ trans('admin.entry.columns.bangsa') }}">
        <div v-if="errors.has('bangsa')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('bangsa') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('status'), 'has-success': fields.status && fields.status.valid }">
    <label for="status" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.status') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.status" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('status'), 'form-control-success': fields.status && fields.status.valid}" id="status" name="status" placeholder="{{ trans('admin.entry.columns.status') }}">
        <div v-if="errors.has('status')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('status') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('bilAnak'), 'has-success': fields.bilAnak && fields.bilAnak.valid }">
    <label for="bilAnak" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.bilAnak') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.bilAnak" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('bilAnak'), 'form-control-success': fields.bilAnak && fields.bilAnak.valid}" id="bilAnak" name="bilAnak" placeholder="{{ trans('admin.entry.columns.bilAnak') }}">
        <div v-if="errors.has('bilAnak')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('bilAnak') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tinggalBersamaPasangan'), 'has-success': fields.tinggalBersamaPasangan && fields.tinggalBersamaPasangan.valid }">
    <label for="tinggalBersamaPasangan" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.tinggalBersamaPasangan') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tinggalBersamaPasangan" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tinggalBersamaPasangan'), 'form-control-success': fields.tinggalBersamaPasangan && fields.tinggalBersamaPasangan.valid}" id="tinggalBersamaPasangan" name="tinggalBersamaPasangan" placeholder="{{ trans('admin.entry.columns.tinggalBersamaPasangan') }}">
        <div v-if="errors.has('tinggalBersamaPasangan')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tinggalBersamaPasangan') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('education'), 'has-success': fields.education && fields.education.valid }">
    <label for="education" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.education') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.education" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('education'), 'form-control-success': fields.education && fields.education.valid}" id="education" name="education" placeholder="{{ trans('admin.entry.columns.education') }}">
        <div v-if="errors.has('education')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('education') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jumlahGaji'), 'has-success': fields.jumlahGaji && fields.jumlahGaji.valid }">
    <label for="jumlahGaji" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.jumlahGaji') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.jumlahGaji" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('jumlahGaji'), 'form-control-success': fields.jumlahGaji && fields.jumlahGaji.valid}" id="jumlahGaji" name="jumlahGaji" placeholder="{{ trans('admin.entry.columns.jumlahGaji') }}">
        <div v-if="errors.has('jumlahGaji')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jumlahGaji') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('kesukaranGaji'), 'has-success': fields.kesukaranGaji && fields.kesukaranGaji.valid }">
    <label for="kesukaranGaji" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.kesukaranGaji') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.kesukaranGaji" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('kesukaranGaji'), 'form-control-success': fields.kesukaranGaji && fields.kesukaranGaji.valid}" id="kesukaranGaji" name="kesukaranGaji" placeholder="{{ trans('admin.entry.columns.kesukaranGaji') }}">
        <div v-if="errors.has('kesukaranGaji')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('kesukaranGaji') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('pernahTukarKerja'), 'has-success': fields.pernahTukarKerja && fields.pernahTukarKerja.valid }">
    <label for="pernahTukarKerja" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.pernahTukarKerja') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.pernahTukarKerja" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('pernahTukarKerja'), 'form-control-success': fields.pernahTukarKerja && fields.pernahTukarKerja.valid}" id="pernahTukarKerja" name="pernahTukarKerja" placeholder="{{ trans('admin.entry.columns.pernahTukarKerja') }}">
        <div v-if="errors.has('pernahTukarKerja')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('pernahTukarKerja') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('masalahKesihatan'), 'has-success': fields.masalahKesihatan && fields.masalahKesihatan.valid }">
    <label for="masalahKesihatan" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.masalahKesihatan') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.masalahKesihatan" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('masalahKesihatan'), 'form-control-success': fields.masalahKesihatan && fields.masalahKesihatan.valid}" id="masalahKesihatan" name="masalahKesihatan" placeholder="{{ trans('admin.entry.columns.masalahKesihatan') }}">
        <div v-if="errors.has('masalahKesihatan')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('masalahKesihatan') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tempatTinggal'), 'has-success': fields.tempatTinggal && fields.tempatTinggal.valid }">
    <label for="tempatTinggal" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.tempatTinggal') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tempatTinggal" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tempatTinggal'), 'form-control-success': fields.tempatTinggal && fields.tempatTinggal.valid}" id="tempatTinggal" name="tempatTinggal" placeholder="{{ trans('admin.entry.columns.tempatTinggal') }}">
        <div v-if="errors.has('tempatTinggal')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tempatTinggal') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tinggalBersama'), 'has-success': fields.tinggalBersama && fields.tinggalBersama.valid }">
    <label for="tinggalBersama" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.tinggalBersama') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tinggalBersama" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tinggalBersama'), 'form-control-success': fields.tinggalBersama && fields.tinggalBersama.valid}" id="tinggalBersama" name="tinggalBersama" placeholder="{{ trans('admin.entry.columns.tinggalBersama') }}">
        <div v-if="errors.has('tinggalBersama')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tinggalBersama') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('kenderaanKerja'), 'has-success': fields.kenderaanKerja && fields.kenderaanKerja.valid }">
    <label for="kenderaanKerja" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.kenderaanKerja') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.kenderaanKerja" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('kenderaanKerja'), 'form-control-success': fields.kenderaanKerja && fields.kenderaanKerja.valid}" id="kenderaanKerja" name="kenderaanKerja" placeholder="{{ trans('admin.entry.columns.kenderaanKerja') }}">
        <div v-if="errors.has('kenderaanKerja')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('kenderaanKerja') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B2'), 'has-success': fields.B2 && fields.B2.valid }">
    <label for="B2" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B2') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B2" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B2'), 'form-control-success': fields.B2 && fields.B2.valid}" id="B2" name="B2" placeholder="{{ trans('admin.entry.columns.B2') }}">
        <div v-if="errors.has('B2')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B2') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B17'), 'has-success': fields.B17 && fields.B17.valid }">
    <label for="B17" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B17') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B17" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B17'), 'form-control-success': fields.B17 && fields.B17.valid}" id="B17" name="B17" placeholder="{{ trans('admin.entry.columns.B17') }}">
        <div v-if="errors.has('B17')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B17') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B3'), 'has-success': fields.B3 && fields.B3.valid }">
    <label for="B3" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B3') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B3" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B3'), 'form-control-success': fields.B3 && fields.B3.valid}" id="B3" name="B3" placeholder="{{ trans('admin.entry.columns.B3') }}">
        <div v-if="errors.has('B3')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B3') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B4'), 'has-success': fields.B4 && fields.B4.valid }">
    <label for="B5" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B4') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B4" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B4'), 'form-control-success': fields.B4 && fields.B4.valid}" id="B5" name="B5" placeholder="{{ trans('admin.entry.columns.B4') }}">
        <div v-if="errors.has('B4')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B4') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B5'), 'has-success': fields.B5 && fields.B5.valid }">
    <label for="B5" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B5') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B5" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B5'), 'form-control-success': fields.B5 && fields.B5.valid}" id="B5" name="B5" placeholder="{{ trans('admin.entry.columns.B5') }}">
        <div v-if="errors.has('B5')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B5') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B6'), 'has-success': fields.B6 && fields.B6.valid }">
    <label for="B6" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B6') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B6" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B6'), 'form-control-success': fields.B6 && fields.B6.valid}" id="B6" name="B6" placeholder="{{ trans('admin.entry.columns.B6') }}">
        <div v-if="errors.has('B6')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B6') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B7'), 'has-success': fields.B7 && fields.B7.valid }">
    <label for="B7" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B7') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B7" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B7'), 'form-control-success': fields.B7 && fields.B7.valid}" id="B7" name="B7" placeholder="{{ trans('admin.entry.columns.B7') }}">
        <div v-if="errors.has('B7')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B7') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B8'), 'has-success': fields.B8 && fields.B8.valid }">
    <label for="B8" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B8') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B8" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B8'), 'form-control-success': fields.B8 && fields.B8.valid}" id="B8" name="B8" placeholder="{{ trans('admin.entry.columns.B8') }}">
        <div v-if="errors.has('B8')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B8') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B9'), 'has-success': fields.B9 && fields.B9.valid }">
    <label for="B9" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B9') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B9" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B9'), 'form-control-success': fields.B9 && fields.B9.valid}" id="B9" name="B9" placeholder="{{ trans('admin.entry.columns.B9') }}">
        <div v-if="errors.has('B9')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B9') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B10'), 'has-success': fields.B10 && fields.B10.valid }">
    <label for="B10" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B10') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B10" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B10'), 'form-control-success': fields.B10 && fields.B10.valid}" id="B10" name="B10" placeholder="{{ trans('admin.entry.columns.B10') }}">
        <div v-if="errors.has('B10')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B10') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B11'), 'has-success': fields.B11 && fields.B11.valid }">
    <label for="B11" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B11') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B11" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B11'), 'form-control-success': fields.B11 && fields.B11.valid}" id="B11" name="B11" placeholder="{{ trans('admin.entry.columns.B11') }}">
        <div v-if="errors.has('B11')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B11') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B12'), 'has-success': fields.B12 && fields.B12.valid }">
    <label for="B12" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B12') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B12" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B12'), 'form-control-success': fields.B12 && fields.B12.valid}" id="B12" name="B12" placeholder="{{ trans('admin.entry.columns.B12') }}">
        <div v-if="errors.has('B12')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B12') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B13'), 'has-success': fields.B13 && fields.B13.valid }">
    <label for="B13" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B13') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B13" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B13'), 'form-control-success': fields.B13 && fields.B13.valid}" id="B13" name="B13" placeholder="{{ trans('admin.entry.columns.B13') }}">
        <div v-if="errors.has('B13')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B13') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B14'), 'has-success': fields.B14 && fields.B14.valid }">
    <label for="B14" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B14') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B14" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B14'), 'form-control-success': fields.B14 && fields.B14.valid}" id="B14" name="B14" placeholder="{{ trans('admin.entry.columns.B14') }}">
        <div v-if="errors.has('B14')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B14') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B15'), 'has-success': fields.B15 && fields.B15.valid }">
    <label for="B15" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B15') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B15" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B15'), 'form-control-success': fields.B15 && fields.B15.valid}" id="B15" name="B15" placeholder="{{ trans('admin.entry.columns.B15') }}">
        <div v-if="errors.has('B15')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B15') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('B16'), 'has-success': fields.B16 && fields.B16.valid }">
    <label for="B16" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.B16') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.B16" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('B16'), 'form-control-success': fields.B16 && fields.B16.valid}" id="B16" name="B16" placeholder="{{ trans('admin.entry.columns.B16') }}">
        <div v-if="errors.has('B16')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('B16') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('C5'), 'has-success': fields.C5 && fields.C5.valid }">
    <label for="C5" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.entry.columns.C5') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.C5" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('C5'), 'form-control-success': fields.C5 && fields.C5.valid}" id="C5" name="C5" placeholder="{{ trans('admin.entry.columns.C5') }}">
        <div v-if="errors.has('C5')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('C5') }}</div>
    </div>
</div>


