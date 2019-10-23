@extends("information")
@section("info")
    <form method="post" action="{{route("student.create")}}">
        @csrf
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Phone">
        </div>
        <button type="submit" class="btn btn-primary">ADD</button>
    </form>
@endsection
