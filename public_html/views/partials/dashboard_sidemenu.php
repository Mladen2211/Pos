<nav class="d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
  

      <?php 

        $category = array("Pizze","Hladna Predjela", "Topla Predjela", 
                          "Tjestenina", "Jela od mesa", "Riba", "Sendvići",
                          "Salate", "Sokovi", "Prilozi");

        foreach ($category as $value) {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="switchCategory(this.innerHTML)">
                
                <?php echo $value; ?>
              </a>
            </li>

        <?php 
        }



       ?>

    </ul>

    <hr>
    
    <ul class="nav nav-pills flex-column" id="korpa">
      
      
    </ul>

    <button type="button" class="btn btn-success btn-custom" 
      onclick="kupovina()">Kupovina</button>

    
  </div>
</nav>
