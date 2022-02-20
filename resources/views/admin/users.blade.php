<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

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

    		<h1 style="color:#ffab00;"><br>User Profile <br></h1>

      <div>
        
       <table  style="border: 2px solid whitesmoke; width: 80%;" bgcolor="grey" >

          <tr align="center" style="background-color: darkseagreen;">
    					<th style="padding: 30px">Name</th>
    					<th style="padding: 30px">Email</th>
    					<th style="padding: 30px">Action</th>

    				</tr>



    				@foreach($data as $data)
    				<tr align="center">
    					<td>{{$data->name}}</td>
    					<td>{{$data->email}}</td>


    					@if($data->usertype=="0")
    					<td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>

    					@else
    					<td><a>Not Allowed</a></td>
    					@endif


    				</tr>
    				@endforeach


    			</table>
    		</div>
    		
		</div>
    		@include("admin.adminscript")
  </body>
</html>

</body>
</html>