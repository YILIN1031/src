<?php
    $title = "Exercise 4";
    include 'header.php';
?>
<h1>
    Here is the Exercise 4.
</h1>
<body>

    <h3><i>Sub Task 1: If-Else</i></h3>

    <form method="post">
    Name: <input type="text" name="name" required>
    Age: <input type="number" name="age" required>
    <input type="submit" name="submit" value="Check">
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect value of input field
        $name = htmlspecialchars($_POST["name"]);
        $age = htmlspecialchars($_POST["age"]);

        if (empty($name) || empty($age)) 
        {
            echo "Name and age are required";
        } 
        else 
        {
            if ($age >= 18) 
            {
                echo "Hello, $name. You are eligible to vote.";
            } 
            else {
                echo "Sorry, $name. You are not eligible to vote.";
            }
        }
    }
    ?>

    <h3><i>Sub Task 2: Switch Case</i></h3>

    <?php
    // Get the current month name
    $currentMonth = date('F');

    // Use a switch case to check the month and print the response
    switch ($currentMonth) {
        case 'August':
            echo "It's August, so it's still holiday.";
            break;
        default:
            echo "Not August, this is $currentMonth so I don't have any holidays";
            break;
    }
    ?>
    
    <h3><i>Sub Task 3: For-Loop</i></h3>

    <!-- Form for user input -->
    <form method="post">
        Enter a number: <input type="number" name="number">
        <input type="submit" value="Generate Multiplication Table">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the number from form input
        $n = $_POST["number"];
        echo "<h4>Multiplication Table for: $n</h4>";
        echo "<table>";

        // Generate multiplication table
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>$n x $i = </td><td>" . ($n * $i) . "</td></tr>";
        }

        echo "</table>";
    }
    ?>

    <h3><i>Sub Task 4: While-Loop</i></h3>

    <form method="post">
    Enter a number: <input type="number" name="number" min="1">
    <input type="submit" value="Print Numbers">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the number from form input
        $n = $_POST["number"];
        $i = 1; // Start counter

        echo "<h4>Printing numbers from 1 to $n</h4>";
        echo "<p>";
        // Use while loop to print numbers
        while ($i <= $n) {
            echo $i;
            if ($i < $n) {
                echo ", "; // Add comma between numbers except the last one
            }
            $i++;
        }
        echo "</p>";
    }
    ?>

    <h3><i>Sub Task 5: Foreach Loop</i></h3>

    <?php
    // Define the array
    $myArray = array("HTML", "CSS", "PHP", "JavaScript");

    // Iterate through the array and print each element
    echo "<h4>List of Technologies:</h4>";
    echo "<ul>";
    foreach ($myArray as $element) {
        echo "<li>" . $element . "</li>";
    }
    echo "</ul>";
    ?>

</body>
<?php
    include 'footer.php';
?>