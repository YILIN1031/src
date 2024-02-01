<!-- Footer -->
    </div>
  </div>
  <div class="row">
<footer style="background-color: rgb(134, 206, 203); color: white;">

  <div class="footer-copyright text-center py-3">
    © Yilin - Individual Exercises of Web Programming.

    <br>
  
    <?php
    // Get the full path to the current script
    $currentFilePath = $_SERVER['SCRIPT_FILENAME'];

    // Get the last modification time of the file
    $lastModifiedTime = filemtime($currentFilePath);

    // Format the modification time for display
    $formattedTime = date("F d Y H:i:s", $lastModifiedTime);

    // Display the last modification time in the footer
    echo "Last modified: $formattedTime<br>";
    ?>
  </div>

</footer></div>
</div>

<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
    </html>