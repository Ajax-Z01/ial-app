import Echo from 'laravel-echo'

window.Echo = new Echo({
  broadcaster: 'pusher',
  key: '6bfd0eb4577af8856285',
  cluster: 'ap1',
  forceTLS: true
});

var channel = Echo.channel('ia-lab');
channel.listen('.my-event', function(data) {
  alert(JSON.stringify(data));
});