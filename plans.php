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

                        $sql = "Select * from plans Inner join membership
      On membership.id = plans.id";

                        $result = mysqli_query($conn, $sql) or die("Query Failed.");
                        if(mysqli_num_rows($result) > 0){
                          while($row = mysqli_fetch_assoc($result)) {
                      ?>
                  <table class="content-table">
                      <thead>
                          <th>PLANS</th>
                          <th>DETAILS</th>
                      </thead>
                      <tbody>
                       
                          <tr>
                              <td>NAME</td>
                              <td style="text-align: center;"><?php echo $row['plan_name']; ?></td>
                          </tr>
                          <tr>
                              <td>Description</td>
                              <td style="text-align: center;"><?php echo $row['plan_description']; ?></td>
                          </tr>
                          <tr>
                              <td>Total_Workout</td>
                              <td style="text-align: center;"><?php echo $row['plan_total_workouts']; ?></td>
                          </tr>
                          <tr>
                              <td>Workout_Description</td>
                              <td style="text-align: center;"><?php echo $row['plan_workouts_description']; ?></td>
                          </tr>
                          <tr>
                              <td>Avg_Duration</td>
                              <td style="text-align: center;"><?php echo $row['plan_avg_duration']; ?></td>
                          </tr>
                          <tr>
                              <td>Duration_Unit</td>
                              <td style="text-align: center;"><?php echo $row['duration_unit']; ?></td>
                          </tr>
                          <tr>
                              <td>Total_Weeks</td>
                              <td style="text-align: center;"><?php echo $row['plan_total_weeks']; ?></td>
                          </tr>
                          <tr>
                              <td>Images</td>
                              <td style="text-align: center;"><?php echo $row['plan_image']; ?></td>
                          </tr>
                          <tr>
                              <td>Level</td>
                              <td style="text-align: center;"><?php echo $row['plan_level']; ?></td>
                          </tr>
                          <tr>
                              <td>Status</td>
                              <td style="text-align: center;"><?php echo $row['status']; ?></td>
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


