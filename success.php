<?php
    $title = 'Success';  
    require_once 'connect.php';

    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];

        $isSuccess = $cred->INSERT($fname, $lname, $dob, $email,$contact);
        
        if($isSuccess){
            echo '<h1 align = "center">You Have Been Registered</h1>';
        }
        else{
            include '<h1 align = "center">Ther was Error in Processing</h1>';
        }
    }
?>
    <!-- This prints out values that were passed to the action page using method="post" -->
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['fname'] . ' ' . $_POST['lname'];  ?>
            </h5>
            <p class="card-text">
                Date Of Birth: <?php echo $_POST['dob'];  ?>
            </p>
            <p class="card-text">
                Email Adress: <?php echo $_POST['email'];  ?>
            </p>
            <p class="card-text">
                Contact Number: <?php echo $_POST['phone'];  ?>
            </p>
    
        </div>
    </div>