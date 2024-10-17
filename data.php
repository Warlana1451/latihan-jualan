<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .text-center{
            text-align: center;
        }
    </style>
</head>
<body>
    <form>
        <?php
        $produk=$_POST['produk'] ;
        $deskrisi=$_post['deskripsi'] ;
        $Bank=$_post['Bank'] ;
        $AccountHolder=$_post['AccountHolder'] ;
        $Transaction=$_post['Transaction'] ;
        $no_tlp=$_post['no_tlp'] ;
        $email=$_POST['email'] ;
        $harga=$_POST['harga'] ;
        $total-($harga*$Transaction) ;
        ?>
        <hr>
        <nav>
            <div class="text-center">
                <ul>
                    <h3>Home</tr>
                    <tr>|</tr>
                    <tr>Register</tr>
                    <tr>|</tr>
                    <tr>Policy</tr>
                    <tr>|</tr>
                    <tr>About</tr>
                </ul>
                <?php ?>
                <table>
    <div class="text-center"> 
  <label for="produk">Nama Barang :</label>  
  <input type="text>" name="produk" id="produk" value="<?php echo $produk?>" required>
  <br>
  <br>
  <label for="textarea">deskripsi  :</label>
  <textarea name="deskripsi" id="deskripsi" cols="10" rows="4">Nama :
Model :        Kondisi :
  </textarea>
  <br>
  <br>
  <label for="harga">Harga</label>
  <input type="number" name="harga" id="Harga" value="<?php echo $total?>" readonly>
  <br>
  <br>
  <label for="Account Number">Nomor Akun :</label>
  <input type="number>" name="Account Number" id="Nomor Akun" value="<?php echo $deskrisi?>" required>
  <br>
  <br>
  <label for="Bank">BANK :</label>
  <input type="text>" list="edulevel"required>
   <datalist name="Bank" id="edulevel" value="<?php echo $Bank?>">
    <option value="BRI"></option>
    <option value="BNI"></option>
    <option value="BCA"></option>
    <option value="Mandiri"></option>
    <option value="Syariah"></option>
   </datalist>
   <br>
   <br>
   <label for="Account Holder">Pemilik Akkun :</label>
   <input type="text>" name="Account Holder" id="Pemilik Akkun" value="<?php echo $AccountHolder?>"required>
   <br>
   <br>
   <label for="Transaction">Transaksi</label>
   <input type="number" list="Nomor" required>
   <datalist name="Transaction"id="Nomor" value="<?php echo $Transaction?>">
    <option value="1"></option>
    <option value="2"></option>
    <option value="3"></option>
    <option value="4"></option>
    <option value="5"></option>
    <option value="6"></option>
    <option value="7"></option>
    <option value="8"></option>
    <option value="+10"></option>
   </datalist>
   <br><p>#jika ada kerusaakan pada produk kami harap konfirmasi</p>
   <input type="checkbox" name="bukti[]" id="bukti1" value="kirim ke NO.tlp"/>
   <label for="bukti1">kirim ke NO.tlp</label><br>
   <input type="checkbox" name="bukti[]" id="bukti2" value="kirim ke Email"/>
   <label for="bukti1">kirim ke Email</label><br>
   <br>
   <label for="method">kirim ke NO.tlp</label>
   <input type="number>" name="no_tlp" id="kirim ke NO.tlp" value="<?php echo $no_tlp?>" checked><br>
   <br>
   <label for="method">kirim ke Email</label>
   <input type="text" name="email" id="kirim ke Email" value="<?php echo $email?>"checked><br>
   <br>
   <br>
   <input type="submit" value="Ayo gass Pesan">
    </div>
  </table>  
            </div>
        </nav>
    </form>    
</body>
</html>