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
            background-color: #FDF3E4; 
        }
        .wrapper {
            width: 50%;
            padding: 20px;
            justify-content: left;
            text-align: left;
            margin-top: 20px;
            margin-left: 50px;
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
            text-align: left;
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
        }
        .wrapper a:hover {
    text-decoration: none;
}


.video-section-1 {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 20px;
    text-align: center;
  }

  .video-section-1 img {
    width: 800px;
    border-radius: 10px;
    display: block;
  }
     /* ====================================================== */


/* Responsive Design */
@media (max-width: 1024px) {
    .wrapper {
        flex-direction: column;
        width: 70%;
        margin-left: 20px;
    }

    .heading {
        font-size: 1.8em;
    }

    .text {
        font-size: 1.3em;
    }

    .cta-button {
        padding: 12px 25px;
    }
}

@media (max-width: 768px) {
    .background-graphic {
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 30px;
    }

    .wrapper {
        width: 90%;
        margin: 0;
        padding: 20px;
        text-align: center;
    }

    .heading {
        font-size: 1.6em;
    }

    .text {
        font-size: 1.2em;
    }

    .cta-button {
        display: block;
        width: 100%;
        text-align: center;
    }

    .line {
        margin: 10px auto;
    }
}

@media (max-width: 480px) {
    .heading {
        font-size: 1.4em;
    }

    .text {
        font-size: 1.1em;
        text-align: left;
    }

    .cta-button {
        width: 100%;
    }
    .line {
        margin-left:10px ;
    }

    .video-section-1 img {
        padding: 0px;
      }

}   

    .cards-wrapper {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 20px;
    background-color: #fff;
    width: 96%;
    margin: 20px auto; 
}

/* Card Item */
.card-item {
    width: 30%;
    background: #fff;
    border-radius: 8px;
    padding: 15px;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    align-items: center; 
    text-align: left;
}

/* Card Image */
.card-item img {
    width: 100%;
    height: 250px;
    border-radius: 8px;
    object-fit: cover;
}

.card-title {
    margin: 10px 0;
    font-size: 2em;
    font-weight: bold;
}


.card-description {
    font-size: 1.5em;
    color: #555;
}

@media screen and (max-width: 1024px) {
    .card-item {
        width: 45%;
    }

    .card-title {
        font-size: 1.8em;
    }

    .card-description {
        font-size: 1.4em;
    }
}


@media screen and (max-width: 768px) {
    .cards-wrapper {
        flex-direction: column;
        align-items: center;
    }

    .card-item {
        width: 90%;
    }

    .card-item img {
        width: 80%;
    }

    .card-title {
        font-size: 1.7em;
    }

    .card-description {
        font-size: 1.3em;
    }
}


@media screen and (max-width: 480px) {
    .card-item {
        width: 100%;
        padding: 0px;
    }

    .card-item img {
        width: 100%; 
    }

    .card-title {
        font-size: 1.6em;
    }

    .card-description {
        font-size: 1.2em;
    }
}
        .wrapper-1 {
            max-width: 100%;
            margin: 50px auto;
            padding: 20px;
            background: #FBF9F8;
            width: 100%;
        }
        
        .heading-title {
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 10px;
            color: #000;
            padding-left: 100px;
        }
        
        .highlight-bar {
            width: 60px;
            height: 4px;
            background: #e0c070;
            margin-bottom: 20px;
            margin-left: 110px;
        }
        
        .grid-container {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            width: 95%;
            padding-left: 100px;
           
        }
        
        .grid-item {
            flex: 1;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
        }
        
        .grid-item h3 {
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .grid-item p {
            font-size: 1.5em;
            color: #444;
        }
        /* /* ===================================================/ */


@media screen and (max-width: 1024px) {
    .heading-title,
    .highlight-bar {
        padding-left: 50px;
        margin-left: 50px;
    }

    .grid-container {
        flex-wrap: wrap;
        padding-left: 50px;
    }

    .grid-item {
        width: 45%; 
    }
}

/* Mobile View (768px and below) */
@media screen and (max-width: 768px) {
    .heading-title,
    .highlight-bar {
        padding-left: 20px;
        margin-left: 20px;
    }

    .grid-container {
        flex-direction: column;
        padding-left: 20px;
        align-items: center;
    }

    .grid-item {
        width: 90%; /* Full width for readability */
        text-align: center;
    }
}

/* Small Mobile View (480px and below) */
@media screen and (max-width: 480px) {
    .heading-title {
        font-size: 2em;
        text-align: center;
        padding-left: 0;
    }

    .highlight-bar {
        margin-left: 80px;
        margin-right: auto;
    }

    .grid-container {
        padding-left: 0;
        justify-content: center;
    }

    .grid-item {
        width: 100%;
        padding: 15px;
    }

    .grid-item h3 {
        font-size: 1.8em;
    }

    .grid-item p {
        font-size: 1.3em;
    }
}
        .ai-quote-container {
            width: 100%;
            display: flex;
          text-align: center;
            background-color: #312D2A;
            color: #ffffff;
            padding: 50px;
        }
        
        .ai-quote-text {
            flex: 1;
         text-align: left;
         margin-left: 80px;
        }
        
        .ai-quote-message {
            font-size:2em;
            line-height: 1.5;
            color: #d2d2d2;
        }
        .ai-quote-author {
            font-weight: 2em;
            color: #fff;
            margin-top: 10px;
        }
        .ai-quote-button {
            margin-top: 25px;
            padding: 10px 20px;
            border: none;
            background-color: #fff;
            color: #181818;
            font-size: 1em;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
        }
        .ai-quote-button:hover {
            background-color: #ddd;
        }
        .ai-quote-image {
            flex: 1;
            display: flex;
            justify-content: center;
            text-align: center;
            width: 100%;
        }
        .ai-quote-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        /* ========================================= */

        /* Responsive Design */

/* Tablet View (1024px and below) */
@media screen and (max-width: 1024px) {
    .ai-quote-container {
        padding-left: 50px; /* Reduce left padding */
        padding-right: 30px; /* Prevents overflow */
        gap: 15px;
    }

    .ai-quote-message {
        font-size: 20px;
    }
}

/* Mobile View (768px and below) */
@media screen and (max-width: 768px) {
    .ai-quote-container {
        flex-direction: column; /* Stack elements vertically */
        text-align: center;
        padding: 30px;
        padding-left: 20px;
        padding-right: 20px;
    }

    .ai-quote-text {
        max-width: 100%; /* Full width */
    }

    .ai-quote-message {
        font-size: 18px;
    }

    .ai-quote-button {
        width: 100%; /* Full-width button for mobile */
        padding: 12px;
    }

    .ai-quote-image {
        margin-top: 20px; /* Add space between text and image */
    }
}

/* Small Mobile View (480px and below) */
@media screen and (max-width: 480px) {
    .ai-quote-message {
        font-size: 16px;
    }

    .ai-quote-button {
        font-size: 13px;
    }
}
        
        .use-case-section {
            /* max-width: 1200px; */
            margin: 50px auto;
            padding: 20px;
            text-align: left;
            width: 90%;
        }
        
        .use-case-section h2 {
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .use-case-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 10px;
            /* width: 20%; */
        }
        
        .use-case-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }
        
        .use-case-icon {
            font-size: 24px;
            color: #b5b5b5;
        }
        
        .use-case-content h3 {
            font-size: 2em;
            font-weight: bold;
            margin: 0 0 10px;
        }
        
        .use-case-content p {
            font-size: 1.5;
            color: #555;
            margin: 0;
        }
        
        .testimonials-section {
            padding: 50px;
            padding-left: 100px;
            border-bottom: 3px solid black;
        }
        
        .testimonials-section h2 {
            font-size: 3em;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .testimonials-container {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }
        
        .testimonial {
            width: 48%;
        }
        
        .testimonial img {
            max-width: 40%;
            height: auto;
            margin-bottom: 10px;
        }
        
        .testimonial p {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 10px;
        }
        
        .testimonial .author {
            font-weight: bold;
            margin-top: 10px;
        }
        
        .testimonial .role {
            font-size: 1em;
            color: #555;
        }
        /* ================================================================= */

        /* Responsive Design */

/* Tablet View (1024px and below) */
@media screen and (max-width: 1024px) {
    .testimonials-section {
        padding-left: 50px;
        padding-right: 50px;
    }

    .testimonials-container {
        gap: 15px;
    }

    .testimonial {
        width: 48%;
    }
}

/* Mobile View (768px and below) */
@media screen and (max-width: 768px) {
    .testimonials-section {
        padding-left: 20px;
        padding-right: 20px;
    }

    .testimonials-container {
        flex-direction: column; /* Stack testimonials vertically */
        align-items: center;
        gap: 20px;
    }

    .testimonial {
        width: 100%;
    }

    .testimonial img {
        max-width: 30%; /* Adjust image size for mobile */
    }
}

/* Small Mobile View (480px and below) */
@media screen and (max-width: 480px) {
    .testimonials-section h2 {
        font-size: 28px;
    }

    .testimonial p {
        font-size: 14px;
    }

    .testimonial img {
        max-width: 50px;
    }
}
        .resources-section {
            /* text-align: center; */
            padding: 40px 20px;
            background-color: #FBF9F8;
        }
        
        .resources-section h2 {
            font-size: 44px;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .resources-links {
            display: flex;
            justify-content: center;
            gap: 100px;
            font-size: 16px;
        }
        
        .resources-links a {
            text-decoration: none;
            color: #0073b1;
        }
        
        .resources-links a:hover {
            text-decoration: underline;
        }
        
/* Responsive Design */

/* Tablet View (1024px and below) */
@media screen and (max-width: 1024px) {
    .resources-section h2 {
        font-size: 36px;
    }

    .resources-links {
        gap: 50px; 
    }
}

/* Mobile View (768px and below) */
@media screen and (max-width: 768px) {
    .resources-links {
        flex-direction: column; 
        align-items: center;
        gap: 20px; 
        text-align: center;
    }
}

/* Small Mobile View (480px and below) */
@media screen and (max-width: 480px) {
    .resources-section h2 {
        font-size: 28px;
    }

    .resources-links {
        font-size: 14px;
        gap: 15px;
    }
}

    
    </style>


    <div class="background-graphic">
        <div class="wrapper">
            <div class="heading">Generative AI Agents</div>
            <div class="line"></div>
            <div class="text">
            Generative AI agents are advanced AI systems that autonomously create content, generate responses, and make decisions based on vast datasets. They enhance customer interactions, automate tasks, and drive innovation across industries. From chatbots to AI-powered assistants, these agents improve efficiency, personalize experiences, and optimize workflows. Businesses leverage them for content creation, data analysis, and problem-solving, transforming operations with intelligent, adaptive, and scalable AI-driven solutions.
            </div>
            <a href="Ai_servicees.php" class="cta-button">Speak to an AI expert</a>
        </div>
        <div class="video-section-1">
            <img src="../image/ai1.webp" alt="Generative AI Video Thumbnail">
        </div>
    </div>

    <div class="cards-wrapper">
        <div class="card-item">
            <img src="../image/ag1.jpeg" alt="AI Use Cases">
            <h3 class="card-title">Generative AI use cases</h3>
            <p class="card-description">Discover more ways your organization can use AI, with use cases for finance, retail, and many other industries.</p>
          
        </div>

        <div class="card-item">
            <img src="../image/ag2.jpeg" alt="Oracle AI Strategy">
            <h3 class="card-title">Oracle’s generative AI strategy</h3>
            <p class="card-description">Many vendors are trying to move quickly with generative AI, but no one is addressing the specific, end-to-end needs of enterprise customers.</p>
           
        </div>

        <div class="card-item">
            <img src="../image/ag3.jpeg" alt="OCI Generative AI RAG">
            <h3 class="card-title">OCI Generative AI RAG Agent general availability</h3>
            <p class="card-description">With support for Oracle Database 23ai, OCI Generative AI RAG Agent empowers developers to easily bring AI to their enterprise knowledge bases.</p>
        
        </div>
    </div>

    <div class="wrapper-1">
        <h2 class="heading-title">Why use OCI Generative AI?</h2>
        <div class="highlight-bar"></div>
        <div class="grid-container">
            <div class="grid-item">
                <h3>Choice of models for enterprise use cases</h3>
                <p>Access pretrained, foundational models from our AI partners to summarize, embed, and generate text.</p>
            </div>
            <div class="grid-item">
                <h3>Flexible fine-tuning</h3>
                <p>CCreate custom models by fine-tuning base models with your own data set. Build new custom models or create new versions of existing custom models.</p>
            </div>
            <div class="grid-item">
                <h3>Content moderation and controls</h3>
                <p>Create endpoints for custom or pretrained models with autonomy to update, move, or delete as needed.</p>
            </div>
            <div class="grid-item">
                <h3>Dedicated AI clusters</h3>
                <p>Manage compute resources to fine-tune custom models or host endpoints for custom models. Clusters aren’t shared with users in other tenancies.</p>
            </div>
        </div>
    </div>
    <section class="ai-quote-container">
        <div class="ai-quote-text">
            <p class="ai-quote-message">
                Learn about the efficiency architecture of OCI Generative AI Agents</p>
            <p class="ai-quote-author">Discover the efficiency architecture of OCI Generative AI Agents, designed for scalability, flexibility, and performance. Built on Oracle Cloud Infrastructure, these AI agents leverage high-performance computing, optimized AI models, and secure data processing to automate tasks, generate insights, and enhance decision-making. With seamless integration, cost efficiency, and enterprise-grade security, OCI Generative AI Agents empower businesses to streamline operations, boost productivity, and drive innovation across industries.</p>
            <a href="blog.php" class="ai-quote-button">Read the blog post</a>
        </div>
        <div class="ai-quote-image">
            <img src="../image/abg.avif" alt="Oracle AI Stack">
        </div>
    </section>
    <div class="use-case-section">
        <h2>Use cases for generative AI</h2>
        <div class="use-case-container">

            <div class="use-case-card">
                <div class="use-case-icon">🏦</div>
                <div class="use-case-content">
                    <h3>Financial services</h3>
                    <p>Using LLMs, financial firms can analyze news to refine investments, compose reports, perform risk analysis, and detect fraudulent activity.</p>
                </div>
            </div>

            <div class="use-case-card">
                <div class="use-case-icon">💼</div>
                <div class="use-case-content">
                    <h3>HR</h3>
                    <p>Create job descriptions, screen candidates, personalize onboarding, generate career plans, and assist with performance evaluations.</p>
                </div>
            </div>

            <div class="use-case-card">
                <div class="use-case-icon">🛍️</div>
                <div class="use-case-content">
                    <h3>Retail</h3>
                    <p>Improve customer service with chatbots, write product descriptions, and automate personalized messages and rewards.</p>
                </div>
            </div>

            <div class="use-case-card">
                <div class="use-case-icon">📊</div>
                <div class="use-case-content">
                    <h3>Marketing</h3>
                    <p>Gather market analyses, automate blog writing, generate logos, create branded content, and predict customer churn.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="testimonials-section">
        <h2>What customers are saying about OCI Generative AI Agents</h2>
        <div class="testimonials-container">
            <div class="testimonial">
                <img src="../image/aglo.svg" alt="TPX Impact">
                <p>“The beta launch of Oracle’s Generative AI Agents RAG service is a game changer. We can’t wait to showcase this innovation to our clients across industries. Implementing RAG is vital for enabling faster and smarter access to data and knowledge.”</p>
                <p class="author">Antony Heljula</p>
                <p class="role">Technology Director, TPXimpact</p>
            </div>
            <div class="testimonial">
                <img src="../image/aglo1.svg" alt="Abu Dhabi Media Network">
                <p>“By accessing a wider range of information and diverse perspectives, retrieval-augmented generation (RAG) can help generate more creative and coherent outputs. Customer service organizations can now leverage Oracle RAG to unlock a new
                    level of efficiency.”</p>
                <p class="author">Imran Azhar Sheikh</p>
                <p class="role">Head of Artificial Intelligence, Abu Dhabi Media Network</p>
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
    </div>
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
             
            </div>
            <div class="right-panel">
                <div class="box-a">
                    <h3>Welcome to Bistro AI: Create an AI-powered recipe generator</h3>
                    <p>With the help of generative AI, you'll provide a list of ingredients to a pretrained recipe generator to decide what to make.</p>
             
                </div>
                <div class="box-a">
                    <h3>Speed up data science with the Accelerated Data Science SDK</h3>
                    <p>Explore concepts in OCI Data Science to improve workflow efficiency and become more productive.</p>
              
                </div>
                <div class="box-a">
                    <h3>Build the perfect digital assistant for your business</h3>
                    <p>Explore how to work with multiple chatbots and digital assistants in Oracle Digital Assistant.</p>
                  
                </div>
                <div class="box-a">
                    <h3>The beginner’s guide to building custom language AI modelsGuide to custom AI models</h3>
                    <p>Discover how to automate sophisticated text analysis at scale without machine learning expertise..</p>
                    
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
        function openPage(url) {
            window.location.href = url;
        }


        // tab

        document.addEventListener("DOMContentLoaded", function() {
            const tabs = document.querySelectorAll(".anc-tab");
            const contents = document.querySelectorAll(".anc-tab-content");

            tabs.forEach((tab, index) => {
                tab.addEventListener("click", function() {
                    // Remove active class from all tabs and contents
                    tabs.forEach(t => t.classList.remove("anc-active"));
                    contents.forEach(c => c.classList.remove("anc-active"));

                    // Add active class to the clicked tab and corresponding content
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