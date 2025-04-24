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
            font-size: 1.2em;
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

    .text-section h1 {
        font-size: 1.8em;
    }

    .video-section-1 img {
        width: 80%;
    }
}

@media (max-width: 768px) {
    .text-section {
        max-width: 100%;
    }

    .text-section h1 {
        font-size: 1.6em;
    }

    .text-section p {
        font-size: 0.9em;
    }

    .video-section-1 img {
        width: 100%;
    }
}

@media (max-width: 480px) {
    .cont {
        padding: 20px;
    }

    .text-section h1 {
        font-size: 1.4em;
    }

    .text-section p {
        font-size: 0.8em;
    }

    .button {
        padding: 8px 16px;
        font-size: 0.9em;
    }

    .video-section-1 img {
        width: 100%;
    }
    .underline{
        margin-left: 50px;
    }
}
        .cards-wrapper-1 {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            background-color: #fff;
            width: 100%;
        }
        
        .card-item {
            width: 30%;
            background: #fff;
            border-radius: 8px;
           
            text-align: left;
        }
        
        .card-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        
        .card-title {
            margin: 10px 0;
            font-size: 18px;
            font-weight: bold;
        }
        
        .card-description {
            font-size: 14px;
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
         .container-ai {
  width: 90%;
  margin: auto;
  padding: 60px 20px;
  box-sizing: border-box;
}

.container-ai h2 {
  font-size: 1.6rem;
  color: #111;
  margin-bottom: 30px;
  text-align: left;
}

/* Flex Row */
.ai-row {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  gap: 40px;
  flex-wrap: wrap;
}
.ai-text {
  flex: 1;
  min-width: 300px;
  font-size: 1rem;
  color: #333;
  line-height: 1.6;
}
.ai-image {
  flex: 1;
  min-width: 300px;
}

.ai-image img {
  width: 100%;
  height: auto;
  border-radius: 10px;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

/* Responsive: Stack on small screens */
@media screen and (max-width: 768px) {
  .ai-row {
    flex-direction: column;
    text-align: center;
  }

  .container-ai h2 {
    text-align: center;
  }

  .ai-text {
    font-size: 0.95rem;
  }
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
            font-size: 28px;
            margin: 0;
            color: #000;
        }
        
        .feature p {
            font-size: 14px;
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
        
        .benefits-section {
            padding: 40px;
            background-color: #f5f5f5;
        }
        
        h2 {
            font-size: 28px;
            font-weight: bold;
            padding-left: 10px;
        }
        
        .underline {
            width: 50px;
            height: 4px;
            background-color: #d4aa00;
            margin-left: 2px;
        }
.hero-1 {
    width: 100%;
    padding: 60px 20px;
    background-color: #f9f9f9;
    display: flex;
    justify-content: center;
    box-sizing: border-box;
}

/* Flex Container */
.hero-content {
    display: flex;
  width: 90%;
    width: 100%;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    flex-wrap: wrap;
}

/* Image Left */
.hero-image {
    flex: 1;
    min-width: 350px;
}

.hero-image img {
    width: 100%;
    height: auto;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Text Right */
.hero-text {
    flex: 1;
    min-width: 300px;
}

.hero-text h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #111;
}

.hero-text p {
    font-size: 1.2rem;
    line-height: 1.6;
    color: #333;
}

/* Responsive: Stack on Mobile */
@media (max-width: 768px) {
    .hero-content {
        flex-direction: column;
        text-align: center;
    }

    .hero-text h2 {
        font-size: 1.6rem;
    }

    .hero-text p {
        font-size: 0.95rem;
    }
}


        /* News Section */
        
        .news {
            padding: 40px 20px;
            background-color: white;
        }
        
        .news-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            width: 98%;
            margin: auto;
        }
        
        .news-item {
            background: #fff;
            padding: 20px;
            transition: transform 0.3s;
            border-right: 2px solid rgb(50, 53, 52);
        }
        
        .remove {
            border-right: none !important;
        }
        
        .news-item:hover {
            transform: translateY(-5px);
        }
        
        .news-item h3 {
            font-size: 1.3em;
            color: #222;
        }
        
        .news-item p {
            font-size: 1em;
            color: #555;
        }
        
        .news-button {
            background-color: black;
            color: white;
            padding: 8px 12px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
            margin-top: 10px;
        }
        
        .news-button:hover {
            background-color: #333;
        } 
        .chat-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: white;
            padding: 10px 15px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }
        
        .chat-button img {
            width: 20px;
            margin-right: 5px;
        }
        /* Responsive adjustments */
@media (max-width: 768px) {
    .news {
        padding: 30px 10px;
    }

    .news-item h3 {
        font-size: 1.1em;
    }

    .news-item p {
        font-size: 0.95em;
    }

    .news-button {
        font-size: 13px;
        padding: 7px 10px;
    }

    .chat-button {
        bottom: 15px;
        right: 15px;
        padding: 8px 12px;
    }

    .chat-button img {
        width: 18px;
    }
}

@media (max-width: 480px) {
    .news-container {
        grid-template-columns: 1fr;
    }

    .news {
        padding: 20px 8px;
    }
    .news-item {
        border-right:none;
    }

    .chat-button {
        bottom: 10px;
        right: 10px;
        padding: 6px 10px;
    }

    .chat-button img {
        width: 16px;
    }
}
        .ontainer-ai {
            width: 90%;
            margin: auto;
            padding: 0px 0;
        }
        
        h2 {
            text-align: left;
            font-size: 2em;
            color: #000;
            margin-bottom: 20px;
            /* border-left: 4px solid #F4C542; */
            padding-left: 10px;
        }

        .pa p{
            width: 60%;
            padding-left: 10px;
        }
        /* Responsive adjustments */
@media (max-width: 768px) {
    h2 {
        font-size: 1.6em;
    }

    .pa p {
        width: 100%;
        font-size: 0.95em;
        padding-left: 5px;
    }
}

@media (max-width: 480px) {
    h2 {
        font-size: 1.4em;
    }

    .pa p {
        font-size: 0.9em;
        padding-left: 0;
    }
}
        .features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            width: 95%;
            margin-left: 50px;
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
            font-size: 28px;
            margin: 0;
            color: #000;
        }
        
        .feature p {
            font-size: 1.2em;
            color: #666;
            margin-top: 5px;
        }
        
/* Responsive adjustments */
@media (max-width: 1024px) {
    .features {
        grid-template-columns: repeat(2, 1fr);
        margin-left: 0;
    }

    .feature h3 {
        font-size: 1.3em;
    }

    .feature p {
        font-size: 0.95em;
    }
}

@media (max-width: 600px) {
    .features {
        grid-template-columns: 1fr;
    }

    .feature {
        flex-direction: row;
        align-items: flex-start;
    }

    .feature h3 {
        font-size: 1.2em;
    }

    .feature p {
        font-size: 0.9em;
    }
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
    z-index: 1000;
    transition: transform 0.3s ease;
}

.contact-box:hover {
    transform: translateY(-3px);
}

.contact-box img {
    width: 20px;
    height: 20px;
    margin-right: 8px;
}

/* Responsive adjustments */
@media (max-width: 600px) {
    .contact-box {
        bottom: 15px;
        right: 15px;
        padding: 8px 12px;
    }

    .contact-box img {
        width: 18px;
        height: 18px;
        margin-right: 6px;
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
            width: 100%;
            margin: auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            margin-left: 15px;
           
        }
        
        .main-content {
            flex: 2;
            padding: 20px;
            background-color: #FBF9F8;
        }
        
        .blog-sidebar {
            flex: 1;
            padding: 20px;
            background: #F5F4F2;
            border-left: 2px solid #ddd;
            /* border-radius: 5px; */
        }
        
        h2 {
            font-size: 24px;
            color: #333;
        }
        
        p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }
        
        .featured-blogs h3 {
            margin-bottom: 10px;
        }
        
        .featured-blogs a {
            text-decoration: none;
            color: #299029;
            display: block;
            margin-top: 10px;
        }
        
        .featured-blogs a:hover {
            text-decoration: underline;
        }
       /* Responsive adjustments */
@media (max-width: 768px) {
    .blog-container {
        flex-direction: column;
        padding: 15px;
    }

    .main-content,
    .blog-sidebar {
        padding: 15px;
        width: 100%;
        border-left: none;
    }

    .blog-sidebar {
        margin-top: 20px;
    }

    h2 {
        font-size: 22px;
    }

    p {
        font-size: 15px;
    }
}

@media (max-width: 480px) {
    h2 {
        font-size: 20px;
    }

    p {
        font-size: 14px;
    }

    .page-background {
        padding: 10px;
    }
}
        .cards-wrapper {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            padding-left: 55px;
            background-color: #fff;
            width: 100%;
        }
        
        .card-item {
            background: #fff;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        .card-item img {
            width: 100%;
            height: 200px;
            border-radius: 8px;
        } 
        .card-title {
            margin: 10px 0;
            font-size: 1.5em;
            font-weight: bold;
        }
        .card-description {
            font-size: 1.1em;
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
    .cards-wrapper {
        padding-left: 20px;
    }

    .card-item {
        width: 45%; 
    }
}

@media (max-width: 768px) {
    .card-item {
        width: 100%; 
    }
}

@media (max-width: 480px) {
    .cards-wrapper {
        padding: 10px;
        flex-direction: column;
    }

    .card-item {
        width: 100%; 
    }

    .card-title {
        font-size: 16px;
    }

    .card-description {
        font-size: 13px;
    }
}
    </style>


    <div class="cont">
        <div class="text-section">
            <h1>Machine Learning in Oracle Database</h1>
            <p>Machine Learning in Oracle Database supports data exploration, preparation, and machine learning (ML) modeling at scale using SQL, R, Python, REST, automated machine learning (AutoML), and no-code interfaces. It includes more than 30 high
                performance in-database algorithms producing models for immediate use in applications. By keeping data in the database, organizations can simplify their overall architecture and maintain data synchronization and security. It enables data
                scientists and other data professionals to build models quickly by simplifying and automating key elements of the machine learning lifecycle.</p>
            <a href="Ai_Infrastructure.php" class="button">Speak to an AI expert</a>
        </div>
        <div class="video-section-1">
            <img src="../image/ml1.avif" alt="Generative AI Video Thumbnail">
        </div>
    </div>
<section class="hero-1">
  <div class="hero-content">
    <div class="hero-image">
      <img src="../image/me1.jpeg" alt="Oracle Event">
    </div>
    <div class="hero-text">
      <h2>Announcing generative development (GenDev) for enterprise</h2>
      <p>
        We’re excited to announce Generative Development (GenDev) for Enterprise—a groundbreaking approach to software development powered by AI. GenDev accelerates innovation by transforming natural language into secure, scalable code, enabling teams to build, iterate, and deploy faster than ever before. Designed for the enterprise, it integrates seamlessly with existing workflows, ensures compliance, and scales with your business. From idea to implementation, GenDev empowers developers, enhances productivity, and unlocks new possibilities across your organization. Welcome to the future of enterprise development. Welcome to GenDev.
      </p>
    </div>
  </div>
</section>

    <!-- News Section -->
    <section class="news">
        <div class="news-container">
            <div class="news-item">
                <h3>Announcing Oracle Machine Learning monitoring on Autonomous Database</h3>
                <p>We’re excited to announce Oracle Machine Learning monitoring on Autonomous Database. Gain real-time insights into model performance, data drift, and prediction quality—directly within your database environment. Built-in monitoring ensures transparency, accuracy, and governance across the ML lifecycle. Smarter models, better decisions—now fully observable.</p>
             
            </div>
            <div class="news-item">
                <h3>Use custom third-party Python and R packages on Autonomous Database</h3>
                <p>Now you can use custom third-party Python and R packages on Oracle Autonomous Database. Extend your data science workflows with the libraries you know and love—right where your data lives. Bring advanced analytics, ML, and visualization tools into the database for faster, more powerful in-database development and execution.</p>
             
            </div>
            <div class="news-item">
                <h3>Run R at scale on database data with Oracle Machine Learning.</h3>
                <p>Run R at scale on database data with Oracle Machine Learning. Leverage the power of Autonomous Database to execute R scripts closer to your data—securely, efficiently, and without data movement. Scale analytics seamlessly, accelerate insights, and streamline workflows using familiar R tools within a high-performance, in-database environment.</p>
             
            </div>
            <div class="news-item remove">
                <h3>Embedding AI/ML in your application using Oracle Machine Learning</h3>
                <p>Embed AI/ML into your applications with Oracle Machine Learning. Build, train, and deploy models directly in Autonomous Database—no data movement needed. Use SQL, Python, or R to integrate intelligent predictions seamlessly into apps, automate decisions, and enhance user experiences with scalable, secure, in-database machine learning</p>
              
            </div>
        </div>
    </section>
    <div class="container-ai">
  <h2>Why choose Machine Learning in Oracle Database?</h2>

  <div class="ai-row">
    <div class="ai-text">
      <p>
        Oracle Database offers a powerful, secure, and scalable environment for enterprise-grade machine learning. With Oracle Machine Learning (OML), models are trained and deployed directly where the data resides—eliminating the need for data movement and reducing latency. You can use SQL, Python, or R to build and operationalize models efficiently, while leveraging Autonomous Database’s automation, performance, and security.
        <br><br>
        OML supports a wide range of algorithms for classification, regression, clustering, anomaly detection, and more. It also integrates seamlessly with data pipelines, enabling real-time predictions and embedding ML directly into applications.
        <br><br>
        With built-in tools for data exploration, model training, and lifecycle management, OML simplifies the ML workflow—from data prep to deployment. Whether you're a data scientist or developer, Oracle empowers you to scale AI/ML across your organization with ease. Choose Oracle Database for a smarter, faster, and more integrated machine learning experience.
      </p>
    </div>
    <div class="ai-image">
      <img src="../image/me2.jpeg" alt="Oracle ML">
    </div>
  </div>
</div>
        <div class="features">
            <div class="feature">
                <img src="../image/database-solid.svg" alt="Check">
                <div>
                    <h3>In-database operations</h3>
                    <p>Build models and score data faster and at scale without extracting data to separate analytics engines. Oracle Exadata’s scale-out architecture and Smart Scan technology help deliver results faster.</p>
                </div>
            </div>
            <div class="feature">
                <img src="../image/gear-solid.svg" alt="Check">
                <div>
                    <h3>Multiple language APIs</h3>
                    <p>Choose from SQL, Python, and R interfaces for in-database data exploration and preparation, machine learning modeling, and solution deployment. In addition, deploy Python and R solutions using SQL and REST.</p>
                </div>
            </div>
            <div class="feature">
                <img src="../image/shield-halved-solid.svg" alt="Check">
                <div>
                    <h3>No data movement</h3>
                    <p>Process data where it resides in Oracle Database to simplify data exploration and preparation as well as model building and deployment. Shorten application development time, reduce complexity, and address data security.</p>
                </div>
            </div>
            <div class="feature">
                <img src="../image/chart-pie-solid.svg" alt="Check">
                <div>
                    <h3>No-code model building</h3>
                    <p>Improve data scientist productivity and help nonexperts use powerful in-database algorithms for classification and regression through a no-code AutoML user interface.</p>
                </div>
            </div>
            <div class="feature">
                <img src="../image/circle-check-regular.svg" alt="Check">
                <div>
                    <h3>Data and model monitoring</h3>
                    <p>Gain insights into how your data and machine learning models evolve over time and take corrective action sooner to avoid issues that can have a significant negative impact on the enterprise. Use REST endpoints and no-code user interfaces.</p>
                </div>
            </div>
            <div class="feature">
                <img src="../image/cloud-solid.svg" alt="Check">
                <div>
                    <h3>Rapid enterprise deployments</h3>
                    <p>Achieve immediate machine learning model availability with easy deployment options using SQL and REST interfaces.</p>
                </div>
            </div>
            <!-- tab -->

            <div class="feature">
                <img src="../image/database-solid (1).svg" alt="Check">
                <div>
                    <h3>Bring your own model</h3>
                    <p>Import text transformer, classification, regression, and clustering models in Open Neural Network Exchange (ONNX) format to use from SQL with the in-database ONNX Runtime. Deploy ONNX format models to Oracle Machine Learning Services
                        for real-time inferencing use cases.</p>
                </div>
            </div>
            <div class="feature">
                <img src="../image/cloud-solid.svg" alt="Check">
                <div>
                    <h3>High performance compute</h3>
                    <p>Avoid performance issues during data preparation, model building, and data scoring using the built-in parallelism and scalability of Oracle Database, with unique optimizations for Oracle Exadata.
                    </p>
                </div>
            </div>
            <div class="feature">
                <img src="../image/circle-check-regular.svg" alt="Check">
                <div>
                    <h3>Built-in security</h3>
                    <p>Benefit from Oracle Database’s built-in security and encryption, role-based access to user data, in-database and third-party models, and R and Python objects and scripts.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="page-background">

        <div class="blog-container">
            <div class="main-content">
                <h2>Announcing GPU Support for Oracle Machine Learning Notebooks on Autonomous Database</h2>
                <p>Mark Hornick, Senior Director, Data Science and Machine Learning</p>
                <p>Oracle Autonomous Database Serverless now provides integrated access to GPUs through Oracle Machine Learning Notebooks. Develop Python code using the Oracle Machine Learning Notebooks Python interpreter for use cases requiring the performance
                    and scalability of GPUs, such as running vector embedding (transformer) models and building deep learning models for satellite image processing.</p>
                <p><a href="read1.php" style="color: #299029;">Read the complete post</a></p>
            </div>

            <div class="blog-sidebar">
                <h3>Featured blogs</h3>
                <div class="featured-blogs">
                    <p><strong>September 10, 2024</strong></p>
                    <a href="Generative.php">Announcing Select AI for Synthetic Data Generation</a>

                    <p><strong>September 10, 2024</strong></p>
                    <a href="Generative_AI_Service.php">Bring the Power of Graphs to Generative AI</a>

                    <p><strong>September 10, 2024</strong></p>
                    <a href="Generative_AI_Service.php">Announcing Oracle Machine Learning Services Data Bias Detector</a>

                    <p><strong>September 10, 2024</strong></p>
                    <a href="Data_Labeling.php">Now Available: Prebuilt Embedding Generation Model for Oracle Database 23ai</a>
                </div>
            </div>
        </div>
    </div>


    <div class="cards-wrapper">
        <div class="card-item">
            <img src="../image/ma1.jpeg" alt="AI Use Cases">
            <h3 class="card-title">Machine learning platform on Autonomous Data Warehouse</h3>
            <p class="card-description">With Oracle Autonomous Data Warehouse, you have all the necessary built-in tools to load and prepare data and to train, deploy, and manage machine learning models. You also have the flexibility to mix and match other tools to best fit your
                organization’s needs.</p>
         
        </div>

        <div class="card-item">
            <img src="../image/ma2.jpeg" alt="Oracle AI Strategy">
            <h3 class="card-title">Modern app development—machine learning and artificial intelligence</h3>
            <p class="card-description">Learn the design principles associated with creating a machine learning platform and an optimal implementation path. Use this pattern to create machine learning platforms that meet the needs of your data scientist users.</p>
         
        </div>

        <div class="card-item">
            <img src="../image/ma3.jpg" alt="OCI Generative AI RAG">
            <h3 class="card-title">Data platform—data warehouse with complex integration</h3>
            <p class="card-description">Get the framework to enrich enterprise application data with raw data from other sources, and then use machine learning models to bring intelligence and predictive insights into business processes.</p>
         
        </div>
        <div class="card-item">
            <img src="../image/ma4.png" alt="OCI Generative AI RAG">
            <h3 class="card-title">Design a data lakehouse for retail inventory analytics</h3>
            <p class="card-description">Discover the platform topology, component overview, and recommended best practices for implementing a successful data lakehouse on OCI to capture a wealth of data and aggregate and manage data for real-time stock visibility.</p>
         
        </div>
    </div>
  <!-------------footer include-->
  <?php include("footer.php"); ?>



</body>

</html>