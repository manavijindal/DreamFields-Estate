<!DOCTYPE html>
    <html>
        <head>
            <meta charset=“utf-8”/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="Submission Confirmation">
            <title>DREAM FIELDS ESTATE</title>
            <link rel="stylesheet" href="Stylesheet.css">
        </head>
        <body>
            <header>
            <h1>Dream Fields Estate - Submitted</h1>
            </header>
            <nav>
                <ul>
                    <li><a href="index.php">About us</a></li>
                    <li><a href="residential.html">Residential</a></li>
                    <li><a href="commercial.html">Commercial</a></li>
                    <li><a href="contact_us.html">Contact us</a></li>
                </ul>
            </nav>

            <h2>Thank You, <?php echo $_GET['first_name'] . ' ' . $_GET['last_name']; ?>!</h2>
            <p>Your feedback has been submitted successfully.</p>

            <footer>
                © 2024 Manavi Jindal
            </footer>
        </body>
    </html>