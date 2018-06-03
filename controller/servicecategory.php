<?php ob_start(); ?>
<!--Banner: Included -->
<?php include 'inc/header.php'; ?>

<!--Banner: Included -->
<?php include 'inc/banner.php'; ?>

<!-- Menu: Top Menu included -->
<?php include 'inc/topmenu.php'; ?>


<section class="contentbody">
  <div class="row">
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>  
      
      <!-- SideBar: sidebar included-->
      <?php include 'inc/sidebar.php'; ?>

      <!-- Content: Page Content included-->
      <div class="off-canvas-content" style="min-height:900px; backgrond:white; padding:10px;">
          <button type="button" class="small secondary button" data-toggle="offCanvas" style="background:black;">Menu</button>  
         
            <h3>Add Category</h3><hr/> 

<?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
                $category = $fm->validation($_POST['category']);

                $category =  mysqli_real_escape_string($db->link,$category);

                if(empty($category)){
                    echo "<span style='color:red;'>Field must not be empty !</span>";
                }else{
                    $check = "SELECT * FROM tb_category WHERE name = '$category' limit 1";
                    $dcheck = $db->select($check);
                    if($dcheck !=false){
                        echo "<span style='color:red;'>Already Exist !</span>";
                    }else{
                        $query = "INSERT INTO tb_category(name) VALUES('$category')";                      
                        $catinsert = $db->insert($query);
                        if($catinsert){
                            echo "<span style='color:green;'>Save Successfully. !</span><br/>";                            
                        }else{
                            echo "<span style='color:red;'>Unsuccessful to save. !</span>";
                        }
                    }               
                }
            }
?>


              <form style="width:80%; margin:0px auto;" action="servicecategory.php" method="post"> 
                <div class="form-group">
                  <label for="exampleInputEmail1">Category</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Doctor's Category" name="category" required>
                </div>

                <br/><br/>    
                <button type="submit" class=" button">Save Category</button>
              </form>


      </div>

    </div>
  </div>
</div>
</section>

      <!-- Content: Page Content included-->
      <?php include 'inc/footer.php'; ?>



</div>

    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
    <script>
       //$("#modalContainer").load("_form-modal-test.html", function() {
        $(document).foundation();
         //});
    </script> 

  </body>
</html>
