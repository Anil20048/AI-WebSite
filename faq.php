<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="./styles/styles.css">
    <script src="./index.js"></script>
    <title>index</title>


</head>

<body>

    <!-------------header include-->
    <?php include("hader.php"); ?>
    <!-- style -->
    <style>
        .breadcrumb {
            font-size: 14px;
            color: #6B6B6B;
            padding: 15px;
            background: #FDF3E4;
            margin: 0;
        }
        
        .breadcrumb a {
            text-decoration: none;
            color: #6B6B6B;
            margin: 0;
        }
        
        .breadcrumb a:hover {
            text-decoration: underline;
        }
        
        .content-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 40px;
            background: #FDF3E4;
            /* background: url(../image/gr.avif) center/cover no-repeat; */
        }
        
        .text-section {
            max-width: 50%;
        }
        
        .text-section h1 {
            font-size: 32px;
            color: #000;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        
        .text-section p {
            font-size: 16px;
            color: #333;
            line-height: 1.6;
        }
        
        .highlight {
            width: 50px;
            height: 3px;
            background-color: #E6C17A;
            margin: 5px 0 20px 0;
        }
        
        .cta-button {
            background-color: #000;
            color: #fff;
            padding: 12px 18px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
        }
        
        .cta-button:hover {
            background-color: #333;
        }

        /* Responsive Design */
@media (max-width: 1024px) {
    .content-wrapper {
        flex-direction: column;
        text-align: center;
        padding: 30px;
    }

    .text-section {
        max-width: 80%;
    }
}

@media (max-width: 768px) {
    .text-section {
        max-width: 90%;
    }

    .text-section h1 {
        font-size: 28px;
    }

    .text-section p {
        font-size: 15px;
    }
}

@media (max-width: 480px) {
    .text-section {
        max-width: 100%;
    }

    .text-section h1 {
        font-size: 24px;
        text-align: left;
    }

    .text-section p {
        font-size: 14px;
    }

    .cta-button {
        font-size: 13px;
        padding: 10px 15px;
        width: 70%;
       
    }
}
        
        .navigation-tabs {
            display: flex;
            background: #f4f4f4;
            padding: 10px 20px;
            border-bottom: 3px solid #007bff;
        }
        
        .navigation-tab {
            padding: 10px 15px;
            margin: 0 10px;
            cursor: pointer;
            font-weight: bold;
            color: #333;
            transition: color 0.3s;
        }
        
        .navigation-tab:hover,
        .active {
            color: #007bff;
        }
        /* Responsive Adjustments */
@media (max-width: 768px) {
    .navigation-tabs {
        flex-direction: column;
        align-items: center;
    }

    .navigation-tab {
        width: 90%;
        text-align: center;
        padding: 12px;
    }
}
        .sidebar {
            width: 250px;
            background: #ffffff;
            padding: 20px;
            border-right: 2px solid #ddd;
            position: static;
            height: 80vh;
            overflow-y: auto;
        }
        
        .sidebar h2 {
            font-size: 20px;
            color: #030303;
            /* margin-bottom: 15px; */
        }
        
        .sidebar ul {
            list-style: none;
            padding: 0;
            /* color: #000; */
        }
        
        .sidebar ul li {
            padding: 10px 0;
            color: #000;
        }
        
        .sidebar ul li a {
            text-decoration: none;
            color: #000000;
            font-weight: bold;
            display: block;
            /* padding: 8px; */
            /* border-radius: 5px; */
            transition: background 0.3s;
        }
        
        .sidebar ul li a:hover,
        .sidebar ul li.active a {
            background: #e0f2e9;
            color: #00703c;
        }
        /* Main Content */
        
        .conte {
            margin-left: 280px;
            padding: 30px;
            width: calc(100% - 270px);
        }
        
        h1 {
            font-size: 24px;
            color: #000;
            /* margin-top: 10px; */
        }
        
        p,
        ul {
            font-size: 16px;
            color: #555;
        }
        /* Main content area */
        
        .conte {
            margin-left: 260px;
            padding: 20px;
            overflow-y: auto;
            height: 80vh;
        }
        
        .conte-btn {
            display: inline-block;
            padding: 12px 20px;
            margin-top: 20px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: 0.3s;
        }
        
        .conte-btn:hover {
            background-color: #218838;
        }
        
        .conte a {
            color: #3fa94f;
            /* text-decoration: none; */
            margin: auto;
        }
        
        .conte a:hover {
            text-decoration: underline;
        }
        /* Responsive Adjustments */
@media (max-width: 1024px) {
    .sidebar {
        width: 220px;
    }
    .conte {
        margin-left: 230px;
        width: calc(100% - 230px);
    }
}

@media (max-width: 768px) {
    .sidebar {
        width: 200px;
    }
    .conte {
        margin-left: 210px;
        width: calc(100% - 210px);
    }
}

@media (max-width: 600px) {
    .sidebar {
        position: fixed;
        width: 70%;
        height: 100vh;
        transform: translateX(-100%);
        z-index: 1000;
    }

    .conte {
        margin-left: 0;
        width: 100%;
        padding: 20px;
    }

    .sidebar.active {
        transform: translateX(0);
    }
}

    </style>

    <!-- section -->

    <div class="breadcrumb">
        <a href="#">Oracle India</a> &gt; <a href="#">Cloud</a> &gt; <a href="#">Artificial Intelligence</a> &gt; <a href="#">Generative AI</a>
    </div>

    <div class="content-wrapper">
        <div class="text-section">
            <h1>Generative AI Service Features</h1>
            <div class="highlight"></div>
            <button class="cta-button">Speak to an AI expert</button>
        </div>
    </div>


    <div class="navigation-tabs">
        <div class="navigation-tab" onclick="openPage('overview.php')">Overview</div>
        <div class="navigation-tab" onclick="openPage('features.php')">Features</div>
        <div class="navigation-tab" onclick="openPage('pricing.php')">Pricing</div>
        <div class="navigation-tab" onclick="openPage('faq.php')">FAQ</div>
        <div class="navigation-tab" onclick="openPage('product_tour.php')">Product Tour</div>
    </div>



    <div class="contai">
        <!-- Sidebar Navigation -->
        <nav class="sidebar">
            <h2>FAQ topics</h2>
            <ul>
                <li class="active"><a href="#models">General</a></li>

            </ul>
        </nav>

        <!-- Main Content -->
        <div class="conte">
            <section id="models">
                <h1>General questions</h1>
                <p>How much will it cost to use the OCI Generative AI service?</p>
                <a href="read1.php">Learn about pricing options</a>
                <h1>How is my data used?</h1>
                <p>All data sent to the OCI Generative AI service stays with Oracle. This includes data you may use to fine-tune a model as well as prompts and responses. Your data isn’t sent to Cohere, Meta, or any other model provider, and it can’t be
                    seen by any other customer.</p>

                <h1>What are the SLAs for OCI Generative AI?</h1>
                <p>How much will it cost to use the OCI Generative AI service?</p>
                Please refer to <a href="Digital_Assistant.php"> Oracle PaaS and IaaS Public Cloud Services Pillar Document for SLA details.</a>for SLA details
                <h1>Is my data used by Cohere, Meta, or Oracle in any way?</h1>
                <p>All data sent to the OCI Generative AI service is secure and private. No data is shared with Cohere or Meta.</p>
                <a href="Language.php">Learn about pricing options</a>
                <h1>In which regions is OCI Generative AI available?</h1>
                Please refer to the<a href="blog.php">OCI Generative AI models documentation page</a>for information on model availability per region.
            </section>

        </div>

    </div>





    <!-- siderbar -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarLinks = document.querySelectorAll(".sidebar ul li a");

            sidebarLinks.forEach(link => {
                link.addEventListener("click", function() {
                    sidebarLinks.forEach(item => item.parentElement.classList.remove("active"));
                    this.parentElement.classList.add("active");
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            const tabs = document.querySelectorAll(".anc-tab");
            const contents = document.querySelectorAll(".anc-tab-content");
            tabs.forEach((tab, index) => {
                tab.addEventListener("click", function() {
                    tabs.forEach(t => t.classList.remove("anc-active"));
                    contents.forEach(c => c.classList.remove("anc-active"));
                    tab.classList.add("anc-active");
                    contents[index].classList.add("anc-active");
                });
            });
        });


        function openPage(url) {
            window.location.href = url;
        }
    </script>








      <!-------------footer include-->
      <?php include("footer.php"); ?>
</body>

</html>