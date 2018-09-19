// Imports
import Home from './components/Home'
import Search from './components/Search'
import Profile from './components/Profile'

export default [
    {path: '/', component: Home},
    {path: '/search/location:location', component: Search},
    {path: '/profile', component: Profile},
]