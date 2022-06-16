<Style>

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





.login-header {
    background-color: #212832;
}

.login-header-wrapper.navbar {
    padding: 0 0;
}
.navbar-expand {
    flex-wrap: nowrap;
    justify-content: flex-start;
}
.navbar{
    display: flex;
}

a {
    text-decoration: none;
    color: inherit;
}

img {
    max-width: 100%;
}
.login-header-logo.logo-2 {
    margin-right: 50px;
    padding: 35px 50px;
    background-color: #28313d;
}
.login-header-logo a+a {
    margin-left: 15px;
}
img, svg {
    vertical-align: middle;
}
.login-header-search.search-2 {
    margin-right: 0;
    margin-left: 0;
}
.login-header-search {
    position: relative;
    width: 500px;
}
.login-header-search button {
    position: absolute;
    width: 50px;
    height: 50px;
    line-height: 53px;
    text-align: center;
    border-radius: 10px;
    background-color: transparent;
    border: 0;
    top: 5px;
    right: 5px;
    font-size: 16px;
    color: #309255;
    z-index: 112;
}
.login-header-search .search-input {
    position: relative;
    padding: 0;
    background: none;
    display: block;
    z-index: 11;
    border-radius: 0;
    border: 0;
    top: 24%;
}
.dropdown-menu {
    min-width: 10rem;
    margin: 0;
    font-size: 1rem;
    color: #52565b;
    text-align: left;
    list-style: none;
}
.login-header-search .search-input input {
    width: 100%;
    height: 60px;
    border: 0;
    border-radius: 50px;
    padding: 0 30px;
    padding-right: 53px;
    outline: none;
    transition: all 0.3s ease 0s;
    background-color: #28313d;
    color: #fff;
    font-size: 16px;
    font-weight: 400;
}
a:hover {
    color: #267544;
}
.login-header-action .author img {
    width: 60px;
    border-radius: 50%;
}



.login-header-search.search-2 {
    margin-right: 0;
}
.login-header-search button {
    width: 50px;
    height: 50px;
    line-height: 103px;
    text-align: center;
    border-radius: 10px;
    background-color: transparent;
    border: 0;
    top: 5px;
    color: #309255;
    z-index: 112;
}

.login-header-search .search-input input {
    width: 100%;
    height: 60px;
    border: 0;
    border-radius: 50px;
    padding: 0 30px;
    padding-right: 53px;
    outline: none;
    transition: all 0.3s ease 0s;
    background-color: #28313d;
    color: #fff;
    font-size: 16px;
    font-weight: 400;
}
.login-header-action {
    display: flex;
    align-items: center;
}

.login-header-action .notification {
    color: #309255;
    position: relative;
    padding-top: 3px;
    border: 0;
    background: none;
}

.login-header-action.action-2 {
    margin-left: auto;
    margin-right: 25px;
}
.login-header-action>* {
    margin: 0px 15px;
}
.login-header-action .notification .active {
    width: 12px;
    height: 12px;
    background-color: #ff6e30;
    border: 2px solid #212832;
    position: absolute;
    top: 12px;
    right: 9px;
    border-radius: 5px;
}
.login-header-action .dropdown .dropdown-menu.dropdown-notification {
    width: 360px;
    padding: 0;
    right: -150px;
    display: none;
}
.login-header-action .dropdown .dropdown-menu {
    border-radius: 10px;
    box-shadow: 0 10px 30px 0 rgb(33 40 50 / 10%);
    background-color: #fff;
    left: auto;
}
.login-header-action .dropdown .dropdown-menu .notification-items-list .notification-item {
    display: flex;
    border-bottom: 1px solid #e0dddb;
    padding: 20px 25px;
}
.login-header-action .dropdown .dropdown-menu .notification-items-list .notification-item .notify-icon {
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    border-radius: 50%;
    display: inline-block;
    margin-right: 10px;
    padding: 0 9px;
}
.login-header-action .dropdown .dropdown-menu .notification-items-list .notification-item .dropdown-body {
    flex: 1;
}
.login-header-action .dropdown .dropdown-menu .notification-items-list .notification-item .dropdown-body p {
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    max-width: 200px;
    margin-bottom: 0;
    margin-top: 5px;
    font-weight: 400;
    font-size: 14px;
}
.login-header-action .dropdown .dropdown-menu .notification-items-list .notification-item .notify-time {
    width: 100%;
    white-space: nowrap;
    color: #828690;
    height: 35px;
    line-height: 35px;
    text-align: center;
    border-radius: 50%;
    display: inline-block;
    font-size: 13px;
    padding-left: 9px;
}
.login-header-action .dropdown .dropdown-menu .all-notification {
    display: block;
    padding: 15px 30px 15px;
    text-align: center;
    font-size: 14px;
    color: #212832;
    font-weight: 400;
}

.login-header-action .more {
    width: 36px;
    height: 36px;
    border: 0;
    background-color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.login-header-action .more span {
    width: 4px;
    height: 4px;
    background-color: #309255;
    border-radius: 50%;
    display: inline-block;
    margin: 0 1.5px;
}
.ytp-cued-thumbnail-overlay{
    position: absolute;
    width: 91%;
    height: 100%;
    top: 0;
    left: 0;
}
.login-header-action .dropdown .dropdown-menu {
    width: 160px;
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0 10px 30px 0 rgb(33 40 50 / 10%);
    background-color: #fff;
    left: auto;
    right: 0;
    display: none;
}
.login-header-action .dropdown .dropdown-menu li {
    border-bottom: 1px solid #ebedf2;
}
.login-header-action .dropdown .dropdown-menu li>a {
    display: block;
    color: #212832;
    font-size: 13px;
    font-weight: 600;
    padding: 9px 14px;
    transition: all 0.3s ease 0s;
}

/* Course Enroll Start */

iframe{
    width:100%;
}

.courses-enroll-wrapper {
    display: flex;
    flex-wrap: wrap;
}
.courses-video-player {
    flex-basis:70%;
    width: 71.8%;
    padding-bottom: 80px;
}
.courses-video-player .vidcontainer {
    background: #010101;
    height: 690px;
    position: relative;
}
.courses-video-player video {
    width: 70%;
    height: 690px;
    text-align: center;
    display: block;
}
.courses-video-player .video-play-bar {
    background-color: rgba(33,40,50,0.8);
    position: absolute;
    bottom: 20px;
    left: 30px;
    right: 30px;
    padding: 20px 40px;
    z-index: 13;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease 0s;
    transition-delay: 1.5s;
}
.courses-video-player .topControl {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    z-index: 1;
}
.courses-video-player .topControl .progress {
    width: calc(100% - 110px);
    height: 3px;
    position: relative;
    cursor: pointer;
    background-color: #7a8088;
}
.progress {
    display: flex;
    overflow: hidden;
    font-size: 0.75rem;
    border-radius: 0.25rem;
}
.courses-video-player .topControl .progress .bufferBar {
    z-index: 5;
    width: 0;
    background-color: rgba(255,255,255,0.6);
}
.courses-video-player .topControl .progress span {
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    display: block;
}
.courses-video-player .topControl .progress .timeBar {
    z-index: 10;
    width: 0;
    background-color: #ff0000;
}
.courses-video-player .topControl .progress span {
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    display: block;
}
.courses-video-player .topControl .time {
    white-space: nowrap;
    text-align: right;
    font-size: 12px;
    font-family: "Gordita";
    font-weight: 400;
    color: #fff;
}
.courses-video-player .controllers {
    width: 100%;
    display: flex;
    justify-content: space-between;
    margin-top: 8px;
    margin-left: -5px;
    margin-right: -5px;
}
.courses-video-player .controllers .disabled {
    pointer-events: none;
    cursor: not-allowed;
    color: rgba(255,255,255,0.5);
}
.courses-video-player .controllers button {
    border: 0;
    background: none;
    color: #fff;
    margin: 0 10px;
    outline: none;
    font-size: 15px;
    display: inline-block;
    padding: 0;
}
.courses-video-player .controllers .btnPlay:after {
    content: "\f04b";
    font-family: 'FontAwesome';
}
.courses-video-player .controllers .volume {
    position: relative;
    cursor: pointer;
    width: 70px;
    height: 5px;
    background-color: #7a8088;
    display: inline-block;
    margin-bottom: 2px;
}
.courses-video-player .controllers .volume .volumeBar {
    display: block;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: #ff0000;
    z-index: 10;
}
.courses-video-player .controllers .controllers-right {
    white-space: nowrap;
    text-align: right;
}
.courses-video-player .controllers .speedcnt {
    display: none;
    position: absolute;
    right: 60px;
    bottom: 46px;
    background-color: #fff;
    border-radius: 5px;
    transition: all 0.3s ease 0s;
}
.courses-video-player .controllers .speedcnt li {
    text-align: center;
    font-family: "Gordita";
    font-weight: 400;
    font-size: 11px;
    padding: 5px 20px;
    cursor: pointer;
    display: block;
    border-bottom: 1px solid rgba(48,146,85,0.2);
    transition: all 0.3s ease 0s;
    color: #52565b;
}
.courses-video-player .controllers .speedcnt li.selected {
    font-weight: 500;
    background-color: #309255;
    color: #fff;
}
.courses-video-player .bigplay {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 11;
    color: #fff;
    font-size: 90px;
    line-height: 90px;
    text-align: center;
    cursor: pointer;
    top: 0;
    left: 0;
}
.courses-video-player .bigplay:hover .courses-video-player .video-play-bar {
    visibility: visible;
}
.courses-video-player .bigplay i {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.courses-video-player .loading {
    width: 100%;
    height: 100%;
    background-color: #000;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 20;
}
.courses-video-player .loading .spinner {
    border-color: #fff;
    border-right-color: transparent;
    width: 70px;
    height: 70px;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -35px;
    margin-left: -35px;
}

.courses-enroll-content {
    padding: 0 70px;
}
.courses-enroll-content .courses-enroll-title {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 20px;
}
.courses-enroll-content .courses-enroll-title .title {
    max-width: 760px;
    font-size: 25px;
    font-weight: 500;
    line-height: 1.5;
    color: #212832;
    margin-bottom: 0;
    margin-top: 10px;
}
.courses-enroll-content .courses-enroll-tab-content .enroll-tab-title .title {
    font-size: 35px;
    font-weight: bold;
    line-height: 1.5;
    color: rgb(33, 40, 50);
    margin-bottom: 0px;
}
.courses-enroll-content .courses-enroll-title p {
    font-size: 25px;
    font-weight: 400;
    margin-top: 10px;
}
.courses-enroll-content .courses-enroll-title p i {
    color: #ff4200;
    margin-right: 3px;
}
.courses-enroll-content .courses-enroll-title p span {
    color: #ff4200;
}
.courses-enroll-content .courses-enroll-tab {
    background-color: #e7f8ee;
    padding: 5px 15px 15px;
    border-radius: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
}
.courses-enroll-content .courses-enroll-tab .enroll-tab-menu .nav {
    margin-left: -7px;
    margin-right: -7px;
}
.courses-enroll-content .courses-enroll-tab .enroll-tab-menu .nav li {
    padding: 10px 7px 0;
    list-style: none;
}
.nav {
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.courses-enroll-content .courses-enroll-tab .enroll-tab-menu .nav li button {
    border: 1px solid rgba(48,146,85,0.2);
    background-color: #fff;
    border-radius: 10px;
    padding: 0 15px;
    height: 45px;
    line-height: 41px;
    text-align: center;
    display: block;
    font-weight: 500;
    font-size: 15px;
    color: #212832;
    transition: all 0.3s ease 0s;
    white-space: nowrap;
}
.courses-enroll-content .courses-enroll-tab .enroll-tab-menu .nav li button.active, .courses-enroll-content .courses-enroll-tab .enroll-tab-menu .nav li button:hover {
    background-color: #309255;
    border-color: #309255;
    color: #fff;
}
.courses-enroll-content .courses-enroll-tab .enroll-share {
    padding-top: 10px;
}
.courses-enroll-content .courses-enroll-tab .enroll-share a {
    border: 1px solid rgba(48,146,85,0.2);
    background-color: #fff;
    border-radius: 10px;
    padding: 0 25px;
    height: 45px;
    line-height: 43px;
    text-align: center;
    display: inline-block;
    font-weight: 500;
    font-size: 15px;
    color: #212832;
    transition: all 0.3s ease 0s;
    white-space: nowrap;
}
.courses-enroll-content .courses-enroll-tab .enroll-share a i {
    margin-right: 5px;
    font-size: 20px;
    color: #309255;
    transition: all 0.3s ease 0s;
}
.courses-enroll-content .courses-enroll-tab-content {
    border: 1px solid rgba(48,146,85,0.2);
    padding: 10px 50px 35px;
    border-radius: 10px;
    margin-top: 30px;
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
.tab-content .tab-pane.active {
    height: auto;
    visibility: visible;
    opacity: 1;
    overflow: visible;
}
.courses-enroll-content .courses-enroll-tab-content .enroll-tab-title {
    padding-top: 20px;
}
.courses-enroll-content .courses-enroll-tab-content .enroll-tab-title .title {
    font-size: 25px;
    font-weight: 500;
    line-height: 1.5;
    color: #212832;
    margin-bottom: 0;
}
.courses-enroll-content .courses-enroll-tab-content .enroll-tab-content {
    padding-top: 25px;
}
.courses-enroll-content .courses-enroll-tab-content .enroll-tab-content p {
    font-size: 15px;
    font-weight: 400;
}
.courses-enroll-content .courses-enroll-tab-content .enroll-tab-content .table {
    border-top: 1px solid rgba(48,146,85,0.2);
    margin-bottom: 25px;
    margin-top: 25px;
}
.table>tbody {
    vertical-align: inherit;
}
.courses-enroll-content .courses-enroll-tab-content .enroll-tab-content .table tbody tr th {
    width: 170px;
    border-color: rgba(48,146,85,0.2);
    padding: 12px 30px;
    padding-right: 0;
    font-size: 15px;
    font-weight: bold;
    color: #212832;
    white-space: nowrap;
}
.courses-enroll-content .courses-enroll-tab-content .enroll-tab-content .table tbody tr th span {
    display: block;
    float: right;
}
.courses-enroll-content .courses-enroll-tab-content .enroll-tab-content .table tbody tr td {
    border-color: rgba(48,146,85,0.2);
    padding: 12px 30px;
    font-size: 15px;
    font-weight: 400;
    color: #52565b;
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

.courses-video-playlist {
    width: 30%;
    background-color: #eefbf3;
}
.courses-video-playlist .playlist-title {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    align-items: center;
    padding: 15px 30px 25px;
    background-color: #dff0e6;
}
.courses-video-playlist .playlist-title .title {
    font-size: 22px;
    font-weight: 500;
    color: #212832;
    margin-bottom: 0;
    margin-top: 10px;
}
.courses-video-playlist .playlist-title span {
    font-size: 18px;
    font-weight: 500;
    color: #309255;
    display: inline-block;
    margin-top: 10px;
}
.courses-video-playlist .video-playlist .accordion-item {
    text-align: left;
    border: 0;
    margin-bottom: 0;
    background: none;
}
.courses-video-playlist .video-playlist .accordion-item button.collapsed {
    background-color: #eefbf3;
}
.courses-video-playlist .video-playlist .accordion-item button.collapsed::before {
    content: '';
    color: #212832;
}
.courses-video-playlist .video-playlist .accordion-item button::before {
    font-family: IcoFont;
    font-size: 20px;
    position: absolute;
    top: 8px;
    right: 30px;
    transition: all 0.3s ease 0s;
}
.courses-video-playlist .video-playlist .accordion-item button.collapsed p {
    color: #212832;
}
.courses-video-playlist .video-playlist .accordion-item button p {
    margin-bottom: 0;
    font-size: 15px;
    font-weight: 500;
    color: #309255;
    transition: all 0.3s ease 0s;
    max-width: 420px;
}
.courses-video-playlist .video-playlist .total-duration {
    font-size: 13px;
    font-weight: 400;
    color: #848886;
    margin-top: 6px;
    display: block;
}
.courses-video-playlist .video-playlist .vids a {
    display: block;
    padding: 8px 80px;
    padding-right: 30px;
    border-bottom: 1px solid #cde9d7;
    position: relative;
}
.courses-video-playlist .video-playlist .vids a.active p {
    color: #309255;
}
.courses-video-playlist .video-playlist .vids a p {
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 500;
    color: #212832;
    transition: all 0.3s ease 0s;
}
.courses-video-playlist .video-playlist .vids a::before{
    position: absolute;
    content: '';
    width: 13px;
    height: 13px;
    border: 3px solid #309255;
    border-radius: 50%;
    top: 13px;
    left: 48px;
}
.courses-video-playlist .video-playlist .accordion-item {
    text-align: left;
    border: 0;
    margin-bottom: 0;
    background: none;
}
.courses-video-playlist .video-playlist .vids a.active::before {
    background-color: #309255;
    border-color: #acd6bc;
}
.courses-video-playlist .video-playlist .accordion-item button.collapsed {
    background-color: #eefbf3;
}

.courses-video-playlist .video-playlist .accordion-item button {
    border: 0;
    background: none;
    text-align: left;
    display: block;
    width: 100%;
    border-bottom: 1px solid #cde9d7;
    padding: 8px 30px;
    padding-right: 50px;
    background-color: #e0f1e7;
    position: relative;
    transition: all 0.3s ease 0s;
}

/* Course Enroll End */



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





/* Responsive Page */


@media only screen and (max-width: 767px)
{
.login-header-logo.logo-2 {
    padding: 20px 20px;
    margin-right: 30px;
}}

@media only screen and (max-width: 767px)
{
.login-header-search.search-2 {
    margin-left: auto;
}}

@media only screen and (max-width: 575px)
{
.login-header-search button {
    position: relative;
    top: 0;
    right: 0;
    font-size: 20px;
}}

@media only screen and (max-width: 575px)
{
.login-headertt-search buon {
    font-size: 20px;
}}

@media only screen and (max-width: 767px)
{
.login-header-search .search-input {
    background-color: #28313d;
    align-items: center;
    z-index: 113;
    display: none;
}}

@media only screen and (max-width: 767px)
{
.login-header-action.action-2 {
    margin-left: 0;
}}

@media only screen and (max-width: 767px)
{
.login-header-action {
    padding-right: 5px;
}}

@media only screen and (min-width: 768px) and (max-width: 991px), only screen and (max-width: 575px)
{
.login-header-action>* {
    margin: 0px 7px;
}}

@media only screen and (max-width: 575px)
{
.login-header-action .notification {
    font-size: 22px;
}}



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


</Style>