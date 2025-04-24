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
        .cont {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            background-color: #FDF3E4;
            width: 100%;
            background: url(../image/b1.avif) center/cover no-repeat;
        }
        
        .text-section {
            max-width: 50%;
        }
        
        .text-section h1 {
            font-size: 2em;
            color: #222;
        }
        
        .text-section p {
            font-size: 1.5em;
            color: #444;
        }
        
      
        
        .video-section-1 img {
            width: 500px;
        }
        
        .underline {
            width: 50px;
            height: 3px;
            background-color: #ffcc00;
            margin-left: 0px;
        }
        /* ====================================================== */

        /* Responsive Design */

/* Tablet View (1024px and below) */
@media screen and (max-width: 1024px) {
    .cont {
        flex-direction: column; /* Stack items vertically */
        text-align: center;
        padding: 40px 30px;
    }

    .text-section {
        max-width: 100%;
    }

    .video-section-1 img {
        width: 80%;
    }
}

/* Mobile View (768px and below) */
@media screen and (max-width: 768px) {
    .text-section h1 {
        font-size: 1.8em;
    }

    .text-section p {
        font-size: 0.95em;
    }

    .button {
        width: 100%; /* Full-width button for mobile */
        text-align: center;
    }

    .video-section-1 img {
        width: 100%;
    }
}

/* Small Mobile View (480px and below) */
@media screen and (max-width: 480px) {
    .text-section h1 {
        font-size: 1.5em;
    text-align: left;
    padding-left: 40px;
    }

    .text-section p {
        font-size: 0.9em;
    }
    .underline {
        margin-left: 40px;
    }
    .cont {
        padding: 30px 20px;
    }
}
        .use-case-section {
            width: 90%;
            margin: 50px auto;
            padding: 20px;
            text-align: left;
        }
        
        .use-case-section h2 {
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .use-case-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .use-case-card {
            background: rgb(237, 236, 236);
            padding: 20px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }
        
        .use-case-icon {
            font-size: 24px;
            color: #b5b5b5;
        }
        
        .use-case-content h3 {
            font-size: 1.2em;
            font-weight: bold;
            margin: 0 0 10px;
        }
        
        .use-case-content p {
            font-size: 1em;
            color: #555;
            margin: 0;
        }
        
        .ai-quote-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #F5F4F2;
            color: #1c1b1b;
            padding: 50px;
            gap: 20px;
            padding-left: 100px;
        }
        
        .ai-quote-text {
            flex: 1;
            max-width: 600px;
        }
        
        .ai-quote-message {
            font-size: 2.5em;
            line-height: 1.5;
            color: #0e0d0d;
        }
        .ai-quote-author {
            /* font-weight: bold; */
            font-size: 1.3em;
            color: #0e0e0e;
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
        /* ========================================================== */
        /* Responsive Design */


@media screen and (max-width: 1024px) {
    .ai-quote-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 40px;
        padding-left: 0; 
    }

    .ai-quote-text {
        max-width: 90%;
    }

    .ai-quote-message {
        font-size: 22px;
    }

    .ai-quote-image img {
        width: 80%;
    }
}


@media screen and (max-width: 768px) {
    .ai-quote-message {
        font-size: 20px;
    }

    .ai-quote-button {
        width: 100%;
        text-align: center;
    }

    .ai-quote-image img {
        width: 100%;
    }
}


@media screen and (max-width: 480px) {
    .ai-quote-message {
        font-size: 18px;
    }

    .ai-quote-container {
        padding: 30px 15px;
    }
}
        .banner-2 {
            background-color: #B7D9C2;
            color: rgb(29, 29, 29);
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
            color: rgb(12, 12, 12);
            padding: 10px 20px;
            border: 2px solid rgb(28, 28, 28);
            border-radius: 5px;
            font-weight: bold;
        }
        
        .banner-2 a:hover {
            background-color: rgb(20, 20, 20);
            color: #5c7e86;
        }
       

        /* Responsive Design */


@media screen and (max-width: 1024px) {
    .banner-2 {
        flex-direction: column; 
        text-align: center;
        padding: 25px;
    }

    .banner-2 h2 {
        font-size: 22px;
        margin-bottom: 10px;
    }

    .banner-2 a {
        padding: 12px 25px;
    }
}

@media screen and (max-width: 768px) {
    .banner-2 {
        padding: 20px;
    }

    .banner-2 h2 {
        font-size: 20px;
    }

    .banner-2 a {
        width: 100%; 
        text-align: center;
        display: inline-block;
        padding: 12px;
    }
}


@media screen and (max-width: 480px) {
    .banner-2 {
        padding: 15px;
    }

    .banner-2 h2 {
        font-size: 18px;
    }

    .banner-2 a {
        font-size: 14px;
        padding: 10px;
        width: 100%;
    }
}
        
        .ai-con {
            width: 90%;
            text-align: left;
            color: #000;
            padding: 30px;
        }
        
        .ai-con h1 {
            font-size: 2em;
            padding-left: 80px;
        }
        
        .ai-con p {
            font-size: 1em;
            color: #000;
            padding-left: 80px;
        }
        
        .ai-con img {
            width: 100%;
            text-align: center;
            margin-left: 80px;
        }
        /* ================================================ */


        /* Responsive Design */


@media screen and (max-width: 1024px) {
    .ai-con {
        width: 95%;
        padding: 20px;
    }

    .ai-con h1,
    .ai-con p {
        padding-left: 40px; 
        font-size: 20px; 
    }
}

/* Mobile View (768px and below) */
@media screen and (max-width: 768px) {
    .ai-con {
        width: 100%;
        padding: 15px;
        text-align: center;
    }

    .ai-con h1,
    .ai-con p {
        padding-left: 0;
        text-align: center; 
        font-size: 18px;
    }
}

/* Small Mobile View (480px and below) */
@media screen and (max-width: 480px) {
    .ai-con {
        padding: 10px;
    }

    .ai-con h1 {
        font-size: 16px;
    }

    .ai-con p {
        font-size: 14px;
    }
}
        .anil {
            display: flex;
        }
        
        .sidebar {
            width: 14%;
            background: #f4f4f4;
        }
        
        .sidebar button {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: none;
            background: #2c2c2b;
            color: rgb(255, 255, 255);
            cursor: pointer;
            text-align: left;
        }
        
        .sidebar button:hover {
            background: #256f24;
        }
        
        .content-al {
            flex-grow: 1;
            /* padding: 20px; */
            width: 80%;
        }
        
        .section {
            display: none;
            padding-left: 20px;
        }
        
        .active {
            display: block;
        }
        
      
        
        .main-container {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            /* padding: 20px; */
        }
        
        .text-box {
            max-width: 50%;
            padding-left: 20px;
        }
        
        .text-box h2 {
            font-size: 24px;
           
        }
        
        .text-box p {
            font-size: 16px;
            margin-bottom: 15px;
        }
        
        .action-button {
            display: inline-block;
            padding: 10px 15px;
            background-color: black;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        
        .image-box {
            width: 50%;
            overflow: hidden;
            height: 600px;
        }
        
        .image-box img {
       
            height: auto;
            border-radius: 10px;
            right: 0;
        }
     

        /* Responsive Design */

/* Tablet View (1024px and below) */
@media screen and (max-width: 1024px) {
    .sidebar {
        width: 20%; 
    }

    .content-al {
        width: 75%;
    }

    .text-box {
        max-width: 100%;
    }

    .image-box {
        width: 100%;
        text-align: center;
    }
}

/* Mobile View (768px and below) */
@media screen and (max-width: 768px) {
    .anil {
        flex-direction: column;
    }

    .sidebar {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
       

    }

    .sidebar button {
        width: auto;
        margin: 5px;
    }

    .content-al {
        width: 100%;
    }

    .main-container {
        flex-direction: column;
        text-align: center;
    }

    .text-box {
        max-width: 100%;
        padding: 0;
    }

    .image-box {
        width: 100%;
        text-align: center;
    }
}

/* Small Mobile View (480px and below) */
@media screen and (max-width: 480px) {
    .sidebar button {
        width: 100%;
    }

    .text-box h2 {
        font-size: 20px;
    }

    .text-box p {
        font-size: 14px;
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
            width: 95%;
            
            margin: 100px 0;
            border-radius: 8px;
           
        }
        /* Heading */
        
        h1 {
            font-size: 32px;
            color: #222;
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
        
        .content-box {
            font-size: 15px;
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

        .image-box-i {
            width: 100%;
            overflow: hidden;
            height:auto;
        }
        
        .image-box-i img {
       
            height: auto;
            border-radius: 10px;
            right: 0;
        }
     
        
        .beg-center {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        /* Responsive Design */
@media (max-width: 1024px) {
    .wrapper-container {
        width: 90%;
        padding: 30px;
    }

    .menu-tabs {
        flex-wrap: wrap;
        justify-content: center;
    }

    .menu-item {
        font-size: 16px;
        padding-left: 10px;
    }
}

@media (max-width: 768px) {
    .wrapper-container {
        width: 95%;
        padding: 20px;
    }

    .background-cover {
        height: 40vh;
    }

    h1 {
        font-size: 28px;
    }

    .menu-tabs {
        flex-direction: column;
        align-items: center;
    }

    .menu-item {
        text-align: center;
        width: 100%;
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    .image-box-i img {
        width: 100%;
    }
}

@media (max-width: 480px) {
    .wrapper-container {
        width: 100%;
        padding: 15px;
    }

    .background-cover {
        height: 30vh;
    }

    h1 {
        font-size: 24px;
    }

    .primary-button {
        font-size: 14px;
        padding: 10px;
    }

    .image-box-i img {
        width: 100%;
        border-radius: 5px;
    }
}
        .banner-3 {
            background-color: #082930;
            color: white;
            text-align: center;
            padding: 20px;
        }
        
        .banner-3 h2 {
            font-weight: bold;
            display: inline-block;
            margin-right: 20px;
        }
        
        .banner-3 a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            border: 2px solid white;
            border-radius: 5px;
            font-weight: bold;
        }
        
        .banner-3 a:hover {
            background-color: white;
            color: #5c7e86;
        }
    </style>


    <div class="cont">
        <div class="text-section">
            <h1>AI infrastructure</h1>
            <div class="underline"></div>
            <p>Run the most demanding AI workloads faster, including generative AI, computer vision, and predictive analytics, anywhere in our distributed cloud. Use Oracle Cloud Infrastructure (OCI) Supercluster to scale up to 65,536 GPUs today and 131,072
                GPUs soon.*</p>
           
        </div>
        <div class="video-section-1">
            <img src="../image/aiin1.webp" alt="Generative AI Video Thumbnail">
        </div>
    </div>

    <div class="use-case-section">
        <h2>Use cases for generative AI</h2>
        <div class="use-case-container">

            <div class="use-case-card">
                <div class="use-case-icon">🏦</div>
                <div class="use-case-content">
                    <h3>Financial services</h3>
                    <p>Oracle Cloud Infrastructure supports financial services with secure, scalable solutions for data analytics, AI, and regulatory compliance. It enables real-time risk analysis, fraud detection, personalized customer experiences, and efficient operations. With built-in security, high availability, and integration capabilities, OCI empowers banks, insurers, and fintechs to innovate while maintaining strict data privacy and industry compliance standards.</p>
                </div>
            </div>

            <div class="use-case-card">
                <div class="use-case-icon">💼</div>
                <div class="use-case-content">
                    <h3>HR</h3>
                    <p>Leverage AI to create job descriptions, screen candidates efficiently, and personalize onboarding experiences. Generate tailored career development plans and support performance evaluations with data-driven insights. This streamlines HR processes, enhances employee engagement, and ensures talent management is aligned with organizational goals, improving productivity and retention across the workforce lifecycle.</p>
                </div>
            </div>

            <div class="use-case-card">
                <div class="use-case-icon">🛍️</div>
                <div class="use-case-content">
                    <h3>Retail</h3>
                    <p>Oracle Cloud empowers retail with AI-driven insights, personalized customer experiences, and efficient supply chain management. From demand forecasting to inventory optimization, it enhances decision-making and operational agility. Integrated tools support omnichannel strategies, improve customer engagement, and drive growth by delivering seamless, data-informed retail experiences across digital and physical channels..</p>
                </div>
            </div>
        </div>
    </div>

    <section class="ai-quote-container">
        <div class="ai-quote-image">
            <img src="../image/nav.jpg" alt="Oracle AI Stack">
        </div>
        <div class="ai-quote-text">
            <p class="ai-quote-message">
            OCI Supercluster with NVIDIA Blackwell and Hopper GPUs</p>
            <p class="ai-quote-author">OCI Superclusters with NVIDIA Blackwell and Hopper GPUs deliver cutting-edge performance for AI training, HPC, and large-scale simulations. These GPUs offer advanced compute capabilities, massive memory bandwidth, and energy-efficient architecture. Integrated with OCI’s high-speed networking and storage, they enable faster model training, real-time analytics, and transformative AI workloads—empowering enterprises to push the boundaries of innovation and intelligence.</p>
        
        </div>
    </section>


    <div class="ai-con">
        <h1>OCI AI infrastructure for all your needs</h1>
        <p>OCI AI infrastructure provides a powerful, flexible, and secure foundation for all your artificial intelligence needs. Built on high-performance computing with NVIDIA GPUs—including H100, A100, and the latest Blackwell—OCI supports everything from training massive models to running low-latency inference. With ultra-fast networking, high-throughput storage, and enterprise-grade security, it’s ideal for generative AI, machine learning, and data science workloads. OCI also offers prebuilt AI services, managed ML platforms, and integration with open-source frameworks, enabling developers and data scientists to build, train, and deploy models at scale. Whether you're a startup or a global enterprise, OCI’s AI infrastructure accelerates innovation, optimizes cost, and supports your AI journey end to end.</p>
        <div class="img">
            <img src="../image/ai in 4.avif" alt="image">

        </div>
    </div>

    <!-- tablec -->
    <div class="anil">
        <div class="sidebar">
            <div class="heading-ani">Benefit from AI</div>
            <div class="line-an"></div>
            <button onclick="showContent('ai')">OCI Generative AI</button>
            <button onclick="showContent('language')">OCI Generative AI Agents</button>
            <button onclick="showContent('language1')">OCI Digital Assistant</button>
            <button onclick="showContent('language2')">OCI Language</button>
            <button onclick="showContent('speech')">OCI Speech</button>
            <button onclick="showContent('speech1')">OCI Vision</button>
            <button onclick="showContent('vision')">OCI Document Understanding</button>
        </div>
        <div class="content-al">
            <div id="ai" class="section active">
                <div class="main-container">
                    <div class="text-box">
                        <h2>Generative AI for the enterprise</h2>
                        <p>Generative AI for the enterprise leverages advanced machine learning models to create content, automate processes, and enhance decision-making across business functions. It can generate text, code, images, and more, enabling applications in customer service, marketing, HR, and software development. Enterprises use generative AI to boost productivity, personalize user experiences, and accelerate innovation. With built-in governance, security, and data privacy controls, it ensures responsible AI adoption. Integration with existing workflows and tools makes deployment seamless, while fine-tuning with proprietary data enhances relevance and accuracy. Generative AI empowers businesses to work smarter, reduce costs, and deliver greater value at scale</p>
                        <a href="Generative_AI_Service.php" class="action-button">Explore OCI Generative AI</a>
                    </div>
                    <div class="image-box">
                    <img src="../image/asi4.avif" alt="OCI Language Interface">
                    </div>
                </div>
            </div>
            <div id="language" class="section">
                <div class="main-container">
                    <div class="text-box">
                        <h2>OCI Generative AI Agents</h2>
                        <p>OCI Generative AI Agents are advanced, prebuilt AI services in Oracle Cloud Infrastructure designed to automate complex business tasks through natural language interactions. These agents combine large language models (LLMs) with enterprise-specific data, tools, and workflows to deliver intelligent, conversational assistance. They can be integrated into applications like Oracle Fusion Cloud, customer support systems, or custom apps to handle tasks such as answering queries, executing transactions, and generating content. With built-in security, observability, and governance, OCI Generative AI Agents ensure safe and compliant usage in enterprise environments. They support multilingual capabilities, fine-tuning, and context-aware interactions, enabling personalized and efficient user experiences. By streamlining operations and enhancing productivity, these agents help organizations harness the full power of generative AI.</p>
                        <a href="Agrnts.php" class="action-button">Explore OCI Generative AI Agents</a>
                    </div>
                    <div class="image-box">
                    <img src="../image/asi3.avif" alt="OCI Language Interface">
                    </div>
                </div>
            </div>
            <div id="language1" class="section">
                <div class="main-container">
                    <div class="text-box">
                        <h2>Prebuilt, conversational chatbots</h2>
                        <p>Digital assistants are virtual devices that help users accomplish tasks through natural language conversations, without having to manage various apps and web sites. Each digital assistant contains a collection of specialized bots
                            that focus on specific types of tasks, such as tracking inventory, submitting time cards, creating expense reports, and checking sales forecast.</p>
                        <p>When a user engages with the assistant, it evaluates the user’s input and routes the conversation to and from the appropriate bots. Users can access Oracle Digital Assistant through a variety of channels, such as Facebook Messenger,
                            Slack, and mobile apps.</p>
                        <a href="Digital_Assistant.php" class="action-button">Explore Oracle Digital Assistant</a>
                    </div>
                    <div class="image-box">
                        <img src="../image/asi3.avif" alt="OCI Language Interface">
                    </div>
                </div>
            </div>
            <div id="language2" class="section">
                <div class="main-container">
                    <div class="text-box">
                        <h2>Text analysis at scale</h2>
                        <p>Prebuilt conversational chatbots are ready-to-deploy virtual assistants designed to streamline interactions across customer service, HR, sales, and more. These bots come with predefined skills, intents, and dialogues tailored for specific business functions, enabling rapid implementation without extensive coding. Integrated with enterprise systems like Oracle Cloud Applications, they automate tasks such as answering FAQs, processing requests, booking appointments, and guiding users through workflows. Built using natural language understanding (NLU), they support multi-language capabilities and deliver personalized, context-aware responses. These chatbots can be embedded across channels—web, mobile, messaging apps, and voice platforms—ensuring consistent user experiences. With analytics and easy customization, prebuilt chatbots enhance efficiency, reduce support costs, and improve user engagement while accelerating digital transformation across the enterprise.</p>

                        <a href="Language.php" class="action-button">Explore OCI Language</a>
                    </div>
                    <div class="image-box">
                        <img src="../image/asi4.avif" alt="OCI Language Interface">
                    </div>
                </div>
            </div>
            <div id="vision" class="section">
                <div class="main-container">
                    <div class="text-box">
                        <h2>Speech to text (STT) and text to speech (TTS)</h2>
                        <p>Speech-to-Text (STT) and Text-to-Speech (TTS) are AI-powered technologies that enable seamless interaction between spoken language and digital systems. STT converts spoken words into written text, supporting applications like real-time transcription, voice commands, and automated note-taking. It enhances accessibility, improves documentation, and enables voice-driven workflows. TTS, on the other hand, transforms written text into natural-sounding speech, ideal for virtual assistants, accessibility tools, and hands-free applications. Advanced neural models ensure high accuracy, clarity, and lifelike voice output. Both STT and TTS support multiple languages and dialects, enabling global communication. Integrated into enterprise platforms, they enhance user experience, accessibility, and efficiency across industries such as healthcare, customer service, education, and media by bridging the gap between voice and text.</p>
                        <a href="speech.php" class="action-button">Explore OCI Speech</a>
                    </div>
                    <div class="image-box">
                        <img src="../image/asi5.avif" alt="OCI Language Interface">
                    </div>
                </div>
            </div>
            <div id="speech" class="section">
                <div class="main-container">
                    <div class="text-box">
                        <h2>Image recognition</h2>
                        <p>Image recognition is a computer vision technology that identifies and classifies objects, people, text, scenes, or activities within digital images. Powered by deep learning and neural networks, it enables systems to interpret visual data much like humans. Common use cases include facial recognition, product identification, defect detection, and content moderation. In enterprises, it enhances automation, security, and data extraction from images. Integrated with cloud services, image recognition can scale across industries such as retail, manufacturing, healthcare, and logistics. With high accuracy and real-time processing capabilities, it enables smarter decision-making, improves operational efficiency, and supports innovative applications like augmented reality, visual search, and inventory monitoring—transforming how businesses analyze and respond to visual information.</p>
                        <a href="Vision.php" class="action-button">Explore OCI Vision</a>
                    </div>
                    <div class="image-box">
                        <img src="../image/asi6.avif" alt="OCI Language Interface">
                    </div>
                </div>
            </div>
            <div id="speech1" class="section">
                <div class="main-container">
                    <div class="text-box">
                        <h2>Extract data from documents</h2>
                        <p>Extracting data from documents involves using AI and machine learning to automatically identify, capture, and structure information from unstructured or semi-structured files such as PDFs, scanned images, forms, and invoices. This process leverages technologies like optical character recognition (OCR), natural language processing (NLP), and computer vision to recognize text, tables, key fields, and even handwriting. It enables organizations to digitize and streamline workflows by eliminating manual data entry, reducing errors, and accelerating processing times. Data can be extracted for use in databases, analytics, or business applications, supporting industries like finance, healthcare, legal, and logistics. Integrated with cloud platforms, document data extraction enhances automation, compliance, and operational efficiency while making valuable insights easily accessible from any document type.</p>
                        <a href="Learn_more.php" class="action-button">Explore OCI Document Understanding</a>
                    </div>
                    <div class="image-box">
                        <img src="../image/asi7.avif" alt="OCI Language Interface">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ai-quote-container">
        <div class="ai-quote-image">
            <img src="../image/div.avif" alt="Oracle AI Stack">
        </div>
        <div class="ai-quote-text">
            <p class="ai-quote-message">
         Zettascale OCI Superclusters</p>
            <p class="ai-quote-author">Zettascale OCI Superclusters are ultra-powerful cloud-based computing environments on Oracle Cloud Infrastructure, designed for massive-scale AI, scientific, and engineering workloads. Combining thousands of GPUs, low-latency networking, and high-speed storage, they deliver exceptional performance for training large AI models and running complex simulations. These superclusters enable innovation at scale, supporting workloads previously possible only with traditional supercomputers.</p>
        </div>
    </section>
    <!-- Background -->
    <div class="beg-center">
        <div class="background-cover"></div>

        <div class="wrapper-container">
            <h1>Get started with Oracle Digital Assistant</h1>

            <!-- Tabs -->
            <div class="menu-tabs">
                <div class="menu-item menu-active" onclick="changeTab('trial-section')">Deep learning training and inferencing</div>
                <div class="menu-item" onclick="changeTab('labs-section')">Fraud detection augmented by AI</div>
                <div class="menu-item" onclick="changeTab('support-section')">AI-based medical image analysis</div>
                <div class="menu-item" onclick="changeTab('support-section-1')">Using AI to accelerate drug discovery</div>
            </div>

            <div class="content-sections">
                <!-- Free Trial Content -->
                <div class="content-box content-active" id="trial-section">
                    <h2>Train AI models on OCI bare metal instances powered by GPUs, RDMA cluster networking, and OCI Data Science.

                    </h2>
                    <div class="image-box-i">
                    <img src="../image/aiin5.avif" alt="">
                    </div>
                </div>

                <!-- LiveLabs Content -->
                <div class="content-box" id="labs-section">
                    <h2>Protecting the billions of financial transactions that happen every day requires enhanced AI tools that can analyze large amounts of historical customer data. AI models running on OCI Compute powered by NVIDIA GPUs along with model
                        management tools such as OCI Data Science and other open source models help financial institutions mitigate fraud.

                    </h2>
                    <div class="image-box-i">
                    <img src="../image/aiin6.avif" alt="">
                    </div>

                </div>

                <!-- Contact Us Content -->
                <div class="content-box" id="support-section">
                    <h2>AI is often used to analyze various types of medical images (such as X-rays and MRIs) in a hospital. Trained models can help prioritize cases that need immediate review by a radiologist and report conclusive results on others.</h2>
                    <img src="../image/aiin7.avif" alt="">

                </div>
                <div class="content-box" id="support-section-1">
                    <h2>Drug discovery is a time consuming and expensive process that can take many years and cost millions of dollars. By leveraging AI infrastructure and analytics, researchers can accelerate drug discovery. Additionally, OCI Compute powered
                        by NVIDIA GPUs along with AI workflow management tools such as BioNeMo enables customers to curate and preprocess their data.

                    </h2>
                    <div class="image-box-i">
                    <img src="../image/aiin8.avif" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showContent(sectionId) {
            let sections = document.querySelectorAll('.section');
            sections.forEach(section => section.classList.remove('active'));
            document.getElementById(sectionId).classList.add('active');
        }

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
            document.querySelectorAll('.menu-item').forEach(tab => {
                tab.classList.remove('menu-active');
            });
            document.querySelectorAll('.content-box').forEach(content => {
                content.classList.remove('content-active');
            });
            document.querySelector(`[onclick="changeTab('${tabId}')"]`).classList.add('menu-active');
            document.getElementById(tabId).classList.add('content-active');
        }
    </script>

    <script>
        function showContent(sectionId) {
            let sections = document.querySelectorAll('.section');
            sections.forEach(section => section.classList.remove('active'));
            document.getElementById(sectionId).classList.add('active');
        }
    </script>






     <!-------------footer include-->
     <?php include("footer.php"); ?>
</body>

</html>