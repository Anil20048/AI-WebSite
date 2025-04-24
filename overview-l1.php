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
            color: #000;
        }
        
        .text-section p {
            color: #333;
            line-height: 1.6;
        }
        
        .highlight {
            width: 50px;
            height: 3px;
            background-color: #E6C17A;
            margin: 5px 0 20px 10px;
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

        .video-section-1 img {
            max-width: 90%;
            text-align: center;
            /* height: 300px; */
        }
        
        /* Responsive Design */
@media screen and (max-width: 1024px) {
    .content-wrapper {
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 30px;
    }

    .text-section {
        max-width: 100%;
    }

    .image-section {
        max-width: 100%;
    }

    .text-section h1 {
        font-size: 2em;
        text-align: left;
    }

    .text-section p {
        font-size: 1em;
    }
}

@media screen and (max-width: 768px) {
    .content-wrapper {
        padding: 20px;
    }

    .text-section h1 {
        font-size: 2em;
        text-align: left;
    }

    .text-section p {
        font-size: 1;
    }

    .cta-button {
        font-size: 13px;
        padding: 10px 15px;
    }
}

@media screen and (max-width: 480px) {
    .content-wrapper {
        padding: 15px;
    }

    .text-section h1 {
        font-size: 2em;
    }

    .text-section p {
        font-size: 1em;
    }

    .cta-button {
        font-size: 12px;
        padding: 8px 12px;
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
@media screen and (max-width: 768px) {
    .navigation-tabs {
        flex-wrap: wrap;
        justify-content: center;
        padding: 8px;
    }

    .navigation-tab {
        font-size: 14px;
        padding: 8px 12px;
    }
}

@media screen and (max-width: 480px) {
    .navigation-tabs {
        flex-direction: column;
        align-items: center;
        padding: 5px;
    }

    .navigation-tab {
        font-size: 13px;
        padding: 6px 10px;
    }
}
        .wrapper {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f7f7f7;
            margin: 0px 40px;
        }
        
        .main-container {
            display: flex;
            width: 100%;
            background: rgb(255, 255, 255);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        
        .sidebar {
            display: flex;
            flex-direction: column;
            background: #f0f0f0;
            padding: 20px;
            width: 400px;
        }
        
        .sidebar-btn {
            padding: 15px;
            margin-bottom: 10px;
            cursor: pointer;
            background-color: #201f1f;
            border: none;
            border-radius: 5px;
            text-align: left;
            font-weight: bold;
        }
        
        .sidebar-btn.active {
            background-color: #2d3e50;
            color: white;
        }
        
        .content-wrapper {
            display: flex;
            width: 100%;
            padding: 20px;
            align-items: center;
        }
        
        .image-box {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }
        
        .image-box img {
            max-width: 100%;
            max-height: 300px;
            object-fit: contain;
        }
        
        .text-box {
            width: 50%;
            padding: 20px;
        }
        
        .content-section {
            display: none;
        }
        
        .content-section.active {
            display: flex;
        }
        
        .title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: left;
            padding-left: 50px;
        }
        
        .underline {
            width: 50px;
            height: 4px;
            background-color: #daba79;
            margin-bottom: 20px;
            margin-left: 50px;
        }
        
        .text-box h2 {
            padding-left: 0px;
            font-weight: 800;
            color: #000;
        }
        
        .text-box p {
            padding-left: 2px;
            font-size: 1em;
        }
/* Responsive Design */
@media screen and (max-width: 1024px) {
    .main-container {
        flex-direction: column;
        align-items: center;
    }

    .sidebar {
        width: 100%;
        text-align: center;
        padding: 15px;
        height: auto;
    }

    .sidebar-btn {
        text-align: center;
        width: 100%;
    }

    .content-wrapper {
        flex-direction: column;
        padding: 15px;
    }

    .image-box,
    .text-box {
        width: 100%;
        text-align: center;
        padding: 15px;
    }

    .title {
        font-size: 28px;
        text-align: center;
        padding-left: 0;
    }

    .underline {
        margin-left: 40px;
    }
}

@media screen and (max-width: 768px) {
    .title {
        font-size: 24px;
    }
    
    .content-section.active {
        flex-direction: column;  
                }

    .text-box p {
        font-size: 14px;
    }

    .sidebar {
        padding: 10px;
    }

    .sidebar-btn {
        font-size: 14px;
        padding: 10px;
    }
}

@media screen and (max-width: 480px) {
    .wrapper {
        padding: 10px;
    }

    .title {
        font-size: 20px;
        padding-left: 37px;
    }

    .text-box p {
        font-size: 13px;
    }

    .sidebar-btn {
        font-size: 12px;
        padding: 8px;
    }
    .image-box img {
        max-height: 250px;
        flex-direction: column; 
        
    }
}
        .page-background {
            background-image: url('your-background-image.jpg');
            /* Replace with actual image */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 20px;
        }
        
        .blog-container {
            display: flex;
            width: 97%;
            margin: auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
            font-size: 1.5em;
            color: #333;
        }
        
        p {
            font-size: 1.1em;
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
@media screen and (max-width: 992px) {
    .blog-container {
        flex-direction: column;
    }

    .blog-sidebar {
        border-left: none;
        border-top: 2px solid #ddd;
        margin-top: 20px;
    }
}

@media screen and (max-width: 600px) {
    .page-background {
        padding: 10px;
    }

    .blog-container {
        width: 100%;
        padding: 15px;
    }

    .main-content,
    .blog-sidebar {
        padding: 15px;
    }

    h2 {
        font-size: 20px;
    }

    p {
        font-size: 14px;
    }
}
        .title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: left;
        }
        
        .underline {
            width: 50px;
            height: 4px;
            background-color: #daba79;
            margin-bottom: 20px;
        }
        
        .related-products {
           width: 95%;
            margin: 0 auto;
        }
        
        .title-2 {
            font-size: 2em;
            font-weight: bold;
            /* margin-bottom: 15px; */
            margin: 10px 0px 10px 20px;
        }
        
        .product-container {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            padding: 10px 0;
        }
        
        .product-card {
            background: #f8f4f4;
            color: rgb(41, 40, 40);
            padding: 20px;
            padding-top: 30px;
            border-radius: 10px;
            width: 20%;
            height: auto;
            flex: 1;
            text-align: center;
            position: relative;
        }
        
        .product-card h3 {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .product-card p {
            font-size: 1em;
            margin-bottom: 20px;
        }
        
        .learn-more {
            background: rgb(120, 119, 119);
            color: black;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
        }
        
        .learn-more:hover {
            background: #d8d8d8;
        }
      /* Responsive Design */
@media (max-width: 1024px) {
    .product-card {
        width: 30%; /* Adjust width for tablets */
        height: auto;
    }
}

@media (max-width: 768px) {
    .product-container {
        flex-wrap: nowrap;
    }

    .product-card {
        width: 45%; /* Adjust width for smaller screens */
    }
}

@media (max-width: 480px) {
    .product-container {
        flex-direction: column;
        overflow-x: auto;
       text-align: center;
        /* padding-left: 20px; */
    }

    .product-card {
        width: 80%; /* Make cards larger for mobile */
        height: auto;
        margin-left: 30px;
    
    }
    .title-2 {
        text-align: center;
        margin-left:30px ;  
    }

}
        .oci-language-container {
            width: 95%;
            margin: 40px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            /* overflow: hidden; */
            text-align: center;
            text-align: left;
            /* margin-left: 160px; */
        }
        
        .oci-language-left {
            background-color: #234f33;
            color: white;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 30%;
        }
        
        .oci-language-left img {
            width: 50px;
            margin-bottom: 10px;
        }
        
        .oci-language-left h2 {
            font-size: 18px;
            text-align: center;
        }
        
        .oci-language-right {
            padding: 40px;
            width: 70%;
        }
        
        .oci-language-right h1 {
            font-size: 2en;
            margin-bottom: 10px;
            color: #f0eeee;
        }
        
        .oci-language-right p {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 20px;
        }
        
        .oci-language-btn {
            display: inline-block;
            padding: 12px 20px;
            border: 2px solid black;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
            font-weight: bold;
            color: black;
            transition: 0.3s;
        }
        
        .oci-language-btn:hover {
            background: black;
            color: white;
        }
        
        .title-3 {
            font-size: 2em;
            font-weight: bold;
            margin: 5px 0px 2px 50px;
        }
      /* Responsive Fixes */

/* Tablet View (≤1024px) */
@media screen and (max-width: 1024px) {
    .oci-language-container {
        flex-direction: column;
        width: 90%;
    }

    .oci-language-left {
        width: 100%;
        padding: 20px;
    }

    .oci-language-right {
        width: 100%;
        padding: 30px;
    }

    .title-3 {
        padding-left: 20px;
        margin-left: 20px;
    }
}

/* Mobile View (≤600px) */
@media screen and (max-width: 600px) {
    .oci-language-container {
        width: 95%;
        flex-direction: column;
        margin-left: 0;
    }

    .oci-language-left {
        width: 100%;
        padding: 15px;
    }

    .oci-language-left h2 {
        font-size: 16px;
    }

    .oci-language-right {
        width: 100%;
        padding: 20px;
    }

    .oci-language-right h1 {
        font-size: 2em;
    }

    .oci-language-right p {
        font-size: 1em;
    }

    .oci-language-btn {
        font-size: 14px;
        padding: 10px 15px;
    }

    .title-3 {
        font-size: 20px;
        margin-left: 10px;
    }
}
    </style>
    <div class="content-wrapper">
        <div class="text-section">
            <h1>AI Language</h1>
            <div class="highlight"></div>
            <p>Perform sophisticated text analysis and machine translation at scale with Oracle Cloud Infrastructure (OCI) Language. Use this cloud-based AI service to build intelligent applications by using REST APIs and SDKs to process unstructured text
                for sentiment analysis, entity recognition, classification, translation, and more.</p>
        </div>
        <div class="video-section-1">
            <img src="../image/ail.png" alt="Generative AI Video Thumbnail">
        </div>
    </div>

    <div class="navigation-tabs">
        <div class="navigation-tab" onclick="openPage('overview-l1.php')">Overview</div>
        <div class="navigation-tab" onclick="openPage('pricing-l1.php')">Pricing</div>

    </div>
    <div class="title">OCI Speech features</div>
    <div class="underline"></div>
    <div class="wrapper">
        <div class="main-container">
            <div class="sidebar">
                <button class="sidebar-btn active" onclick="switchContent(0)">Easy-to-use STT and TTS</button>
                <button class="sidebar-btn" onclick="switchContent(1)">Built for integration</button>
                <button class="sidebar-btn" onclick="switchContent(2)">Fast, clean, and accurate</button>
            </div>

            <div class="content-wrapper">
                <div class="content-section active" id="section-0">
                    <div class="text-box">
                        <h2>Prebuilt acoustic and language models</h2>
                        <p>Prebuilt acoustic and language models simplify speech recognition by using trained deep learning systems to convert spoken words into accurate text. These models eliminate the need for extensive data or machine learning expertise, allowing users to quickly implement voice-to-text features in applications with high accuracy and efficiency across various use cases.</p>
                        <h2>Analyze data from audio and video files</h2>
                        <p>Analyzing data from audio and video files involves converting speech into text using AI, enabling search, indexing, and deeper insights. This transcription allows organizations to extract valuable information, detect patterns, and apply sentiment analysis or anomaly detection, making unstructured media content actionable for business intelligence, compliance, and customer experience improvements.</p>
                        <h2>Real-time transcription</h2>
                        <p>Real-time transcription converts spoken language into written text instantly, enabling live captioning, meeting notes, and accessibility support. It uses advanced speech recognition to transcribe audio from calls, videos, or conversations with high accuracy. Ideal for business, education, and media, it enhances communication and documentation in real-time environments.</p>
                        <h2>Neural text to speech (TTS)</h2>
                        <p>Neural Text-to-Speech (TTS) uses deep learning to convert written text into natural-sounding speech. It delivers human-like voice output with realistic tone, pitch, and rhythm. Ideal for virtual assistants, accessibility, and customer service, neural TTS enhances user interactions by making digital communication more engaging, clear, and lifelike.</p>
                        <h2>Native multilingual support</h2>
                        <p>Native multilingual support enables applications to understand and interact in multiple languages seamlessly. It ensures accurate language detection, translation, and processing without external tools. This feature enhances global user experiences, supports diverse audiences, and simplifies development by allowing systems to communicate naturally across different languages in real time or through automation.</p>
                        <h2>Diarization for increased readability and understanding</h2>
                        <p>Diarization identifies and separates individual speakers in audio recordings, assigning distinct labels to each voice. This enhances readability and understanding by structuring transcripts with clear speaker turns. It’s especially useful in meetings, interviews, and customer service, enabling accurate attribution, context clarity, and more meaningful insights from multi-speaker conversations</p>
                    </div>
                    <div class="image-box">
                        <img src="../image/spee1.avif" alt="Image 1">
                    </div>
                </div>
                <div class="content-section" id="section-1">
                    <!-- <div class="image-box">
                        <img src="image2.jpg" alt="Image 2">
                    </div> -->
                    <div class="text-box">
                        <h2>Integrated transcription service</h2>
                        <p>An integrated transcription service is a built-in solution that converts spoken language from audio or video into accurate text within a unified platform. It supports both real-time and batch transcription, enabling seamless workflows across meetings, calls, lectures, and media content. Advanced features like speaker diarization, timestamps, punctuation, and confidence scores improve clarity and usability. The service can integrate with storage, analytics, and automation tools, allowing easy access, search, and data-driven insights. Multilingual support and customizable filters, such as profanity detection, make it adaptable to various industries. This comprehensive solution enhances productivity, accessibility, and user experience by turning speech into actionable content.</p>
                        <h2>Easy to integrate</h2>
                        <p>"Easy to integrate" refers to a system or service designed for quick and seamless implementation within existing applications or workflows. With well-documented APIs, SDKs, and low-code or no-code options, integration becomes straightforward for developers and non-technical users alike. This reduces development time and ensures compatibility with various platforms, databases, and third-party tools. In transcription or AI services, easy integration means faster deployment, minimal configuration, and smooth data exchange. It enables businesses to enhance functionality—such as adding real-time transcription, language processing, or analytics—without disrupting operations. Ultimately, ease of integration accelerates innovation, reduces costs, and allows organizations to deliver value more efficiently.</p>
                        <h2>Purpose-built for security and privacy</h2>
                        <p>Purpose-built for security and privacy means the system is designed from the ground up to protect sensitive data and ensure user confidentiality. It includes robust encryption for data at rest and in transit, strict access controls, audit logging, and compliance with industry standards like GDPR, HIPAA, and SOC. Role-based permissions and secure authentication prevent unauthorized access, while data anonymization and masking protect identities. In transcription and AI services, these features ensure that customer conversations, recordings, and personal information remain secure. By embedding security and privacy into every layer, the platform builds trust, reduces risk, and supports secure innovation across critical business workflows.</p>
                    </div>
                    <div class="image-box">
                        <img src="../image/spee2.avif" alt="Image 2">
                    </div>
                </div>
                <div class="content-section" id="section-2">
                    <!-- <div class="image-box">
                        <img src="image3.jpg" alt="Image 3">
                    </div> -->
                    <div class="text-box">
                        <h2>Integrated transcription service</h2>
                        <p>An integrated transcription service seamlessly converts audio and video content into accurate, readable text within a unified platform. It supports real-time and batch processing, allowing users to transcribe meetings, interviews, webinars, and customer calls efficiently. With features like speaker diarization, punctuation, and formatting, it enhances clarity and context. Integrated with other tools—such as analytics, storage, and workflow automation—it enables easy access, search, and analysis of transcripts. Supporting multiple languages and secure data handling, it caters to diverse industries like healthcare, legal, education, and customer service. This service boosts productivity, accessibility, and decision-making by turning spoken content into actionable insights.</p>
                        <h2>Confidence score per word</h2>
                        <p>A confidence score per word is a feature in transcription services that indicates the system’s certainty about each transcribed word. Represented as a numerical value (typically between 0 and 1), it helps users assess the reliability of the transcription. Higher scores suggest greater accuracy, while lower scores flag potential errors for review. This is especially useful in noisy environments or with complex vocabulary. Confidence scores enable smarter editing, automated quality checks, and highlight uncertain segments for human validation. Integrated into analytics or AI workflows, they enhance decision-making, improve transcription quality, and ensure that critical spoken content is interpreted accurately and efficiently.</p>
                        <h2>Profanity filters</h2>
                        <p>Profanity filters are features in speech and text processing systems that detect and manage inappropriate, offensive, or sensitive language. These filters can automatically replace, censor, or flag profane words based on predefined rules or customizable word lists. In transcription services, profanity filters help maintain professionalism, comply with content guidelines, and protect brand reputation. They are especially useful in customer service, media, education, and public-facing applications where respectful communication is essential. Filters can be adjusted by language, context, or severity level, ensuring flexibility and accuracy. By moderating content in real time or post-processing, profanity filters support inclusive, safe, and user-friendly environments</p>
                    </div>
                    <div class="image-box">
                        <img src="../image/spee3.avif" alt="Image 3">
                    </div>
                </div>
            </div>
        </div>
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

    <div class="related-products">
        <div class="title-2">Related products</div>
        <div class="product-container">
            <div class="product-card">
                <h3>OCI Data Science</h3>
                <p>OCI Data Science is Oracle Cloud Infrastructure’s platform for building, training, deploying, and managing machine learning models. It supports Python, Jupyter notebooks, and popular ML frameworks like TensorFlow and PyTorch. With built-in tools for collaboration, scalable compute, and integration with Oracle data services, it enables data scientists and developers to work efficiently across the entire AI lifecycle—from data preparation to model deployment—in a secure and enterprise-ready cloud environment.</p>
                <a href="Learn_more.php" class="learn-more">Learn more</a>
            </div>
            <div class="product-card">
                <h3>OCI Data Integration</h3>
                <p>OCI Data Integration is Oracle Cloud Infrastructure’s fully managed service for building, orchestrating, and monitoring data pipelines. It enables users to efficiently extract, transform, and load (ETL/ELT) data across various sources, including databases, data lakes, and applications. With a visual, no-code interface and support for complex data workflows, it helps streamline data movement and transformation, empowering analytics, data science, and business intelligence across cloud and on-premises environments.</p>
                <a href="Learn_more.php" class="learn-more">Learn more</a>
            </div>
            <div class="product-card">
                <h3>OCI Anomaly Detection</h3>
                <p>OCI Anomaly Detection is Oracle Cloud Infrastructure’s AI service that uses machine learning to automatically detect anomalies in time-series data. It helps identify abnormal patterns, trends, or unexpected behavior in data from applications, sensors, or business systems. With prebuilt models and customizable training, it supports real-time monitoring and root cause analysis. Designed for scalability and integration, it enables proactive decision-making and minimizes risks across various industries and use cases.</p>
                <a href="Learn_more.php" class="learn-more">Learn more</a>
            </div>
            <div class="product-card">
                <h3>Oracle Digital Assistant</h3>
                <p>Oracle Digital Assistant is an AI-powered platform that enables businesses to build conversational interfaces, such as chatbots and voice assistants. It supports natural language understanding (NLU) to engage users across web, mobile, and messaging platforms. Integrated with Oracle and third-party applications, it automates tasks, answers queries, and enhances user experiences. With multilingual support, analytics, and prebuilt skills, it streamlines customer service, HR, finance, and more through intelligent, personalized interactions</p>
                <a href="#" class="learn-more">Learn more</a>
            </div>
        </div>
    </div>

    <div class="title-3">Get started with OCI Language</div>
    <div class="oci-language-container">
        <div class="oci-language-left">
            <img src="../image/cloud-solid.svg" alt="Cloud Icon">
            <h2>Language AI Services</h2>
        </div>
        <div class="oci-language-right">
            <p>Oracle Cloud Infrastructure (OCI) Language is a natural language processing (NLP) service that enables developers to analyze and understand text. It offers features like sentiment analysis, entity recognition, key phrase extraction, and language detection. Fully managed and multilingual, OCI Language integrates easily with other OCI services, allowing businesses to derive insights, automate processes, and enhance user experiences through intelligent text analysis.</p>
            <a href="index.php" class="oci-language-btn">Get started with OCI Language today</a>
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

        function switchContent(index) {
            let sections = document.querySelectorAll('.content-section');
            let buttons = document.querySelectorAll('.sidebar-btn');

            sections.forEach((section, i) => {
                section.classList.toggle('active', i === index);
            });

            buttons.forEach((button, i) => {
                button.classList.toggle('active', i === index);
            });
        }

    </script>



    <!-------------footer include-->
    <?php include("footer.php"); ?>
</body>

</html>