@extends("showListStudentForm")
@section("content")
    <a href="{{route("student.formCreate")}}" class="btn btn-primary">ADD</a>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $key=>$value)
            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$value['name']}}</td>
                <td>{{$value['phone']}}</td>
                <td>
                    <a href="{{route("student.delete",$value['id'])}}" class="btn btn-primary">Delete</a>
                    <a href="{{route("student.edit",$value['id'])}}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
