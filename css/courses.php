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
  background-color: var(--green);
  transition: 0.5s;
}
#toTopBtn:hover {
  background-color: #202020;
}

.js .cd-top--fade-out {
  opacity: 0.5;
}

.js .cd-top--is-visible {
  visibility: visible;
  opacity: 1;
}

.js .cd-top {
  visibility: hidden;
  opacity: 0;
  transition: opacity 0.3s, visibility 0.3s, background-color 0.3s;
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
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.05) !important;
  background: url(https://res.cloudinary.com/dxfq3iotg/image/upload/v1571057658/cd-top-arrow.svg)
    no-repeat center 50%;
  background-color: hsla(5, 76%, 62%, 0.8);
  border-radius: 30px;
  background-color: hsla(
    var(--cd-color-3-h),
    var(--cd-color-3-s),
    var(--cd-color-3-l),
    0.8
  );
}

.height {
  height: 600px;
}
/* scroll button end */


.page-banner {
    width: 100%;
    min-height: 600px;
    background-color: #e7f8ee;
    display: flex;
    align-items: center;
    padding-top: 10px;
    position: relative;
    overflow: hidden;
}
.page-banner .shape-1 {
  position: absolute;
  top: 23%;
  left: 100px;
  z-index: 10000;
  animation: round 8s linear 0s infinite normal forwards;
}
.page-banner .shape-2 {
  position: absolute;
  bottom: 0;
  left: 0;
}

@keyframes round {
  from {
    -webkit-transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(359deg);
  }
}

.page-banner .shape-author {
    position: absolute;
    top: 45%;
    right: 9.5%;
    border-radius: 50%;
}

.page-banner-content {
  margin-top: 14%;
  background-color: rgb(231 248 238);
}

.page-banner-content .breadcrumb {
  margin-bottom: 0;
  background-color:#e7f8ee;
}
.page-banner-content .breadcrumb li {
  font-size: 17px;
  font-weight: 500;
  color: #212832;
  position: relative;
  list-style: none;
}
.breadcrumb a {
  color: #1d2733;
  list-style: none;
  text-decoration: none;
}
.breadcrumb a:hover {
  color: #267544;
}
.page-banner-content .breadcrumb li.active {
  color: #309255;
  padding-left: 4px;
}
.breadcrumb li {
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
  content: "";
  background-image: url(../images/shape-4.webp);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  width: 120px;
  height: 13px;
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

@keyframes left {
  0% {
    transform: translateX(0);
  }
  50% {
    -webkit-transform: translateX(-40px);
    transform: translateX(-40px);
  }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }
}

.shape-icon-box .icon-shape-1 img {
  max-width: 100%;
  vertical-align: middle;
}

.page-banner .shape-2 {
  position: absolute;
  top: 67%;
  bottom: 0;
  left: 0;
}
.page-banner .shape-2 img {
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
  border: 1px solid rgba(48, 146, 85, 0.2);
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
} */

/* Page banner end  */

/* Blog Start */

.section-padding {
  padding-top: 80px;
  padding-bottom: 80px;
}
.blog-wrapper {
  padding-top: 20px;
}
.single-blog {
  margin-top: 30px;
}
.single-blog:hover {
  border: 1px solid #309255;
  border-radius: 10px;
}
.single-blog {
  margin-top: 30px;
  border: 1px solid rgba(48, 146, 85, 0.2);
  border-radius: 15px;
  padding: 20px;
  transition: all 0.3s ease 0s;
}

.single-blog .blog-image a {
  display: block;
  text-decoration: none;
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
.single-blog .blog-content .blog-author .author .author-thumb a img {
  width: 50px;
  border-radius: 50%;
}
.single-blog .blog-content .blog-author .author .author-name {
  flex: 1;
  padding-left: 12px;
}
.single-blog .blog-content .blog-author .author .author-name .name {
  color: #52565b;
  font-size: 14px;
  font-weight: 400;
  text-decoration: none;
  list-style: none;
  display: flex;
  justify-content: space-between;
  margin-right: 1rem;
}
.single-blog .blog-content .blog-author .author .author-name .name span {
  color: #a6afba;
  margin-left: 0.5rem;
}
.single-blog .blog-content .blog-author .author .author-name .name .active {
  color: #309255;
  margin-left: 1rem;
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
  text-decoration: none;
}
.single-blog .blog-content .blog-author .tag a:hover {
  color: #fff;
  background-color: #309255;
}
.single-blog .blog-content .title a {
  font-size: 16px;
  font-weight: 500;
  color: #212832;
  margin-top: 13px;
  display: inline-block;
  line-height: 1.4;
  text-decoration: none;
}
.single-blog .blog-content .line {
  height: 0.2rem;
  background-color: #267544;
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
  color: goldenrod;
  margin-right: 5px;
  font-size: 20px;
  display: inline-block;
  line-height: 1;
}
.single-blog .blog-content .btn {
  color: #fff;
  padding: 0 20px;
  height: 45px;
  line-height: 42px;
  border: 1px solid rgba(48, 146, 85, 0.2);
  font-size: 15px;
  margin-top: 30px;
}
.btn::before {
  width: 300px;
  height: 300px;
  position: absolute;
  content: "";
  top: 50%;
  left: 50%;
  z-index: -1;
  transition: 0.4s all linear;
  transform: translate(-50%, -50%) scale(0);
  border-radius: 50%;
}
.btn-secondary {
  color: #309255;
}

/* 1 2 3 =>  */

.page-pagination {
  padding-top: 60px;
}
.pagination {
  display: flex;
  padding-left: 0;
  list-style: none;
}
.page-pagination .pagination li {
  margin-right: 12px;
  list-style: none;
}
.page-pagination .pagination li a {
  width: 40px;
  height: 40px;
  line-height: 38px;
  text-align: center;
  font-size: 15px;
  font-weight: 500;
  color: #212832;
  border: 1px solid rgba(48, 146, 85, 0.2);
  display: block;
  transform: all 0.3s ease 0s;
  border-radius: 50%;
  text-decoration: none;
}
.page-pagination .pagination li a i {
  font-size: 12px;
}
.page-pagination .pagination li a.active,
.page-pagination .pagination li a:hover {
  color: #fff;
  background-color: #309255;
  border-color: #309255;
}

/* Blog End */

/* download-section start */

.download-section {
  background-color: #309255;
  position: relative;
  overflow: hidden;
}
.section-padding {
  padding-top: 80px;
  padding-bottom: 80px;
}
.download-section .app-shape-1 {
  width: 560px;
  height: 560px;
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: 50%;
  left: 70px;
  bottom: 85px;
  position: absolute;
}
.download-section .app-shape-2 {
  width: 560px;
  height: 560px;
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: 50%;
  left: 31%;
  top: 60px;
  position: absolute;
}

.download-section .app-shape-3 {
  width: 560px;
  height: 560px;
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: 50%;
  right: 15%;
  bottom: 70%;
  position: absolute;
}
.download-section .app-shape-4 {
  width: 560px;
  height: 560px;
  border: 1px solid rgba(255, 255, 255, 0.15);
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
  color: #fff;
}
.download-app-wrapper .shape-1 {
  position: absolute;
  top: 40%;
  left: 50%;
}
.animation-right {
  animation: right 5s linear 0s infinite normal forwards;
}

@keyframes right {
  0% {
    transform: translateX(0);
  }

  50% {
    transform: translateX(40px);
  }
  100% {
    transform: translateX(0);
  }
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
  margin-right: 8%;
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

/* download-section start */

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
}
.footer-widget .widget-link li a:hover {
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
  border: 1px solid rgba(48, 146, 85, 0.2);
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
  transform: translate();
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
@keyframes left {
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
}
.copyright-link a + a::before {
  content: "*";
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
  text-transform: uppercase;
}
.copyright-text p i {
  color: #ff0000;
}
.copyright-text p a {
  color: #309255;
  transition: all 0.3s ease 0s;
  font-weight: 500;
}

/* Footer end */
</style>