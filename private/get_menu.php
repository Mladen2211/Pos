<?php

    define('SERVER_NAME', 'localhost');
    define('USERNAME', 'Dinko');
    define('PASSWORD', 'dinko123');
    define('DB_NAME', 'pos_sustav');

    $conn = mysqli_connect(SERVER_NAME, USERNAME, PASSWORD, DB_NAME);

    if(!$conn){
        die("Could not connect to DB");
    }

    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["q"])){

        $q = $_GET["q"];

        $sql = "SELECT * FROM artikli ";
        $sql .= "WHERE Kategorija = '$q'";

        $result = mysqli_query($conn, $sql);

        $rows = mysqli_num_rows($result);

        if($rows > 0){

            while ($row = mysqli_fetch_assoc($result)) {

            ?>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" width="200px" height="400px" src="<?php echo $row["Slika"] ?>">
                <div class="card-body">
                  <p class="card-text"><?php echo $row["Naziv"] ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary" type="button" onclick="addToBuyout(this)">Buy</button>
                    <span><?php echo $row["Cijena"] ?> KM</span>
                  </div>
                </div>
              </div>
            </div>

        <?php 

            }
        }

    }else{
        $sql = "SELECT * FROM artikli";

        $result = mysqli_query($conn, $sql);

        $rows = mysqli_num_rows($result);

        if($rows > 0){

            while ($row = mysqli_fetch_assoc($result)) {
                
                ?>

                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" width="200px" height="400px" src="<?php echo $row["Slika"] ?>">
                    <div class="card-body">
                      <p class="card-text"><?php echo $row["Naziv"] ?></p>
                      <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary" type="button" onclick="addToBuyout(this)">Buy</button>
                        <span><?php echo $row["Cijena"] ?> KM</span>
                      </div>
                    </div>
                  </div>
                </div>
        <?php
    }

    


       }


   }

   mysqli_close($conn); // Closing Connection






?>
