<?php include "header.php"; 
   
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Details</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-details.php">add Details</a>
              </div>
              <div class="col-md-12">
                 <?php
                        include "config.php";

                        // $id = $_GET['id'];

                        $sql = "SELECT * FROM membership";


                        $result = mysqli_query($conn, $sql) or die("Query Failed.");
                        if(mysqli_num_rows($result) > 0){
                          while($row = mysqli_fetch_assoc($result)) {
                      ?>
                  <table class="content-table">
                      <thead>
                          <th>Duration</th>
                          <th>Price</th>
                          <th>Classes</th>
                          <th>Discount_Percentage</th>
                          <th>Offer_name</th>
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                           <tr>
                              <td class='id'><?php echo $row['membership_duration']; ?></td>
                              <td><?php echo $row['membership_price']; ?></td>
                              <td><?php echo $row['membership_classes']; ?></td>
                              <td><?php echo $row['membership_discount_percentage']; ?>%</td>
                              <td><?php echo $row['membership_offer_name']; ?></td>
                              <td><?php echo $row['membership_status']; ?></td>
                              <td class='edit'><a href='update-post.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-post.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          
                      </tbody>
                  </table>
                  <?php
                          }
                        }else{
                          echo "<h2>No Record Found.</h2>";
                        }

                        ?>
                  <!-- <ul class='pagination admin-pagination'>
                      <li class="active"><a>1</a></li>
                      <li><a>2</a></li>
                      <li><a>3</a></li>
                  </ul> -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
