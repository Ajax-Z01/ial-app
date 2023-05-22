/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import $ from 'jquery';

import Echo from 'laravel-echo';

import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true
});

var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

window.Echo.channel('data-dummy')
    .listen('.dummy-added', (data_dummy) => {
        var payload = {
            data_dummy: data_dummy // Assign the data_dummy value to the payload object
        };
        console.log(data_dummy);
        // Kirim data ke endpoint Laravel menggunakan AJAX
        $.ajax({
            url: '/save-dummy',
            type: 'POST',
            data: payload,
            headers: {
                'X-CSRF-TOKEN': csrfToken // Menyertakan token CSRF dalam header permintaan
            },
            success: function(response) {
                console.log(response);
                // Handle response jika diperlukan
            },
            error: function(xhr, status, error) {
                console.log(error);
                // Handle error jika diperlukan
            }
        });
    });

// var channel = Echo.channel('data-dummy');
// channel.listen('.data-added', function(data) {
//     console.log(data);
// });

//     wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
