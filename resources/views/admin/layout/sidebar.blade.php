<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/faqs') }}"><i class="nav-icon icon-compass"></i> {{ trans('admin.faq.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/posts') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.post.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/categories') }}"><i class="nav-icon icon-star"></i> {{ trans('admin.category.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/customers') }}"><i class="nav-icon icon-umbrella"></i> {{ trans('admin.customer.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/customers-histories') }}"><i class="nav-icon icon-graduation"></i> {{ trans('admin.customers-history.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/medicines') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.medicine.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/posts-comments') }}"><i class="nav-icon icon-drop"></i> {{ trans('admin.posts-comment.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/customers-prescriptions') }}"><i class="nav-icon icon-drop"></i> {{ trans('admin.customers-prescription.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
