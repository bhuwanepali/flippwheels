<?php
    include "dbconn.php";
    if(isset($_GET['del'])){
        $id=$_GET['del'];
        mysqli_query($con,"DELETE FROM products WHERE id = '$id'");
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="device-width, initial-scale=1.0">

    <!--Fontawesome for icon-->
    <script src="https://kit.fontawesome.com/8ae2387575.js" crossorigin="anonymous"></script>

    <!--Google Font links-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <!--CSS styling-->
    <link rel="stylesheet" href="adminstyle/style.css">
    <title>Admin- manage product</title>
</head>

<body>
    <header>
        <div class="logo">
            <h1 class="logo-text"><span>FLIPP</span>WHEELS</h1>
        </div>
        <i class="fas fa-bars menu-toggle"></i>
        <ul class="nav">
            <li>
                <a href="#">
                    <i class="fas fa-user"></i> Admin
                    <i class="fas fa-chevron-down"></i>
                </a>
                <ul>
                    <li><a href="#" class="logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>

    <!--Admin Page wrapper-->
    <div class="admin-wrapper">

        <!--Left side bar-->
        <div class="left-sidebar">
            <ul>
                <li><a href="index.php">Manage Products</a></li>
                <li><a href="manage_buyer.php">Manage Buyers</a></li>
                <li><a href="manage_seller.php">Manage Sellers</a></li>
            </ul>
        </div>

        <!--Admin Content-->
        <div class="admin-content">
            <div class="content">
                <h2 class="page-title">Manage Product</h2>
                <table>
                    <thead>
                        <th>ID</th>
                        <th>REGISTRATION NUMBER</th>
                        <th>TITLE</th>
                        <th>SELLER</th>
                        <th>CATEGORY</th>
                        <th>PRICE</th>
                        <th colspan="2">ACTION</th>
                    </thead>
                    <tbody>
                    <?php
                        include "dbconn.php";
                        $sql = mysqli_query($con, "SELECT * FROM `products`");

                        if(mysqli_num_rows($sql)>0){
                            while($data = mysqli_fetch_assoc($sql)){?>
                                <tr>
                                <td><?php echo $data['id'];?></td>
                                <td><?php echo $data['registration_number'];?></td>
                                <td><?php echo $data['name'];?></td>
                                <td><?php echo $data['id'];?></td>
                                <td><?php echo $data['fuel'];?></td>
                                <td><?php echo $data['price'];?></td>
                                <td><a href="edit_product.php?p_id=<?php echo $data["id"];?>" class="delete">Edit</a></td>
                                <td><a href="index.php?del=<?php echo $data["id"];?>" onclick="return confirm('Are you sure?');" class="delete">delete</a></td>
                            </tr>
                            <?php
                                }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>