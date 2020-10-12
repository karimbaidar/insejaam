@extends('admin-layout.app',['title'=>'Create Location'])
@section('custom_css_links')

	<style>
	   @if(App::getLocale()=='fa')
			 label{
				 text-align:left !important;
			 }
	   @endif()
	</style>

@endsection()
@section('page-content')


 @if(Auth::user()->lastName == "Attestation")


 <div class="row">
 			<div class="col-md-2 col-sm-12 col-xs-12">
 			</div>
				<div class="col-md-9 col-sm-12 col-xs-13">
					<div class="x_panel">
						<div class="x_title">
							<h2 style="padding-bottom:5px">مشخصات شخصی</h2>
							<div class="col-md-4 pull-right">

									
											
							</div>
							<div class="clearfix"></div>
						</div>
					<div class="x_content">
							<br />
					
				
						



	<!-- Text input-->
								
							
									        
									        
	    	<div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نام</div></label>  
                          <div class="col-md-7">
                          <input id="name" name="name" required  readonly type="text" value="{{$doctor->name}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">ولد</div></label>  
                          <div class="col-md-7">
                          <input id="reg_no" name="reg_no" required  readonly type="text" value="{{$doctor->father_name}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                     
							  
					<br/>
					
				    	<div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">سویه تحصیلی:</div></label>  
                          <div class="col-md-7">
                          <input id="reg_no" name="reg_no" required  readonly type="text" value="{{$doctor->EducationLevel}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                      
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نمبر تذکره:</div></label>  
                          <div class="col-md-7">
                          <input id="reg_no" name="reg_no" required  readonly type="text" value="{{$doctor->nic}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       <br/>
                       
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نمبر پاسپورت:</div></label>  
                          <div class="col-md-7">
                          <input id="reg_no" name="reg_no" required  readonly type="text" value="{{$doctor->nic}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">سال شروع :</div></label>  
                          <div class="col-md-7">
                          <input id="reg_no" name="reg_no" required  readonly type="text" value="{{$doctor->AYear}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">سال ختم :</div></label>  
                          <div class="col-md-7">
                          <input id="reg_no" name="reg_no" required  readonly type="text" value="{{$doctor->GYear}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">ایمیل ادرس:</div></label>  
                          <div class="col-md-7">
                          <input id="reg_no" name="reg_no" required  readonly type="text" value="{{$doctor->PersonalEmail}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       
                  
       
                  	
				
                 
                            
									
						  
					
						
               
			
			
					</div>
				</div>
				
				<div class="x_content">
							<br />
					
				
						



	<!-- Text input-->
								
							
									        
									        
	    	<div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نمبر تماس:</div></label>  
                          <div class="col-md-7">
                          <input id="reg_no" name="reg_no" required  readonly type="text" value="{{$doctor->PersonalCellPhone}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">	نوع سند:</div></label>  
                          <div class="col-md-7">
                          
                           @if($doctor->EDocument == 1)
                                <input id="reg_no" name="reg_no" required  readonly type="text" value="Diploma" class="form-control input-md">   
								  @elseif($doctor->EDocument == 2)
								  <input id="reg_no" name="reg_no" required  readonly type="text" value="Certificate" class="form-control input-md">   
                                
								  
								  @endif()    
                              
                         
                          
                          
                          
                          
                          
                          </div>
                          </div>
                       </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">مدت تحصیل:</div></label>  
                          <div class="col-md-7">
                          <input id="reg_no" name="reg_no" required  readonly type="text" value="{{$doctor->StudyDuration}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
							  
					<br/>
					
					<div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نوعیت تحصیل:</div></label>  
                          <div class="col-md-7">
                           @if($doctor->typeEducation== 1)
                                  <input id="reg_no" name="reg_no" required  readonly type="text" value="حضوری " class="form-control input-md">   
								   @elseif($doctor->typeEducation == 2)
								   <input id="reg_no" name="reg_no" required  readonly type="text" value="یمه حضوری" class="form-control input-md">   
                                  @elseif($doctor->typeEducation == 3)
								  <input id="reg_no" name="reg_no" required  readonly type="text" value="غیر حضوری " class="form-control input-md">   
								  
								  @endif()
                         
                          </div>
                          </div>
                       </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نوع بورس:  </div></label>  
                          <div class="col-md-7">
                              
                               @if($doctor->typeScholarship == 1)
                                   <input id="reg_no" name="reg_no" required  readonly type="text" value="{{__('ui-list.Government')}}" class="form-control input-md">   
								  @elseif($doctor->typeScholarship == 2)
								    <input id="reg_no" name="reg_no" required  readonly type="text" value="{{__('ui-list.Private')}}" class="form-control input-md">   
								    
								  @endif()
                        
                          </div>
                          </div>
                       </div>
                      

					</div>
		
				

			
			<div class="row">
 			<div class="col-md-10 col-sm-15 col-xs-14">
 			</div>
				<div class="col-md-12 col-sm-15 col-xs-14">
					<div class="x_panel">
						<div class="x_title">
							<h2 style="padding-bottom:5px"><b>اعضای کمیسون</b></h2>
							<div class="col-md-4 pull-right">

									
											
							</div>
							<div class="clearfix"></div>
						</div>
					<div class="x_content">
							<br />
						<form  action="{{'/check_list1/'}}" method="post" class="form-horizontal form-label-left">
				
							{{ csrf_field() }}

							<fieldset>
				
                     <!-- it means that value of adminapproval is 1 -->
                      
                    @unless (empty($attestationcomments_register->adminapproval) )  
                    <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نمبر دیپلوم:      </div></label>  
                          <div class="col-md-7">
                          <input id="DiplomaNumber" name="DiplomaNumber"    type="text" value="{{$attestationcomments_register->DiplomaNumber}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left"> پوهنتون:</div></label>  
                          <div class="col-md-7">
                          <input id="University" name="University"    type="text" value="{{$attestationcomments_register->University}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>


                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">رشته تحصیلی:</div></label>  
                          <div class="col-md-7">
                          <input id="EducationField" name="EducationField"    type="text" value="{{$attestationcomments_register->EducationField}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       
                       <br/>
                       
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left"> پروتوکول:</div></label>  
                          <div class="col-md-7">
                          <input id="Protocol" name="Protocol"    type="text" value="{{$attestationcomments_register->Protocol}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نوعیت تحصیل: </div></label>  
                          <div class="col-md-7">
                               <input id="EducationLevel" name="EducationLevel"    type="text" value="{{$attestationcomments_register->EducationLevel}}" class="form-control input-md">  
                              
                          </div>
                          </div>
                       </div>
                       
                    
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left"> تیزس  : </div></label>  
                          <div class="col-md-7">
                              
                                   <input id="Thesis" name="Thesis"    type="text" value="{{$attestationcomments_register->Thesis}}" class="form-control input-md">  
                           
                            
                      
                          </div>
                          </div>
                       </div>
                       
                       
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نوعیت تایید : </div></label>  
                          <div class="col-md-7">
                              
                                   <input id="AttestationType" name="AttestationType"    type="text" value="{{$attestationcomments_register->AttestationType}}" class="form-control input-md">  
                           
                            
                            
                              
                         
                          </div>
                          </div>
                       </div>
                       
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نوع اسناد </div></label>  
                          <div class="col-md-7">
                                <input id="DocType" name="DocType"    type="text" value="{{$attestationcomments_register->DocType}}" class="form-control input-md">  
                           
                            
                            
                          </div>
                          </div>
                       </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">کمنت      </div></label>  
                          <div class="col-md-7">
                          <input id="nondocument" name="nondocument"   tabindex="27"  type="textarea" value="{{$attestationcomments_register->nondocument}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       
                    
                     
                     
                       
                     
                    @elseif (!empty($attestationcomments_register->flagattestation) )  


                     
						  <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نمبر دیپلوم:      </div></label>  
                          <div class="col-md-7">
                          @unless (empty($attestationcomments_register->DiplomaNumber) )  
                          <input id="DiplomaNumber" name="DiplomaNumber" disabled   type="text" value="{{$attestationcomments_register->DiplomaNumber}}" class="form-control input-md">   
                          @else
                          <input id="DiplomaNumber" name="DiplomaNumber"   tabindex="27"  type="textarea" value="" class="form-control input-md">   
                          
                          @endunless
                          </div>
                          </div>
                       </div>
                       
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left"> پوهنتون:</div></label>  
                          <div class="col-md-7">
                          @unless (empty($attestationcomments_register->University) )
                          <input id="University" name="University" disabled   type="text" value="{{$attestationcomments_register->University}}" class="form-control input-md">   
                          @else
                          <input id="University" name="University"   tabindex="27"  type="textarea" value="" class="form-control input-md">   
                          @endunless
                          </div>
                          </div>
                       </div>


                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">رشته تحصیلی:</div></label>  
                          <div class="col-md-7">
                          @unless (empty($attestationcomments_register->EducationField) )
                          <input id="EducationField" name="EducationField"  disabled  type="text" value="{{$attestationcomments_register->EducationField}}" class="form-control input-md">   
                          @else
                          <input id="EducationField" name="EducationField"   tabindex="27"  type="textarea" value="" class="form-control input-md">   
                          
                          @endunless
                          </div>
                          </div>
                       </div>
                       
                       <br/>
                       
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left"> پروتوکول:</div></label>  
                          <div class="col-md-7">
                          @unless (empty($attestationcomments_register->Protocol) )
                          <input id="Protocol" name="Protocol"  disabled  type="text" value="{{$attestationcomments_register->Protocol}}" class="form-control input-md">   
                          @else
                          <input id="Protocol" name="Protocol"   tabindex="27"  type="textarea" value="" class="form-control input-md">   
                          
                          @endunless
                          </div>
                          </div>
                       </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نوعیت تحصیل: </div></label>  
                          <div class="col-md-7">
                          @unless (empty($attestationcomments_register->EducationLevel) )

                               @if($attestationcomments_register->EducationLevel == 1)

                               <input id="EducationLevel" name="EducationLevel"  disabled  type="text" value="حضوری" class="form-control input-md">  
                               @elseif($attestationcomments_register->EducationLevel == 2)

                               <input id="EducationLevel" name="EducationLevel"  disabled  type="text" value="نیمه حضوری" class="form-control input-md">  
                               @else
                               <input id="EducationLevel" name="EducationLevel"  disabled  type="text" value="غیر حضوری" class="form-control input-md">  
                               @endif

                               @else
                               <select id="EducationLevel"  tabindex="15"  name="EducationLevel" class="form-control" >
                                
                                <option selected value="1">حضوری </option>
                        <option value="2"> نیمه حضوری</option>
                        <option value="3">غیر حضوری </option>
                 
                      
                             </select>
                          
                           @endunless
                          
                          </div>
                          </div>
                       </div>
                       
                    
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left"> تیزس  : </div></label>  
                          <div class="col-md-7">
                          @unless (empty($attestationcomments_register->Thesis) )

                          @if($attestationcomments_register->Thesis == 1)

                          <input id="Thesis" name="Thesis" disabled   type="text" value="با تیزس" class="form-control input-md">  
                          @elseif($attestationcomments_register->Thesis == 2)
                          <input id="Thesis" name="Thesis" disabled   type="text" value="بدون تیزس" class="form-control input-md">  

                          @else
                          <input id="Thesis" name="Thesis" disabled   type="text" value="پروژه تحقیقی" class="form-control input-md">  

                          @endif
                                 
                                   @else
                                   <select id="Thesis"  tabindex="15"  name="Thesis" class="form-control" >
                                
                                  
                                
                                <option selected value="1">با تیزس </option>
                        <option value="2"> بدون تیزس </option>
                        <option value="3">پروژه تحقیقی </option>
                 
                 
                      
                             </select>
                           @endunless
                            
                          </div>
                          </div>
                       </div>
                       
                       
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نوعیت تایید : </div></label>  
                          <div class="col-md-7">
                          @unless (empty($attestationcomments_register->AttestationType) )

                           @if($attestationcomments_register->AttestationType == 1)
                           <input id="AttestationType" name="AttestationType" disabled   type="text" value="تایید موقت " class="form-control input-md">  

                           @elseif($attestationcomments_register->AttestationType == 2)
                           <input id="AttestationType" name="AttestationType" disabled   type="text" value="تایید دایم" class="form-control input-md">  

                           @endif


                              
                                   @else
                                   <select id="AttestationType"  tabindex="15"  name="AttestationType" class="form-control" >
                                
                                <option selected value="1">تایید موقت  </option>
                        <option value="2"> تایید دایم</option>
                    
                 
                      
                             </select>
                          
                           @endunless
                              
                         
                          </div>
                          </div>
                       </div>
                       
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نوع اسناد </div></label>  
                          <div class="col-md-7">
                          @unless (empty($attestationcomments_register->DocType) )

                                 
                           @if($attestationcomments_register->DocType == 1)
                                <input id="DocType" name="DocType"  disabled  type="text" value="دیپلوم" class="form-control input-md">  
                           @else
                           <input id="DocType" name="DocType"  disabled  type="text" value="سرتیفیکیت" class="form-control input-md">  
                           @endif
                                
                                
                                @else
                               
                         
                               <select id="DocType"  tabindex="15"  name="DocType" class="form-control" >
                                
                                    <option selected value="1">دیپلوم </option>
							    	<option value="2"> سرتیفیکیت </option>

								  
                                 </select>
                        
                          
                    
                          
                           @endunless
          
                          </div>
                          </div>
                       </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">کمنت      </div></label>  
                          <div class="col-md-7">
                          @unless (empty($attestationcomments_register->nondocument) )
                          <input id="nondocument" name="nondocument"  disabled tabindex="27"  type="textarea" value="{{$attestationcomments_register->nondocument}}" class="form-control input-md">   
                          @else
                          <input id="nondocument" name="nondocument"   tabindex="27"  type="textarea" value="" class="form-control input-md">   
                          
                          @endunless
                          </div>
                          </div>
                       </div>
                       
                      
                     @else
                     
                      
					 

                          <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">شماره دپلوم</div></label>  
                          <div class="col-md-7">
                          @unless (empty($attestationcomments_register->DiplomaNumber) )
                          <input id="DiplomaNumber" name="DiplomaNumber" disabled   type="text" value="{{$attestationcomments_register->DiplomaNumber}}" class="form-control input-md">   
                          @else
                          <input id="DiplomaNumber" name="DiplomaNumber"   tabindex="27"  type="textarea" value="" class="form-control input-md">   
                          
                          @endunless
                          </div>
                          </div>
                       </div>
                       
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left"> پوهنتون:</div></label>  
                          <div class="col-md-7">
                          @unless (empty($attestationcomments_register->University) )
                          <input id="University" name="University" disabled   type="text" value="{{$attestationcomments_register->University}}" class="form-control input-md">   
                          @else
                          <input id="University" name="University"   tabindex="27"  type="textarea" value="" class="form-control input-md">   
                          
                         @endunless
                          </div>
                          </div>
                       </div>


                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">رشته تحصیلی:</div></label>  
                          <div class="col-md-7">
                          @unless (empty($attestationcomments_register->EducationField) )
                          <input id="EducationField" name="EducationField"  disabled  type="text" value="{{$attestationcomments_register->EducationField}}" class="form-control input-md">   
                          @else
                          <input id="EducationField" name="EducationField"   tabindex="27"  type="textarea" value="" class="form-control input-md">   
                          
                          @endunless
                          </div>
                          </div>
                       </div>
                       
                       <br/>
                       
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left"> پروتوکول:</div></label>  
                          <div class="col-md-7">
                          @unless (empty($attestationcomments_register->Protocol) )
                          <input id="Protocol" name="Protocol"  disabled  type="text" value="{{$attestationcomments_register->Protocol}}" class="form-control input-md">   
                          @else
                          <input id="Protocol" name="Protocol"   tabindex="27"  type="textarea" value="" class="form-control input-md">   
                          
                          @endunless
                          </div>
                          </div>
                       </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نوعیت تحصیل: </div></label>  
                          <div class="col-md-7">
                          @unless (empty($attestationcomments_register->EducationLevel) )
                               <input id="EducationLevel" name="EducationLevel"  disabled  type="text" value="{{$attestationcomments_register->EducationLevel}}" class="form-control input-md">  
                               @else
                               <select id="EducationLevel"  tabindex="15"  name="EducationLevel" class="form-control" >
                                
                                <option selected value="1">حضوری </option>
                        <option value="2"> نیمه حضوری</option>
                        <option value="3">غیر حضوری </option>
                 
                      
                             </select>
                          
                           @endunless
                          </div>
                          </div>
                       </div>
                       
                    
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left"> تیزس  : </div></label>  
                          <div class="col-md-7">
                          @unless (empty($attestationcomments_register->Thesis) )
                                   <input id="Thesis" name="Thesis" disabled   type="text" value="{{$attestationcomments_register->Thesis}}" class="form-control input-md">  
                                   @else
                                   <select id="Thesis"  tabindex="15"  name="Thesis" class="form-control" >
                                
                                  
                                
                                <option selected value="1">با تیزس </option>
                        <option value="2"> بدون تیزس </option>
                        <option value="3">پروژه تحقیقی </option>
                 
                 
                      
                             </select>
                           @endunless
                            
                      
                          </div>
                          </div>
                       </div>
                       
                       
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نوعیت تایید : </div></label>  
                          <div class="col-md-7">
                          @unless (empty($attestationcomments_register->AttestationType) )
                                   <input id="AttestationType" name="AttestationType" disabled   type="text" value="{{$attestationcomments_register->AttestationType}}" class="form-control input-md">  
                                   @else
                                   <select id="AttestationType"  tabindex="15"  name="AttestationType" class="form-control" >
                                
                                <option selected value="1">تایید موقت  </option>
                        <option value="2"> تایید دایم</option>
                    
                 
                      
                             </select>
                          
                           @endunless
                            
                            
                              
                         
                          </div>
                          </div>
                       </div>
                       
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نوع اسناد </div></label>  
                          <div class="col-md-7">
                          @unless (empty($attestationcomments_register->DocType) )
                                <input id="DocType" name="DocType"  disabled  type="text" value="{{$attestationcomments_register->DocType}}" class="form-control input-md">  
                                @else
                               
                         
                               <select id="DocType"  tabindex="15"  name="DocType" class="form-control" >
                                
                                    <option selected value="1">دیپلوم </option>
							    	<option value="2"> سرتیفیکیت </option>

								  
                                 </select>
                        
                          
                    
                          
                           @endunless
                            
                            
                          </div>
                          </div>
                       </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">کمنت      </div></label>  
                          <div class="col-md-7">
                          @unless (empty($attestationcomments_register->nondocument) )
                          <input id="nondocument" name="nondocument"  disabled tabindex="27"  type="textarea" value="{{$attestationcomments_register->nondocument}}" class="form-control input-md">   
                          @else
                          <input id="nondocument" name="nondocument"   tabindex="27"  type="textarea" value="" class="form-control input-md">   
                          
                          @endunless
                          </div>
                          </div>
                       </div>
                       
                    
                     
                      
                     
                     
                     
                     
                     
                     @endunless

                    <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">     </div></label>  
                          <div class="col-md-7">
                          <input id="reg_no" name="reg_no" required   readonly  type="text"  value="{{ $doctor->reg_no }}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
					    


								</div>
								
								
								
								<div class="row">
 			<div class="col-md-10 col-sm-15 col-xs-14">
 			</div>
				<div class="col-md-12 col-sm-15 col-xs-14">
					<div class="x_panel">
						<div class="x_title">
							<h2 style="padding-bottom:5px"><b>بخش تخنیکی</b></h2>
							<div class="col-md-4 pull-right">

									
											
							</div>
							<div class="clearfix"></div>
						</div>
					<div class="x_content">
							<br />
				
							
			
				    <input id="flagattestation" name="flagattestation"  style="display:none"  type="text" value="1" class="form-control input-md">   
                       
						  <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">صفحه      </div></label>  
                          <div class="col-md-7">
                              
                              @unless ( empty($technicalcomments_register->page) )
                             <input id="" name=""    type="text" value="{{$technicalcomments_register->page}}" readonly class="form-control input-md">   
                             @endunless
                        
                          </div>
                          </div>
                       </div>
                       
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left"> جلد:</div></label>  
                          <div class="col-md-7">
                        
                             @unless ( empty($technicalcomments_register->jild) )
                              <input id="" name=""    type="text" value="{{$technicalcomments_register->jild}}" readonly class="form-control input-md">   
                             @endunless
                        
                          
                          </div>
                          </div>
                       </div>

                 
                       
                       <br/>
                       
                     
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">سویه تحصیلی  </div></label>  
                          <div class="col-md-7">
                             @unless ( empty($technicalcomments_register->EducationType) )
                             <input id="" name=""    type="text" value="{{$technicalcomments_register->EducationType}}" readonly class="form-control input-md">   
                             @endunless
                        
                              
                         
                          </div>
                          </div>
                       </div>
                       
                        
                       
                       
                       
                       
                       
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">کمنت      </div></label>  
                          <div class="col-md-7">
                              
                             @unless ( empty($technicalcomments_register->nondocument) )
                             <input id="" name=""    type="text" value="{{$technicalcomments_register->nondocument}}" readonly class="form-control input-md">   
                             @endunless
                             
                         
                          
                          </div>
                          </div>
                       </div>
                       
                    

				</div>
                    
                  @unless ( empty($technicalcomments_register->Temporary) )
                    @if($technicalcomments_register->Temporary == "3" )
                    
                    <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  موقت  </div></label>  
                          <div class="col-md-7">
                         	<input id="Temporary" name="Temporary" disabled  type="checkbox" checked class="form-control input-md" />  
                          </div>
                          </div>
                       </div>
                    
                    @else
                    <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  موقت  </div></label>  
                          <div class="col-md-7">
                         	<input id="Temporary" name="Temporary" disabled type="checkbox" class="form-control input-md" />  
                          </div>
                          </div>
                       </div>
                    
                    @endif
                 @endunless         
                  
                  @unless ( empty($technicalcomments_register->Permanent) )    
                      @if($technicalcomments_register->Permanent == "3" )

						<div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  دایم  </div></label>  
                          <div class="col-md-7">
                        	<input id="Permanent" name="Permanent" disabled type="checkbox" checked class="form-control input-md" />
                          </div>
                          </div>
                       </div>
					 @else
					 	<div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  دایم  </div></label>  
                          <div class="col-md-7">
                        	<input id="Permanent" name="Permanent" disabled type="checkbox" class="form-control input-md" />
                          </div>
                          </div>
                       </div>
					 
					 
					 @endif
					  @endunless  
					 
					  @unless ( empty($technicalcomments_register->Email) )   
					   @if($technicalcomments_register->Email == "3" )

								
					  <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  ایمیل   </div></label>  
                          <div class="col-md-7">
                        	<input id="Email" name="Email" disabled  type="checkbox"  checked class="form-control input-md" />
                          </div>
                          </div>
                       </div>	
                       
                       @else
                         <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  ایمیل   </div></label>  
                          <div class="col-md-7">
                        	<input id="Email" name="Email" disabled type="checkbox" class="form-control input-md" />
                          </div>
                          </div>
                       </div>	
                       
                       @endif
                       @endunless 
                       
                       <br/>
                       
                
			
					</div>
					
				</div>
                            
                            
                             
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  تایید  </div></label>  
                          <div class="col-md-7">
                         	<input id="approval" name="role" value="approval" type="radio" class="form-control input-md" checked/>  
                          </div>
                          </div>
                       </div>
                            

						<div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  رد  </div></label>  
                          <div class="col-md-7">
                        	<input id="rejection" name="role" value="rejection" type="radio" class="form-control input-md" />
                          </div>
                          </div>
                       </div>
								
							

								
						<div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  پیام  </div></label>  
                          <div class="col-md-7">
                        	<input id="message" name="role" value="message"  type="radio" class="form-control input-md" />
                          </div>
                          </div>
                       </div>	
			
			
					</div>
					
				</div>
				
			
									       
		 <div class="form-group">
                     <div class="text-center">
          	        @unless (!empty($attestationcomments_register->flagattestation) )  

                    <button type="submit"   class="btn btn-success">ارسال</button>
                    @else
                    <button type="submit" disabled  class="btn btn-success">ارسال</button>
                    @endunless


@unless (!empty($attestationcomments_register->adminapproval) )  


@elseif($attestationcomments_register->adminapproval == 2)
<button type="submit" disabled  class="btn btn-success">تغیر</button>

@else
<button type="submit"   class="btn btn-success">تغیر</button>
@endunless
	                         
						    
                        </div>
                    </div>
					</fieldset>
					</form>
							  

			@else
			
			
			    	<div class="row">
 		        	<div class="col-md-2 col-sm-12 col-xs-12">
 		           	</div>
			    	<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="x_panel">
						
						
						
							
				
					            <center> You are not allowed to visit this page </center>
				
				</div>
						        

	  

			</div>
			
			@endif
			
			
			
			
			
@stop	
@section('scripts')


    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="{{URL::asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	
	<script>
	    
	    $(".form-control input-md").click(function(){
    var group = "input[name='"+$(this).attr("name")+"']";
    $(group).attr("checked",false);
    $(this).attr("checked",true);
});
	    
	    
	</script>
	
	@endsection()
 			