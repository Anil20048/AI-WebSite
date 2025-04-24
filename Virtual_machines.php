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
            background-color: #fcfaf8;
        }
        
        .wrapper {
            width: 90%;
            margin: 0px auto;
            padding: 20px;
            justify-content: left;
            text-align: left;
            
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
        } 

        
@media screen and (max-width: 768px) {
    .wrapper {
        padding: 15px;
    }

    .heading {
        font-size: 28px;
    }

    .text {
        font-size: 14px;
    }

    .cta-button {
        padding: 8px 16px;
    }
}


@media screen and (max-width: 480px) {
    .wrapper {
        padding: 10px;
    }

    .heading {
        font-size: 24px;
        text-align: left; 
    }

    .line {
        margin: 0; 
    }

    .text {
        font-size: 14px;
        text-align: left;
    }

    .cta-button {
        width: 80%;
        text-align: center;
        padding: 12px;
    }
}

        .par-ani {
            margin: 40px 0px;
            width: 80%;
            height: auto;
            background: #fffefe;
            padding-left: 90px;
           
        }
        


@media screen and (max-width: 768px) {
    .par-ani {
        width: 90%; 
        padding: 30px 50px; 
    }
}


@media screen and (max-width: 480px) {
    .par-ani {
        width: 95%;
        padding: 20px; 
    }
}
        .benefits-section {
            padding: 40px;
            background-color: #f5f5f5;
        }
        .vir{
            text-align: left;
            padding-left: 45px;
        }
        h2 {
            font-size: 28px;
            font-weight: bold;
            padding-left: 10px;
        }
        .an{
            padding-left: 55px;
        }
        .underline-1 {
            width: 50px;
            height: 4px;
            background-color: #d4aa00;
            margin-left: 60px;
        }
      
        
        .benefits-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
            flex-wrap: wrap;
        }
    
        
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
      
        
        .benefit-card:hover {
            transform: translateY(-10px);
            border-bottom: 5px solid #ffcc00;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
        }
        
        h3 {
            font-size: 24px;
            font-weight: bold;
            color: #000;
        }
        
        p {
            font-size: 16px;
            color: #333;
        }
@media screen and (max-width: 768px) {
    .benefits-container {
        flex-direction: column;
        align-items: center;
    }
    
    .benefit-card {
        width: 80%;
    }
}
@media screen and (max-width: 480px) {
    .benefit-card {
        width: 95%;
    }

    h2 {
        font-size: 24px;
        padding: 0;
    }

    h3 {
        font-size: 20px;
    }
    .an{
            padding-left: 30px;
        }
    p {
        font-size: 14px;
    }
}       
        .use-case-container {
            width: 89%;
            margin-left: 80px;
            text-align: left;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
        }
        .use-case-title {
            color: #222;
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .use-case-description {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }
        .use-case-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .use-case-item {
            background: #ffffff;
            padding: 15px;
            border-radius: 10px;
            text-align: left;
            transition: transform 0.3s ease-in-out;
            height: 150px;
        }
        /* Icons */
        
        .use-case-icon {
            width: 40px;
            height: 40px;
            margin-bottom: 10px;
        }
        /* Text */
        
        .use-case-text {
            font-size: 16px;
            color: #333;
        }
        /* Responsive Design */

/* Tablet (768px and below) */
@media screen and (max-width: 768px) {
    .use-case-container {
        width: 95%;
        padding: 20px;
    }

    .use-case-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    }
}

/* Mobile (480px and below) */
@media screen and (max-width: 480px) {
    .use-case-container {
        width: 100%;
        padding: 15px;
    }

    .use-case-grid {
        grid-template-columns: 1fr;
    }

    .use-case-title {
        font-size: 22px;
    }

    .use-case-description,
    .use-case-text {
        font-size: 14px;
    }
}
        .container-ai {
            width: 100%;
            margin: auto;
            text-align: left;
            background: #F5F4F2;
        }
        
        .container-ai h1 {
            font-size: 32px;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .content-an {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            text-align: left;
            padding-left: 80px;
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
        /* Responsive Adjustments */
@media screen and (max-width: 768px) {
    .content-an {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        padding-left: 0;
        text-align: center;
    }
    
    .column {
        padding: 15px;
    }
}

@media screen and (max-width: 480px) {
    .content-an {
        grid-template-columns: 1fr;
    }
    
    .container-ai h1 {
        font-size: 26px;
    }

    .column h3 {
        font-size: 16px;
    }

    .column a {
        font-size: 13px;
    }
}
    </style>
    <div class="background-graphic">
        <div class="wrapper">
            <div class="heading">Virtual Machines for Data Science</div>
            <div class="line"></div>
            <div class="text">
                <p>With the explosion of business data—ranging from customer data to the Internet of Things—data scientists need the flexibility to explore and build models quickly. But purchasing new hardware to meet temporary or peak demand can involve
                    significant capital expense as well as a considerable amount of time.</p>
                <p>Oracle Cloud Infrastructure Virtual Machines (VMs) for Data Science are preconfigured environments that enable you to build models and deliver business value faster. Built on Oracle Cloud Infrastructure, these VMs offer exceptional performance,
                    security, and control. You can expand your compute resources as needed using compute autoscaling and keep costs under control by stopping compute instances when they are not needed.</p>
                <p>Compute options suitable for this VM image include a virtual machine with an NVIDIA GPU that can be up and running in under 15 minutes with preinstalled common IDEs, notebooks, and frameworks. Oracle Cloud Infrastructure VMs for Data Science
                    include basic sample data and code for you to test and explore.</p>
            </div>
            <a href="speech.php" class="cta-button">Speak to an AI expert</a>
        </div>
    </div>

    <div class="par-ani">
        <h1>Major wireless carrier achieves faster performance with AI solution built on Oracle Cloud Infrastructure</h1>
        <p>A large mobile network operator delivers an AI-powered virtual voice assistant in multiple languages to millions of users. The environment uses a cluster with 2 nodes of 8 GPUs each, connected as a cluster with 16 GPUs and 768GB of memory in each
            node, significantly reducing the training time of the model.</p>
        <p>The solution uses 100 million trainable parameters optimized in each iteration. Results include a speech-to-text performance increase of 2.4x and text-to-speech handled 30 to 50 percent faster, along with faster training of models.</p>
    </div>

    <section class="benefits-section">
        <div class="vir">
        <h2>Virtual Machines for Data Science benefits</h2>
    </div>
        <!-- <div class="underline-1"></div> -->
         <div class="an">
         <p>Built on Oracle Cloud Infrastructure, our solution for data science provides exceptional performance, security, and control and enables you to build models and deliver business value faster.</p>
         </div>
        
        <div class="benefits-container">
            <div class="benefit-card">
                <h3>Fast </h3>
                <p>Get up and running quickly. Just deploy the preconfigured image and start working. When you’re finished, teardown is just as easy.</p>
            </div>

            <div class="benefit-card">
                <h3>Easy to Use</h3>
                <p>Launch these images yourself in the cloud, quickly and easily—without the assistance or intervention of your IT organization.</p>
            </div>

            <div class="benefit-card">
                <h3>Everything You Need</h3>
                <p>Add additional compute resources in the cloud quickly and easily, by autoscaling or using Oracle Cloud Infrastructure Resource Manager.</p>
            </div>

            <!-- <tab>

            </tab> -->

            <div class="benefits-container">
                <div class="benefit-card">
                    <h3>Flexible </h3>
                    <p>Patented deep learning algorithms understand a user’s natural conversation, derive intent and context, and build memory from user behaviors in multiple language.</p>
                </div>

                <div class="benefit-card">
                    <h3>Customizable</h3>
                    <p>Use a GPU shape for deep-learning model training and inference or CPU-based compute for machine learning, according to your needs.</p>
                </div>

                <div class="benefit-card">
                    <h3>Low Cost</h3>
                    <p>Reduce your IT costs. For about US$30, you can run one model for a day on a Tesla P100 GPU in the cloud.</p>
                </div>
            </div>
    </section>

    <div class="use-case-container">
        <h2 class="use-case-title">Use Cases</h2>
        <p class="use-case-description">Oracle’s preconfigured environment for deep learning is useful in many industries across a wide range of applications.</p>

        <div class="use-case-grid">
            <div class="use-case-item">
                <img src="../image/database-solid.svg" alt="Database Icon" class="use-case-icon">
                <h3 class="use-case-text">Natural language processing</h3>
            </div>
            <div class="use-case-item">
                <img src="../image/magnifying-glass-plus-solid.svg" alt="Magnifier Icon" class="use-case-icon">
                <h3 class="use-case-text">Image recognition and classification</h3>
            </div>
            <div class="use-case-item">
                <img src="../image/business-time-solid.svg" alt="Shopping Cart Icon" class="use-case-icon">
                <h3 class="use-case-text">Recommendation engines for online retailers</h3>
            </div>
            <div class="use-case-item">
                <img src="../image/cart-flatbed-solid.svg" alt="Graph Icon" class="use-case-icon">
                <h3 class="use-case-text">Risk management</h3>
            </div>
            <div class="use-case-item">
                <img src="../image/chart-simple-solid.svg" alt="Briefcase Lock Icon" class="use-case-icon">
                <h3 class="use-case-text">Fraud detection for financial services</h3>
            </div>
        </div>
    </div>

    <div class="container-ai">
        <h1>Additional OCI resources</h1>

        <div class="content-an">
            <div class="column">
                <a href="blog.php">Blog: Jumpstart Your Deep Learning Using Oracle Cloud<br/>AI Data Science Virtual Machine Image</a>
                <a href="Ai_servicees.php">NVIDIA and Oracle Cloud Infrastructure GPU Cloud Platform</a>
            </div>

            <div class="column divider">
                <a href="Ai_Infrastructure.php">Oracle Cloud Marketplace: AI Datascience VM for Oracle <br/>Cloud Infrastructure</a>
            </div>
            <div class="column divider">
                <a href="Ai_Infrastructure.php">HPC on Oracle Cloud Infrastructure</a>
            </div>
        </div>
    </div>
     <!-------------footer include-->
     <?php include("footer.php"); ?>
</body>

</html>