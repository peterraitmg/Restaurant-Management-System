<x-app-layout>


</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  	<body>
	    
		<div class="container-scroller">

		    @include("admin.navbar")
		    <div class="container">
		    	<h1 style="color:#ffab00;"><br>Foodmenu (CRUD)<br></h1><br>
		    <div style="position: relative;top:60 px;right: -150px;">
		    	

		    	<form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

		    		@csrf

		    		
		    		<div>
		    			<label>Title</label><br>
		    			<input style="color: black;"type="text" name="title"  placeholder="Name of a dish.." required>

		    		</div>



		    		<div>
		    			<label>Price</label><br>
		    			<input style="color: black;"type="num" name="price"  placeholder="Add price.." required>

		    		</div>




		    		<div>
		    			<label>Image</label><br>
		    			<input type="file" name="image"  required>

		    		</div>



		    		<div>
		    			<label>Description</label><br>
		    			<input style="color: black;"type="text" name="description"  placeholder="Add a Description.." required>

		    		</div>

		    		<div><br>
		    			<input style="background-color: orange;" style="color:black;" type="submit" value="Save">
		    		</div><br>
		    		

		    	</form>

		    	<div>
		    		 <table  style="border: 2px solid whitesmoke; width: 80%; " bgcolor="grey" >
		    			<tr style="background-color: darkseagreen;">
		    				<th style="padding: 30px;">Food Name</th>
		    				<th style="padding: 30px;">Price</th>
		    				<th style="padding: 30px;">Description</th>
		    				<th style="padding: 30px;">Image</th>
		    				<th style="padding: 30px;">Action</th>
		    				<th style="padding: 30px;">Action2</th>


		    				
		    				

		    			</tr>

		    			@foreach($data as $data)
		    			<tr align="center">

			    			<td>{{$data->title}}</td>
			    			<td>NRs.{{$data->price}}</td>
			    			<td>{{$data->description}}</td>
			    			<td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
			    			<td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
			    			<td><a href="{{url('/updateview',$data->id)}}">Update</a></td>

			    			
		    			</tr>
		    			@endforeach

		    		</table>

		    	</div>

		    </div>





</div>

		 </div>
		    @include("admin.adminscript")

	</body>
</html>