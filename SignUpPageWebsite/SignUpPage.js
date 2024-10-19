let SignUpFirstNameLabel = document.getElementById('FirstNameLabel'); 
let FirstNameInput = document.getElementById('FirstNameInput');

let SignUpEmailLabel = document.getElementById('EmailLabel'); 
let EmailInput = document.getElementById('EmailInput');

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

FirstNameInput.onmouseenter = function(){
    console.log('e')
    onmouseenterfunction(SignUpFirstNameLabel)
};
FirstNameInput.onmouseleave = function(){
    console.log('e')
    onmouseleavefunction(FirstNameInput,SignUpFirstNameLabel)

};
FirstNameInput.onkeydown = function(){
    console.log('e')
    onkeydownfunction(FirstNameInput,SignUpFirstNameLabel)

};