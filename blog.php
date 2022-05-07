<?php

include './admin/check_con.php';

$sql = 'SELECT * FROM blog WHERE id =' . $_GET['id'];

$blog = mysqli_query($conn, $sql);

$sql   = 'SELECT id, title, dop FROM blog WHERE id !='.$_GET['id'].'  ORDER BY id DESC LIMIT 10';

$blogs = mysqli_query($conn, $sql);

$lengths = 0;

?>

<?php include 'header.php'; ?>
<style>
  body{
    background:lavender;
  }
  .blog-content img{
        width: 100% !important;
        height:auto !important;
    }
</style>

    <div class="container mt-5 mb-5 pt-0 ">
        <div class="row main2 pt-0">
          <?php if ($blog->num_rows > 0) {
              while ($row = $blog->fetch_assoc()) {

                  $id = $row['id'];
                  $img = $row['img'];
                  $title = $row['title'];
                  $content = $row['content'];
                  $date = $row['dop'];
                  $lengths++;
                  ?>

                <div class="col-md-8 mb-5" data-aos="fade-up">
                    <div class="card col-md-10 offset-md-1">
                        <div class="card-body blog-content">
                          <p class="card-text">
                            <?php echo $content; ?>  
                          </p>
                          <p class="text-secondary d-flex justify-content-end mt-5 ">
                              <?php echo $date; ?>
                          </p>
                            <hr>
                          <div class="col-md-12 text-center h3 mt-5">
                            FOUND THIS USEFUL ? SHARE WITH
                          </div>
                          <div class="col-md-12 d-flex justify-content-center mb-2 text-dark">
                                <a class="socialbtn text-E94D65 h2" href="whatsapp://send?text=<?php echo $title; ?>%20https://velocityxcelerator.com/blog?id=<?php echo $id; ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> 
                                &nbsp;&nbsp; <a class="socialbtn text-E94D65 h2" href="https://www.facebook.com/sharer/sharer.php?u=https://velocityxcelerator.com/blog.php?id=<?php echo $id; ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> 
                                &nbsp;&nbsp; <a class="socialbtn text-E94D65 h2" onclick='myFunction("<?php echo $id; ?>");'> <i class="fa fa-copy" aria-hidden="true"></i></a>
                                <!-- &nbsp;&nbsp; <a class="socialbtn text-E94D65 h2 mob-only" id="share-alt"  onclick='shareLink("<?php echo $id; ?>", "<?php echo $title; ?>");'> <i class="fa fa-share-alt" aria-hidden="true"></i></a> -->

                          </div>
                        </div>
                    </div>
                </div>

            <?php
              }
          }else{
            echo '<div class="col-md-8 bg-white text-center mb-5 shadow-lg p-3 other-blogs"> <h1> I THINK YOUR LOST, Check Other BLOGS. </h1> </div> ';
          } 
          ?>

          <div class="col-md-4 p-3 other-blogs pt-0">
                      <div class="col-12 card mb-3">
                        <div class="card-body">
                          <h5 class="">
                            <strong> Recent Posts </strong>
                          </h5>
                         
                        </div>
                      </div>
              <?php if ($blogs->num_rows > 0) {
                  while ($row = $blogs->fetch_assoc()) {

                      $id = $row['id'];
                      $title = $row['title'];
                      $dop = $row['dop'];
                    
                      ?>

                    <div class="col-12 card mb-3">
                      <div class="card-body" role="button" onclick="window.location='blog?id=<?php echo $id ?>'">
                        <h5 class="">
                          <?php echo $title ?>
                        </h5>
                        <p class="d-flex justify-content-end">
                          <?php echo $dop; ?>
                        </p>
                      </div>
                    </div>

              <?php
                          }
                      } ?>
          </div>
           
        </div>
    </div>

    <script>
      function myFunction(str) {
        var copyText = 'https://velocityxcelerator/blog?id='+str;
        if(navigator.clipboard){
          navigator.clipboard.writeText(copyText);
          alert("Copied the link: " + copyText);
        }else{
          alert("Copy the text: " + copyText);
        }
      }

      // var isMobile;
      // window.mobileCheck = function() {
      //   isMobile = false;
      //       (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
      //       return isMobile;
      // };


      // function shareLink(id,title) {
      //       url = 'https://adyfi.in/blogPost/'+id;
      //       const isMobile = true;
      //       if(isMobile){
      //             navigator.share({
      //                 title:title,
      //                 url:url
      //             }).then( ()=> {
      //                 console.log("Thanks for sharing!");
      //             }).catch(console.log(console.error))
      //         }else{      
      //           console.log('Not Supported')
      //         }
      //     }
    </script>

<?php include 'footer.php'; ?>
