import AppForm from '../app-components/Form/AppForm';

Vue.component('customer-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                code:  '' ,
                address:  '' ,
                phone:  '' ,
                full_name:  '' ,
                gender:  '' ,
                group:  '' ,
                NHOMBENH:  '' ,
                dob:  '' ,
                
            }
        }
    }

});