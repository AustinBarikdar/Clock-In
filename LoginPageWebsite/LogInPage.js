const LoginEmailLabel = document.getElementById('EmailLabel'); 
const EmailInput = document.getElementById('EmailInput');

const LoginPasswordLabel = document.getElementById('PasswordLabel'); 
const PasswordInput = document.getElementById('PasswordInput');

const LoginButton = document.getElementById('LoginButton');

let EmailInputValue = EmailInput.value;
if (EmailInputValue !== "") {
  onmouseenterfunction(LoginEmailLabel)
}

let PasswordInputValue = PasswordInput.value;
if (PasswordInputValue !== "") {
  onmouseenterfunction(LoginPasswordLabel)
}



function onmouseleavefunction(Input,Label){
    let InputFieldValue = Input.value;
    if (InputFieldValue === ""){
        Label.style.bottom = "-33px";
        Label.style.left = "23px";

    }
}

function onmouseenterfunction(Label){
    Label.style.bottom = "-13px";
    Label.style.left = "23px";
}

function onkeydownfunction(Input,Label){
    let InputValue = Input.value;
    if (InputValue !== ""){
        Label.style.bottom = "-13px";
        Label.style.left = "23px";
   
    }else{
        Label.style.bottom = "-33px";
        Label.style.left = "23px";  
    }
}

EmailInput.onmouseenter = function(){
    onmouseenterfunction(LoginEmailLabel)
};

EmailInput.onmouseleave = function(){
    onmouseleavefunction(EmailInput,LoginEmailLabel)

};

EmailInput.onkeydown = function(){
    onkeydownfunction(EmailInput,LoginEmailLabel)

};

EmailInput.addEventListener('focus', function() {
    const initialValue = this.value;
  
    setTimeout(() => {
      if (this.value !== initialValue) {
        onmouseenterfunction(LoginEmailLabel)
        console.log('Input field is autofilled');
      }
    }, 100);
  });


PasswordInput.onmouseenter = function(){
    onmouseenterfunction(LoginPasswordLabel)
};

PasswordInput.onmouseleave = function(){
    onmouseleavefunction(PasswordInput,LoginPasswordLabel)

};

PasswordInput.onkeydown = function(){
    onkeydownfunction(PasswordInput,LoginPasswordLabel)

};

PasswordInput.addEventListener('focus', function() {
    const initialValue = this.value;
  
    setTimeout(() => {
      if (this.value !== initialValue) {
        onmouseenterfunction(SignUpEmailLabel)
        console.log('Input field is autofilled');
      }
    }, 100);
  });

  
SignUpButton.onmouseenter = function(){
    SignUpButton.style.width = "100px";

};

SignUpButton.onmouseleave = function(){
    SignUpButton.style.width = "85px";

};

