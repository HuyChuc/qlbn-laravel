<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-history.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.customers-history.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('age'), 'has-success': fields.age && fields.age.valid }">
    <label for="age" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-history.columns.age') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.age" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('age'), 'form-control-success': fields.age && fields.age.valid}" id="age" name="age" placeholder="{{ trans('admin.customers-history.columns.age') }}">
        <div v-if="errors.has('age')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('age') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('customer_code'), 'has-success': fields.customer_code && fields.customer_code.valid }">
    <label for="customer_code" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-history.columns.customer_code') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.customer_code" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('customer_code'), 'form-control-success': fields.customer_code && fields.customer_code.valid}" id="customer_code" name="customer_code" placeholder="{{ trans('admin.customers-history.columns.customer_code') }}">
        <div v-if="errors.has('customer_code')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('customer_code') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('visit_date'), 'has-success': fields.visit_date && fields.visit_date.valid }">
    <label for="visit_date" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-history.columns.visit_date') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.visit_date" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('visit_date'), 'form-control-success': fields.visit_date && fields.visit_date.valid}" id="visit_date" name="visit_date" placeholder="{{ trans('admin.customers-history.columns.visit_date') }}">
        <div v-if="errors.has('visit_date')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('visit_date') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('KHAMBENH'), 'has-success': fields.KHAMBENH && fields.KHAMBENH.valid }">
    <label for="KHAMBENH" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-history.columns.KHAMBENH') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.KHAMBENH" v-validate="''" id="KHAMBENH" name="KHAMBENH"></textarea>
        </div>
        <div v-if="errors.has('KHAMBENH')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('KHAMBENH') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('BENHSU'), 'has-success': fields.BENHSU && fields.BENHSU.valid }">
    <label for="BENHSU" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-history.columns.BENHSU') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.BENHSU" v-validate="''" id="BENHSU" name="BENHSU"></textarea>
        </div>
        <div v-if="errors.has('BENHSU')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('BENHSU') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('LYDO'), 'has-success': fields.LYDO && fields.LYDO.valid }">
    <label for="LYDO" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-history.columns.LYDO') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.LYDO" v-validate="''" id="LYDO" name="LYDO"></textarea>
        </div>
        <div v-if="errors.has('LYDO')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('LYDO') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('customer_id'), 'has-success': fields.customer_id && fields.customer_id.valid }">
    <label for="customer_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.customers-history.columns.customer_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.customer_id" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('customer_id'), 'form-control-success': fields.customer_id && fields.customer_id.valid}" id="customer_id" name="customer_id" placeholder="{{ trans('admin.customers-history.columns.customer_id') }}">
        <div v-if="errors.has('customer_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('customer_id') }}</div>
    </div>
</div>


