<?php
    include ('nav.php');
?>

<div class="dashboard">

    <div class="side-bar">
        <ul>
            <li><a href="dashboard.php?PageName=Users"><i class="fas fa-user-friends"></i><br><span>View
                        Users</span></a></li>
            <li><a href="dashboard.php?PageName=transaction"><i class="fas fa-pager"></i><br><span>My
                        Transactions</span></a></li>
            <li><a href="dashboard.php?PageName=accountSummary"><i class="far fa-file"></i><br><span>Account
                        Summary</span></a></li>
        </ul>
    </div>

    <div class="main-bank-content">
        <?php


    if(!empty($_GET['PageName'])){
        $PageDir = 'PagesFolder';
        $PageFolder = scandir($PageDir,0);
        unset($PageFolder[0],$PageFolder[1]);
        $PageName = $_GET['PageName'];

            if(in_array($PageName.'.inc.php',$PageFolder)){
                include($PageDir.'/'.$PageName.'.inc.php');
                
            }else{
                echo "You are lost";
            }
        }

        ?>


    </div>



    </body>

    </html>