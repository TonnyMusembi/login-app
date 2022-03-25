import AllCompany from './components/AllCompany.vue';
import CreateCompany from './components/CreateCompany.vue';
import EditCompany from './components/EditCompany.vue';


export const routes = [{
        name: 'home',
        path: '/allcompany',
        component: AllCompany
    },
    {
        name: 'create',
        path: '/create',
        component: CreateCompany
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditCompany
    }
];