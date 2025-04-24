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

    <style>
      .background-graphic {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: rgb(255, 242, 224);
  flex-wrap: wrap;
  padding: 40px 20px;
}

.wrapper {
  width: 50%;
  padding: 20px;
  text-align: left;
}

.heading {
  font-size: 2em;
  font-weight: bold;
  margin-bottom: 10px;
}

.line {
  width: 50px;
  height: 4px;
  background-color: #daba79;
  margin-bottom: 20px;
}

.text {
  font-size: 1.3em;
  color: #333;
  margin-bottom: 20px;
}

.cta-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #333;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  transition: 0.3s ease;
}

.cta-button:hover {
  background-color: #555;
  color: #ffcc00;
}

.video-section-1 {
  width: 45%;
  display: flex;
  justify-content: center;
}

.video-section-1 img {
  width: 100%;
  max-width: 500px;
  height: auto;
}

/* ========== Responsive Styling ========== */
@media (max-width: 768px) {
  .background-graphic {
    flex-direction: column;
    text-align: center;
  }

  .wrapper,
  .video-section-1 {
    width: 100%;
  }

  .wrapper {
    text-align: left;
  }

  .heading {
    font-size: 1.5em;
  }

  .text {
    font-size: 1em;
  }

  .cta-button {
    margin-top: 20px;
    text-align: center;
  }

  .video-section-1 img {
    width: 90%;
    margin-top: 20px;
  }
}
            /* .background-graphic {
            width: 100%;
            height: auto;
            display: flex;
            background-color:rgb(255, 242, 224);
            text-align: center;
        }
        
        .wrapper {
            width: 50%;
            margin: 0px auto;
            padding: 20px;
            justify-content: left;
            text-align: left;
            margin-left: 20px;
        }
        
        .heading {
            font-size: 2em;
            font-weight: bold;
            margin-top: 10px;
            text-align: left;
        }
        
        .line {
            width: 50px;
            height: 4px;
            background-color: #daba79;
            margin-top: 5px;
        }
        
        .text {
            font-size: 1.5em;
            margin-top: 20px;
            color: #333;
        }
        
        .cta-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px;
        }

        .video-section-1 img {
            width: 80%;
            text-align: center;
            margin-top: 30px;
          
        } */
        /* ======================
   ✅ Responsive Styling
====================== */

/* @media (max-width: 768px) {
    .background-graphic {
        flex-direction: column;
        text-align: center;
       
    }

    .wrapper {
        padding: 10px;
        width: 100%;
    }

    .heading {
        font-size: 1.5em;
        text-align: left;
    }

    .line {
      
        text-align: left;
    }

    .text {
        font-size: 1em;
        text-align: left;
    }

    .cta-button {
        margin: 20px auto;
        text-align: center;
    }
} */

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
         .ani-contane,
        h1 {
            width: 100%;
            margin-bottom: 30px;
            text-align: left;
            font-size: 55px;
            padding-left: 15px;
            padding-top: 10px;
        }

        .image-box-i {
            width: 100%;
            overflow: hidden;
            height:auto;
            text-align: center;
        }
        
        .image-box-i img {
       
            height: auto;
            border-radius: 10px;
            right: 0;
        }
        
        /* Responsive Design */

/* Tablet (768px and below) */
@media screen and (max-width: 768px) {
    .navigation-tabs {
        justify-content: space-around; 
        padding: 10px;
    }

    .navigation-tab {
        padding: 8px 12px;
        font-size: 14px;
    }

    .ani-contane h1 {
        font-size: 40px;
        padding-left: 20px;
        text-align: center;
    }
    .image-box-i img {
        width: 95%;
        border-radius: 5px;
    }
}
/* Mobile (480px and below) */
@media screen and (max-width: 480px) {
    .navigation-tabs {
        flex-direction: column; 
        align-items: center;
    }

    .navigation-tab {
        width: 100%; 
        text-align: center;
        padding: 12px;
    }

    .ani-contane h1 {
        font-size: 30px;
        padding-left: 10px;
        text-align: center;
    }

    .an-img {
        width: 100%;
        padding: 5px;
    }
}
        .hero-section {
            position: relative;
            width: 100%;
            height: 450px;
            /* Adjust as needed */
            background: url('../image/vs1.avif') no-repeat center center/cover;
            display: flex;
            align-items: self-start;
            justify-content: left;
            color: white;
            text-align: left;
            padding: 20px;
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* Dark overlay */
        }
        
        .hero-content {
            position: relative;
            width: 80%;
            padding: 40px;
        }
        
        .hero-content h1 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #faf7f7;
            padding-left: 0px;
        }
        
        .cta-button {
            display: inline-block;
            padding: 12px 20px;
            background: rgb(29, 29, 29);
            color: rgb(254, 250, 250);
            font-size: 16px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }
        
        .cta-button:hover {
            background: black;
            color: white;
        }
        /* Responsive Design */

/* Tablet (768px and below) */
@media screen and (max-width: 768px) {
    .hero-section {
        height: 350px; /* Reduce height for tablets */
        padding: 20px;
        align-items: center; /* Center align content */
        text-align: center;
    }

    .hero-content {
        width: 90%;
        padding: 20px;
       
    }

    .hero-content h1 {
        font-size: 28px; /* Adjust font size */
    }

    .cta-button {
        font-size: 14px;
        padding: 10px 18px;
    }
}

/* Mobile (480px and below) */
@media screen and (max-width: 480px) {
    .hero-section {
        height: 280px; 
        padding: 15px;
        align-items: center;
        text-align: center;
    }

    .hero-content {
        width: 100%;
        padding: 15px;
       
    }

    .hero-content h1 {
        font-size: 24px;
    }

    .cta-button {
        font-size: 14px;
        padding: 10px 15px;
        width: 80%; 
        text-align: center;
    }
}
        .content-wrapper {
            width: 100%;
            margin: 0 auto;
            background-color: #F9F7F6;
        }
        
        h1 {
            font-size: 24px;
            font-weight: bold;
            text-align: left;
            align-items: self-start;
            padding-left: 50px;
        }
        
        h2 {
            font-size: 18px;
            font-weight: bold;
            text-align: left;
            padding-left: 50px;
        }
        
        p {
            font-size: 16px;
            color: #333;
            text-align: left;
            padding-left: 50px;
        }
/* ======================
   ✅ Responsive Media Queries
====================== */

@media (max-width: 768px) {
    h1, h2, p {
        padding-left: 20px;
        padding-right: 20px;
    }

    h1 {
        font-size: 1.75rem; /* ~28px */
        text-align: center;
    }

    h2 {
        font-size: 1.25rem;
        text-align: left;
    }

    p {
        font-size: 0.95rem; 
        text-align: left; 
    }
}

@media (max-width: 480px) {
    h1 {
        font-size: 1.5rem; 
        text-align: left;
    }

    h2 {
        font-size: 1.125rem; 
        text-align: left;
    }

    p {
        font-size: 0.9rem; 
        text-align: left;
    }
}      .page-background { 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 20px;
        }
        
        .blog-container {
            display: flex;
            width: 90%;
            margin: auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
        }
        
        .main-content {
            flex: 2;
            padding: 20px;
        }
        
        .blog-sidebar {
            flex: 1;
            padding: 20px;
            background: white;
            border-left: 2px solid #ddd;
            border-radius: 5px;
        }
        
        h2 {
            font-size: 24px;
            color: #333;
        }
        
        p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }
        
        .featured-blogs h3 {
            margin-bottom: 10px;
        }
        
        .featured-blogs a {
            text-decoration: none;
            color: #1e1f1e;
            display: block;
            margin-top: 10px;
        }
        
        .featured-blogs a:hover {
            text-decoration: underline;
        }
        /* Responsive Design */

/* Tablet (768px and below) */
@media screen and (max-width: 768px) {
    .blog-container {
        flex-direction: column; 
        padding: 15px;
    }

    .main-content, .blog-sidebar {
        flex: 1;
        padding: 15px;
    }

    h2 {
        font-size: 22px;
    }

    p {
        font-size: 15px;
    }
}

/* Mobile (480px and below) */
@media screen and (max-width: 480px) {
    .blog-container {
        padding: 10px;
    }

    .main-content, .blog-sidebar {
        padding: 10px;
    }

    .blog-sidebar {
        border-left: 0px solid #000;
    }

    h2 {
        font-size: 20px;
        text-align: center; 
    }
    h3{
        padding-left: 20px;
    }

    p {
        font-size: 14px;
        text-align: justify;
    }

    .featured-blogs h3 {
        text-align: center;
    }

    .featured-blogs a {
        text-align: center;
    }
}

        .background-cover {
            background: url('../image/ditabbg1.avif') no-repeat center center/cover, url('../image/ditabbg2.png') no-repeat center center/cover;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 50vh;
            z-index: -1;
            opacity: 0.2;
            text-align: center;
            justify-content: center;
        }
        /* Main Container */
        
        .wrapper-container {
            background: white;
            padding: 40px;
            width: 80%;
            /* text-align: center;
            justify-content: center; */
            margin: 100px 0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        /* Heading */
        
        h1 {
            font-size: 32px;
            color: #222;
        }
        
        .p {
            font-size: 18px;
            color: #222;
            padding-left: 50pxpx;
        }
        /* Tab Navigation */
        
        .menu-tabs {
            display: flex;
            justify-content: left;
            gap: 20px;
            margin-top: 20px;
            border-bottom: 3px solid rgb(174, 173, 173);
        }
        
        .menu-item {
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            padding-bottom: 5px;
            border-bottom: 2px solid transparent;
            padding-left: 20px;
        }
        
        .menu-active {
            border-bottom: 2px solid green;
        }
        /* Tab Content */
        
        .content-sections {
            margin-top: 20px;
        }
        
        .content-box {
            display: none;
            background-color: white;
        }
        
        .content-active {
            display: block;
        }
        /* Buttons */
        
        .primary-button {
            background-color: black;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }
        
        .primary-button:hover {
            background-color: #333;
        }
        
        .beg-center {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Responsive Design */

/* Tablet (768px and below) */
@media screen and (max-width: 768px) {
    .wrapper-container {
        width: 90%;
        padding: 30px;
    }

    h1 {
        font-size: 28px;
    }

    .p {
        font-size: 16px;
        padding-left: 20px;
    }

    .menu-tabs {
        gap: 15px;
        justify-content: center;
    }

    .menu-item {
        font-size: 16px;
        padding-left: 15px;
    }
}

/* Mobile (480px and below) */
@media screen and (max-width: 480px) {
    .wrapper-container {
        width: 95%;
        padding: 20px;
    }

    h1 {
        font-size: 24px;
    }

    .p {
        font-size: 14px;
        padding-left: 10px;
    }

    .menu-tabs {
        gap: 10px;
        padding-bottom: 5px;
        overflow-x: auto;
        justify-content: flex-start;
    }

    .menu-item {
        font-size: 14px;
        padding-left: 10px;
    }

    .primary-button {
        padding: 10px 16px;
        font-size: 14px;
    }
}
    </style>

    <div class="background-graphic">
        <div class="wrapper">
            <div class="heading">AI Vision</div>
            <div class="line"></div>
            <div class="text">
                OCI Vision is an AI service for performing deep-learning–based image analysis at scale. With prebuilt models available out of the box, developers can easily build image recognition and text recognition into their applications without machine learning
                (ML) expertise. For industry-specific use cases, developers can automatically train custom vision models with their own data. These models can be used to detect visual anomalies in manufacturing, organize digital media assets, and tag
                items in images to count products or shipments.
            </div>
            <a href="Ai_Infrastructure.php" class="cta-button">Speak to an AI expert</a>
        </div>
        <div class="video-section-1">
            <img src="../image/aiv.jpeg" alt="Generative AI Video Thumbnail">
        </div>
    </div> 
    <!-- tab -->

    <div class="navigation-tabs">
        <div class="navigation-tab" onclick="openPage('overviewv1.php')">Overview</div>
        <div class="navigation-tab" onclick="openPage('pricingv1.php')">Pricing</div>
        <div class="navigation-tab" onclick="openPage('faqv1.php')">FAQ</div>

    </div>

    <div class="ani-contane">
        <h1>How AI Vision works</h1>
        <div class="image-box-i">
            <img src="../image/vi1.avif" alt="">
        </div>

    </div>

    <div class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <img src="../image/vs2.avif" alt="Children's Medical Research Institute Logo" width="150">
            <h1>Children’s Medical Research Institute <br> Drives Progress with Oracle AI</h1>
            <a href="#" class="cta-button">Watch the video (2:16)</a>
        </div>
    </div>


    <div class="content-wrapper">
        <h1>Computer vision use cases</h1>

        <h2>Gain insights from visual data</h2>
        <p>Automatically extract textual or visual information from images and videos and use that to power analytic applications...</p>

        <h2>Digital asset management</h2>
        <p>Enrich image-based files with metadata, including objects and colors for better indexing and retrieval...</p>

        <h2>Detect visual anomalies</h2>
        <p>Classify products or equipment as standard or defective based on visual appearance...</p>

        <h2>Monitor scenes</h2>
        <p>Detect whether vegetation is growing in the surveillance image of a power line...</p>
    </div>


    <div class="page-background">

        <div class="blog-container">
            <div class="main-content">
                <h2>Aon improves customer experience with OCI Language service</h2>
                <p><strong>Chris Pearce</strong>, Technology Senior Consultant, Oracle</p>
                <p><strong>Simon Wigley</strong>, Consulting Technology Architect Director, Oracle</p>
                <p>Aon uses data-driven insights to identify customers’ priorities and monitor their sentiment. With Oracle Consulting’s data pipeline, Aon employs OCI Language’s sentiment analysis to transform unstructured textual data into interactive
                    dashboards, enabling swift access to insights and informed decision-making.</p>
                <p><a href="#">Read the full article | Subscribe to the blog</a></p>
            </div>

            <div class="blog-sidebar">
                <h3>Featured blogs</h3>
                <div class="featured-blogs">
                    <p><strong>MARCH 14, 2024</strong></p>
                    <a href="#">Announcing the general availability of OCI Language 3.0</a>

                    <p><strong>NOVEMBER 2, 2022</strong></p>
                    <a href="#">Custom models and text translation come to OCI Language</a>

                    <p><strong>MARCH 11, 2021</strong></p>
                    <a href="#">6 tips for easier AI adoption</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-4">
        <h1>Additional Oracle AI resources</h1>

        <div class="content-3">
            <div class="column">
                <h3>Generative AI</h3>
                <a href="Generative.php">Generative AI Capabilities</a>
                    <a href="Generative_AI_Service.php">Generative AI Service</a>
                    <a href="Agrnts.php">Generative AI Agents</a>
                    <a href="Assist.php">Code Assist</a>
                    <a href="Machine_learning.php">Machine Learning Services</a>
                   <a href="Virtual_machines.php">Virtual Machines for Data Science</a>
              
            </div>

            <div class="column divider">
                <h3>AI Services</h3>
                <a href="Digital_Assistant.php">Digital Assistant </a>
                    <a href="Speech.php">Speech</a>
                    <a href="Language.php">Language </a>
                    <a href="Vision.php">Vision </a>
                    <a href="Document_understanding">Document Understanding </a>
                    <a href="Machine_learning.php">Machine Learning in Oracle Database</a>
                    <a href="Data_Labeling.php">Data Labeling</a>
            </div>

            <div class="column divider">
                <h3>AI Infrastructure</h3>
                <a href="Ai_Infrastructure.php">AI Infrastructure</a>
                    <a href="Gpu_instances.php">GPU Instances</a>
                    <a href="Sovereign_ai.php">Sovereign AI </a>
            </div>
        </div>
    </div> </div>
 <!-- TAB -->
    <!-- Background -->
    <div class="beg-center">
        <div class="background-cover"></div>

        <div class="wrapper-container">
            <h1>Get started with Oracle Digital Assistant</h1>

            <!-- Tabs -->
            <div class="menu-tabs">
                <div class="menu-item menu-active" onclick="changeTab('trial-section')">Free AI trial</div>
                <div class="menu-item" onclick="changeTab('labs-section')">AI hands-on lab</div>
                <div class="menu-item" onclick="changeTab('support-section')">AI solutions hub</div>
                <div class="menu-item" onclick="changeTab('support-section-1')">Contact sales</div>
            </div>

            <div class="content-sections">
                <!-- Free Trial Content -->
                <div class="content-box content-active" id="trial-section">
                    <div class="wrappe-w">
           <div class="container-x">
            <div class="info-section">
                <h2><strong>Try Oracle AI and get a 30-day trial</strong></h2>
                <p>Oracle offers a free pricing tier for most AI services as well as a free trial account with US$300 in credits to try additional cloud services. Get the details and sign up for your free account.</p>
                <a href="#" class="cta-link">Try Oracle AI for free</a>
            </div>
            <div class="feature-list">
                <h3>Which Oracle AI and ML services offer a free pricing tier?</h3>
                <ul>
                    <li>OCI Speech</li>
                    <li>OCI Language</li>
                    <li>OCI Vision</li>
                    <li>OCI Document Understanding</li>
                    <li>Machine Learning in Oracle Database</li>
                    <li>OCI Data Labeling</li>
                </ul>
                <p>You also only have to pay compute and storage charges for OCI Data Science.</p>
            </div>
           </div>
           </div>
                    
                </div>

                <!-- LiveLabs Content -->
                <div class="content-box" id="labs-section">
                    <div class="main-container">
             <div class="layout-wrapper">
            <div class="left-panel">
                <h2>Learn with an AI hands-on lab</h2>
                <p>The best way to learn something is to try it yourself. Use our tutorials and hands-on labs with your own Oracle Cloud tenancy, at no charge for many services.</p>
                <button>See all AI and machine learning workshops and tutorials</button>
            </div>
            <div class="right-panel">
                <div class="box-a">
                    <h3>Welcome to Bistro AI: Create an AI-powered recipe generator</h3>
                    <p>With the help of generative AI, you'll provide a list of ingredients to a pretrained recipe generator to decide what to make.</p>
                    <a href="#">Start this lab</a>
                </div>
                <div class="box-a">
                    <h3>Speed up data science with the Accelerated Data Science SDK</h3>
                    <p>Explore concepts in OCI Data Science to improve workflow efficiency and become more productive.</p>
                    <a href="#">Start this lab</a>
                </div>
                <div class="box-a">
                    <h3>Build the perfect digital assistant for your business</h3>
                    <p>Explore how to work with multiple chatbots and digital assistants in Oracle Digital Assistant.</p>
                    <a href="#">Start this lab</a>
                </div>
                <div class="box-a">
                    <h3>The beginner’s guide to building custom language AI modelsGuide to custom AI models</h3>
                    <p>Discover how to automate sophisticated text analysis at scale without machine learning expertise..</p>
                    <a href="#">Start this lab</a>
                </div>
               </div>
              </div>
            </div>
                </div>
<!-- ------------------------con-------------------- -->

               <div class="content-box " id="support-section-1">
                    <div class="wrappe-w">
                <div class="container-x">
               <div class="info-section">
                <h2><strong>Contact sales</strong></h2>
                <p>Interested in learning more about Oracle AI? Let one of our experts help.</p>
                <a href="#" class="cta-link">Get in touch</a>
            </div>
            <div class="feature-list">
                <h3>They can answer questions such as</h3>
                <ul>
                    <li>How can I get started with AI and machine learning?</li>
                    <li>What can I do for my business with generative AI?</li>
                    <li>Which services are right for me?</li>
                </ul>
            </div>
           </div>
           </div>
                    
                </div>
                <!-- Contact Us Content -->
                <div class="content-box" id="support-section">
              <div class="wrappe-w">
           <div class="container-x">
            <div class="info-section">
                <h2><strong>See how to apply AI today</h2>
                <p>Enter a new era of productivity with generative AI solutions for your business. Learn how Oracle helps customers leverage AI embedded across the full technology stack.</p>
                <a href="#" class="cta-link">Try Oracle AI for free</a>
            </div>
            <div class="feature-list">
                <h3>What can you achieve with Oracle AI?</h3>
                <ul>
                    <li>Fine-tune LLMs in OCI</li>
                    <li>Automate invoice processing</li>
                    <li>Build a chatbot with RAG</li>
                    <li>Summarize web content with generative AI</li>
                    <li>Machine Learning in Oracle Database</li>
                    <li>And so much more!</li>
                </ul>
              
            </div>
        </div>
        </div>
        </div>
                    
        </div>
            
        </div>
    </div>


  


    <script>
        function openTab(index) {
            const tabs = document.querySelectorAll(".anc-tab");
            const contents = document.querySelectorAll(".anc-tab-content");

            tabs.forEach(tab => tab.classList.remove("anc-active"));
            contents.forEach(content => content.classList.remove("anc-active"));

            tabs[index].classList.add("anc-active");
            contents[index].classList.add("anc-active");
        }
        tab

        function showContent(index) {
            let contents = document.querySelectorAll(".tab-content");

            contents.forEach((content, i) => {
                content.classList.remove("active");
                if (i === index) {
                    content.classList.add("active");
                }
            });
        }


        // new

        // Function to change tabs
        function changeTab(tabId) {
            // Remove active class from all menu items
            document.querySelectorAll('.menu-item').forEach(tab => {
                tab.classList.remove('menu-active');
            });

            // Hide all content
            document.querySelectorAll('.content-box').forEach(content => {
                content.classList.remove('content-active');
            });

            // Activate the selected tab
            document.querySelector(`[onclick="changeTab('${tabId}')"]`).classList.add('menu-active');

            // Show the corresponding content
            document.getElementById(tabId).classList.add('content-active');
        }
    </script>


    <script>
        function openPage(url) {
            window.location.href = url;
        }


        // tab

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
    </script>

     <!-------------footer include-->
     <?php include("footer.php"); ?>
</body>

</html>