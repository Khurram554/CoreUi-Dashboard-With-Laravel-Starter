/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';

// Import all of CoreUI's JS
import * as coreui from '../coreui';

window.coreui = coreui;

import './chart';
import './simplebar';
import './colors';
import './popovers';
import './toasts';
// import './tooltips';
// import './widgets';



// <script src="../node_modules/simplebar/dist/simplebar.min.js"></script>
//     <!-- Plugins and scripts required by this view-->
//     <script src="../node_modules/chart.js/dist/chart.min.js"></script>
//     <script src="../node_modules/@coreui/chartjs/dist/js/coreui-chartjs.js"></script>
//     <script src="../node_modules/@coreui/utils/dist/coreui-utils.js"></script>
//     <script src="js/main.js"></script>


window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
//     wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });




