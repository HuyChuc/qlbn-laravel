<div class="form-group row align-items-center" :class="{'has-danger': errors.has('title'), 'has-success': fields.title && fields.title.valid }">
    <label for="title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.faq.columns.title') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.title" v-validate="'required'" id="title" name="title"></textarea>
        </div>
        <div v-if="errors.has('title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('title') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('content'), 'has-success': fields.content && fields.content.valid }">
    <label for="content" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.faq.columns.content') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.content" v-validate="''" id="content" name="content"></textarea>
        </div>
        <div v-if="errors.has('content')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('content') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('enabled'), 'has-success': fields.enabled && fields.enabled.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="enabled" type="checkbox" v-model="form.enabled" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element">
        <label class="form-check-label" for="enabled">
            {{ trans('admin.faq.columns.enabled') }}
        </label>
        <input type="hidden" name="enabled" :value="form.enabled">
        <div v-if="errors.has('enabled')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('enabled') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('cat_id'), 'has-success': fields.cat_id && fields.cat_id.valid }">
    <label for="cat_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.faq.columns.cat_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
            {{-- <input type="text" v-model="form.cat_id" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cat_id'), 'form-control-success': fields.cat_id && fields.cat_id.valid}" id="cat_id" name="cat_id" placeholder="{{ trans('admin.faq.columns.cat_id') }}"> --}}
            <multiselect
            v-model="form.categories"
            :options="{{$categories->toJson()}}"
            :multiple="false"
            track-by="id"
            label="name"
            tag-placeholder="{{ __('Chọn danh mục   ') }}"
            placeholder="{{ __('Danh mục') }}">
        </multiselect>
            <div v-if="errors.has('cat_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cat_id') }}</div>
        </div>
</div>


