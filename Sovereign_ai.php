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
    height: auto;
    display: flex;
    background-color: #FDF3E4;
    justify-content: center;
    flex-wrap: wrap;
}

.wrapper {
    width: 50%;
    padding: 30px;
    text-align: left;
    display: flex;
    flex-direction: column;
    justify-content: center;
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
}

.text {
    font-size: 1.2em;
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
    width: 30%;
}
.wrapper a:hover {
    text-decoration: none;
}

.video-section-1 {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50%;
      padding: 40px;
      box-sizing: border-box;
     
    }

    .video-section-1 img {
      width: 700px;
      max-width: 100%;
      margin-top: 50px;
      border-radius: 20px;
      display: block;
    }

/* ======================
   ✅ Responsive Styles
====================== */
@media (max-width: 992px) {
    .background-graphic {
        flex-direction: column-reverse;
        align-items: center;
    }

    .wrapper,
    .video-section-1 {
        width: 100%;
        padding: 20px;
        text-align: center;
    }

    .heading,
    .text {
        text-align: center;
    }

    .cta-button {
        margin: 20px auto;
    }

    .video-section-1 img {
        padding: 20px;
        margin-top: 20px;
    }
}

@media (max-width: 480px) {
    .heading {
        font-size: 1.5em;
        text-align: left;
    }

    .text {
        font-size: 1em;
    }

    .cta-button {
        font-size: 0.95em;
    }
}


      
        .ani-contant {
            width: 90%;
            padding: 30px;
            background-color: white;
            color: #000;
        }
        
        .ani-contant h1 {
            font-size: 43px;
            padding-left: 30px;
        }
        
        .ani-contant p {
            font-size: 1.1em;
            padding-left: 25px;
        }
        
        .ani-contant .btn-a {
            padding-left: 20px;
        }
        /* Responsive Design */
@media (max-width: 1024px) {
    .ani-contant h1 {
        font-size: 36px;
        padding-left: 20px;
    }

    .ani-contant p {
        font-size: 14px;
        padding-left: 20px;
    }
}

@media (max-width: 768px) {
    .ani-contant {
        width: 95%;
        padding: 20px;
    }

    .ani-contant h1 {
        font-size: 30px;
        padding-left: 15px;
    }

    .ani-contant p {
        font-size: 13px;
        padding-left: 15px;
    }
}

@media (max-width: 480px) {
    .ani-contant {
        width: 100%;
        padding: 15px;
    }

    .ani-contant h1 {
        font-size: 24px;
        
    }

    .ani-contant p {
        font-size: 12px;
      
    }

    .ani-contant .btn-a {
        padding-left:20px;
        
    }
}
        .wrapper-1 {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f7f7f7;
        }
        
        .main-container {
            display: flex;
            width: 100%;
            background: rgb(255, 255, 255);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        /* Responsive Design */
@media (max-width: 1024px) {
    .main-container {
        flex-direction: column;
        align-items: center;
    }
}

@media (max-width: 768px) {
    .wrapper-1 {
        padding: 10px;
    }

    .main-container {
        width: 95%;
        border-radius: 5px;
    }
    .content-section.active {
        flex-direction: column;  
                }
}

@media (max-width: 480px) {
    .main-container {
        width: 100%;
        box-shadow: none;
        border-radius: 0;
    }
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
        /* Responsive Design */
@media (max-width: 1024px) {
    .content-wrapper {
        flex-direction: column;
        align-items: center;
    }

    .image-box, .text-box {
        width: 100%;
        text-align: center;
    }
}

@media (max-width: 768px) {
    .content-wrapper {
        padding: 15px;
    }

    .text-box {
        padding: 15px;
    }
}

@media (max-width: 480px) {
    .content-wrapper {
        padding: 10px;
    }

    .image-box img {
        max-height: 200px;
    }

    .text-box {
        padding: 10px;
    }
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
            padding-left: 10px;
            font-size: 15px;
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
            padding: 10px;
            width: 90%;
            /* text-align: center;
            justify-content: center; */
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
            padding-left: 50px;
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
            margin-top: 10px;
            margin-bottom: 10px;
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
      </style>
    <div class="background-graphic">
        <div class="wrapper">
            <div class="heading">Sovereign AI</div>
            <div class="line"></div>
            <div class="text">
            ​Sovereign AI refers to a nation's capability to develop, deploy, and control artificial intelligence technologies using its own infrastructure, data, workforce, and networks. This approach ensures that AI systems align with local cultural, legal, and ethical standards, while safeguarding sensitive information. By investing in sovereign AI, countries aim to drive domestic innovation, enhance economic competitiveness, and maintain autonomy over critical technologies. This strategy also addresses concerns related to data privacy, security, and compliance with national regulations. The rise of generative AI has further emphasized the importance of sovereign AI, as nations seek to harness AI's transformative potential while retaining control over their digital futures
            </div>
            <a href="Ai_servicees.php" class="cta-button">Speak to an AI expert</a>
        </div>
        <div class="video-section-1">
            <img src="../image/av.jpeg" alt="Generative AI Video Thumbnail">
        </div>
    </div>

    <div class="ani-contant">
        <h1>What is sovereign AI?</h1>
        <p>Sovereign AI refers to artificial intelligence systems that are developed, deployed, and controlled independently by a nation or organization, without reliance on foreign or external technologies. It emphasizes self-reliance in AI infrastructure, including computing power, data sources, algorithms, and regulatory frameworks. The concept ensures that sensitive data remains within national borders and that AI applications align with a country’s ethical standards, values, and strategic interests. Sovereign AI is especially critical for defense, healthcare, finance, and other sectors where autonomy and data privacy are vital. With growing concerns over data security, digital colonization, and geopolitical tensions, many countries are prioritizing the development of sovereign AI to protect their technological and economic sovereignty. This includes building national AI clouds, investing in local talent, and fostering domestic innovation ecosystems. In essence, sovereign AI represents a move toward greater independence, accountability, and trust in the development and use of artificial intelligence technologies.</p>
        <a href="Learn_more.php" class="btn-a">Learn more about digital sovereignty</a>
    </div>

    <div class="title">OCI Speech features</div>
    <div class="underline"></div>
    <div class="wrapper-1">
        <div class="main-container">
            <div class="sidebar">
                <button class="sidebar-btn active" onclick="switchContent(0)">Deploying AI on distributed cloud</button>
                <button class="sidebar-btn" onclick="switchContent(1)">Solutions designed for sovereignty</button>
                <button class="sidebar-btn" onclick="switchContent(2)">High performance AI infrastructure</button>
            </div>

            <div class="content-wrapper">
                <div class="content-section active" id="section-0">
                    <div class="text-box">
                        <h2>Deploying AI on distributed cloud oin</h2>
                        <p>Deploying AI on distributed cloud involves running artificial intelligence models and services across multiple cloud environments and edge locations, rather than relying on a single centralized infrastructure. This approach enhances scalability, performance, and data privacy by processing information closer to where it is generated. Distributed cloud deployment enables low-latency AI applications such as real-time analytics, autonomous systems, and smart IoT devices. It also supports compliance with regional data sovereignty regulations by ensuring data remains within specific geographic boundaries. Organizations benefit from improved reliability, as workloads can shift seamlessly across nodes in response to demand or failure. Additionally, AI models can be tailored to local needs while sharing insights globally. This strategy is increasingly favored in sectors like healthcare, manufacturing, and telecommunications where responsiveness and data control are critical. Overall, deploying AI on distributed cloud empowers organizations to build intelligent, resilient, and compliant systems at scale across a diverse and decentralized digital landscape.</p>
                        <h2>AI capabilities</h2>
                        <p>AI capabilities encompass a wide range of functions that enable machines to mimic human intelligence. These include natural language processing (NLP) for understanding and generating human language, computer vision for interpreting visual data, and machine learning for recognizing patterns and making predictions based on data. AI systems can perform automated decision-making, speech recognition, robotic process automation, and real-time analytics. They can also learn and adapt over time through deep learning and reinforcement learning. In practical terms, AI enhances customer service through chatbots, improves medical diagnoses, optimizes supply chains, and powers autonomous vehicles. As AI continues to evolve, its capabilities are expanding into more complex, context-aware tasks across industries, driving innovation and operational efficiency.</p>
                     
                    </div>
                    <div class="image-box">
                        <img src="../image/sol1.png" alt="Image 1">
                    </div>
                </div>
                <div class="content-section" id="section-1">
                    <!-- <div class="image-box">
                        <img src="image2.jpg" alt="Image 2">
                    </div> -->
                    <div class="text-box">
                        <h2>Solutions designed for sovereignty</h2>
                        <p>Solutions designed for sovereignty prioritize control, security, and autonomy over data, infrastructure, and technology. These solutions are critical for governments, enterprises, and organizations that need to comply with local regulations, protect sensitive data, and reduce dependency on foreign technologies. Sovereign solutions include data localization, ensuring information is stored and processed within national borders, and secure cloud infrastructures tailored to national or regional requirements. They also incorporate open-source platforms, custom AI models, and private networks to prevent unauthorized access and maintain digital independence. By integrating trusted hardware, strong encryption, and identity management systems, these solutions support compliance with data protection laws like GDPR or national digital acts. In a world increasingly shaped by geopolitical and cybersecurity concerns, sovereign solutions empower entities to maintain control over their digital assets while fostering innovation and resilience in their own technological ecosystem</p>
                        <h2> computing infrastructure</h2>
                        <p>Computing infrastructure refers to the foundational systems and technologies that support the processing, storage, and transmission of data. It includes hardware like servers, storage devices, and networking equipment, as well as software such as operating systems, virtualization platforms, and management tools. Modern computing infrastructure often incorporates cloud services, edge computing, and data centers to ensure scalability, efficiency, and reliability. It enables businesses and organizations to run applications, manage data, and deliver digital services. A well-designed infrastructure ensures high performance, security, and availability, making it essential for everything from daily operations to advanced technologies like AI and big data analytics.</p>
                    </div>
                    <div class="image-box">
                        <img src="../image/siv3.avif" alt="Image 2">
                    </div>
                </div>
                <div class="content-section" id="section-2">
                    <!-- <div class="image-box">
                        <img src="image3.jpg" alt="Image 3">
                    </div> -->
                    <div class="text-box">
                        <h2>High performance AI infrastructure</h2>
                        <p>High-performance AI infrastructure is a robust, scalable foundation designed to support the intensive computational demands of artificial intelligence workloads. It combines powerful GPUs or TPUs, high-speed networking, and optimized storage systems to accelerate model training and inference. This infrastructure is often distributed across cloud, edge, and on-premises environments, enabling flexibility and faster data processing. Key components include parallel processing architectures, low-latency interconnects, and AI-optimized frameworks that streamline deep learning workflows. Additionally, it integrates scalability, reliability, and security to support large-scale data analytics, real-time decision-making, and advanced model deployment. Whether used in autonomous systems, healthcare diagnostics, or predictive analytics, high-performance AI infrastructure is critical for unlocking the full potential of intelligent applications. It ensures faster innovation cycles and more accurate insights, empowering organizations to build smarter, data-driven solutions efficiently and at scale.</p>
                        <h2>ultrahigh-bandwidth network</h2>
                        <p>An ultrahigh-bandwidth network provides extremely fast data transfer speeds, enabling seamless communication between systems, devices, and data centers. It is essential for supporting modern applications like AI, big data analytics, cloud computing, and real-time streaming, where large volumes of data must be moved quickly and efficiently. These networks typically leverage advanced technologies such as fiber optics, 5G, or next-gen Ethernet, offering low latency, high throughput, and minimal packet loss. In AI infrastructure, ultrahigh-bandwidth networks ensure faster training and inference by enabling high-speed data exchange between processors, storage, and edge devices. This enhances performance, scalability, and responsiveness across distributed environments.</p>
                        
                    </div>
                    <div class="image-box">
                        <img src="../image/siv2.jpg" alt="Image 3">
                    </div>
                </div>
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
                <div class="menu-item menu-active" onclick="changeTab('trial-section')">AI training and inferencing</div>
                <div class="menu-item" onclick="changeTab('labs-section')">Virtual desktops</div>
                <div class="menu-item" onclick="changeTab('support-section')">Computational fluid dynamics (CFD)</div>

            </div>

            <div class="content-sections">
                <!-- Free Trial Content -->
                <div class="content-box content-active" id="trial-section">
                    <h2>AI infrastructure for deep learning training and inferencing</h2>
                    <p>Train AI models using OCI Data Science, bare metal instances, cluster networking based on RDMA, and NVIDIA GPUs.</p>
                   
                    <div class="image-box-i">
                    <img src="../image/aiin5.avif" alt="">
                    </div>
                </div>

                <!-- LiveLabs Content -->
                <div class="content-box" id="labs-section">
                    <h2>Virtual desktop infrastructure (VDI)</h2>
                    <p>OCI Compute powered by NVIDIA GPUs provide consistent high performance for VDI.</p>
                 
                    <div class="image-box-i">
                    <img src="../image/aiin9.avif" alt="">
                    </div>
                </div>

                <!-- Contact Us Content -->
                <div class="content-box" id="support-section">
                    <h2>CFD and high performance computing using GPU instances</h2>
                    <p>OCI enables computer-aided engineering and computational fluid dynamics for fast predictions of the aerodynamic properties of objects.</p>
                
                    <div class="image-box-i">
                    <img src="../image/aiin10.avif" alt="">
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

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


        function switchContent(index) {
            let sections = document.querySelectorAll('.ai-content-section');
            let buttons = document.querySelectorAll('.ai-sidebar-btn');

            sections.forEach((section, i) => {
                section.classList.toggle('active', i === index);
            });

            buttons.forEach((button, i) => {
                button.classList.toggle('active', i === index);
            });
        }
    </script>
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

     <!-------------footer include-->
     <?php include("footer.php"); ?>


</body>

</html>