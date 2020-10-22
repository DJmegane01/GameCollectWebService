require('./bootstrap');
window.Vue = require('vue');
const software = new Vue({
    el: '#software',
    data: {
        err_message: 'Hello Vue.js!'
    },
});

Vue.component('error-message',{
	data:function(){
		return {
			count:0
		}
	},
	template:'<button v-on:click="count++">test{{ count }}</button>'
})
