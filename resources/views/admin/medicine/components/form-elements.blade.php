<div class="form-group row align-items-center" :class="{'has-danger': errors.has('code'), 'has-success': fields.code && fields.code.valid }">
    <label for="code" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medicine.columns.code') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.code" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('code'), 'form-control-success': fields.code && fields.code.valid}" id="code" name="code" placeholder="{{ trans('admin.medicine.columns.code') }}">
        <div v-if="errors.has('code')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('code') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medicine.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.medicine.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('mfg_date'), 'has-success': fields.mfg_date && fields.mfg_date.valid }">
    <label for="mfg_date" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medicine.columns.mfg_date') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.mfg_date" :config="datetimePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('mfg_date'), 'form-control-success': fields.mfg_date && fields.mfg_date.valid}" id="mfg_date" name="mfg_date" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_date_and_time') }}"></datetime>
        </div>
        <div v-if="errors.has('mfg_date')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('mfg_date') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('exp_date'), 'has-success': fields.exp_date && fields.exp_date.valid }">
    <label for="exp_date" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medicine.columns.exp_date') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.exp_date" :config="datetimePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('exp_date'), 'form-control-success': fields.exp_date && fields.exp_date.valid}" id="exp_date" name="exp_date" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_date_and_time') }}"></datetime>
        </div>
        <div v-if="errors.has('exp_date')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('exp_date') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('made_in'), 'has-success': fields.made_in && fields.made_in.valid }">
    <label for="made_in" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medicine.columns.made_in') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.made_in" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('made_in'), 'form-control-success': fields.made_in && fields.made_in.valid}" id="made_in" name="made_in" placeholder="{{ trans('admin.medicine.columns.made_in') }}">
        <div v-if="errors.has('made_in')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('made_in') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('medication_components'), 'has-success': fields.medication_components && fields.medication_components.valid }">
    <label for="medication_components" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medicine.columns.medication_components') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.medication_components" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('medication_components'), 'form-control-success': fields.medication_components && fields.medication_components.valid}" id="medication_components" name="medication_components" placeholder="{{ trans('admin.medicine.columns.medication_components') }}">
        <div v-if="errors.has('medication_components')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('medication_components') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('notes'), 'has-success': fields.notes && fields.notes.valid }">
    <label for="notes" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medicine.columns.notes') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.notes" v-validate="''" id="notes" name="notes"></textarea>
        </div>
        <div v-if="errors.has('notes')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('notes') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ID'), 'has-success': fields.ID && fields.ID.valid }">
    <label for="ID" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medicine.columns.ID') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ID" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ID'), 'form-control-success': fields.ID && fields.ID.valid}" id="ID" name="ID" placeholder="{{ trans('admin.medicine.columns.ID') }}">
        <div v-if="errors.has('ID')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ID') }}</div>
    </div>
</div>


