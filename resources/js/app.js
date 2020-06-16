// require('./bootstrap');

window.Vue = require('vue');
import VueI18n from 'vue-i18n';
import InstantSearch from 'vue-instantsearch';
Vue.use(InstantSearch);

Vue.config.productionTip = false;
import {
	languages
} from './locales'

const messages = Object.assign(languages)

const i18n = new VueI18n({
	locale: document.documentElement.lang,
	messages
});

const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

new Vue({
	el: '#search-component',
	i18n,
});
