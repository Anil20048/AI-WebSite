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
            /* width: 100%; */
            height: auto;
            display: flex;
            background-color: #FDF3E4;
        }
        
        .wrapper {
            /* margin: 0px auto; */
            padding: 20px;
            justify-content: left;
            text-align: left;
            padding-left: 80px;
        }
        
        .heading {
            font-size: 32px;
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
            width: 100%;
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

        /* Responsive Design */
@media (max-width: 1024px) {
    .wrapper {
       width: 70%;
    }

    .heading {
        font-size: 28px;
    }

    .text {
        font-size: 14px;
    }
}

@media (max-width: 768px) {
    .wrapper {
        padding-left: 20px;
    }

    .heading {
        font-size: 24px;
        text-align: left;
    }

    .line {
       
    }

    .text {
        text-align: center;
    }

    .cta-button {
        display: block;
        text-align: center;
        margin: 20px auto;
        width: fit-content;
    }
}

@media (max-width: 480px) {
    .wrapper {
        text-align: left;
        margin: 10px;
    }

    .heading {
        font-size: 20px;
        
    }

    .text {
        font-size: 14px;
        width: 350px;
        text-align: left;
    }

    .cta-button {
        padding: 8px 20px;
        text-align: left;
    }
}
        
        .wrapper-1 {
            display: flex;
            justify-content: center;
            gap: 20px;
            /* width: 100%; */
            margin: auto;
            padding: 30px 50px;
        }
        
        .box-cont {
            display: block;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
           
        }
        
        .box-cont img {
            /* width: 50%; */
            /* height: 120px; */
            object-fit: cover;
        }
        
        .details {
            padding: 15px;
        }
        
        h3 {
            margin-top: 0;
            font-size: 2em;
        }
        p{
            font-size: 1.5em;
        }
        
        .action-btn {
            display: inline-block;
            background-color: black;
            color: white;
            padding: 10px 15px;
            border: 1px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        
        .action-btn:hover {
            background-color: #333;
        }

        /* Responsive Design */
@media (max-width: 1024px) {
    .wrapper-1 {
        gap: 15px;
        padding: 20px 30px;
    }
    
    .box-cont {
        max-width: 280px;
    }
    
    .box-cont img {
        height: 160px;
    }
}

@media (max-width: 768px) {
    .wrapper-1 {
        width: 100%;
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    .box-cont {
        width: 90%; 
        max-width: 350px;
    }
}

@media (max-width: 480px) {
    .wrapper-1 {
        padding: 15px;
        text-align: center;
    }

    .box-cont {
        width: 100%;
    }

    .box-cont img {
        height: 140px;
    }

    h3 {
        font-size: 1.5em;
    }
    p{
        font-size: 1em;
    }

    .action-btn {
        padding: 8px 12px;
        font-size: 14px;
        width: 70%;
    }
}
        /* tab */
        
        .anil {
            display: flex;
            width: 96%;
            margin-left: 50px;
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
            background: #716f6b;
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
            font-size: 2em;
            /* margin-bottom: 10px; */
        }
        
        .text-box p {
            font-size: 1.5em;
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
            /* max-width: 100%; */
            height: auto;
            border-radius: 10px;
            right: 0;
        }

        

  /* Responsive Design */
/* @media screen and (max-width: 1024px) {
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
@media screen and (max-width: 480px) {
    .sidebar button {
        width: 100%;
    }

    .text-box h2 {
        font-size: 2em;
    }

    .text-box p {
        font-size: 1.5em;
    }
} */
   /* 📱 Tablet View (1024px and below) */
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

/* 📱 Mobile View (768px and below) */
@media screen and (max-width: 768px) {
    .anil {
        flex-direction: column;
        width: 100%;
        margin-left: 0;
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

/* 📱 Small Mobile View (480px and below) */
@media screen and (max-width: 480px) {
    .sidebar button {
        width: 100%;
    }

    .text-box h2 {
        font-size: 1.8em;
    }

    .text-box p {
        font-size: 1.3em;
    }

    .action-button {
        padding: 8px 12px;
        font-size: 1em;
    }
}     
        .main-wrapper {
            display: flex;
            margin-top: 50px;EBD;
            padding: 20px;
            background: #F5D
            border-radius: 10px;
            width: 100%;
           /
        }
        
        .visual-container {
            flex: 1;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .visual-container img {
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }
        
        .content-container {
            flex: 1;
            padding-top: 50px;
            width: 60%;
        }
        
        .content-container h2 {
            color: #333;
            font-size: 2em;
        }
        
        .content-container p {
            color: #666;
            font-size: 1.5em;
        }
        
        .button-group {
            margin-top: 20px;
            width: 100%;
            display: flex;
        }
        
        .button-group a {
            display: inline-block;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
        }
        
        .primary-btn {
            background-color: black;
            color: white;
        }
        
        .secondary-btn {
            border: 2px solid black;
            color: black;
        }



/* Responsive Design */
@media (max-width: 1024px) {
    .main-wrapper {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .visual-container,
    .content-container {
        width: 100%;
        padding: 20px;
    }

    .content-container {
        padding-top: 30px;
    }

    .button-group {
        justify-content: center;
    }

    .button-group a {
        margin: 5px;
    }
}

@media (max-width: 768px) {
    .content-container h2 {
        font-size: 20px;
    }

    .content-container p {
        font-size: 14px;
    }

    .button-group {
        flex-direction: column;
        align-items: center;
    }

    .button-group a {
        width: 80%;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .content-container h2 {
        font-size: 2em;
        text-align: left;
    }

    .content-container p {
        font-size: 1em;
    }

    .button-group a {
        width: 100%;
        padding: 8px 12px;
    }
}
        
        .wrapper-2 {
            margin: 50px auto;
            padding: 20px;
            background: #FBF9F8;
            width: 100%;
        }
        
        .heading-title {
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 10px;
            color: #000;
            padding-left: 100px;
        }
        
        /* .highlight-bar {
            width: 60px;
            height: 4px;
            background: #e0c070;
            margin-bottom: 20px;
            margin-left: 100px;
        }
         */
        .grid-container {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            padding-left: 100px;
            
        }
        
        .grid-item {
            flex: 1;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 30%;
        }
        
        .grid-item h3 {
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .grid-item p {
            font-size: 1.5em;
            color: #444;
        }/* Responsive Design */
@media (max-width: 1024px) {
    .heading-title,
    .highlight-bar,
    .grid-container {
        padding-left: 50px;
    }

    .grid-container {
        gap: 15px;
    }
}

@media (max-width: 768px) {
    .heading-title,
    .highlight-bar {
        padding-left: 20px;
        text-align: center;
    }

    .highlight-bar {
        margin-left: auto;
        margin-right: auto;
    }

    .grid-container {
        flex-direction: column;
        align-items: center;
        padding-left: 0;
    }

    .grid-item {
        width: 90%;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .heading-title {
        font-size: 2em;
    }

    .grid-item {
        width: 100%;
        padding: 15px;
    }

    .grid-item h3 {
        font-size: 1.6em;
    }

    .grid-item p {
        font-size: 1em;
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
            font-size: 24px;
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
        align-items: center;
        padding: 40px;
        padding-left: 50px;
        text-align: center;
    }

    .ai-quote-text {
        max-width: 100%;
    }

    .ai-quote-image {
        width: 80%;
        margin-top: 20px;
    }
}

@media (max-width: 768px) {
    .ai-quote-container {
        padding: 30px;
        padding-left: 20px;
    }

    .ai-quote-message {
        font-size: 20px;
    }

    .ai-quote-symbol {
        font-size: 36px;
    }

    .ai-quote-image {
        width: 100%;
    }
}

@media (max-width: 480px) {
    .ai-quote-container {
        padding: 20px;
        text-align: center;
    }

    .ai-quote-message {
        font-size: 18px;
    }

    .ai-quote-symbol {
        font-size: 32px;
    }

    .ai-quote-button {
        width: 100%;
        padding: 8px;
    }

    .ai-quote-image {
        width: 100%;
    }
}
    </style>


    <div class="background-graphic">
        <div class="wrapper">
            <div class="heading">AI Services</div>
            <div class="line"></div>
            <div class="text">
                AI services are a collection of offerings, including generative AI, with prebuilt machine learning models that make it easier for developers to apply AI to applications and business operations. The models can be custom trained for more accurate business
                results. Teams within an organization can reuse the models, data sets, and data labels across services. The services let developers easily add machine learning to apps without slowing application development.
            </div>
        </div>
        <!-- <div class="img"> <img src="../image/asi.webp" alt=""></div> -->
    </div>

    <div class="wrapper-1">
        <div class="box-cont">
            <img src="../image/asi_img1.avif" alt="Business AI">
            <div class="details">
                <h3>Apply AI to your business challenges</h3>
                <p>Harness the power of AI to optimize operations, enhance customer experiences, and drive innovation. From automating tasks to uncovering deep insights, AI transforms business challenges into opportunities. Leverage AI-driven solutions for smarter decision-making, increased efficiency, and competitive advantage in today’s fast-paced digital world. Adapt, innovate, and lead with AI.</p>
            </div>
        </div>
        <div class="box-cont">
            <img src="../image/asi-img.avif" alt="OCI AI">
            <div class="details">
                <h3>OCI Generative AI is now available</h3>
                <p>OCI Generative AI is now available, bringing powerful, secure, and customizable AI capabilities to businesses. Leverage pre-trained and fine-tunable models for text, image, and code generation. Seamlessly integrate AI into applications, enhance automation, and drive innovation with Oracle Cloud’s enterprise-grade performance, scalability, and security. Unlock AI’s full potential today.</p>
            </div>
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
                        <p>Unlock the power of generative AI models equipped with advanced language comprehension for building the next generation of enterprise applications. Oracle Cloud Infrastructure (OCI) Generative AI is a fully managed service available
                            via API to seamlessly integrate these versatile language models into a wide range of use cases, including writing assistance, summarization, and chat.</p>
                        <a href="Generative_AI_Service.php" class="action-button">Explore OCI Generative AI</a>
                    </div>
                </div>
            </div>
            <div id="language" class="section">
                <div class="main-container">
                    <div class="text-box">
                        <h2>OCI Generative AI Agents</h2>
                        <p>The OCI Generative AI Agents service provides an agent type that combines the power of large language models (LLMs) and retrieval-augmented generation (RAG) with enterprise data, making it possible for users to easily query diverse
                            enterprise data sources. Users can access and understand up-to-date information through a chat interface and in the future direct the agent to take actions based on findings.</p>
                        <a href="Generative_AI_Service.php" class="action-button">Explore OCI Generative AI Agents</a>
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
                        <p>OCI Language is a cloud-based AI service for performing sophisticated text analysis at scale. Use this service to build intelligent applications by leveraging REST APIs and SDKs to process unstructured text for sentiment analysis,
                            entity recognition, translation, and more.</p>

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
                        <p>OCI Speech is an AI service that both transcribes speech to text and synthesizes speech from text. It applies automatic speech recognition technology to transform audio-based content to text in real time or asynchronously. Neural
                            network-based text to speech generates a natural-sounding voice based on text input. Developers can easily make API calls to integrate OCI Speech’s pretrained models into their applications. OCI Speech can be used for accurate,
                            text-normalized, time-stamped transcription or synthetic voice via the console and REST APIs as well as CLIs or SDKs. You can also use OCI Speech in an OCI Data Science notebook session. With OCI Speech, you can filter profanities,
                            get confidence scores for both single words and complete transcriptions, and more.

                        </p>
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
                        <p>OCI Vision is an AI service for performing deep-learning–based image analysis at scale. With prebuilt models available out of the box, developers can easily build image recognition and text recognition into their applications without
                            machine learning (ML) expertise. For industry-specific use cases, developers can automatically train custom vision models with their own data. These models can be used to detect visual anomalies in manufacturing, organize digital
                            media assets, and tag items in images to count products or shipments.

                        </p>
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
                        <p>OCI Document Understanding is an AI service that enables developers to extract text, tables, and other key data from document files through APIs and command line interface tools. With OCI Document Understanding, you can automate
                            tedious business processing tasks with prebuilt AI models and customize document extraction to fit your industry-specific needs..</p>
                        <a href="Digital_Assistant.php" class="action-button">Explore OCI Document Understanding</a>
                    </div>
                    <div class="image-box">
                        <img src="../image/asi7.avif" alt="OCI Language Interface">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="main-wrapper">
        <div class="visual-container">
            <img src="../image/asi-pic.svg" alt="AI Use Case Diagram">
        </div>
        <div class="content-container">
            <h2>AI use case Handle user tasks without human intervention</h2>
            <div class="line"></div>
            <p>AI-powered automation enables businesses to handle user tasks without human intervention, improving efficiency and accuracy. From customer support chatbots and virtual assistants to intelligent process automation and predictive analytics, AI streamlines workflows, reduces costs, and enhances user experiences. By leveraging machine learning and natural language processing, AI systems can understand requests, make decisions, and execute actions autonomously, allowing businesses to scale operations, improve responsiveness, and drive innovation with minimal manual effort.</p>
            <div class="button-group">
                <a href="Digital_Assistant.php" class="primary-btn">See the Digital Assistant reference architecture</a>
                <a href="Data_Labeling.php" class="secondary-btn">Learn about Oracle Digital Assistant</a>
            </div>
        </div>
    </div>

    <div class="wrapper-2">
        <h2 class="heading-title">Why use OCI Generative AI?</h2>
        <!-- <div class="highlight-bar"></div> -->
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
            <div class="grid-item">
                <h3>Dedicated AI clusters</h3>
                <p>Manage compute resources to fine-tune custom models or host endpoints for custom models. Clusters aren’t shared with users in other tenancies.</p>
            </div>
        </div>
    </div>

    <section class="ai-quote-container">
        <div class="ai-quote-text">
            <p class="ai-quote-message">
                <span class="ai-quote-symbol">❝</span> By integrating generative AI across its Fusion SaaS applications, Oracle empowers businesses to unlock greater value from their data and workflows. This seamless AI infusion enhances productivity, automates routine tasks, and supports smarter decision-making across finance, HR, supply chain, and customer experience. Oracle’s strategy ensures that AI is not a separate tool but a core capability, delivering tangible business outcomes and a competitive edge for customers.
            </p>
      
           
        </div>
        <div class="ai-quote-image">
            <img src="../image/q12.avif" alt="Oracle AI Stack">
        </div>
    </section>

   
   

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