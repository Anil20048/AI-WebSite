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
        .cont {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            background-color: #FDF3E4;
            width: 100%;
            background: url(../image/short.avif) center/cover no-repeat;
        }
        
        .text-section {
            max-width: 50%;

        }
        
        .text-section h1 {
            font-size: 2em !important;
            color: #222;
           
        }
        
        .text-section p {
            font-size: 1.5em !important;
            color: #444;
        }
        
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #000;
            color: #fff;
            text-decoration: none;
            margin-top: 20px;
            border-radius: 5px;
        }
        
        .video-section-1 img {
            width: 500px;
           
        }
        
        .underline {
            width: 50px;
            height: 3px;
            background-color: #ffcc00;
            
            margin-left: 10px;
        }
       /* Responsive Design */
@media (max-width: 1024px) {
    .cont {
        flex-direction: column;
        text-align: center;
        padding: 40px;
    }

    .text-section {
        max-width: 80%;
    }

    .text-section h1 {
        font-size: 1.8em;
    }

    .text-section p {
        font-size: 1.3em;
    }

    .button {
        padding: 12px 25px;
    }
}

@media (max-width: 768px) {
    .cont {
        padding: 30px;
    }

    .text-section {
        max-width: 100%;
    }

    .text-section h1 {
        font-size: 1.6em;
    }

    .text-section p {
        font-size: 1.2em;
    }

    .video-section-1 img {
        width: 100%;
    }
}

@media (max-width: 480px) {
    .text-section h1 {
        font-size: 1.4em;
    }

    .text-section p {
        font-size: 1.1em;
    }

    .button {
        width: 100%;
        text-align: center;
    }

    .underline {
        width: 40px;
    }
}        .banner-2 {
            background-color: #082930;
            color: white;
            text-align: center;
            padding: 20px;
        }
        
        .banner-2 h2 {
            font-weight: bold;
            display: inline-block;
            margin-right: 20px;
        }
        
        .banner-2 a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            border: 2px solid white;
            border-radius: 5px;
            font-weight: bold;
        }
        
        .banner-2 a:hover {
            background-color: white;
            color: #5c7e86;
        }
        
/* Tablet (768px - 1024px) */
@media (max-width: 1024px) {
    .banner-2 {
        flex-direction: column;
        padding: 25px;
    }

    .banner-2 h2 {
        font-size: 1.6em;
    }

    .banner-2 a {
        font-size: 0.95em;
        padding: 8px 18px;
    }
}

/* Mobile (Below 768px) */
@media (max-width: 768px) {
    .banner-2 {
        flex-direction: column;
        padding: 20px;
    }

    .banner-2 h2 {
        font-size: 1.4em;
        margin-bottom: 10px;
    }

    .banner-2 a {
        font-size: 0.9em;
        padding: 8px 15px;
    }
}
       
        .wrapper {
            display: flex;
            /* justify-content: space-between; */
            gap: 20px;
            width: 100%;
            margin: auto;
            padding: 40px 60px;
            flex-wrap: wrap; 
        }

        .box-cont {
            display: flex;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 48%; 
        }

        .box-cont img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .details {
            padding: 15px;
            text-align: left;
        }

        h3 {
            font-size: 1.4em !important; 
            margin-bottom: 10px;
        }

        p {
            font-size: 1em !important;
            color: #555;
        }

       /* Tablets (768px se kam width par) */
@media (max-width: 768px) {
    .wrapper {
        padding: 20px;
    }

    .box-cont {
        width: 100%; 
        flex-direction: column; 
        text-align: center;
    }

    .box-cont img {
        height: 180px; 
    }

    h3 {
        font-size: 20px;
    }

    p {
        font-size: 14px;
    }
}

/* Mobile Phones (480px se kam width par) */
@media (max-width: 480px) {
    .wrapper {
        padding: 10px;
    }

    .box-cont {
        width: 100%;
        flex-direction: column;
    }

    .box-cont img {
        height: 160px;
    }

    h3 {
        font-size: 18px;
    }

    p {
        font-size: 13px;
    }
}
       
        .ai-section { 
           width: 88%;
            margin: auto;
            text-align: left;
        }
        
        .ai-title {
            font-size: 3em;
            font-weight: bold;
            margin: 30px 0;
            color: green;
        }
        
     
        
        .ai-features {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        
        .feature {
            flex: 1;
            max-width: 25%;
        }
        
        h3 {
            font-size: 2em;
            font-weight: bold;
        }
        
        p {
            font-size: 1.5em;
            color: #333;
        }
/* Tablets (768px - 1024px) */
@media (max-width: 1024px) {
    .ai-section {
        width: 95%;
        text-align: center;
    }

    .ai-features {
        flex-wrap: wrap; /* Cards neeche aa jayenge */
        gap: 15px;
        justify-content: center;
    }

    .feature {
        max-width: 45%; 
    }

    h3 {
        font-size: 1.8em;
    }

    p {
        font-size: 1em;
    }
}


@media (max-width: 767px) {
    .ai-section {
        width: 100%;
        padding: 0 10px;
        text-align: center;
    }

    .ai-features {
        flex-direction: column;
        gap: 10px;
    }

    .feature {
        max-width: 100%; 
    }

    h3 {
        font-size: 1.6em;
    }

    p {
        font-size: 0.95em;
    }
}
        .quote-section {
           width: 90%;
            margin: auto;
            text-align: left;
        }
        
        .quote-title {
            font-size: 3em;
            font-weight: bold;
          margin: 30px 0;
            color: green;
        }
        
        .quote-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 20px 10px;
        }
        
        .quote-card {
            flex: 1;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 32%;
        }
        
        .company-logo {
            width: 120px;
            margin-bottom: 15px;
        }
        
        .quote-text {
            font-size: 1.5em;
            color: #333;
            line-height: 1.5;
        }
        
        .quote-author {
            font-size: 16px;
            margin-top: 15px;
        }
        
        .quote-position {
            font-size: 1em;
            color: #666;
        }
        /* Tablet (768px - 1024px) */
@media (max-width: 1024px) {
    .quote-container {
        justify-content: center;
    }

    .quote-card {
        max-width: 48%; 
    }
}

/* Mobile (Below 768px) */
@media (max-width: 768px) {
    .quote-container {
        flex-direction: column;
        align-items: center;
    }

    .quote-card {
        max-width: 100%; 
    }
}
        .main-container {
            width: 90%;
            margin: auto;
            padding: 20px 0;
        }
        
        .heading-title {
            font-size: 2.5em;
        }
        
        .yellow-underline {
            width: 50px;
            height: 5px;
            background-color: #F4C542;
            margin: 10px 0 20px 10px;
        }
        
        .cards-wrapper {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        
        .info-card {
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: none;
        }
        
        .card-heading {
            font-size: 2em;
            font-weight: bold;
            color: #000;
        }
        
        .card-divider {
            width: 100%;
            height: 3px;
            background-color: black;
            margin: 5px 0 10px 0;
        }
        
        .blue-line {
            background-color: #000000;
        }
        
        .primary-card {
            color: #0077A7;
        }
      
@media (max-width: 1024px) {
    .cards-wrapper {
        grid-template-columns: repeat(2, 1fr); 
    }
}


@media (max-width: 768px) {
    .cards-wrapper {
        grid-template-columns: repeat(1, 1fr); 
    }
}
        .ai-quote-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #312D2A;
            color: #ffffff;
            padding: 50px;
            gap: 20px;
            padding-left: 100px;
            margin-bottom: 30px;
        }
        
        .ai-quote-text {
            flex: 1;
            max-width: 600px;
        }
        
        .ai-quote-message {
            font-size: 2rem !important;
            line-height: 1.5;
            color: #F7BFB8;
        }
        
        .ai-quote-symbol {
            font-size: 40px;
            font-weight: bold;
            color: #F7BFB8;
        }
        
        .ai-quote-author {
            font-weight: bold;
            color: #fff;
            margin-top: 10px;
        }
        
        .ai-quote-button {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            background-color: #fff;
            color: #181818;
            font-size: 14px;
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
        }
        
        .ai-quote-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
      
 /* Tablet (768px - 1024px) */
@media (max-width: 1024px) {
    .ai-quote-container {
        flex-direction: column;
        text-align: center;
        padding: 40px;
        padding-left: 40px;
    }

    .ai-quote-text {
        max-width: 100%;
    }

    .ai-quote-image {
        margin-top: 20px;
    }
}

/* Mobile (Below 768px) */
@media (max-width: 768px) {
    .ai-quote-container {
        padding: 30px;
        padding-left: 20px;
    }

    .ai-quote-message {
        font-size: 20px;
    }

    .ai-quote-symbol {
        font-size: 30px;
    }

    .ai-quote-button {
        width: 100%;
    }
}

    </style>
    <!-- section start -->

    <div class="cont">
        <div class="text-section">
            <h1>Generative AI capabilities</h1>
            <div class="underline"></div>
            <p>Enter a new era of productivity with generative AI capabilities built for business. Innovate with your choice of open source or proprietary large language models (LLMs). Leverage AI embedded as you need it across the full stack—apps, infrastructure,
                and more.</p>
            <a href="Ai_servicees.php" class="button">Speak to an AI expert</a>
        </div>
        <div class="video-section-1">
            <img src="../image/012.avif" alt="Generative AI Video Thumbnail">
        </div>
    </div>
    <!-- banner -->
    <div class="banner-2">
        <h2>Learn how AI can boost your business at an Oracle Data and AI </h2>
        <a href="read1.php">Read more</a>
    </div>
    <div class="wrapper">
        <div class="box-cont">
            <img src="../image/img1.avif" alt="Business AI">
            <div class="details">
                <h3>Apply AI to your business challenges</h3>
                <p>AI can optimize business operations by automating repetitive tasks, enhancing data analysis, personalizing customer experiences, and improving decision-making.</p>
              
            </div>
        </div>
        
        <div class="box-cont">
            <img src="../image/img2.avif" alt="OCI AI">
            <div class="details">
                <h3>OCI Generative AI is now available</h3>
                <p>Oracle Cloud Infrastructure (OCI) Generative AI is now available, enabling businesses to build and deploy AI-powered applications securely. Leverage advanced models for text, image, and code generation, all optimized for enterprise needs.</p>
            </div>
        </div>
    </div>
    <section class="ai-section">
        <h2 class="ai-title">Why generative AI with Oracle?</h2>
        <div class="ai-features">
            <div class="feature">
                <h3>Your choice of models as you need them</h3>
                <p>Access proprietary or open-source generative LLMs as suited for your needs, with high performance and low cost.</p>
            </div>
            <div class="feature">
                <h3>Embedded AI across the full stack</h3>
                <p>Use generative AI as managed services for your custom applications, with the data already in our data platform or integrated within Oracle Cloud Applications.</p>
            </div>
            <div class="feature">
                <h3>Enterprise-grade security and privacy</h3>
                <p>Prioritize data management, security, and governance with Oracle in the cloud and on-premises—essential for enterprises.</p>
            </div>
            <div class="feature">
                <h3>Predictable performance and pricing</h3>
                <p>Gain trusted performance and transparent pricing with our Oracle Cloud Infrastructure (OCI) Supercluster technology for AI.</p>
            </div>
        </div>
    </section>

    <section class="quote-section">
        <h2 class="quote-title">Customer and analyst quotes</h2>
        <div class="quote-container">
            <div class="quote-card">
                <img src="../image/ge1.svg" alt="Singlife Logo" class="company-logo">
                <p class="quote-text">
                    “In line with one of our values—innovation—we encourage Singlifers to come up with innovative solutions to everyday business problems using emerging technologies like generative artificial intelligence. Singlife collaborated with Oracle and OCI to develop
                    proof of concepts for our internal competition, the #BetterIdea Challenge. These solutions cut across different domains, ranging from chatbot and document analysis to AI-assisted recommendations.”
                </p>
                <p class="quote-author"><strong>Varun Mittal</strong></p>
                <p class="quote-position">Head of Innovation and Ecosystems, Singlife</p>
            </div>

            <div class="quote-card">
                <img src="../image/ge.svg" alt="Intermedia Logo" class="company-logo">
                <p class="quote-text">
                    “Customer experience is the biggest cost center in any organization. With dozens of support engineers answering hundreds of chats per day, being able to automate time-consuming activities using generative AI, like summarizing support tickets, means our
                    support engineers can instead spend those thousands of hours per year focused on increasing customer satisfaction and reducing time to results.”
                </p>
                <p class="quote-author"><strong>Urvashi Sheth</strong></p>
                <p class="quote-position">Chief Customer Officer, Intermedia</p>
            </div>

            <div class="quote-card">
                <img src="../image/ge3.svg" alt="IDC Logo" class="company-logo">
                <p class="quote-text">
                    “With a common architecture for generative AI that is being integrated across the Oracle ecosystem from its Autonomous Database to Fusion SaaS applications, Oracle is bringing generative AI to where exabytes of customer data already reside, both in cloud
                    data centers and on-premises environments. This greatly simplifies the process for organizations to deploy generative AI with their existing business operations.”
                </p>
                <p class="quote-author"><strong>Ritu Jyoti</strong></p>
                <p class="quote-position">Group Vice President, Worldwide Artificial Intelligence and Automation Research Practice, and Global AI Research Lead, IDC</p>
            </div>
        </div>
    </section>
    <section class="quote-section">
      
        <div class="quote-container">
            <div class="quote-card">
                <img src="../image/ge4.avif" alt="Singlife Logo" class="company-logo">
                <p class="quote-text">
                    “In line with one of our values—innovation—we encourage Singlifers to come up with innovative solutions to everyday business problems using emerging technologies like generative artificial intelligence. Singlife collaborated with Oracle and OCI to develop
                    proof of concepts for our internal competition, the #BetterIdea Challenge. These solutions cut across different domains, ranging from chatbot and document analysis to AI-assisted recommendations.”
                </p>
                <p class="quote-author"><strong>Varun Mittal</strong></p>
                <p class="quote-position">Head of Innovation and Ecosystems, Singlife</p>
            </div>

            <div class="quote-card">
                <img src="../image/ge5.svg" alt="Intermedia Logo" class="company-logo">
                <p class="quote-text">
                    “Customer experience is the biggest cost center in any organization. With dozens of support engineers answering hundreds of chats per day, being able to automate time-consuming activities using generative AI, like summarizing support tickets, means our
                    support engineers can instead spend those thousands of hours per year focused on increasing customer satisfaction and reducing time to results.”
                </p>
                <p class="quote-author"><strong>Urvashi Sheth</strong></p>
                <p class="quote-position">Chief Customer Officer, Intermedia</p>
            </div>

            <div class="quote-card">
                <img src="../image/ge6.svg" alt="IDC Logo" class="company-logo">
                <p class="quote-text">
                    “With a common architecture for generative AI that is being integrated across the Oracle ecosystem from its Autonomous Database to Fusion SaaS applications, Oracle is bringing generative AI to where exabytes of customer data already reside, both in cloud
                    data centers and on-premises environments. This greatly simplifies the process for organizations to deploy generative AI with their existing business operations.”
                </p>
                <p class="quote-author"><strong>Ritu Jyoti</strong></p>
                <p class="quote-position">Group Vice President, Worldwide Artificial Intelligence and Automation Research Practice, and Global AI Research Lead, IDC</p>
            </div>
        </div>
    </section>


    <div class="main-container">
        <h1 class="heading-title">Tools and Services for Generative AI</h1>
        <div class="yellow-underline"></div>

        <div class="cards-wrapper">
            <div class="info-card primary-card">
                <h2 class="card-heading">AI in Business Applications</h2>
                <div class="card-divider black-line"></div>
                <p class="card-description">Enhance business workflows with AI embedded in Oracle Cloud Applications. Achieve AI-driven results without altering existing apps or interfaces.</p>
            </div>

            <div class="info-card">
                <h2 class="card-heading">OCI AI Models</h2>
                <div class="card-divider"></div>
                <p class="card-description">Utilize Cohere and Meta foundational models in a managed environment. Fine-tune them as needed and access them via APIs for various use cases.</p>
            </div>

            <div class="info-card">
                <h2 class="card-heading">OCI AI Assistants</h2>
                <div class="card-divider"></div>
                <p class="card-description">Combine LLMs with retrieval-augmented generation (RAG) and enterprise data for accurate, up-to-date responses from diverse knowledge sources.</p>
            </div>

            <div class="info-card">
                <h2 class="card-heading">Oracle AI Code Companion</h2>
                <div class="card-divider"></div>
                <p class="card-description">Boost developer productivity with AI-driven code assistance for Java, SuiteScript, PL/SQL, and OCI-based application development.</p>
            </div>

            <div class="info-card">
                <h2 class="card-heading">OCI AI Labs</h2>
                <div class="card-divider"></div>
                <p class="card-description">Develop, train, and deploy custom LLMs using open-source libraries such as Hugging Face’s Transformers, PyTorch, and generative models from Meta or Mistral AI.</p>
            </div>

            <div class="info-card">
                <h2 class="card-heading">OCI AI Compute</h2>
                <div class="card-divider"></div>
                <p class="card-description">Leverage NVIDIA-powered bare metal instances and high-performance computing for large-scale AI model training and customization.</p>
            </div>
            <div class="info-card">
                <h2 class="card-heading">OCI AI Labs</h2>
                <div class="card-divider"></div>
                <p class="card-description">Develop, train, and deploy custom LLMs using open-source libraries such as Hugging Face’s Transformers, PyTorch, and generative models from Meta or Mistral AI.</p>
            </div>
            <div class="info-card">
                <h2 class="card-heading">OCI AI Labs</h2>
                <div class="card-divider"></div>
                <p class="card-description">Develop, train, and deploy custom LLMs using open-source libraries such as Hugging Face’s Transformers, PyTorch, and generative models from Meta or Mistral AI.</p>
            </div>
            <div class="info-card">
                <h2 class="card-heading">OCI AI Labs</h2>
                <div class="card-divider"></div>
                <p class="card-description">Develop, train, and deploy custom LLMs using open-source libraries such as Hugging Face’s Transformers, PyTorch, and generative models from Meta or Mistral AI.</p>
            </div>

        </div>
    </div>
    <section class="ai-quote-container">
        <div class="ai-quote-text">
            <p class="ai-quote-message">
                <span class="ai-quote-symbol">❝</span> At Oracle, we carefully thought through how an enterprise’s business processes could be enhanced with generative AI. We’ve created an end-to-end generative AI experience encompassing our entire stack.
            </p>
            <p class="ai-quote-author">Greg Pavlik, SVP, Oracle Cloud Infrastructure</p>
        </div>
        <div class="ai-quote-image">
            <img src="../image/q12.avif" alt="Oracle AI Stack">
        </div>
    </section>
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
    <script>
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


     <!-------------footer include-->
     <?php include("footer.php"); ?>
     </body>
     </html>