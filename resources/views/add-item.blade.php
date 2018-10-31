@extends('welcome')
@section('content')
<style>

</style>
<div class="row mb-2 item">
	<div class="col-md-12">
		<div class="card border-info">
			<div class="card-body">
				<div class="row">
					<div class="form-group col-md-6">						
						<input id="search-input" class="form-control form-control-sm" type="text"
						 name="item_name" value="" data-id="" autocomplete="off" placeholder="Search Item">					
					</div>
					<div class="form-grou col-md-6">
						<button id="add_district" class="btn btn-success btn-sm">Add District</button>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<div class="row mb-2 item">
	<div class="col-md-12">
		<div class="card border-info">			
				<p class="badge badge-info" style="padding: 7px;border-radius:0;text-align: left">
				District List</p>			
			<div class="card-body">
				<div class="row">
					<table id="district_table" class="table-bordered" width="100%">
					<thead>
						<tr>
							<th>SN</th>
							<th>District Name(EN)</th>
							<th>District Name(BN)</th>
							<th>Latitude</th>
							<th>Longitude</th>
							<th>Website</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
				</div>				
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		var path = "{{ route('district.search') }}";
	    $('#search-input').typeahead({
	        source:  function (query, process) {
	        return $.get(path, { query: query }, function (data) {	        	
	                return process(data);
	            });
	        }
	        afterSelect: function (data) {
		      //print the id to developer tool's console
		      // console.log(data.id);
		      $('#search-input').attr('data-id',data.id);
		    }
	    });

	    //Add select district table row in district list 
	    $('#add_district').on('click',function(){
	    	var id=$('#search-input').attr('data-id');
	    	var url="{{route('district.get','')}}"+"/"+id;
	    	$.ajax({
	    		'url':url,
	    		'type':'get',
	    		'dataType':'json',
	    		'success':function(response){
	    			// console.log(response);
	    			var html="";
	    			html+="<tr><td>"+response.id+"</td><td>"
	    			+response.name+"</td><td>"+response.bn_name+"</td><td>"+response.lat
	    			+"</td><td>"+response.lon+"</td><td>"+response.website+"</td></tr>";
	    			$('#district_table tbody').append(html);
	    			$('#search-input').val('');
	    		}
	    	})
	    });
	})
   
</script>

@endsection