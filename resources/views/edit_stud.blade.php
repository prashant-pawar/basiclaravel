<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <form action="{{route('student.update',$student->id) }}" method="post" class="vertical">
      @csrf
        @method('PUT')


    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control"  placeholder="Enter email " size="10" name="name"
      value="{{$student->name}}">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control"  placeholder="Enter email " size="10" name="email"
        value="{{$student->email}}">
      </div>
      <div class="form-group">
        <label for="email">Mobile no:</label>
        <input type="text" class="form-control"  placeholder="Enter email " size="10" name="contact"
        value="{{$student->contact}}">
      </div>

    <div class="form-group">
      <label for="pwd">address:</label>
      <input type="text" class="form-control"  placeholder="Enter password" name="address"
      value="{{$student->address}}">
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
