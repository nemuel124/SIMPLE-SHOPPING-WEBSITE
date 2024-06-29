let sideNavs = document.querySelector('.sideNavs');
let showbtn = document.querySelector('.showbtn');

let showcount = 0;
showbtn.addEventListener('click', function () {
    if (showcount == 0) {
        showbtn.style.animationName = 'toLeftbtn';
        sideNavs.style.animationName = 'toLeft';

        setTimeout(function () {
            showbtn.style.left = '0rem';
            sideNavs.style.display = 'none';
        }, 220);

        showcount++;
    } else if (showcount > 0) {

        showbtn.style.animationName = 'toRightbtn';
        sideNavs.style.animationName = 'toRight';

        setTimeout(function () {
            showbtn.style.left = '16rem';
            sideNavs.style.display = 'block';
        }, 220);

        showcount--;
    }
});

