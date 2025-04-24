<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="./styles/styles.css">
    <script src="./index.js"></script>
    <title>index</title>
    <style>
        /* ✅ Main Container */
.oracle-ai-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50vh;
    background-color: #f4f4f4;
    padding: 20px;
}

/* ✅ Card Wrapper */
.oracle-card-wrapper {
    display: flex;
    gap: 20px;
    padding: 20px;
    border-radius: 10px;
    flex-wrap: wrap; /* Allow wrapping */
    justify-content: center;
}
.oracle-card {
    width: 450px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 15px;
    text-align: center;
}
.oracle-card img {
    width: 100%;
    border-radius: 10px;
    max-width: 300px; 
}
.oracle-card h3 {
    margin: 10px 0;
    font-size: 2rem;
}
.oracle-card p {
    font-size: 1.5em;
    color: black;
}
.oracle-card button {
    margin-top: 10px;
    padding: 10px 15px;
    background: black;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1.2em;
}
.oracle-card button:hover {
    background: #333;
}
@media (max-width: 1024px) {
    .oracle-card-wrapper {
        gap: 15px;
        padding: 15px;
    }

    .oracle-card {
        width: 350px; 
    }

    .oracle-card h3 {
        font-size: 1.5rem;
    }

    .oracle-card p {
        font-size: 1.2em;
    }

    .oracle-card button {
        font-size: 1em;
        padding: 8px 12px;
    }
}

@media (max-width: 768px) {
    .oracle-ai-container {
        height: auto; 
        padding: 10px;
    }

    .oracle-card-wrapper {
        flex-direction: column; 
        align-items: center;
    }

    .oracle-card {
        width: 90%; 
        text-align: center;
    }

    .oracle-card img {
        width: 100%; 
    }

    .oracle-card h3 {
        font-size: 1.2rem;
    }

    .oracle-card p {
        font-size: 1rem;
    }

    .oracle-card button {
        font-size: 0.9em;
        padding: 6px 12px;
    }
}

      

.genai-section {
    display: flex;
    align-items: center;
    justify-content: space-between;
   width: 90%;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
}


.genai-content {
    flex: 1;
    padding-right: 20px;

}


.genai-title {
font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 1.8rem;
    color: #111;
    margin-bottom: 10px;
}


.genai-description {
    font-size: 1.5rem;
    color: #444;
    line-height: 1.5;
}


.genai-video {
    flex: 1;
    display: flex;
    justify-content: center;
}


.video-thumbnail {
    position: relative;
    width: 100%;
    max-width: 750px;
    border-radius: 8px;
    overflow: hidden;
}

.video-thumbnail img {
    width: 100%;
    border-radius: 8px;
    display: block;
}
@media (max-width: 768px) {
    .genai-section {
        flex-direction: column;
        text-align: center;
        padding: 15px;
    }

    .genai-content {
        max-width: 100%;
        margin-bottom: 20px;
        padding-right: 0;
    }

    .video-thumbnail {
        width: 100%;
        max-width: 320px;
        margin: 0 auto;
    }
}

/* ========================================================== */

/*Main Container*/
.container-1 {
    width: 90%;
    margin: 50px auto;
    padding: 20px;
}
.section-title {
    font-size: 2.5rem;
    color: #333;
}
.underline {
    width: 50px;
    height: 3px;
    background-color: #ffcc00;
    margin: 5px 0 20px 0;
}
.card-container {
    display: flex;
    justify-content: space-between;
    gap: 20px; 
    flex-wrap: wrap;
}
.card {
    position: relative;
    width: 30%;
    height: 400px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}
.card:hover {
    transform: scale(1.05);
}
.card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(80%);
}
.card-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 15px;
    background: rgba(0, 0, 0, 0.6);
    color: white;
}


.card-overlay h3 {
    font-size: 1.8rem; 
    font-weight: bold;
}
.card-overlay p {
    font-size: 1.3rem;
    margin-top: 5px;
    color: white;
}
.card-logo {
    position: absolute;
    top: 15px;
    left: 15px;
    color: white;
    font-size: 18px;
    font-weight: bold;
}


@media (max-width: 1024px) {
    .card {
        width: 45%; 
        height: 350px;
    }

    .section-title {
        font-size: 2rem; 
    }

    .card-overlay h3 {
        font-size: 1.5rem;
    }

    .card-overlay p {
        font-size: 1.1rem;
    }
}
@media (max-width: 768px) {
    .card-container {
        flex-direction: column;
        align-items: center;
    }

    .card {
        width: 100%; 
        height: auto;
    }

    .card-overlay h3 {
        font-size: 1.2rem;
    }

    .card-overlay p {
        font-size: 1rem;
    }
}
    </style>
</head>

<body>

    <!-------------header include-->
    <?php include("hader.php"); ?>

    <div class="cont">
    <div class="text-section">
        <h1>Artificial Intelligence (AI)</h1>
        <div class="underline"></div>
        <p>Get comprehensive AI services and state-of-the-art generative AI innovations on our data platform and in
            our cloud applications—all on a best-in-class AI infrastructure.</p>
        <a href="Generative_AI_Service.php" class="button">Speak to an AI expert</a>
    </div>
    <div class="video-section-1">
        <img src="../image/ai1.webp" alt="Generative AI Video Thumbnail">
    </div>
</div>
    <div class="oracle-ai-ainer">
        <div class="oracle-card-wrapper">
            <div class="oracle-card">
                <img src="image/img1v.avif" alt="Generative AI">
                <h3>Generative AI at Oracle</h3>
                <p>Use generative AI embedded across the entire technology stack with your data to provide immediate
                    business value.</p>
            </div>
            <div class="oracle-card">
                <img src="image/img1.avif" alt="AI Solutions Hub">
                <h3>AI solutions hub</h3>
                <p>Get started today with AI use cases across industries, example code, and step-by-step instructions.
                </p>
            </div>
            <div class="oracle-card">
                <img src="image/img2.avif" alt="Oracle AI Free Trial">
                <h3>Try Oracle AI and get a 30-day free trial</h3>
                <p>Oracle offers a Free Tier for most AI services as well as a 30-day free trial account with US$300 in
                    credit.</p>
            </div>
        </div>
    </div>
    <section class="genai-section">
        <div class="genai-content">
            <h2 class="genai-title">Learn about the future of GenAI: Beyond the hype curve</h2>
            <p class="genai-description">
            Generative AI (GenAI) has advanced significantly, revolutionizing industries and changing how businesses utilize artificial intelligence. While early hype focused on its potential, the true value of GenAI emerges in its real-world applications. It drives innovation in content creation, automation, and problem-solving but also presents challenges like ethical concerns, bias, and data security. Companies must balance its advantages with responsible implementation to maximize benefits. From healthcare to finance, GenAI enhances efficiency, personalization, and decision-making. 
            </p>
        </div>
        <div class="genai-video">
            <div class="video-thumbnail">
                <img src="../image/in1.jpeg" alt="Generative AI Engineering Video">
            </div>
        </div>
    </section>
    <section class="container-1">
        <h2 class="section-title">Oracle AI in action</h2>
        <div class="card-container">
            <div class="card">
                <img src="image/rc05-isize.avif" alt="AI use cases">
                <div class="card-overlay">
                    <h3>AI use cases ebook</h3>
                    <p>Dive deep into the exciting new world of AI and discover how to apply these solutions to real
                        business problems.</p>
                </div>
                <div class="card-logo">NIBIO</div>
            </div>
            <div class="card">
                <img src="image/rc05-ai-use-cases.avif" alt="Saving Norway’s forests">
                <div class="card-overlay">
                    <h3>Saving Norway’s forests</h3>
                    <p>Dive deep into the exciting new world of AI and discover how to apply these solutions to real
                        business problems.</p>
                </div>
                <div class="card-logo">NIBIO</div>
            </div>
            <div class="card">
                <img src="image/rc05-nibio.webp" alt="Improve video streaming">
                <div class="card-overlay">
                    <h3>Improve video streaming</h3>
                    <p>Dive deep into the exciting new world of AI and discover how to apply these solutions to real
                        business problems.</p>
                </div>
                <div class="card-logo">iSIZE</div>
            </div>
        </div>
    </section>     
    <div class="container-3">
    <div class="cap">
        <h2>Discover AI capabilities</h2>
    </div>
    <div class="grid">
        <div class="box-3">
            <div class="icon">📱</div>
            <h3>Applications</h3>
            <p>Surface insights directly inside the apps that support your key business functions with embedded AI.</p>
            <a href="Learn_more.php" class="link">Explore Oracle Cloud Applications</a>
        </div>

        <div class="box-3">
            <div class="icon">🔗</div>
            <h3>Generative AI</h3>
            <p>Choose from managed open-source or proprietary LLMs. Fine-tune models with enterprise data.</p>
            <a href="Ai_servicees.php" class="link">Explore generative AI</a>
        </div>
        <div class="box-3">
            <div class="icon">⚛️</div>
            <h3>AI Services</h3>
            <p>Add prebuilt models to your applications to leverage AI with custom data for improved quality.</p>
            <a href="Ai_servicees.php" class="link">Explore AI services</a>
        </div>

        <div class="box-3">
            <div class="icon">💡</div>
            <h3>Generative AI and ML</h3>
            <p>Collaboratively build, train, and deploy machine learning models with open-source frameworks.</p>
            <a href="Machine_learning.php" class="link">Explore machine learning</a>
        </div>

        <div class="box-3">
            <div class="icon">🖥️</div>
            <h3>AI Infrastructure</h3>
            <p>Benefit from cloud elasticity, usage-based costs, and high-performance AI delivery.</p>
            <a href="Assist.php" class="link">Explore GPUs for AI</a>
        </div>

        <div class="box-3">
            <div class="icon">🚀</div>
            <h3>AI ISVs</h3>
            <p>Accelerate AI innovation with help from our partners to streamline AI solutions.</p>
            <a href="isvi.php" class="link">Explore Oracle's AI ISVs</a>
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
    <!----------------------about section is here---------------------------------------->

    <div class="ab-about-panel" id="ab-aboutPanel">
        <span class="ab-close-btn" onclick="closeAbout()">✖</span>
        <h2 style="text-align: center;">About OCI</h2>
        <div class="ab-about-content">
            <div class="ab-about-item">
                <h3>Why OCI Overview</h3>
                <p>Explore why customers choose OCI.</p>
            </div>
            <div class="ab-about-item">
                <h3>Built-In Security</h3>
                <p>Protect your cloud environments with built-in security capabilities at no extra charge.</p>
            </div>
            <div class="ab-about-item">
                <h3>Superior Price-Performance</h3>
                <p>Achieve consistently higher performance at a lower cost across all workloads.</p>
            </div>
            <div class="ab-about-item">
                <h3>Clean Cloud</h3>
                <p>Drive sustainability with cloud computing that runs on renewable energy.</p>
            </div>
            <div class="ab-about-item">
                <h3>Global Presence</h3>
                <p>Run workloads worldwide on 40+ Oracle Cloud regions with strong business continuity.</p>
            </div>
            <div class="ab-about-item">
                <h3>Compliance</h3>
                <p>Ensure global, regional, and industry compliance with Oracle Cloud’s 80+ compliance programs.</p>
            </div>
            <div class="ab-about-item">
                <h3>Distributed Cloud</h3>
                <p>Deploy workloads wherever you like—even across multiple clouds.</p>
            </div>
            <div class="ab-about-item">
                <h3>Customer Success</h3>
                <p>Learn how innovative companies are succeeding with OCI.</p>
            </div>
            <div class="ab-about-item">
                <h3>Free Trial</h3>
                <p>Sign up for a free trial.</p>
            </div>
        </div>
    </div>
</body>

</html>