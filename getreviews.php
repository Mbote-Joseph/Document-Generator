
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database= "documentGenerator";

// Create connection
$connect = new mysqli($servername, $username, $password, $database);


//get all reviews
function get_all_data($db_connection){
    $sql = "SELECT * FROM reviews";
  $result= $db_connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        
           
            # code...
            echo ' <div class="col-lg-4">
            <div class="single-testimonial">
              <div
                class="testimonial-review d-flex align-items-center justify-content-between"
              >
                <div class="quota">
                  <i class="lni-quotation"></i>
                </div>
                <div class="star">
                  <ul>
                    <li><i class="lni-star-filled"></i></li>
                    <li><i class="lni-star-filled"></i></li>
                    <li><i class="lni-star-filled"></i></li>
                    <li><i class="lni-star-filled"></i></li>
                    <li><i class="lni-star-filled"></i></li>
                  </ul>
                </div>
              </div>
              <div class="testimonial-text">
                <p class="text">'
                .$row['review'].
                '</p>
              </div>
              <div class="testimonial-author d-flex align-items-center">
                <div class="author-image">
                  <img
                    class="shape"
                    src="photos/undraw_dev_focus_b9xo.svg"
                    alt="shape"
                    height="50px";
                  />
                 
                </div>
                <div class="author-content media-body">
                  <h6 class="holder-name">'.$row['firstname'].' '.$row['lastname'].'</h6>
                  <p class="text">'.$row['email'].'</p>
                  <p class="text">'.$row['Registrationdate'].'</p>
                </div>
              </div>
            </div>
            <!-- single testimonial -->
          </div>';
        }

    } else { 
     echo "0 results";
    }
    
}



  $connect ->close();
?>