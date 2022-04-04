import AppForm from '../app-components/Form/AppForm';

Vue.component('customer-prescription-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                
            }
        }
    }

});