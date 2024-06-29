let signupcontainer = document.querySelector('.signupContainer');
let container = document.querySelector('.Container');

document.addEventListener('click', function(outside){
        
    if(!signupcontainer.contains(outside.target)){
        signupcontainer.style.border = '2px solid red';
        signupcontainer.style.transform= 'scale(112%)';
        signupcontainer.style.marginLeft= '53rem';
        container.style.overFlowY = 'auto';
        
    }else if(signupcontainer.contains(outside.target)){
        signupcontainer.style = 'auto';
    }

})

