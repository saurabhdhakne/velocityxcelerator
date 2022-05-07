<?php
    
    include './admin/check_con.php';

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];

        $sql = "INSERT INTO pagarbook(`fname`,`email`,`mobile`,`city`) VALUES ('$fname','$email','$mobile','$city')";

        if (mysqli_query($conn, $sql)) {
            ?>
                    <html> <script> alert('Message sent Successfully!!!'); window.location= '/' </script></html>
            <?php 

         } else {
                echo 'Error: ' .$sql .'<br>' .mysqli_error($conn); 
                ?>

                    <html> <script> alert('Someehing is wrong! Try Again later'); window.location= '/' </script></html>

        <?php
                }
?>
