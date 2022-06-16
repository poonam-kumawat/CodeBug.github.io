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
    z-index: 10000;
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
    padding-left: 4px;
}
.breadcrumb li{
    margin-top: 30px;
    list-style: none;
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



/* Blog Details Start  */


.section-padding {
    padding-top: 80px;
    padding-bottom: 80px;
}
.blog-details-wrapper {
    margin-top: 50px;
}
.blog-details-admin-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.blog-details-admin-meta .author {
    display: flex;
    align-items: center;
}
.blog-details-admin-meta .author .author-thumb a {
    display: block;
    text-decoration: none;
}
.blog-details-admin-meta .author .author-thumb a img {
    width: 50px;
    border-radius: 50%;
}
.blog-details-admin-meta .author .author-name {
    flex: 1;
    padding-left: 12px;
}
.blog-details-admin-meta .author .author-name .name {
    color: #52565b;
    font-size: 14px;
    font-weight: 400;
}
.blog-details-admin-meta .blog-meta {
    display: flex;
    align-items: center;
}
.blog-details-admin-meta .blog-meta span {
    font-size: 14px;
    font-weight: 400;
    color: #52565b;
    margin-right: 40px;
    display: inline-block;
    line-height: 1;
}
.blog-details-admin-meta .blog-meta span i {
    color: #309255;
    margin-right: 5px;
    font-size: 20px;
    display: inline-block;
    line-height: 1;
}
.blog-details-admin-meta .blog-meta span {
    font-size: 14px;
    font-weight: 400;
    color: #52565b;
    display: inline-block;
    line-height: 1;
}
.blog-details-admin-meta .blog-meta .tag a {
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
}
.blog-details-wrapper .title {
    font-size: 25px;
    font-weight: 500;
    color: #212832;
    margin-bottom: 0;
    line-height: 1.5;
    margin-top: 20px;
}
.blog-details-description {
    padding-top: 6px;
    padding-bottom: 20px;
}
.blog-details-description p {
    margin-bottom: 0;
    font-size: 15px;
    font-weight: 400;
    margin-top: 15px;
    color: #52565b;
}
.blog-details-description img {
    border-radius: 10px;
    margin-top: 35px;
}
.blockquote {
    display: flex;
    align-items: center;
    margin-bottom: 0;
    margin-top: 22px;
    padding-bottom: 8px;
    padding-left: 55px;
    font-size: 1.25rem;
}
.blockquote .quote {
    font-size: 150px;
    font-weight: 500;
    color: #309255;
    line-height: 120px;
    height: 60px;
    display: block;
}
.blog-details-label {
    display: flex;
    align-items: center;
    padding-top: 10px;
}
.blog-details-label .label {
    font-size: 25px;
    font-weight: 500;
    color: #212832;
    margin-bottom: 0;
    line-height: 1.5;
    margin-top: 10px;
    padding-right: 20px;
}
.blog-details-label .tag-list {
    display: flex;
    flex-wrap: wrap;
    flex: 1;
}
.blog-details-label .tag-list li {
    padding-right: 20px;
    padding-top: 10px;
    list-style: none;
}
.blog-details-label .tag-list li a {
    width: 110px;
    height: 45px;
    line-height: 43px;
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 10px;
    color: #212832;
    text-align: center;
    display: block;
    transition: all 0.3s ease 0s;
}
.comment-wrapper {
    margin-top: 50px;
}
.blog-details-comment .title {
    font-size: 25px;
    font-weight: 500;
    color: #212832;
    margin-bottom: 0;
    line-height: 1.5;
}
.single-comment {
    padding: 30px;
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 10px;
    margin-top: 30px;
    position: relative;
    background-color: #fff;
}
.single-comment .comment-author {
    display: flex;
    align-items: center;
}
.single-comment .comment-author .author-thumb img {
    width: 90px;
    padding: 10px;
    border-radius: 50%;
    border: 1px solid rgba(48,146,85,0.2);
}
.single-comment .comment-author .author-content {
    flex: 1;
    padding-left: 30px;
    padding-right: 115px;
}
.single-comment .comment-author .author-content .name {
    font-size: 22px;
    font-weight: 500;
    color: #212832;
}
.single-comment .comment-author .author-content .meta {
    display: flex;
    flex-wrap: wrap;
}
.single-comment .comment-author .author-content .meta .designation::after {
    content: '||';
    font-size: 14px;
    font-weight: 400;
    color: #309255;
    margin: 0 8px;
}
.single-comment .comment-author .author-content .meta .time {
    color: #ff8a00;
}
.single-comment p {
    padding-top: 10px;
    margin-bottom: 0;
    font-size: 15px;
    font-weight: 400;
    color: #000;
}

.single-comment .reply {
    padding: 0 25px;
    height: 45px;
    line-height: 45px;
    border-radius: 10px;
    background-color: #e7f8ee;
    color: #309255;
    display: inline-block;
    transition: all 0.3s ease 0s;
    position: absolute;
    top: 30px;
    right: 30px;
}
.single-comment .reply i {
    margin-right: 5px;
}
.comment-items .comment-reply {
    padding-left: 100px;
    position: relative;
}
.comment-items .comment-reply::before {
    position: absolute;
    content: '';
    width: 51px;
    height: 84px;
    background-image: url(../Images/shape-25.webp);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    left: 30px;
    top: -33px;
    z-index: -1;
}
.single-comment {
    padding: 30px;
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 10px;
    margin-top: 30px;
    position: relative;
    background-color: #fff;
}
.single-comment .comment-author {
    display: flex;
    align-items: center;
}
.single-comment .comment-author .author-thumb img {
    width: 90px;
    padding: 10px;
    border-radius: 50%;
    border: 1px solid rgba(48,146,85,0.2);
}
.single-comment .comment-author .author-content {
    flex: 1;
    padding-left: 30px;
    padding-right: 115px;
}
.single-comment .comment-author .author-content .name {
    font-size: 22px;
    font-weight: 500;
    color: #212832;
}
.single-comment .comment-author .author-content .meta {
    display: flex;
    flex-wrap: wrap;
}
.single-comment .comment-author .author-content .meta .designation {
    color: #309255;
}
.single-comment .comment-author .author-content .meta span {
    font-size: 14px;
    font-weight: 400;
    position: relative;
}
.single-comment .reply {
    padding: 0 25px;
    height: 45px;
    line-height: 45px;
    border-radius: 10px;
    background-color: #e7f8ee;
    color: #309255;
    display: inline-block;
    transition: all 0.3s ease 0s;
    position: absolute;
    top: 30px;
    right: 30px;
}
.single-comment .reply i {
    margin-right: 5px;
}

.comment-form {
    margin-top: 50px;
}
.single-form {
    margin-top: 20px;
}
.single-form input:not([type="checkbox"]):not([type="radio"]), .single-form textarea {
    width: 100%;
    height: 60px;
    padding: 0 25px;
    font-size: 15px;
    color: #52565b;
    transition: all 0.3s ease 0s;
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 10px;
    background-color: #fff;
}
.comment-form .form-wrapper .single-form textarea {
    height: 280px;
}
.single-form textarea {
    padding-top: 15px;
    height: 160px;
    resize: none;
}
.widget-search {
    position: relative;
}
.sidebar-widget {
    margin-top: 50px;
}
.widget-search input {
    width: 100%;
    height: 60px;
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 10px;
    padding: 0 20px;
    padding-right: 60px;
    outline: none;
    transition: all 0.3s ease 0s;
    font-size: 15px;
    font-weight: 400;
    color: #52565b;
}
.widget-search button {
    position: absolute;
    width: 48px;
    height: 48px;
    line-height: 48px;
    text-align: center;
    border-radius: 10px;
    background-color: #309255;
    border: 0;
    top: 6px;
    right: 6px;
    font-size: 16px;
    color: #fff;
}
.widget-title {
    font-size: 25px;
    font-weight: 500;
    margin-bottom: 0;
    margin-top: -7px;
}
.widget-category {
    padding: 35px;
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 10px;
    margin-top: 30px;
}
.widget-category .category-list li{
    list-style: none;
}
.widget-category .category-list li a {
    padding: 0 15px;
    height: 50px;
    line-height: 50px;
    display: block;
    color: #52565b;
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 10px;
    font-size: 15px;
    font-weight: 500;
    transition: all 0.3s ease 0s;
    text-decoration: none;
}
.widget-category .category-list li a:hover{
    color: #309255;
} 
.widget-category .category-list li a span {
    display: block;
    float: right;
}
.widget-category .category-list li a span:hover{
    color: #309255;
} 
.widget-category .category-list li+li {
    margin-top: 10px;
    list-style: none;
}
.widget-post {
    padding: 35px;
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 10px;
    margin-top: 30px;
}
.widget-post .post-items li {
    border-bottom: 1px solid rgba(48,146,85,0.2);
    padding: 20px 0;
}
.widget-post .single-post .post-thumb a {
    display: block;
}
.widget-post .single-post .post-thumb a img {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    object-position: center;
    object-fit: cover;
}
.widget-post .single-post .post-content {
    flex: 1;
    padding-left: 30px;
}
.widget-post .single-post .post-content .title {
    margin-bottom: 0;
}
.widget-post .single-post .post-content .title a {
    font-size: 15px;
    font-weight: 500;
    font-family: "Gordita";
    color: #212832;
}
.widget-post .single-post .post-content .date {
    font-size: 13px;
    color: #52565b;
    margin-top: 5px;
    display: block;
}
.widget-post .single-post .post-content .date i {
    color: #309255;
}
.widget-tags {
    padding: 35px;
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 10px;
    margin-top: 30px;
}
.widget-tags .tags-list {
    display: flex;
    flex-wrap: wrap;
    margin-left: -7px;
    margin-right: -7px;
    margin-top: -10px;
}
.widget-tags .tags-list li {
    padding: 10px 5px 0;
    list-style: none;
}
.widget-tags .tags-list li a {
    height: 45px;
    line-height: 43px;
    padding: 0 35px;
    font-size: 15px;
    background-color: #fff;
    display: block;
    color: #52565b;
    border: 1px solid rgba(48,146,85,0.2);
    border-radius: 10px;
    font-size: 15px;
    font-weight: 500;
    transition: all 0.3s ease 0s;
}
.sidebar-widget .social {
    display: flex;
    justify-content: space-between;
    margin-top: 25px;
    flex-wrap: wrap;
}
.sidebar-widget .social li {
    padding-top: 10px;
    margin-right: 10px;
    list-style: none;
}
.sidebar-widget .social li a {
    display: block;
    width: 50px;
    height: 50px;
    line-height: 52px;
    border: 1px solid rgba(48,146,85,0.25);
    border-radius: 10px;
    text-align: center;
    font-size: 18px;
    color: #212832;
    transition: all 0.3s ease 0s;
}

/* Blog Details End  */




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
    /* height: 560px; */
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
}


/* Footer end */




</style>