<?php
    include 'nav.php';
    include 'config.php';
    if(isset($_POST['submit'])){
        $sender = $_GET['selectedUserDetails'];
        $receiver = $_POST['item'];
        $amount = $_POST['amount'];

        $sql = "select * from `bankdetails` where id = $sender";
        $res= mysqli_query($con,$sql);
        $fetchDataSender = mysqli_fetch_array($res);

        $sql = "select * from `bankdetails` where id = $receiver";
        $res= mysqli_query($con,$sql);
        $fetchDataReceiver = mysqli_fetch_array($res);

        //Checking the whether the input is negative or zero or insufficient

        if($amount < 0){
            echo '<script>alert("Negatives values cannot be Transferred")</script>';
        }else if($amount > $fetchDataSender['balance']){
            echo '<script>alert("Insufficient Balance")</script>';
        }else if($amount == 0){
            echo '<script>alert("Zero Value cannot be Transferred")</script>';
        }else{

            // Deducting the amount from sender account
            $updateBalance = $fetchDataSender['balance'] - $amount;
            $sql = "update `bankdetails` set balance = $updateBalance where id = $sender";
            mysqli_query($con,$sql);

            // Adding tbe amount to reciever account
            $updateBalance = $fetchDataReceiver['balance'] + $amount;
            $sql = "update `bankdetails` set balance = $updateBalance where id = $receiver";
            mysqli_query($con,$sql);

            
            
            $sql = $con->prepare("insert into transactionhistory(`sender`,`receiver`,`amount`,`time`) values(?,?,?,NOW())");
            $sql -> bind_param("ssi",$senderName,$receiverName,$amount);
            $senderName = $fetchDataSender['name'];
            $receiverName = $fetchDataReceiver['name'];

            $res = $sql->execute();
            // $res = mysqli_query($con,$sql);
            if($res){   
                echo "<script>alert('Transaction Successfull');
                window.location = 'dashboard.php?PageName=transaction' </script>";
            }else{
                echo "<script>alert('Transaction failed')</script>";
            }

            $updateBalance = 0;
            $amount = 0;

        }
        
        
        
    }
?>


<section class="transfer">
    <form class="send" method="post">
        <h1 class="title">Transaction</h1>
        <table class="table-user table-transfer">
            <thead>

                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Balance</th>
                </tr>

            </thead>
            <?php
                include 'config.php';
                if(isset($_GET['selectedUserDetails'])){
                    $id = $_GET['selectedUserDetails'];
                    $sql = "select * from `bankdetails` where id = $id";
                    $res = mysqli_query($con,$sql);
                    if($res)
                     {
                        $row = mysqli_fetch_assoc($res);
                        $name = $row['name'];
                        $email = $row['email'];
                        $balance = $row['balance'];

                        echo '
                        <tr>
                        <td data-value="Name">'.$name.'</td>
                        <td data-value="Email">'.$email.'</td>
                        <td data-value="Balance">'.$balance.'</td>
                        </tr>
                        ';
                    }

                }
            ?>


        </table>
        <div class="transfer-container">
            <div class="send-item">
                <h2>Transfer Fund To:</h2>
                <select name="item" required>

                    <option value="" disabled selected>Choose</option>
                    <?php
                     include 'config.php';
                        $sid = $_GET['selectedUserDetails'];
                        $sql = "select * from `bankdetails` where id != $sid";
                        $res = mysqli_query($con,$sql);

                        if($res){
                            while($row = mysqli_fetch_assoc($res)){
                                $id = $row['id'];
                                $name = $row['name'];
                                $balance = $row['balance'];

                                echo '
                                <option  value="'.$id.'">'.$name.' (Balance:'.$balance.')</option>                
                                ';   
                            }   
                        }  
                    ?>

                </select>
            </div>

            <div class="amount">
                <h2>Amount:</h2>
                <input type="number" name="amount" placeholder="Enter amount">
            </div>
        </div>

        <div class="transfer-button">
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
</section>


<footer class="transfer-footer">
    <h4>© 2021 | Made by Snehal Karki(For Spark Foundation)</h4>
</footer>

<script src="js/script.js"></script>