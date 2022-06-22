<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

     <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand"><font size="5"><b>UNIT OF ACTIVITY</b></font>  </a>
 </div>
</nav>
<div >

<body>
<div class="container bg-dark text-white">
    <?php
        $perolehan=null;
        $residu=null;
        $pemakaian = null;
        $kapasitas_max=null;
        if (isset($_GET['perolehan'])) {
            $perolehan=$_GET['perolehan'];
            $residu=$_GET['residu'];
            $pemakaian=$_GET['pemakaian'];
            $kapasitas_max=$_GET['kapasitas_max'];
            $hasil=0;
                    $hasil = ($perolehan - $residu) * ($pemakaian / $kapasitas_max);
        }
    ?>
    <div class="rows">
        <form action="unit_of_activity.php" method="get">
          
            <div class="form-group">
                <label><font size="3">Harga Perolehan:</font></label>
                <input type="text" name="perolehan" class="form-control" value="<?php echo $perolehan; ?>" required>
            </div>
            <div class="form-group">
                <label><font size="3">Nilai Residu:</font></label>
                <input type="text" name="residu" class="form-control" value="<?php echo $residu; ?>"  required>
            </div>
                <label><font size="3">Pemakaian:</font></label>
                <input type="text" name="pemakaian" class="form-control" value="<?php echo $pemakaian; ?>"  required>
            </div>
            <div class="form-group">
                <label> <font size="3">Kapasitas Maksimal:</font></label>
                <input type="text" name="kapasitas_max" class="form-control" value="<?php echo $kapasitas_max; ?>"  required>
            </div>
           
            <button type="button" class="btn btn-danger" onclick="location.href='index.php'">Back</button>
            <button type="submit" class="btn btn-success">Hitung</button>
        </form>
        <br><br>
        <?php
            if (isset($_GET['perolehan'])) {
                $hasil = "Hasil depresiasi menggunakan metode Unit of Activity adalah " .number_format($hasil,0,',','.');
                echo "<h4>$hasil</h4>" ;
            }
        ?>
    </div>
</div>
<div id="footer">
        <p><center> Tugas PSE &copy; <?php echo date("Y")?> - L200190165 | L200190187</p></center>
    </div>

</body>
</html>