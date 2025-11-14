<?php
// Enable full error display
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sammy Love in the PHP building</title>
</head>
<body>
    <h1>I LOVE CODING PERSONALLY</h1>

    <section>
        <footer>
            <p>
                //copyright at current date
                &copy; <?php echo date("Y"); ?> Sammy Project
            </p>
        </footer>
    </section>
    
    //prints date
    <?php
    echo "Today's date is " . date("l d_m_Y");
    ?>
</body>
</html>
