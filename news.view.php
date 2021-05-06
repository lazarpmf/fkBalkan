<?php
    require 'partials/header.php';
?>
    <br>
    <div class="row">
        <!-- <div class="col-md-4 ml-auto">
        <form action="" method="GET" class="form-inline ml-5">
            <input class="form-control w-50 mt-5" type="text" name="search">
            <button class="btn btn-success mt-5" name="searchBtn" type="submit">Pretraži</button>
        </form>
        </div> -->
        <div class="col-md-9">
            <h1 class="text-center mt-5">Vijesti FK Balkan</h1>
        </div>
        <div class="col-md-3">
            <?php
                if(isset($_SESSION['id']) && isset($_SESSION['role']) && $_SESSION['role']==1){
                    echo "<a href='add_new.view.php' class='btn btn-info mt-5 ml-2'>Dodati novu vijest</a>";
                }
            ?>
        </div>
    </div>
    <hr>

    <?php
        require 'Akcije/connection.php';
        //session_start();  already started with header.php

        $sql = "SELECT * FROM news ORDER BY id DESC";
        $query = mysqli_query($db,$sql);
        $num_of_rows = mysqli_num_rows($query);
        //$result = mysqli_fetch_all($query);
        
        if($num_of_rows==0){
            echo "<div class='jumbotron container'>";
                echo "<h3 class='text-center my-auto'>Trenutno nema novosti.</h3>";
                if(isset($_SESSION['id']) && isset($_SESSION['role']) && $_SESSION['role']==1){
                    echo "<button class='btn btn-info btn-block mt-5'>Dodati novu vijest</button>";
                }
            echo "</div>";
        }else{
            // echo '<pre>';
            //     var_dump($result);
            // echo '</pre>';

            // pagination 

            // total number of rows in table
            $sql = "SELECT * FROM news";
            $query = mysqli_query($db,$sql);
            $total_num_of_rows = mysqli_num_rows($query);
            
            // determine number of results per page
            $results_per_page = 6;

            // count total number of pages
            $num_of_pages = ceil($total_num_of_rows/$results_per_page);

            // define current page
            if(!isset($_GET['page'])){
                $current_page = 1;
            }else{
                $current_page = $_GET['page'];
            }
            
            // determine sql limit starting row
            $sql_limit_start_row = ($current_page-1)*$results_per_page;

            // loop through db

            echo "<div class='container'><br>";
            echo "<div class='row'>";
            $sql = "SELECT * FROM news LIMIT ".$sql_limit_start_row.",".$results_per_page;
            $query = mysqli_query($db,$sql);
            
            while($row = mysqli_fetch_assoc($query)) {
                echo "<div class='col-md-4 mt-2'>";
                echo "<div class='card' style='cursor:pointer; width: 18rem;'>";
                echo "<div class='card-body'>";
                  echo "<h5 class='card-title'>".$row['title']."</h5>";
                  echo "<h6 class='card-subtitle mb-2 text-muted'>"."autor: ".$row['name']."</h6>";
                  echo "<br>";
                  echo "<p class='card-text'>".$row['description']."</p>";
                  echo "<br>";
                  echo $row['id'];
                  echo "<a href="."single.new.view.php?id=".$row['id']." class='card-link'>Više detalja...</a>";
                  echo "<hr>";
                  echo "<small>".$row['date']."</small>";
                echo "</div>";
              echo "</div>";
              echo "</div>";
              }

              echo "</div>";
              echo "</div>";
            // pagination links

            echo '<nav class="container mt-3" aria-label="Page navigation example">
            <ul class="pagination">';
            for($current_page=1;$current_page<=$num_of_pages;$current_page++){
                echo "<li class='page-item'><a class='page-link' href='news.view.php?page=".$current_page."'>".$current_page."</a></li>";
            }
            echo '</ul>
            </nav>';
        }



    ?>




<?php
    require 'partials/footer.php';
?>