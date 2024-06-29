let btnLogin = document.querySelector('.loginbtnContainer .btnLogin');
let homepage = document.querySelector('.homepage');
let logincontainer = document.querySelector('.loginContainer');
let shoeplay2 = document.querySelector('.shoePlay2');
let home = document.querySelector('.homepageNav');
let About = document.querySelector('.About');
let Products = document.querySelector('.Products');
let closebtn = document.querySelector('.closebutton');
let closebtn2 = document.querySelector('.signupContainer .closebutton');
let signupcontainer = document.querySelector('.signupContainer');
let shopBtn = document.querySelector('.shopBtn');
let aboutcontainer = document.querySelector('.aboutconBorder');
let productcontainer = document.querySelector('.productsContainer');
let container = document.querySelector('.navigation');
let showBtn = document.querySelector('.showCart i');
let cart = document.querySelector('.cart');
let aboutbtn = document.querySelector('.aboutContainer .aboutbtn');
let aboutcontactcontainer = document.querySelector('.contactContainer');




shoeplay2.style.display = 'none';
home.addEventListener('click', function(){
    home.classList.add('navigationIndicator');
    About.classList.remove('navigationIndicator');
    Products.classList.remove('navigationIndicator');
    logincontainer.style.display = 'none';
    signupcontainer.style.display = 'none';
    shoeplay2.style.display = 'none';
    homepage.style.display = 'block';
    btnLogin.style.display = 'block';
    aboutcontainer.style.display = 'none';
    productcontainer.style.display = 'none';
});
About.addEventListener('click', function(){
    About.classList.add('navigationIndicator');
    home.classList.remove('navigationIndicator');
    Products.classList.remove('navigationIndicator');
    shoeplay2.style.display = 'none';
    logincontainer.style.display = 'none';
    signupcontainer.style.display = 'none';
    homepage.style.display = 'none';
    aboutcontainer.style.display = 'block';
    btnLogin.style.display = 'none';
    productcontainer.style.display = 'none';
  
});


Products.addEventListener('click', function(){
    Products.classList.add('navigationIndicator');
    home.classList.remove('navigationIndicator');
    About.classList.remove('navigationIndicator');
    shoeplay2.style.display = 'none';
    logincontainer.style.display = 'none';
    signupcontainer.style.display = 'none';
    homepage.style.display = 'none';
    btnLogin.style.display = 'none';
    aboutcontainer.style.display = 'none';
    productcontainer.style.display = 'block';
    
})


document.addEventListener('click', function(outside) {
  if (!container.contains(outside.target)){
    Products.classList.remove('navigationIndicator');
    home.classList.remove('navigationIndicator');
    About.classList.remove('navigationIndicator');
     
  }
});


closebtn.addEventListener('click', function(){
    homepage.style.display = 'block';
    logincontainer.style.display = 'none';
    shoeplay2.style.display = 'none';
    btnLogin.style.display = 'block';
    signupcontainer.style.display = 'none';
});
closebtn2.addEventListener('click', function(){
    homepage.style.display = 'block';
    logincontainer.style.display = 'none';
    shoeplay2.style.display = 'none';
    btnLogin.style.display = 'block';
    signupcontainer.style.display = 'none';
});



btnLogin.addEventListener('click', function(){
    logincontainer.style.display = 'block'
    btnLogin.style.display = 'none';
    homepage.style.display = 'none';;
    shoeplay2.style.display = 'block';
});

function Signup(){
    if(Signup){
        btnLogin.style.display = 'none';
        homepage.style.display = 'none';
        logincontainer.style.display = 'none';
        shoeplay2.style.display = 'block';
        signupcontainer.style.display = 'block';
    }
    
}
function alreadyAcc(){
    if(alreadyAcc){
        btnLogin.style.display = 'none';
        homepage.style.display = 'none';
        logincontainer.style.display = 'block';
        shoeplay2.style.display = 'block';
        signupcontainer.style.display = 'none';
    }
    
}

shopBtn.addEventListener('click', function(){
    if(shopBtn){
        Products.classList.add('navigationIndicator');
        home.classList.remove('navigationIndicator');
        About.classList.remove('navigationIndicator');
        logincontainer.style.display = 'none';
        homepage.style.display = 'none';
        productcontainer.style.display = 'block';
        btnLogin.style.display = 'none';
        productcontainer.style.overflowY = 'auto';
    }
})

showBtn.addEventListener('click', function(){
    if(showBtn){
    cart.style.display = 'block';   
    }

});
document.addEventListener('click', function(outside){
    if(!showBtn.contains(outside.target) && !cart.contains(outside.target)){
        cart.style.display = 'none';  
    }

})


let cartlogin = document.querySelector('.cart .cartloginContainer');
let cartsignup = document.querySelector('.cart .cartsignupContainer');

function CartSignup(){
        cartlogin.style.display = 'none';
        cartsignup.style.display = 'block';

}function cartalreadyAcc(){
    if(cartalreadyAcc){
        cartlogin.style.display = 'block';
        cartsignup.style.display = 'none';
    }
    
}

aboutbtn.addEventListener('click', function(){
    if(aboutbtn){
        aboutcontactcontainer.style.animationName = 'AboutUs';
        aboutcontactcontainer.classList.add('aboutScaled');
    }

})
    document.addEventListener('click', function(outside){
        if(!aboutbtn.contains(outside.target)){ 
            aboutcontactcontainer.style.animationName = '';
            aboutcontactcontainer.classList.remove('aboutScaled');
    }
    })


let addtocartbtns = document.querySelectorAll(['.item1price button', '.item2price button', '.item3price button' , '.item4price button', '.item5price button' , '.item6price button']);
addtocartbtns.forEach((button) => {
    button.addEventListener('click', (event) => {
        alert("You need to log in first!");
        // You can perform other actions, such as adding to the cart
    });
});


/*
let checkbox = document.querySelector('.signupContainer input[type="checkbox"]');
let submitsignup = document.querySelector('.signupContainer #signupSubmit');


checkbox.addEventListener('click', function(){
    if(checkbox.checked){
        submitsignup.style.backgroundColor = 'gray';
    
        console.log(checkbox.checked);
    }
    else if(!checkbox.checked){
        submitsignup.style.backgroundColor = 'black';
        console.log(checkbox.checked);
    }


})*/
