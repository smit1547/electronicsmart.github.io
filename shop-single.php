<?php
session_start();
include 'db_conn.php';

include 'functions.php';
$id=$_GET['id'];
$sql = "SELECT * FROM products WHERE id=?";
$stmt = $conn->prepare($sql); 
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result(); // get the mysqli result

?>
    <?=template_header()?>
        <!-- Open Content -->
        <section class="bg-light">
            <div class="container pb-5">

            <?php              
 
   // output data of each row
   while($row = $result->fetch_assoc()) {
   

?>

                <div class="row">
                    <div class="col-lg-5 mt-5">
                        <div class="card mb-3">
                            <img class="card-img img-fluid" src="images/<?=$row['img']?>" alt="Card image cap" id="product-detail">
                        </div>

                    </div>
                    <!-- col end -->
                    <div class="col-lg-7 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="h2"><?=$row['name']?></h1>
                                <p class="h3 py-2">₹<?=$row['price']?></p>
                               
                                

                                <h6>Specification:</h6>
                                <p><?=$row['specification']?>
                                
                                </p>
                              
                                <form action="buynow.php" method="GET">
                                    <input type="hidden" name="pid" value="<?=$row['id']?>">

                                    <div class="row pb-3">
                                        <div class="col d-grid">
                                            <button type="submit" class="btn btn-success btn-lg">Buy now</button>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            
                <?php
   }
 
 $conn->close();
 ?>
            </div>
        </section>
        <!-- Close Content -->


        <?=template_footer()?>