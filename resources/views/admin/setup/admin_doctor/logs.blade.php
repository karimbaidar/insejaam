@extends('admin-layout.app',['title'=>'Order List'])

@section('custom_css_links')

	 <!-- Datatables related files  -->
    <link href="{{URL::asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
	<style>
		table th,table td{
			text-align:center;
		}
		#myTable_filter label{
			float:left;
		}
	</style>
@endsection


@section('page-content')


	<div class="row" style="margin-top:20px">
		<!-- <div class="col-md-1 col-sm-4 col-xs-12">
		</div> -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			
			<div class="x_panel">
				<div class="x_title">
					<h2 style="padding-bottom:5px">Activities List</h2>
					
					
					
					

					<div class="clearfix"></div>

				</div>

				
			
					
					
					
			
					
					
					
					
					
					
					
					
					
				
				<div class="x_content">
				
				
				
				
				
				
				
					<div class="table-responsive">
			
				
			
			  <table  id="myTable" class="table table-condensed table-hover table-striped" border="1px solid">
				<thead>
					<tr>			
						<th>ID</th>
						<th>User</th>
						<th>Activity</th>
						<th>Time</th>
						
					
						
					</tr>
				</thead>
				<tbody>
					
					
					@foreach($activityLogFile as $logFile)
					<tr>
					
						<td> {{$logFile->id}}</td>
						<td> {{$logFile->user}}</td>
						<td> {{$logFile->description}}</td>
						<td> {{$logFile->created_at}}</td>
						
					
						
						
						
					</tr>
					
					
					

					@endforeach()
					
					
			
					
					
				</tbody>
			</table>
			
			
			
			
			

					</div>
				</div>
			</div>
		</div>

		<!-- <div class="col-md-1 col-sm-4 col-xs-12">
		</div> -->

	</div>
	
	
		

		

	


@stop

@section('scripts')


	<script src="{{URL::asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
	
    <script src="{{URL::asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
	<script>
		$(document).ready(function(){
			$('#myTable').DataTable({
				  "language": {
						"lengthMenu": "{{__('ui.show')}} _MENU_ {{__('ui.entry')}}",
						"zeroRecords": "{{__('ui.empty_info')}}",
						"info": "",
						"search":"{{__('ui.search')}}",
						"infoEmpty": "{{__('ui.search_result')}}",
						 "paginate": {
     						 "previous": "{{__('ui.previous')}}",
							  "next":"{{__('ui.next')}}"
   							 }
       					 }
				});
		});


		$('#printButton').on('click',function(){
                product_name=$('.p_name').text();
                category_name=$('.c_name').text();
                unit_measurement=$('.u_name').text();
                quantity=$('.q').text();
               $.ajax({
                   type:'GET',
                   url:'/print_product_report/'+product_name+'/'+category_name+'/'+unit_measurement+'/'+quantity,
                   success:function(response){
                       window.location.href=response;
                   }
               });
            });


		
	
	</script>

@endsection()