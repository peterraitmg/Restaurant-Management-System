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
  <h1 style="color:#ffab00;"><br>Chef (CRUD) <br></h1><br>
   <div style="position: relative;top:60 px;right: -150px;">
      <form action="{{url('/uploadchef')}}" method="Post" enctype="multipart/form-data">
       
        @csrf

          <div>
                        
            <label>Name</label><br>
            <input  style="color: blue;" type="text" name="name" required="" placeholder="Enter chef's name.">

          </div>


          <div>
                        
            <label>Speciality</label><br>
            <input  style="color: blue;" type="text" name="speciality" required="" placeholder="Enter the speciality.">

          </div>


          <div>
            <label>Image</label><br>          
           <input type="file" name="image" required="">
          </div>

          <div><br>
                        
            <input style="background-color:orange;" type="submit" value= "Save">

          </div> <br>



      </form>
      <div >

       <table  style="border: 2px solid whitesmoke; width: 80%;" bgcolor="grey" >
         <tr align="center" style="background-color: darkseagreen;">
          <th style="padding:30px">Chef Name</th>
          <th style="padding:30px">Speciality</th>
          <th style="padding:30px">Image</th>
          <th style="padding:30px">Action</th>
          <th style="padding:30px">Action2</th>
                  

         </tr>

         @foreach($data as $data)
              <tr align="center">

                <td>{{$data->name}}</td>
                <td>{{$data->speciality}}</td>      
                <td><img height="150" width="150" src="/chefimage/{{$data->image}}"></td>
                 <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
                 <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>

               

                
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