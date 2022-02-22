<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container d-flex w-25 p-3">
    <form method="POST" action="update" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Name:</label>
            <input type="text" class="form-control" value='{{$student_detail['name']}}' id="name" placeholder="Enter Name" name="name">
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Marks:</label>
            <input type="text" class="form-control" value='{{$student_detail['marks']}}' id="marks" placeholder="Enter Marks" name="marks">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
       
      </form>
    </div>
</body>
</html>