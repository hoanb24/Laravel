<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    .flex{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
</style>
    <title>Area Of Shape</title>
</head>
<body>
    <h2><center>Area Of Shape</center></h2>
    <div class="container flex">
    <div style="width:404">
    <h2><center>Area Of Triangle</center></h2>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="a">Enter value of (A)</label>
            <input type="text" class="form-control" id="a" name="a">
        </div>
        <div class="form-group">
            <label for="b">Enter value of (H)</label>
            <input type="text" class="form-control" id="b" name="h">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <h2>The result: {{$areaTriangle}} </h2>
    </div>

    <div style="width:404">
    <h2><center>Area Of Quadrangle</center></h2>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="c">Enter value an edge</label>
            <input type="text" class="form-control" id="c" name="e1">
        </div>
        <div class="form-group">
            <label for="d">Enter value an edge</label>
            <input
             type="text" class="form-control" id="d" name="e2">
        </div>
        <div class="form-group">
            <label for="e">Enter value an edge</label>
            <input type="text" class="form-control" id="e" name="e3">
        </div>
        <div class="form-group">
            <label for="f">Enter value an edge</label>
            <input type="text" class="form-control" id="f" name="e4">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <h2>The result: {{$areaQuadrangle}} </h2>
    </div>
    </div>
</body>
</html>