<div class="sampleFormBox"> <!-- registration form -->
    <form action="../controller/processReg.php" method="post">
        <fieldset>
            <legend>Login Details</legend>
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <label for="pass">Password:</label> 
            <input type="text" name="pass" required>
            <label for="role">AccessRole</label>
            <input type="text" name="role" required>
        </fieldset>
        <fieldset>
            <legend>Customer Details</legend>
            <label for="fname">First Name:</label>
            <input type="text" name="fname" required>
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" required>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <input type="submit">
        </fieldset>
    </form>
</div>