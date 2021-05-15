
<div class='cookie-banner' style='display: none'>
<p>
    By using our website, you agree to our 
    <a href='Privacy.php'>cookie policy</a>
  </p>
<button class='close'>&times;</button>
</div>
<footer class="border-top footer text-muted bg-dark">
        <div class="container">
            &copy; 2021 - Best of Amazon - <a href="Privacy.php">Privacy</a>
        </div>
        
    </footer>
    <script>
        if (if ($_COOKIE['Seen'] == 'false')) {
            $(‘.cookie-banner’).delay(2000).fadeIn();            
        };
        $(‘.close’).click(function() {
            $value = 'true';
            $expire = time()+60*60*24;
            setcookie('Seen', $value, $expire);
        $(‘.cookie-banner’).fadeOut();
        })
    </script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="lib/jquery/dist/jquery.min.js"></script>
    <script src="lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/site.js"></script>
</body>
</html>