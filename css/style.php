
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

/* header */

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
#click{
    display: none;
}
#click:checked ~ .header-menu ul {
    left: 0%;
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

/*   */


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



.slider-section {
    background-color: #eefbf3;
    height: 940px;
    position: relative;
    overflow: hidden;
    z-index: 2;
    padding-top: 188px;
    display: flex;
    align-items: center;
}
.slider-section .slider-shape {
    position: absolute;
    left: 70px;
    top: 165px;
}
.animation-round {
    animation: round 15s linear 0s infinite normal forwards;
}

@keyframes round {
0% {
    -webkit-transform: rotate(0);
    transform: rotate(0);
}
100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
}
}


.slider-content {
    max-width: 410px;
    margin-bottom: 10%;
}
.slider-content .sub-title {
    font-size: 20px;
    font-weight: 500;
    margin-bottom: 0;
    color: #309255;
}
.slider-content .main-title {
    font-size: 40px;
    font-weight: 500;
    line-height: 1.3;
    margin-bottom: 0;
    margin-top: 25px;
}
.slider-content .main-title span::before {
    position: absolute;
    content: '';
    background-image: url(../Images/shape-4.webp);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    width: 214px;
    height: 21px;
    left: 50%;
    bottom: -26px;
    transform: translateX(-50%);
}

.slider-content .main-title span {
    color: #309255;
    position: relative;
}
.slider-content p {
    font-size: 18px;
    margin-top: 55px;
    margin-bottom: 0;
}
.slider-content .btn {
    margin-top: 28px;
}

/* Button */




.btn {
    display: inline-block;
    font-weight: 500;
    line-height: 3.75rem;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    user-select: none;
    background-color: transparent;
    border: 0 solid transparent;
    padding: 0 2.188rem;
    font-size: 1.125rem;
    border-radius: 10px;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
.btn-primary {
    background-color: #309255;
    color: #fff;
}
.btn-primary:hover{
    background-color: #212832;
    color: #fff;
}

/* Button */

.slider-courses-box {
    position: absolute;
}
.slider-courses-box .shape-1 {
    position: absolute;
    top: -15px;
}
.slider-courses-box .box-content {
    width: 140px;
    height: 140px;
    text-align: center;
    background-color: #309255;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
}
.slider-courses-box .box-content i {
    color: #fff;
    display: block;
    line-height: 1;
}
.slider-courses-box .box-content .count {
    font-weight: 700;
    color: #fff;
    display: block;
    line-height: 1.1;
}
.slider-courses-box .box-content p {
    font-weight: 400;
    color: #fff;
}
.slider-rating-box {
    position: absolute;
}
.slider-rating-box .box-rating {
    width: 140px;
    height: 140px;
    text-align: center;
    background-color: #fff;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
}
.slider-rating-box .box-rating .count {
    font-weight: 500;
    color: #309255;
}
.slider-rating-box .box-rating .count i {
    color: #ffa200;
    font-size: 14px;
    display: inline-block;
}
.slider-rating-box .box-rating p {
    color: #52565b;
    margin-bottom: 0;
}

.slider-rating-box .shape {
    padding-right: 30px;
}
.animation-up {
    animation: up 5s linear 0s infinite normal forwards;
}

@keyframes up
{
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-40px);
    }
    100% {
        transform: translateY(0);
    }
}

.slider-courses-box {
    position: absolute;
    top: 30%;
    left: 50%;
}
.slider-courses-box .shape-1 {
    position: absolute;
    top: -15px;
    right: -130px;
}
.animation-left {
    animation: left 5s linear 0s infinite normal forwards;
}
@keyframes left 
{
    0% {
        transform: translateX(0);
    }
    50% {
        transform: translateX(-40px);
    }
    100% {
        transform: translateX(0);
    }
}


.slider-images {
    position: absolute;
    bottom: 10%;
    right: 0;
    width: 56%;
    height: 100%;
    display: flex;
    align-items: flex-end;
}
.slider-video {
    position: absolute;
    left: 0;
    bottom: 0;
}
.slider-video .video-play {
    position: absolute;
    top: 53%;
    left: 38%;
    transform: translateX(-50%) translateY(-50%);
}
.slider-video .video-play .play {
    font-size: 30px;
    color: #ffa200;
    position: absolute;
    top: 55%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    display: inline-block;
}
.courses-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.section-title .main-title {
    font-weight: 500;
    margin-bottom: 0;
    line-height: 1.4;
}
.section-title .main-title span {
    color: #309255;
    position: relative;
}
.section-title.shape-01 .main-title span::before {
    position: absolute;
    content: '';
    background-image: url(../Images/shape-11.webp);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    width: 122px;
    height: 24px;
    left: 50%;
    bottom: -26px;
    transform: translateX(-50%);
}
.courses-search {
    position: relative;
    max-width: 500px;
    width: 100%;
}
/* .courses-search:hover{
    border: 1px solid #309255;
} */
i:hover{
    color:#339255;
}
.courses-search input {
    width: 100%;
    height: 64px;
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 10px;
    padding: 0 30px;
    padding-right: 90px;
    outline: none;
    transition: all 0.3s ease 0s;
}
.courses-search input:hover {
    border-radius:10px;
    border: 1px solid #339255;
}
.courses-search button {
    position: absolute;
    width: 50px;
    height: 50px;
    line-height: 54px;
    text-align: center;
    border-radius: 10px;
    background-color: #deede4;
    border: 0;
    top: 7px;
    right: 7px;
    font-size: 16px;
    color: #309255;
}
.courses-tabs-menu {
    background-color: #eefbf3;
    padding: 40px 100px;
    border-radius: 10px;
    margin-top: 50px;
    position: relative;
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
.courses-tabs-menu .nav {
    flex-wrap: nowrap;
}
.nav {
    display: flex;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.swiper-slide {
    flex-shrink: 0;
    height: 100%;
    position: relative;
    transition-property: transform;
}
.courses-tabs-menu .nav li button.active, .courses-tabs-menu .nav li button:hover {
    border-color: #309255;
    color: #309255;
}
.courses-tabs-menu .nav li button {
    width: 100%;
    height: 60px;
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 10px;
    background-color: #fff;
    color: #212832;
    font-size: 15px;
    font-weight: 500;
    transition: all 0.3s ease 0s;
    padding: 0 15px;
    white-space: nowrap;
}
.swiper-container .swiper-notification {
    position: absolute;
    left: 0;
    top: 0;
    pointer-events: none;
    opacity: 0;
    z-index: -1000;
}
.courses-active .swiper-button-next {
    right: 30px;
}



.courses-active .swiper-button-prev {
    left: 30px;
}

.tab-content .tab-pane.active {
    height: auto;
    visibility: visible;
    opacity: 1;
    overflow: visible;
}
.tab-content .tab-pane {
    display: block;
    max-width: 100%;
    transition: all 0.3s ease 0s;
}
.courses-wrapper {
    padding-top: 20px;
}
.single-courses {
    margin-top: 30px;
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 15px;
    padding: 20px;
    transition: all 0.3s ease 0s;
}
.single-courses:hover{
    border: 1px solid #309255;
}
.single-courses .courses-images {
    position: relative;
}
.single-courses .courses-images a {
    display: block;
}
.single-courses .courses-images a img {
    width: 100%;
    border-radius: 15px;
}
.single-courses .courses-content {
    padding-top: 25px;
}
.single-courses .courses-content .courses-author {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.single-courses .courses-content .courses-author .author {
    display: flex;
    align-items: center;
}
.single-courses .courses-content .courses-author .author .author-thumb a {
    display: block;
}
.single-courses .courses-content .courses-author .author .author-thumb a img {
    width: 50px;
    border-radius: 50%;
}

.single-courses .courses-content .courses-author .author .author-name {
    flex: 1;
    padding-left: 12px;
}
.single-courses .courses-content .courses-author .author .author-name .name {
    color: #52565b;
    font-family: "Gordita";
    font-size: 14px;
    font-weight: 400;
    text-decoration: none;
}
.single-courses .courses-content .courses-author .tag a {
    width: 100px;
    height: 35px;
    line-height: 35px;
    background-color: #e7f8ee;
    font-size: 14px;
    color: #309255;
    display: inline-block;
    text-align: center;
    border-radius: 5px;
    padding: 0 10px;
    text-decoration: none;
}
.single-courses .courses-content .courses-author .tag a:hover{
    background-color: #309255;
    color: #fff;
}
.single-courses .courses-content .title a {
    font-size: 16px;
    font-weight: 500;
    color: #212832;
    margin-top: 13px;
    display: inline-block;
    line-height: 1.4;
    text-decoration:none;
    transition: 0.3s;
}
.single-courses .courses-content .title a:hover{
    color: #339255;
}
.single-courses .courses-content .courses-meta {
    display: flex;
    justify-content: space-between;
    padding-top: 10px;
}
.single-courses .courses-content .courses-meta span {
    font-size: 14px;
    font-weight: 400;
    color: #52565b;
    margin-right: 20px;
    display: inline-block;
    line-height: 1;
}
.single-courses .courses-content .courses-meta span i {
    color: #309255;
    margin-right: 5px;
    font-size: 20px;
    display: inline-block;
    line-height: 1;
}
.single-courses .courses-content .courses-meta span:last-child {
    margin-right: 0;
}
.single-courses .courses-content .courses-price-review {
    background-color: #309255;
    padding: 16px 125px;
    border-radius: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
    transition: 0.3s;
    cursor: pointer;
}
.single-courses .courses-content .courses-price-review:hover{
    background-color: #000;
    color:#000;
}

.single-courses .courses-content .courses-price-review .courses-price .sale-parice {
    font-size: 18px;
    font-weight: 700;
    color: #309255;
    margin-right: 5px;
}
.single-courses .courses-content .courses-price-review .courses-price .old-parice {
    font-size: 15px;
    font-weight: 500;
    color: #212832;
    text-decoration: line-through;
    margin-right: 5px;
}
.single-courses .courses-content .courses-price-review .courses-review .rating-count {
    font-size: 15px;
    font-weight: 500;
    color: #fff;
    margin-right: 2px;
    align-items: center;
}
.single-courses .courses-content .courses-price-review .courses-review .rating-star {
    position: relative;
}

.single-courses .courses-content .courses-price-review .courses-review .rating-star .rating-bar {
    position: absolute;
    top: -2px;
    left: 0;
    height: 100%;
    overflow: hidden;
}
.single-courses .courses-content .courses-price-review .courses-review .rating-star .rating-bar::before {
    content: '\f000 \f000 \f000 \f000 \f000';
    font-family: IcoFont;
    color: #ffba00;
    font-size: 14px;
    letter-spacing: 2px;
}
.tab-content .tab-pane.active {
    height: auto;
    visibility: visible;
    opacity: 1;
    overflow: visible;
}
.courses-wrapper {
    padding-top: 20px;
}


.tab-content .tab-pane {
    display: block;
    overflow: hidden;
    height: 0;
    visibility: hidden;
    max-width: 100%;
    opacity: 0;
    transition: all 0.3s ease 0s;
}
.courses-btn {
    margin-top: 40px;
}
.courses-btn {
    margin-top: 40px;
}
.courses-btn .btn {
    color: #309255;
    border: 1px solid #309255;
    line-height: 58px;
}
.courses-btn .btn:hover{
    background-color: #212832;
    color: #fff;
}



.section-padding-02 {
    padding-top: 80px;
}
.call-to-action-wrapper {
    margin-top: 6%;
    background-color: #e7f8ee;
    border-radius: 10px;
    padding: 43px 100px 100px 50px;
    position: relative;
}
.call-to-action-wrapper .cat-shape-01 {
    position: absolute;
    bottom: 30px;
    left: 30px;
}
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

}
.section-title .sub-title {
    font-size: 20px;
    font-weight: 500;
    color: #309255;
    margin-bottom: 20px;
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
.how-it-work-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 20px;
}
.single-work {
    max-width: 300px;
    border-radius: 10px;
    background-color: #e7f8ee;
    padding: 38px;
    padding-bottom: 35px;
    margin-top: 30px;
    overflow: hidden;
    position: relative;
    z-index: 1;
}
.single-work .shape-1 {
    position: absolute;
    left: -17px;
    top: 0;
    z-index: -1;
}
.single-work .work-icon i {
    width: 65px;
    height: 65px;
    line-height: 68px;
    text-align: center;
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 10px;
    background-color: #fff;
    color: #309255;
    display: inline-block;
    font-size: 32px;
    transition: all 0.3s ease 0s;
}
.single-work:hover .work-icon i{
    color: #fff;
    background-color: #309255;
}
.single-work .work-content {
    padding-top: 33px;
}
.single-work .work-content .title {
    font-size: 25px;
    font-weight: 500;
    color: #212832;
    margin-bottom: 0;
}
.single-work .work-content p {
    font-size: 14px;
    color: #696969;
    margin-bottom: 0;
    margin-top: 15px;
}
.how-it-work-wrapper .work-arrow {
    margin-top: 30px;
}

.section-title.shape-03 {
    padding-bottom: 11px;
}
.blog-wrapper {
    padding-top: 20px;
}
.single-blog {
    margin-top: 30px;
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 15px;
    padding: 20px;
    transition: all 0.3s ease 0s;
}
.single-blog:hover{
    border: 1px solid #309255;
}
.single-blog .blog-image a {
    display: block;
}
.single-blog .blog-image a img {
    width: 100%;
    border-radius: 15px;
}
.single-blog .blog-content {
    padding-top: 25px;
}
.single-blog .blog-content .blog-author {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.single-blog .blog-content .blog-author .author {
    display: flex;
    align-items: center;
}
.single-blog .blog-content .blog-author .author .author-thumb a {
    display: block;
}
.single-blog .blog-content .blog-author .author .author-name {
    flex: 1;
    padding-left: 12px;
}
.single-blog .blog-content .blog-author .author .author-name .name {
    color: #52565b;
    font-size: 14px;
    font-weight: 400;
}
.single-blog .blog-content .blog-author .tag a {
    width: 100px;
    height: 35px;
    line-height: 35px;
    background-color: #e7f8ee;
    border-radius: 5px;
    font-size: 14px;
    color: #309255;
    display: inline-block;
    text-align: center;
    border-radius: 5px;
    padding: 0 10px;
}
.single-blog .blog-content .blog-author .tag a:hover{
    color: #fff;
    background-color: #309255;
}
.single-blog .blog-content .blog-author .author .author-thumb a img {
    width: 50px;
    border-radius: 50%;
}
.single-blog .blog-content .title a {
    font-size: 16px;
    font-weight: 500;
    color: #212832;
    margin-top: 13px;
    display: inline-block;
    line-height: 1.4;
    text-decoration:none;
    transition: 0.3s;
}
a{
    text-decoration: none;
}
.single-blog .blog-content .title a:hover{
    color: #339255;
}
.single-blog .blog-content .blog-meta {
    display: flex;
    justify-content: space-between;
    padding-top: 10px;
}
.single-blog .blog-content .blog-meta span {
    font-size: 14px;
    font-weight: 400;
    color: #52565b;
    margin-right: 20px;
    display: inline-block;
    line-height: 1;
}
.single-blog .blog-content .blog-meta span i {
    color: #309255;
    margin-right: 5px;
    font-size: 20px;
    display: inline-block;
    line-height: 1;
}
.single-blog .blog-content .blog-meta span:last-child {
    margin-right: 0;
}
.single-blog .blog-content .blog-meta span {
    font-size: 14px;
    font-weight: 400;
    color: #52565b;
    display: inline-block;
    line-height: 1;
}
.single-blog .blog-content .blog-meta span i {
    color: #309255;
    margin-right: 5px;
    font-size: 20px;
    display: inline-block;
    line-height: 1;
}
.single-blog .blog-content .btn {
    color: #309255;
    padding: 0 20px;
    height: 45px;
    line-height: 39px;
    border: 1px solid rgba(48,146,85,0.2);
    font-size: 15px;
    margin-top: 30px;
}
.single-blog .blog-content .btn:hover{
    background-color: #309255;
    color: #fff;
}



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
.animation-down {
    animation: down 5s linear 0s infinite normal forwards;
}
@keyframes down {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(40px);
    }
    100% {
        transform: translateY(0);
    }
}

.footer-widget {
    margin-top: 50px;
}
a {
    text-decoration: none;
    color: inherit;
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
.footer-widget .widget-info {
    padding-top: 25px;
}
.footer-widget .widget-info li {
    list-style: none;
    list-style: none;
}
.footer-widget .widget-info li p {
    font-size: 15px;
    color: #212832;
    display: flex;
    align-items: flex-start;
    margin-bottom: 0;
}
.footer-widget .widget-info li p i {
    font-size: 20px;
    color: #309255;
    list-style: none;
}
.footer-widget .widget-info li p a {
    margin-top: 3px;
    margin-left: 15px;
    text-decoration: none;
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
    color: #212832;
    transition: all 0.3s ease 0s;
    font-size: 15px;
    font-weight: 400;
    text-decoration:none;
}
.footer-widget .widget-link li a:hover{
    color: #309255;
}

.footer-widget-title {
    color: #212832;
    font-weight: 500;
    font-size: 22px;
    margin-bottom: 0px;
}
.footer-widget .widget-subscribe {
    padding-top: 36px;
}
.footer-widget .widget-subscribe p {
    color: #212832;
    font-size: 15px;
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
    border: none;
    background-color: #309255;
    border-color: #309255;
    transform: translate();
    border-radius: 10px;
}
.footer-widget .widget-subscribe .widget-form .btn:hover{
    color: #fff;
    background-color: #1d2733;
}

.footer-widget-section .shape-2 {
    position: absolute;
    right: 3%;
    bottom: 95px;
    z-index: -1;
}
.animation-left {
    animation: left 5s linear 0s infinite normal forwards;
}
@keyframes left{
    0% {
        transform: translateX(0);
    }
    
    50% {
        transform: translateX(-40px);
    }
    100% {
        transform: translateX(0);
    }
}

.footer-copyright {
    background-color: #212832;
}
.copyright-wrapper {
    display: flex;
    justify-content: space-between;
    padding-bottom: 15px;
    padding-top: 5px;
}
.copyright-link {
    padding-top: 15px;
}
.copyright-link a {
    font-weight: 400;
    font-size: 14px;
    color: #fff;
    position: relative;
    text-decoration:none;
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
.copyright-text p {
    color: #fff;
    font-size: 14px;
    font-weight: 400;
}
.copyright-text p span {
    color: #309255;
    font-weight: bold;
}
.copyright-text p i {
    color: #ff0000;
}
.copyright-text p a {
    color: #309255;
    transition: all 0.3s ease 0s;
    font-weight: 500;
    text-decoration: none;
}


/* Footer end */




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
    background-color: #309255;
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






/* Responsive  */



@media (min-width: 992px){
.d-lg-block {
    display: block !important;
}}
@media (min-width: 1200px){
.container, .container-sm, .container-md, .container-lg, .container-xl {
    max-width: 1200px;
}}

@media (min-width: 992px)
{
.col-lg-4 {
    flex: 0 0 auto;
    width: 33.33333%;
}}

@media only screen and (min-width: 768px) 
and (max-width: 991px), only screen and (max-width: 767px)
{
.slider-section {
    height: auto;
    padding-top: 200px;
    display: block;
}}

@media only screen and (min-width: 768px) 
and (max-width: 991px), only screen and (max-width: 767px)
{
.slider-section .slider-shape {
    display: none;
}}

@media only screen and (max-width: 767px)
{
.btn {
    font-size: 14px;
}}

@media only screen and (max-width: 767px)
{
.slider-courses-box {
    top: 63%;
    left: 50%;
}}

@media only screen and (max-width: 767px)
{
.slider-courses-box .shape-1 {
    right: -100px;
}}

@media only screen and (max-width: 767px)
{
.slider-courses-box .box-content {
    width: 100px;
    height: 100px;
}}

@media only screen and (max-width: 767px)
{
.slider-courses-box .box-content i {
    font-size: 20px;
}}

@media only screen and (max-width: 767px)
{
.slider-courses-box .box-content .count {
    font-size: 22px;
}}

@media only screen and (max-width: 767px)
{
.slider-courses-box .box-content p {
    font-size: 14px;
}}

@media only screen and (max-width: 767px)
{
.slider-courses-box .shape-2 {
    width: 140px;
}}

@media only screen and (min-width: 768px) and (max-width: 991px), only screen and (max-width: 767px)
{
.slider-rating-box {
    top: 18%;
    right: 15px;
}}

@media only screen and (max-width: 767px)
{
.slider-rating-box .box-rating {
    width: 100px;
    height: 100px;
}}

@media only screen and (max-width: 767px)
{
.slider-rating-box .box-rating .count {
    font-size: 24px;
}}

@media only screen and (max-width: 767px)
{
.slider-rating-box .box-rating p {
    font-size: 12px;
}}

@media only screen and (max-width: 767px)
{
.slider-rating-box .shape {
    width: 120px;
    margin-top: 30px;
}}

@media only screen and (min-width: 768px) and (max-width: 991px), only screen and (max-width: 767px)
{
.slider-images {
    position: relative;
    width: 55%;
    margin-left: auto;
}}

@media only screen and (min-width: 768px) and (max-width: 991px), only screen and (max-width: 767px)
{
.slider-video {
    width: 45%;
}}

@media only screen and (min-width: 1200px) and (max-width: 1599px), only screen and (max-width: 767px)
{
.slider-video .video-play {
    width: 100px;
}}

@media only screen and (max-width: 767px)
{
.slider-video .video-play .play {
    font-size: 24px;
}}

@media only screen and (max-width: 767px)
{
.section-padding-02 {
    padding-top: 60px;
}}

@media only screen and (max-width: 767px)
{
.courses-top {
    display: block;
}}

@media only screen and (max-width: 767px)
{
.courses-top .section-title {
    margin-top: 0;
}}

@media only screen and (max-width: 767px)
{
.section-title .main-title {
    font-size: 30px;
}}

@media only screen and (max-width: 767px)
{
.courses-search {
    margin-top: 55px;
}}

@media only screen and (min-width: 1200px) and (max-width: 1599px), only screen and (min-width: 992px) and (max-width: 1199px)
{
.slider-rating-box {
    right: 15px;
    top: 20%;
}}

@media (min-width: 992px)
{
.col-lg-4 {
    flex: 0 0 auto;
    width: 33.33333%;
}}

@media (min-width: 1200px)
{
.h4, h4 {
    font-size: 1.5rem;
}}
@media (min-width: 768px)
{
.col-md-6 {
    flex: 0 0 auto;
    width: 50%;
}}

@media only screen and (max-width: 767px)
{
.section-title .main-title {
    font-size: 30px;
}}

@media only screen and (max-width: 767px)
{
.call-to-action-btn {
    text-align: left;
}
.call-to-action-wrapper .cat-shape-02{
    display: none;
}
}

@media only screen and (max-width: 767px)
{
.section-title .main-title {
    font-size: 30px;
}}

@media only screen and (max-width: 767px)
{
.how-it-work-wrapper {
    display: block;
}}

@media only screen and (max-width: 767px)
{
.single-work {
    margin-left: auto;
    margin-right: auto;
}}

@media only screen and (max-width: 767px)
{
.work-arrow {
    display: none;
}}

@media (min-width: 992px)
{
.col-lg-4 {
    flex: 0 0 auto;
    width: 33.33333%;
}}

@media (max-width: 991px) 
{
.header-menu ul{
    position: fixed;
    top: 80px;
    left: -100%;
    background: #111;
    height: 100vh;
    width: 100%;
    display: block;
    text-align: center;
}
.header-menu ul li{
    margin:  40px 0;
}
.header-menu ul li a{
    font-size: 20px;
    display: block;
}}
@media (max-width: 768px)
{
.header-menu ul{
    position: fixed;
    top: 80px;
    left: -100%;
    background: #111;
    height: 100vh;
    width: 100%;
    display: block;
    text-align: center;
}
.header-menu ul li{
    margin:  40px 0;
}
.header-menu ul li a{
    font-size: 20px;
    display: block;
}

}

@media (min-width: 992px)
{
.order-lg-1 {
    order: 1 !important;
}}

@media (min-width: 992px)
{
.order-lg-2 {
    order: 2 !important;
}}

@media only screen and (max-width: 767px)
{
.footer-widget-section {
    padding-top: 10px;
    padding-bottom: 60px;
}}

@media only screen and (min-width: 768px) and (max-width: 991px), only screen and (max-width: 767px)
{
.footer-widget-section .shape-1 {
    display: none;
}}

@media only screen and (min-width: 768px) and (max-width: 991px), only screen and (max-width: 767px)
{
.copyright-wrapper {
    display: block;
    text-align: center;
}}


/* Responsive Close */

</style>