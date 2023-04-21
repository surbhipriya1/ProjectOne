<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
  <div class="row">
  <div class="col-md-3"> </div>  
  <div class="col-md-6">  
  <h2>Reminder form</h2>
  <form action="{{ route('store') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
       @if ($errors->has('title'))
         <span class="invalid feedback"role="alert" style="color:red">
              <strong>{{ $errors->first('title') }}</strong>
          </span>
       @endif
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea type="text" class="form-control" id="description" placeholder="Enter Description" name="description"></textarea>
      @if ($errors->has('description'))
         <span class="invalid feedback"role="alert" style="color:red">
            <strong>{{ $errors->first('description') }}</strong>
          </span>
       @endif
    </div>
    <div class="form-group">
      <label for="date_time">Date_time:</label>
      <input type="datetime-local" class="form-control" id="date_time" placeholder="Enter DateTime" name="date_time">
     @if ($errors->has('date_time'))
       <span class="invalid feedback"role="alert" style="color:red">
          <strong>{{ $errors->first('date_time') }}</strong>
        </span>
     @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
   <div class="col-md-3"> </div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $('.btn-primary').click(function(){
    var title = $('#title').val();
    var description = $('#description').val();
    var datetime = $('#date_time').val();
    if(title == '')
    {
      alert('Please enter title.');
    }
    elseif(description == '')
    {
      alert('Please enter description.');
    }
    elseif(datetime == '')
    {
      alert('Please enter datetime.');
    }
  });
});
</script>
</body>
</html>
