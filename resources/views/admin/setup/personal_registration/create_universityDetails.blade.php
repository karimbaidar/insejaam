<?php 

require_once 'C:\xampp\htdocs\RheinlandStudie\public\jDateTime-master/jdatetime.class.php';
//Init
$date = new jDateTime(true, true, 'Asia/Tehran');


   
   


?>
@extends('layouts.app')


@section('custom_css_links')

  
<style>

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
  overflow-y: scroll;
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
.simple-form input:required:valid,
.simple-form select:required:valid {
  border-left-color: palegreen;
}
.simple-form input:invalid,
.simple-form select:invalid {
  border-left-color: salmon;
}
.simple-form input:required:focus:valid,
.simple-form select:required:focus:valid {
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
    overflow: auto; /* Enable scroll if needed */
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

@keyframes rotateAnimation {
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
	

@endsection()
@section('page-content')

<div class="text-center">
                  <form class=" action="{{url('/locale')}}" id="locale_form" method="post">
                      {{csrf_field()}}
<!--
<center>              
<table><tr>
<td>
<button class="button1" id="locale"   name="locale"   value="en" {{App::getLocale()=='en'?'selected':''}}  >{{__('ui.english')}}</button>
</td>
<td>
<button class="button1" id="locale"   name="locale"   value="fa" {{App::getLocale()=='fa'?'selected':''}}  >{{__('ui.dari')}}</button>
</td>
<td>
<button class="button1" id="locale"   name="locale"   value="ps" {{App::getLocale()=='ps'?'selected':''}}  >{{__('ui.pashtu')}}</button>
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
         <img src="{{url('/images/logo.png')}}" style="width:100px;height:100px;border-radius:50%"></img>   <table border="2px solid" width="100%" style="margin-top: 5px;">
                                                          <tr>
                                                         <td><b>    <center>د لوړو زده کړو وزارت<br/>د افغانستان اسلامی حمهوریت</center></br></b></br></br></td>
                                                           <center> <td><b>   <center>ISLAMIC REPUBLIC OF AFGHANISTAN </br>Ministry of Higher Education</center></b></br></br></td>
                                                           <center> <td><b>   <center>جمهوری اسلامی افغانستان</br>وزارت تحصیلات عالی افغانستان</center></b></br></br></td>
                                                          </tr>
                                                          
                                                        </table>
                                                       
                                                    </div>
				<div class="x_content">

		<form  action="{{'/createUniversityDetails/'}}" method="post" class="simple-form" enctype="multipart/form-data" files="true">

			<div class="panel-body">
				
				{{ csrf_field() }}

	    <fieldset>

				<!-- Text input-->
			
			<div class="row">
				 

                <div class="col-md-4 col-sm-6 col-xs-12 col-sm-12 col-xs-12" style="float:right">
                            <!-- Text input-->
                           
                         <div class="col-md-12" style="background-color: lightgray">
                          	
                          	<h4 style="text-align: center"><b> فورم برای تاییدی</b></h4>
                              
                          </div>

                          
                </div>
				 <div class="col-md-4 col-sm-6 col-xs-12 col-sm-12 col-xs-12" style="float:right">
                            <!-- Text input-->
                         

                        <!--   <a href="/home" class="btn btn-danger">{{__('ui.back')}}"</a> -->
                              
                  

                           
                </div>                   	                         

               

			</div>
			

			<div class="row">
			
			<div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
              <div class="x_title">
				<h4><b>{{__('ui-list.systemdetails')}}</b></h4>
          
              </div>
              <div class="x_content">
              <div class="table-responsive">
         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          
                          <div class="col-md-7">
						  @if(Auth::check())
							  
						
                   
                          <input id="id" name="id" required readonly type="text" style="display:none" value="{{Auth::user()->id}}" class="form-control input-md">   
						  
						  @endif
						  
                          </div>
                          </div>
						  
                  
                  
					
					  <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">{{__('ui-list.regNo')}}:</div></label>  
                          <div class="col-md-7">
                          <input id="reg_no" name="reg_no" required  readonly type="text" value="{{$code_value}}" class="form-control input-md">   
                          </div>
                          </div>
                    </div>
					
					
					
        

              

                     
            </div>
              </div>
     
    
               
           
            
            


              </div>
			  
			 


       
      </div>
			  
          </div>
		  
		  
		  
		  
		  
				
        


<!-- Start of Educational Qualification -->

           	<div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
              <div class="x_title">
				
			<h4><b>{{__('ui-list.educationdetails')}}</h4></b>
              </div>
              <div class="x_content">
              <div class="table-responsive">
            <table class="table  table-bordered table-condensed table-hover table-striped">
              <thead>
                <tr style="background:lavender;">
                  
      
                  <th><font size="2px"><center>{{__('ui-list.degree')}}*</center></font><span></span></th>
                      
                  <th><font size="2px"><center>{{__('ui-list.FromDate')}}*</center></font></th>
                   <th ><font size="2px"><center>{{__('ui-list.ToDate')}}*</center></font></th>  
                   <th ><font size="2px"><center>{{__('ui-list.universityName')}}*</center></font></th>   
                 <th ><font size="2px"><center>{{__('ui-list.email')}}*</center></font></th> 
                  
                  <th ><font size="2px"><center>{{__('ui-list.universityphone')}}*</center></font></th>
                  <th ><font size="2px">{{__('ui-list.attach')}}*</font></th>
                

                </tr>
              </thead>
              <tbody>


                

      <tr class="table_rows" >

                     
                        
                     
                 
						<!--  <select required name="degree"  tabindex="28"   class="form-control product" >
                          <option value="{{old('email_search')}}" >{{__('ui-list.selectdegree')}}</option>
                          @foreach($medical_degrees as $medical_degree)
                          <option value="{{$medical_degree->degree}}" >{{$medical_degree->degree}}</option>
                          @endforeach()-->
						  
					
					
						<td width="15%">
						    
						    <!--<input type="text" tabindex="33" required readonly  id ="degree" name="degree" value="Bachelor" class="form-control input-md" />  -->
						    
						     <select required name="degree"    class="form-control product" >
                                <option value="Bachelor" >Bachelor</option>
                                 <option value="Master" >Master</option>
                                  <option value="PHD" >PHD</option>
                        
                         
                             </select>
						    
						    <span></span></td>
                            

                       
                
					  
					  
					  

						<div class="form-group{{ $errors->has('from_date') ? ' has-error' : '' }}">
                        <td><input type="text" name="from_date" tabindex = "29" required placeholder="1375/08/28" value="{{old('from_date')}}" name="from_date" pattern="^[1-4]\d{3}\/((0[1-6]\/((3[0-1])|([1-2][0-9])|(0[1-9])))|((1[0-2]|(0[7-9]))\/(30|31|([1-2][0-9])|(0[1-9]))))$"  title="The date format should be Day/Month/Year" class=" form-control"/> <span></span> 
						<br/><small class="text-danger">{{ $errors->first('from_date') }}</small>
						</td>
						
						</div>
						
						<div class="form-group{{ $errors->has('to_date') ? ' has-error' : '' }}">
						<td><input type="text" name="to_date" tabindex = "30" required placeholder="1379/08/28" name="to_date" value="{{old('to_date')}}"  pattern="^[1-4]\d{3}\/((0[1-6]\/((3[0-1])|([1-2][0-9])|(0[1-9])))|((1[0-2]|(0[7-9]))\/(30|31|([1-2][0-9])|(0[1-9]))))$" title="The date format should be Day/Month/Year" class="form-control"/>
					<br/><small class="text-danger">{{ $errors->first('to_date') }} </small>
						
						</td>
						
						</div>
                      
					  <td >
                      <select required name="university" tabindex="31"   class="form-control product" >
                          <option value="{{old('university')}}" >{{__('ui-list.selectuniversity')}}"</option>
                          @foreach($universities as $university)
                          <option value="{{$university->name}}" >{{$university->name}}</option>
                          @endforeach()
                         
                      </select>
                      
                      </td>
                     
                      <td width="12%"><input type="email" tabindex="32" placeholder="info@mit.com" value="{{old('PersonalEmail2')}}" id="PersonalEmail2" required class="form-control quantity" name="PersonalEmail2"/> 
					  <input type="email" tabindex="32" placeholder="info@mit.com" value="{{old('PersonalEmail2')}}" class="form-control quantity"/> 
                    
					  
					  </td>
                     
					 <td width="15%">
					 <input type="text" tabindex="33" required  name="PersonalPhon2" placeholder="009102025691162" id="PersonalPhon2"  value="{{old('PersonalPhon2')}}" class="form-control input-md" />   
					  <input type="text" tabindex="33"     placeholder="009102025691162"   class="form-control input-md" />   
					 
					 
					 </td>
                   
                       <td><input type="file" tabindex="34" required class="form-control quantity" name="file_name" value="{{old('file_name')}}" accept="application/pdf" /><span></span> </td>
					
                     

                    </tr>



                

<!-- The Modal -->
<div id="myModal" class="modal" >

  <!-- Modal content -->
  <div class="modal-content" align="right" dir = "rtl">
    <span class="close">&times;</span>
<center>
<center><h4>{{__('ui-list.instructions1')}}<br/>
{{__('ui-list.instructions2')}}"<br/> {{__('ui-list.instructions3')}}" </h4>
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

                 <h4>  {{__('ui-list.forfileupload')}}  <a   id="myBtn" class="btn btn-danger"><span>{{__('ui-list.seeinstructions')}}</span></a></h4> </td>
					
					
              
                
              </tbody>
            </table>

              </div>
     
    
               
           
            
            


              </div>
			  
			 


       
      </div>
			  
          </div>
      
      
      </div>

      <!-- End of Educational Qualification -->
             
             
                       
           

                       

                      
               

					<!-- Text input-->
				

			<div class=" text-right" style="margin-right: 8px;">
			
			<div class="form-group">
			
      
   
     <input type="submit" tabindex="20" class="submit" value="{{__('ui-list.submit')}}" >
     <!--  <a href="/home" class="btn btn-danger">{{__('ui.back')}}"</a> -->
       
       
  
       
         

     
      
    
	        </div>

			</div>


		</form>
					
				</div>

			</div>

		</div>
    <div class="col-md-1 col-sm-12 col-xs-12">
    </div>

	</div>



@stop

@section('scripts')

  

       
       
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
    $("body").prepend("<div id='PleaseWait' style='display: none;'><img src="'{{ URL::to('"/images/logo.png"') }}'"></div>");
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
	
<script type = "text/javascript" >  
  history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script> 

@endsection()

