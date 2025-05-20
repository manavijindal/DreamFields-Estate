<?php
require_once "queryDb.php";
$customers = getCustomers();

if (isset($_GET['search_term'])) {
    $searchTerm = $_GET['search_term'];
} else {
    $searchTerm = null;
}
$customers = getCustomers($searchTerm);
?>



<!DOCTYPE html>
    <html>
        <head>
            <meta charset=“utf-8”/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="information about us">
            <title>DREAM FIELDS ESTATE</title>
            <link rel="Stylesheet" href="Stylesheet.css">
        </head>
        <body>
            <header>
                <h1>Dream Fields Estate - Home</h1>
            </header>
            <nav>
                <ul>
                    <li><a href="index.php">About us</a></li>
                    <li><a href="residential.html">Residential</a></li>
                    <li><a href="commercial.html">Commercial</a></li>
                    <li><a href="contact_us.html">Contact us</a></li>
                </ul>
            </nav>

            <h2>Welcome to Dream Fields Estate</h2>
            
            <div id = "Page">
                <nav id="properties">
                    <div><img src="images/apartment.jpg" alt="apartment"/><p>Apartment</p></div>
                    <div><img src="images/houses.jpg" alt="houses"/><p>Houses</p></div>
                    <div><img src="images/acreage.jpg" alt="acreage"/><p>Acreage</p></div>
                    <div><img src="images/hotel.jpg" alt="hotel"/><p>Commercial</p></div>
                </nav>
            </div>

            <h2>About Us</h2>
            <p>We are a leading real estate agency dedicated to helping you find your dream property. Explore our collection of residential homes, which includes anything from apartments and villas to duplexes and acreage estates.</p>
            <p>Every property is carefully chosen to accommodate a range of lifestyles and tastes, guaranteeing that each person finds their ideal place to call home. Explore our array of premium commercial properties as well, which includes retail stores, office buildings, warehouses, and hotels.</p>
            <p>All of these properties are well situated to provide profitable investment options and exciting business prospects. Through our dedication to provide customised services and knowledgeable direction, we want to assist you in realising your ambitions of owning a home or business.</p>

            <h2>Recent Customers:</h2>
        
            <form action="index.php" method="GET">
                <label for="search_term">Search Customers:</label>
                <input type="text" id="search_term" name="search_term" placeholder="Enter name, address, or phone">
                <input type="submit" value="Search">
            </form>
                <table>
                    <thead>
                        <tr>
                            <th>Customer Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (count($customers) > 0){
                        foreach($customers as $customer) {
                            echo "<tr>";
                            echo "<td>{$customer['CUSTID']}</td>";
                            echo "<td>{$customer['FIRSTNAME']}</td>";
                            echo "<td>{$customer['LASTNAME']}</td>";
                            echo "<td>{$customer['ADDRESS']}</td>";
                            echo "<td>{$customer['PHONE']}</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'> No customers found.</td></tr>";
                    }
                    ?>
                    </tbody>
                </table>
            
            <footer>
                © 2024 Manavi Jindal
            </footer>
        </body>
    </html>