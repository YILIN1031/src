<?php
    $title = "Exercise 7";
    include 'header.php';
?>
<h1>
    Here is the Exercise 7.
</h1>
<body>
    <i><b>Input Your Information Below:<b></i>
    <form name="form1" method="post" action="process.php">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
                </div>
                <div class="col">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required>
                </div>
                <div class="col">
                    <label for="groupid">Group ID:</label>
                    <select class="form-control" id="groupid" name="groupid">
                        <option value="BBCAP19">BBCAP19</option>
                        <option value="BBCAP20">BBCAP20</option>
                        <option value="BBCAP21">BBCAP21</option>
                        <option value="BBCAP22">BBCAP22</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</body>
<?php
    include 'footer.php';
?>