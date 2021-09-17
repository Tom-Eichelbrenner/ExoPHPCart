<?php
require_once "Bike.php";
require_once "StorageBike.php";


$s = new StorageBike();
$data = $s->load();
for ($i = 0; $i < count($data); $i++) {
    $bikes[$i] = new Bike($data[$i][0], $data[$i][1]);
    $bikes[$i]->setColor($data[$i][2]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PANIER</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
<div class="container">
    <div>
        <!-- Start row -->
        <div class="row">
            <!-- Start col -->
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">Cart</h5>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-xl-8">
                                <div>
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Color</th>
                                                    <th scope="col" class="text-right">Price</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <?php
                                                $i = 0;
                                                foreach ($bikes as $bike){
                                                    $i++;
                                                    echo (
                                                            '<tr>
                                                    <th scope="row">'.$i.'</th>
                                                    <td>' . $bike->getName() . '</td>
                                                    <td>
                                                            <div class="form-group mb-0">
                                                                <input type="number" class="form-control" value="1">
                                                            </div>
                                                        </td>
                                                    <td>' . $bike->getColor() . '</td>
                                                    <td class="text-right">' . $bike->getPrice() . '€ </td>
                                                </tr>'
                                                    );
                                                }
                                                ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="cart-footer text-right">
                                        <a href="page-checkout.html" class="btn btn-success my-1">Proceed to Checkout<i
                                                    class="ri-arrow-right-line ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
</div>
</body>
</html>

