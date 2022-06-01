const FormElement = document.querySelector('#FormLogin');

    console.log(FormElement);

  FormElement.addEventListener('submit', (e) => {

    console.log("log");

      const username = document.querySelector('#username').value;

      const password = document.querySelector('#password').value;

      if (password == '' || username == '') {

          e.preventDefault();

          alert('Please enter a username and password');

      }

      else{

      }

  });