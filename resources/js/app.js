require('./bootstrap')

import { createApp } from 'vue'
import VueAxios from "vue-axios";
import axios from "axios";

import App from './vue.js';


const app = createApp(App);
app.use(VueAxios, axios);
app.mount('#app');

