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

 <!-------------header include-->
 <?php include("hader.php"); ?>
<style></style>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fdfdfd;
      color: #222;
      line-height: 1.6;
    }

    .section {
      padding: 60px 80px;
    }

    .section-title {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    .section-line {
      width: 50px;
      height: 4px;
      background-color: #e5c456;
      margin: 10px 0 30px;
    }

    /* ML Section */
    .ml-section {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #fdf3e4;
      padding: 60px 80px;
      flex-wrap: wrap;
    }

    .ml-section__content {
      flex: 1;
      max-width: 50%;
    }

    .ml-section__content p {
      margin-bottom: 30px;
    }

    .ml-section__button {
      padding: 12px 20px;
      background-color: #222;
      color: #fff;
      border: none;
      cursor: pointer;
      font-size: 1rem;
      border-radius: 6px;
    }

    .ml-section__image {
      flex: 1;
      max-width: 40%;
      text-align: right;
    }

    .ml-section__image img {
      max-width: 100%;
      height: auto;
    }

    /* Features Section */
    .features-section {
      background-color: #fff8ee;
    }

    .features-section__grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 40px;
    }

    .features-section__card {
      padding: 10px 0;
      display: flex;
      gap: 15px;
      align-items: flex-start;
    }

    .features-section__icon {
      font-size: 1.8rem;
      color:rgb(107, 107, 106);
      line-height: 1;
    }

    .features-section__text {
      flex: 1;
    }

    .features-section__title {
      font-size: 1.2rem;
      font-weight: bold;
      margin-bottom: 8px;
    }

    .features-section__desc {
      font-size: 1rem;
      color: #333;
    }

    @media (max-width: 768px) {
      .ml-section__content,
      .ml-section__image {
        max-width: 100%;
        flex: 100%;
        text-align: center;
      }

      .ml-section__image {
        margin-top: 30px;
      }

      .features-section__card {
        flex-direction: column;
        align-items: flex-start;
      }
    }

    .ai-benefits-section {
      padding: 60px 80px;
    }

    .ai-benefits-title {
      font-size: 2rem;
      font-weight: 600;
      margin-bottom: 10px;
      color: #1c1c1c;
    }

    .ai-benefits-underline {
      width: 40px;
      height: 4px;
      background-color: #e5c456;
      margin-bottom: 40px;
    }

    .ai-benefits-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
    }

    .ai-benefit-card {
      background-color: #fff;
      padding: 30px 25px;
      border-radius: 10px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.05);
      border-bottom: 4px solid #1f6b44;
      transition: transform 0.3s ease;
    }

    .ai-benefit-card:hover {
      transform: translateY(-5px);
    }

    .ai-benefit-title {
      font-size: 1.2rem;
      font-weight: 700;
      margin-bottom: 10px;
      color: #111;
    }

    .ai-benefit-description {
      font-size: 1rem;
      color: #444;
      line-height: 1.5;
    }

    @media (max-width: 768px) {
      .ai-benefits-section {
        padding: 40px 20px;
      }

      .ai-benefits-title {
        font-size: 1.5rem;
      }
    }
    .oracle-ai-section {
      padding: 60px 80px;
    }

    .oracle-ai-title {
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 50px;
    }

    .oracle-ai-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 40px;
    }

    .oracle-ai-card {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    .oracle-ai-heading {
      font-size: 1.2rem;
      font-weight: 700;
      margin-bottom: 10px;
      position: relative;
      display: inline-block;
      transition: color 0.3s ease;
    }

    .oracle-ai-underline {
      width: 60px;
      height: 3px;
      background-color: #111;
      transition: background-color 0.3s ease;
      margin-bottom: 10px;
    }

    .oracle-ai-description {
      font-size: 1rem;
      line-height: 1.6;
      color: #444;
    }

    /* Hover effect */
    .oracle-ai-card:hover .oracle-ai-heading {
      color: #0077b6;
    }

    .oracle-ai-card:hover .oracle-ai-underline {
      background-color: #0077b6;
    }

    @media (max-width: 768px) {
      .oracle-ai-section {
        padding: 40px 20px;
      }

      .oracle-ai-title {
        font-size: 1.5rem;
      }
    }

   
    .background-cover {
            /* background: url('../image/ditabbg1.avif') no-repeat center center/cover, url('../image/ditabbg2.png') no-repeat center center/cover; */
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
        
        .content-box  h2 {
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

       .mac{
        background-color: #2c2421;
        color: #f8d6d0
       }
        .quote-section {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      padding: 60px 40px;
    }

    .quote-text {
      flex: 1;
      min-width: 300px;
      padding: 20px;
    }

    .quote-text blockquote {
      font-size: 2rem;
      font-weight: 500;
      margin: 0;
      line-height: 1.4;
      position: relative;
    }

    .quote-text blockquote::before {
      content: "“";
      font-size: 4rem;
      color: #fbb;
      position: absolute;
      left: -30px;
      top: -10px;
    }

    .quote-author {
      margin-top: 20px;
      font-weight: bold;
      color: #fff;
    }

    .quote-text .quote-btn {
      margin-top: 30px;
      padding: 10px 20px;
      font-size: 1rem;
      font-weight: bold;
      background: #fff;
      color: #000;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .quote-image {
      flex: 1;
      min-width: 300px;
      padding: 20px;
      text-align: center;
    }

    .quote-image img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }

    @media (max-width: 768px) {
      .quote-section {
        flex-direction: column;
        text-align: center;
      }

      .quote-text blockquote {
        font-size: 1.5rem;
      }
    }
  </style>

<body>

  <!-- ML Services -->
  <section class="ml-section">
    <div class="ml-section__content">
      <h2 class="section-title">Machine Learning Services</h2>
      <div class="section-line"></div>
      <p>
      Machine Learning Services provide access to pre-built algorithms and tools that enable businesses to leverage the power of machine learning without requiring extensive in-house expertise or infrastructure. These services encompass a range of functions, from data preparation and model training to deployment and monitoring, allowing businesses to build and deploy sophisticated machine learning models more efficiently. 
      </p>
      <button class="ml-section__button">Speak to an AI expert</button>
    </div>
    <div class="ml-section__image">
      <img src="../image/mc le.jpg" alt="AI Graphic" />
    </div>
  </section>

  <!-- Features -->
  <section class="section features-section">
    <h2 class="section-title">AI and ML features</h2>
    <div class="section-line"></div>

    <div class="features-section__grid">

      <div class="features-section__card">
        <div class="features-section__icon"><i class="fa-solid fa-circle-check"></i></div>
        <div class="features-section__text">
          <h3 class="features-section__title">Vector databases designed for AI</h3>
          <p class="features-section__desc">
          Vector databases store and search high-dimensional AI embeddings efficiently, enabling fast similarity search for content like text, images, or audio. Designed for AI use cases such as chatbots, semantic search, and recommendation systems, popular options include Pinecone, Weaviate, Milvus, Qdrant, and Chroma, often supporting hybrid search and real-time updat
          </p>
        </div>
      </div>

      <div class="features-section__card">
        <div class="features-section__icon"><i class="fa-solid fa-circle-check"></i></div>
        <div class="features-section__text">
          <h3 class="features-section__title">Open source libraries and frameworks</h3>
          <p class="features-section__desc">
          Open-source libraries and frameworks empower developers with reusable code for building software efficiently. Widely used in AI, web, and app development, they foster collaboration, innovation, and transparency. Examples include TensorFlow, PyTorch, React, Django, and Node.js, offering scalable solutions while reducing development time and cost across various programming ecosystems.
          </p>
        </div>
      </div>

      <div class="features-section__card">
        <div class="features-section__icon"><i class="fa-solid fa-circle-check"></i></div>
        <div class="features-section__text">
          <h3 class="features-section__title">In-database optimized algorithms</h3>
          <p class="features-section__desc">
          In-database optimized algorithms perform data processing directly within the database, reducing data movement and improving performance. Used in analytics, machine learning, and AI, they leverage database engines for tasks like classification, clustering, and regression. This approach enhances scalability, efficiency, and real-time insights by keeping computations close to the data source.
          </p>
        </div>
      </div>

      <div class="features-section__card">
        <div class="features-section__icon"><i class="fa-solid fa-circle-check"></i></div>
        <div class="features-section__text">
          <h3 class="features-section__title">Easy access and deployment</h3>
          <p class="features-section__desc">
          Easy access and deployment simplify the use of tools and applications by minimizing setup time and technical barriers. Cloud platforms, APIs, and containerization (e.g., Docker) enable seamless integration, scalability, and cross-platform compatibility. This accelerates development, reduces infrastructure overhead, and empowers users to launch and manage solutions with minimal effort.
          </p>
        </div>
      </div>

      <div class="features-section__card">
        <div class="features-section__icon"><i class="fa-solid fa-circle-check"></i></div>
        <div class="features-section__text">
          <h3 class="features-section__title">Query data using natural language</h3>
          <p class="features-section__desc">
          Querying data using natural language allows users to interact with databases or systems through everyday language instead of complex syntax. Powered by AI and NLP, this approach simplifies data access, making insights more accessible to non-technical users. Tools like ChatGPT, Text-to-SQL, and NLQ interfaces enable intuitive data exploration.
          </p>
        </div>
      </div>

      <div class="features-section__card">
        <div class="features-section__icon"><i class="fa-solid fa-circle-check"></i></div>
        <div class="features-section__text">
          <h3 class="features-section__title">Support for multiple scripting languages</h3>
          <p class="features-section__desc">
          Support for multiple scripting languages allows systems and platforms to accommodate diverse programming needs, enabling developers to work in languages they’re most comfortable with. This flexibility enhances integration, productivity, and collaboration. Commonly supported languages include Python, R, JavaScript, and SQL, making tools versatile for data analysis, automation, and application development.
          </p>
        </div>
      </div>

    </div>
  </section>
  <section class="ai-benefits-section">
    <h2 class="ai-benefits-title">Why use machine learning and AI for Oracle data platforms?</h2>
    <div class="ai-benefits-underline"></div>

    <div class="ai-benefits-cards">
      <div class="ai-benefit-card">
        <h3 class="ai-benefit-title">Create and validate models faster</h3>
        <p class="ai-benefit-description">
        Creating and validating models faster accelerates the machine learning lifecycle by streamlining data preparation, training, testing, and evaluation. Tools like AutoML, prebuilt pipelines, and integrated environments enable rapid experimentation. This speed boosts productivity, reduces time-to-insight, and allows for quicker iteration, leading to more accurate and efficient AI solutions.
        </p>
      </div>

      <div class="ai-benefit-card">
        <h3 class="ai-benefit-title">Get better results with more data</h3>
        <p class="ai-benefit-description">
        Getting better results with more data enhances model accuracy and generalization by providing richer patterns and reducing bias. Larger datasets help machine learning models learn complex relationships more effectively, improving predictions and performance. Techniques like data augmentation and distributed training further boost outcomes, especially in AI tasks like NLP and vision.
        </p>
      </div>

      <div class="ai-benefit-card">
        <h3 class="ai-benefit-title">Benefit from seamless integration</h3>
        <p class="ai-benefit-description">
        Benefiting from seamless integration means different tools, systems, or platforms work together smoothly without manual intervention. This streamlines workflows, reduces errors, and enhances productivity. In AI and software development, seamless integration enables efficient data flow, real-time updates, and faster deployment by connecting APIs, databases, and services effortlessly across the tech stack.
        </p>
      </div>
    </div>
  </section>
  <section class="oracle-ai-section">
    <h2 class="oracle-ai-title">Oracle machine learning and generative AI services</h2>

    <div class="oracle-ai-grid">
      <!-- Card 1 -->
      <div class="oracle-ai-card">
        <h3 class="oracle-ai-heading">AI Vector Search in Oracle Database 23ai</h3>
        <div class="oracle-ai-underline"></div>
        <p class="oracle-ai-description">
        Oracle Database 23c (also known as Oracle Database 23) introduces advanced AI capabilities, including vector search features. With AI vector search, Oracle allows for efficient querying of high-dimensional vector data, commonly used in AI applications like semantic search, recommendation systems, and natural language processing.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="oracle-ai-card">
        <h3 class="oracle-ai-heading">HeatWave GenAI</h3>
        <div class="oracle-ai-underline"></div>
        <p class="oracle-ai-description">
        Oracle HeatWave GenAI is an integrated, automated, and secure generative AI service embedded within Oracle MySQL HeatWave. It enables enterprises to leverage large language models (LLMs) and vector-based semantic search without requiring AI expertise, data migration, or additional infrastructure.​
        </p>
      </div>

      <!-- Card 3 -->
      <div class="oracle-ai-card">
        <h3 class="oracle-ai-heading">OCI Data Science</h3>
        <div class="oracle-ai-underline"></div>
        <p class="oracle-ai-description">
        OCI Data Science is a cloud-based platform provided by Oracle Cloud Infrastructure (OCI), designed to help data scientists build, train, and deploy machine learning models efficiently. It offers a suite of tools and services for collaborative data science, model training, and operationalizing machine learning at scale.
        </p>
      </div>

      <!-- Card 4 -->
      <div class="oracle-ai-card">
        <h3 class="oracle-ai-heading">OCI Data Science AI Quick Actions</h3>
        <div class="oracle-ai-underline"></div>
        <p class="oracle-ai-description">
        OCI Data Science AI Quick Actions are pre-built, automated workflows within Oracle Cloud Infrastructure (OCI) Data Science designed to simplify and accelerate common machine learning tasks. These actions help data scientists and developers quickly perform AI tasks without having to manually configure every aspect, thereby speeding up the model-building process.
        </p>
      </div>

      <!-- Card 5 -->
      <div class="oracle-ai-card">
        <h3 class="oracle-ai-heading">Autonomous Database Select AI</h3>
        <div class="oracle-ai-underline"></div>
        <p class="oracle-ai-description">
        Autonomous Database on Oracle Cloud Infrastructure (OCI) offers powerful capabilities for integrating and utilizing AI (Artificial Intelligence) directly within the database. By combining the strengths of autonomous database features with built-in AI tools, users can automate complex tasks like data processing, predictive analytics, and even machine learning model creation, all within the same platform.
        </p>
      </div>

      <!-- Card 6 -->
      <div class="oracle-ai-card">
        <h3 class="oracle-ai-heading">Machine Learning in Oracle Database</h3>
        <div class="oracle-ai-underline"></div>
        <p class="oracle-ai-description">
        Machine Learning in Oracle Database enables users to build, train, and deploy machine learning (ML) models directly within Oracle’s relational database platform, without the need to move data to external systems. This feature is particularly valuable for organizations looking to leverage the power of machine learning while maintaining the security, scalability, and performance benefits of Oracle's database infrastructure.
        </p>
      </div>
       <!-- Card 7 -->
      <div class="oracle-ai-card">
        <h3 class="oracle-ai-heading">Machine learning in HeatWave</h3>
        <div class="oracle-ai-underline"></div>
        <p class="oracle-ai-description">
        Machine Learning in HeatWave refers to the integration of machine learning capabilities within Oracle MySQL HeatWave, a fully managed cloud service designed for high-performance analytics. HeatWave enables users to run analytics and machine learning workloads directly on MySQL data without needing to transfer data to separate analytics or AI platforms. This integration simplifies the process of building, training, and deploying machine learning models directly within the database, making it easier for businesses to leverage their data for AI-driven insights.
        </p>
      </div>

      <!-- Card 8 -->
      <div class="oracle-ai-card">
        <h3 class="oracle-ai-heading">OCI Data Labeling</h3>
        <div class="oracle-ai-underline"></div>
        <p class="oracle-ai-description">
        OCI Data Labeling is a fully managed service provided by Oracle Cloud Infrastructure (OCI) that helps businesses label and organize data for machine learning (ML) and artificial intelligence (AI) models. Data labeling is a crucial part of the machine learning pipeline, as accurately labeled data is essential for training accurate models. The OCI Data Labeling service streamlines the process of labeling large datasets, providing tools for annotating text, images, and other types of data, which can then be used to train, test, and deploy ML models.
        </p>
      </div>

      <!-- Card 9 -->
      <div class="oracle-ai-card">
        <h3 class="oracle-ai-heading">OCI virtual machines for data science</h3>
        <div class="oracle-ai-underline"></div>
        <p class="oracle-ai-description">
        OCI Virtual Machines for Data Science are high-performance compute instances provided by Oracle Cloud Infrastructure (OCI), specifically optimized to support the intensive computational workloads required for data science, machine learning (ML), and artificial intelligence (AI) tasks. These virtual machines (VMs) offer a flexible and scalable environment for data scientists, researchers, and developers to build, train, and deploy machine learning models, analyze large datasets, and run complex algorithms.e.
        </p>
      </div>
    </div>
  </section>
  
<!-- Background -->
<div class="beg-center">
        <div class="background-cover"></div>

        <div class="wrapper-container">
            <h1>Use cases for ML and generative AI for data platforms</h1>

            <!-- Tabs -->
            <div class="menu-tabs">
                <div class="menu-item menu-active" onclick="changeTab('trial-section')">Build predictive models</div>
                <div class="menu-item" onclick="changeTab('labs-section')">Use database ML</div>
                <div class="menu-item" onclick="changeTab('support-section')">Deliver personalized recommendations</div>
                <div class="menu-item" onclick="changeTab('support-section-1')">Analysis generation</div>
            </div>

            <div class="content-sections">
                <!-- Free Trial Content -->
                <div class="content-box content-active" id="trial-section">
                    <h2>See how Prosperdtx deployed an architecture that could securely handle large amounts of source data to build predictive models with Oracle Cloud Infrastructure Data Science..

                    </h2>
                    <div class="image-box-i">
                    <img src="../image/aiin5.avif" alt="">
                    </div>
                </div>

                <!-- LiveLabs Content -->
                <div class="content-box" id="labs-section">
                    <h2>With Machine Learning in Oracle Database, data scientists can save time by moving the data to external systems for analysis and model building, scoring, and deployment.

                    </h2>
                    <div class="image-box-i">
                    <img src="../image/aiin6.avif" alt="">
                    </div>

                </div>

                <!-- Contact Us Content -->
                <div class="content-box" id="support-section">
                    <h2>The sample MovieHub application showcases how the HeatWave AutoML recommender system generates personalized, machine learning–powered recommendations. Follow our step-by-step instructions to build the MovieHub app using Oracle APEX—no coding required.</h2>
                    <img src="../image/aiin7.avif" alt="">

                </div>
                <div class="content-box" id="support-section-1">
                    <h2>You can combine the power of generative AI with other built-in HeatWave capabilities, such as machine learning, to help reduce costs and obtain more accurate results faster. In this example, a manufacturing company does so for predictive maintenance. Engineers can use Oracle HeatWave AutoML to help automatically produce a report of anomalous production logs and HeatWave GenAI helps to rapidly determine the root cause of the issue by simply asking a question in natural language, instead of manually analyzing the logs.



                    </h2>
                    <div class="image-box-i">
                    <img src="../image/aiin8.avif" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

   <div class="mac">
   <div class="quote-section">
    <div class="quote-text">
      <blockquote>
      By integrating generative AI into its Fusion SaaS applications, Oracle is revolutionizing how businesses operate. This integration enhances productivity, automates routine processes, and enables smarter decision-making across departments. Customers benefit from tailored experiences, predictive insights, and faster time-to-value. 
      </blockquote>
      <div class="quote-author">Dave Vellante, Chief Analyst, theCUBE Research</div>
      <!-- <button class="quote-btn">Read more</button> -->
    </div>
    <div class="quote-image">
      <img src="../image/mla1.jpeg" alt="Stack diagram" />
    </div>
  </div>
   </div>
<script>
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
 <!-------------footer include-->
 <?php include("footer.php"); ?>
</body>
</html>
