

let homepage = document.querySelector('.homepage');
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


let infoicon = document.querySelector('.userInfoicon');
let infoname= document.querySelector('.userInfoName');


    document.addEventListener('mouseover', function(outside){
            if(!infoicon.contains(outside.target)){
                infoname.style.display = 'none';
              
            }
            
            if(infoicon.contains(outside.target)){
                infoname.style.display = 'block';
            }


    })



home.addEventListener('click', function(){
    home.classList.add('navigationIndicator');
    About.classList.remove('navigationIndicator');
    Products.classList.remove('navigationIndicator');
    homepage.style.display = 'block';
    aboutcontainer.style.display = 'none';
    productcontainer.style.display = 'none';
    
});
About.addEventListener('click', function(){
    About.classList.add('navigationIndicator');
    home.classList.remove('navigationIndicator');
    Products.classList.remove('navigationIndicator');
    homepage.style.display = 'none';
    aboutcontainer.style.display = 'block';
    productcontainer.style.display = 'none';
    
});


Products.addEventListener('click', function(){
    Products.classList.add('navigationIndicator');
    home.classList.remove('navigationIndicator');
    About.classList.remove('navigationIndicator');
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



shopBtn.addEventListener('click', function(){
    if(shopBtn){
        Products.classList.add('navigationIndicator');
        home.classList.remove('navigationIndicator');
        About.classList.remove('navigationIndicator');
        homepage.style.display = 'none';
        productcontainer.style.display = 'block';
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
/*
let addtocartbtn1 = document.querySelector('.item1con button');
let addtocartbtn2 = document.querySelector('.item2con button');
let addtocartbtn3 = document.querySelector('.itemcon3 button');
let addtocartbtn4 = document.querySelector('.itemcon4 button');
let addtocartbtn5 = document.querySelector('.itemcon5 button');
let addtocartbtn6 = document.querySelector('.itemcon6 button');
*/

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



let addedAnimation = document.querySelector('.addedAnimation');
let addtocartbtn = document.querySelectorAll('.productsContainer button');
addtocartbtn.forEach((button) => {
    button.addEventListener('click', (event) => {
        addedAnimation.style.animationName = 'Added';

    });
});

document.addEventListener('mouseover', function(event) {

    if (!Array.from(addtocartbtn).includes(event.target)) {
        addedAnimation.style.animationName = '';
    }

});



// Get the buttons
const addto1 = document.querySelector('.item1con button');
const addto2 = document.querySelector('.item2con button');
const addto3 = document.querySelector('.item3con button');
const addto4 = document.querySelector('.item4con button');
const addto5 = document.querySelector('.item5con button');
const addto6 = document.querySelector('.item6con button');

let itemadded1 = document.querySelector('.itemadded1');
let itemadded2 = document.querySelector('.itemadded2');
let itemadded3 = document.querySelector('.itemadded3');
let itemadded4 = document.querySelector('.itemadded4');
let itemadded5 = document.querySelector('.itemadded5');
let itemadded6 = document.querySelector('.itemadded6');

let count1 = 0;
let count2 = 0;
let count3 = 0;
let count4 = 0;
let count5 = 0;
let count6 = 0;


addto1.addEventListener('click', function () {
    if(count1 == 0){
        itemadded1.style.display = 'block';
        count1++;
        }else if(count1 != 0){
            addedAnimation.style.animationName = '';
            alert("This item is already in your Cart!");
        }
        
});

addto2.addEventListener('click', function () {
    if(count2 == 0){
        itemadded2.style.display = 'block';
        count2++;
        }else if(count2 != 0){
            addedAnimation.style.animationName = '';
            alert("This item is already in your Cart!");
        }
        
});

addto3.addEventListener('click', function () {
    if(count3 == 0){
        itemadded3.style.display = 'block';
        count3++;
        }else if(count3 != 0){
            addedAnimation.style.animationName = '';
            alert("This item is already in your Cart!");
        }
        
  });

  addto4.addEventListener('click', function () {
    if(count4 == 0){
        itemadded4.style.display = 'block';
        count4++;
        }else if(count4 != 0){
            addedAnimation.style.animationName = '';
            alert("This item is already in your Cart!");
        }
        
  });

  addto5.addEventListener('click', function () {
    if(count5 == 0){
        itemadded5.style.display = 'block';
        
        count5++;
        }else if(count5 != 0){
            addedAnimation.style.animationName = '';
            alert("This item is already in your Cart!");
        }
        
  });

  addto6.addEventListener('click', function () {
    if(count6 == 0){
    itemadded6.style.display = 'block';
    count6++;
    }else if(count6 != 0){
        addedAnimation.style.animationName = '';
        alert("This item is already in your Cart!");
    }

  });



let place1 = document.querySelector('.itemadded1 .placeOrder');
let place2 = document.querySelector('.itemadded2 .placeOrder');
let place3 = document.querySelector('.itemadded3 .placeOrder');
let place4 = document.querySelector('.itemadded4 .placeOrder');
let place5 = document.querySelector('.itemadded5 .placeOrder');
let place6 = document.querySelector('.itemadded6 .placeOrder');
let showCart = document.querySelector('.showCart');
let cartText = document.querySelector('.CartText');

showCart.addEventListener('click', function(){
if(count1 == 0 && count2 == 0 && count3 == 0 && count4 == 0 && count5 == 0 && count6 == 0)
{
    cartText.style.display = 'block';
}else{
    cartText.style.display = 'none';
}
})


place1.addEventListener('click', function(){
      
    itemadded1.style.display = 'none';
    addedAnimation.style.animationName = '';
    alert("Order will be sent to the said Address!")

    count1--;
})

place2.addEventListener('click', function(){
    itemadded2.style.display = 'none';
    addedAnimation.style.animationName = '';
    alert("Order will be sent to the said Address!")

    count2--;
})

place3.addEventListener('click', function(){
    itemadded3.style.display = 'none';
    addedAnimation.style.animationName = '';
    alert("Order will be sent to the said Address!")

    count3--;
})

place4.addEventListener('click', function(){
    itemadded4.style.display = 'none';
    addedAnimation.style.animationName = '';
    alert("Order will be sent to the said Address!")

    count4--;
})

place5.addEventListener('click', function(){
    itemadded5.style.display = 'none';
    addedAnimation.style.animationName = '';
    alert("Order will be sent to the said Address!")

    count5--;
})

place6.addEventListener('click', function(){
    itemadded6.style.display = 'none';
    addedAnimation.style.animationName = '';
    alert("Order will be sent to the said Address!")

    count6--;
})

let trash1 = document.querySelector('.itemadded1 .trash1');
let trash2 = document.querySelector('.itemadded2 .trash2');
let trash3 = document.querySelector('.itemadded3 .trash3');
let trash4 = document.querySelector('.itemadded4 .trash4');
let trash5 = document.querySelector('.itemadded5 .trash5');
let trash6 = document.querySelector('.itemadded6 .trash6');




trash1.addEventListener('click', function(){
    itemadded1.style.display = 'none';
    setTimeout(function() {
       alert("Item deleted!");
    }, 300);
    

    count1--;
})

trash2.addEventListener('click', function(){
    itemadded2.style.display = 'none';
    setTimeout(function() {
       alert("Item deleted!");
    }, 300);
    

    count2--;
})

trash3.addEventListener('click', function(){
    itemadded3.style.display = 'none';
    setTimeout(function() {
       alert("Item deleted!");
    }, 300);
    

    count3--;
})

trash4.addEventListener('click', function(){
    itemadded4.style.display = 'none';
    setTimeout(function() {
       alert("Item deleted!");
    }, 300);
    

    count4--;
})

trash5.addEventListener('click', function(){
    itemadded5.style.display = 'none';
    setTimeout(function() {
       alert("Item deleted!");
    }, 300);
    

    count5--;
})

trash6.addEventListener('click', function(){
    itemadded6.style.display = 'none';
    setTimeout(function() {
       alert("Item deleted!");
    }, 300);
    

    count6--;
})
















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
