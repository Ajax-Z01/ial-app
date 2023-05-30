$(document).ready(function() {
  $('#change_image').click(function() {
    $('#profile_image').click();
  });

  $('#profile_image').change(function() {
    var input = this;
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#preview_image').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  });
});