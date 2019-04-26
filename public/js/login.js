// JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    let password2 = document.getElementById('InputPassword1');
    let pFeedback = document.getElementById('feedback');
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
          
//          get the length of the password entered
        let password = document.getElementById('InputPassword1').value;
        if(password.length < 8){
            event.preventDefault();
            event.stopPropagation();
            password2.classList.add('password-invalid');
            pFeedback.classList.add('invalid');
        }
      }, false);
    });
  }, false);
    
})();