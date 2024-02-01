<?php
    $title = "Exercise 3"; 
    include 'header.php';
?>
<h1>
    Here is the Exercise 3.
</h1>
<body>

    <br>

    <h3><i>Sub Task 1: User Input, Form</i></h3>

    <div class="container mt-5">
        <form method="post">
            <div class="mb-3">
                <label for="firstname" class="form-label">Firstname:</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Lastname:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Continue">
            </div>
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        echo "<h3>Hello $firstname $lastname, You are welcome to my site!</h3><br><br>";
    }
    ?>
    
    <h3><i>Sub Task 2: Table</i></h3>

    <?php
        $g1 = 5; 
        $g2 = 4; 
        $g3 = 5;
    ?>
    <div class="container mt-3">
        <table class="table table-bordered table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">S.n.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Grade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John</td>
                    <td><?php echo "$g1"?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Alice</td>
                    <td><?php echo "$g2"?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bob</td>
                    <td><?php echo "$g3"?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <h3><i>Sub Task 3: String Variables</i></h3>

    <?php
    // Initialize the string variables
    $str1 = "Hello";
    $str2 = "World";

    // Concatenate the strings with a space in between
    $combinedString = $str1 . " " . $str2;

    // Calculate the length of the concatenated string
    $lengthOfString = strlen($combinedString);

    // Print the concatenated string
    echo "First string: $str1.<br>";
    echo "Second string: $str2.<br>";
    echo "Combined String: $combinedString.<br>";

    // Print the length of the concatenated string
    echo "Length of String: $lengthOfString.\n";
    ?>

    <h3><i>Sub Task 4: Number Addition</i></h3>

    <?php
    // Store the numbers in variables
    $number1 = 298;
    $number2 = 234;
    $number3 = 46;
    echo "Number1: $number1, Number2: $number2, Number3: $number3.<br>";

    // Add the numbers
    $sum = $number1 + $number2 + $number3;
    echo "The sum of the numbers is: $sum.<br>";
    ?>

    <h3><i>Sub Task 5: Browser Detection</i></h3>

    <?php
    // Get the User-Agent string from the client browser
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    // Initialize a variable to hold the browser name
    $browser = 'Unknown Browser';

    // Detect the browser name based on common substrings
    if (strpos($userAgent, 'Firefox') !== false) {
        $browser = 'Mozilla Firefox';
    } elseif (strpos($userAgent, 'MSIE') !== false || strpos($userAgent, 'Trident') !== false) {
        $browser = 'Internet Explorer';
    } elseif (strpos($userAgent, 'Edge') !== false) {
        $browser = 'Microsoft Edge';
    } elseif (strpos($userAgent, 'Chrome') !== false) {
        // Chrome's User-Agent string also includes the substring 'Safari', so we check for Chrome first.
        $browser = 'Google Chrome';
    } elseif (strpos($userAgent, 'Safari') !== false) {
        // Check for Safari after checking for Chrome
        $browser = 'Safari';
    } elseif (strpos($userAgent, 'Opera') !== false || strpos($userAgent, 'OPR') !== false) {
        $browser = 'Opera';
    }

    // Output the detected browser
    echo "You are using: " . $browser . "\n";
    ?>

</body>
<?php
    include 'footer.php';
?>