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
     
    </style>
    <!-- <section></section> -->

    <body>
   
        <section class="section-21">
            <div class="left-7">
                <h1>AI Solutions Hub</h1>
                <div class="underline"></div>
                <p>Enhance productivity with generative AI, automating tasks, improving decision-making, and driving innovation. From content creation to data analysis, AI solutions streamline operations, boost efficiency, and personalize experiences. Embrace AI-powered tools to optimize workflows, reduce manual effort, and gain a competitive edge in today’s fast-paced business landscape.</p>
            </div>
        </section>
        <!-- tab -->
         <div class="fea">
         <h1>Featured AI solutions</h1> 
         </div>      
        <div class="section-6">
            <div class="box8">
                <p class="top-left1">Generation</p>
                <h1>Create a Powerful Knowledge Hub</h1>
                <p>Discover how to convert documents into actionable insights using OCI Generative AI, OpenSearch, and RAG in our interactive demo.</p>

            </div>
            <div class="box8">
                <p class="top-left1">Model Development</p>
                <h1>Distributed Multinode Training with NVIDIA GPUs on OCI</h1>
                <p>Learn how to run distributed multinode training with NVIDIA GPUs on OCI for efficient deep neural network training.</p>
            </div>
            <div class="box8">
                <p class="top-left1">Retrieval Augmented Generation (RAG)</p>
                <h1>Chatbot with RAG using OCI Generative AI Agents</h1>
                <p>Improve insights to make smarter decisions by tapping into real-time data with Retrieval-Augmented Generation (RAG).</p>
            </div>
        </div>
<style>
     .layout-wrapper {
            display: flex;
            margin: 21px;
            padding-left: 46px;
            width: 98%;
        }
        
        .sidebar-navigation {
            width: 290px;
            background-color: #f4f4f4;
            padding: 20px;
           
            position: sticky;
            top: 0;
            overflow-y: auto;
            height: 550px;
        }
        
        .sidebar-navigation h2 {
            margin-top: 0;
           font-size: 1.5em;
        }
        
        .sidebar-navigation ul {
            list-style: none;
            padding: 0;
        }
        
        .sidebar-navigation li {
            margin: 10px 0;
        }
        
        .sidebar-navigation a {
            text-decoration: none;
            color: #333;
            display: block;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 1.5em;
        }
        
        .sidebar-navigation a:hover,
        .sidebar-navigation li.active a {
            background-color:rgb(34, 36, 38);
            color: #fff;
            
        }
        
        .main-content-area {
            flex-grow: 1;
            padding: 40px;
        }
        
        .service-section {
            margin-bottom: 20px;
        }
        
        .service-section h2 {
            margin-top: 0;
            font-size: 1.5em    ;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }
        
        .service-card {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            text-align: center;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
        }
        
        .service-card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        
        .service-card h1 {
            font-size: 20px;
            margin: 10px 0;
        }
        
        .service-card p {
            color: #666;
            font-size: 14px;
        }
     /* Tablet (768px - 1024px) */
@media (max-width: 1024px) {
    .layout-wrapper {
        flex-direction: column;
        padding-left: 20px;
        margin: 0;
    }

    .sidebar-navigation {
        width: 100%;
        position: relative;
        padding: 15px;
    }

    .main-content-area {
        padding: 20px;
    }

    .services-grid {
        grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
        gap: 15px;
       
    }

    .service-card h1 {
        font-size: 18px;
    }

    .service-card p {
        font-size: 13px;
    }
}

/* Mobile (up to 767px) */
@media (max-width: 767px) {
    .layout-wrapper {
        flex-direction: column;
        padding-left: 10px;
        margin: 0;
    }

    .sidebar-navigation {
        width: 100%;
        position: relative;
        padding: 10px;
    }

    .main-content-area {
        padding: 15px;
    }

    .services-grid {
        grid-template-columns: 1fr;
        gap: 12px;
    }

    .service-card h1 {
        font-size: 16px;
      
    }

    .service-card p {
        font-size: 12px;
    }
}


</style>
<div class="layout-wrapper">
        <nav class="sidebar-navigation">
            <h2>Service Categories</h2>
            <ul>
                <li><a href="#ai-and-machine-learning">AI and Machine Learning</a></li>
                <li><a href="#analytics-and-ai">Analytics and AI</a></li>
                <li><a href="#compute">Compute</a></li>
                <li><a href="#containers">Containers</a></li>
                <li><a href="#data-lake">Data Lake</a></li>
                <li><a href="#developer-services">Developer Services</a></li>
                <li><a href="#generative-ai">Generative AI</a></li>
            </ul>
        </nav>

        <main class="main-content-area">

            <div class="service-section" id="ai-and-machine-learning">
                <h2>AI and Machine Learning</h2>
                <div class="services-grid">
                    <div class="service-card"><img src="../image/si1.avif" alt="Service 1">
                        <h1>Build an AI-Powered PeopleSoft Chat Assistant </h1>
                        <p>Enhance PeopleSoft with PICASO and generative AI for instant document content retrieval..</p>
                    </div>
                    <div class="service-card"><img src="../image/si3.avif" alt="Service 2">
                        <h1>Build an AI-Powered Financial Interface</h1>
                        <p>Create an AI-powered chat interface for Fusion Financials using OCI, Google Cloud, and Gemini AI.

</p>
                    </div>
                    <div class="service-card"><img src="../image/si3.avif" alt="Service 3">
                        <h1>Build an Enterprise Chatbot with AI Solutions </h1>
                        <p>Learn how to create AI-powered chatbots using Oracle Digital Assistant, OCI Data Science, LangChain, and Oracle Database 23ai..</p>
                    </div>
                </div>
            </div>

            <div class="service-section" id="analytics-and-ai">
                <h2>Analytics and AI</h2>
                <div class="services-grid">
                    <div class="service-card"><img src="../image/si4.avif" alt="Service 4">
                        <h1>Build a Multicloud AI Chatbot with Google </h1>
                        <p>Learn how to deploy a RAG-based chatbot using Oracle Database 23ai and Google Vertex AI on GCP..</p>
                    </div>
                    <div class="service-card"><img src="../image/si5.webp" alt="Service 5">
                        <h1>Build an AI-Powered Photo Analysis App</h1>
                        <p>Learn how to create a photo analysis app using generative AI, Oracle Cloud Infrastructure, and Streamlit.</p>
                    </div>
                    <div class="service-card"><img src="../image/si6.avif" alt="Service 6">
                        <h1>Speak with AI About Your Data Using Real-Time NL2SQL AI </h1>
                        <p>Enable real-time, natural language data interaction with AI-driven NL2SQL and Oracle Autonomous Database.</p>
                    </div>
                </div>
            </div>

            <div class="service-section" id="compute">
                <h2>Compute</h2>
                <div class="services-grid">
                    <div class="service-card"><img src="../image/si7.avif" alt="Service 7">
                        <h1>AI Solutions for Knowledge Assistants </h1>
                        <p>Build AI chatbots using Oracle 23AI Vector Search, Oracle OCI Generative AI Service, and LlamaIndex. Integrate private and public data sets for smarte...</p>
                    </div>
                    <div class="service-card"><img src="../image/si8.avif" alt="Service 8">
                        <h1>AI Vector Search in APEX</h1>
                        <p>Implement AI Vector Search in Oracle APEX using Oracle Database 23ai for context-aware, semantic similarity search.</p>
                    </div>
                    <div class="service-card"><img src="../image/si9.avif" alt="Service 9">
                        <h1>Automate Defect Detection with Drones</h1>
                        <p>Streamline construction with OCI Vision’s AI for early anomaly detection using drones. Save time and costs with automated quality control.</p>
                    </div>
                </div>
            </div>

            <div class="service-section" id="containers">
                <h2>Containers</h2>
                <div class="services-grid">
                    <div class="service-card"><img src="../image/si10.avif" alt="Service 10">
                        <h1>Automate Invoice Processing with AI</h1>
                        <p>Learn to automate invoice extraction with OCI Document Understanding. Simplify document processing in ERP systems using AI.</p>
                    </div>
                    <div class="service-card"><img src="../image/si11.avif" alt="Service 11">
                        <h1>Breast and Lung Cancer Research with AI</h1>
                        <p>Learn how OCI Vision and Oracle APEX can help in breast and lung cancer research through advanced AI and machine learning models.</p>
                    </div>
                    <div class="service-card"><img src="../image/si12.avif" alt="Service 12">
                        <h1>Build a GenAI-Based Procurement App </h1>
                        <p>Discover a GenAI-based app that transforms procurement by enabling natural language queries for real-time ERP system data.</p>
                    </div>
                </div>
            </div>

            <div class="service-section" id="data-lake">
                <h2>Data Lake</h2>
                <div class="services-grid">
                    <div class="service-card"><img src="../image/si13.avif" alt="Service 13">
                        <h1>Build a Movie Recommendation App</h1>
                        <p>Create a movie recommendation app using HeatWave AutoML, Oracle APEX, and machine learning for tailored suggestions and powerful admin dashboards.</p>
                    </div>
                    <div class="service-card"><img src="../image/si14.avif" alt="Service 14">
                        <h1>Build AI Chatbot with Oracle Database 23ai</h1>
                        <p>Learn to create a smart chatbot using Oracle Database 23ai and OCI Generative AI with this comprehensive tutorial.</p>
                    </div>
                    <div class="service-card"><img src="../image/si15.avif" alt="Service 15">
                        <h1>Build Database Chatbots with SQL Dialog Skills</h1>
                        <p>Learn to build chatbots with SQL dialog skills using AI and ML for natural language processing and database interactions.</p>
                    </div>
                </div>
            </div>

            <div class="service-section" id="developer-services">
                <h2>Developer Services</h2>
                <div class="services-grid">
                    <div class="service-card"><img src="../image/si16.avif" alt="Service 16">
                        <h1>Deploy a Chatbot with OCI Generative AI Agents </h1>
                        <p>Access valuable insights from PDF documents and unstructured manuals with natural language queries..</p>
                    </div>
                    <div class="service-card"><img src="../image/si17.avif" alt="Service 17">
                        <h1>Email Invoice Processing with AI</h1>
                        <p>Learn to automate email invoice processing using OCI Document Understanding and Oracle Integration Cloud, and free up your staff for key tasks.</p>
                    </div>
                    <div class="service-card"><img src="../image/si18.avif" alt="Service 18">
                        <h1>Email Sorting and Sentiment Analysis with AI</h1>
                        <p>
                        Use AI to automate email tasks with real-time categorization, sentiment analysis, and instant replies for an efficient workflow.</p>
                    </div>
                </div>
            </div>

            <div class="service-section" id="generative-ai">
                <h2>Generative AI</h2>
                <div class="services-grid">
                    <div class="service-card"><img src="../image/si19.avif" alt="Service 19">
                        <h1>Migrate Data and Create a Powerful Knowledge Hub</h1>
                        <p>Discover how to convert documents into actionable insights using OCI Generative AI, OpenSearch, and RAG in our interactive demo.</p>
                    </div>
                    <div class="service-card"><img src="../image/si21.avif" alt="Service 20">
                        <h1>Object Detection with OCI Vision</h1>
                        <p>Discover OCI Vision for object detection in manufacturing, retail, and other industries. Improve quality control and analysis with advanced AI technology.</p>
                    </div>
                    <div class="service-card"><img src="../image/si22.avif" alt="Service 21">
                        <h1>ONNX for PDF Vectorization</h1>
                        <p>Learn to use ONNX models to vectorize PDF content and build an AI search engine with Oracle APEX.</p>
                    </div>
                </div>
            </div>

        </main>
    </div>
      
        <!-- tab -->
        <h1>Typical scenarios</h1>
        <div class="tabs">

            <div class="tab active" onclick="showTab(0)">GenAI</div>
            <div class="tab" onclick="showTab(1)">Agents</div>
            <div class="tab" onclick="showTab(2)">AI Vector Search</div>
            <div class="tab" onclick="showTab(3)">In-database LLMs</div>
            <div class="tab" onclick="showTab(4)">Open source LLMs</div>
            <div class="tab" onclick="showTab(5)">Code Companion</div>
        </div>

        <!-- Tab Content -->
        <div class="tab-content active">

            <div class="container-8">
                <div class="content-9">
                    <h1>Build with OCI Generative AI</h1>
                    <h2 class="highlight">Harness the power of LLMs in a managed service</h2>
                    <p>In the fast-paced world of software development, staying informed is crucial. Imagine having an AI assistant that can help quickly transform a complex webpage into content that’s bite-sized, easily consumable, and shareable.</p>
                    <p>Below is an example of how you can build such an AI assistant with OCI Generative AI.</p>
                    <p>The AI-powered GitHub trending projects summarizer retrieves and summarizes the top 25 trending GitHub projects.</p>
                    <h2>Choosing models</h2>
                    <p>You can easily switch between multiple LLMs offered through OCI Generative AI:</p>
                    <ul>
                        <li><b>cohere.command-r-16k:</b> A versatile model for text generation, summarization, and translation.</li>
                        <li><b>cohere.command-r-plus:</b> An advanced model with deep language capabilities.</li>
                        <li><b>meta.llama-3.1-70b-instruct:</b> A 70B model with multilingual support.</li>
                        <li><b>meta.llama-3.1-405b-instruct:</b> A large-scale model (405B parameters) for enterprise applications.</li>
                    </ul>
                </div>
                <div class="video1">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/60AQ-Y8pAns?si=BgNxaR5RDA5q1qaO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p>Watch the sample solution video (1:36)</p>
                </div>
            </div>
            <h2>SQL Query Example</h2>
            <div class="code-block">
                <pre id="code1">
        UPDATE SM_POSTS
        SET AI_IMAGE_VECTOR = TO_VECTOR(VECTOR_EMBEDDING (DOC_MODEL
        USING AI_IMAGE_DESCRIPTION AS DATA));
                    </pre>
            </div>
        </div>
        <div class="tab-content">
            <div class="container-9">
                <div class="content-10">
                    <h1>Use OCI Generative AI Agents with RAG</h1>
                    <h2 class="highlight">Provide improved access to knowledge bases</h2>
                    <p>Retrieval-augmented generation (RAG) is one of the most important use cases for AI. RAG lets you augment the knowledge of an LLM without retraining it.</p>
                    <p>This allows the LLM to acquire up-to-date knowledge regardless of when the LLM was trained.</p>
                </div>
                <div class="video1">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/uUxDYiXr9lA?si=q_ncZ99dTAHI18tt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p>Watch the sample solution video (1:44)</p>
                </div>
            </div>
            <h2>SQL Query Example</h2>
            <div class="code-block">
              
                <pre id="code1">
                    # ask a question to RAG agent question = "What steps do I take if I have a new patient under the patient admission recommendations?" # Initialize service client with default config file agent_runtime_client = GenerativeAiAgentRuntimeClient(config)


                    chat_response = agent_runtime_client.chat( agent_endpoint_id="ocid1.test.oc1..<id>", chat_details=ChatDetails(user_message=question)) 
                    
                    # Get the data from response print(chat_response.data)
                    </pre>
            </div>
        </div>

        <div class="tab-content">
            <div class="container-10">
                <div class="conten11t">
                    <h1>Integrate advanced semantic search features into your applications</h1>
                    <h2 class="highlight">Oracle Database 23ai</h2>
                    <p>Oracle Database 23ai supports all modern data types and workloads, including vectors, AI, and ML capabilities.</p>

                    <p>By running Oracle APEX (a low-code application platform) on Oracle Database 23ai, AI Vector Search capabilities are available at no additional cost.</p>
                    <a href="read1.php">Read the blog post about the scenario.</a>
                </div>
                <div class="video1">
              
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/EaPFQttpwNQ?si=w1SJCH6-Q6iQYFs0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p>Watch the sample solution video (1:26)</p>
                </div>
            </div>
            <h2>SQL Query Example</h2>
            <div class="code-block">
               
                <pre id="code1">
        UPDATE SM_POSTS
        SET AI_IMAGE_VECTOR = TO_VECTOR(VECTOR_EMBEDDING (DOC_MODEL
        USING AI_IMAGE_DESCRIPTION AS DATA));
                    </pre>
            </div>
            <h2>SQL Query for Vector Search</h2>
            <div class="code-block">
              
                <pre id="code2">
                    SELECT A.*, TO_CHAR(ROUND(VECTOR_DISTANCE,2), '0.99')AS VECTOR_DISTANCE_DISPLAY FROM

                    (SELECT
                        p.id,
                        p.user_name,
                        p.comment_text,
                        p.file_blob,
                        p.file_mime,
                        p.post_date,
                        p.REACTIONS,
                        p.USER_REACTION_CSS,
                        p.CREATED,
                       (
                            CASE
                                WHEN :P1_SEARCH IS NOT NULL AND :P1_VECTOR_SEARCH = 'Y'
                                THEN VECTOR_DISTANCE (
                                    TO_VECTOR(VECTOR_EMBEDDING (doc_model USING :P1_SEARCH AS data)),
                                    ai_image_vector
                                )
                                ELSE NULL
                            END
                        ) AS vector_distance,
                        ai_image_description
                    FROM
                        mv_SM_POSTS p
                        WHERE
                        (:P1_VECTOR_SEARCH <> 'Y' AND :P1_SEARCH IS NOT NULL AND UPPER(ai_image_description) LIKE UPPER('%'||:P1_SEARCH||'%'))
                        OR :P1_VECTOR_SEARCH = 'Y'
                        OR :P1_SEARCH IS NULL
                    ORDER BY
                        vector_distance ASC, p.CREATED asc) A
                    </pre>
            </div>
        </div>
        <div class="tab-content">
            <div class="container-8">
                <div class="content-9">
                    <h1>Build with OCI Generative AI</h1>
                    <h2 class="highlight">Harness the power of LLMs in a managed service</h2>
                    <p>In the fast-paced world of software development, staying informed is crucial. Imagine having an AI assistant that can help quickly transform a complex webpage into content that’s bite-sized, easily consumable, and shareable.</p>
                    <p>Below is an example of how you can build such an AI assistant with OCI Generative AI.</p>
                    <p>The AI-powered GitHub trending projects summarizer retrieves and summarizes the top 25 trending GitHub projects.</p>
                    <h2>Choosing models</h2>
                    <p>You can easily switch between multiple LLMs offered through OCI Generative AI:</p>
                    <ul>
                        <li><b>cohere.command-r-16k:</b> A versatile model for text generation, summarization, and translation.</li>
                        <li><b>cohere.command-r-plus:</b> An advanced model with deep language capabilities.</li>
                        <li><b>meta.llama-3.1-70b-instruct:</b> A 70B model with multilingual support.</li>
                        <li><b>meta.llama-3.1-405b-instruct:</b> A large-scale model (405B parameters) for enterprise applications.</li>
                    </ul>
                </div>

                <div class="video1">
               
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/kbRl2UHgBLM?si=Ubbgc295g4YWXjB3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p>Watch the sample solution video (1:36)</p>
                </div>
            </div>
            <h2>SQL Query Example</h2>
            <div class="code-block">
               
                <pre id="code1">
        UPDATE SM_POSTS
        SET AI_IMAGE_VECTOR = TO_VECTOR(VECTOR_EMBEDDING (DOC_MODEL
        USING AI_IMAGE_DESCRIPTION AS DATA));
                    </pre>
            </div>
        </div>
        <div class="tab-content">
            <div class="container-9">
                <div class="content-10">
                    <h1>Use OCI Generative AI Agents with RAG</h1>
                    <h2 class="highlight">Provide improved access to knowledge bases</h2>
                    <p>Retrieval-augmented generation (RAG) is one of the most important use cases for AI. RAG lets you augment the knowledge of an LLM without retraining it.</p>
                    <p>This allows the LLM to acquire up-to-date knowledge regardless of when the LLM was trained.</p>
                </div>
                <div class="video1">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/3CnbDv5zE-U?si=HhWFV4NHeVP5i29W" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p>Watch the sample solution video (1:44)</p>
                </div>
            </div>
            <h2>SQL Query Example</h2>
            <div class="code-block">
                <pre id="code1">
                    # ask a question to RAG agent question = "What steps do I take if I have a new patient under the patient admission recommendations?" # Initialize service client with default config file agent_runtime_client = GenerativeAiAgentRuntimeClient(config)


                    chat_response = agent_runtime_client.chat( agent_endpoint_id="ocid1.test.oc1..<id>", chat_details=ChatDetails(user_message=question)) 
                    
                    # Get the data from response print(chat_response.data)
                    </pre>
            </div>
        </div>

        <div class="tab-content">
            <h1>Build with <span class="highlight-1">Oracle Code Assist</span></h1>
            <div class="container-12">
                <div class="text-content-2">
                    <p><span class="highlight-1">Boost developer productivity and enhance code consistency</span></p>
                    <p>Oracle Code Assist is an AI code companion designed to help boost developer velocity and enhance code consistency.</p>
                    <p>To learn how to join the beta program and get started, visit our GitHub repository.</p>
                </div>
                <div class="video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/JmC63IGMMIg?si=H_M51TvWZqGIgcoF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <script>
            function copyCode() {
                const code = document.querySelector(".code-block pre").innerText;
                navigator.clipboard.writeText(code);
                alert("Code copied to clipboard!");
            }
        </script>

         <!-------------footer include-->
         <?php include("footer.php"); ?>
    </body>

</html>