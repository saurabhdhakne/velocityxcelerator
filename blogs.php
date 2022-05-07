<?php

include './admin/check_con.php';

$sql = 'SELECT id, title, dop ,img  FROM blog ORDER BY id DESC ';

$result = mysqli_query($conn, $sql);

$length = 0;
?>
  <?php include 'header.php'; ?>
    <div class="container-fluid blog-head">
        <div class="row">
            <h1 class="text-center">
                <span class="text-1B4962 col-sm-12"> Velocity Xcelerator </span>
                <span class="text-E94D65 col-sm-12"> Blogs</span>
            </h1>

        </div>
    </div>
    
    <div class="container-fluid blogs">
        <div class="row">
            

            <?php if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    $id = $row['id'];
                    $img = $row['img'];
                    $title = $row['title'];
                    $dop = $row['dop'];
                    $length++;
                    ?>

                    <div class="col-md-4 p-3">
                        <div class="blog pt-2" onclick="window.location='blog?id=<?php echo $id; ?>' " role="button"  style="background: url(./admin/<?php echo $img; ?>) center;background:cover;">
                            <div class="dtime shadow-sm offset-7 col-5 d-flex align-items-center justify-content-center bg-white p-2 rounded">
                                <p class="d-flex justify-content-end m-0"> <?php echo $dop; ?> </p>
                            </div>
                            <div class="blogdata">
                            <h5 class="d-flex align-items-center text-light">
                                <hr class="col-1 mr-3 rounded"  />
                                &nbsp; BLOG
                            </h5>
                            <h2 class="text-light">
                                <?php echo $title; ?>
                            </h2>
                            <span onclick="window.location='blog?id=<?php echo $id; ?>' " role="button" class="text-E94D65">
                                Read more >
                            </span>
                            </div>
                        </div>
                    </div>
                        
            <?php
                }
            }else{
                echo '<div class="col-md-12 bg-light shadow-lg p-3 pt-5 pb-5 text-center other-blogs"> <h1> PREPARING THE DATA <br/> DROP BY AGAIn SOON </h1> </div> ';
              } 
             ?>

        </div>
    </div>
   
    
  <?php include 'footer.php'; ?>



