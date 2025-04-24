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

    <style>

        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9f9f9;
            ;
        }
        
        .hero-section-sub {
            width: 100%;
            background: url('../image/comb2.avif') repeat;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 40px 20px;
            position: relative;
        }
        
        .hero-container-sub {
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            align-items: center;
        }
        
        .hero-text {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            flex: 1 1 100px;
            z-index: 2;
        }
        
        .hero-text span {
            color: #444;
            font-size: 0.9rem;
            font-weight: 500;
            text-transform: uppercase;
            display: inline-block;
            margin-bottom: 12px;
        }
        
        .hero-text h2 {
            font-size: 1rem;
            font-weight: bold;
            margin-bottom: 12px;
            line-height: 1.3;
        }
        
        .highlight-bar {
            width: 40px;
            height: 4px;
            background: #f0c13a;
            margin-bottom: 20px;
        }
        
        .hero-text p {
            font-size: 1rem;
            color: #333;
            line-height: 1.6;
        }
        
        .hero-image {
            flex: 1 1 800px;
            z-index: 1;
        }
        
        .hero-image img {
            width: 100%;
            height: 100%;
            border-radius: 10px;
            display: block;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }
        /* Media Queries for Responsiveness */
@media (max-width: 1200px) {
    .hero-container-sub {
        flex-direction: column;
    }

    .hero-text {
        padding: 30px;
    }

    .hero-image {
        flex: 1 1 100%;
    }
}

@media (max-width: 768px) {
    .hero-text {
        padding: 20px;
        font-size: 0.9rem;
    }

    .hero-image {
        flex: 1 1 100%;
    }

    .hero-text h2 {
        font-size: 1.2rem;
    }

    .highlight-bar {
        width: 30px;
        height: 3px;
    }
}

@media (max-width: 480px) {
    .hero-section-sub {
        padding: 20px;
    }

    .hero-text {
        padding: 15px;
        font-size: 0.85rem;
    }

    .hero-image img {
        border-radius: 8px;
    }

    .highlight-bar {
        width: 25px;
        height: 3px;
    }

    .hero-text h2 {
        font-size: 1rem;
    }
}
        .testimonial-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 40px;
            gap: 40px;
            max-width: 1200px;
            margin: auto;
        }
        
        .testimonial-left {
            flex: 2;
        }
        
        .share-icons {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 20px;
        }
        
        .share-icons span {
            font-weight: bold;
            margin-right: 10px;
        }
        
        .share-icons img {
            width: 24px;
            height: 24px;
            cursor: pointer;
        }
        
        .testimonial-quote {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #222;
            margin-bottom: 10px;
        }
        
        .testimonial-author {
            font-weight: bold;
            margin-top: 10px;
        }
        
        .product-card {
            background-color: #fff;
            padding: 20px 24px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            max-width: 280px;
        }
        
        .product-card h3 {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 1.1rem;
        }
        
        .product-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .product-card ul li {
            margin-bottom: 10px;
        }
        
        .product-card ul li a {
            text-decoration: none;
            color: #0077b6;
            font-weight: 500;
        }
        
        .product-card ul li a:hover {
            text-decoration: underline;
        }
        
/* Tablets and smaller screens */
@media (max-width: 1024px) {
    .testimonial-section {
        flex-direction: column;
        padding: 20px;
        gap: 20px;
    }

    .testimonial-left {
        flex: 1;
    }

    .product-card {
        max-width: 100%;
    }
}

/* Smartphones and smaller screens */
@media (max-width: 768px) {
    .testimonial-section {
        padding: 15px;
    }

    .share-icons {
        flex-direction: column;
        gap: 10px;
    }

    .testimonial-quote {
        font-size: 1rem;
    }

    .testimonial-author {
        font-size: 0.9rem;
    }

    .product-card {
        max-width: 100%;
        padding: 16px 20px;
    }

    .product-card h3 {
        font-size: 1rem;
    }
}

/* Small screens (mobile) */
@media (max-width: 480px) {
    .testimonial-section {
        padding: 10px;
    }

    .testimonial-left {
        margin-bottom: 20px;
    }

    .product-card {
        max-width: 100%;
        padding: 12px 16px;
    }

    .product-card h3 {
        font-size: 0.9rem;
    }
}
        .customer-spotlight {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem;
            font-family: Arial, sans-serif;
        }
        
        .spotlight-video {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
        }
        
        .spotlight-video-wrapper {
            position: relative;
            width: 100%;
            border-radius: 12px;
            overflow: hidden;
        }
        
        .spotlight-video-wrapper img {
            width: 100%;
            display: block;
            border-radius: 12px;
        }
        
        .spotlight-play-btn {
            position: absolute;
            bottom: 10%;
            right: 10%;
            background-color: rgba(0, 0, 0, 0.6);
            border: none;
            border-radius: 50%;
            font-size: 2rem;
            color: white;
            padding: 0.75rem 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .spotlight-play-btn:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
        
        .spotlight-challenges {
            margin-bottom: 2rem;
        }
        
        .challenges-title {
            font-size: 1.75rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        
        .challenges-description {
            font-size: 1rem;
            line-height: 1.6;
            color: #333;
        }
        
        .content-box {
            width: 45%;
            margin: 0 auto;
            padding: 20px;
        }
        
        .quote-block {
            font-size: 1.6rem;
            text-align: center;
            margin: 40px 0;
            padding: 30px;
            border-top: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            line-height: 1.6;
        }
        
        .title-header {
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 30px;
            margin-bottom: 10px;
        }
        
        a {
            color: #0077cc;
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: underline;
        }
        /* Media Queries for Responsiveness */

/* Tablets and smaller screens */
@media (max-width: 1024px) {
    .customer-spotlight {
        padding: 1.5rem;
    }

    .spotlight-video-wrapper {
        border-radius: 8px;
    }

    .spotlight-play-btn {
        font-size: 1.8rem;
        padding: 0.5rem 0.8rem;
    }

    .challenges-title {
        font-size: 1.5rem;
    }

    .challenges-description {
        font-size: 0.95rem;
    }

    .content-box {
        width: 100%;
        padding: 15px;
    }

    .quote-block {
        font-size: 1.4rem;
        padding: 20px;
    }

    .title-header {
        font-size: 1.3rem;
    }
}

/* Smartphones and smaller screens */
@media (max-width: 768px) {
    .customer-spotlight {
        padding: 1rem;
    }

    .spotlight-play-btn {
        font-size: 1.5rem;
        padding: 0.5rem 0.75rem;
    }

    .challenges-title {
        font-size: 1.4rem;
    }

    .challenges-description {
        font-size: 0.9rem;
    }

    .content-box {
        width: 100%;
        padding: 10px;
    }

    .quote-block {
        font-size: 1.3rem;
        padding: 15px;
    }

    .title-header {
        font-size: 1.2rem;
    }
}

/* Small screens (mobile) */
@media (max-width: 480px) {
    .customer-spotlight {
        padding: 1rem;
    }

    .spotlight-play-btn {
        font-size: 1.3rem;
        padding: 0.4rem 0.6rem;
    }

    .challenges-title {
        font-size: 1.2rem;
    }

    .challenges-description {
        font-size: 0.85rem;
    }

    .content-box {
        width: 100%;
        padding: 10px;
    }

    .quote-block {
        font-size: 1.2rem;
        padding: 10px;
    }

    .title-header {
        font-size: 1.1rem;
    }
}
        .customer-section {
            background-color: #f6f5f3;
            padding: 60px 20px 40px;
            text-align: left;
            position: relative;
        }
        
        .pattern-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 150px;
            background: url('../image/bg2.avif') no-repeat center top;
            background-size: cover;
        }
        
        .customer-content {
            position: relative;
            width: 800px;
            margin: 0 auto;
            padding-top: 100px;
        }
        
        .logo-sub {
            margin-bottom: 20px;
        }
        
        .logo-sub img {
            height: 60px;
        }
        
        .customer-title {
            font-size: 1.6rem;
            font-weight: bold;
            margin-bottom: 15px;
            color: #111;
            text-align: left;
        }
        
        .customer-description {
            font-size: 1rem;
            color: #333;
            line-height: 1.6;
        }
        /* Media Queries for Responsiveness */

/* Tablets and smaller screens */
@media (max-width: 1024px) {
    .customer-section {
        padding: 50px 15px 30px;
    }

    .customer-content {
        width: 90%;
        padding-top: 60px;
    }

    .logo-sub img {
        height: 50px;
    }

    .customer-title {
        font-size: 1.4rem;
    }

    .customer-description {
        font-size: 0.95rem;
    }
}

/* Smartphones and smaller screens */
@media (max-width: 768px) {
    .customer-section {
        padding: 40px 10px 20px;
    }

    .customer-content {
        width: 100%;
        padding-top: 40px;
    }

    .logo-sub img {
        height: 40px;
    }

    .customer-title {
        font-size: 1.3rem;
    }

    .customer-description {
        font-size: 0.9rem;
    }
}

/* Small screens (mobile) */
@media (max-width: 480px) {
    .customer-section {
        padding: 30px 5px 15px;
    }

    .customer-content {
        width: 100%;
        padding-top: 30px;
    }

    .logo-sub img {
        height: 35px;
    }

    .customer-title {
        font-size: 1.2rem;
    }

    .customer-description {
        font-size: 0.85rem;
    }
}
        .resources-wrapper {
            background-color: #faf9f7;
            padding: 60px 40px;
        }
        
        .resources-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 40px;
        }
        
        .resources-column {
            flex: 1;
            min-width: 250px;
        }
        
        .resources-column h3 {
            font-size: 1.3rem;
            margin-bottom: 16px;
            font-weight: bold;
            color: #111;
        }
        
        .resources-column a {
            display: block;
            color: #0077a6;
            text-decoration: none;
            margin-bottom: 10px;
            font-size: 1rem;
        }
        
        .resources-column a:hover {
            text-decoration: underline;
        }
    </style>

 <!-------------header include-->
     <?php include("hader.php"); ?>
<body>

    <section class="hero-section-sub">
        <div class="hero-container-sub">
            <div class="hero-text">
                <span>Customer References ›</span>
                <h2>Northwell Health taps Oracle Cloud HCM and AI capabilities to support employees</h2>
                <div class="highlight-bar"></div>
                <p>
                    Oracle Fusion Cloud HCM supports New York’s largest health system in its goal to be one of the healthcare industry’s best places to work.
                </p>
            </div>
            <div class="hero-image">
                <img src="../image/cob1.jpg" alt="Smiling woman" />
            </div>
        </div>
    </section>
    <section class="testimonial-section">
        <div class="testimonial-left">
            <div class="share-icons">
                <span>Share:</span>
                <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" title="Share on Facebook">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733635.png" alt="X (Twitter)" title="Share on X">
                <img src="https://cdn-icons-png.flaticon.com/512/3536/3536505.png" alt="LinkedIn" title="Share on LinkedIn">
                <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" alt="Email" title="Share via Email">
            </div>
            <p class="testimonial-quote">
                “With a powerful platform in Oracle Autonomous Database, combined with our advanced sensors and machine learning algorithms, we can produce data that helps miners to better distinguish high-grade ore from low-grade waste in real time. This leads to process
                optimizations that dramatically improve mine profitability and sustainability.”
            </p>
            <p class="testimonial-author">
                Frank Hoogendoorn, Chief Data Officer, MineSense Technologies
            </p>
        </div>

        <div class="product-card">
            <h3>Products list</h3>
            <ul>
                <li><a href="Ai_Infrastructure.php">Oracle Cloud Infrastructure</a></li>
                <li><a href="Ai_servicees.php">Autonomous Database</a></li>
                <li><a href="Digital_Assistant.php">Oracle APEX</a></li>
                <li><a href="Ai_Infrastructure.php">OCI Generative AI Agents</a></li>
            </ul>
        </div>
    </section>

    <div class="customer-spotlight">
        <div class="spotlight-video">
            <div class="spotlight-video-wrapper">
                <img src="../image/vd1.jpg" alt="Video thumbnail" />
                <button class="spotlight-play-btn">&#9658;</button>
            </div>
        </div>

        <section class="spotlight-challenges">
            <h2 class="challenges-title">Business Challenges</h2>
            <p class="challenges-description">
                MineSense Technologies provides equipment and digital solutions to help the world’s largest mines maximize output. Its X-ray devices have robust sensors to capture mineral data at the start of the mining process to optimize metal recovery. The data produced,
                combined with advanced machine learning algorithms, is at the core of the value MineSense generates. It needed a powerful data platform to grade the ore in every shovel bucket. It sought to optimize the downstream use of power and water
                to extract the ore while minimizing the waste generated.
            </p>
        </section>
    </div>


    <div class="content-box">
        <h2>Why MineSense chose Oracle</h2>
        <p>
            MineSense chose <a href="Ai_Infrastructure.php">Oracle Cloud Infrastructure (OCI)</a> with
            <a href="#">Oracle Autonomous Database</a> to automate data integration and analyze IoT data in real time. The high performance autonomous database also includes multiple intuitive tools, such as
            <a href="#">Oracle APEX</a> for low-code application development and
            <a href="#">Data Studio</a> to easily load, transform, and build models for use in analytics.
        </p>
        <p>
            Also, <a href="#">OCI Generative AI Agents</a> combine the power of Large Language Models and retrieval-augmented generation to automate the search for equipment issues across the company’s knowledgebase.
        </p>

        <div class="quote-block">
            OCI Generative AI Agents improved engineering productivity by 5X after MineSense automated the search for equipment issues across the company’s knowledgebase.
        </div>

        <h2 class="title-header">Results</h2>
        <p>
            After adopting Oracle Autonomous Data Warehouse the company’s small IT team lowered DBA workloads by 65% and also tripled the company size and number of mining companies it supports in just four years. Oracle APEX allowed
            staff to rapidly build and deliver low-code apps in only one week instead of six. Oracle automated data integration further reduced the complexity of data workflows. Oracle APEX,
            Data Studio and
            OCI Cloud Functions provided serverless compute that both reduced ETL processes and automated deployment of applications, allowing developers to focus on implementing business functionality.
        </p>
        <p>
            <a href="#">OCI Interconnect for Azure</a> helped the data science team tap existing Azure skill sets and machine learning tooling while keeping the data securely stored in OCI Autonomous Database.
        </p>
    </div>
    <section class="customer-section">
        <div class="pattern-bg"></div>
        <div class="customer-content">
            <div class="logo-sub">
                <img src="../image/mi1.svg" alt="MineSense logo" />
            </div>
            <div class="customer-title">About the customer</div>
            <div class="customer-description">
                MineSense provides technology and data solutions that help mines increase output, efficiencies, and profitability, while minimizing environmental footprints across land, water, and energy use.
            </div>
        </div>
    </section>
    <section class="resources-wrapper">
        <div class="resources-container">
            <div class="resources-column">
                <h3>Learn more</h3>
                <a href="index.php">MineSense</a>
            </div>
            <div class="resources-column">
                <h3>Products list</h3>
                <a href="Ai_Infrastructure.php">Oracle Cloud Infrastructure</a>
                <a href="Ai_servicees.php">Autonomous Database</a>
                <a href="Generative.php">Oracle APEX</a>
                <a href="Generative_AI_Service.php">OCI Generative AI Agents</a>
                <a href="Generative_AI_Service.php">OCI Functions</a>
                <a href="Inworld.php">Oracle Autonomous Data Warehouse</a>
                <a href="Ai_servicees.php">OCI Azure Interconnect</a>
                <a href="Data_Labeling.php">Oracle Data Studio</a>
            </div>
        </div>
    </section>
   <!-------------footer include-->
   <?php include("footer.php"); ?>
</body>

</html>