import AppForm from '../app-components/Form/AppForm';

Vue.component('customers-history-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                age:  '' ,
                customer_code:  '' ,
                visit_date:  '' ,
                KHAMBENH:  '' ,
                BENHSU:  '' ,
                LYDO:  '' ,
                customer_id:  '' ,
                
            }
        }
    }

});