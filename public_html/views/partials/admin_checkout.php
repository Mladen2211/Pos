<?php 

    //SELECT Broj_racuna, Naziv_konobara, ukupnaZarada FROM racuni GROUP BY Broj_racuna

    define('SERVER_NAME', 'localhost');
    define('USERNAME', 'Dinko');
    define('PASSWORD', 'dinko123');
    define('DB_NAME', 'pos_sustav');

    $conn = mysqli_connect(SERVER_NAME, USERNAME, PASSWORD, DB_NAME);

    if(!$conn){
        die("Could not connect");
    }

    $sql = "SELECT Broj_racuna, Naziv_konobara, ukupnaZarada FROM racuni GROUP BY Broj_racuna";

    $result = mysqli_query($conn, $sql);

    ?>

    <div class="row">
        <div class="col"></div>
        <div class="col">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Broj Racuna</th>
                  <th scope="col">Konobar</th>
                  <th scope="col">Prodani artikal</th>
                  <th scope="col">Ukupna Zarada</th>
                </tr>
              </thead>
              <tbody>

    <?php

    while ($row = mysqli_fetch_assoc($result)) {

    ?>
            
        
                    
                    <tr>
                      <th scope="row"><?php echo $row["Broj_racuna"] ?></th>
                      <td><?php echo $row["Naziv_konobara"] ?></td>
                      <td>Fali artikal</td>
                      <td><?php echo $row["ukupnaZarada"] ?></td>
                    </tr>
                    
                    
                    
                  

    <?php
    }

    ?>
    
            </tbody>
        </table> 
    </div>
    <div class="col"></div>
</div>
    
    <?php
    mysqli_close($conn);

 ?>



