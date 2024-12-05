<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie Admin</title>
    <link rel="stylesheet" href="../css/admin-style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
        #btn4{
            background-color: #ffa70e;
        }
    </style>
</head>
<body>
    
    <!-- SideBar -->
    <div class="sidebar" id="sidebar">
        <div class="container">
            <h2>Foodie Admin</h2>
            <ul>
                 <li><a href="food.php" id="btn2">Food Table</a></li>
                <li><a href="users-page.php" id="btn3">Admin Users</a></li>
                <li><a href="subscribed-users.php" id="btn4">Subscribed Users</a></li>
                <li><a href="login-page.html" id="btn5">LogOut</a></li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
     <div class="main-content" id="main-content">
        <button class="toggle-btn" id="toggle-btn">☰</button>
         <header class="header">
            <div class="container">
                <h2>Subscribed Screen</h2>
            </div>
         </header>
         <table class="food-table">
            <thead>
                <tr>
                    <th>Client Email</th>
                     <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <td>Chicken Burger</td>
                    <td>$5.99</td>
                    <td>
                        <div class="actions-container">
                            <a href="#" title="Delete"><ion-icon name="trash-outline"></ion-icon></a>
                            <a href="#" title="Edit"><ion-icon name="create-outline"></ion-icon></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>HamBurger</td>
                    <td>$4.99</td>
                    <td>
                        <div class="actions-container">
                            <a href="#" title="Delete"><ion-icon name="trash-outline"></ion-icon></a>
                            <a href="#" title="Edit"><ion-icon name="create-outline"></ion-icon></a>
                        </div>
                    </td>
                </tr> -->
<?php
        include '../inc/connection.php';

        $sql = 'select * from subscriptions';
        $IdColumn = 'db_subId';
        $result = mysqli_query($con,$sql);
        $redirectPage = 'subscribed-users';

        while($row = mysqli_fetch_assoc($result)){

            echo'
                <tr>
                    <td>'.$row["db_subEmail"].'</td>
                      <td>    
                      <div class="actions-container">
                         <a href="../delete.php?ID='.$row['db_subId'].'&table=subscriptions&IdColumn='.$IdColumn.'&page='.$redirectPage.'" title="Delete"><ion-icon name="trash-outline"></ion-icon></a> 
                     </div>
                     </td>
                </tr>        
               ';

        }

?>
            </tbody>
        </table>
         
     </div>
     <script src="../js/script.js"></script>
</body>
</html>