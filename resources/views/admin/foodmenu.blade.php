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


    <div style="position: relative; top: 100%; right: -150px">

    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

    @csrf


    <div>
    <label>Title</label>
    <input style="color:blue;" type="text" name="title" placeholder="Write a title" required>
    </div>

    

    <div>
    <label>Image</label>
    <input type="file" name="image"  required>
    </div>

    <div>
    <label>Description</label>
    <input style="color:blue;" type="text" name="description" placeholder="Description" required>
    </div>

    <style>
      
    
      /* Style for the Save button */
      .save-button {
        background-color: white;
        color: black;
        border: 1px solid #000;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s, transform 0.3s; /* Add smooth transition effects */
        border-radius: 5px;
      }
    
      /* Hover styles for the Save button */
      .save-button:hover {
        background-color: black;
        color: white;
        transform: scale(1.05); /* Add a scaling effect on hover */
      }
    </style>
    
    <div class="button-container">
      <input type="submit" value="Save" class="save-button">
    </div>
    
    

    

    </form>


    <div>

      <table bgcolor="black">
        <tr>
          <th style="padding: 30px">Product Name</th>
          <th style="padding: 30px"></th>
          <th style="padding: 30px">Description</th>
          <th style="padding: 30px">Image</th>
          <th style="padding: 30px">Action</th>
          <th style="padding: 30px">Action2</th>
        </tr>
      
        @foreach($data as $data)
        <tr align="center">
          <td>{{$data->title}}</td>
          <td>{{$data->price}}</td>
          <td>{{$data->description}}</td>
          <td><img height="100px" width="100px" src="/foodimage/{{$data->image}}"></td>
          <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
          <td><a href="{{url('/updatemenu',$data->id)}}">Update</a></td> <!-- Moved the Update link here -->
        </tr>
        @endforeach
      </table>
      


    </div>







    </div>

</div>
    
  @include("admin.adminscript")


  </body>
</html>