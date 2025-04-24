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
            background: url(../image/m1.webp) center/cover no-repeat;
        }
        
        .text-section {
            max-width: 50%;
        }
        
        .text-section h1 {
            font-size: 2em;
            color: #222;
        }
        
        .text-section p {
            font-size: 1.3em;
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
            /* border-radius: 10px; */
        }
        
        .underline-a {
            width: 50px;
            height: 3px;
            background-color: #ffcc00;
            margin-left: 7px;
        }
        
/* Responsive Design */
@media (max-width: 1024px) {
    .cont {
        flex-direction: column;
        text-align: center;
        padding: 30px;
    }

    .text-section {
        max-width: 80%;
    }

    .video-section-1 img {
        width: 80%;
    }
}

@media (max-width: 768px) {
    .text-section {
        max-width: 100%;
    }

    .video-section-1 img {
        width: 100%;
    }

    .button {
        width: 100%;
        padding: 12px;
    }
}
        .cards-wrapper-1 {
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
            border-radius: 8px;
            /* padding: 15px; */
            /* box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1); */
            text-align: left;
        }
        
        .card-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        
        .card-title {
            margin: 10px 0;
            font-size: 2em;
            font-weight: bold;
        }
        
        .card-description {
            font-size: 1.2;
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
    .card-item {
        width: 45%;
    }
}

@media (max-width: 768px) {
    .cards-wrapper-1 {
        flex-direction: column;
        align-items: center;
    }

    .card-item {
        width: 80%;
    }
}

@media (max-width: 480px) {
    .card-item {
        width: 100%;
    }
}
        .container-ai {
            width: 90%;
            margin: auto;
            padding: 40px 0;
        }
        
        h2 {
            text-align: left;
            font-size: 32px;
            color: #000;
            margin-bottom: 20px;
            /* border-left: 4px solid #F4C542; */
            padding-left: 10px;
        }
        
        .features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }
        
        .feature {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }
        
        .feature img {
            width: 24px;
            height: 24px;
            margin-top: 5px;
        }
        
        .feature h3 {
            font-size: 2em;
            margin: 0;
            color: #000;
        }
        
        .feature p {
            font-size: 1.2em;
            color: #666;
            margin-top: 5px;
        }
        
        .contact-box {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: white;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }
        
        .contact-box img {
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }
        /* ----------------- Responsive Styles ----------------- */

/* Tablet: 2 columns */
@media screen and (max-width: 1024px) {
    .features {
        grid-template-columns: repeat(2, 1fr);
    }

    h2 {
        font-size: 28px;
    }

    .feature h3 {
        font-size: 1.3rem;
    }

    .feature p {
        font-size: 0.95rem;
    }
}

/* Mobile: 1 column */
@media screen and (max-width: 768px) {
    .features {
        grid-template-columns: 1fr;
    }

    .container-ai {
        padding: 20px 0;
    }

    h2 {
        font-size: 24px;
    }

    .feature {
        flex-direction: column;
        align-items: flex-start;
    }

    .feature h3 {
        font-size: 1.2rem;
    }

    .feature p {
        font-size: 0.9rem;
    }

    .contact-box {
        bottom: 15px;
        right: 15px;
        font-size: 14px;
        padding: 8px 12px;
    }
}
        .benefits-section {
           width: 97%;
            /* background-color: #f5f5f5; */
            padding-left: 70px;
        }
        
        h2 {
            font-size: 2em;
            font-weight: bold;
            padding-left: 10px;
        }
        
        .underline {
            width: 50px;
            height: 4px;
            background-color: #d4aa00;
            margin-left: 20px;
        }
        /* Card Container */
        
        .benefits-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 10px;
            flex-wrap: wrap;
        }
        /* Card Styles */
        
        .benefit-card {
            background: white;
            padding: 20px;
            width: 32%;
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
        /* Responsive Breakpoints */
@media screen and (max-width: 1024px) {
    .benefit-card {
        width: 45%;
    }
}

@media screen and (max-width: 768px) {
    .benefits-section {
        padding-left: 20px;
    }
    .benefits-container {
        flex-direction: column;
    }
    .benefit-card {
        width: 100%;
    }

    h2 {
        font-size: 1.8em;
    }

    h3 {
        font-size: 1.3rem;
    }
}
        .main-container {
            width: 94%;
            margin: auto;
            padding: 20px 0;
        }
        
        .heading-title {
            font-size: 2em;
            padding-left: 40px;
        }
        
        .yellow-underline {
            width: 50px;
            height: 5px;
            background-color: #F4C542;
            margin: 10px 0 20px 40px;
        
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
            font-size: 1.5em;
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
        /* Responsive Design */
@media (max-width: 1024px) {
    .cards-wrapper {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .cards-wrapper {
        grid-template-columns: 1fr;
    }
    .heading-title {
        font-size: 28px;
    }
}

@media (max-width: 480px) {
    .main-container {
        width: 95%;
    }
    .heading-title {
        font-size: 24px;
        padding-left: 30px;
    }

    .yellow-underline{
        margin-left: 30px;
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
        padding-left: 50px;
        flex-wrap: wrap;
        text-align: center;
    }

    .ai-quote-text {
        max-width: 100%;
    }

    .ai-quote-image {
        width: 100%;
        justify-content: center;
    }

    .ai-quote-image img {
        max-width: 80%;
    }
}

@media (max-width: 768px) {
    .ai-quote-container {
        flex-direction: column;
        padding: 40px;
        text-align: center;
    }

    .ai-quote-image img {
        max-width: 90%;
    }

    .ai-quote-message {
        font-size: 20px;
    }
}

@media (max-width: 480px) {
    .ai-quote-container {
        padding: 20px;
    }

    .ai-quote-message {
        font-size: 18px;
    }

    .ai-quote-button {
        padding: 8px 15px;
        font-size: 12px;
    }

    .ai-quote-image img {
        max-width: 100%;
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
            <h1>Machine Learning Services</h1>
            <div class="underline-a"></div>
            <p>Access a full range of machine learning (ML) and generative AI innovations, including vector databases, fully integrated in Oracle’s data platforms. Work with in-database tools and algorithms to build, manage, and deploy ML models and get
                more accurate, contextually relevant answers from generative AI by combining large language models (LLMs) with your proprietary data.</p>
            <a href="Ai_Infrastructure.php" class="button">Speak to an AI expert</a>
        </div>
      
    </div>

    <div class="cards-wrapper-1">
        <div class="card-item">
            <h3 class="card-title">Generative AI use cases</h3>
            <p class="card-description">Generative AI creates content like text, images, music, and code. It powers chatbots, designs visuals, writes articles, generates marketing copy, creates virtual avatars, composes music, automates coding, and personalizes learning. Used in healthcare, entertainment, education, and business, it enhances creativity, automates workflows, simulates data, and transforms how humans interact with technology. It's creativity at scale.</p>
         
        </div>

        <div class="card-item">

            <h3 class="card-title">Oracle’s generative AI strategy</h3>
            <p class="card-description">​Oracle's generative AI strategy focuses on integrating AI across its cloud infrastructure and applications. Key initiatives include developing the OCI Supercluster for AI model training, partnering with Cohere to embed generative AI services into applications like ERP, HCM, SCM, and CX, and enhancing services such as Fusion Cloud CX with AI-driven features to improve customer service and operational efficiency. </p>
        </div>

        <div class="card-item">

            <h3 class="card-title">OCI Generative AI RAG Agent general availability</h3>
            <p class="card-description">​Oracle announced the general availability of its OCI Generative AI RAG Agent on September 25, 2024. This fully managed service combines large language models with retrieval-augmented generation (RAG) to enable users to interact with enterprise data through natural language. It supports applications such as call center optimization, legal research, revenue intelligence, and talent acquisition.</p>
        </div>
    </div>



    <div class="container-ai">
        <h2>AI and ML Features</h2>
        <div class="features">
            <div class="feature">
                <img src="../image/circle-check-regular.svg" alt="Check">
                <div>
                    <h3>Vector databases designed for AI</h3>
                    <p>Get the benefits of AI from your data. The integrated AI Vector Search in Oracle Database and Vector Store in HeatWave GenAI add capabilities to query business and semantic data easier and faster, with more accurate results.</p>
                </div>
            </div>
            <div class="feature">
                <img src="../image/circle-check-regular.svg" alt="Check">
                <div>
                    <h3>Open source libraries and frameworks</h3>
                    <p>Use open source libraries and frameworks from Python and R for data exploration, transformation, and visualization. These include pandas, Dask, NumPy, Plotly, Matplotlib, TensorFlow, Keras, and PyTorch..</p>
                </div>
            </div>
            <div class="feature">
                <img src="../image/circle-check-regular.svg" alt="Check">
                <div>
                    <h3>Easy access and deployment</h3>
                    <p>Oracle Database includes more than 30 high performance algorithms offering popular ML capabilities. HeatWave AutoML supports algorithms for anomaly detection, forecasting, classification, regression, and recommender system tasks.</p>
                </div>
            </div>
            <div class="feature">
                <img src="../image/circle-check-regular.svg" alt="Check">
                <div>
                    <h3>Query data using natural language</h3>
                    <p>Access data in multiple formats (including CSV, Excel, and JSON) from multiple sources (including object storage, Oracle Database, HeatWave MySQL, MongoDB, PostgreSQL, and Hadoop) in multiple locations. Quickly deploy models via REST
                        API or directly in the database for access by applications and business analysts.</p>
                </div>
            </div>
            <div class="feature">
                <img src="../image/circle-check-regular.svg" alt="Check">
                <div>
                    <h3>In-database optimized algorithms</h3>
                    <p>Interact with your SQL database using natural language prompts to help expert and nonexpert SQL users query the database. Autonomous Database Select AI lets users have a lifelike, natural language conversation with a broad range of
                        LLMs.
                    </p>
                </div>
            </div>
            <div class="feature">
                <img src="../image/circle-check-regular.svg" alt="Check">
                <div>
                    <h3>Support for multiple scripting languages</h3>
                    <p>Data scientists can develop applications with the most popular programming languages, including Python, R, and SQL. Organizations achieve better and faster results when data scientists have the flexibility to use the languages best
                        suited to particular tasks.</p>
                </div>
            </div>
        </div>
    </div>
    <section class="benefits-section">
        <h2>Why use machine learning and AI for Oracle data platforms?</h2>
        <div class="underline"></div>

        <div class="benefits-container">
            <div class="benefit-card">
                <h3>Create and validate models faster</h3>
                <p>Build models with an automated machine learning pipeline that includes algorithm selection, model training, feature selection, and hyperparameter optimization. Build, train, run, and explain ML models using a visual interface.</p>
            </div>

            <div class="benefit-card">
                <h3>Get better results with more data</h3>
                <p>Data scientists and analysts must access data in different formats from different sources that are on-premises or in the cloud. Simplify that access by using drag-and-drop data integration and preparation tools to move data into a data
                    lake or data warehouse.</p>
            </div>

            <div class="benefit-card">
                <h3>Benefit from seamless integration</h3>
                <p>Consistent architectures and deployment methods across Oracle AI services make it simpler to work across multiple services. Built-in AI options, including vector databases, help Oracle customers leverage the power of their data.</p>
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
                <span class="ai-quote-symbol">❝</span> By embedding generative AI into its Fusion SaaS applications, Oracle enhances user productivity, automates tasks, and improves decision-making. This integration delivers direct business value by streamlining operations, reducing costs, and enabling faster, data-driven insights across finance, HR, supply chain, and customer experience functions—all within the tools customers already use.
            </p>
            <p class="ai-quote-author">Dave Vellante, Chief Analyst, theCUBE Research
            </p>
           
        </div>
        <div class="ai-quote-image">
            <img src="../image/q12.avif" alt="Oracle AI Stack">
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
                    <div class=" image-box-i">
                    <img src="../image/aiin5.avif" alt="">
                    </div>
                </div>

                <!-- LiveLabs Content -->
                <div class="content-box" id="labs-section">
                    <h2>Protecting the billions of financial transactions that happen every day requires enhanced AI tools that can analyze large amounts of historical customer data. AI models running on OCI Compute powered by NVIDIA GPUs along with model
                        management tools such as OCI Data Science and other open source models help financial institutions mitigate fraud.

                    </h2>
                    <div class=" image-box-i">
                    <img src="../image/aiin6.avif" alt="">
                    </div>
                   

                </div>

                <!-- Contact Us Content -->
                <div class="content-box" id="support-section">
                    <h2>AI is often used to analyze various types of medical images (such as X-rays and MRIs) in a hospital. Trained models can help prioritize cases that need immediate review by a radiologist and report conclusive results on others.</h2>
                    <div class=" image-box-i">
                    <img src="../image/aiin7.avif" alt="">
                    </div>

                </div>
                <div class="content-box" id="support-section-1">
                    <h2>Drug discovery is a time consuming and expensive process that can take many years and cost millions of dollars. By leveraging AI infrastructure and analytics, researchers can accelerate drug discovery. Additionally, OCI Compute powered
                        by NVIDIA GPUs along with AI workflow management tools such as BioNeMo enables customers to curate and preprocess their data.

                    </h2>
                 <div class=" image-box-i">
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