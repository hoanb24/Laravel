<head> 
    <link rel="stylesheet" href="style.css">
</head>
<form action="" method="post">
    @csrf 
    <div class='form-group'>
        <input type="number" class="form-control" placeholder="Số A" name="soA">
    </div>
    <div class='form-group'>
        <input type="number" class="form-control" placeholder="Số B" name="soB">
    </div>
    <button type="submit" class="btb btn--primary">Tính</button>
    <div>
        <input type="number" class="form-control" placeholder="Kết quả" disabled="" value="<?php if(isset($tong)) echo $tong; ?>">
    </div>
</form>