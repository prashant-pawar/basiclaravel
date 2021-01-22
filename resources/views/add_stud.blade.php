
@extends('layouts.master')
@section('title','Demo')
@section('content')
<div class="container">

  <form action="{{ route('student.store') }}" method="post" class="vertical">
      @csrf

    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control"  placeholder="Enter email " size="10" name="name">
      @error('name')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>


    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control"  placeholder="Enter email " size="10" name="email">
      </div>
      <div class="form-group">
        <label for="email">Mobile no:</label>
        <input type="text" class="form-control"  placeholder="Enter email " size="10" name="contact">
      </div>

    <div class="form-group">
      <label for="pwd">address:</label>
      <input type="text" class="form-control"  placeholder="Enter password" name="address">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
@endsection
