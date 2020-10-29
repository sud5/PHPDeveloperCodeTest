<?php
require_once('config.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Shop</title>
        <link rel="stylesheet" type="text/css" href="css/custom.css" />
        <meta name="description" content="Shop">
        <meta name="author" content="Arden University">
    </head>
    <body>
        <h1>Shop</h1>

        <div>
            <h2>Opening times</h2>

            <?php
            include './BaseController.php';
            include './Model.php';
            include './View.php';
            include './ShopController.php';
            include './OpeningTimesModel.php';
            include './OpeningTimesView.php';
            include './ProductsModel.php';
            include './ProductsView.php';
            include './ProductsController.php';

            $controller = new Arden\ShopController();

            $openingTimesView = new Arden\OpeningTimesView($controller->getModelData());

            echo $openingTimesView->render();
            
            echo '<div>
                <h2>Top Products</h2>
            </div>';
            
            $Productscontroller = new ProductsController();
            
            $ProductsView = new Arden\ProductsView($Productscontroller->getModelData());

            echo $ProductsView->render();
            ?>

            <form action="<?php echo "$CFG->root/contact.php"; ?>">
                <input class = "button" type="submit" value="Contact US" />
            </form>
    </body>
</html>
