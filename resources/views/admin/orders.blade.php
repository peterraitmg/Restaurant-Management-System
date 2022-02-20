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
<h1 style="color:#ffab00;"><br>Customer orders </h1><br>



<form action="{{url('/search')}}" method="get">
  @csrf
<input type="text" name="search" placeholder="Search by name/foodname.." style="color:indianred;">
<input type="submit" value="Search" class="btn btn-success">
</form><br>

      <div >
        
        <table style="border: 2px solid whitesmoke; width: 90%;" bgcolor="grey">
      		<tr align="center" style="background-color: darkseagreen;">
      		<td style="padding: 30px;">Name</td>
      		<td style="padding: 30px;">Phone</td>
      		<td style="padding: 30px;">Address</td>

      		<td style="padding: 30px;">Foodname</td>
      		<td style="padding: 30px;">Price</td>
      		<td style="padding: 30px;">Quantity</td>
      		<td style="padding: 30px;">Total Price</td>




      	</tr>

@foreach($data as $data)
      	<tr align="center" style="background-color:grey;">
      		<td>{{$data->name}}</td>
      		<td>{{$data->phone}}</td>
      		<td>{{$data->address}}</td>
      		<td>{{$data->foodname}}</td>
      		<td>NRs.{{$data->price}}</td>
      		<td>{{$data->quantity}}</td>
      		<td>NRs.{{$data->price * $data->quantity}}</td>

      		

      	</tr>

      	@endforeach
      </table>
  </div>
</div> 
 </div>
    
    @include("admin.adminscript")
  </body>
</html>