<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Char Forma</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Enter Character form</h2>
  <form class="form-horizontal" action="/store" method="post">
    {!! csrf_field() !!} {{-- let it be apsauga nuo spammeriu--}}
    <div class="form-group @if($errors->has('name')) has-error @endif"> 
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
        @if ($errors->has('name'))
          <i class="has-error ">{{ $errors->first('name') }}</i></br>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="race">Race:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="race" placeholder="Enter Race" name="race">
        @if ($errors->has('race'))
          <i>{{ $errors->first('race') }}</i></br>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwrlevel">Power Lvl:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwrlevel" placeholder="Enter PowerLevel" name="power_level">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="description">Description:</label>
      <div class="col-sm-10">
        <textarea type="text" class="form-control" id="description"  name="description" placeholder="Enter Description"></textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>
