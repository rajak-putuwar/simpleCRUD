<x-app-layout>

@foreach ($notices as $data)

    <div class="card m-4 p-2" >
        <div class="card-body">
          <h5 class="card-title">{{$data->title}}</h5>
          <p class="card-text">{{$data->description}}</p>
        </div>
      </div>
@endforeach
</x-app-layout>
