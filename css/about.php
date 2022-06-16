
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    position: relative;
    outline: none;
    visibility: visible;
    overflow-X: hidden;
    color: "";
}
.section, .main-wrapper {
    float: left;
    width: 100%;
}
.header-section {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 999;
}
.sticky .header-main-wrapper {
    margin-top: 0;
    border: 0;
}
.header-main.sticky {
    margin: 0px 0px 0px 0px;
    padding: 0px;
    background: rgb(255, 255, 255);
    color: rgb(29, 39, 51);
    position: fixed;
    width: 100%;
    border: none;
    border-radius: 0px;
    box-shadow: rgb(33 40 50 / 15%) 2px 4px 8px;
}
.sticky .header-menu ul li a {
    list-style: none;
    text-decoration:none; 
}
.sticky .header-menu ul li a:hover{
    color: #309255;
}
.header-main-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border: 1px solid rgba(48,146,85,0.25);
    padding: 16px 15px;
    border-radius: 15px;
    margin-left: -15px;
    margin-right: -15px;
    margin-top: 30px;
    transition: all 0.3s ease 0s;
}
.header-main-wrapper .header-logo a img{
    height:50px;
}
li{
    list-style: none;
}
a {
    text-decoration: none;
    color: inherit;
}
img {
    max-width: 100%;
}
.header-menu ul {
    display: flex;
    justify-content: center;
}
.header-menu ul li {
    position: relative;
    padding: 16px 25px;
}
ul li{
    list-style: none;
}
.header-menu ul li.active>a {
    color: #309255;
}
.header-menu ul li{
    list-style: none;
}
.header-menu ul li a {
    font-size: 18px;
    font-weight: 500;
    text-transform: capitalize;
    color: #212832;
    transition: all 0.3s ease 0s;
    display: block;
    position: relative;
}
.header-menu ul li a{
    text-decoration:none;
}

.header-menu ul li a:hover{
    color: #309255;
}
.header-menu ul li.active>a::before {
    opacity: 1;
    visibility: visible;
}
.header-menu ul li a::before {
    position: absolute;
    content: '';
    background-image: url(../Images/shape-3.webp);
    width: 70px;
    height: 5px;
    background-position: center center;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    opacity: 0;
    visibility: hidden;
}
.header-menu .sub-menu {
    position: absolute;
    width: 225px;
    background-color: #fff;
    border-top: 2px solid #212832;
    padding: 10px 0px;
    box-shadow: 2px 2px 20px rgb(33 40 50 / 10%);
    top: 110%;
    left: 0;
    z-index: 9;
    transition: all 0.3s ease 0s;
    opacity: 0;
    visibility: hidden;
}
.header-menu ul li ul {
    display: block;
}
.header-menu ul {
    justify-content: center;
}
.header-menu .sub-menu li {
    padding: 0;
}
.sub-menu li:hover ul{
  display: block;
}
.header-menu .sub-menu li a {
    padding: 7px 20px;
    color: #212832;
    border: 0;
    font-size: 16px;
}
.header-menu ul li a {
    font-size: 18px;
    font-weight: 500;
    text-transform: capitalize;
    color: #212832;
    transition: all 0.3s ease 0s;
    display: block;
    position: relative;
}
.header-menu ul li a::before {
    position: absolute;
    content: '';
    background-image: url(../Images/shape-3.webp);
    width: 70px;
    height: 5px;
    background-position: center center;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    opacity: 1;
}


.header-sign-in-up ul {
    display: flex;
    align-items: center;
}
.header-sign-in-up ul li {
    margin-right: 30px;
}
.header-sign-in-up ul li a {
    font-size: 18px;
    font-weight: 500;
    text-transform: capitalize;
    color: #212832;
    transition: all 0.3s ease 0s;
    display: block;
}
.header-sign-in-up ul li:last-child {
    margin-right: 0;
}
.header-sign-in-up ul li a{
    text-decoration: none;
}
.header-sign-in-up ul li a:hover{
    color: #309255;
}
.header-sign-in-up ul li a.sign-up {
    height: 60px;
    line-height: 56px;
    padding: 0 35px;
    border: 1px solid #309255;
    border-radius: 10px;
    background-color: #fff;
}
.header-sign-in-up ul li a.sign-up:hover{
    background-color: #309255;
    color: #fff;
}

.header-toggle .menu-toggle {
    display: inline-block;
    background: none;
    border: 0;
    padding: 0;
}
.fa{
    font-size: 20px;
}
.mobile-menu {
    position: fixed;
    top: 0;
    width: 300px;
    height: 100%;
    left: -305px;
    background-color: #fff;
    z-index: 999;
    padding-top: 70px;
    transition: all 0.3s ease 0s;
    overflow: auto;
}
.mobile-menu .menu-close {
    position: absolute;
    top: 20px;
    right: 25px;
    font-size: 30px;
    color: #212832;
}
.mobile-top {
    padding-top: 30px;
}
.mobile-top p {
    font-size: 15px;
    color: #212832;
    font-weight: 400;
    margin-bottom: 0;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    line-height: 1.4;
}
.mobile-top p i {
    color: #309255;
    font-size: 20px;
    padding-right: 15px;
}
.mobile-top p a {
    color: #212832;
}
.mobile-top p+p {
    margin-top: 5px;
}
.mobile-sign-in-up {
    padding-top: 30px;
}
.mobile-sign-in-up ul {
    display: flex;
    align-items: center;
    justify-content: center;
}
.mobile-sign-in-up ul li {
    margin-right: 20px;
}
.mobile-sign-in-up ul li a {
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
    color: #212832;
    transition: all 0.3s ease 0s;
    display: block;
    height: 45px;
    line-height: 41px;
    padding: 0 30px;
    border: 1px solid #309255;
    border-radius: 5px;
    background-color: #fff;
}
.mobile-sign-in-up ul li:last-child {
    margin-right: 0;
}
.mobile-sign-in-up ul li a {
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
    color: #212832;
    transition: all 0.3s ease 0s;
    display: block;
    height: 45px;
    line-height: 41px;
    padding: 0 30px;
    border: 1px solid #309255;
    border-radius: 5px;
    background-color: #fff;
}
.mobile-menu-items {
    padding: 30px 0;
}
.mobile-menu-items ul {
    border-top: 1px solid #eeecec;
}
.mobile-menu-items ul li {
    position: relative;
}
.mobile-menu-items ul li a {
    display: block;
    width: 100%;
    background: none;
    text-align: left;
    padding: 10px 20px;
    border: 0;
    border-bottom: 1px solid #eeecec;
    font-size: 15px;
    font-weight: 500;
    color: #212832;
}
.mobile-menu-items ul li .mobile-menu-expand {
    position: absolute;
    right: 20px;
    top: 12px;
    width: 16px;
    height: 16px;
    cursor: pointer;
}
.mobile-menu-items ul li .mobile-menu-expand::before {
    position: absolute;
    content: '';
    width: 100%;
    height: 1px;
    background-color: #212832;
    top: 50%;
    transform: translateY(-50%);
}
.mobile-menu-items ul li .mobile-menu-expand::after {
    position: absolute;
    content: '';
    width: 1px;
    height: 100%;
    background-color: #212832;
    left: 50%;
    bottom: 0;
    transition: 0.3s;
    transform: translateX(-50%);
}
.mobile-menu-items ul li ul {
    border-top: 0;
}
.mobile-menu-items ul li {
    position: relative;
}
.mobile-menu-items ul li ul li a {
    padding-left: 12%;
}
.mobile-social {
    padding-bottom: 30px;
}
.mobile-social .social {
    display: flex;
    justify-content: center;
}
.mobile-social .social li {
    margin-right: 20px;
}
.mobile-social .social li a {
    font-size: 20px;
    color: #212832;
}
.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #000;
    opacity: 0;
    visibility: hidden;
    z-index: 99;
    transition: all 0.3s linear;
}


/* scroll button */
.scroll {
    color: #fff;
    margin-top: 100px;
}

#toTopBtn {
    position: fixed;
    bottom: 26px;
    right: 39px;
    z-index: 98;
    padding: 21px;
    background-color:  var(--green);
    transition:0.5s;
}
#toTopBtn:hover{
  background-color: #202020;
}

.js .cd-top--fade-out {
    opacity: .5
}

.js .cd-top--is-visible {
    visibility: visible;
    opacity: 1
}

.js .cd-top {
    visibility: hidden;
    opacity: 0;
    transition: opacity .3s, visibility .3s, background-color .3s
}
.cd-top {
    position: fixed;
    bottom: 20px;
    bottom: var(--cd-back-to-top-margin);
    right: 20px;
    right: var(--cd-back-to-top-margin);
    display: inline-block;
    height: 40px;
    height: var(--cd-back-to-top-size);
    width: 40px;
    width: var(--cd-back-to-top-size);
    box-shadow: 0 0 10px rgba(0, 0, 0, .05) !important;
    background: url(https://res.cloudinary.com/dxfq3iotg/image/upload/v1571057658/cd-top-arrow.svg) no-repeat center 50%;
    background-color: hsla(5, 76%, 62%, .8);
    border-radius: 30px;
    background-color: hsla(var(--cd-color-3-h), var(--cd-color-3-s), var(--cd-color-3-l), 0.8)
}

.height {
    height: 600px
}
/* scroll button end */

/* page banner start */

.page-banner{
    width: 100%;
    min-height: 600px;
    background-color: #e7f8ee;
}
.page-banner .shape-1{
    position: absolute;
    top: 23%;
    left: 100px;
    z-index: 1000;
    animation: round 8s linear 0s infinite normal forwards;

}
@keyframes round {
    from{
        -webkit-transform: rotate(0deg);
    }
    to{
        -webkit-transform: rotate(359deg);
    }
  }

.page-banner-content{
    margin-top: 14%;
}
.page-banner-content .breadcrumb {
    margin-bottom: 0;
    background-color:#e7f8ee;
}
.breadcrumb a{
    color: #1d2733;
    list-style: none;
    text-decoration: none;
}
.breadcrumb a:hover {
    color: #267544;
}
.page-banner-content .breadcrumb li.active {
    color: #309255;
}
.breadcrumb li{
    margin-top: 30px;
}
.page-banner-content .title {
    font-size: 55px;
    font-weight: 500;
    margin-bottom: 0;
    margin-top: 15px;
    padding-bottom: 15px;
    line-height: 1.6;
}
.page-banner-content .title span {
    position: relative;
    color: #309255;
}
.page-banner-content .title span::before {
    position: absolute;
    content: '';
    background-image: url(../images/shape-4.webp);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    width: 120px;
    height: 13px;
    left: 14px;
    bottom: -10px;
}
.page-banner-content .title {
    font-size: 40px;
    font-weight: 500;
    margin-bottom: 0;
    margin-top: 15px;
    padding-bottom: 15px;
    line-height: 1.6;
}
.shape-icon-box .icon-shape-1 {
    position: absolute;
    top: -15px;
    right: -130px;
    animation: left 5s linear 0s infinite normal forwards;
}
.shape-icon-box .icon-shape-1 img{
    max-width: 100%;
    vertical-align: middle;
}

.page-banner .shape-2 {
    position: absolute;
    top: 67%;
    bottom: 0;
    left: 0;
}
.page-banner .shape-2 img{
    max-width: 100%;
    vertical-align: middle;
}
.page-banner .shape-3 {
    position: absolute;
    bottom: 0;
    right: 0;
}
.page-banner .shape-3 img {
    vertical-align: middle;
}

.page-banner .shape-author {
    position: absolute;
    top: 0;
    margin-left: 9.5%;
    border-radius: 50%;
    margin-left: 40%;
}
.page-banner .shape-3 {
    position: absolute;
    bottom: -70%;
    /* top: 1%; */
    /* right: 0; */
    left: 18%;
}

.shape-icon-box {
    position: absolute;
    top: 47%;
    left: 60%;
}
.shape-icon-box .box-content {
    width: 135px;
    height: 135px;
    text-align: center;
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 50%;
    margin: 0 auto;
    padding: 10px;
}
.shape-icon-box .box-content .box-wrapper {
    background-color: #309255;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    width: 100%;
    height: 100%;
}
.shape-icon-box .box-content .box-wrapper i {
    font-size: 70px;
    color: #fff;
    display: block;
    line-height: 1;
}
.flaticon-badge:before {
    content: "\f101";
}

/* Page banner end  */




/* About page start */

.section, .main-wrapper {
    float: left;
    width: 100%;
}
.section-padding-02 {
    padding-top: 80px;
}
.mt-n10 {
    margin-top: -3.125rem !important;
}
.container, .container-fluid, .container-sm, .container-md, .container-lg, .container-xl, .container-xxl {
    width: 100%;
    margin-right: auto;
    margin-left: auto;
}
.row {
    display: flex;
    flex-wrap: wrap;
}

.about-images {
    position: relative;
    overflow: hidden;
    margin-top: 50px;
    box-sizing: border-box;
}
.about-images .images img {
    border-radius: 10px;
    width: 100%;
}

.about-images .about-years {
    width: 125px;
    background-color: #309255;
    padding: 10px 20px;
    text-align: center;
    border-radius: 10px;
    position: absolute;
    top: 50px;
    right: 30px;
}
.about-images .about-years .years-icon {
    background-color: #fff;
    text-align: center;
    width: 85px;
    height: 85px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: -30px;
    position: relative;
}
.about-images .about-years p strong {
    font-size: 18px;
    font-weight: 700;
    line-height: 1;
}
.about-images .about-years p {
    color: #fff;
    font-size: 14px;
    font-weight: 400;
    margin-top: 6px;
}


.about-content {
    margin-top: 45px;
    max-width: 530px;
    margin-left: auto;
}
.about-content .sub-title {
    font-size: 20px;
    font-weight: 500;
    color: #309255;
    margin-bottom: 20px;
}
.about-content .main-title {
    font-size: 40px;
    font-weight: 500;
    margin-bottom: 0;
    line-height: 1.4;
    padding-bottom: 24px;
}
.about-content .main-title span {
    color: #309255;
    position: relative;
}
.about-content .main-title span::before {
    position: absolute;
    content: '';
    background-image: url(../Images/shape-4.webp);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    width: 210px;
    height: 21px;
    left: 50%;
    bottom: -24px;
    transform: translateX(-50%);
}
.about-content p {
    margin-top: 25px;
    margin-bottom: 0;
    font-size: 15px;
    line-height: 1.8;
}
.about-content .btn {
    color: #fff;
    border: none;
    margin-top: 40px;
}
.section-padding-02 {
    padding-top: 80px;
}
.mt-n6 {
    margin-top: -1.875rem !important;
}

.container, .container-fluid, .container-sm, .container-md, .container-lg, .container-xl, .container-xxl {
    width: 100%;
    padding-right: var(--bs-gutter-x, 15px);
    padding-left: var(--bs-gutter-x, 15px);
    margin-right: auto;
    margin-left: auto;
}
.about-item {
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 10px;
    padding: 30px;
    margin-top: 30px;
    transition: all 0.3s ease 0s;
}
.about-item:hover{
    border: 1px solid #309255;
    border-radius: 10px;
}
.about-item .item-icon-title {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
}
.about-item .item-icon-title .item-icon i {
    width: 80px;
    height: 80px;
    line-height: 86px;
    text-align: center;
    border-radius: 50%;
    background-color: #e7f8ee;
    color: #309255;
    font-size: 36px;
    display: inline-block;
    transition: all 0.3s ease 0s;
}
.about-item:hover .item-icon i{
    background-color: #309255;
}

.about-item .item-icon-title .item-title {
    flex: 1;
    padding-left: 20px;
}
.about-item .item-icon-title .item-title .title {
    font-size: 22px;
    font-weight: 500;
}
.about-item p {
    margin-top: 25px;
    margin-bottom: 0;
    font-size: 15px;
    line-height: 1.8;
}

 /* Call to Action Start */

.section-padding-02 {
    padding-top: 80px;
}
.section, .main-wrapper {
    float: left;
    width: 100%;
}
.call-to-action-wrapper {
    background-color: #e7f8ee;
    border-radius: 10px;
    padding: 20px 100px 50px;
    position: relative;
}
.call-to-action-wrapper .cat-shape-01 {
    position: absolute;
    bottom: 30px;
    left: 30px;
    animation: round;
}
.animation-round {
    animation: round 8s linear 0s infinite normal forwards;
}

/* @keyframes */


.call-to-action-wrapper .cat-shape-02 {
    position: absolute;
    top: 50%;
    left: 57.5%;
    transform: translate(-50%, -50%);
    width: 179px;
}
.call-to-action-wrapper .cat-shape-03 {
    position: absolute;
    top: 30px;
    right: 30px;
}
.align-items-center {
    align-items: center !important;
}
.call-to-action-wrapper .section-title {
    max-width: 415px;
    margin-top: 25px;
}
.section-title .sub-title {
    font-size: 20px;
    font-weight: 500;
    color: #309255;
    margin-bottom: 20px;
}
.section-title .main-title {
    font-size: 35px;
    font-weight: 500;
    margin-bottom: 0;
    line-height: 1.4;
}
.section-title .main-title span {
    color: #309255;
    position: relative;
}
.section-title.shape-02 .main-title span::before {
    position: absolute;
    content: '';
    background-image: url(../Images/shape-4.webp);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    width: 210px;
    height: 21px;
    left: 50%;
    bottom: -20px;
    transform: translateX(-50%);
}
.call-to-action-btn {
    text-align: right;
    margin-top: 30px;
}
.btn {
    position: relative;
    z-index: 2;
    overflow: hidden;
    color: #fff;
}
.btn {
    display: inline-block;
    font-family: "Gordita";
    font-weight: 500;
    line-height: 3.75rem;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    border-radius: 10px;
    border: none;
}
.btn::before {
    width: 300px;
    height: 300px;
    position: absolute;
    content: '';
    top: 50%;
    left: 50%;
    z-index: -1;
}
 /* Call to Action End */


 /* Team Member's Start  */

.section-padding {
    padding-top: 80px;
    padding-bottom: 80px;
}
.section-title.shape-03 {
    padding-bottom: 11px;
}
.section-title .sub-title {
    font-size: 20px;
    font-weight: 500;
    color: #309255;
    margin-bottom: 20px;
}
.section-title .main-title {
    font-size: 35px;
    font-weight: 500;
    margin-bottom: 0;
    line-height: 1.4;
}
.section-title .main-title span {
    color: #309255;
    position: relative;
}
.section-title.shape-03 .main-title span::before {
    position: absolute;
    content: '';
    background-image: url(../Images/shape-4.webp);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    width: 121px;
    height: 13px;
    right: 0;
    bottom: -11px;
}
.team-wrapper {
    margin-bottom: -7px;
}
.single-team {
    text-align: center;
    margin-top: 50px;
}
.single-team .team-thumb img {
    border-radius: 50%;
    padding: 10px;
    border: 1px solid rgba(48,146,85,0.2);
    transition: all 0.3s ease 0s;
}
.single-team .team-content {
    padding-top: 15px;
}
.single-team .team-content .rating {
    display: inline-flex;
    align-items: center;
}
.single-team .team-content .rating .count {
    font-size: 14px;
    font-weight: 500;
    color: #212832;
}
.single-team .team-content .rating i {
    color: #ffba00;
    margin: 0 5px;
}
.icofont-star:before {
    content: "\f000";
}
.single-team .team-content .rating .text {
    font-size: 13px;
    font-family: serif;
    font-weight: 400;
    color: #848886;
}
.single-team .team-content .name {
    font-weight: 500;
    font-size: 20px;
    margin-bottom: 0;
}
.single-team .team-content .designation {
    display: block;
    font-size: 14px;
    color: #309255;
    margin-top: 10px;
}
  /* Team Member's end  */


/* Download Section Start  */

.section-padding {
    padding-top: 80px;
    padding-bottom: 80px;
}
.download-section {
    background-color: #309255;
    position: relative;
    overflow: hidden;
}
.download-section .app-shape-1 {
    width: 560px;
    height: 560px;
    border: 1px solid rgba(255,255,255,0.15);
    border-radius: 50%;
    left: 70px;
    bottom: 85px;
    position: absolute;
}
.download-section .app-shape-2 {
    width: 560px;
    height: 560px;
    border: 1px solid rgba(255,255,255,0.15);
    border-radius: 50%;
    left: 31%;
    top: 60px;
    position: absolute;
}
.download-section .app-shape-3 {
    width: 560px;
    height: 560px;
    border: 1px solid rgba(255,255,255,0.15);
    border-radius: 50%;
    right: 15%;
    bottom: 70%;
    position: absolute;
}
.download-section .app-shape-4 {
    width: 560px;
    height: 560px;
    border: 1px solid rgba(255,255,255,0.15);
    border-radius: 50%;
    right: -243px;
    top: -50px;
    position: absolute;
}
.download-app-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
}
.download-app-wrapper .section-title {
    max-width: 520px;
    margin-top: 25px;
    padding-right: 15px;
}
.section-title.section-title-white .sub-title {
    color: #fff;
}
.section-title .sub-title {
    font-size: 20px;
    font-weight: 500;
    margin-bottom: 20px;
}
.section-title .main-title {
    font-size: 35px;
    font-weight: 500;
    margin-bottom: 0;
    line-height: 1.4;
}
.download-app-wrapper .shape-1 {
    position: absolute;
    top: 40%;
    left: 50%;
}
.download-app-btn {
    padding-top: 20px;
    padding-left: 15px;
}
.download-app-btn .app-btn {
    display: flex;
}
.download-app-btn .app-btn li {
    margin-right: 30px;
    padding-top: 20px;
    list-style: none;
}
.download-app-btn .app-btn li a {
    width: 180px;
    height: 63px;
    display: inline-block;
    background-color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    box-shadow: 0 0 0 5px rgb(255 255 255 / 15%);
    text-decoration: none;
}
.download-app-btn .app-btn li:last-child {
    margin-right: 0;
}

/* Download Section End  */


/* Testimonial Start */

.section-padding-02 {
    padding-top: 80px;
}
.section-title.shape-03 {
    padding-bottom: 11px;
}
.text-center .h2 {
    text-align: center !important;
    color: #000;
}
.section-title .sub-title {
    font-size: 20px;
    font-weight: 500;
    color: #309255;
    margin-bottom: 20px;
}
.section-title .main-title {
    font-size: 35px;
    font-weight: 500;
    margin-bottom: 0;
    line-height: 1.4;
}
.section-title .main-title span {
    color: #309255;
    position: relative;
}
.section-title.shape-03 .main-title span::before {
    position: absolute;
    content: '';
    background-image: url(../Images/shape-4.webp);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    width: 121px;
    height: 13px;
    right: 0;
    bottom: -11px;
}

.testimonial-wrapper {
    padding-top: 50px;
}
.swiper-container-pointer-events {
    touch-action: pan-y;
}
.swiper-container {
    margin-left: auto;
    margin-right: auto;
    position: relative;
    overflow: hidden;
    list-style: none;
    padding: 0;
    z-index: 1;
}
.swiper-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
    z-index: 1;
    display: flex;
    transition-property: transform;
    box-sizing: content-box;
}
.single-testimonial {
    text-align: center;
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 10px;
    padding: 45px 45px 40px;
    position: relative;
    overflow: hidden;
}
.swiper-slide {
    flex-shrink: 0;
    height: 100%;
    transition-property: transform;
}
.single-testimonial::before {
    position: absolute;
    content: '';
    background-image: url(../Images/shape-18.webp);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    width: 101px;
    height: 172px;
    right: 100px;
    top: -27px;
}
.single-testimonial .testimonial-author .author-thumb {
    position: relative;
}
.single-testimonial .testimonial-author .author-thumb img {
    display: block;
    width: 90px;
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 50%;
    padding: 8px;
    margin: 0 auto;
}
.single-testimonial .testimonial-author .author-thumb i {
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    background-color: #309255;
    color: #fff;
    font-size: 13px;
    border-radius: 50%;
    display: inline-block;
    position: absolute;
    bottom: -13px;
    left: 0;
    right: 0;
    margin: 0 auto;
}
.icofont-quote-left:before {
    content: "\efcd";
}
.single-testimonial .testimonial-author .rating-star {
    position: relative;
    display: inline-block;
    margin-top: 35px;
}
.single-testimonial .testimonial-author .rating-star::before {
    content: '\f000 \f000 \f000 \f000 \f000';
    font-family: IcoFont;
    color: #d0d0d0;
    font-size: 14px;
    letter-spacing: 2px;
}
.single-testimonial .testimonial-author .rating-star .rating-bar {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    overflow: hidden;
    display: inline-block;
}
.single-testimonial .testimonial-content {
    padding-top: 15px;
}
.single-testimonial .testimonial-content p {
    font-size: 15px;
    color: #52565b;
    font-weight: 400;
    margin-bottom: 0;
}
.single-testimonial .testimonial-content .name {
    font-size: 22px;
    font-weight: 500;
    margin-bottom: 0;
    margin-top: 16px;
}
.single-testimonial .testimonial-content .designation {
    font-size: 14px;
    font-weight: 400;
    color: #309255;
    margin-top: 5px;
    display: block;
}
/* Testimonial End */

/* Footer strat */

.footer-section {
    background-color: #e7f8ee;
}
.footer-widget-section {
    padding-top: 30px;
    padding-bottom: 80px;
    position: relative;
    z-index: 1;
}
.footer-widget-section .shape-1 {
    position: absolute;
    top: 80px;
    left: 5%;
    z-index: -1;
}
.footer-widget {
    margin-top: 50px;
}
.footer-widget .widget-address {
    margin-top: 27px;
}
.footer-widget-title {
    color: #212832;
    font-weight: 500;
    font-size: 22px;
    margin-bottom: 0px;
}
.footer-widget .widget-address p {
    font-size: 15px;
    font-weight: 400;
    color: #309255;
    margin-top: 6px;
}
.widget-info li{
    list-style: none;
}
.footer-widget .widget-info {
    padding-top: 25px;
}
.footer-widget .widget-info li p {
    font-size: 15px;
    color: #212832;
    display: flex;
    align-items: flex-start;
    margin-bottom: 0;
}
.footer-widget .widget-info li p a {
    margin-top: 3px;
    margin-left: 15px;
    list-style: none;
    text-decoration: none;
    color: #212832;
}
.footer-widget .widget-info li p i {
    font-size: 20px;
    color: #309255;
}
.footer-widget .widget-info li p a {
    margin-top: 3px;
    margin-left: 15px;
}
.footer-widget .widget-social {
    display: flex;
    padding-top: 20px;
}
.footer-widget .widget-social li {
    margin-right: 20px;
    list-style: none;
}
.footer-widget .widget-social li a {
    text-decoration: none;
    list-style: none;
    font-size: 20px;
    color: #212832;
}
.footer-widget-link {
    display: flex;
    flex-wrap: wrap;
}
.footer-widget-link .footer-widget {
    width: 50%;
}
.footer-widget {
    margin-top: 50px;
}
.footer-widget-title {
    color: #212832;
    font-weight: 500;
    font-size: 22px;
    margin-bottom: 0px;
}
.footer-widget .widget-link {
    padding-top: 26px;
}
.footer-widget .widget-link li {
    margin-top: 12px;
    list-style: none;
}
.footer-widget .widget-link li a {
    text-decoration: none;
    list-style: none;
    color: #212832;
    transition: all 0.3s ease 0s;
    font-size: 15px;
    font-weight: 400;
}
.footer-widget .widget-link li a:hover{
    color: #309255;
}
a{
    text-decoration: none;
    list-style: none;
}
.footer-widget .widget-subscribe {
    padding-top: 36px;
}
.footer-widget .widget-subscribe p {
    color: #212832;
    font-size: 15px;
}
form {
    display: block;
    margin-top: 0em;
}
.footer-widget .widget-subscribe .widget-form input {
    width: 100%;
    height: 55px;
    padding: 0 30px;
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 10px;
    background-color: #fff;
    color: #212832;
    font-size: 15px;
    font-weight: 500;
    outline: none;
}
.footer-widget .widget-subscribe .widget-form .btn {
    margin-top: 20px;
    height: 55px;
    line-height: 55px;
    padding: 0 30px;
    font-size: 15px;
}
.btn::before {
    width: 300px;
    height: 300px;
    position: absolute;
    content: '';
    top: 50%;
    left: 50%;
    z-index: -1;
    transition: 0.4s all linear;
    transform: translate(-50%, -50%) scale(0);
    border-radius: 50%;
}

.footer-widget-section .shape-2 {
    position: absolute;
    right: 3%;
    bottom: 95px;
    z-index: -1;
    animation: left;
}
.animation-left {
    animation: left 5s linear 0s infinite normal forwards;
}

/* left animation */

c
.footer-copyright {
    background-color: #212832;
}
.copyright-link {
    padding-top: 15px;
}
.copyright-link a {
    font-weight: 400;
    font-size: 14px;
    color: #fff;
    position: relative;
    list-style: none;
    text-decoration: none;
}
.copyright-link a+a::before {
    content: '*';
    font-size: 15px;
    color: #a6afba;
    margin-left: 5px;
    margin-right: 10px;
    
}
.copyright-text {
    padding-top: 15px;
}
.copyright-wrapper {
    display: flex;
    justify-content: space-between;
    padding-bottom: 15px;
    padding-top: 5px;
}
.copyright-text p {
    color: #fff;
    font-size: 14px;
    font-weight: 400;
}
.copyright-text p span {
    color: #309255;
    text-transform: uppercase;
}
.copyright-text p i {
    color: #ff0000;
}
.icofont-heart-alt:before {
    content: "\ef44";
}
.copyright-text p a {
    color: #309255;
    transition: all 0.3s ease 0s;
    font-weight: 500;
    list-style: none;
    text-decoration: none;
}
/* Footer end */




/* About page end */
</style>