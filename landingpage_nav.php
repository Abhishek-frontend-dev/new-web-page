<?php

  if(isset($_COOKIE["language"])&& !empty($_COOKIE["language"]))
			 {
			 $language=$_COOKIE["language"];
			 }else
			 {
				 $language='english';
			 }
			 $this->lang->load('text',$language);
			// $plan_data_helper = plan_helper(); // CHECK THE USER IS PREMIUM & USER PLAN 
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<meta name="google-translate-customization" content="a648e4b2b9009c0f-ca96432aba1106ac0gb7380bc44e8f6cea-10">
  </meta>
  
  <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>

         /* start Popup container add by rohit 10/11/2022 */
         .popup {
         position: relative;
         display: inline-block;
         cursor: pointer;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
       }
       
       /* The actual popup */
       .popup .popuptext {
         visibility: hidden;
         width: 320px;
         height: 250px;
         background-color: #dbd7d5;
         color: #fff;
         text-align: center;
         border-radius: 6px;
        
         padding: 8px 7px 0px 5px;
         position: absolute;
         z-index: 1;
         top: 1300%;
         left: 150%;
         color: #000000;
         margin-left: -20px;
         font-size: 10px;
         z-index: 999;
       } 
       
       /* Popup arrow */
       .popup .popuptext::after {
         content: "";
         position: absolute;
         top: 120%;
         left: 50%;
         margin-left: -5px;
         border-width: 5px;
         border-style: solid;
         border-color: #555 transparent transparent transparent;
       }
       
       /* Toggle this class - hide and show the popup */
       .popup .show {
         visibility: visible;
         -webkit-animation: fadeIn 1s;
         animation: fadeIn 1s;
       }
       #headermain .active a {
        margin-bottom: 0 !important;
        font-size:12px;
       }
       /* Add animation (fade in the popup) */
       @-webkit-keyframes fadeIn {
         from {opacity: 0;} 
         to {opacity: 1;}
       }
       
       @keyframes fadeIn {
         from {opacity: 0;}
         to {opacity:1 ;}
       }
</style>
  <style>
   
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
/*.popup-screen br {
  display:block !important;
}*/
.popup-screen h6 {
  margin-bottom:25px;
}

body{
  min-height: 100vh;
  top:0px !important;
}

.popup-screen{
  z-index: 999999;
  position: fixed;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
   -webkit-backdrop-filter: blur(10px);
  width: 107%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  visibility: hidden;
  transition: 0.5s ease;
  transition-property: visibility;
  margin-left:-17px;
}

.popup-screen.active{
  visibility: visible;
}

.popup-box{
  position: relative;
  background: rgba(255, 255, 255, 0.8);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  max-width: 350px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin: 20px;
  padding: 50px 40px;
  border-radius: 10px;
  box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
  transform: scale(0);
  transition: 0.5s ease;
  transition-property: transform;
}

.popup-screen.active .popup-box{
  transform: scale(1);
}

.popup-box h2{
  font-size: 2.1em;
  font-weight: 800;
  margin-bottom: 20px;
}

.popup-box p{
  font-size: 1em;
  margin-bottom: 30px;
}

.popup-box .btn{
  color: #fff;
  background: red;
  font-size: 1.1em;
  font-weight: 500;
  text-decoration: none;
  text-transform: uppercase;
  padding: 7px 27px;
  border-radius: 3px;
}

.close-btn{
  position: absolute;
  font-size: 1em;
  top: 0;
  right: 0;
  margin: 15px;
  cursor: pointer;
  opacity: 0.5;
  transition: 0.3s ease;
  transition-property: opacity;
}

.close-btn:hover{
  opacity: 1;
}

section{
  padding: 50px 100px;
}

.home{
  position: relative;
  width: 100%;
  min-height: 100vh;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.image{
  position: relative;
  width: 45%;
  min-height: 450px;
}

.image img{
  position: absolute;
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px;
}

.info{
  position: relative;
  width: 52%;
}

.info h2{
  font-size: 2em;
  font-weight: 800;
}

.info p{
  font-size: 1em;
  text-align: justify;
  margin-top: 10px;
}

@media (max-width: 990px){
  section{
    padding: 50px 30px;
  }

  .home{
    display: block;
  }

  .image{
    width: 100%;
  }

  .info{
    width: 100%;
    margin-top: 15px;
  }
}
 @media (min-width:360px) and (max-width:380px) {
	 .popup-box {
    position: relative;
    background: #fff;
    backdrop-filter: blur(110px);
    -webkit-backdrop-filter: blur(110px);
    max-width: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: 20px;
    padding: 50px 40px;
    border-radius: 10px;
    box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
    transform: scale(0);
    transition: 0.5s ease;
    transition-property: transform;
	margin-left: -5px;
    /*margin-left: -247px; */
    opacity: 100%;
	margin-top:-100px;
}
  
   }
     @media (min-width:400px) and (max-width:427px) {
  .popup-box {
    position: relative;
    background: #fff;
    backdrop-filter: blur(110px);
    -webkit-backdrop-filter: blur(110px);
    max-width: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: 20px;
    padding: 50px 40px;
    border-radius: 10px;
    box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
    transform: scale(0);
    transition: 0.5s ease;
    transition-property: transform;
    /*margin-left: -207px;*/
	margin-left:-10px;
	margin-top:-285px;
    opacity: 100%;
}
   }
   @media (min-width:427px) and (max-width:480px) {
  .popup-box {
    position: relative;
    background: #fff;
    backdrop-filter: blur(110px);
    -webkit-backdrop-filter: blur(110px);
    max-width: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: 20px;
    padding: 50px 40px;
    border-radius: 10px;
    box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
    transform: scale(0);
    transition: 0.5s ease;
    transition-property: transform;
    /*margin-left: -247px;*/
	margin-left:-10px;
	margin-top:-100px;	
    opacity: 100%;
}
   }
   @media (min-width:390px) and (max-width:400px) {
   
   .popup-box {
    position: relative;
    background: #fff;
    backdrop-filter: blur(110px);
    -webkit-backdrop-filter: blur(110px);
    max-width: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: 20px;
    padding: 50px 40px;
    border-radius: 10px;
    box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
    transform: scale(0);
    transition: 0.5s ease;
    transition-property: transform;
    margin-left: 20px;
	margin-top:-100px;
    opacity: 100%;
}
.popup-screen {
  min-width:390px;
  max-width:400px;
  width:100%;
  height:100vh;
}
   }
   @media (min-width:1024px) and (max-width: 1366px) {
	 .popup-box {
    position: relative;
    background: #fff;
    backdrop-filter: blur(110px);
    -webkit-backdrop-filter: blur(110px);
    max-width: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: 20px;
    padding: 50px 40px;
    border-radius: 10px;
    box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
    transform: scale(0);
    transition: 0.5s ease;
    transition-property: transform;
    margin-left: 0px;
    opacity: 100%;
}
  
   }

  

   @media (min-width:768px) and (max-width:1024px) {
  .popup-box {
    position: relative;
    background: #fff;
    backdrop-filter: blur(110px);
    -webkit-backdrop-filter: blur(110px);
    max-width: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: 20px;
    padding: 50px 40px;
    border-radius: 10px;
    box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
    transform: scale(0);
    transition: 0.5s ease;
    transition-property: transform;
    margin-left: 0px;
    opacity: 100%;
}
   }
   @media (min-width:768px) and (max-width:1024px) {
	   .popup-box {
		   margin-top:-100px;
	   }
   }
    @media (min-width:1000px) and (max-width:1024px) {
	   .popup-box {
		   margin-top:-25px;
	   }
   }
   



   @media (min-width:1444px) and (max-width:1600px) {
	   .popup-box {
    position: relative;
    background: #fff;
    backdrop-filter: blur(110px);
    -webkit-backdrop-filter: blur(110px);
    max-width: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: 20px;
    padding: 50px 40px;
    border-radius: 10px;
    box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
    transform: scale(0);
    transition: 0.5s ease;
    transition-property: transform;
    margin-left: 0px;
    opacity: 100%;
}
}
  @media (min-width:1600px) and (max-width:1940px) {
	   .popup-box {
    position: relative;
    background: #fff;
    backdrop-filter: blur(110px);
    -webkit-backdrop-filter: blur(110px);
    max-width: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: 20px;
    padding: 50px 40px;
    border-radius: 10px;
    box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
    transform: scale(0);
    transition: 0.5s ease;
    transition-property: transform;
    margin-left: 0px;
    opacity: 100%;
}
}
.popup-box .btn {
    color: #fff;
    background:#e9628c;
    font-size: 1.1em;
    font-weight: 500;
    text-decoration: none;
    text-transform: uppercase;
    padding: 7px;
    border-radius: 7px;
}

.popup-screen.active, .popup-screen.active h6,.popup-screen.active .close-btn {
  color:#343a40;
}

 @media (min-width:1250px) and (max-width: 1370px) {
    .popup-box { 
      margin-top:-40px;
    }
}

 @media (min-width:1540px)
 {
   .popup-box { 
      margin-top:-40px;
    }

 }
  @media (min-height:1365px)
 {
   .popup-box { 
      margin-top:-400px;
    }

 }
 @media (min-width: 992px) {header#headermain .navbar-expand-lg .navbar-nav .dropdown-menu {
	left:-50px;
}
}
.main-body, .body-style
{
	
	top:0px !important;
	
}
.skiptranslate, #google_translate_element, .VIpgJd-ZVi9od-aZ2wEe-wOHMyf VIpgJd-ZVi9od-aZ2wEe-wOHMyf-ti6hGc, .VIpgJd-ZVi9od-aZ2wEe, .VIpgJd-ZVi9od-aZ2wEe-OiiCO-ti6hGc, .VIpgJd-yAWNEb-hvhgNd{
	display:none !important;
	visibility:hidden;
}
.skiptranslate iframe{
	display:none !important;
	visibility:hidden;
	
}
 #headermain .active a.nav-link {
    color: #e9628c !important;
	
  }
  img.aerrowtracker {
    margin: -6px 8px;
    border-radius: 7px;
}
.dropdown-menu .brandnew-logo{
  width:138px;
}

nav .dropdown-item:hover {
    background: none !important;
}

.dropdownst{
  padding: 0 10px !important;
  width:138px;
}

.rightermost{
  right:-14px !important;
  left:auto !important;
}

nav .dropdown-menu {

  border:none;
}

@media (min-width:1000px){
  .dropdown-menu .brandnew-logo {
    width: 138px;
}
  
}

@media (max-width:990px){
 .rightUL .dropdownst{ max-width: 150px;
    left: 0 !important;
    position: relative !important;
    margin: 0 auto !important;
  }
  nav.navbar{
  padding-bottom: 15px;
}

.navbar-expand-lg #navbarSupportedContent .navbar-nav.rightUL .dropdown-menu {
  margin: 10px auto 0  !important;
}
}

nav .lang .dropdown-item:hover {
    background: #0c237e !important;
}

@media (min-width:768px) and (max-width:990px){
  .rightUL .dropdownst{  margin-left: -11px !important;

 }
 .rightUL .dropdownst{
    margin-left:37% !important;
  }
}

@media (min-width:1100px){
.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0; /* remove the gap so it doesn't close */
}
}

nav .dropdown-toggle::after {
  position: relative;
    top: 1px;
}
@media (min-width:1100px){

  header#headermain .navbar-expand-lg .navbar-nav .dropdown-menu {
      left: -36px;
  }
  }



 </style>
<?php 
if(isset($_COOKIE["language"]) && $_COOKIE["language"]=='arabic'):  
?>
<script>

$.removeCookie('googtrans', { path: '/' });
 $.cookie('googtrans','/en/ar');
 document.body.classList.add('body-style');
</script>
<span id="google_translate_element" style="display:none !important;"><input type="text"></span>
<script type="text/javascript">
function googleTranslateElementInit() {
 
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  
}

$("body").css("top","0");
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<?php
else:
	?>
<script type="text/javascript">
$("body").css("top","0");
</script>

	<?php

 endif;
 ?>
<nav class="navbar navbar-expand-lg navbar-light" >
      <div class="col-12 col-md-12 col-lg-3 col-xl-3 brandlogowrapper">
<a class="navbar-brand" href="<?=base_url();?>">
<?php if(isset($headtitle) && $headtitle=='connect'): ?>
<img src="<?=base_url();?>webassets/images/logoimages/ttsuite.svg" alt="tasktrackersuitelogo" class="brandnew-logo ">
<?php 
else:
?>
<img src="<?=base_url();?>webassets/images/logoimages/tasktrackerlogo.webp" alt="tasktrackerlogo" class="brandnew-logo ">
<?php endif; ?>
</a>


<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
</div>
      
	  <?php 
			$activehomeclass="";
			$activefeatureclass="";
			$activepricingclass="";
			$activeclientclass="";
			$activecontactclass="";
			if(empty($features) && empty($pricing) && empty($client) && empty($contactus)):
			$activehomeclass="";
			elseif(!empty($features)): 
			$activefeatureclass="active";
			elseif(!empty($pricing)): 
			$activepricingclass="active";
			
			elseif(!empty($client)): 
			$activeclientclass="active";
			
			elseif(!empty($contactus)): 
			$activecontactclass="active";
			else:
			$activehomeclass="active";
			
			endif;
			
			?>
	  
    
      <div class="col-12 col-md-12 col-lg-9 col-xl-9">
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
           <ul class="navbar-nav m-auto navbarsecond">
          <li class="nav-item <?php  echo $activehomeclass; ?>">
            <a class="nav-link" href="<?=base_url();?>"><?= $this->lang->line('HOME') ?></a> 
          </li>
		  <?php if(isset($headtitle) && $headtitle=='connect'): ?>
		  <li class="nav-item <?php  echo $activefeatureclass; ?> dropdown">
            <a class="nav-link  dropdown-toggle" href="javascript:void(0)" id="navbarDropdownF" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $this->lang->line('FEATURES') ?></a>
            <div class="dropdown-menu notranslate dropdownst" aria-labelledby="navbarDropdownF">
               <a class="nav-link dropdown-item pb-1" href="<?=base_url();?>features"><img src="https://tasktracker.in/webassets/images/logoimages/tasktrackerlogo.webp" alt="Task Tracker Logo" class="brandnew-logo "></a>
               <a class="nav-link dropdown-item pt-0" href="https://www.sales-tracker.in/features"><img src="https://www.sales-tracker.in/assets/images/logo.png" alt="Sales Tracker Logo" class="brandnew-logo"></a>
               </div>
          </li>
		  
		  <?php else :?>
		  
          <li class="nav-item <?php  echo $activefeatureclass; ?>">
            <a class="nav-link" href="<?=base_url();?>features"> <?= $this->lang->line('FEATURES') ?></a>
          </li>
		  <?php  endif;?>
		   <li class="nav-item <?php  echo $activepricingclass; ?>">
            <a class="nav-link" href="<?=base_url();?>pricing"> <?= $this->lang->line('PRICING') ?></a>
          </li>
		
          <li class="nav-item <?php  echo $activeclientclass; ?>">
            <a class="nav-link" href="<?=base_url();?>client"><?= $this->lang->line('CLIENTSMENU')?></a>
          </li>
          <li class="nav-item <?php  echo $activecontactclass; ?>">
            <a class="nav-link" href="<?=base_url();?>contact-us"><?= $this->lang->line('CONTACT') ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="https://www.sales-tracker.in"><?= $this->lang->line('SALESTRACKER') ?> <img src="<?=base_url();?>webassets/images/arrowtasktracker.webp" class="aerrowtracker" alt="TaskTracker Logo"></a>
            </li> 
			
			<?php if(isset($headtitle) && $headtitle=='connect'): ?>
          <li class="nav-item tasktrackertopLink">
            <a class="nav-link"  href="https://tasktracker.in" style= "color:#0e2947 !important;">Task Tracker<img src="<?=base_url();?>webassets/linktree/images/tt_icon.png" class="aerrowtracker" style= "color:#0e2947 !important; width:30px; border-radius:0;" alt=""></a>
          </li> 
			<?php  endif;
			
			?>

		  
        </ul>
         
        </ul>
        
       <div class=""> <div>
            <ul class="navbar-nav ml-auto rightUL">
              <li class="nav-item dropdown lang">
                <a class="nav-link  dropdown-toggle " href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php
					
					
			     if(empty($_COOKIE["language"]) || $_COOKIE["language"]=='english')
                 {
                 echo $activelang='English';
                 } 
                 elseif($_COOKIE["language"]=='Hindi')
                 {
                 echo  $activelang='हिन्दी';
                 }
                 elseif($_COOKIE["language"]=='Gujarati')
                 {
                  echo  $activelang='ગુજરાતી';
                 }elseif($_COOKIE["language"]=='Marathi')
                 {
                   echo $activelang='मराठी';
                 }elseif($_COOKIE["language"]=='Tamil')
                 {
                   echo $activelang='தமிழ்';
                 }elseif($_COOKIE["language"]=='Kannad')
                 {
                   echo $activelang='ಕನ್ನಡ';
                 }
                 elseif($_COOKIE["language"]=='Telugu')
                 {
                  echo $activelang='తెలుగు';
                 }elseif($_COOKIE["language"]=='Malyalam')
                 {
                  echo  $activelang='മലയാളം';
                 }
				  elseif($_COOKIE["language"]=='arabic')
                 {
                  echo  $activelang='العربية';
                 }
				
				 else{
					 echo $activelang='English'; 
					 
				 }
                
                 //elseif($_COOKIE["language"]=='arabic')
                 //{
                  //echo  $activelang='العربية';
                 //}

                 ?>
                </a>
                <div class="dropdown-menu notranslate" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="javascript:void(0)" onclick="switchlanguage('english')">English</a>
                <a class="dropdown-item" href="javascript:void(0)" onclick="switchlanguage('arabic')">العربية</a>
				  <a class="dropdown-item" href="javascript:void(0)" onclick="switchlanguage('Hindi')">हिन्दी</a>
                  <a class="dropdown-item" href="javascript:void(0)" onclick="switchlanguage('Gujarati')">ગુજરાતી</a>
                  <a class="dropdown-item" href="javascript:void(0)" onclick="switchlanguage('Marathi')">मराठी</a>
                  <a class="dropdown-item" href="javascript:void(0)" onclick="switchlanguage('Tamil')">தமிழ்</a>
                  <a class="dropdown-item" href="javascript:void(0)" onclick="switchlanguage('Kannad')">ಕನ್ನಡ</a>
                  <a class="dropdown-item" href="javascript:void(0)" onclick="switchlanguage('Telugu')">తెలుగు</a>
                  <a class="dropdown-item" href="javascript:void(0)" onclick="switchlanguage('Malyalam')">മലയാളം</a>
				   
				  <!--
				  <a class="dropdown-item" href="javascript:void(0)" onclick="switchlanguage('arabic')">العربية</a>-->
                </div>
              </li> 
		<?php if(isset($headtitle) && $headtitle=='connect'): ?>
		<li class="nav-item dropdown">
            <a class="btn sign_btn dropdown-toggle" href="javascript:void(0)" id="navbarDropdownS" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $this->lang->line('SIGNUP') ?></a>
            <div class="dropdown-menu notranslate dropdownst" aria-labelledby="navbarDropdownS">
               <a class="nav-link dropdown-item pb-1" href="<?php echo "https://tasktracker.in/";?>app/employer/registration"><img src="https://tasktracker.in/webassets/images/logoimages/tasktrackerlogo.webp" alt="Task Tracker Logo" class="brandnew-logo"></a>
               <a class="nav-link dropdown-item pt-0" href="https://www.sales-tracker.in/signup"><img src="https://www.sales-tracker.in/assets/images/logo.png" class="brandnew-logo" alt="Sales Tracker Logo"></a>
               </div>
              </li>
             <li class="nav-item dropdown"><a href="javascript:void(0)" id="navbarDropdownL" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn login-btn  dropdown-toggle"><?= $this->lang->line('LOGIN') ?></a>
             <div class="dropdown-menu dropdownst rightermost" aria-labelledby="navbarDropdownL">
               <a class="nav-link dropdown-item pb-0"  href="<?php echo "https://tasktracker.in/";?>app/login"><img src="https://tasktracker.in/webassets/images/logoimages/tasktrackerlogo.webp" alt="Task Tracker Logo" class="brandnew-logo "></a>
               <a class="nav-link dropdown-item pt-0" href="https://www.sales-tracker.in/login"><img src="https://www.sales-tracker.in/assets/images/logo.png" alt="Sales Tracker Logo" class="brandnew-logo "></a>
               </div>
            </li>
		
		
		<?php   else: ?>

			  
           <li class="nav-item"><a class="btn sign_btn" href="<?php echo base_url(); ?>app/employer/registration"><?= $this->lang->line('SIGNUP') ?></a></li>
             <li class="nav-item"><a href="<?php echo base_url(); ?>app/login" class="btn login-btn "><?= $this->lang->line('LOGIN') ?></a></li>
			 
			 <?php endif; ?>
			 
            </ul>
           </div> 
           </div>
       </div>
	   </div>

      </nav>
	  <!--  POP UP HTML CODE START HERE   -->

	
 <div class="popup-screen">
      <div class="popup-box">
        <i class="fas fa-times close-btn"></i>
        <h6>Task Tracker SUITE is now LIVE </h6>
         
        <p>A new version of Task Tracker loaded with the latest features
<br><br>
Plus a best-in-class sales management tool Sales Tracker
<br><br>
Get your hands on 2 premium tools at the cost of one
</p>
<div>
<a class="btn sign-btns" style="background:#e9628c;color:#fff;" href="javascript:void(0)">Sign up now</a>&nbsp;<a style="background:#e9628c;color:#fff;"  class="btn scheduled-btns"  href="javascript:void(0)">Schedule a demo</a>
</div>
<div class="text-center lgn-btns" style="font-size:13px;">Already have an account ? <a href="<?=base_url();?>app/login">Log in</a></div>

      </div>
    </div>	

   <!-- POP UP JS CODE END HERE -->
        <script type="text/javascript">
    <?php //if(isset($_COOKIE['tasktrackerpopup']) && $_COOKIE['tasktrackerpopup']==2)
	if(isset($_COOKIE['tasktrackerpopup1']))
	{ ?>
	  window.addEventListener("load", () => {
      setTimeout(() => {
        popupScreen.classList.add("active");
      }, 1000); //Popup the screen in 02 seconds after the page is loaded.
    });
	<?php  } ?>

  
    </script>
    
	  