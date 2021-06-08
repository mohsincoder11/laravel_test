@extends('layout')
@section('css')
<!-- owl carousel -->
<link href="{{asset('public/assets/css/fontfamily.css')}}" rel="stylesheet">
<link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<style>	
	button{
		padding: .25rem .5rem;
		font-size: .875rem;
		border-radius: .2rem;
		background-color: #2b52a6;
		color: #fff;
		font-weight: bold;

	}
	
</style>
@stop
@section('content')



<div class=" container col-md-12 pt-4 ">
	<div class="row float-right " >
		<div class="col-md-offset-2 col-md-">
			<a href="	{{url('log_out')}}" class="btn btn-danger btn-sm">Log Out</a>

		</div>	
	</div>
	<div class="row">
<h3 class="pt-4">	Contact Records</h3>
		<div class="col-md-12 firsttable">
			<div class="table-wrapper pt-2" >
				<table id="contact_detail_table" class="table display responsive nowrap">
					<thead>
						<tr>
							<th >id</th>
							<th style="width: 20%">Name</th>
							<th style="width: 20%">E-mail</th>
							<th style="width: 20%">Mobile</th>
							<th style="width: 40%">Description</th>

						</tr>
					</thead>
					<tbody id="contact_detail_body">
					</tbody>
				</table>
			</div><!-- table-wrapper -->
		</div>



	</div>
</div>

@stop
@section('js')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<script>
	$( document ).ready(function() {		


		$.ajax({
			type: "get",
			url: "{{Route('get_allcontact_query')}}",
			dataType:'json',
			success:function(data) {
				console.log(data);
				//$("#contact_detail_body").empty();
				$.each(data, function (a, b) {

					$("#contact_detail_body").append(
						'<tr ><td>'+b.id+'</td><td>'+b.name+'</td><td>'+b.email+'</td><td>'+b.mobile+'</td><td>'+b.description+'</td></tr>');
				});
				$('#contact_detail_table').DataTable(
				{
					"info": true,
					"autoWidth": false,
					responsive: true,
					"order": [[ 0, "desc" ]],
					"columnDefs": [
					{
						"targets": [ 0],
						"visible": false,
					}],
					dom: 'Bfrtip',
					buttons: [
					'csv', 'excel', 'print'
					]
					
				});
				

			}

		});


	});

</script>
@stop