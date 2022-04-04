import AppForm from '../app-components/Form/AppForm';

Vue.component('medicine-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                code:  '' ,
                name:  '' ,
                mfg_date:  '' ,
                exp_date:  '' ,
                made_in:  '' ,
                medication_components:  '' ,
                notes:  '' ,
                ID:  '' ,
                
            }
        }
    }

});