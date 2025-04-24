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
    <!-- <style></style> -->
    <style>
        .content-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 40px;
            background: #FDF3E4;
        }
        
        .text-section {
            max-width: 50%;
        }
        
        .text-section h1 {
            font-size: 2em;
            color: #000;
        }
        
        .text-section p {
            font-size: 1.5em;
            color: #333;
            line-height: 1.6;
        }
        
        .highlight {
            width: 50px;
            height: 3px;
            background-color: #E6C17A;
            margin: 5px 0 20px 10px;
        }
        
        .image-section {
            max-width: 45%;
        }
        
        .image-section img {
            width: 100%;
            border-radius: 8px;
        }
        /* Responsive Design */
@media (max-width: 1024px) {
    /* Tablet View */
    .content-wrapper {
        padding: 30px;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .text-section,
    .image-section {
        max-width: 80%;
    }
}

@media (max-width: 768px) {
    /* Mobile View */
    .content-wrapper {
        padding: 20px;
    }

    .text-section {
        max-width: 100%;
        text-align: center;
    }

    .image-section {
        max-width: 100%;
    }

    .text-section h1 {
        font-size: 2em;
    }

    .text-section p {
        font-size: 1.5em;
    }

    .cta-button {
        padding: 10px 16px;
        font-size: 13px;
    }
}

@media (max-width: 480px) {
    /* Small Phones */
    .text-section h1 {
        font-size: 1.7;
        text-align: left;
    }

    .text-section p {
        font-size: 1.4;
    }

    .highlight {
        width: 40px;
        height: 2px;
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
        /* Responsive Design */
@media (max-width: 768px) {
    .navigation-tabs {
        flex-direction: column;
        align-items: center;
        padding: 10px;
    }

    .navigation-tab {
        width: 100%;
        text-align: center;
        padding: 12px;
        margin: 5px 0;
    }
}

@media (max-width: 480px) {
    .navigation-tab {
        font-size: 14px;
        padding: 10px;
    }
}
        .card-container {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }
        
        .info-card {
            width: 22%;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: left;
        }
        
        .info-card img {
            width: 100%;
            border-radius: 8px;
        }
        
        .info-card h3 {
            margin: 10px 0;
        }
        
        .info-card p {
            color: #666;
        }
        
        
/* Tablets (768px - 1024px) */
@media (max-width: 1024px) {
    .card-container {
        justify-content: center;
        gap: 15px;
    }

    .info-card {
        width: 45%; /* Ek row me 2 cards */
    }

    .info-card h3 {
        font-size: 1.3em;
    }

    .info-card p {
        font-size: 0.95em;
    }
}

/* Mobile Phones (≤767px) */
@media (max-width: 767px) {
    .card-container {
        flex-direction: column;
        align-items: self-start;
        padding: 10px;
    }

    .info-card {
        width: 90%; 
    }

    .info-card h3 {
        font-size: 1.2em;
    }

    .info-card p {
        font-size: 0.9em;
    }
}
        .wrapper {
          
            margin: 50px auto;
            padding: 20px;
            background: #FBF9F8;
            width: 100%;
        }
        
        .heading-title {
            font-size: 3em;
            font-weight: bold;
            margin-bottom: 10px;
            color: #000;
            text-align:left;
            padding-left: 50px;
        }
        
        .highlight-bar {
            width: 60px;
            height: 4px;
            background: #e0c070;
            margin-bottom: 20px;
            margin-left: 50px;
        }
        
        .grid-container {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            width: 98%;
            padding-left: 50px;
           
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
     /* Tablets (768px - 1024px) */
@media (max-width: 1024px) {
    .heading-title {
        font-size: 2.5em;
        padding-left: 30px;
    }

    .highlight-bar {
        margin-left: 30px;
    }

    .grid-container {
        flex-wrap: wrap;
        gap: 15px;
        padding-left: 30px;
    }

    .grid-item {
        flex: 1 1 48%; /* Ek row me 2 items */
    }

    .grid-item h3 {
        font-size: 1.8em;
    }

    .grid-item p {
        font-size: 1.3em;
    }
}

/* Mobile Phones (≤767px) */
@media (max-width: 767px) {
    .heading-title {
        font-size: 2em;
        text-align: center;
        padding-left: 0;
    }

    .highlight-bar {
        margin: 0 auto;
        margin-left: 70px;
    }

    .grid-container {
        flex-direction: column;
        align-items: center;
        padding-left: 0;
        gap: 10px;
    }

    .grid-item {
        width: 90%; /* Ek row me ek item */
    }

    .grid-item h3 {
        font-size: 1.5em;
    }

    .grid-item p {
        font-size: 1.2em;
    }
}
        .ai-container {
            width: 100%;
            text-align: center;
            padding: 20px;
           
        }

        .image-box-i {
            width: 100%;
            overflow: hidden;
            height:auto;
            text-align: center;
            margin: 30px 0;
        }
        
        .image-box-i img {
       
            height: auto;
            border-radius: 10px;
            right: 0;
        }
        /* Tablets (768px - 1024px) */
@media (max-width: 1024px) {
    .image-box-i img {
        width: 90%; /* Tablet screens par image thodi badi dikhe */
    }
}

/* Mobile Phones (≤767px) */
@media (max-width: 767px) {
    .ai-container {
        padding: 10px;
    }

    .image-box-i {
        margin: 20px 0;
    }

    .image-box-i img {
        width: 100%; /* Mobile par full-width image */
        border-radius: 5px;
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
        }
        
        .ai-quote-text {
            flex: 1;
            max-width: 600px;
        }
        
        .ai-quote-message {
            font-size: 2rem;
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
        
        /* Responsive Design */
@media (max-width: 1024px) {
    .ai-quote-container {
        flex-direction: column;
        text-align: center;
        padding: 30px;
    }

    .ai-quote-text {
        max-width: 100%;
        text-align: center;
    }

    .ai-quote-image {
        justify-content: center;
        margin-top: 20px;
    }
}

@media (max-width: 768px) {
    .ai-quote-container {
        padding: 20px;
    }

    .ai-quote-message {
        font-size: 20px;
    }

    .ai-quote-symbol {
        font-size: 30px;
    }

    
    .image-box-i img {
        width: 95%;
        border-radius: 5px;
    padding: 20px;
    }
}

@media (max-width: 480px) {
    .ai-quote-container {
        padding: 15px;
    }

    .ai-quote-message {
        font-size: 18px;
    }

    .ai-quote-symbol {
        font-size: 28px;
    }

    .ai-quote-button {
        padding: 8px 16px;
        font-size: 12px;
    }
}

        .ai-wrapper {
            display: flex;
            align-items: center;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 95%;
        }
        
        .ai-image-box {
            border-radius: 10px;
            cursor: pointer;
            width: 50%;
            text-align: center;
        }
        .ai-image-box img {
            width: 80%;
            height: 350px;
            border-radius: 10px;
        }
        .ai-text{
        text-align: left;
        padding: 50px;
        width: 50%;
        }
        .ai-text h2 {
            font-size: 2em;
            margin-bottom: 10px;
        }
        
        .ai-text p {
            font-size: 1.5em;
            color: #555;
            margin-bottom: 10px;
        } 
        

      /* Responsive Design */
@media (max-width: 1024px) {
    .ai-wrapper {
        flex-direction: column;
        text-align: center;
    }

    .ai-image-box, .ai-text {
        width: 100%;
    }

    .ai-text {
        padding: 30px;
    }

    .ai-text h2 {
        font-size: 1.8em;
    }

    .ai-text p {
        font-size: 1.3em;
    }
}

@media (max-width: 768px) {
    .ai-text {
        padding: 20px;
    }

    .ai-text h2 {
        font-size: 1.5em;
    }

    .ai-text p {
        font-size: 1.2em;
    }

    .ai-image-box img {
        width: 90%;
    }
}

@media (max-width: 480px) {
    .ai-text {
        padding: 15px;
    }

    .ai-text h2 {
        font-size: 1.3em;
    }

    .ai-text p {
        font-size: 1em;
    }

    .ai-image-box img {
        width: 100%;
    }
}

        .testimonial-section {
          width: 93%;
            margin: 50px auto;
            text-align: center;
        }
        
        .testimonial-section h2 {
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: left;
            padding-left: 20px;
        }
        
        .testimonial-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        
        .testimonial-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        
        .testimonial-card img {
            max-width: 100px;
            margin-bottom: 10px;
        }
        
        .testimonial-text {
            font-size: 1.5em;
            color: #555;
            margin-bottom: 15px;
        }
        
        .testimonial-author {
            font-weight: bold;
            font-size: 2em;
        }
        
        .testimonial-position {
            font-size: 1.5;
            color: #777;
        }
        /* Responsive Design */
@media (max-width: 1024px) {
    .testimonial-section h2 {
        font-size: 1.8em;
    }

    .testimonial-text {
        font-size: 1.2em;
    }

    .testimonial-author {
        font-size: 1.4em;
    }

    .testimonial-position {
        font-size: 1.1em;
    }
}

@media (max-width: 768px) {
    .testimonial-section {
        width: 95%;
    }

    .testimonial-section h2 {
        font-size: 1.6em;
        padding-left: 10px;
    }

    .testimonial-container {
        padding: 10px;
    }

    .testimonial-card {
        padding: 15px;
    }

    .testimonial-text {
        font-size: 1.1em;
    }

    .testimonial-author {
        font-size: 1.3em;
    }

    .testimonial-position {
        font-size: 1em;
    }
}

@media (max-width: 480px) {
    .testimonial-section h2 {
        font-size: 1.4em;
        padding-left: 5px;
    }

    .testimonial-container {
        gap: 15px;
        padding: 5px;
    }

    .testimonial-text {
        font-size: 1em;
    }

    .testimonial-author {
        font-size: 1.2em;
    }

    .testimonial-position {
        font-size: 0.9em;
    }
}
        .use-case-section {
          width: 95%;
            margin: 50px auto;
            padding: 20px;
            text-align: left;
        }
        
        .use-case-section h2 {
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .use-case-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 30px;
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
            font-size: 1.5em;
            color: #555;
            margin: 0;
        }

        /* Responsive Design */
@media (max-width: 1024px) {
    .use-case-section h2 {
        font-size: 1.8em;
    }

    .use-case-container {
        gap: 20px;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    }

    .use-case-content h3 {
        font-size: 1.8em;
    }

    .use-case-content p {
        font-size: 1.3em;
    }
}

@media (max-width: 768px) {
    .use-case-section {
        width: 98%;
    }

    .use-case-section h2 {
        font-size: 1.6em;
    }

    .use-case-container {
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    }

    .use-case-card {
        flex-direction: column;
        align-items: flex-start;
        padding: 15px;
    }

    .use-case-content h3 {
        font-size: 1.6em;
    }

    .use-case-content p {
        font-size: 1.2em;
    }
}

@media (max-width: 480px) {
    .use-case-section h2 {
        font-size: 1.4em;
    }

    .use-case-container {
        grid-template-columns: repeat(auto-fit, minmax(100%, 1fr));
    }

    .use-case-content h3 {
        font-size: 1.4em;
    }

    .use-case-content p {
        font-size: 1.1em;
    }
}
        /* taber */
    </style>

    <div class="content-wrapper">
        <div class="text-section">
            <h1>Generative AI Service</h1>
            <div class="highlight"></div>
            <p>Discover the power of generative AI models equipped with advanced language comprehension for building the next generation of enterprise applications. Oracle Cloud Infrastructure (OCI) Generative AI is a fully managed service for seamlessly
                integrating these versatile language models into a wide range of use cases, including writing assistance, summarization, analysis, and chat.</p>
        </div>
        <div class="image-section">
            <img src="../image/cap1.avif" alt="Generative AI Overview">
        </div>
    </div>



    <!-- tab -->

    <div class="navigation-tabs">
        <div class="navigation-tab" onclick="openPage('overview.php')">Overview</div>
        <div class="navigation-tab" onclick="openPage('features.php')">Features</div>
        <div class="navigation-tab" onclick="openPage('pricing.php')">Pricing</div>
        <div class="navigation-tab" onclick="openPage('faq.php')">FAQ</div>
        <div class="navigation-tab" onclick="openPage('product_tour.php')">Product Tour</div>
    </div>

    <div class="card-container">
        <div class="info-card">
            <img src="../image/-ai-use-cases.avif" alt="AI Use Cases">
            <h3>Generative AI Use Cases</h3>
            <p>Generative AI enhances content creation, automates customer support, personalizes marketing, improves code generation, streamlines drug discovery, assists in design, boosts chatbots, enhances data analysis, creates realistic images, and powers virtual assistants.</p>
           
        </div>
        <div class="info-card">
            <img src="../image/genai-trial.avif" alt="AI Solutions">
            <h3>Apply AI to your business challenges</h3>
            <p>AI optimizes business operations by automating tasks, enhancing data analysis, personalizing customer experiences, improving decision-making, detecting fraud, streamlining workflows, boosting productivity, enabling predictive insights, and driving innovation across industries for better efficiency and growth.</p>
          
        </div>
        <div class="info-card">
            <img src="../image/genai-free-trial.avif" alt="Oracle AI Trial">
            <h3>Try Oracle GenAI and get a free trial</h3>
            <p>Try Oracle GenAI with a free trial! Leverage powerful AI models for text, image, and code generation, automate workflows, enhance decision-making, and drive innovation with enterprise-grade security and scalability. Sign up today!</p>
            
        </div>
        <div class="info-card">
            <img src="../image/-ai-hype-curve.avif" alt="GenAI Trends">
            <h3>Learn about the future of GenAI: Beyond the hype curve</h3>
            <p>Explore the future of Generative AI beyond the hype. Discover real-world applications, enterprise impact, ethical considerations, and innovations shaping AI-driven automation, creativity, and decision-making for sustainable business transformation. Stay ahead today! </p>
       
        </div>
    </div>

    <div class="wrapper">
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
     <div class=" .ai-container " >
     <div class="image-box-i">
        <img src="../image/ai-diagram.avif" alt="">
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
    <section>
        <div class="ai-wrapper">
            <div class="ai-image-box">
                <img src="../image/hqdefault.jpg" alt="OCI Generative AI">
                <div class="ai-overlay"></div>
            </div>
            <div class="ai-text">
                <h2>Explore the OCI Generative AI cloud architecture</h2>
                <p>Watch Chief Technical Architect Pradeep Vincent walk through the OCI Generative AI cloud architecture, designed to bring flexible, efficient, and secure AI model customization to real-world applications. Discover how Oracle Cloud Infrastructure enables enterprises to scale AI workloads seamlessly, optimize costs, and enhance security while delivering high-performance AI solutions tailored to business needs. Learn how OCI empowers innovation with cutting-edge AI capabilities for various industries.</p>
            </div>
        </div>
    </section>


    <div class="testimonial-section">
        <h2>What customers are saying about OCI Generative AI</h2>
        <div class="testimonial-container">

            <!-- Testimonial 1 -->
            <div class="testimonial-card">
                <img src="../image/singlife-clr.svg" alt="Singlife">
                <p class="testimonial-text">
                    “In line with one of our values—innovation—we encourage Singlifers to come up with innovative solutions to everyday business problems using emerging technologies like generative artificial intelligence.”
                </p>
                <p class="testimonial-author">Varun Mittal</p>
                <p class="testimonial-position">Head of Innovation and Ecosystems, Singlife</p>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-card">
                <img src="../image/-idc-clr.svg" alt="IDC">
                <p class="testimonial-text">
                    “Oracle is bringing generative AI to where exabytes of customer data already reside, both in cloud data centers and on-premises environments, simplifying the process for organizations to deploy generative AI.”
                </p>
                <p class="testimonial-author">Ritu Jyoti</p>
                <p class="testimonial-position">VP, AI and Automation Research, IDC</p>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial-card">
                <img src="../image/intermedia-clr.svg" alt="Intermedia">
                <p class="testimonial-text">
                    “Being able to automate time-consuming activities using generative AI, like summarizing support tickets, means our support engineers can instead focus on increasing customer satisfaction and reducing time to results.”
                </p>
                <p class="testimonial-author">Urvashi Sheth</p>
                <p class="testimonial-position">Chief Customer Officer, Intermedia</p>
            </div>

            <!-- Testimonial 4 -->
            <div class="testimonial-card">
                <img src="../image/rc24-thecube-logo.avif" alt="theCUBE">
                <p class="testimonial-text">
                    “Oracle is taking a full stack approach to enterprise generative AI, offering integrated AI across its Fusion SaaS applications.”
                </p>
                <p class="testimonial-author">Dave Vellante</p>
                <p class="testimonial-position">Chief Analyst, theCUBE Research</p>
            </div>

        </div>
    </div>

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

            <div class="use-case-card">
                <div class="use-case-icon">💰</div>
                <div class="use-case-content">
                    <h3>Sales</h3>
                    <p>Create customer profiles, automate responses, and produce personalized training modules.</p>
                </div>
            </div>

            <div class="use-case-card">
                <div class="use-case-icon">💻</div>
                <div class="use-case-content">
                    <h3>Software development</h3>
                    <p>Generate code drafts, perform code correction, create IT architecture designs, and generate test cases.</p>
                </div>
            </div>

            <div class="use-case-card">
                <div class="use-case-icon">🏥</div>
                <div class="use-case-content">
                    <h3>Healthcare</h3>
                    <p>Automate administrative tasks, generate doctor discharge notes, and create personalized treatment plans.</p>
                </div>
            </div>

            <div class="use-case-card">
                <div class="use-case-icon">🎧</div>
                <div class="use-case-content">
                    <h3>Customer support</h3>
                    <p>Automate case summarization and provide instant, accurate answers via conversational AI chatbots.</p>
                </div>
            </div>

            <div class="use-case-card">
                <div class="use-case-icon">🏥</div>
                <div class="use-case-content">
                    <h3>Healthcare</h3>
                    <p>Automate administrative tasks, generate doctor discharge notes, and create personalized treatment plans.</p>
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
    </div>
    <!-- taber -->

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