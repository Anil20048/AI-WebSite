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
            width: 50%;
            margin-top: 40px;
            margin-left: 50px;
        }
        
        .text-section h1 {
            font-size: 2em;
            color: #000;
            padding-left: 10px;
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
            margin: 5px 0 20px 0;
            margin-left: 10px;
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
/* 📱 Tablet View (1024px and below) */
@media screen and (max-width: 1024px) {
    .content-wrapper {
        flex-direction: column;
        text-align: center;
        padding: 30px;
    }

    .text-section {
        width: 80%;
        margin: 20px auto;
        text-align: center;
    }

    .text-section h1 {
        font-size: 1.8em;
    }

    .text-section p {
        font-size: 1.4em;
    }

    .highlight {
        margin: 10px auto;
    }
}

/* 📱 Mobile View (768px and below) */
@media screen and (max-width: 768px) {
    .text-section {
        width: 90%;
        margin: 20px auto;
    }

    .text-section h1 {
        font-size: 1.6em;
    }

    .text-section p {
        font-size: 1.3em;
    }

    .cta-button {
        padding: 10px 16px;
        font-size: 13px;
    }
}

/* 📱 Small Mobile View (480px and below) */
@media screen and (max-width: 480px) {
    .text-section {
        width: 100%;
        padding: 0 10px;
    }

    .text-section h1 {
        font-size: 1.4em;
    }

    .text-section p {
        font-size: 1.2em;
    }

    .cta-button {
        padding: 8px 14px;
        font-size: 12px;
    }
    .highlight {
        margin-left: 10px ;
    }
    .video-section-1 img {
        padding: 10px;
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
        /* Responsive Styles */
@media screen and (max-width: 768px) {
    .navigation-tabs {
        flex-direction: column;
        align-items: center;
    }

    .navigation-tab {
        width: 100%;
        padding: 12px;
        margin: 5px 0;
        text-align: center;
        border-bottom: 1px solid #ddd; /* Optional: Separates tabs on mobile */
    }
}
        .card-container {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }
        
        .info-card {
            width: 30%;
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
            font-size: 2em;
        }
        
        .info-card p {
            color: #666;
            font-size: 1.5em;
        }
        
        .action-button {
            background: #000;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }
        /* Tablet View (≤1024px) */
@media screen and (max-width: 1024px) {
    .info-card {
        width: 45%; /* Adjusts width for tablets */
    }
}

/* Mobile View (≤768px) */
@media screen and (max-width: 768px) {
    .card-container {
        flex-direction: column;
        align-items: center;
    }

    .info-card {
        width: 90%; /* Full width on mobile */
    }
}
        .wrapper {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f9f9f9;
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
            background-color: #faf1f1;
            border: none;
            border-radius: 5px;
            text-align: left;
            font-weight: bold;
            color: #000;
        }
        
        .sidebar-btn.active {
            background-color: #2d3e50;
            color: rgb(26, 25, 25);
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
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        
        .text-box {
            width: 50%;
            padding: 20px;
        }
        
        .text-box h2 {
            padding-left: 0px;
            font-weight: 800;
            color: #000;
        }
        
        .text-box p {
            padding-left: 10px;
            font-size: 15px;
        }
        
        .content-section {
            display: none;
        }
        
        .content-section.active {
            display: flex;
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
        margin-left: 30px;
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
        .title {
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: left;
            padding-left: 40px;
        }
        
        .underline {
            width: 50px;
            height: 4px;
            background-color: #daba79;
            margin-left: 40px;
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
            font-family: "Georgia", "Times", "Garamond", serif;
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

/* Tablet (≤1024px) */
@media screen and (max-width: 1024px) {
    .ai-quote-container {
        flex-direction: column;
        padding: 40px;
        text-align: center;
    }

    .ai-quote-text {
        max-width: 100%;
    }

    .ai-quote-image {
        margin-top: 20px;
    }
}

/* Mobile (≤768px) */
@media screen and (max-width: 768px) {
    .ai-quote-container {
        padding: 30px;
        padding-left: 20px;
    }

    .ai-quote-message {
        font-size: 20px;
    }

    .ai-quote-symbol {
        font-size: 32px;
    }

    .ai-quote-button {
        font-size: 12px;
        padding: 8px 16px;
    }
}
        .use-case-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 10px;
            padding: 30px 60px;
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
            font-size: 1.5em;
            color: #555;
            margin: 0;
        }
        
        .title-1 {
            font-size: 2em;
            font-weight: bold;
            margin-top: 20px;
            /* margin-bottom: 10px; */
            text-align: left;
            padding-left: 70px;
        }
        
        .underline-1 {
            width: 50px;
            height: 4px;
            background-color: #daba79;
            margin-left: 70px;
        }
        
        .cta-section {
            padding: 40px;
            text-align: center;
            width: 100%;
            background: url(../image/speebg.avif) center/cover no-repeat;
            background: #fbf8f8;
        }
        
        .cta-title {
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: left;
        }
        /* Container */
        
        .cta-container {
            display: flex;
            justify-content: left;
            gap: 20px;
            width: 100%;
        }
        /* Individual Boxes */
        
        .cta-box {
            display: flex;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            align-items: center;
        }
        /* Left Side (Icon + Title) */
        
        .cta-left {
            background-color: #177436;
            padding: 20px;
            text-align: center;
            flex: 1;
            border-radius: 8px;
        }
        
        .cta-left h3 {
            font-size: 1.8em;
            font-weight: bold;
            margin-top: 10px;
        }
        /* Icon */
        
        .cta-icon {
            width: 40px;
            height: 40px;
        }
        /* Button */
        
        .cta-button {
            background-color: rgb(15, 10, 10);
            border: 2px solid black;
            padding: 8px 15px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 5px;
        }
        
        .cta-button:hover {
            background-color: black;
            color: white;
        }

        /* Responsive Design */

/* Tablet (≤1024px) */
@media screen and (max-width: 1024px) {
    .cta-container {
        flex-direction: column;
        align-items: center;
    }

    .cta-box {
        width: 80%;
    }
}

/* Mobile (≤768px) */
@media screen and (max-width: 768px) {
    .cta-section {
        padding: 20px;
    }

    .cta-title {
        font-size: 20px;
        text-align: center;
    }

    .cta-box {
        width: 100%;
        flex-direction: column;
        text-align: center;
    }

    .cta-left {
        width: 100%;
        padding: 15px;
    }

    .cta-button {
        font-size: 12px;
        padding: 6px 12px;
    }
}
    </style>

    <div class="content-wrapper">
        <div class="text-section">
            <h1>Speech to text (STT) and text to speech (TTS)</h1>
            <div class="highlight"></div>
            <p>OCI Speech is an AI service that converts speech to text and synthesizes speech from text with high accuracy. It provides text-normalized, time-stamped transcriptions and natural-sounding voice synthesis. Access it via the OCI Console, OCI Data Science notebooks, REST APIs, CLIs, or SDKs to enhance applications with seamless voice capabilities for automation and accessibility..</p>
        </div>
        <div class="video-section-1">
            <img src="../image/m2.jpeg" alt="Generative AI Video Thumbnail">
        </div>
    </div>
    <!-- tab -->
    <div class="navigation-tabs">
        <div class="navigation-tab" onclick="openPage('overview3.php')">Overview</div>
        <div class="navigation-tab" onclick="openPage('pricing3.php')">Pricing</div>
        <div class="navigation-tab" onclick="openPage('faq3.php')">FAQ</div>
    </div>
    <div class="card-container">
        <div class="info-card">
            <img src="../image/sp1.webp" alt="AI Use Cases">
            <h3>Text to speech and real-time transcription</h3>
            <p>Text-to-speech and real-time transcription features are now in limited availability. Discover how to create synthetized voice based on text and receive an accurate transcription instantaneously.</p>
        </div>
        <div class="info-card">
            <img src="../image/genai-trial.avif" alt="AI Solutions">
            <h3>Apply AI to your business challenges</h3>
            <p>Leverage AI to streamline operations, enhance customer experiences, and drive innovation. Automate tasks, analyze data, and optimize decision-making with AI-powered solutions. Improve efficiency, reduce costs, and gain a competitive edge by integrating AI into your business strategy today.</p>
        </div>
        <div class="info-card">
            <img src="../image/genai-free-trial.avif" alt="Oracle AI Trial">
            <h3>Try Oracle GenAI and get a free trial</h3>
            <p>Try Oracle GenAI with a free trial and experience powerful, secure, and scalable AI. Leverage advanced models for text, image, and code generation to enhance automation, innovation, and business efficiency. Sign up today!</p>
        </div>

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
                        <p>OCI Speech uses automatic speech recognition, a deep learning process, to derive accurate transcription from natural conversations. Get started easily by using prebuilt acoustic and language models that don’t require existing data
                            science experience.</p>
                        <h2>Analyze data from audio and video files</h2>
                        <p>Search, index, and decipher data buried in your audio files. Convert recorded audio conversations to textual data to analyze with AI services. For example, use OCI Language to retrieve the sentiment and OCI Speech’s anomaly detection
                            capabilities to identify chances of customer churn.</p>
                        <h2>Real-time transcription</h2>
                        <p>OCI Speech’s real-time transcription feature lets you send audio streams and receive accurate transcriptions in seconds.</p>
                        <h2>Neural text to speech (TTS)</h2>
                        <p>Now in limited availability, the text-to-speech feature in OCI Speech lets you synthesize human-like speech from text across applications. This feature enables customer conversations, multi-language voice translations, and improved
                            accessibility. Choose from a variety of voices to enhance interactions.</p>
                        <h2>Native multilingual support</h2>
                        <p>OCI Speech ASR models support English, Spanish, Portuguese, German, French, Italian, and Hindi, allowing you to transcribe your audio files in your preferred language. In addition, OCI Speech also supports the OpenAI Whisper model,
                            which provides 57+ supported languages out of the box. Find out more about OCI and the Whisper model.</p>
                        <h2>Diarization for increased readability and understanding</h2>
                        <p>OCI Speech supports diarization for organizing, analyzing, and extracting meaningful information from multiple speakers.</p>
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
                        <p>Eliminate reliance on third-party transcription offerings and practice more control over your data with end-to-end security and compliance.</p>
                        <h2>Easy to integrate</h2>
                        <p>OCI Speech is a versatile service that can be called via REST APIs, different SDKs, and Oracle CLI. Developers can easily deploy a scalable speech service without having data science or ML expertise.</p>
                        <h2>Purpose-built for security and privacy</h2>
                        <p>Oracle Cloud Infrastructure Speech protects our customers’ privacy. Prebuilt automatic speech recognition models transcribe your content, but do not store any data for training, debugging, or other purposes.</p>
                    </div>
                    <div class="image-box">
                        <img src="../image/spee2.avif" alt="Image 2">
                    </div>
                </div>
                <div class="content-section" id="section-2">
                    <div class="text-box">
                        <h2>Integrated transcription service</h2>
                        <p>OCI Speech uses proprietary models and architecture that enables fast conversion for speech into text.</p>
                        <h2>Confidence score per word</h2>
                        <p>We added a word-level confidence score to help you identify words that might have been transcribed incorrectly. Use the word confidence score to determine where to focus when building an application.</p>
                        <h2>Profanity filters</h2>
                        <p>We added prebuilt word filtering using a curated list of profanities. You can either mask, remove, or tag profanities.</p>
                    </div>
                    <div class="image-box">
                        <img src="../image/spee3.avif" alt="Image 3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="ai-quote-container">
        <div class="ai-quote-text">
            <p class="ai-quote-message">
                <span class="ai-quote-symbol">❝</span> Our real-time speech recognition feature accurately transcribes your speech as you speak naturally, enabling smooth and uninterrupted communication. It enhances productivity by reducing the need for manual corrections and ensures your words are captured instantly, making conversations, meetings, and voice commands more efficient and reliable across various applications.</p>
            <p class="ai-quote-author">Greg Pavlik, SVP, Oracle Cloud Infrastructure</p>
           
        </div>
        <div class="ai-quote-image">
            <img src="../image/spee4.png" alt="Oracle AI Stack">
        </div>
    </section>
    <!-- <div class="use-case-section"> -->
    <div class="title-1">Use cases for generative AI</div>
    <div class="underline-1"></div>
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
    <section class="cta-section">
        <h2 class="cta-title">Get started with Oracle AI for Fusion Cloud Applications</h2>
        <div class="cta-container">
            <div class="cta-box">
                <div class="cta-left">
                    <img src="../image/desktop-solid (1).svg" alt="Demo Icon" class="cta-icon">
                    <i class="fa-solid fa-desktop"></i>
                    <h3>Request a demo</h3>
                </div>
                <div class="cta-right">
                    <p>Take a walkthrough with one of our experts.</p>
                </div>
            </div>
        </div>
    </section>


    <script>
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