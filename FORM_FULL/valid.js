function validateName(){
    const nameInput= document.getElementById('fname');
    const fnameErr= document.getElementById('fnameErr');
    const fname= nameInput.value.trim();
    const fnamePattern = /^[A-Za-z]+$/;
  
    if(fname === ''){
      fnameErr.textContent= "Name is Required";
    } else if (fname.length< 6){
      fnameErr.textContent= "Name must have atleast 6 chars long"; 
    } else if (!fnamePattern.test(fname)){
      fnameErr.textContent="Name must not have any numbers or special charecters";
    }
    else {
      fnameErr.textContent= '';
    }
  
  }
  
  function validateEmail(){
    const emailInput= document.getElementById('email');
    const emailErr= document.getElementById('emailErr');
    const email= emailInput.value.trim();
    const emailPattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
  
    if(email === ''){
      emailErr.textContent= "Email is Required";
    } else if (!emailPattern.test(email)){
      emailErr.textContent= "Email is Invalid";
    }
     else {
      emailErr.textContent= '';
    }
  
  }
  
  function validatePhone(){
    const phoneInput= document.getElementById('phone');
    const phoneErr= document.getElementById('phoneErr');
    const phone= phoneInput.value.trim();
    const phonePattern= /^\d{10}$/;
  
    if(phone === ''){
      phoneErr.textContent= "Phone number is Required";
    } else if (!phonePattern.test(phone)){
      phoneErr.textContent= "Phone number is Invalid";
    }
     else {
      phoneErr.textContent= '';
    }
  
  }
  
  function validatePassword(){
    const passwordInput= document.getElementById('password');
    const passwordErr= document.getElementById('passwordErr');
    const password= passwordInput.value.trim();
    const passwordPattern = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,}$/;
  
    if(password === ''){
      passwordErr.textContent= "Password is Required";
    } else if (password.length< 6){
      passwordErr.textContent= "Password must have atleast 6 chars long";
    } else if (!passwordPattern.test(password)){
      passwordErr.textContent="password must be atleast one letter one number and one special character";
    }
     else {
      passwordErr.textContent='';
    }
  }
  
  function validateForm(){
    validateName();
    validateEmail();
    validatePhone();
    validatePassword();
  }


  