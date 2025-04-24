<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="fixed">
        <header class="navbar">
            <div class="logo">
                <img src="../image/logo1.png" alt="">
                <span>OCI</span>
            </div>
       
       
            <nav>
                <ul class="nav-links">
                    <ul class="nav-links">
                        <div class="ab-nav">
                            <button onclick="openAbout()">About</button>
                        </div>
                        <div class="ab-nav">
                            <button onclick="openService()">Service</button>
                        </div>
                        <!-- <div class="ab-nav">
                            <button onclick="openSolutions1()">Solutions</button>
                        </div> -->
                        <div class="ab-nav">
                            <button onclick="openPricing1()">Pricing</button>
                        </div>
                        <div class="ab-nav">
                            <button onclick="openPartners()">Partners</button>
                        </div>

                        <div class="ab-nav">
                            <button onclick="openResources()">Resources</button>
                        </div>
                    </ul>
            </nav>

            <div class="right-menu">
            <i class="fa-solid fa-bars icon" onclick="menu()"></i>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTWfRZXUrGmhxHjoAgYIOiJSuViWJhKUACeQ&s"
                    alt="Language" class="flag">
                <input type="search" placeholder="Search..." class="search-bar">
                <button class="sign-in">Sign in to Oracle Cloud</button>
            </div>
        </header>

        <!-- <i class="fa-solid fa-bars icon" onclick="menu()"></i> -->
        <script>
            function menu() {
                // document.getElementById("nav").style.display = "block";
                let nav = document.getElementById("nav");
                nav.classList.toggle("show");

                if (nav.classList.contains("show")) {
                    nav.style.display = "block";
                } else {
                    nav.style.display = "none";
                }
            }

        </script>

        <div id="nav">
            <div class="dropdown">
                <button><a href="index.php">Overview </a></button>
            </div>
            <div class="dropdown">
                <button>Generative AI <i class="fa-solid fa-angle-down"></i></button>
                <div class="options">
                    <a href="Generative.php">Generative AI Capabilities</a>
                    <a href="Generative_AI_Service.php">Generative AI Service</a>
                    <a href="Agrnts.php">Generative AI Agents</a>
                    <a href="Assist.php">Code Assist</a>
                </div>
            </div>
            <div class="dropdown">
                <button>AI Services <i class="fa-solid fa-angle-down"></i></button>
                <div class="options">
                    <a href="Ai_servicees.php">AI Services</a>
                    <a href="Digital_Assistant.php">Digital Assistant </a>
                    <a href="Speech.php">Speech</a>
                    <a href="Language.php">Language </a>
                    <a href="Vision.php">Vision </a>
                
                </div>
            </div>
            <div class="dropdown">
                <button>Cloud Services <i class="fa-solid fa-angle-down"></i></button>
                <div class="options">
                    <a href="Machine_Services.php">Machine Learning Services</a>
                    <a href="Virtual_machines.php">Virtual Machines for Data Science</a>
                    <a href="Machine_learning.php">Machine Learning in Oracle Database</a>
                    <a href="Data_Labeling.php">Data Labeling</a>
                </div>
            </div>
            <div class="dropdown">
                <button>AI Infrastructure <i class="fa-solid fa-angle-down"></i></button>
                <div class="options">
                    <a href="Ai_Infrastructure.php">AI Infrastructure</a>
                    <a href="Gpu_instances.php">GPU Instances</a>
                    <a href="Sovereign_ai.php">Sovereign AI </a>
                </div>
            </div>
            <div class="dropdown">
                <button><a href="isvi.php">ISVi</button>

            </div>
            <div class="dropdown">
                <button><a href="solutions.php">Solutions</a></button>
                <div class="options">
                </div>
            </div>
            <div class="dropdown">
                <button><a href="customers.php">Customers</a></button>
                <div class="options">
                </div>
            </div>
        </div>
    </div>

    <!----------------------about section is here---------------------------------------->

    <div class="ab-about-panel" id="ab-aboutPanel">
        <span class="ab-close-btn" onclick="closeAbout()">✖</span>
        <h2 style="text-align: center;">About OCI</h2>
        <div class="ab-about-content">
            <div class="ab-about-item">
                <h3>Why OCI Overview</h3>
                <p>Explore why customers choose OCI.</p>
            </div>
            <div class="ab-about-item">
                <h3>Built-In Security</h3>
                <p>Protect your cloud environments with built-in security capabilities at no extra charge.</p>
            </div>
            <div class="ab-about-item">
                <h3>Superior Price-Performance</h3>
                <p>Achieve consistently higher performance at a lower cost across all workloads.</p>
            </div>
            <div class="ab-about-item">
                <h3>Clean Cloud</h3>
                <p>Drive sustainability with cloud computing that runs on renewable energy.</p>
            </div>
            <div class="ab-about-item">
                <h3>Global Presence</h3>
                <p>Run workloads worldwide on 40+ Oracle Cloud regions with strong business continuity.</p>
            </div>
            <div class="ab-about-item">
                <h3>Compliance</h3>
                <p>Ensure global, regional, and industry compliance with Oracle Cloud’s 80+ compliance programs.</p>
            </div>
            <div class="ab-about-item">
                <h3>Distributed Cloud</h3>
                <p>Deploy workloads wherever you like—even across multiple clouds.</p>
            </div>
            <div class="ab-about-item">
                <h3>Customer Success</h3>
                <p>Learn how innovative companies are succeeding with OCI.</p>
            </div>
            <div class="ab-about-item">
                <h3>Free Trial</h3>
                <p>Sign up for a free trial.</p>
            </div>
        </div>
    </div>


    <!--------------------------------------------------------fdgsfh------------------>

    <div class="ab-about-panel" id="ab-service">
        <span class="ab-close-btn" onclick="closeService()">✖</span>
        <?php include("service.php") ?>
    </div>
    <!--------------------------------------------------------Solution----------------->
    <div class="ab-about-panel" id="ab-Solutions1">
        <span class="ab-close-btn" onclick="closeSolutions1()">✖</span>
        <?php include("Solutions1.php") ?>
    </div>




    <!--------------------------------------------------------Price------------------>

    <div class="ab-about-panel" id="ab-Pricing1">
        <span class="ab-close-btn" onclick="closePricing1()">✖</span>
        <?php include("Pricing1.php") ?>
    </div>
    <!--------------------------------------------------------Price------------------>

    <div class="ab-about-panel" id="ab-Partners">
        <span class="ab-close-btn" onclick="closePartners()">✖</span>
        <?php include("Partners.php") ?>
    </div>
    <!--------------------------------------------------------Price------------------>

    <div class="ab-about-panel" id="ab-Resources">
        <span class="ab-close-btn" onclick="closeResources()">✖</span>
        <?php include("Resources.php") ?>
    </div>

    <script>
        function openAbout() {
            document.getElementById("ab-aboutPanel").classList.add("ab-active");
        }

        function closeAbout() {
            document.getElementById("ab-aboutPanel").classList.remove("ab-active");
        }

        function openService() {
            document.getElementById("ab-service").classList.add("ab-active");
        }

        function closeService() {
            document.getElementById("ab-service").classList.remove("ab-active");
        }
        function openSolutions1() {
            document.getElementById("ab-Solutions1").classList.add("ab-active");
        }

        function closeSolutions1() {
            document.getElementById("ab-Solutions1").classList.remove("ab-active");
        }

        function openPricing1() {
            document.getElementById("ab-Pricing1").classList.add("ab-active");
        }

        function closePricing1() {
            document.getElementById("ab-Pricing1").classList.remove("ab-active");
        }
        function openPartners() {
            document.getElementById("ab-Partners").classList.add("ab-active");
        }

        function closePartners() {
            document.getElementById("ab-Partners").classList.remove("ab-active");
        }
        function openResources() {
            document.getElementById("ab-Resources").classList.add("ab-active");
        }

        function closeResources() {
            document.getElementById("ab-Resources").classList.remove("ab-active");
        }
    </script>


    <!-- ================================================== -->





</body>

</html>