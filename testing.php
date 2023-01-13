<?php
    $pagetitle = "Contact Us";
    include("inc/header.php");
?>
            <main>
                <!-- Breadcrumb -->
                <div class="breadcrumb">
                    <div class="wrapper">
                        <p><a href="index.php">Home</a> / Testing Page</p>
                    </div>
                </div>

                <!-- Secttion -->
                <section class="section">

                    <h3 align="center">Contact Table</h3>
                    <?php echo array_to_table(query::select("*", "contact", "ORDER BY id DESC")); ?>

                    <h3 align="center">Marketing Table</h3>
                    <?php echo array_to_table(query::select("*", "marketing", "ORDER BY id DESC")); ?>

                </section>
                <br>
            </main>

<?php include("inc/footer.php"); ?>