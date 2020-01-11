<html>
<body>
<div>
    <h1>Register Form</h1>

    <form action="../controller/SignUpController.php" method="post" name="registerUser">
        First Name : <input type="text" name="firstName" required size="32"><br><br>
        Last Name : <input type="text" name="lastName" size="32" required><br><br>
        Email : <input type="email" name="email" id="email" size="32" required><br><br>
        Mobile : <input type="number" name="mobileNumber" id="mobileNumber" size="32" required><br><br>
        Branch :
        <select name='branchId' id='branchId' style='width: 238px'>
            <?php
            $dbConnection = mysqli_connect('localhost', 'root', '', 'feedback');
            //sql to fetch all active branches.
            $fetchAllBranchSql = "SELECT * FROM msbranch WHERE Active = 1";
            $objMsBranch = $dbConnection->query($fetchAllBranchSql);

            if($objMsBranch->num_rows > 0)
            {
                while ($branch = $objMsBranch->fetch_assoc()){
                    echo "<option value=".$branch['BranchId'].">".$branch['BranchDisplayName']."</option>";
                }
            }
            ?>
        </select><br><br>
        USN/Staff Id : <input type="text" name="usn" id="usn" size="32" required><br><br>
        Password : <input type="password" name="password" id="password" size="32" required><br><br>
        Confirm Password : <input type="password" name="confirmPassword" id="confirmPassword" size="32" required><br><br>
        <input type="submit" value="SIGNUP" ><br><br>
        <a href="login.php">Login</a>
    </form>
</div>

<script>

    var confirmPassword = document.getElementById("confirmPassword");
    var password = document.getElementById("password");

    // When the user clicks outside of the password field, hide the message box
    confirmPassword.onblur = function() {
        if(confirmPassword.value !== password.value){
            alert("Passwords are not matching")
        }
    }
</script>
</body>
</html>