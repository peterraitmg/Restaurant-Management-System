<x-app-layout>


</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>

  	<base href="/public">
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">

      @include("admin.navbar")
 <div class="container"> 
 	<h1 style="color:#ffab00;"><br>Update Food Menu <br></h1><br>

       <div style="position: relative;top:60 px;right: -150px;">
		    	

		    	<form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

		    		@csrf

		    		
		    		<div>
		    			<label>Title</label><br>
		    			<input style="color: black;"type="text" name="title"  value="{{$data->title}}" required>

		    		</div>



		    		<div>
		    			<label>Price</label><br>
		    			<input style="color: black;"type="num" name="price" value="{{$data->price}}" required>

		    		</div>






		    		<div>
		    			<label>Description</label><br>
		    			<input style="color: black;"type="text" name="description"  value="{{$data->description}}" required>

		    		</div>


		    		<div>
		    			<label>Old Image</label><br>
		    			<img height="200" width="200" src="/foodimage/{{$data->image}}">

		    		</div>


		    		<div>
		    			<label>New Image</label><br>
		    			<input type="file" name="image"  required>

		    		</div>



		    		<div><br>
		    			<input style="background-color: orange;" style="color:black;" type="submit" value="Save">
		    		</div>
		    		

		    	</form>

		</div>

</div>
    </div>
    
    @include("admin.adminscript")
  </body>
</html>