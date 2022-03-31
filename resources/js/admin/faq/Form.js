import AppForm from '../app-components/Form/AppForm';

Vue.component('faq-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                content:  '' ,
                enabled:  false ,
                image:  ''
                
            },
            mediaCollections: ['gallery']
        }
    }

});