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
<h1 style="color:#ffab00;"><br>Reservation List <br></h1>
<form action="{{url('/searchres')}}" method="get">
  @csrf
<input type="text" name="searchres" placeholder="Search by name/email.." style="color:indianred;">
<input type="submit" value="Search" class="btn btn-success">
</form><br>
<div >
  
        
        <table style="border: 2px solid whitesmoke; width: 90%;" bgcolor="grey">

          <tr align="center" style="background-color: darkseagreen;">
              <th style="padding:30px">Name</th>
              <th style="padding:30px">Email</th>
              <th style="padding:30px">Phone</th>
              <th style="padding:30px">Date</th>
              <th style="padding:30px">Time</th>
              <th style="padding:30px">Message</th>
          </tr>

          @foreach($data as $data)

          <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->date}}</td>
            <td>{{$data->time}}</td>
            <td>{{$data->message}}</td>
           </tr> 

           @endforeach

        </table>

      </div>

</div>



    </div>
    
    @include("admin.adminscript")
  </body>
</html>




<div>
  
  <table<tr>
      <th></th>




  </tr>
  </table>

</div>



