<?php require('layout/header.php'); ?>
<?php require('layout/left-sidebar-long.php'); ?>
<?php require('layout/topnav.php'); ?>
<?php require('layout/left-sidebar-short.php'); ?>


<?php

require('../backends/connection-pdo.php');

$sql = 'SELECT id,name FROM categories';

$query  = $pdoconn->prepare($sql);
$query->execute();
$arr_all = $query->fetchAll(PDO::FETCH_ASSOC);



?>


<div class="section white-text" style="background: #B35458;">

	<div class="section">
		<h3>Add Food Item</h3>
	</div>


    <div class="section center" style="padding: 40px;">

        <form action="../backends/admin/food-add.php" method="post">

            <?php

            if (isset($_SESSION['msg'])) {
                echo '<div class="row" style="background: red; color: white;">
                <div class="col s12">
                    <h6>'.$_SESSION['msg'].'</h6>
                    </div>
                </div>';
                unset($_SESSION['msg']);
            }

            ?>

            <div class="row">
                <div class="col s6" style="">
                            <div class="input-field">
                            <input id="name" name="name" type="text" class="validate" style="color: white; width: 70%">
                            <label for="name" style="color: white;"><b>Food Name :</b></label>
                            </div>
                </div>
                <div class="col s6" style="">
                            <div class="input-field" style="color: white !important; width: 90%">
						    <select name='category'>
						      <?php 

						      		foreach ($arr_all as $key) {
						      			echo '<option value="'.$key['id'].'">'.$key['name'].'</option>';
						      		}
						      ?>
						    </select>
						    <label style="color: white;">Categories</label>
						  </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">

                <div class="input-field">
                <input id="desc" name="desc" type="text" class="validate" style="color: white; width: 70%">
                <label for="desc" style="color: white;"><b>Description :</b></label>
                </div>
                
                </div>
            
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="section right" style="padding: 15px 10px;">
                        <a href="food-list.php" class="waves-effect waves-light btn">Dismiss</a>
                    </div>
                    <div class="section right" style="padding: 15px 20px;">
                        <button type="submit" class="waves-effect waves-light btn">Add New</button>
                    </div>
                </div>
            </div>

        </form>


    </div>

</div>

<?php require('layout/about-modal.php'); ?>
<?php require('layout/footer.php'); ?>