<?php
/**
 * checks if the session is already started.
 * If exists then it assigns all the variables
 */
session_start();
if(!$_SESSION['UserId']){
    header("Location: ../view/login.php");
    exit();
}

$userName = $_SESSION['UserName'];
$accessLevelId = $_SESSION['AccessLevelId'];
$branchId = $_SESSION['BranchId'];

// db connection.
$dbConnection = mysqli_connect('localhost', 'root', '', 'feedback');

//fetch accesslevel name
$fetchAccessLevelSql = "SELECT * FROM msaccesslevel WHERE AccessLevelId = $accessLevelId";

$objAccessLevel = $dbConnection->query($fetchAccessLevelSql);
if($objAccessLevel){
    $objAccessLevelData= $objAccessLevel->fetch_assoc();
}

//fetch branch name
$fetchBranchSql = "SELECT * FROM msbranch WHERE BranchId = $branchId";

$objMsBranch = $dbConnection->query($fetchBranchSql);
if($objAccessLevel) {
    $objMsBranchData = $objMsBranch->fetch_assoc();
}

?>
    <h1><?php echo "Role   : ".$objAccessLevelData['AccessLevelDisplayName'];?> </h1>
    <h3><?php echo "Name   : ".$userName;?></h3>
    <h3><?php echo "Branch : ".$objMsBranchData['BranchDisplayName'];?></h3>

    <form action="../Controller/FeedbackController.php" method="post">
        Staff : <select name='StaffId' style='width: 238px'>
            <?php
            $dbConnection = mysqli_connect('localhost', 'root', '', 'feedback');
            //sql to fetch all active branches.
            $fetchStaffSql = "SELECT * FROM appusers WHERE AccessLevel = 2 and BranchId = $branchId and Active = 1";
            $objAppusers = $dbConnection->query($fetchStaffSql);

            if($objAppusers->num_rows > 0)
            {
                while ($staff = $objAppusers->fetch_assoc()){
                    echo "<option value=".$staff['UserId'].">".$staff['FirstName']." ".$staff['LastName']."</option>";
                }
            }
            ?>
        </select><br><br>
    <textarea name="feedback" rows="4" cols="50">Please enter your feedback here...
    </textarea><br><br>
        <input type="submit" value="Submit"><br/><br>
    </form>