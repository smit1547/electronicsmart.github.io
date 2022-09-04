<?php
session_start();
include 'db_conn.php';

include 'functions.php';
$username=$_SESSION['username'];
$sql = "SELECT orders.id,orders.pid,orders.name1,orders.username,orders.address,products.id,products.name,products.price,products.img from orders inner join products on orders.pid=products.id where username=?";
$stmt = $conn->prepare($sql); 
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
?>
<?=template_header()?>

<center><div style="margin-top:20px;"><h3><b>My Orders</b></h3></div></center>



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
                            <div class="card-body" style="height:auto">
                            <b> Products name :</b> <?=$row['name']?>
                                
                                <p class="text mb-0"><b>Price :</b> ₹<?=$row['price']?></p>
                                <p class="text mb-0"><b>address :</b><?=$row['address']?></p>
                                <p class="text mb-0"><b>buyer name :</b> <?=$row['name1']?></p>
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