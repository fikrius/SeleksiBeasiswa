
      function validatePassword(){
      var password = document.getElementById("password")
       var konfirmasi_password = document.getElementById("konfirmasi");

      if(password.value != konfirmasi_password.value) {
        konfirmasi_password.setCustomValidity("Passwords Tidak Cocok!");
      } else {
        konfirmasi_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    konfirmasi_password.onkeyup = validatePassword;

