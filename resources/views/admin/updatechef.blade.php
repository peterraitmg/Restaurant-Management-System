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
        <h1 style="color:#ffab00;"><br>Update Chef <br></h1>
         <div style="position: relative;top:60 px;right: -150px;">


      <form action="{{url('/updatefoodchef',$data->id)}}" method="Post" enctype="multipart/form-data">
        @csrf
        <div>
          <label>Chef Name</label><br>
          <input style="color: silver;" type="text" name="name" value="{{$data->name}}">
        </div>

        <div>
          <label>Speciality</label><br>

          <input style="color: silver;" type="text" name="speciality" value="{{$data->speciality}}">
        </div>


        <div>
          <label>Old Image</label><br>

          <img height="300" width="300" src="/chefimage/{{$data->image}}">
        </div>
    

      <div>
          <label>New Image</label><br>

          <input type="file" name="image">
        </div>


        <div><br>

          <input style="background-color:orange"  type="submit" value="Update Chef" required ="">
        </div>
  </form>
    </div>
</div>

    
    @include("admin.adminscript")
  </body>
</html>