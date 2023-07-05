flatpickr("#date", {
    minDate: "today",
    altInput: true,
    altFormat: "j F, Y",
    dateFormat: "Y-m-d",
  });

  flatpickr("#time", {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    time_24hr: true
  });

  tinymce.init({
    selector: '#description',
    plugins: 'link charmap preview removeformat',
    toolbar: 'undo redo | bold italic underline | link | removeformat | preview',
    height: 500,
  });