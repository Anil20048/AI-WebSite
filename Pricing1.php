<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCI Pricing</title>
    <style>
        /* Pricing Section */
        
        .pricing {
            background-color: #070707;
            color: #ffffff;
            padding: 20px 40px;
            position: relative;
            width: 95%;
            transition: 0.3s ease-in-out;
        }
        
        .pricing-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%;
            margin: auto;
        }
        
        .pricing-item {
            flex: 1;
            min-width: 250px;
            margin: 10px;
        }
        
        .main-heading {
            font-size: 24px;
            color: white;
            padding-left: 20px;
        }
        
        .sub-heading {
            font-size: 18px;
            color:rgb(19, 18, 18);
        }
        /* Hover effect for links */
        
        .hover-link {
            text-decoration: none;
            color: #dad8d1;
            transition: 0.3s;
        }
        
        .hover-link:hover {
            color: #ffeb3b;
            text-decoration: underline;
        }
        
        .text-content {
            font-size: 16px;
            color: #bbb;
        }
        
        .hidden {
            display: none;
        }
    </style>
</head>

<body>

    <!-- Pricing Section -->
    <section class="pricing" id="pricing-section">
        <!-- <button class="close-btn" onclick="closePricing()">✖</button> -->
        <h1 class="main-heading">Pricing</h1>
        <div class="pricing-container">
            <div class="pricing-item">
                <h3 class="sub-heading"><a href="#" class="hover-link">Pricing Overview</a></h3>
                <p class="text-content">Our simple pricing models and compelling savings programs get you more value, faster.</p>

                <h3 class="sub-heading"><a href="#" class="hover-link">OCI Cost Estimator</a></h3>
                <p class="text-content">Configure, estimate, and easily share the cost of your project on OCI.</p>
            </div>

            <div class="pricing-item">
                <h3 class="sub-heading"><a href="#" class="hover-link">OCI Price List</a></h3>
                <p class="text-content">Only pay for resources consumed, with no hidden costs. Switch services and data centers anytime, without notice.</p>
            </div>

            <div class="pricing-item">
                <h3 class="sub-heading"><a href="#" class="hover-link">Get Support Rewards on OCI</a></h3>
                <p class="text-content">Reduce your Oracle technology license support bill by $0.25 or more for every $1 spent on OCI.</p>
            </div>

            <div class="pricing-item">
                <h3 class="sub-heading"><a href="#" class="hover-link">Bring Your Own License</a></h3>
                <p class="text-content">Use your current Oracle licenses for on-premises software to run corresponding services on high-performance Oracle Cloud Infrastructure.</p>
            </div>
        </div>
    </section>

    <script>
        function closePricing() {
            document.getElementById("pricing-section").classList.add("hidden");
        }
    </script>

</body>

</html>
