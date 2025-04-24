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
            margin-left: 5px;
        }
        
        .text-section p {
            font-size: 1.5em;
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
        padding: 30px;
    }

    .text-section {
        max-width: 100%;
        margin-bottom: 20px;
    }

    .text-section h1 {
        font-size: 1.8em;
        margin-left: 0;
    }
}

@media (max-width: 768px) {
    .cont {
        padding: 20px;
    }

    .text-section h1 {
        font-size: 1.6em;
    }

    .text-section p {
        font-size: 0.95em;
    }

    .video-section-1 img {
        width: 100%;
    }
}

@media (max-width: 480px) {
    .text-section h1 {
        font-size: 1.4em;
        /* margin-left: -140px; */
    }

    .text-section p {
        font-size: 0.9em;
    }

    .button {
        width: 100%;
        text-align: center;
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
        /* banner */
        
        .banner-3 {
            background-color: #CBE9D6;
            color: rgb(57, 57, 57);
            text-align: center;
            padding: 20px;
        }
        
        .banner-3 h2 {
            font-weight: bold;
            display: inline-block;
            margin-right: 20px;
        }
        
        .banner-3 p {
            font-size: 20px;
            color: #1b1919;
        }
        
        .banner-3 a {
            text-decoration: none;
            color: rgb(26, 22, 22);
            padding: 10px 20px;
            border: 2px solid rgb(45, 35, 35);
            border-radius: 5px;
            font-weight: bold;
        }
        
        .banner-3 a:hover {
            background-color: white;
            color: #5c7e86;
        }
        
        .cards-wrapper {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            /* padding-left: 150px; */
            background-color: #fff;
            width: 100%;
        }
        
        .card-item {
            width: 30%;
            background: #fff;
            /* border-radius: 8px; */
            padding: 15px;
            /* box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1); */
            text-align: left;
            border-right: 2px solid rgb(50, 53, 52);
        }
        
        .remove {
            border-right: none !important;
        }
        /* .card-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        } */
        
        
        .card-title {
            margin: 10px 0;
            font-size: 2em;
            font-weight: bold;
        }
        
        .card-description {
            font-size: 1.2em;
            color: #555;
        }
        
        .card-button {
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #222;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .card-button:hover {
            background-color: #444;
        }


        /* Responsive Design */
@media (max-width: 1024px) {
    .navigation-tabs {
        justify-content: center;
    }

    .cards-wrapper {
        flex-direction: column;
        align-items: center;
    }

    .card-item {
        width: 80%;
        border-right: none;
    }

    .banner-3 h2 {
        font-size: 24px;
    }

    .banner-3 p {
        font-size: 16px;
    }
}

@media (max-width: 768px) {
    .navigation-tabs {
        flex-direction: column;
        align-items: center;
    }

    .banner-3 {
        padding: 20px;
    }

    .card-item {
        width: 90%;
    }
}

@media (max-width: 480px) {
    .banner-3 h2 {
        font-size: 20px;
    }

    .banner-3 p {
        font-size: 14px;
    }

    .card-item {
        width: 100%;
    }

    .card-button {
        width: 100%;
        text-align: center;
    }
}
        /* Section Styles */
        
        .benefits-section {
            padding: 40px;
            background-color: #f5f5f5;
        }
         .cod h2{
        padding-left: 70px;
        font-size: 2em;
        }
        
        .underline-1 {
            width: 50px;
            height: 4px;
            background-color: #d4aa00;
            margin-left: 80px;
        }
        /* Card Container */
        
        .benefits-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
            flex-wrap: wrap;
        }
        /* Card Styles */
        
        .benefit-card {
            background: white;
            padding: 20px;
            width: 30%;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            text-align: left;
            transition: all 0.3s ease-in-out;
            border-bottom: 5px solid #2d6a4f;
        }
        /* Hover Effect */
        
        .benefit-card:hover {
            transform: translateY(-10px);
            border-bottom: 5px solid #ffcc00;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
        }
        
        h3 {
            font-size: 2em;
            font-weight: bold;
            color: #000;
        }
        
        p {
            font-size: 1.5;
            color: #333;
        }
        /* Responsive Design */
@media (max-width: 1024px) {
    .con h2 {
        padding-left: 0;
        text-align: center;
        font-size: 2em;
    }

    .benefits-container {
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
    }

    .benefit-card {
        width: 45%;
    }
}

@media (max-width: 768px) {
    .con h2 {
        font-size: 24px;
    }

    .benefit-card {
        width: 80%;
    }
}

@media (max-width: 480px) {
    .con h2 {
        font-size: 22px;
    }

    .benefit-card {
        width: 100%;
    }
}
        .info-section {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            margin: auto;
            width: 90%;
        }

        
        h2 {
            color: #000000;
            font-size: 2em;
        }
        
        p {
            line-height: 1.7;
            font-size: 1.5em;
        }

        
        .info-section a {
            color: #238e2a;
            text-decoration: none;
        }

        
        .info-section a:hover {
            text-decoration: underline;
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
@media (max-width: 1024px) {
    .info-section {
        width: 95%;
        padding: 30px;
    }

    h2 {
        font-size: 26px;
    }

    p {
        font-size: 15px;
    }
}

@media (max-width: 768px) {
    h2 {
        font-size: 24px;
    }

    .image-box-i img {
        width: 100%;
        border-radius: 5px;
    }
    p {
        font-size: 14px;
    }
}

@media (max-width: 480px) {
    .info-section {
        width: 100%;
        padding: 20px;
    }

    h2 {
        font-size: 22px;
    }

    p {
        font-size: 14px;
    }
}
        
        .testimonials-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            width: 100%;
            padding: 30px;
        }
        
        .testimonial {
            font-family: var(--oracleserif);
            justify-content: center;
            width: 46%;
            border-bottom: 4px solid green;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .testimonial img {
            width: 40%;
            height: 50px;
            margin: 20px 0;
            padding-left: 20px;
        }
        
        .testimonial p {
            font-size: 2em;
            color: #333;
            margin-bottom: 10px;
            padding-left: 20px;
        }
        
        .testimonial .author {
            font-weight: bold;
            margin-top: 10px;
        }
        
        .testimonial .role {
            font-size: 14px;
            color: #238c3a;
        }
        
        .card-button-1 {
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #070707;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
            margin-left: 22px;
        }
        
        .card-button-1:hover {
            background-color: #444;
        }
        
        .tab-container {
            display: flex;
            justify-content: left;
            gap: 10px;
            margin-bottom: 20px;
            margin-left: 70px;
        }

        /* Responsive Design */
@media (max-width: 1024px) {
    .testimonial {
        width: 48%;
    }

    .tab-container {
        margin-left: 30px;
    }
}

@media (max-width: 768px) {
    .testimonials-container {
        flex-direction: column;
        align-items: center;
    }

    .testimonial {
        width: 90%;
    }

    .tab-container {
        margin-left: 20px;
    }
}

@media (max-width: 480px) {
    .testimonial {
        width: 100%;
    }

    .card-button-1 {
        width: 80%;
        margin-left: 10px;
    }

    .tab-container {
        margin-left: 10px;
        flex-direction: column;
    }
}
        /* Tabs */
        
        .use h1 {
            padding-left: 70px;
        }
        /* Responsive Design */
@media (max-width: 1024px) {
    .use h1 {
        padding-left: 50px;
        font-size: 1.8em;
    }
}

@media (max-width: 768px) {
    .use h1 {
        padding-left: 30px;
        font-size: 1.6em;
    }
}

@media (max-width: 480px) {
    .use h1 {
        padding-left: 15px;
        font-size: 1.4em;
        text-align: center;
    }
}
        .anc-tabs {
            display: flex;
            justify-content: left;
            gap: 15px;
            margin-bottom: 20px;
            margin-left: 10px;
        }
        
        .anc-tab {
            padding: 12px 20px;
            background-color: #ddd;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            font-size: 16px;
            font-weight: bold;
        }
        
        .anc-tab:hover {
            background-color: #bbb;
            transform: scale(1.05);
        }
        
        .anc-active {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }
        /* Tab Content */
        
        .anc-tab-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          
        }
        
        .anc-tab-content.anc-active {
            display: block;
            padding: 45px;
        }
        /* Content */
        
        .a-content h2 {
            color: #333;
            font-size: 2em;
            margin-bottom: 10px;
            margin-left: 15px;
        }
        
        .a-content p {
            font-size: 1.5em;
            color: #555;
            padding-left: 17px;
        }
        
        .a-content button {
            background-color: #0f0f10;
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            margin-left: 15px;
        }
        
        .a-content button:hover {
            background-color: #0e5172;
        }
        
        .ai-img {
            justify-self: center;
            padding: 20px 0;
        }

        .ai-img {
            text-align: center;
            width: 100%;
            overflow: hidden;
            height:auto;
        }
        
        .ai-img img{
       
            height: auto;
            border-radius: 10px;
            right: 0;
        }
        /* Responsive Adjustments */
@media (max-width: 1024px) {
    .anc-tabs {
        justify-content: center;
    }
    
    .anc-tab {
        padding: 10px 15px;
        font-size: 14px;
    }

    .anc-tab-content {
        padding: 30px;
    }
}

@media (max-width: 768px) {
    .anc-tabs {
        flex-direction: column;
        align-items: self-start;
    }
    
    .anc-tab {
        width: 90%;
        text-align: center;
    }

    .anc-tab-content {
        padding: 20px;
    }
}

@media (max-width: 480px) {
    .anc-tab {
        font-size: 2em;
        padding: 8px 1px;
    }

    .ai-img img {
        width: 100%;
        border-radius: 5px;
    }

    .anc-tab-content {
        padding: 15px;
    }
}
        .container-colum {
            
            text-align: center;
            background: #FBF9F8;
        }
        
        .container-colum h1 {
            margin-top: 20px;
            font-size: 32px;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .content-ani {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            text-align: center;
            padding-top: 20px;
        }
        
        .column {
            padding: 10px;
        }
        
        .column h3 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        
        .column a {
            display: block;
            font-size: 14px;
            color: #0056b3;
            text-decoration: none;
            margin-bottom: 10px;
        }
        
        .column a:hover {
            text-decoration: underline;
        }
        
        .divider {
            border-left: 1px solid #ddd;
            padding-left: 20px;
        }

      /* Responsive Design */
@media (max-width: 1024px) {
    .content-ani {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .content-ani {
        grid-template-columns: 1fr;
    }

    .column {
        width: 80%;
        margin: auto;
    }
}

@media (max-width: 480px) {
    .container-colum h1 {
        font-size: 24px;
    }

    .column {
        width: 100%;
        padding: 15px;
    }

    .column h3 {
        font-size: 16px;
    }

    .column a {
        font-size: 13px;
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
    </style>

    <div class="cont">
        <div class="text-section">
            <h1>Digital Assistant</h1>
            <div class="underline"></div>
            <p>A Digital Assistant is an AI-powered tool that automates tasks, answers queries, and enhances user experiences through voice or text interactions. Using machine learning and natural language processing, it understands commands, provides recommendations, and streamlines workflows. From scheduling meetings to handling customer support, Digital Assistants boost productivity, reduce manual effort, and enable seamless interactions across devices, making business and personal tasks more efficient, responsive, and intelligent.</p>
        </div>
        <div class="video-section-1">
            <img src="../image/dig1.webp" alt="Generative AI Video Thumbnail">
        </div>
    </div>

    <!-- tab -->

    <div class="navigation-tabs">
        <div class="navigation-tab" onclick="openPage('overview2.php')">Overview</div>
        <div class="navigation-tab" onclick="openPage('features2.php')">Features</div>
        <div class="navigation-tab" onclick="openPage('price.php')">Pricing</div>
        <div class="navigation-tab" onclick="openPage('faq2.php')">FAQ</div>
        <!-- <div class="navigation-tab" onclick="openPage('product_tour.php')">Product Tour</div> -->
    </div>
    <!-- banner -->
    <div class="banner-3">
        <h2>Check out the new Oracle Digital Assistant SQL Dialog
        </h2>
        <p>Translate a user's natural language input into SQL queries to interact with your database using AI-powered conversations. There's no need to predefine intents, utterances, entities, or dialog flows or create custom components for backend connectivity.</p>
        <a href="speech.php">View our customer highlights</a>
    </div>


    <div class="cards-wrapper">
        <div class="card-item">
            <!-- <img src="image1.jpg" alt="AI Use Cases"> -->
            <h3 class="card-title">Shorter agent handle times and smooth handovers at Office Depot</h3>
            <p class="card-description">Watch how we achieved containment rates of 15% to 19%, shortened agents’ handle times, facilitated smooth handovers to live agents when required, and monitored customers’ intents to enable machine learning (ML) and analytics, together with
                enhanced UI design and flexibility.</p>
    
        </div>

        <div class="card-item">
            <!-- <img src="image2.jpg" alt="Oracle AI Strategy"> -->
            <h3 class="card-title">ECHO achieves 400% ROI with 70% call deflection</h3>
            <p class="card-description">Watch this on-demand webcast to discover how ECHO realized an 70% call deflection rate answering customers’ questions with Oracle Digital Assistant. ECHO has seen exponential growth in return-on-investment savings, resolving an increasing
                number of chats without the use of live agents.</p>
          
        </div>

        <div class="card-item remove">
            <!-- <img src="image3.jpg" alt="OCI Generative AI RAG"> -->
            <h3 class="card-title">Next-generation natural language processing (NLP) in Oracle Digital Assistant</h3>
            <p class="card-description">Learn about the next-generation NLP differentiators in Oracle Digital Assistant, including combining the use of proprietary and open source contextual embeddings, advanced deep-learning architectures, efficient utilization of the CPU and graphics
                processing unit (GPU), and multilingual and cross-lingual usage with few-shot and zero-shot learning.</p>
       
        </div>
    </div>

    <section class="benefits-section">
        <div class="cod">
        <h2>Code Assist benefits</h2>  
        </div> 
        <div class="underline-1"></div>

        <div class="benefits-container">
            <div class="benefit-card">
                <h3>Advanced natural language understanding (NLU)s </h3>
                <p>Patented deep learning algorithms understand a user’s natural conversation, derive intent and context, and build memory from user behaviors in multiple languages.

                </p>
            </div>

            <div class="benefit-card">
                <h3>One assistant for all applications</h3>
                <p>Businesses can connect applications and consolidate conversations into a single unified interface. Simple tools can help developers create custom skills.</p>
            </div>

            <div class="benefit-card">
                <h3>Prebuilt skills and templates</h3>
                <p>Ramp up fast with a library of common interactions and integrations with your current Oracle applications.</p>
            </div>
        </div>
    </section>

    <div class="info-section">
        <h2>How Digital Assistant works</h2>
        <p>
            Digital Assistant is a platform for creating conversational interfaces or chatbots. A chatbot is a computer program that simulates and processes human conversation (written or spoken), allowing humans to interact with applications and data as if they
            were communicating with a real person.
        </p>
        <p>
            Developers assemble digital assistants from one or more skills. Skills can be based on prebuilt skills provided by Oracle or third parties, custom developed, or based on one of the many skill templates available. Digital Assistant routes the user’s request
            to the most appropriate skill to satisfy the user’s request. Skills combine a multilingual NLP deep learning engine, a powerful dialogue flow engine, and integration components to connect to back-end systems. Skills provide a modular way to
            build out your chatbot’s functionality. Users connect with a chatbot through channels such as Microsoft Teams or Facebook or via a chat bubble on your website or embedded inside your mobile app.
        </p>
        <p>You can experience Digital Assistant for yourself by requesting a <a href="#">Free Trial</a> And <a href=""> following our hands-on tutorial.</a></p>
        <div class=" image-box-i">
        <img src="../image/dig2.avif" alt="">
        </div>
    </div>

    <div class="testimonials-container">
        <div class="testimonial">
            <img src="../image/dig3.svg" alt="TPX Impact">
            <p>“Oracle Digital Assistant allows enterprise organizations to significantly reduce internal and external interactions, enabling cloud-based, AI-driven efficiencies.”</p>
            <!-- <p class="author">Antony Heljula</p> -->
            <p class="role">Technology Director, TPXimpact</p>
           
        </div>
        <div class="testimonial">
            <img src="../image/dig4.svg" alt="Abu Dhabi Media Network">
            <p>“A differentiator for ODA is that a business process engine sits beneath it and is tightly integrated to perform tasks emerging from the conversation.”</p>
            <!-- <p class="author">Imran Azhar Sheikh</p> -->
            <p class="role">Head of Artificial Intelligence, Abu Dhabi Media Network</p>
        
        </div>
    </div>
   <div class="use">
   <h1>Use cases for Digital Assistant</h1>
   </div>
    

    <!-- Tabs -->
    <div class="anc-tabs">
        <div class="anc-tab anc-active" onclick="openTab(0)">Human Resources</div>
        <div class="anc-tab" onclick="openTab(1)">Customer Service</div>
        <div class="anc-tab" onclick="openTab(2)">Enterprise Resource Planning</div>
    </div>

    <!-- Tab Content -->
    <div class="anc-tab-content anc-active">
        <div class="a-content">
            <h2>Help your employees reach their full potential</h2>
            <p>Support key talent management processes and reduce administrative strain by proactively sending reminders for employees to complete goals and provide performance feedback. Managers can speak to the digital assistant to quickly review employee
                files, provide timely feedback, and add important notes to ensure fair performance reviews.</p>
        </div>
        <div class="ai-img">
            <img src="../image/ditab1.avif" alt="">
        </div>
    </div>
    <div class="anc-tab-content">
        <div class="a-content">
            <h2>Automate customer interactions and improve servicet</h2>
            <p>Simplify customer acquisition and retention with AI and natural language understanding. Based on profile and context, Digital Assistant automates tasks, such as informational queries and personalized recommendations, and access to knowledge
                bases. This gives both customers and internal sales teams seamless access to information and processes through text and voice.</p>
        </div>
        <div class="ai-img">
            <img src="../image/ditab2.avif" alt="">
        </div>
    </div>
    <div class="anc-tab-content">
        <div class="a-content">
            <h2>Conversational access to self-service processes</h2>
            <p>Gain improvements in expenses, logistics, projects, and enterprise performance management. Get work done faster with instant responses to questions, recommendations for next steps, and quick analysis of critical tasks. Access real-time information
                across applications and move the business forward.
            </p>
        </div>
        <div class="ai-img">
            <img src="../image/ditab3.avif" alt="">
        </div>
    </div>

    <!-- document -->


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