<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Calculator</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Laravel Calculator</h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('calculate') }}">
                        @csrf
                        <div class="form-group">
                            <label for="number1">Number 1:</label>
                            <input type="number" class="form-control" name="number1" id="number1" required>
                        </div>
                        <div class="form-group">
                            <label for="number2">Number 2:</label>
                            <input type="number" class="form-control" name="number2" id="number2" required>
                        </div>
                        <div class="form-group">
                            <label for="operator">Operator:</label>
                            <select class="form-control" name="operator" id="operator" required>
                                <option value="+">Addition (+)</option>
                                <option value="-">Subtraction (-)</option>
                                <option value="*">Multiplication (*)</option>
                                <option value="/">Division (/)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Calculate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>