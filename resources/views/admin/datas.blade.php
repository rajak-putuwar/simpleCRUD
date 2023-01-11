@extends('admin.admin')
@section('admin_container')
    <div class="container w-75 ">
        <table class="table table-sm">

            <thead class="text-center">
                <tr>
                    <th>S.No</th>
                    <th>Notice</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody class="text-center">
                @foreach ($notices as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->description }}</td>
                        <td>
                            <a href="/admin/{{ $data->id }}/edit">
                                <button type="submit" class="btn btn-success">edit</button>
                            </a>
                            <a href="/admin/{{ $data->id }}/delete">
                                <button type="submit" class="btn btn-danger">delete</button>
                            </a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
