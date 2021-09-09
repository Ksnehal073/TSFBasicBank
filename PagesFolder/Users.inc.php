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
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";


            }
        }
    }

}
</script>
<section class="users">
    <div class="search-box">
        <input type="text" placeholder="search" class="searchInput" onkeyup="searchFunction()">
        <a href="#" class="search-btn"><i class="fas fa-search"></i></a>
    </div>
    <table class="table-user user-title">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Balance</th>
                <th>Operation</th>
            </tr>
        </thead>

        <tbody>
            <?php
            include 'config.php';
            $sql = "select * from `bankdetails`";
            $res = mysqli_query($con,$sql);
            if($res){
                while($row = mysqli_fetch_assoc($res)){
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $balance = $row['balance'];
                    
                    echo '
                    <tr>
                    <td data-value="Id">'.$id.'</td>
                    <td data-value="Name">'.$name.'</td>
                    <td data-value="Email">'.$email.'</td>
                    <td data-value="Balance">'.$balance.'</td>
                    <td><a href="transfer.php?selectedUserDetails='.$id.'">Transfer</a></td>
                    </tr>';
                    
                }
            }
            
            ?>

        </tbody>

    </table>

</section>

<?php
include 'footer.php';
?>