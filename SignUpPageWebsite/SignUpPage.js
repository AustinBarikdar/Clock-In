let SignUpEmailLabel = document.getElementById('EmailLabel'); 
let SignUpEmailActualLabel= document.getElementById('EmailActualLabel');
let EmailInput = document.getElementById('EmailInput');
EmailInput.onmouseenter = function(){
    SignUpEmailLabel.style.bottom = "-13px";
    SignUpEmailLabel.style.left = "23px";



};

EmailInput.onmouseleave = function(){
    let EmailInputValue = EmailInput.value;
    if (EmailInputValue === ""){
        SignUpEmailLabel.style.bottom = "-33px";
        SignUpEmailLabel.style.left = "23px";

    }

};
EmailInput.onkeydown = function(){
    let EmailInputValue = EmailInput.value;
    if (EmailInputValue !== ""){
        SignUpEmailLabel.style.bottom = "-13px";
        SignUpEmailLabel.style.left = "23px";
   
    }else{
        SignUpEmailLabel.style.bottom = "-33px";
        SignUpEmailLabel.style.left = "23px";  
    }

};

function MouseEnter(InputField,Label){
    Label.style.bottom = "-13px";
    Label.style.left = "23px";
};

function MouseLeave(InputField,Label){
    let LabelValue = Label.value;
    if (LabelValue === ""){
        SignUpEmailLabel.style.bottom = "-33px";
        SignUpEmailLabel.style.left = "23px";

    }
};