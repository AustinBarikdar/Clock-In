const SignUpFirstNameLabel = document.getElementById('FirstNameLabel'); 
const FirstNameInput = document.getElementById('FirstNameInput');

const SignUpLastNameLabel = document.getElementById('LastNameLabel'); 
const LastNameInput = document.getElementById('LastNameInput');

const SignUpEmailLabel = document.getElementById('EmailLabel'); 
const EmailInput = document.getElementById('EmailInput');

const SignUpPasswordLabel = document.getElementById('PasswordLabel'); 
const PasswordInput = document.getElementById('PasswordInput');

const SignUpButton = document.getElementById('SignUpButton');



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
    onmouseenterfunction(SignUpEmailLabel)
};

EmailInput.onmouseleave = function(){
    onmouseleavefunction(EmailInput,SignUpEmailLabel)

};

EmailInput.onkeydown = function(){
    onkeydownfunction(EmailInput,SignUpEmailLabel)

};

EmailInput.addEventListener('focus', function() {
    const initialValue = this.value;
  
    setTimeout(() => {
      if (this.value !== initialValue) {
        onmouseenterfunction(SignUpEmailLabel)
        onmouseenterfunction(SignUpFirstNameLabel)
        onmouseenterfunction(SignUpLastNameLabel)
        console.log('Input field is autofilled');
      }
    }, 100);
  });


PasswordInput.onmouseenter = function(){
    onmouseenterfunction(SignUpPasswordLabel)
};

PasswordInput.onmouseleave = function(){
    onmouseleavefunction(PasswordInput,SignUpPasswordLabel)

};

PasswordInput.onkeydown = function(){
    onkeydownfunction(PasswordInput,SignUpPasswordLabel)

};

PasswordInput.addEventListener('focus', function() {
    const initialValue = this.value;
  
    setTimeout(() => {
      if (this.value !== initialValue) {
        onmouseenterfunction(SignUpEmailLabel)
        onmouseenterfunction(SignUpFirstNameLabel)
        onmouseenterfunction(SignUpLastNameLabel)
        console.log('Input field is autofilled');
      }
    }, 100);
  });

  

FirstNameInput.onmouseenter = function(){
    onmouseenterfunction(SignUpFirstNameLabel)
};
FirstNameInput.onmouseleave = function(){
    onmouseleavefunction(FirstNameInput,SignUpFirstNameLabel)

};
FirstNameInput.onkeydown = function(){
    onkeydownfunction(FirstNameInput,SignUpFirstNameLabel)

};

FirstNameInput.addEventListener('focus', function() {
    const initialValue = this.value;
  
    setTimeout(() => {
      if (this.value !== initialValue) {
        onmouseenterfunction(SignUpEmailLabel)
        onmouseenterfunction(SignUpFirstNameLabel)
        onmouseenterfunction(SignUpLastNameLabel)
        console.log('Input field is autofilled');
      }
    }, 100);
  });


LastNameInput.onmouseenter = function(){
    onmouseenterfunction(SignUpLastNameLabel)
};
LastNameInput.onmouseleave = function(){
    onmouseleavefunction(LastNameInput,SignUpLastNameLabel)

};
LastNameInput.onkeydown = function(){
    onkeydownfunction(LastNameInput,SignUpLastNameLabel)

};

LastNameInput.addEventListener('focus', function() {
    const initialValue = this.value;
  
    setTimeout(() => {
      if (this.value !== initialValue) {
        onmouseenterfunction(SignUpEmailLabel)
        onmouseenterfunction(SignUpFirstNameLabel)
        onmouseenterfunction(SignUpLastNameLabel)
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

