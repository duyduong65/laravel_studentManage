@extends("information")
@section("info")
    <form method="post" action="{{route("student.edit",$student->id)}}">
        @csrf
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" class="form-control" name="name" value="{{$student->name}}">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" value="{{$student->phone}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
