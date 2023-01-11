<x-app-layout>
<div class="container bg-white  rounded" >
    <form action="/admin/{{$notice->id}}/edit" method="POST" class="p-3 ">
        @csrf
        <h3 class="text-primary">Update Notice </h3>
        <div class="form-group ">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title for the notice" value="{{$notice->title}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Enter Description for the notice" value="{{$notice->description}}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
</x-app-layout>
