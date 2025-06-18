//#hamを取得
const ham = document.getElementById('ham');
//.sp-menu__navを取得
const spMenuNav = document.querySelector('.sp-menu__nav');
//bodyを取得
const body = document.querySelector('body');
//#hamをクリックしたときにactiveクラスをつける
ham.addEventListener('click', () => {
    //もし#hamにactiveクラスがついていたら
    if (ham.classList.contains('active')) {
        //#hamからactiveクラスを外す
        ham.classList.remove('active');
        spMenuNav.classList.remove('active');
        spMenuNav.setAttribute('aria-hidden', 'true');
        body.style.overflow = 'visible';
    } else {
        //#hamにactiveクラスをつける
        ham.classList.add('active');
        spMenuNav.classList.add('active');
        spMenuNav.setAttribute('aria-hidden', 'false');
        body.style.overflow = 'hidden';
    }
});

//.sp-menu__nav aをすべて取得
const spMenuNavA = document.querySelectorAll('.sp-menu__nav a');
//.sp-menu__nav aをクリックしたら
spMenuNavA.forEach((spMenuNavA) => {
    spMenuNavA.addEventListener('click', () => {
        //もし.sp-menu__nav aにactiveクラスがついていたら
        if (ham.classList.contains('active')) {
            //#hamからactiveクラスを外す
            ham.classList.remove('active');
            spMenuNav.classList.remove('active');
            spMenuNav.setAttribute('aria-hidden', 'true');
            body.style.overflow = 'visible';
        }
    });
});

//#header__nav-treat-btnを取得
const headerNavTreatBtn = document.getElementById('header__nav-treat-btn');
//#header__nav-treat-btn > aを取得
const headerNavTreatBtnA = document.querySelector('#header__nav-treat-btn > a');
//#header__nav-treat-list-small-blを取得
const headerNavTreatListSmallBl = document.getElementById('header__nav-treat-list-small-bl');
//headerNavTreatBtnをホバーしたときにactiveクラスをつける
headerNavTreatBtn.addEventListener('mouseover', () => {
    headerNavTreatBtn.classList.add('active');
    //headerNavTreatBtnAのaria-expandedをtrueにする
    headerNavTreatBtnA.setAttribute('aria-expanded', 'true');
    //headerNavTreatListSmallBlのaria-hidden="true"をfalseにする
    headerNavTreatListSmallBl.setAttribute('aria-hidden', 'false');
});
//headerNavTreatBtnをホバーが外れたときにactiveクラスを外す
headerNavTreatBtn.addEventListener('mouseout', () => {
    headerNavTreatBtn.classList.remove('active');
    //headerNavTreatBtnAのaria-expandedをfalseにする
    headerNavTreatBtnA.setAttribute('aria-expanded', 'false');
    //headerNavTreatListSmallBlのaria-hidden="false"をtrueにする
    headerNavTreatListSmallBl.setAttribute('aria-hidden', 'true');
});

//headerNavTreatListSmallBlをホバーしたときにactiveクラスをつける
headerNavTreatListSmallBl.addEventListener('mouseover', () => {
    headerNavTreatBtn.classList.add('active');
    //headerNavTreatBtnAのaria-expandedをfalseにする
    headerNavTreatBtnA.setAttribute('aria-expanded', 'false');
    //headerNavTreatListSmallBlのaria-hidden="true"をfalseにする
    headerNavTreatListSmallBl.setAttribute('aria-hidden', 'false');
});
//headerNavTreatListSmallBlをホバーが外れたときにactiveクラスを外す
headerNavTreatListSmallBl.addEventListener('mouseout', () => {
    headerNavTreatBtn.classList.remove('active');
    //headerNavTreatBtnAのaria-expandedをfalseにする
    headerNavTreatBtnA.setAttribute('aria-expanded', 'false');
    //headerNavTreatListSmallBlのaria-hidden="false"をtrueにする
    headerNavTreatListSmallBl.setAttribute('aria-hidden', 'true');
});

//.js-fadeUpがついたクラスを全て取得
const fadeUp = document.querySelectorAll('.js-fadeUp');
//スクロールして画面の下200pxまできたら関数を実行
//.js-fadeupがついたクラスにinクラスをつける
window.addEventListener('scroll', () => {
    fadeUp.forEach((fadeUp) => {
        const fadeUpTop = fadeUp.getBoundingClientRect().top;
        if (window.innerHeight > fadeUpTop + 200) {
            fadeUp.classList.add('is-show');
        }
    });
});

//#fixed-bnrsを取得
const fixedBnrs = document.getElementById('fixed-bnrs');

//スクロールして画面の上部から1px以上スクロールしたら関数を実行
//fixed-bnrsにactiveクラスをつける
window.addEventListener('scroll', () => {
    if (window.scrollY > 1) {
        fixedBnrs.classList.add('active');
    } else {
        fixedBnrs.classList.remove('active');
    }
});
