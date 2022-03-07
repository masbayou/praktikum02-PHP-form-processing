<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h2>Belanja Online</h2>
<form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Masukan nama anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="produk_2" class="custom-control-label">Mesin cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="kirim" value="total belanja" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>
<div class="col-4">
        <div class="container-fluid bg-primary text-white p-2 border border-primary">
            Daftar Harga
        </div>
        <div class="container-fluid p-2 border border-info">
            TV : 3.000.000
        </div>
        <div class="container-fluid p-2 border border-info">
            Kulkas: 3.000.000
        </div>
        <div class="container-fluid p-2 border border-info">
            Mesin Cuci : 3.000.000
        </div>
        <div class="container-fluid bg-primary text-white p-2 border border-primary">
            Harga dapat berubah setiap saat
        </div>
    </div>

    <?php
   
    $nama = $_POST['customer'];
    $produk = $_POST['produk'];
    $jmlh = $_POST['jumlah'];
    if ($produk == $jmlh) {
        $hasil = 3000000 * $jmlh;
    }else {
        $hasil = 3000000 * $jmlh;
    }
    
    echo '</br>Nama Customer :' .$nama;
    echo '</br>Produk Pilihan :' .$produk;
    echo '</br>Jumlah :' .$jmlh;
    echo '</br>Total Belanja :' .$hasil;
    
    ?>
    
</body>
</html>