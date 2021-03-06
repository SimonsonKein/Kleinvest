<?php
header("Content-type: text/css; charset: UTF-8");
?>
body {
font-family: "Montserrat", sans-serif;
background-color: #252B42;

letter-spacing: 0.2px;
color: #ffffff;

}

a, button {
letter-spacing: 0.2px;
color: #ffffff;
cursor: pointer;
}

.container {
max-width: 1100px;
width: 100%;
margin: 0 auto;
padding: 0 25px;
}

h1 {
font-weight: 800;
font-size: 58px;
line-height: 80px;
}

h2 {
font-weight: 700;
font-size: 40px;
line-height: 57px;
}

h3 {
font-weight: 700;
font-size: 24px;
line-height: 32px;
}

h4 {
font-weight: 500;
font-size: 20px;
line-height: 30px;
}

h5 {
font-weight: 700;
font-size: 16px;
line-height: 24px;
}

h6 {
font-weight: 600;
font-size: 14px;
line-height: 24px;
}

h1, h2, h3, h4, h5, h6 {
text-align: center;
}

p {
font-weight: 500;
font-size: 14px;
line-height: 20px;
}

.link {
font-weight: 600;
font-size: 14px;
line-height: 24px;
}

.btn_text {
font-weight: 700;
font-size: 14px;
line-height: 22px;
}

section {
padding: 110px 0;
}

.header {
margin-top: 15px;
padding: 0;
}

.header .header_inner {
display: flex;
justify-content: space-between;
align-items: center;
}

.header .header_left {
display: flex;
align-items: center;
gap: 80px;

width: 100%;
/*justify-content: space-between;*/
}

.header .header_right {
position: relative;
}


.header .logo_txt {
cursor: default;
}

.header .nav {
display: flex;
align-items: center;
gap: 20px;
}

.header .nav_item {
position: relative;
}

.header .nav_item:after {
position: absolute;
top: 100%;
left: 0;
right: 0;
content: "";
height: 2px;
transition: background-color .3s ease;
}

.header .nav_item:hover:after {
background-color: #ffffff;
}

.header .unlogged {
display: flex;
gap: 70px;
align-items: center;
}

.header .login {
transition: color .3s ease;
}

.header .login:hover {
color: #23a6f0;
}

.header .register {
padding: 15px 25px;
white-space: nowrap;

background-color: #23a6f0;
border-radius: 5px;

transition: background-color .3s ease;
}

.header .register:hover {
background-color: #2a7cc7;
}

.tagline .tagline_inner {
max-width: 680px;
width: 100%;

margin: 0 auto;
padding: 40px 0;

display: flex;
flex-direction: column;
justify-content: space-between;
align-items: center;

text-align: center;
gap: 40px;
}

.tagline .quote {
margin: 0 70px;
}

.tagline .btns {
display: flex;
align-items: center;
justify-content: center;
flex-wrap: wrap;
gap: 10px;
}

.tagline .btns button {
padding: 15px 36px;

white-space: nowrap;
border: 1px #ffffff solid;
border-radius: 37px;
transition: background-color .3s ease, border .2s ease;
}

.tagline .btns button:hover {
background-color: #23a6f0;
border: 1px transparent solid;
}

.features .features_title {
margin: 0 auto;

max-width: 470px;
width: 100%;

text-align: center;
}

.features .features_title .subtitle {
margin-top: 10px;

color: #737373;
}

.features .features_list {
margin-top: 70px;
margin-bottom: 40px;

display: flex;
flex-wrap: wrap;
justify-content: center;
align-items: center;
gap: 30px;
}


.features .features_item {
max-width: 330px;
width: 100%;

padding: 35px 20px;

display: flex;
justify-content: center;
gap: 20px;

border: 1px #f2f2f2 solid;
border-radius: 2px;

transition: transform .3s ease, box-shadow .3s ease;
}

.features_item:hover {
transform: translate(-5px, -5px);
box-shadow: #1a1f2f 5px 5px 8px;
}

.testimonials .head {
margin: 0 auto;

max-width: 470px;
width: 100%;

text-align: center;
}

.testimonials .cards {
margin-top: 80px;

display: flex;
justify-content: center;
align-items: center;
flex-wrap: wrap;
gap: 30px;
}

.testimonials .cards .card_item {
max-width: 510px;
width: 100%;
min-height: 250px;

background-color: #ffffff;
display: flex;

border-radius: 10px;
overflow: hidden;

color: #737373;
}

.testimonials .cards .photo {
width: 180px;

background-position: center;
background-repeat: no-repeat;
background-size: cover;

overflow: hidden;
}

.testimonials .cards .photo img {
box-sizing: border-box;
display: block;
/*height: 100%;*/
}

.testimonials .cards .content {
max-width: 330px;
width: 100%;
padding: 30px 40px;

display: flex;
flex-direction: column;
align-items: start;
}

.testimonials .cards .title {
color: #252B42;
}

.testimonials .cards .stars {
display: flex;
gap: 10px;

margin-top: 15px;
}

.testimonials .cards .star {
content: "";
width: 30px;
height: 30px;
background-color: #ff0000;
border: 1px #000000 solid;
}

.testimonials .cards .half_star {
content: "";
width: 30px;
height: 30px;
background-color: #f67f7f;
border: 1px #000000 solid;
}

.testimonials .cards .empty_star {
content: "";
width: 30px;
height: 30px;
background-color: #ffffff;
border: 1px #000000 solid;
}

.testimonials .cards .description {
margin-top: 15px;
}

.about .about_title {
margin: 0 auto;

max-width: 470px;
width: 100%;

text-align: center;
}

.about .content {
margin-top: 95px;

display: flex;
align-items: center;
justify-content: space-evenly;
gap: 50px;
flex-wrap: wrap;
}

.about .about_video {
max-width: 50%;
max-height: 500px;
}

.about .description {
max-width: 330px;
display: flex;
align-items: start;
flex-direction: column;
}

.about .description .subtitle {
margin-top: 10px;
}

.about .cards {
margin-top: 30px;
display: flex;
flex-direction: column;
gap: 30px;
}

.about .cards .card_item {
display: flex;
gap: 20px;
}

.about .cards .card_content > * {
text-align: left !important;
}

.about .cards .card_icon img {
max-width: 32px;
max-height: 32px;
}

.pricing .pricing_header {
margin: 0 auto;
max-width: 470px;
text-align: center;
}

.pricing .cards {
margin-top: 80px;
padding: 25px 0;

display: flex;
flex-wrap: wrap;
justify-content: center;
align-items: center;
gap: 30px;
}

.pricing .card_item {
padding: 50px 40px;


background-color: #ffffff;
border-radius: 10px;
color: #252b42;
}

.pricing .card_item .card_container {
max-width: 250px;
display: flex;
align-items: center;
justify-content: center;
flex-direction: column;
gap: 35px;
}

.pricing .cards .title {
text-transform: uppercase;
}

.pricing .cards .subtitle {
max-width: 200px;
color: #737373;
}

.pricing .cards .card_price {
color: #23a6f0;
}

.pricing .cards .price:after {
content: "$";
}

.pricing .cards .per_time {
color: #8ec2f2;
}

.pricing .cards .try_btn {
padding: 15px 40px;

border-radius: 5px;
background-color: #23a6f0;
transition: background-color .3s ease;
}

.pricing .cards .try_btn:hover {
background-color: #2a7cc7;
}

.pricing .cards .card_advantages {
display: flex;
flex-direction: column;
gap: 15px;
}

.pricing .cards .adv_item {
display: flex;
align-items: center;
gap: 10px;
}

.pricing .cards .round {
content: "";
color: #ffffff;
width: 32px;
height: 32px;
border-radius: 50%;
<?php carbon_get_theme_option('is_adv')?>
background-color: #2DC071; /*for yes*/
/*background-color: #BDBDBD; !*for no*!*/

display: flex;
justify-content: center;
align-items: center;
}

.pricing .cards .round::before {
content: "+";
text-align: center;
}

.pricing .cards .ad_txt {
text-align: left;
}


.contact .contact_head {
margin: 0 auto;

max-width: 470px;
width: 100%;
text-align: center;

display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
}

.contact .cards {
margin-top: 80px;

display: flex;
justify-content: center;
align-items: center;
gap: 2px;
flex-wrap: wrap;
}

.contact .card_item {
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
gap: 15px;

padding: 50px 40px;
color: #252B42;

background-color: #ffffff;

transition: background-color .3s ease,
transform .3s ease,
color .3s ease;
}

.contact .card_item .submit_request_btn {
color: #23A6F0;
padding: 15px 36px;
border: 1px #23a6f0 solid;
border-radius: 37px;

transition: color .3s ease, border-color .3s ease;
}

.contact .card_item:hover {
background-color: #23a6f0;
color: #ffffff;
transform: scale(1.2, 1.2);
z-index: 10;
}

.contact .card_item:hover .submit_request_btn {
color: #ffffff;
border-color: #ffffff;
}

.footer {
padding: 0;
}

.footer .footer_head {
padding: 50px 0;
display: flex;
justify-content: space-between;
align-items: center;
}

.footer .logo {
padding: 10px 0;
}

.footer .logo_txt {
cursor: default;
}

.footer .social_media {
display: flex;
gap: 20px;
align-items: center;
}

.footer_content {
padding: 50px 0;
display: flex;
justify-content: space-between;
flex-wrap: wrap;
gap: 50px;
border-top: 1px #E5E5E5 solid;
}

.footer .link_list {
display: flex;
justify-content: start;
flex-wrap: wrap;
gap: 30px;
}

.footer .link_item {
display: flex;
flex-direction: column;
gap: 10px;
}

.footer .link_title {
text-align: left;
margin-bottom: 10px;
}

.footer .request {
display: flex;
flex-direction: column;
gap: 20px;
}

.footer .request .subscribe_form {
overflow: hidden;
border-radius: 10px;
max-width: 100vw;

display: flex;
align-items: center;
}

.footer .request input {
padding: 15px 20px;
}

.footer .request .submit {
background-color: #23a6f0;
padding: 0 22px;
height: 100%;
}

.footer .request .submit:hover {
background-color: #2a7cc7;
}

@media screen and (max-width: 1050px)  {
.footer .footer_content {
justify-content: center;
width: 100%;
}

.footer .link_list {
justify-content: space-evenly;
}
}

@media screen and (max-width: 900px) {
.header .header_left {
justify-content: space-between;
margin-right: 15px;
}


.header .nav_burger {
width: 20px;
height: 20px;
display: flex;
align-items: center;
justify-content: center;
position: relative;
}

.header .burger,
.header .burger:before,
.header .burger:after {
content: "";
background-color: #ffffff;
height: 2px;
}

.header .burger {
position: relative;
content: "";
width: 12px;
}

.header .burger:before {
position: absolute;
content: "";
bottom: 100%;
width: 17px;
margin-bottom: 3px;
}

.header .burger:after {
content: "";
position: absolute;
top: 100%;
width: 9px;
margin-top: 3px;
}

.header .nav {
position: absolute;
top: 100%;
right: 0;
flex-direction: column;
gap: 20px;
background-color: #3C403D;
padding: 20px;
/*margin-top: 10px;*/
border-radius: 10px;
transition: opacity .3s ease, opacity .3s ease;
opacity: 0;
z-index: -1;
}

.header .nav_burger:hover .nav {
opacity: 1;
z-index: 10;
}

.header .user_nav {
height: 20px;
width: 20px;
display: flex;
align-items: center;
justify-content: center;
}

.header .user_nav .icon {
width: 20px;
height: 20px;
border-radius: 50%;
border: 3px #ffffff solid;
background-color: transparent;
}

.header .unlogged {
position: absolute;
top: 100%;
right: 0;
flex-direction: column;
gap: 20px;
background-color: #3C403D;
padding: 20px;
/*margin-top: 10px;*/
border-radius: 10px;
transition: opacity .3s ease, opacity .3s ease;
opacity: 0;
z-index: -1;
}

.header .user_nav:hover .unlogged {
opacity: 1;
z-index: 10;
}
}
