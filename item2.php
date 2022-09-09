<?php

session_start();

require_once ('CreateDb.php');
require_once ('component.php');
$database = new CreateDb("dbinception", "producttb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>


<?php
require_once('header.php');
?><div style="margin-left:2.5%;" class="wrap">
<section class="content">
  <div class="row">
    <div class="col-md-4">
      <br><img style="width:79%;" class=artikel-img src="image/item1.jpeg" alt="">
    </div>
    <div class="col-md-3">
   	<h2 style="margin-top: 8%; padding:-1%;">
	TONGUE
	</h2>
  <strike style=" margin-bottom:2%; display:inline-block; color:red;">Rp.130.000</strike>
  <p style="display:inline-block;" class="harga">Rp.89.000</p>
<br><a class="order" href="https://api.whatsapp.com/send?phone=6282117707360&text=Produk : LADYROSE
%0AJumlah : 
%0A %0A
Nama : 
%0A
Alamat :
%0A
No.hp :">Order now</a><br><br>
  <P style="color:gray; margin-top:10px;">- spesification :<br>
Cotton combed 24s<br>
Digital printing<br>
<br>
- Size Chart :<br>
S : P 70cm L 45cm<br>
M : P 74cm L 48cm<br>
L : P 76cm L 50cm<br>
XL : P 78cm L 54cm</P>

</div>
</div>
</section>

</div>
<?php
require_once('footer.php');
?>