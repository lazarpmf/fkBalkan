<?php
    require 'Akcije/connection.php';
    require 'partials/header.php';
    // Contact page = Admin Panel page
    //session_start(); already started with partials/header.php
    if($_SESSION['role']!=1){
        header("Location: index.php");  // redirect if not admin
    }else{

        // Pagination

        $sql = "SELECT * FROM questions";
        $query = mysqli_query($db,$sql);
        //$result = mysqli_fetch_all($query);

        // total rows in table
        $total_number_of_rows = mysqli_num_rows($query);
        // number of rows to show per page
        $rows_per_page = 10;
        // total pages
        $total_pages = ceil($total_number_of_rows/$rows_per_page);


        // determine current page number
        if(!isset($_GET['page'])){
            $current_page = 1;
        }else{
            $current_page = $_GET['page'];
        }
        // determine the SQL LIMIT starting number 
        $sql_limit_starting_number = ($current_page-1)*$rows_per_page;

            echo "
                    <div class='container-fluid'>
                        <div class='container'>
                            <h1>Pitanja posjetilaca sajta:</h1>
                            <table class='table table-striped mt-3'>
                                <tr class='row'>
                                    <th class='col-md-1'>#</th>
                                    <th class='col-md-1'>Ime</th>
                                    <th class='col-md-3'>Mejl</th>
                                    <th class='col-md-5'>Pitanje</th>
                                    <th class='col-md-2'>Datum</th>
                                </tr>";
                            $sql ="SELECT * FROM questions LIMIT " . $sql_limit_starting_number.",".$rows_per_page;
                            $query = mysqli_query($db,$sql);


                            if (mysqli_num_rows ( $query ) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($query)) {
                                  echo "<tr class='row'>
                                  <td class='col-md-1'>" . $row["id"]. "</td>
                                  <td class='col-md-1'>" . $row["name"]. "</td>
                                  <td class='col-md-3'>" . $row["email"]. "</td>
                                  <td class='col-md-5'>" . $row["question"]."</td>
                                  <td class='col-md-2'>".$row["date"]."</td>
                                  </tr>";
                                }
                              } else {
                                echo "0 results";
                              }


                    echo '</table>
                        </div>
                    </div>';

 
echo '<nav class="container" aria-label="Page navigation example">
<ul class="pagination">';
// <li class="page-item"><a class="page-link" href="contact.view.php?page=1">Pocetna</a></li>';
for($current_page=1;$current_page<=$total_pages;$current_page++){
    echo '<li class="page-item"><a class="page-link" href="contact.view.php?page='.$current_page.'">'.$current_page.'</a></li>';
}
echo '</ul>
</nav>';


        require 'partials/footer.php';
    }


?>