<script>
// search
const searchFunction = () => {
    let filter = document.querySelector(".searchInput").value.toUpperCase();
    let tableData = document.querySelector("tbody");
    let tr = tableData.querySelectorAll("tr");
    let td;
    for (var i = 0; i < tr.length; i++) {
        td = tr[i].querySelectorAll("td")[1];
        if (td) {
            let textValue = td.textContent || td.innerHTML;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
                console.log(1);
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }

}
</script>


<section class="users transferHistory">
    <h2 class="title">Transaction History</h2>
    <div class="search-box">
        <input type="text" placeholder="search" class="searchInput" onkeyup="searchFunction()">
        <a href="#" class="search-btn"><i class="fas fa-search"></i></a>
    </div>
    <div class="table-container">

        <table class="table-user tableHistory">
            <thead>

                <tr>
                    <th>Id</th>
                    <th>Sender</th>
                    <th>Reciever</th>
                    <th>Amount</th>
                    <th>Date & time</th>
                </tr>
            </thead>
            <tbody>

                <?php
            include 'config.php';
            $sql = "select * from `transactionhistory`";
            $res = mysqli_query($con,$sql);
            if($res){
                while($row = mysqli_fetch_assoc($res)){
                    $id = $row['id'];
                    $sender = $row['sender'];
                    $receiver = $row['receiver'];
                    $amount = $row['amount'];
                    $time = $row['time'];
                    
                    echo '
                    <tr>
                    <td data-value="Id">'.$id.'</td>
                    <td data-value="Sender">'.$sender.'</td>
                    <td data-value="Receiver">'.$receiver.'</td>
                    <td data-value="Amount">'.$amount.'</td>
                    <td data-value="Time">'.$time.'</td>
                    
                    </tr>';
                    
                }
            }
            
            ?>
            </tbody>
        </table>
    </div>

</section>

<?php
    include 'footer.php';
?>