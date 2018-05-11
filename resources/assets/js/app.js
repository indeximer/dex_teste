
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./jquery.datetimepicker.js');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });


$('.date-field').datetimepicker({
    lang: 'pt-BR',
    i18n: {
        pt: {
            months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            dayOfWeek: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D']
        }
    },
    timepicker:false,
    format: 'd/m/Y',
    closeOnDateSelect: true
});

$(".custom-file-input").on('change', function(){
    var name = $(this).val();
    $(this).parent('div').find('label').text(name);
});