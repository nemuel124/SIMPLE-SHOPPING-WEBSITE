let homepage = document.querySelector('.homepage');
let logincontainer = document.querySelector('.loginContainer');
let home = document.querySelector('.homepageNav');
let About = document.querySelector('.About');
let Products = document.querySelector('.Products');
let shopBtn = document.querySelector('.shopBtn');
let aboutcontainer = document.querySelector('.aboutconBorder');
let productcontainer = document.querySelector('.productsContainer');
let container = document.querySelector('.navigation');
let showBtn = document.querySelector('.showCart i');
let cart = document.querySelector('.cart');
let aboutbtn = document.querySelector('.aboutContainer .aboutbtn');
let aboutcontactcontainer = document.querySelector('.contactContainer');



home.addEventListener('click', function(){
    home.classList.add('navigationIndicator');
    About.classList.remove('navigationIndicator');
    Products.classList.remove('navigationIndicator');
    logincontainer.style.display = 'block';
    homepage.style.display = 'block';
    aboutcontainer.style.display = 'none';
    productcontainer.style.display = 'none';
});
About.addEventListener('click', function(){
    About.classList.add('navigationIndicator');
    home.classList.remove('navigationIndicator');
    Products.classList.remove('navigationIndicator');
    logincontainer.style.display = 'none';
    homepage.style.display = 'none';
    aboutcontainer.style.display = 'block';
    productcontainer.style.display = 'none';
  
});


Products.addEventListener('click', function(){
    Products.classList.add('navigationIndicator');
    home.classList.remove('navigationIndicator');
    About.classList.remove('navigationIndicator');
    logincontainer.style.display = 'none';
    homepage.style.display = 'none';
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

function CartSignup(){
        cartlogin.style.display = 'none';

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


