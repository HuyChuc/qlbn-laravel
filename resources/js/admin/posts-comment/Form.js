import AppForm from '../app-components/Form/AppForm';

Vue.component('posts-comment-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                code:  '' ,
                create_date:  '' ,
                post_id:  '' ,
                comment:  '' ,
                full_name:  '' ,
                
            }
        }
    }

});