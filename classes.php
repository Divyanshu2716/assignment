<?php

    include 'header.php';

?>


<div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Details</h1>
              </div>
              <div class="col-md-2">
                  <!-- <a class="add-new" href="add-user.php">add user</a> -->
              </div>
              <div class="col-md-12">
                <?php
                        include "config.php";

                        // $id = $_GET['id'];

                        $sql = "Select * from classes Inner join membership
      On membership.id = classes.id";
                        

                        $result = mysqli_query($conn, $sql) or die("Query Failed.");
                        if(mysqli_num_rows($result) > 0){
                          while($row = mysqli_fetch_assoc($result)) {
                      ?>
                  <table class="content-table">
                      <thead>
                          <th>CLASSES</th>
                          <th>DETAILS</th>
                      </thead>
                      <tbody>
                        
                          <tr>
                              <td>Price</td>
                              <td style="text-align: center;"><?php echo $row['class_price']; ?></td>
                          </tr>
                          <tr>
                              <td>Name</td>
                              <td style="text-align: center;"><?php echo $row['class_name']; ?></td>
                          </tr>
                          <tr>
                              <td>Short_Discription</td>
                              <td style="text-align: center;"><?php echo $row['class_short_description']; ?></td>
                          </tr>
                          <tr>
                              <td>Date</td>
                              <td style="text-align: center;"><?php echo $row['class_date']; ?></td>
                          </tr>
                          <tr>
                              <td>Duration</td>
                              <td style="text-align: center;"><?php echo $row['class_duration']; ?></td>
                          </tr>
                          <tr>
                              <td>Member_limit</td>
                              <td style="text-align: center;"><?php echo $row['class_member_limit']; ?></td>
                          </tr>
                          <tr>
                              <td>Level</td>
                              <td style="text-align: center;"><?php echo $row['class_level']; ?></td>
                          </tr>
                          <tr>
                              <td>Description</td>
                              <td style="text-align: center;"><?php echo $row['class_description']; ?></td>
                          </tr>
                          <tr>
                              <td>Benefits</td>
                              <td style="text-align: center;"><?php echo $row['class_benefits']; ?></td>
                          </tr>
                          <tr>
                              <td>Cover</td>
                              <td style="text-align: center;"><?php echo $row['class_cover']; ?></td>
                          </tr>
                          <tr>
                              <td>Trainer</td>
                              <td style="text-align: center;"><?php echo $row['class_trainer']; ?></td>
                          </tr>
                          <tr>
                              <td>Status</td>
                              <td style="text-align: center;"><?php echo $row['class_status']; ?></td>
                          </tr>

                       
                      </tbody>
                  </table>
                  <?php
                          }
                        }else{
                          echo "<h2>No Record Found.</h2>";
                        }

                        ?>
              </div>
          </div>
      </div>
  </div>

<?php

    include 'footer.php';

?>


