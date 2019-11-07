
<!DOCTYPE html>
<html>

    <head>'

        <title>Paula's Sweets </title>
        <link href="Bakery.css" rel="stylesheet"/>
    </head>

    <body>
        <main>
            <form action="index.php">
                <h1>Sweet Shop </h1>
                <aside>


                    <nav>
                        <ul>
                            <li><a href="HomePage.php">Log out</a></li>
                            <?php foreach ($sweetTypes as $sweetType) : ?>
                                <li>
                                    <a href="?action=list_products&amp;SweetTypeID=<?php echo $sweetType->getSweetTypeID(); ?>">
                                        <?php echo $sweetType->getSweetTypeName(); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </aside>
                <section>


                    <table>

                        <tr>
                            <?php if (count($sweets) == 0) : ?>
                            <ul><li>Select a Sweet Treat.</li></ul>
                            <div class="center">
                                <iframe width="420" height="345" src="https://www.youtube.com/embed/YsxtAMlWfj8?autoplay=1">
                                </iframe>
<!--                       Source         https://www.w3schools.com/html/html_youtube.asp-->
                            </div>

                        <?php else: ?>
                            <tr>
                                <?php foreach ($sweets as $sweet) : ?>
                                <tr>
                                <a href="?action=view_product&amp;product_id=<?php echo $sweet['productID']; ?>"><br> <br> <br>
                                   <?php echo $sweet['productName']; ?><br>
                                    <img src="images/<?php echo htmlspecialchars($sweet['productCode']); ?>.jpg"

                                </a>
                                </tr>
                            <?php endforeach; ?>
                            </tr>
                        <?php endif; ?>
                    </table>
                    </main>    
                    <footer></footer>
                    </body>
                    </html>

