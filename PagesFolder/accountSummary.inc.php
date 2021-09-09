<section class="summary">
    <h1 class="title">Account Summary</h1>
    <ul>
        <?php
            include 'config.php';
            // $sql = "select * from `transactionhistory`";
            $sql = "select * from  `transactionhistory` order by id DESC LIMIT 1";

            $res = mysqli_query($con,$sql);
            if($res){
                while($row = mysqli_fetch_assoc($res)){
                    $sender = $row['sender'];
                    $receiver = $row['receiver'];
                    $amount = $row['amount'];
                    $time = $row['time'];
                    
                    echo '
                    <li>Sender :'.$sender.'</li>
                    <li>Dated : '.$time.'</li>
                    <li>Sent to : '.$receiver.'</li>
                    <li>Last Transaction(debit) <br> <span>Rs.'.$amount.'</span></li>
                    ';
                }
            }
            
            ?>
    </ul>

</section>

<?php
    include 'footer.php';
?>