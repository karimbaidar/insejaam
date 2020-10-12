<?php 

require_once 'C:\xampp\htdocs\RheinlandStudie\public\jDateTime-master/jdatetime.class.php';
//require_once '/home/karimbaidar1/public_html/afghanistanmedicalcouncil.com/public/jDateTime-master/jdatetime.class.php';
//Init
$date = new jDateTime(true, true, 'Asia/Tehran');

?>

<?php $__env->startSection('custom_css_links'); ?>
<style>
 <link href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/prettify.css')); ?>" rel="stylesheet">
 
.button1 {
    background-color: #73879C; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.button1 {
    display: block;
}


.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  height:15px;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding-bottom: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.a span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.a span:after {
  content: '\00bb';
  position: relative;
  opacity: 0;
  
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.a:hover span {
  padding-right: 25px;
}

.a:hover span:after {
  opacity: 1;
  right: 0;
}




.simple-form {
  display: flex;
  padding-bottom: 1.25rem;
}
.simple-form input,
.simple-form select


 {
  margin: 0 .25rem;
  min-width: 125px;
  border: 1px solid #eee;
  border-left: 3px solid;
  border-radius: 5px;
  transition: border-color .5s ease-out;
}
.simple-form input:optional,
.simple-form select:optional {
  border-left-color: #999;
}
.simple-form input::valid,
.simple-form select::valid {
  border-left-color: palegreen;
}
.simple-form input:invalid,
.simple-form select:invalid {
  border-left-color: salmon;
}
.simple-form input::focus:valid,
.simple-form select::focus:valid {
  background: url("/images/check.svg") no-repeat 95% 50%;
  background-size: 25px;
}
.simple-form input:focus:invalid,
.simple-form select:focus:invalid {
  background: url("/images/tnt.svg") no-repeat 95% 50%;
  background-size: 45px;
}





input:invalid + span:after {
    content: '';
    color: #f00;
    padding-left: 5px;
}

input:valid + span:after {
    content: '✓';
    color: #26b72b;
    padding-left: 5px;
}


/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
   
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}



import url(https://fonts.googleapis.com/css?family=Raleway:100,600,400);


.text-holder{
  color:#aaaaaa;
  text-align:center;
  padding-top:40px;
}
.button-holder{
  padding-top:100px;
}
.ajax-button{
  position:relative;
  display:inline-block;
  width:100px;
  height:40px;
  left:50%;
  top:50%;
  margin-left:-50px;
  margin-top:-20px;
  text-align:center;
}
.submit{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  width:100px;
  height:40px;
  background-color:#006400;
  border:2px solid #006400;
  border-radius:10px;
  color:#FFFFFF;
  font-size:17px;
  cursor:pointer !important;
  outline:none;
}

.submit:hover{
  background-color:#222222;
}
.loading{
  font-size:0;
  width:30px;
  height:30px;
  margin-top:5px;
  border-radius:15px;
  padding:0;
  border:3px solid #006400;
  border-bottom:3px solid rgba(1,1,1,0.0);
  border-left:3px solid rgba(1,1,1,0.0);
  background-color:transparent !important;
  animation-name: rotateAnimation;
  -webkit-animation-name: wk-rotateAnimation;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-delay: 0.2s;
  -webkit-animation-delay: 0.2s;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}

@keyframes  rotateAnimation {
    0%   {transform: rotate(0deg);}
    100% {transform: rotate(360deg);}
}
@-webkit-keyframes wk-rotateAnimation {
    0%   {-webkit-transform: rotate(0deg);}
    100% {-webkit-transform: rotate(360deg);}
}

.fa{
  color:#ffffff;
  font-size:18px !important;
  position:absolute;
  left:50%;
  top:50%;
  margin-left:-9px;
  margin-top:-9px;
  -webkit-transform:scaleX(0) !important;
  transform:scaleX(0) !important;
}

.finish{
  -webkit-transform:scaleX(1) !important;
  transform:scaleX(1) !important;
}
.hide-loading{
  opacity:0;
  -webkit-transform: rotate(0deg) !important;
  transform: rotate(0deg) !important;
  -webkit-transform:scale(0) !important;
  transform:scale(0) !important;
}





</style>
	

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-content'); ?>

<div class="text-center">
                  <form class=" action="<?php echo e(url('/locale')); ?>" id="locale_form" method="post">
                      <?php echo e(csrf_field()); ?>


<!--
<center>              
<table><tr>
<td>
<button class="button1" id="locale"   name="locale"   value="en" <?php echo e(App::getLocale()=='en'?'selected':''); ?>  ><?php echo e(__('ui.english')); ?></button>
</td>
<td>
<button class="button1" id="locale"   name="locale"   value="fa" <?php echo e(App::getLocale()=='fa'?'selected':''); ?>  ><?php echo e(__('ui.dari')); ?></button>
</td>
<td>
<button class="button1" id="locale"   name="locale"   value="ps" <?php echo e(App::getLocale()=='ps'?'selected':''); ?>  ><?php echo e(__('ui.pashtu')); ?></button>
</td>
</tr>
</table>
</center>

-->
                </form>
</div> 





   


	<div class="row" style="margin-top:50px;" width="300px">
    <div class="col-md-1 col-sm-13 col-xs-15">
    </div>
		<div class="col-md-10 col-sm-12 col-xs-12">
			<div class="x_panel" style="min-height: 700px">
			
				 <div class="x_title text-center" style="padding:5px">
                        <img src="<?php echo e(url('/images/logo.png')); ?>" style="width:100px;height:100px;border-radius:0%"></img>   
                            <table  width="100%" style="margin-top: 5px;">
                                                          <tr>
                                                         <td style="font-family:arabic; font-size:16px"><b>    <center>د لوړو زده کړو وزارت<br/>د افغانستان اسلامی حمهوریت</center></br></b></br></br></td>
                                                           <center> <td><b>   <center>Ministry of Higher Education </br>ISLAMIC REPUBLIC OF AFGHANISTAN</center></b></br></br></td>
                                                           <center> <td style="font-family:arabic; font-size:15px"><b>   <center>جمهوری اسلامی افغانستان</br>وزارت تحصیلات عالی افغانستان</center></b></br></br></td>
                                                          </tr>
                                                          
                                                        </table>
                                                       
                                                       
                                                
                                                       
                                                       
                                                    </div>
				<div class="x_content">

		<form  action="<?php echo e('/personal_detail/'); ?>" method="post" class="simple-form" enctype="multipart/form-data" files="true">

			<div class="panel-body">
				
				<?php echo e(csrf_field()); ?>


	    <fieldset>


      <div class="container">
		
    <section id="wizard">
      <div class="page-header">
            <h1 style="font-family:arabic;"><b>فورم برای تاییدی لیسانس، ماستری و دوکتورا</b></h1>
           
          </div>

      <div id="rootwizard">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
        <ul class="nav nav-pills">
          <li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="false">Personal Information</a></li>
          <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false">Educational Information</a></li>
          <li><a href="#tab3" data-toggle="tab">University Information</a></li>
        
        </ul>
         </div>
          </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
            		<!-- Text input-->
		
              	<div class="row">
				 

         <div class="col-md-4 col-sm-6 col-xs-12 col-sm-12 col-xs-12" style="float:right">
                     <!-- Text input-->
                    
                  <div class="col-md-12" style="background-color: lightgray">
                     
                     <h4 style="text-align: center"><b>خلاصه </b></h4>
                      
                       
                   </div>

        
                   
         </div>

         <div class="col-md-4 col-sm-6 col-xs-12 col-sm-12 col-xs-12" style="float:right">
                            <!-- Text input-->
                         

                           <a href="/home" class="btn btn-danger"><?php echo e(__('ui.back')); ?></a>
                              
                  

                           
                </div>  
  <div class="col-md-4 col-sm-6 col-xs-12 col-sm-12 col-xs-12" style="float:right">
                     <!-- Text input-->
                  

               <!--     <a href="/home" class="btn btn-danger"><?php echo e(__('ui.back')); ?></a> -->
                       
           

                    
         </div>                   	                         

        

</div>





<div class="row">
			
			<div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
              <div class="x_title">
				<h4><b><?php echo e(__('ui-list.systemdetails')); ?></b></h4>
          
              </div>
              <div class="x_content">
              <div class="table-responsive">
         <div class="form-group <?php echo e($errors->has('code')?'has_error':''); ?>">
                          
                          <div class="col-md-7">
						  <?php if(Auth::check()): ?>
							  
						
                   
                          <input id="id" name="id"  readonly type="text" style="display:none" value="<?php echo e(Auth::user()->id); ?>" class="form-control input-md">   
						     <input id="flagTurnOff" name="flagTurnOff"   type="text" style="display:none" value="flagOff" class="form-control input-md">   
						  
						  <?php endif; ?>
						  
                          </div>
                          </div>
						  
                  
                    <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group <?php echo e($errors->has('code')?'has_error':''); ?>">
                          <label style="display:none" class="col-md-5 control-label" for="code"><div align="left"><?php echo e(__('ui-list.regNo')); ?>":</div></label>  
                          <div class="col-md-7">
                          <input id="reg_no" name="reg_no" style="display:none"   readonly type="text" value="<?php echo e($code_value); ?>" class="form-control input-md">   
                          </div>
                          </div>
                    </div>
					
						<div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
                          <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.registrationDate')); ?>:</div></label>  
                          <div class="col-md-7">
                          <input id="reg_date"  name="reg_date"   readonly  type="text" value="<?php echo e($registration_date); ?>" class="form-control input-md">
                              
                          </div>
                          </div>
						</div>
						
						
						
						<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
							 <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.shamsi')); ?></div></label>    
							<div class="col-md-7">
							<input id="shamsi" readonly value="<?php echo $date->date("Y-m-d", false, false);?>"  type="text" name="shamsi" class="form-control input-md"/>
						</div>
						</div>
						</div>
					
					
					
					
            <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
                          <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.email')); ?>:</div></label>  
                          <div class="col-md-7">
                          <input id="PersonalEmail"   placeholder="example@gmail.com" name="PersonalEmail"  type="email" value="<?php echo e(Auth::user()->email); ?>" readonly class="form-control input-md">
                              
                          </div>
                          </div>
                </div>
				
                
				 

              

                     
            </div>
              </div>
     
    

           
            
            


              </div>
			  
			 


       
      </div>
			  
          </div>
		  
		  
		  
          <div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
  <div class="x_title">
<h4><b><?php echo e(__('ui-list.personaldetails')); ?> | *  <?php echo e(__('ui-list.mandatory')); ?>	</h4></b>

  </div>
  <div class="x_content">
  <div class="table-responsive">
<div class="col-md-4 col-sm-6 col-xs-12">
                <!-- Text input-->
              <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
              <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.name')); ?>:*</div></label>  
              <div class="col-md-7">
              <input id="name" name="name" required  placeholder="کریم" tabindex="1"  type="text" value="<?php echo e(old('name')); ?>" class="form-control input-md"  title ="Number is Not Allowed" maxlength="30" minlength="2" >
                  <span></span>
              </div>
              </div>


    </div>


<div class="col-md-4 col-sm-6 col-xs-12">
                <!-- Text input-->
              <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
              <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.surname')); ?>:*</div></label>  
              <div class="col-md-7">
              <input id="surname" name="surname" required placeholder="بیدار" tabindex="2"   type="text" value="<?php echo e(old('surname')); ?>" class="form-control input-md"  title ="Number is Not Allowed" maxlength="30" minlength="2" >
              <span></span>
              </div>
              </div>


    </div>
<div class="col-md-4 col-sm-6 col-xs-12">
                <!-- Text input-->
              <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
              <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.fatherName')); ?>:*</div></label>  
              <div class="col-md-7">
              <input id="father_name" tabindex="3" required placeholder="سمون"  name="father_name"  type="text" value="<?php echo e(old('father_name')); ?>" class="form-control input-md"  title ="Number is Not Allowed" maxlength="30" minlength="2" >
              <span></span>
              </div>
              </div>


    </div>

<div class="col-md-4 col-sm-6 col-xs-12">
    <!-- Text input-->
              <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
              <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.personalPhone')); ?>:*</div></label>  
              <div class="col-md-7">
              <input id="PersonalCellPhone" required tabindex="4" placeholder="0091778178438" name="PersonalCellPhone"  type="text" pattern="[0-9]{4}[0-9]{3}[0-9]{6}"  title="Text is not allowed" value="<?php echo e(old('PersonalCellPhone')); ?>" class="form-control input-md" >
                  <span></span>
              </div>
              </div>
    </div>




<div class="col-md-4 col-sm-6 col-xs-12">
    <!-- Text input-->
              <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
              <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.PAddress')); ?>:*</div></label>  
              <div class="col-md-7">
              <input id="PAddress"  tabindex="5" name="PAddress" placeholder="City, District, Street"  type="text" value="<?php echo e(old('PAddress')); ?>" class="form-control input-md"  title="Your address should contain city and street number">
                <span></span>
              </div>
              </div>
    </div>

<div class="col-md-4 col-sm-6 col-xs-12">
    <!-- Text input-->
              <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
              <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.CAddress')); ?>:*</div></label>  
              <div class="col-md-7">
              <input id="CAddress"  tabindex="6" name="CAddress" placeholder="City, District, Street" type="text" value="<?php echo e(old('CAddress')); ?>" class="form-control input-md"  title="Please enter city and street number">
                  <span></span>
              </div>
              </div>
    </div>


<div class="col-md-4 col-sm-6 col-xs-12">
                <!-- Text input-->
              <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
              <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.nic')); ?>:*</div></label>  
              <div class="col-md-7">
              <input id="nic" tabindex="7"   name="nic" placeholder="10607432" type="text" value="<?php echo e(old('nic')); ?>" class="form-control input-md"  title="Your Tazkira Number">
                  <span></span>
              </div>
              </div>
    </div>


   
<div class="col-md-4 col-sm-6 col-xs-12">
                <!-- Text input-->
              <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
              <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.dob')); ?>:*</div></label>  
              <div class="col-md-7">
              <input id="dob" tabindex="8"   name="dob"  type="text" placeholder="1375/08/20" pattern="^[1-4]\d{3}\/((0[1-6]\/((3[0-1])|([1-2][0-9])|(0[1-9])))|((1[0-2]|(0[7-9]))\/(30|31|([1-2][0-9])|(0[1-9]))))$"  title="The date format should be Day/Month/Year" value="<?php echo e(old('dob')); ?>" class="form-control input-md">
                 <span></span> 
              </div>
              </div>
    </div>

<div class="col-md-4 col-sm-6 col-xs-12">
                <!-- Text input-->
              <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
              <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.pob')); ?>:*</div></label>  
              <div class="col-md-7">
              <input id="Pbirth" tabindex="9"  placeholder="City, Country"  name="Pbirth"  type="text" value="<?php echo e(old('Pbirth')); ?>" class="form-control input-md"  title ="Number is Not Allowed" maxlength="30" minlength="2" >
                  <span></span>
              </div>
              </div>
    </div>


</div>


  </div>

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
  <div class="x_title">
<h4><b><?php echo e(__('ui-list.uploadpic')); ?>: (<?php echo e(__('ui-list.filesize')); ?>)*</h4></b><br/>
        <h4 dir="rtl">عکس باید رسمی باشد با بگروند سفید.</h4>
  </div>
  
  <div class="x_content" class="col-md-4 col-sm-6 col-xs-12">
  
            <!-- Text input-->
             <div class="form-group <?php echo e($errors->has('image')?'has_error':''); ?>">
             
             <div class="col-md-7">
                 <img id="imgDisplayarea"  width="300px" height="200px"/>  
                 <input accept="image/png, image/jpeg, image/jpeg" onchange="document.getElementById('imgDisplayarea').src=window.URL.createObjectURL(this.files[0])" id="image" tabindex="10"  name="image"  type="file" value="<?php echo e(old('imgDisplayarea')); ?>"/>
</div>           
            
            </div>

              
  </div>





</div>

</div>



</div>

</div>

  </div>






            </div>
            <div class="tab-pane" id="tab2">
          
          
            
            <div class="row">

		  

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h4><b><?php echo e(__('ui-list.educationalqualification')); ?></h4></b>

</div>
<div class="x_content">
<div class="table-responsive">
<div class="row">


<!--<div class="col-md-4 col-sm-6 col-xs-12">
          
          <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
          <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.issueingCountry')); ?>*</div></label>  
          <div class="col-md-7">
          <input id="issueingCountry" name="issueingCountry" placeholder="Sweden" tabindex="11"  type="text" value="<?php echo e(old('issueingCountry')); ?>" class="form-control input-md"  title ="Number is Not Allowed" maxlength="30" minlength="2" >
        <span></span>   
          </div>
          </div>
 </div>-->

<div class="col-md-4 col-sm-6 col-xs-12">
<div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
<label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.issueingCountry')); ?>*</div></label>  
<div class="col-md-7">
<select name="issueingCountry"  tabindex="27"   class="form-control product" >
          <option value="" ><?php echo e(__('ui-list.selectCountry')); ?>"</option>
          <?php $__currentLoopData = $medical_degrees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nationality): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($nationality->degree); ?>" ><?php echo e($nationality->degree); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
</div>
</div>
</div>


<div class="col-md-4 col-sm-6 col-xs-12">
            <!-- Text input-->
          <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
          <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.diplomaNumber')); ?></div></label>  
          <div class="col-md-7">
          <input id="DiplomaNumber"  name="DiplomaNumber" placeholder="654545" tabindex="12"  type="text" value="<?php echo e(old('DiplomaNumber')); ?>" class="form-control input-md"  title="Please enter your diploma number">
            <span></span>
          </div>
          </div>
 </div>

<div class="col-md-4 col-sm-6 col-xs-12">
            <!-- Text input-->
          <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
          <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.transcriptNumber')); ?></div></label>  
          <div class="col-md-7">
          <input id="TranscriptNumber"  name="TranscriptNumber" placeholder="54544" tabindex="13"  type="text" value="<?php echo e(old('TranscriptNumber')); ?>" class="form-control input-md"  title="Please enter your transcript number">
              <span></span>
          </div>
          </div>
 </div>

<div class="col-md-4 col-sm-6 col-xs-12">
            <!-- Text input-->
          <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
          <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.thesistitle')); ?>:</div></label>  
          <div class="col-md-7">
          <input id="thesistitle"  name="thesistitle"  value="<?php echo e(old('thesistitle')); ?>" tabindex="14" type="text" placeholder="Developing 2D Architecture" class="form-control input-md"  title="Your thesis Title">
              <span></span>
          </div>
          </div>
</div>


</div>

<div class="row">
<div class="col-md-4 col-sm-6 col-xs-12">
            <!-- Text input-->
          <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
          <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.typeofEducation')); ?>*</div></label>  
          <div class="col-md-7">
          <select id="typeEducation" tabindex="15"  name="typeEducation" class="form-control" >
                  <option value="<?php echo e(old('typeEducation')); ?>"><?php echo e(__('ui-list.selectType')); ?>"</option>
                  
                  <option value="1">Regular</option>
  <option value="2">Distance</option>
                  <option value="3">Semi-Distance</option>
          </select>
              
          </div>
          </div>


</div>

<div class="col-md-4 col-sm-6 col-xs-12">
            <!-- Text input-->
          <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
          <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.typeofscholarship')); ?>:*</div></label>  
          <div class="col-md-7">
          <select id="typeScholarship" tabindex="16"  name="typeScholarship" class="form-control" >
                  <option value="<?php echo e(old('typeScholarship')); ?>"><?php echo e(__('ui-list.selectType')); ?>"</option>
                  
                  <option value="1">Government Scholarship</option>
                  <option value="2">Private</option>
          </select>
              
          </div>
          </div>


</div>

<div class="col-md-4 col-sm-6 col-xs-12">
            <!-- Text input-->
          <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
          <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.EducationalDocument')); ?>*</div></label>  
          <div class="col-md-7">
          <select  id="EDocument" tabindex="17"  name="EDocument" class="form-control" >
                  <option value="<?php echo e(old('EDocument')); ?>"><?php echo e(__('ui-list.selectType')); ?>"</option>
                  
                  <option value="1">Original Document</option>
  <option value="2">Temporary Certificate</option>
                
          </select>
              
          </div>
          </div>


</div>

</div>

<div class="row">
<div class="col-md-4 col-sm-6 col-xs-12">
<!-- Text input-->
          <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
          <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.Grade')); ?></div></label>  
          <div class="col-md-7">
          <input id="Grade"  tabindex="18" placeholder="A" name="Grade"  type="text" value="<?php echo e(old('Grade')); ?>" class="form-control input-md"  title="Your Grade">
              <span></span>
          </div>
          </div>
</div>



<div class="col-md-4 col-sm-6 col-xs-12">
<!-- Text input-->
          <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
          <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.rollNum')); ?></div></label>  
          <div class="col-md-7">
          <input id="RollNum" tabindex="20" name="RollNum" placeholder="05" type="text" value="<?php echo e(old('RollNum')); ?>" class="form-control input-md"  title="Your Roll Number">
              <span></span>
          </div>
          </div>
</div>

</div>

<div class="row">

<div class="col-md-4 col-sm-6 col-xs-12">
<!-- Text input-->
          <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
          <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.studyDuration')); ?>*(Years)</div></label>  
          <div class="col-md-7">
          <input id="StudyDuration" tabindex="21" placeholder="4" name="StudyDuration"  type="number" value="<?php echo e(old('StudyDuration')); ?>" class="form-control input-md" >
              
          </div>
          </div>
</div>



<div class="col-md-4 col-sm-6 col-xs-12">
<!-- Text input-->
          <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
          <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.fieldofEducation')); ?>*</div></label>  
          <div class="col-md-7">
          <input id="FEducation" tabindex="22" name="FEducation" placeholder="Computer Science" type="text" value="<?php echo e(old('FEducation')); ?>" class="form-control input-md"  title ="Number is Not Allowed" maxlength="30" minlength="2" >
                    <span></span>
          
          </div>
          </div>
</div>



<div class="col-md-4 col-sm-6 col-xs-12">
            <!-- Text input-->
          <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
          <label class="col-md-5 control-label" for="order_date"><div align="left">T/O/C-<?php echo e(__('ui-list.GPA')); ?></div></label>  
          <div class="col-md-7">
          <input id="GPA" tabindex="23" name="GPA" placeholder="3.5" type="number" step="any" value="<?php echo e(old('GPA')); ?>" class="form-control input-md">
          <center> <b>Out of</b></center>
          <select id=" tabindex="15"  name=" class="form-control" >
                  <option value="<?php echo e(old('email_search')); ?>"><?php echo e(__('ui-list.selectGPA')); ?>"</option>
                  <option value="1">1</option>
  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="1">4</option>
  <option value="2">5</option>
                  <option value="3">6</option>
                  <option value="1">7</option>
  <option value="2">8</option>
                  <option value="3">9</option>
                  <option value="1">10</option>
          </select>
          <br/>
          </div>
          </div>
</div>

</div>
<div class="row">	 


<div class="col-md-4 col-sm-6 col-xs-12">
            <!-- Text input-->
          <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
          <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.AYear')); ?>*</div></label>  
          <div class="col-md-7">
          <input id="AYear" tabindex="25"   name="AYear" placeholder="2009" type="number" value="<?php echo e(old('AYear')); ?>" class="form-control input-md">
              
          </div>
          </div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
            <!-- Text input-->
          <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
          <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.GYear')); ?>*</div></label>  
          <div class="col-md-7">
          <input id="GYear" tabindex="26"   name="GYear" placeholder="2012" type="number" value="<?php echo e(old('GYear')); ?>" class="form-control input-md">
              
          </div>
          </div>
</div>
</div>
<br/><br/>

<div class="row">

<div class="col-md-4 col-sm-6 col-xs-12">
            <!-- Text input-->
          <div class="form-group<?php echo e($errors->has('receive_date')?'has-error':''); ?>">
          <label class="col-md-5 control-label" for="order_date"><div align="left"><?php echo e(__('ui-list.details1')); ?></div></label>  
          <div class="col-md-7">
          <textarea id="details" tabindex="27"  name="details" placeholder="<?php echo e(__('ui-list.details3')); ?>" type="text" cols="40" rows="5"><?php echo e(Request::old('body')); ?></textarea>
          </div>
          </div>
</div>


</div>	







</div></div></div></div></div>























            </div>
          <div class="tab-pane" id="tab3">
            

            
<!-- Start of Educational Qualification -->

<div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
              <div class="x_title">
				
			<h4><b><?php echo e(__('ui-list.educationdetails')); ?></h4></b>
              </div>
              <div class="x_content">
              <div class="table-responsive">
            <table class="table  table-bordered table-condensed table-hover table-striped">
              <thead>
                <tr style="background:lavender;">
                  
      
                  <th><font size="2px"><center><?php echo e(__('ui-list.degree')); ?>*</center></font><span></span></th>
                      
                  <th><font size="2px"><center><?php echo e(__('ui-list.FromDate')); ?>*</center></font></th>
                   <th ><font size="2px"><center><?php echo e(__('ui-list.ToDate')); ?>*</center></font></th>  
                   <th ><font size="2px"><center><?php echo e(__('ui-list.universityName')); ?>*</center></font></th>   
                 <th ><font size="2px"><center><?php echo e(__('ui-list.email')); ?>*</center></font></th> 
                  
                  <th ><font size="2px"><center><?php echo e(__('ui-list.universityphone')); ?>*</center></font></th>
                  <th ><font size="2px"><?php echo e(__('ui-list.attach')); ?>*</font></th>
                

                </tr>
              </thead>
              <tbody>


                

      <tr class="table_rows" >

                     
                        
                     
                 
						<!--  <select  name="degree"  tabindex="28"   class="form-control product" >
                          <option value="<?php echo e(old('email_search')); ?>" ><?php echo e(__('ui-list.selectdegree')); ?></option>
                          <?php $__currentLoopData = $medical_degrees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medical_degree): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($medical_degree->degree); ?>" ><?php echo e($medical_degree->degree); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
						  
					
					
						<td width="15%">
						    
						    <!--<input type="text" tabindex="33"  readonly  id ="degree" name="degree" value="Bachelor" class="form-control input-md" />  -->
						    
						     <select  name="degree"    class="form-control product" >
                                <option value="Bachelor" >Bachelor</option>
                                 <option value="Master" >Master</option>
                                  <option value="PHD" >PHD</option>
                        
                         
                             </select>
						    
						    <span></span></td>
                            

                       
                
					  
					  
					  

						<div class="form-group<?php echo e($errors->has('from_date') ? ' has-error' : ''); ?>">
                        <td><input type="text" name="from_date" tabindex = "29"  placeholder="1375/08/28" value="<?php echo e(old('from_date')); ?>" name="from_date" pattern="^[1-4]\d{3}\/((0[1-6]\/((3[0-1])|([1-2][0-9])|(0[1-9])))|((1[0-2]|(0[7-9]))\/(30|31|([1-2][0-9])|(0[1-9]))))$"  title="The date format should be Day/Month/Year" class=" form-control"/> <span></span> 
						<br/><small class="text-danger"><?php echo e($errors->first('from_date')); ?></small>
						</td>
						
						</div>
						
						<div class="form-group<?php echo e($errors->has('to_date') ? ' has-error' : ''); ?>">
						<td><input type="text" name="to_date" tabindex = "30"  placeholder="1379/08/28" name="to_date" value="<?php echo e(old('to_date')); ?>"  pattern="^[1-4]\d{3}\/((0[1-6]\/((3[0-1])|([1-2][0-9])|(0[1-9])))|((1[0-2]|(0[7-9]))\/(30|31|([1-2][0-9])|(0[1-9]))))$" title="The date format should be Day/Month/Year" class="form-control"/>
					<br/><small class="text-danger"><?php echo e($errors->first('to_date')); ?> </small>
						
						</td>
						
						</div>
                      
					  <td >
                      <select  name="university" tabindex="31"   class="form-control product" >
                          <option value="<?php echo e(old('university')); ?>" ><?php echo e(__('ui-list.selectuniversity')); ?>"</option>
                          <?php $__currentLoopData = $universities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $university): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($university->name); ?>" ><?php echo e($university->name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         
                      </select>
                      
                      </td>
                     
                      <td width="12%"><input type="email" tabindex="32" placeholder="info@mit.com" value="<?php echo e(old('PersonalEmail2')); ?>" id="PersonalEmail2"  class="form-control quantity" name="PersonalEmail2"/> 
					  <input type="email" tabindex="32" placeholder="info@mit.com" value="<?php echo e(old('PersonalEmail2')); ?>" class="form-control quantity"/> 
                    
					  
					  </td>
                     
					 <td width="15%">
					 <input type="text" tabindex="33"   name="PersonalPhon2" placeholder="009102025691162" id="PersonalPhon2"  value="<?php echo e(old('PersonalPhon2')); ?>" class="form-control input-md" />   
					  <input type="text" tabindex="33"     placeholder="009102025691162"   class="form-control input-md" />   
					 
					 
					 </td>
                   
                       <td><input type="file" tabindex="34"  class="form-control quantity" name="file_name" value="<?php echo e(old('file_name')); ?>" accept="application/pdf" /><span></span> </td>
					
                     

                    </tr>



                

<!-- The Modal -->
<div id="myModal" class="modal" >

  <!-- Modal content -->
  <div class="modal-content" align="right" dir = "rtl">
    <span class="close">&times;</span>
<center>
<center><h4><?php echo e(__('ui-list.instructions1')); ?><br/>
<?php echo e(__('ui-list.instructions2')); ?>"<br/> <?php echo e(__('ui-list.instructions3')); ?>" </h4>
<br/><h1>در این بخش تمام اسناد های ضروری مرتبط به تحصیل در خارج از کشور مطابق به چک لیست اپلود میگردد، اسناد خواسته شده را به ترتیب و با فارمت خواسته شده به سیستم داخل نمایید که سایز مجموعی آن از پنج ام بی (5 Mb) بیشتر نباشد.</h1><br/>

 
 <h4> <b>یاد آوری : بعد از اتمام ثبت نام در سیستم یک مسج جهت آگاهی شما می آید که ضمن ذکر ثبت نام موفق شما در سیستم یک زمان مشخص میگردد که در تاریخ و ساعت ذکر رفته اصل اسناد تحصیلی خود را تسلیم این ریاست نموده به عوض آن تعرفه حاصل نماید <br/>
<h4><b>برای لیسانس </b></h4>
</b></h4>
	    1-	شهادتنامه صنف دوازدهم (از هر دو طرف ) ... دکمه upload <br/>
	
2-	دیپلوم لیسانس  (از هر دو طرف ) ... دکمه upload	<br/>
3-	ترانسکریپت نمرات ... دکمه upload	<br/>
4-	کاپی تذکره... دکمه upload		<br/>
5-	کاپی پاسپورت از صفحه اول و ویزای آن... دکمه upload	<br/>
6-	کاپی کارت پوهنتون یا مهاجر کارت در صورت امکان ... دکمه upload	<br/>




</td>


<h4><b>برای ماستری </b></h4>
	    •	دیپلوم لیسانس  (از هر دو طرف ) ... دکمه upload <br/>
	
•	ترانسکریپت نمرات ... دکمه upload	<br/>
•	دیپلوم دوره ماستری ... دکمه upload	<br/>
•	ترانسکریپت نمرات دوره ماستری ... دکمه upload	<br/>
•	کاپی تذکره... دکمه upload	<br/>
•	کاپی پاسپورت از صفحه اول و ویزای آن... دکمه upload	<br/>
•	کاپی کارت پوهنتون یا مهاجر کارت در صورت امکان ... دکمه upload	<br/>

<h4><b>برای دوکتورا </b></h4>
	   •	دیپلوم دوره ماستری ... دکمه upload <br/>
	
•	ترانسکریپت نمرات دوره ماستری ... دکمه upload	<br/>
•	دیپلوم و یا سرتیفیکت دوره دوکتورا... دکمه upload	<br/>
•	ترانسکریپت نمرات دوره دوکتورا در صورت که موجود باشد... دکمه upload	<br/>
•	کاپی تذکره... دکمه upload	<br/>
•	کاپی پاسپورت از صفحه اول و ویزای آن... دکمه upload	<br/>
•	کاپی کارت پوهنتون یا مهاجر کارت در صورت امکان ... دکمه upload	<br/>


	
</center>


	</div>

</div>

                 <h4>  <?php echo e(__('ui-list.forfileupload')); ?>  <a   id="myBtn" class="btn btn-danger"><span><?php echo e(__('ui-list.seeinstructions')); ?></span></a></h4> </td>
					
					
              
                
              </tbody>
            </table>

              </div>
     
    
               
           
            
            


              </div>
			  
			 


       
      </div>
			  
          </div>
      
      
      </div>

      <!-- End of Educational Qualification -->
           






            </div>
         
          <ul class="pager wizard">
            <li class="previous first"><a href="javascript:;">اولین</a></li>
            <li class="previous"><a href="javascript:;">قبلی</a></li>
            <li class="next last"><a href="javascript:;">اخیر</a></li>
              <li class="next"><a href="javascript:;">بعدی</a></li>
            <li class="finish hidden"> <a href="#"><input type="submit"  value="Save and Close" ></a> </li>
          </ul>
        </div>
      </div>


    </section>
</div>

		
    	
		
		  
		  
				
                         
          


		  
		  
				 
				  
             

                      
               

					<!-- Text input-->
				

			<div class=" text-right" style="margin-right: 8px;">
			
			<div class="form-group">
			
      
   
    
      <!-- <a href="/home" class="btn btn-danger"><?php echo e(__('ui.back')); ?>"</a>-->
       
       
  
       
         

     
      
    
	        </div>

			</div>


		</form>
					
				</div>

			</div>

		</div>
    <div class="col-md-1 col-sm-12 col-xs-12">
    </div>

	</div>






<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

   <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
   
   

   <script src="<?php echo e(URL::asset('js/jquery-1.11.0.js')); ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/jquery.PrintArea.js')); ?>"></script>

<script src="<?php echo e(URL::asset('js/jquery-latest.js.download')); ?>"></script>
<script src="<?php echo e(URL::asset('js/bootstrap.min.js.download')); ?>"></script>
<script src="<?php echo e(URL::asset('js/jquery.bootstrap.wizard.js.download')); ?>"></script>
<script src="<?php echo e(URL::asset('js/prettify.js.download')); ?>"></script>



    
	<script>
	$(document).ready(function() {
	  	$('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
			var $total = navigation.find('li').length;
			var $current = index+1;
			var $percent = ($current/$total) * 100;
			$('#rootwizard').find('.bar').css({width:$percent+'%'});
		}});
		$('#rootwizard .finish').click(function() {
			alert('Finished!, Starting over!');
			$('#rootwizard').find("a[href*='tab1']").trigger('click');
		});
		window.prettyPrint && prettyPrint()
	});
	</script>








   <script>
       
  $(document).ready(function() {
  $(".submit").click(function() {
    $(".submit").addClass("loading");
    setTimeout(function() {
      $(".submit").addClass("hide-loading");
      // For failed icon just replace ".done" with ".failed"
      $(".done").addClass("finish");
    }, 9000);
    setTimeout(function() {
      $(".submit").removeClass("loading");
      $(".submit").removeClass("hide-loading");
      $(".done").removeClass("finish");
      $(".failed").removeClass("finish");
    }, 9000);
  })
});
       
       
       
   </script>
   

   
   
   
   
   
   <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
   
   
   
   
   <script>
   
   <script type="text/javascript">
onload=function(){
var e=document.getElementById("refreshed");
if(e.value=="no")e.value="yes";
else{e.value="no";location.reload();}
}
   
   </script>
   <script>
   
$(window).bind("pageshow", function() {
    var form = $('form'); 
    // let the browser natively reset defaults
    form[0].reset();
});
   
   </script>
   
   
   <script>
   $('.selectParent select').on('change', function () {
     var $this = $(this),
     	value = $this.val();

     	if (value == 'Afghan') {
			$('#nic').removeAttr('disabled');
			$('#jild').removeAttr('disabled');
			$('#page').removeAttr('disabled');
			$('#ShumaraSabt').removeAttr('disabled');
     		$('#nic').fadeIn(350);
			$('#jild').fadeIn(350);
			$('#page').fadeIn(350);
			$('#ShumaraSabt').fadeIn(350);
			
			$('#passport_no').attr('disabled','disabled');
			$('#visa_issue_date').attr('disabled','disabled');
			$('#visa_exp_date').attr('disabled','disabled');
			$('#issue_place').attr('disabled','disabled');
			$('#issue_date').attr('disabled','disabled');

     	} else {
			$('#nic').attr('disabled','disabled');
			$('#jild').attr('disabled','disabled');
			$('#page').attr('disabled','disabled');
			$('#ShumaraSabt').attr('disabled','disabled');
			$('#passport_no').removeAttr('disabled');
			$('#visa_issue_date').removeAttr('disabled');
			$('#visa_exp_date').removeAttr('disabled');
			$('#issue_place').removeAttr('disabled');
			$('#issue_date').removeAttr('disabled');
     	}
		
		
 });
   </script>
   
   
   
	<script type="text/javascript">
	
	jQuery( document ).ready(function( $ ) {

   //Use this inside your document ready jQuery 
   $(window).on('popstate', function() {
      location.reload(true);
   });

});


	
	
	
	
	 function showimagepreview(input) 
    {
      if (input.files && input.files[0]) 
      {
        var filerdr = new FileReader();
        filerdr.onload = function(e) {
            $('#imgDisplayarea').attr('src', e.target.result);
        };
        filerdr.readAsDataURL(input.files[0]);
      }
    }

// $(document).ready(function(){


//       $("#imgload").change(function(){

//         if(this.files&&this.files[0]){
//           var reader = new fileReader();
//           reader.onload = function(e){
//             $("#imgshow").attr("src"),e.target.result);

//           }
//           reader.readAsDataURL(this.files[0]);
//         });
//       }); 
//   });

	
	  // $(document).ready(function(){


   //    $('#imgload').change(function(){

   //      if(this.files&&this.files[0]){
   //        var reader = new fileReader();
   //        reader.onload = function(e){
   //          $('#imgshow').attr('src'),e.target.result);

   //        }
   //        reader.readAsDataURL(this.files[0]);
   //      });
   //    }); 


		 
		 //  var product_category=$('#product_category');
		 //  product_category.on('change',function(event){
         
		 //  var selectedElementIndex=$("#product_category option:selected").index();
		 // if(selectedElementIndex==0){
			//  $('#product_classification').hide();
			 
		 // }else{
			//      product_category_id=$(this).val();
			//      $.ajax({
			// 		 method:'get',
			// 		 url:'/show_selected_product_category_class/'+product_category_id,
			// 		 success:function(data){
			// 			 var product_classification= $('#product_classification');
						 
			// 			 product_classification.val(data.substr(1,data.length-2));
			// 			 product_classification.show();
			// 		 },
			// 		 error:function(){
			// 			 alert("Something went wrong");
			// 		 }
			// 	 })
			 	
		 // }
		  
		  
		 //   });


		 //   var brand=$('#brand_id');
		 //   var model=$('#model_id');
		 //   brand.on('change',function(){
			//    var brandValue=$('#brand_id').val();
			  
			//    if(!brandValue){
			// 	   model.prop('disabled','disabled');
				  
			// 	   return;
			//    }else{
			// 	   model.prop('disabled','');
			// 	   $.ajax({
			// 		method:'get',
			// 		url:'admin/brand/models/'+brandValue,
			// 		success:function(data){
			// 			var resultObj=JSON.parse(data);
			// 			var model_names=resultObj.model_names;
			// 			var model_ids=resultObj.model_ids;
						
					
			// 			model.empty();
			// 			model.append('<option></option>');
			// 			for(i=0;i<model_names.length;i++){
			// 				model.append('<option value='+model_ids[i]+'>'+model_names[i]+'</option>');
			// 			}

			// 		}
			// 	   });
			//    }
		 //   });
	  // });
	
	
	
	
	
	
	</script>
	
	
	<script>
	$(document).ready(function() {
    $("body").prepend('<div id="overlay" class="ui-widget-overlay" style="z-index: 1001; display: none;"></div>');
    $("body").prepend("<div id='PleaseWait' style='display: none;'><img src="'<?php echo e(URL::to('"/images/logo.png"')); ?>'"></div>");
});

$('#gds_form').submit(function() {
    var pass = true;
    //some validations

    if(pass == false){
        return false;
    }
    $("#overlay, #PleaseWait").show();

    return true;
});
	
	</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>