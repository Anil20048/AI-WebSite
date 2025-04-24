<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About OCI</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            background: #f4f4f4;
            text-align: center;
        }
        /* Navigation */
        
        .nav {
            background: #333;
            padding: 15px;
            color: white;
            text-align: left;
        }
        
        .nav button {
            background: none;
            border: none;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }
        /* Overlay Panel */
        
        .about-panel {
            position: fixed;
            top: -100%;
            left: 0;
            width: 100%;
            height: auto;
            background: #1a1a1a;
            color: white;
            padding: 50px;
            transition: top 0.5s ease-in-out;
            overflow-y: auto;
        }
        
        .about-panel.active {
            top: 0;
        }
        /* Close Button */
        
        .close-btn {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 30px;
            cursor: pointer;
        }
        /* Content Styling */
        
        .about-content {
            max-width: 1000px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: space-between;
            margin-top: 50px;
        }
        
        .about-item {
            flex: 1;
            min-width: 250px;
            text-align: left;
        }
        
        .about-item h3 {
            font-size: 20px;
            margin-bottom: 8px;
        }
        
        .about-item p {
            font-size: 16px;
            color: #bbb;
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <div class="nav">
        <button onclick="openAbout(openAbout)">About OCI</button>
    </div>

    <!-- About Panel -->
    <div class="about-panel" id="aboutPanel">
        <span class="close-btn" onclick="closeAbout()">✖</span>
        <h2>About OCI</h2>
        <div class="about-content">
            <div class="about-item">
                <h3>Why OCI Overview</h3>
                <p>Explore why customers choose OCI.</p>
            </div>
            <div class="about-item">
                <h3>Built-In Security</h3>
                <p>Protect your cloud environments with built-in security capabilities at no extra charge.</p>
            </div>
            <div class="about-item">
                <h3>Superior Price-Performance</h3>
                <p>Achieve consistently higher performance at a lower cost across all workloads.</p>
            </div>
            <div class="about-item">
                <h3>Clean Cloud</h3>
                <p>Drive sustainability with cloud computing that runs on renewable energy.</p>
            </div>
            <div class="about-item">
                <h3>Global Presence</h3>
                <p>Run workloads worldwide on 40+ Oracle Cloud regions with strong business continuity.</p>
            </div>
            <div class="about-item">
                <h3>Compliance</h3>
                <p>Ensure global, regional, and industry compliance with Oracle Cloud’s 80+ compliance programs.</p>
            </div>
            <div class="about-item">
                <h3>Distributed Cloud</h3>
                <p>Deploy workloads wherever you like—even across multiple clouds.</p>
            </div>
            <div class="about-item">
                <h3>Customer Success</h3>
                <p>Learn how innovative companies are succeeding with OCI.</p>
            </div>
            <div class="about-item">
                <h3>Free Trial</h3>
                <p>Sign up for a free trial.</p>
            </div>
        </div>
    </div>

    <script>
        function openAbout() {
            document.getElementById("aboutPanel").classList.add("active");
        }

        function closeAbout() {
            document.getElementById("aboutPanel").classList.remove("active");
        }
    </script>

</body>

</html>