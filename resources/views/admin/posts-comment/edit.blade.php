@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.posts-comment.actions.edit', ['name' => $postsComment->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <posts-comment-form
                :action="'{{ $postsComment->resource_url }}'"
                :data="{{ $postsComment->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.posts-comment.actions.edit', ['name' => $postsComment->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.posts-comment.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </posts-comment-form>

        </div>
    
</div>

@endsection