import Home from './pages/Home';
import Register from './pages/Register' ;

export default [
    {
        path: '/',
        component: Home,
        name: 'home'
    },

    {
        path: '/register',
        component: Register,
        name: 'register'
    }
]