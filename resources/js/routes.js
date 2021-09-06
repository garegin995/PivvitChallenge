import Donation from './components/views/Donation'
import CreateDonation from './components/views/CreateDonation'

const routes = [
    { 
        path: '/donations',
        component: Donation
    },
    { 
        path: '/donations/create',
        component: CreateDonation
    }
]

export default routes