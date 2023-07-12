<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>FORM</title>
</head>
<body>
<form>
<form action="{{ route('submit_form') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
    </div>
    <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" class="form-control" id="age" name="age" placeholder="Your age">
    </div>
    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" class="form-control" id="date" name="date" placeholder="Your date">
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your phone">
    </div>
    <div class="form-group">
        <label for="web">Web:</label>
        <input type="url" class="form-control" id="web" name="web" placeholder="Your web">
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <textarea class="form-control" id="address" name="address" placeholder="Your address"></textarea>
    </div>
    <div>
        @include ('block.error')
    </div>
    <button type="submit" class="btn btn-primary">OK</button>
    <div class="display-infor">
        @if(isset($user))
            <p>Name: {{$user['name']}}</p>
            <p>Age: {{$user['age']}}</p>
            <p>Date: {{$user['date']}}</p>
            <p>Phone: {{$user['phone']}}</p>
            <p>Web: {{$user['web']}}</p>
            <p>Address: {{$user['address']}}</p>
        @endif
    </div>
</form>

</body>
</html>