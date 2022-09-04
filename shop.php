<?php
session_start();
include 'db_conn.php';

include 'functions.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>
<?=template_header()?>





    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

      
            <div class="col-lg-9">
                
                <div class="row">

<?php              
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
   

?>

                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0" style="height:350px">
                                <img class="card-img rounded-0 img-fluid" src="images/<?=$row['img']?>">
                            </div>
                            <div class="card-body" style="height:150px">
                                <a href="shop-single.php?id=<?=$row['id']?>" class="h3 text-decoration-none"><?=$row['name']?></a>
                                
                                <p class="text mb-0">₹<?=$row['price']?></p>
                            </div>
                        </div>
                    </div>
                      <?php
   }
 } else {
   echo "0 results";
 }
 $conn->close();
 ?>
                </div>
                
            </div>

        </div>
    </div>
    <!-- End Content -->

 

 
<?=template_footer()?>