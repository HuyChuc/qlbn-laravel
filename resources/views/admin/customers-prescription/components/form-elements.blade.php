<div class="form-group row align-items-center" :class="{'has-danger': errors.has('full_name'), 'has-success': fields.full_name && fields.full_name.valid }">
    <label for="full_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.full_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.full_name" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('full_name'), 'form-control-success': fields.full_name && fields.full_name.valid}" id="full_name" name="full_name" placeholder="{{ trans('admin.customers-prescription.columns.full_name') }}">
        <div v-if="errors.has('full_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('full_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T1'), 'has-success': fields.T1 && fields.T1.valid }">
    <label for="T1" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T1') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T1" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T1'), 'form-control-success': fields.T1 && fields.T1.valid}" id="T1" name="T1" placeholder="{{ trans('admin.customers-prescription.columns.T1') }}">
        <div v-if="errors.has('T1')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T1') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T2'), 'has-success': fields.T2 && fields.T2.valid }">
    <label for="T2" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T2') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T2" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T2'), 'form-control-success': fields.T2 && fields.T2.valid}" id="T2" name="T2" placeholder="{{ trans('admin.customers-prescription.columns.T2') }}">
        <div v-if="errors.has('T2')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T2') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T3'), 'has-success': fields.T3 && fields.T3.valid }">
    <label for="T3" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T3') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T3" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T3'), 'form-control-success': fields.T3 && fields.T3.valid}" id="T3" name="T3" placeholder="{{ trans('admin.customers-prescription.columns.T3') }}">
        <div v-if="errors.has('T3')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T3') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T4'), 'has-success': fields.T4 && fields.T4.valid }">
    <label for="T4" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T4') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T4" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T4'), 'form-control-success': fields.T4 && fields.T4.valid}" id="T4" name="T4" placeholder="{{ trans('admin.customers-prescription.columns.T4') }}">
        <div v-if="errors.has('T4')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T4') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T5'), 'has-success': fields.T5 && fields.T5.valid }">
    <label for="T5" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T5') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T5" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T5'), 'form-control-success': fields.T5 && fields.T5.valid}" id="T5" name="T5" placeholder="{{ trans('admin.customers-prescription.columns.T5') }}">
        <div v-if="errors.has('T5')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T5') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T6'), 'has-success': fields.T6 && fields.T6.valid }">
    <label for="T6" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T6') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T6" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T6'), 'form-control-success': fields.T6 && fields.T6.valid}" id="T6" name="T6" placeholder="{{ trans('admin.customers-prescription.columns.T6') }}">
        <div v-if="errors.has('T6')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T6') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T7'), 'has-success': fields.T7 && fields.T7.valid }">
    <label for="T7" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T7') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T7" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T7'), 'form-control-success': fields.T7 && fields.T7.valid}" id="T7" name="T7" placeholder="{{ trans('admin.customers-prescription.columns.T7') }}">
        <div v-if="errors.has('T7')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T7') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T8'), 'has-success': fields.T8 && fields.T8.valid }">
    <label for="T8" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T8') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T8" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T8'), 'form-control-success': fields.T8 && fields.T8.valid}" id="T8" name="T8" placeholder="{{ trans('admin.customers-prescription.columns.T8') }}">
        <div v-if="errors.has('T8')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T8') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T9'), 'has-success': fields.T9 && fields.T9.valid }">
    <label for="T9" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T9') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T9" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T9'), 'form-control-success': fields.T9 && fields.T9.valid}" id="T9" name="T9" placeholder="{{ trans('admin.customers-prescription.columns.T9') }}">
        <div v-if="errors.has('T9')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T9') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T10'), 'has-success': fields.T10 && fields.T10.valid }">
    <label for="T10" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T10') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T10" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T10'), 'form-control-success': fields.T10 && fields.T10.valid}" id="T10" name="T10" placeholder="{{ trans('admin.customers-prescription.columns.T10') }}">
        <div v-if="errors.has('T10')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T10') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T11'), 'has-success': fields.T11 && fields.T11.valid }">
    <label for="T11" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T11') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T11" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T11'), 'form-control-success': fields.T11 && fields.T11.valid}" id="T11" name="T11" placeholder="{{ trans('admin.customers-prescription.columns.T11') }}">
        <div v-if="errors.has('T11')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T11') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T12'), 'has-success': fields.T12 && fields.T12.valid }">
    <label for="T12" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T12') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T12" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T12'), 'form-control-success': fields.T12 && fields.T12.valid}" id="T12" name="T12" placeholder="{{ trans('admin.customers-prescription.columns.T12') }}">
        <div v-if="errors.has('T12')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T12') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T13'), 'has-success': fields.T13 && fields.T13.valid }">
    <label for="T13" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T13') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T13" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T13'), 'form-control-success': fields.T13 && fields.T13.valid}" id="T13" name="T13" placeholder="{{ trans('admin.customers-prescription.columns.T13') }}">
        <div v-if="errors.has('T13')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T13') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T14'), 'has-success': fields.T14 && fields.T14.valid }">
    <label for="T14" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T14') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T14" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T14'), 'form-control-success': fields.T14 && fields.T14.valid}" id="T14" name="T14" placeholder="{{ trans('admin.customers-prescription.columns.T14') }}">
        <div v-if="errors.has('T14')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T14') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T15'), 'has-success': fields.T15 && fields.T15.valid }">
    <label for="T15" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T15') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T15" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T15'), 'form-control-success': fields.T15 && fields.T15.valid}" id="T15" name="T15" placeholder="{{ trans('admin.customers-prescription.columns.T15') }}">
        <div v-if="errors.has('T15')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T15') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T16'), 'has-success': fields.T16 && fields.T16.valid }">
    <label for="T16" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T16') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T16" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T16'), 'form-control-success': fields.T16 && fields.T16.valid}" id="T16" name="T16" placeholder="{{ trans('admin.customers-prescription.columns.T16') }}">
        <div v-if="errors.has('T16')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T16') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T17'), 'has-success': fields.T17 && fields.T17.valid }">
    <label for="T17" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T17') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T17" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T17'), 'form-control-success': fields.T17 && fields.T17.valid}" id="T17" name="T17" placeholder="{{ trans('admin.customers-prescription.columns.T17') }}">
        <div v-if="errors.has('T17')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T17') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T18'), 'has-success': fields.T18 && fields.T18.valid }">
    <label for="T18" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T18') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T18" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T18'), 'form-control-success': fields.T18 && fields.T18.valid}" id="T18" name="T18" placeholder="{{ trans('admin.customers-prescription.columns.T18') }}">
        <div v-if="errors.has('T18')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T18') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T19'), 'has-success': fields.T19 && fields.T19.valid }">
    <label for="T19" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T19') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T19" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T19'), 'form-control-success': fields.T19 && fields.T19.valid}" id="T19" name="T19" placeholder="{{ trans('admin.customers-prescription.columns.T19') }}">
        <div v-if="errors.has('T19')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T19') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('T20'), 'has-success': fields.T20 && fields.T20.valid }">
    <label for="T20" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.T20') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.T20" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('T20'), 'form-control-success': fields.T20 && fields.T20.valid}" id="T20" name="T20" placeholder="{{ trans('admin.customers-prescription.columns.T20') }}">
        <div v-if="errors.has('T20')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('T20') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N1'), 'has-success': fields.N1 && fields.N1.valid }">
    <label for="N1" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N1') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N1" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N1'), 'form-control-success': fields.N1 && fields.N1.valid}" id="N1" name="N1" placeholder="{{ trans('admin.customers-prescription.columns.N1') }}">
        <div v-if="errors.has('N1')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N1') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N2'), 'has-success': fields.N2 && fields.N2.valid }">
    <label for="N2" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N2') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N2" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N2'), 'form-control-success': fields.N2 && fields.N2.valid}" id="N2" name="N2" placeholder="{{ trans('admin.customers-prescription.columns.N2') }}">
        <div v-if="errors.has('N2')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N2') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N3'), 'has-success': fields.N3 && fields.N3.valid }">
    <label for="N3" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N3') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N3" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N3'), 'form-control-success': fields.N3 && fields.N3.valid}" id="N3" name="N3" placeholder="{{ trans('admin.customers-prescription.columns.N3') }}">
        <div v-if="errors.has('N3')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N3') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N4'), 'has-success': fields.N4 && fields.N4.valid }">
    <label for="N4" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N4') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N4" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N4'), 'form-control-success': fields.N4 && fields.N4.valid}" id="N4" name="N4" placeholder="{{ trans('admin.customers-prescription.columns.N4') }}">
        <div v-if="errors.has('N4')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N4') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N5'), 'has-success': fields.N5 && fields.N5.valid }">
    <label for="N5" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N5') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N5" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N5'), 'form-control-success': fields.N5 && fields.N5.valid}" id="N5" name="N5" placeholder="{{ trans('admin.customers-prescription.columns.N5') }}">
        <div v-if="errors.has('N5')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N5') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N6'), 'has-success': fields.N6 && fields.N6.valid }">
    <label for="N6" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N6') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N6" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N6'), 'form-control-success': fields.N6 && fields.N6.valid}" id="N6" name="N6" placeholder="{{ trans('admin.customers-prescription.columns.N6') }}">
        <div v-if="errors.has('N6')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N6') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N7'), 'has-success': fields.N7 && fields.N7.valid }">
    <label for="N7" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N7') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N7" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N7'), 'form-control-success': fields.N7 && fields.N7.valid}" id="N7" name="N7" placeholder="{{ trans('admin.customers-prescription.columns.N7') }}">
        <div v-if="errors.has('N7')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N7') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N8'), 'has-success': fields.N8 && fields.N8.valid }">
    <label for="N8" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N8') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N8" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N8'), 'form-control-success': fields.N8 && fields.N8.valid}" id="N8" name="N8" placeholder="{{ trans('admin.customers-prescription.columns.N8') }}">
        <div v-if="errors.has('N8')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N8') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N9'), 'has-success': fields.N9 && fields.N9.valid }">
    <label for="N9" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N9') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N9" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N9'), 'form-control-success': fields.N9 && fields.N9.valid}" id="N9" name="N9" placeholder="{{ trans('admin.customers-prescription.columns.N9') }}">
        <div v-if="errors.has('N9')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N9') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N10'), 'has-success': fields.N10 && fields.N10.valid }">
    <label for="N10" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N10') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N10" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N10'), 'form-control-success': fields.N10 && fields.N10.valid}" id="N10" name="N10" placeholder="{{ trans('admin.customers-prescription.columns.N10') }}">
        <div v-if="errors.has('N10')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N10') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N11'), 'has-success': fields.N11 && fields.N11.valid }">
    <label for="N11" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N11') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N11" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N11'), 'form-control-success': fields.N11 && fields.N11.valid}" id="N11" name="N11" placeholder="{{ trans('admin.customers-prescription.columns.N11') }}">
        <div v-if="errors.has('N11')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N11') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N12'), 'has-success': fields.N12 && fields.N12.valid }">
    <label for="N12" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N12') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N12" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N12'), 'form-control-success': fields.N12 && fields.N12.valid}" id="N12" name="N12" placeholder="{{ trans('admin.customers-prescription.columns.N12') }}">
        <div v-if="errors.has('N12')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N12') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N13'), 'has-success': fields.N13 && fields.N13.valid }">
    <label for="N13" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N13') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N13" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N13'), 'form-control-success': fields.N13 && fields.N13.valid}" id="N13" name="N13" placeholder="{{ trans('admin.customers-prescription.columns.N13') }}">
        <div v-if="errors.has('N13')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N13') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N14'), 'has-success': fields.N14 && fields.N14.valid }">
    <label for="N14" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N14') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N14" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N14'), 'form-control-success': fields.N14 && fields.N14.valid}" id="N14" name="N14" placeholder="{{ trans('admin.customers-prescription.columns.N14') }}">
        <div v-if="errors.has('N14')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N14') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N15'), 'has-success': fields.N15 && fields.N15.valid }">
    <label for="N15" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N15') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N15" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N15'), 'form-control-success': fields.N15 && fields.N15.valid}" id="N15" name="N15" placeholder="{{ trans('admin.customers-prescription.columns.N15') }}">
        <div v-if="errors.has('N15')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N15') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N16'), 'has-success': fields.N16 && fields.N16.valid }">
    <label for="N16" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N16') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N16" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N16'), 'form-control-success': fields.N16 && fields.N16.valid}" id="N16" name="N16" placeholder="{{ trans('admin.customers-prescription.columns.N16') }}">
        <div v-if="errors.has('N16')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N16') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N17'), 'has-success': fields.N17 && fields.N17.valid }">
    <label for="N17" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N17') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N17" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N17'), 'form-control-success': fields.N17 && fields.N17.valid}" id="N17" name="N17" placeholder="{{ trans('admin.customers-prescription.columns.N17') }}">
        <div v-if="errors.has('N17')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N17') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N18'), 'has-success': fields.N18 && fields.N18.valid }">
    <label for="N18" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N18') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N18" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N18'), 'form-control-success': fields.N18 && fields.N18.valid}" id="N18" name="N18" placeholder="{{ trans('admin.customers-prescription.columns.N18') }}">
        <div v-if="errors.has('N18')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N18') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N19'), 'has-success': fields.N19 && fields.N19.valid }">
    <label for="N19" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N19') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N19" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N19'), 'form-control-success': fields.N19 && fields.N19.valid}" id="N19" name="N19" placeholder="{{ trans('admin.customers-prescription.columns.N19') }}">
        <div v-if="errors.has('N19')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N19') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('N20'), 'has-success': fields.N20 && fields.N20.valid }">
    <label for="N20" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.N20') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.N20" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('N20'), 'form-control-success': fields.N20 && fields.N20.valid}" id="N20" name="N20" placeholder="{{ trans('admin.customers-prescription.columns.N20') }}">
        <div v-if="errors.has('N20')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('N20') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('customer_code'), 'has-success': fields.customer_code && fields.customer_code.valid }">
    <label for="customer_code" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.customer_code') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.customer_code" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('customer_code'), 'form-control-success': fields.customer_code && fields.customer_code.valid}" id="customer_code" name="customer_code" placeholder="{{ trans('admin.customers-prescription.columns.customer_code') }}">
        <div v-if="errors.has('customer_code')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('customer_code') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('visit_date'), 'has-success': fields.visit_date && fields.visit_date.valid }">
    <label for="visit_date" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.visit_date') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.visit_date" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('visit_date'), 'form-control-success': fields.visit_date && fields.visit_date.valid}" id="visit_date" name="visit_date" placeholder="{{ trans('admin.customers-prescription.columns.visit_date') }}">
        <div v-if="errors.has('visit_date')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('visit_date') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('CANBENH'), 'has-success': fields.CANBENH && fields.CANBENH.valid }">
    <label for="CANBENH" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.CANBENH') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.CANBENH" v-validate="''" id="CANBENH" name="CANBENH"></textarea>
        </div>
        <div v-if="errors.has('CANBENH')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('CANBENH') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('CAPBAC'), 'has-success': fields.CAPBAC && fields.CAPBAC.valid }">
    <label for="CAPBAC" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.CAPBAC') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.CAPBAC" v-validate="''" id="CAPBAC" name="CAPBAC"></textarea>
        </div>
        <div v-if="errors.has('CAPBAC')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('CAPBAC') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('DONVI'), 'has-success': fields.DONVI && fields.DONVI.valid }">
    <label for="DONVI" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.DONVI') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.DONVI" v-validate="''" id="DONVI" name="DONVI"></textarea>
        </div>
        <div v-if="errors.has('DONVI')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('DONVI') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('DONTHUOC'), 'has-success': fields.DONTHUOC && fields.DONTHUOC.valid }">
    <label for="DONTHUOC" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.DONTHUOC') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.DONTHUOC" v-validate="''" id="DONTHUOC" name="DONTHUOC"></textarea>
        </div>
        <div v-if="errors.has('DONTHUOC')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('DONTHUOC') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('customer_id'), 'has-success': fields.customer_id && fields.customer_id.valid }">
    <label for="customer_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.customer_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.customer_id" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('customer_id'), 'form-control-success': fields.customer_id && fields.customer_id.valid}" id="customer_id" name="customer_id" placeholder="{{ trans('admin.customers-prescription.columns.customer_id') }}">
        <div v-if="errors.has('customer_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('customer_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('customer_history_id'), 'has-success': fields.customer_history_id && fields.customer_history_id.valid }">
    <label for="customer_history_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-prescription.columns.customer_history_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.customer_history_id" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('customer_history_id'), 'form-control-success': fields.customer_history_id && fields.customer_history_id.valid}" id="customer_history_id" name="customer_history_id" placeholder="{{ trans('admin.customers-prescription.columns.customer_history_id') }}">
        <div v-if="errors.has('customer_history_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('customer_history_id') }}</div>
    </div>
</div>


