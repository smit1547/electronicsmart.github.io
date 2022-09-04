<?php
session_start();
include 'db_conn.php';
include 'functions.php';
$pid=$_GET['pid'];

?>
    <?=template_header()?>
    <div class="container py-5">
        <div class="row py-5">
            <form action="ordersent.php" class="col-md-9 m-auto" method="POST">
                <div class="row">
                <input type="hidden" id="pid" name="pid" value="<?=$_GET['pid']?>" >
                <input type="hidden" id="pid" name="username" value="<?=$_SESSION['username']?>" >
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Name</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Address</label>
                    <textarea class="form-control mt-1" id="address" name="address" placeholder="Address" rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Buy Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


        <?=template_footer()?>