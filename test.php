<?php include("inc/header.php"); ?>
<?php include("inc/query.php"); ?>

            <main>
                <!-- News -->
                <section class="news">
                    <div class="wrapper">
                        <h1>Latest News</h1>
                        <a class="hidden show-sm" href="#"><h3 class="viewall">View All &rarr;</h3></a>
                        <div class="flex-container">
                            
                            <?php
                                foreach(query("SELECT * FROM news") as $row) {

                                    if (strlen($row["title"]) >= 45) {
                                        $row["title"] = substr($row["title"], 0, 45) . "...";
                                    }
                        
                                    if (strlen($row["description"]) >= 100) {
                                        $row["description"] = substr($row["description"], 0, 100) . "...";
                                    }
                        
                                    echo '        <div class="news-item ' . htmlspecialchars($row["class"]) . '">
                                <a href="#" class="news-tag">' . htmlspecialchars($row["tag"]) . '</a>
                                <a href="#" class="news-card">
                                    <img class="news-image" src="img/news/' . $row["id"] . '.jpg" alt="">
                                    <div class="wrapper90pc">
                                        <h4>' . htmlspecialchars($row["title"]) . '</h4>
                                        <p>' . htmlspecialchars($row["description"]) . '</p>
                                        <div class="btn">Read More</div>
                                        <hr>
                                        <img class="icon" src="img/netmatters-icon.png" alt="">
                                        <ul>
                                            <li>Posted by ' . htmlspecialchars($row["author"]) . '</li>
                                            <li>' . date("jS F Y", strtotime($row["date"])) . '</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>';
                                }
                            ?>

                        </div>
                        <a class="hide-sm" href="#"><h3 class="viewall">View All &rarr;</h3></a>
                        <!-- News Footer -->
                        <footer class="news-footer hidden show-sm">
                            <div class="flex-footer-container">

                                <div>
                                    <a href="#"><img src="img/clients/busseys.png" alt=""></a>
                                    <div class="hidden arrow"></div>
                                    <div class="hidden box">
                                        <h4>Busseys</h4>
                                        <hr>
                                        <p>One of the UK's leading Ford dealerships.</p>
                                    </div>
                                </div>

                                <div>
                                    <a href="#"><img src="img/clients/crane.png" alt=""></a>
                                    <div class="hidden arrow"></div>
                                    <div class="hidden box">
                                        <h4>Crane Garden Builders</h4>
                                        <hr>
                                        <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
                                    </div>
                                </div>

                                <div>
                                    <a href="#"><img src="img/clients/beat.png" alt=""></a>
                                    <div class="hidden arrow"></div>
                                    <div class="hidden box">
                                        <h4>Beat</h4>
                                        <hr>
                                        <p>The UK's eating disorder charity founded in 1989.</p>
                                    </div>
                                </div>

                                <div>
                                    <a href="#"><img src="img/clients/northerndiver.png" alt=""></a>
                                    <div class="hidden arrow"></div>
                                    <div class="hidden box">
                                        <h4>Northern Diver</h4>
                                        <hr>
                                        <p>Global water based equipment manufacturers for sport, military, commercial and rescue businesses.</p>
                                    </div>
                                </div>

                            </div>
                        </footer>
                    </div>
                </section>

            </main>

<?php include("inc/footer.php"); ?>