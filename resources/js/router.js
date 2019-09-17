import Vue from 'vue';
import Router from 'vue-router';

import Dashboard from './components/panel/Dashboard';

Vue.use(Router);

const router = new Router({
    routes: [
        {
            path: '/panel',
            name: 'panel',
            component: Dashboard
        },
    ],
    mode: 'history'
});

export default router;
