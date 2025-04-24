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
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }
    
    .popup {
      
        display: flex;
        height: auto;
        background-color: #fff;
        flex-direction: column;
       margin-left: 35px;
    }
    
    .container-ali {
        width: 95%;
        display: flex;
        justify-content: center;
        gap: 30px;
        padding: 10px
    }
    
    .card-nli {
        width: 23%;
        height: 200px;
        background: white;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        transition: transform 0.3s;
        padding: 10px;
    }
    
    .card-nli:hover {
        transform: scale(1.1);
    }
    
    .card-nli img {
        width: 100%;
        height: 80px;
    }
    
    .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }
    
    .modal-content {
        background: white;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        position: relative;
        width: 50%;
        height: auto;
    }
    
    .close-btn {
        position: absolute;
        top: 10px; 
        right: 10px; 
        background: white;
        color: red;
        border: 2px solid red;
        width: 50px;
        height: 40px;
        cursor: pointer;
       border-radius: 20px;
    }
    
    .show {
        visibility: visible;
        opacity: 1;
    
    }
    
    .logo-ai-container {
        background-color: rgba(245, 244, 242, .5);
        text-align: center;
    }
    
    .logo-ai {
        width: 536px;
        height: 222px;
        display: block;
        margin: 0 auto;
    }
    
    h1 {
        text-align: left;
        font-size: 28px;
        margin: 10px 0;
        padding-left: 20px;
    }
    
    p {
        text-align: left;
        font-size: 18px;
        color: #555;
        padding-left: 20px;
        margin-right: 20px;
    }
    
    .button-container-ali {
        display: flex;
        justify-content: left;
        align-items: self-start;
        margin-top: 15px;
        padding: 20px;
    }
    
    .left-button {
        font-size: 20px;
        padding: 10px 20px;
        background-color: #0e0e0e;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }
    
    .left-button:hover {
        background-color: #404142;
    }
    
    .po-co {
        font-size: 20px;
        padding-left: 20px;
        text-align: left;
        justify-content: left;
    }
  


@media (max-width: 1024px) {
    .card-nli {
        width: 45%; 
    }

    .modal-content {
        width: 70%;
    }

    .logo-ai {
        width: 100%;
        height: auto;
    }
}

@media (max-width: 768px) {
    .container-ali {
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }

    .card-nli {
        width: 80%; 
    }

    .modal-content {
        width: 90%;
    }

    h1, p, .po-co {
        padding-left: 10px;
        margin-right: 10px;
    }

    .button-container-ali {
        padding: 10px;
    }

    .left-button {
        width: 100%;
        text-align: center;
    }
}
    .section-4 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: auto;
        background: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        height: 70vh;
        background: url(../image/bg.avif) center/cover no-repeat;
    }
    
    .content-5 {
        width: 50%;
        flex: 1;
        padding-right: 20px;
    }
    
    .content-5 h2 {
        font-size: 2.5rem;
        padding-left: 30px;
    }
    
    .content-5 p {
        font-size: 2em;
        color: black;
        width: 60%;
        padding-left: 30px;
    }
    
    .underline {
        width: 50px;
        height: 3px;
        background-color: #ffcc00;
        margin-left: 30px;
    }
    /* Responsive styles */
@media (max-width: 1024px) {
    .section-4 {
        flex-direction: column;
        height: auto;
        padding: 30px 20px;
        text-align: center;
    }

    .content-5 {
        width: 100%;
        padding-right: 0;
    }

    .content-5 h2,
    .content-5 p,
    .underline {
        padding-left: 0;
        margin: 0 auto;
    }

    .content-5 p {
        width: 80%;
    }
}

@media (max-width: 600px) {
    .content-5 h2 {
        font-size:2.5em;
        text-align: left;
        padding-left: 18px;
    
    }

    .content-5 p {
        font-size: 1rem;
        width: 90%;
    }

    .underline {
        width: 40px;
        margin-left: 20px;
    }
}
    .section-3 {
        display: flex;
        align-items: start;
        justify-content: left;
        margin-top: 30px;
        height: 80vh;
        background-color: #f5f5f5;
        padding: 20px;
        background: url(../image/bg1.webp) center/cover no-repeat;
    }
    
    .box7 {
        display: flex;
        width: 45%;
        max-width: 1000px;
        background: white;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
        margin-top: 100px;
        margin-left: 20px;
    }
    
    .content-7,
    .image {
        width: 90%;
        padding: 40px;
    }
    
    .content-7 p {
        font-size: 1.5rem;
        margin-bottom: 20px;
        color: #000000;
    }
    
    .content-7 button {
        padding: 10px 20px;
        background: #007bff;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        transition: 0.3s;
    }
    
    .content-7 button:hover {
        background: #0056b3;
    }
    
    .image-2 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .logo-ai1{
        width: 80px;
        margin-bottom: 15px;
        margin: 10px;
    }
    @media (max-width: 1024px) {
    .section-3 {
        flex-direction: column;
        align-items: center;
        height: auto;
        padding: 20px;
    }

    .box7 {
        flex-direction: column;
        width: 90%;
        margin: 50px 0 0 0;
    }

    .content-7,
    .image {
        width: 100%;
        padding: 30px 20px;
    }

    .image-2 img {
        height: auto;
    }

    .logo1 {
        width: 70px;
    }
}

@media (max-width: 600px) {
    .content-7 p {
        font-size: 14px;
    }

    .content-7 button {
        font-size: 14px;
        padding: 8px 16px;
    }

    .logo1 {
        width: 20px;
    }

    .box7 {
        margin-top: 30px;
    }
}
</style>
</head>

<body>
    <div class="section-4">
        <div class="content-5">
            <h2>AI ISVs</h2>
            <div class="underline"></div>
            <p>Oracle Cloud Infrastructure (OCI) has a broad selection of ISVs that offer AI services and capabilities to help customers
                 accelerate the development and deployment of production-ready AI, including large language model training for generative AI applications.
            </p>
        </div>
        <div class="empty-div"></div>
    </div>
    <div class="popup">
        <div class="po-co">
            <h1>Build and innovate with Oracle’s AI ISVs</h1>
        </div>
        <div class="container-ali">
            <div class="card-nli" onclick="openModal('modal-1')">
                <img src="../image/1.svg" alt="card-nli 1">
            </div>
            <div class="card-nli" onclick="openModal('modal-2')">
                <img src="../image/2.svg" alt="card-nli 2">
            </div>
            <div class="card-nli" onclick="openModal('modal-3')">
                <img src="../image/3.svg" alt="card-nli 3">
            </div>
            <div class="card-nli" onclick="openModal('modal-4')">
                <img src="../image/4.svg" alt="card-nli 4">
            </div>
        </div>
        <!-- Individual Modals -->
        <div class="modal" id="modal-1">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-1')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/1.svg" alt="logo-ai" class="logo-ai">
                </div>
                <h1>Deliver high performance AI at massive scale</h1>
                <p>Oracle Cloud Infrastructure (OCI) is the first platform to offer NVIDIA DGX Cloud, an AI training as a service for the era of generative AI, at scale to thousands of customers across industries. NVIDIA AI Enterprise, an end-to-end software
                    platform for production AI, on OCI allows customers to accelerate development and deployment of AI with enterprise supported software.</p>
                <div class="button-container">
                    <button class="left-button">See the press release</button>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-2">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-2')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/2.svg" alt="logo-ai" class="logo-ai">
                </div>
                <h1>Infuse AI into applications using Cohere large language models</h1>
                <p>Oracle has collaborated with Cohere to power Oracle Cloud Infrastructure’s generative AI services. Leveraging the performance of OCI to train their models, Cohere is working with Oracle to bring enterprise AI technology to businesses.</p>
                <div class="button-container">
                    <button class="left-button">Learn more </button>
                    <button class="left-button">See the press release</button>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-3">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-3')">&times;</button>

                <div class="logo-ai-container">
                    <img src="../image/3.svg" alt="logo-ai" class="logo-ai">
                </div>
                <p>Founded by leaders from PyTorch and Meta, Fireworks AI offers the fastest and highest quality platform to serve generative AI models aimed at accelerating product innovation and disruption. The company selected Oracle Cloud Infrastructure
                    to run inferencing and training workloads.</p>
                <div class="button-container">
                    <button class="left-button">Learn more </button>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-4">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-4')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/4.svg" alt="logo-ai" class="logo-ai">
                </div>
                <h1>Deploy AI models at scale</h1>
                <p>Reka AI builds generative AI models and does advanced AI research around general-purpose multimodal and multilingual agents, self-improving AI, and model efficiency. To support their work, Reka is using NVIDIA GPUs on Oracle Cloud Infrastructure.</p>
                <div class="button-container">
                    <button class="left-button">Learn More</button>
                </div>
            </div>
        </div>
        <!-- /-----------------------------------------------------------------------/ -->
        <div class="container-ali">
            <div class="card-nli" onclick="openModal('modal-5')">
                <img src="../image/5.svg" alt="card-nli 8">
            </div>
            <div class="card-nli" onclick="openModal('modal-6')">
                <img src="../image/6.svg" alt="card-nli 8">
            </div>
            <div class="card-nli" onclick="openModal('modal-7')">
                <img src="../image/8.svg" alt="card-nli 7">
            </div>
            <div class="card-nli" onclick="openModal('modal-8')">
                <img src="../image/7a.avif" alt="card-nli 8">
            </div>
        </div>
        <!-- Individual Modals -->
        <div class="modal" id="modal-5">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-5')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/5.svg" alt="logo-ai" class="logo-ai">
                </div>
                <h1>Create digital twins and professional-quality voice content</h1>
                <p>Gemelo.ai creates next-generation text-to-speech, voice-to-voice, and voice cloning systems on OCI, enabling customers to deploy “AI twins” that act as trained interactive service agents.</p>
                <div class="button-container">
                    <button class="left-button">See the press release</button>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-6">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-6')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/6.svg" alt="logo-ai" class="logo-ai">
                </div>
                <h1>Make video instantly, intelligently searchable and understandable</h1>
                <p>Twelve Labs is an AI startup offering video foundation models that are accessible via APIs. The company helps businesses and developers build intelligent video products. With OCI bare metal GPUs and high internode bandwidth for their large-scale
                    training jobs, Twelve Labs gained higher performance and a low-latency remote direct memory access network for their AI training.</p>
                <div class="button-container">
                    <button class="left-button">
                    Learn more</button>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-7">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-7')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/8.svg" alt="logo-ai" class="logo-ai">
                </div>
                <h1>Modal Labs</h1>
                <p>Modal Labs lets you run data/AI jobs in the cloud by just writing a few lines of Python. Customers use Modal to deploy GenAI models at large scale, fine-tune LLM models, run protein folding simulations, and much more. Modal Labs uses Oracle's
                    bare metal A10 instances because of the unbeatable combination of price and performance.</p>
                <div class="button-container">
                    <button class="left-button">
                    Learn more </button>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-8">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-8')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/7a.avif" alt="logo-ai" class="logo-ai">
                </div>
                <h1>Give superpowers to your health system revenue cycle staff</h1>
                <p>AKASA is a leading electronic health record-agnostic developer of AI for healthcare operations. The company serves more than 475 hospitals and health systems and more than 8,000 outpatient facilities across all 50 US states. AKASA selected
                    GPU infrastructure from OCI to deploy and scale its AI models.</p>

            </div>
        </div>
        <div class="container-ali">
            <div class="card-nli" onclick="openModal('modal-9')">
                <img src="../image/9a.avif" alt="card-nli 9">
            </div>
            <div class="card-nli" onclick="openModal('modal-10')">
                <img src="../image/10a.svg" alt="card-nli 10">
            </div>
            <div class="card-nli" onclick="openModal('modal-11')">
                <img src="../image/11a.svg" alt="card-nli 11">
            </div>
            <div class="card-nli" onclick="openModal('modal-12')">
                <img src="../image/12.svg" alt="card-nli 12">
            </div>
        </div>

        <!-- Individual Modals -->
        <div class="modal" id="modal-9">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-9')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/9a.avif" alt="logo-ai" class="logo-ai">
                </div>
                <h1>Give superpowers to your health system revenue cycle staff</h1>
                <p>AKASA is a leading electronic health record-agnostic developer of AI for healthcare operations. The company serves more than 475 hospitals and health systems and more than 8,000 outpatient facilities across all 50 US states. AKASA selected
                    GPU infrastructure from OCI to deploy and scale its AI models.</p>
                <div class="button-container">
                    <button class="left-button">See the press release</button>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-10">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-10')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/10a.svg" alt="logo-ai" class="logo-ai">
                </div>
                <h1>Luma</h1>
                <p>Luma’s mission is to enable everyone to capture and experience the world in lifelike 3D. To bring about the next step-function change in how we share memories and explore products and spaces on the internet. To propel photos and videos
                    into our mixed-reality 3D future.</p>
                <div class="button-container">
                    <button class="left-button">
                Learn more</button>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-11">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-11')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/11a.svg" alt="logo-ai" class="logo-ai">
                </div>
                <h1>Suno</h1>
                <p>Suno AI is a research-driven generative AI company building AI models that can turn text into realistic speech, music, and sound effects. The recently released second version of the company’s Chirp model raises the bar for AI music generation.</p>
                <div class="button-container">
                    <button class="left-button">
                Learn more</button>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-12">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-12')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/12.svg" alt="logo-ai" class="logo-ai">
                </div>
                <h1>Increase training and inference performance at a fraction of the cost</h1>
                <p>Together AI is a research-driven artificial intelligence company providing the fastest cloud platform for inference and training of generative AI models. With OCI’s high performance AI infrastructure, Together AI has provided up to a 3X
                    performance improvement at up to 8X lower cost than competing cloud services..</p>

            </div>
        </div>
        <!-- /-----------------------------------------------------------------------/ -->
        <div class="container-ali">
            <div class="card-nli" onclick="openModal('modal-13')">
                <img src="../image/13.svg" alt="card-nli 13">
            </div>
            <div class="card-nli" onclick="openModal('modal-14')">
                <img src="../image/14.svg" alt="card-nli 14">
            </div>
            <div class="card-nli" onclick="openModal('modal-15')">
                <img src="../image/14a.svg" alt="card-nli 15">
            </div>
            <div class="card-nli" onclick="openModal('modal-16')">
                <img src="../image/16.svg" alt="card-nli 16">
            </div>
        </div>

        <!-- Individual Modals -->
        <div class="modal" id="modal-13">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-13')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/13.svg" alt="logo-ai" class="logo-ai">
                </div>
                <h1>John Snow Labs</h1>
                <p>John Snow Labs, an award-winning healthcare AI company, uses Oracle Cloud Infrastructure to deploy and scale a new generative AI offering. This new service is based on John Snow Labs’ own healthcare GPT large language model and chat platform.</p>
                <div class="button-container">
                    <button class="left-button">
                    Learn more about John Snow Labs</button>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-14">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-14')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/14.svg" alt="logo-ai" class="logo-ai">
                </div>
                <h1>Scaling medical knowledge and creating reliable AI for the health benefit of every person</h1>
                <p>Headquartered in San Francisco, California, Evidium is a health technology startup that has created a referenced AI platform to give healthcare organizations grounded and trustworthy AI. To power its model training, the company leverages
                    GPUs on OCI for its diverse product line.</p>
                <div class="button-container">
                    <button class="left-button">
                    Learn more</button>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-15">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-15')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/14a.svg" alt="logo-ai" class="logo-ai">
                </div>
                <h1>AI solutions to accelerate decision-making from HQ to the tactical edge</h1>
                <p>Oracle has partnered with Palantir to provide secure cloud and AI solutions aiming to power businesses and governments around the world. OCI’s distributed cloud and AI infrastructure, combined with Palantir’s leading AI and decision acceleration
                    platforms, helps organizations maximize the value of their data—contributing to enhanced efficiency and performance while addressing sovereignty requirements.</p>
                <div class="button-container">
                    <button class="left-button">
                    Learn more about Palantir</button>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-16">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-16')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/16.svg" alt="logo-ai" class="logo-ai">
                </div>
                <h1>Common Sense Machines</h1>
                <p>Common Sense Machines trains artificial intelligence that learns to translate the visual world into a 3D simulation for people and machines.</p>
                <div class="button-container">
                    <button class="left-button">
                    Learn more about Common Sense Machines</button>
                </div>
            </div>
        </div>
        <!-- --------------------------------------------------------------------------------------- -->
        <div class="container-ali">
            <div class="card-nli" onclick="openModal('modal-17')">
                <img src="../image/17.svg" alt="card-nli 17">
            </div>
            <div class="card-nli" onclick="openModal('modal-18')">
                <img src="../image/18.svg" alt="card-nli 18">
            </div>
            <div class="card-nli" onclick="openModal('modal-19')">
                <img src="../image/19.svg" alt="card-nli 19">
            </div>
            <div class="card-nli" onclick="openModal('modal-20')">
                <img src="../image/20.svg" alt="card-nli 20">
            </div>
        </div>

        <!-- /-----------------------------------------------------------------------/ -->
        <!-- Individual Modals -->
        <div class="modal" id="modal-17">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-17')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/17.svg" alt="logo-ai" class="logo-ai">
                </div>
                <h1>Reduce the cost of training neural networks</h1>
                <p>MosaicML is a software development provider that offers infrastructure and tools for building large-scale machine learning models to help enterprises extract more value from their data. With OCI’s high-performance AI infrastructure, MosaicML
                    has seen up to 50% faster performance and cost savings of up to 80% compared to other cloud providers.</p>
                <div class="button-container">
                    <button class="left-button">
                    See the press release </button>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-18">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-18')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/18.svg" alt="logo-ai" class="logo-ai">
                </div>
                <p>Based in Toronto, Canada, Agnostiq is the company behind Covalent, a serverless compute platform built for running AI and high performance computing workloads in a simple and scalable way. Agnostiq leverages Oracle Cloud Infrastructure
                    for scalable GPU compute needs.</p>
            </div>
        </div>

        <div class="modal" id="modal-19">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-19')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/19.svg" alt="logo-ai" class="logo-ai">
                </div>
                <p>Divinia provides AI-centered technologies that enable next-generation search for consumers, marketers, and ecommerce sites. Their unique natural language processing technology and suite of products focus on extracting and indexing authentic
                    insights about searchable options more accurately and faster than any other search providers.</p>
            </div>

        </div>
        <div class="modal" id="modal-20">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-20')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/20.svg" alt="logo-ai" class="logo-ai">
                </div>
                <p>Laredo Labs is a “full stack” machine learning company on a mission to radically improve developer productivity. Their AI-powered developer experience platform is designed to automate repetitive tasks and improve software development efficiency.</p>
            </div>

        </div>
        <div class="container-ali">
            <div class="card-nli" onclick="openModal('modal-21')">
                <img src="../image/21.svg" alt="card-nli 21">
            </div>
            <div class="card-nli" onclick="openModal('modal-22')">
                <img src="../image/22.svg" alt="card-nli 22">
            </div>
            <div class="card-nli" onclick="openModal('modal-23')">
                <img src="../image/23.svg" alt="card-nli 23">
            </div>
            <div class="card-nli" onclick="openModal('modal-24')">
                <img src="../image/24.svg" alt="card-nli 24">
            </div>
        </div>

        <!-- /-----------------------------------------------------------------------/ -->
        <!-- Individual Modals -->
        <div class="modal" id="modal-21">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-21')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/21.svg" alt="logo-ai" class="logo-ai">
                </div>
                <p>Backflip AI specializes in providing design technology for the physical and digital world. Utilizing OCI’s bare metal A100 and H100 GPUs, storage, and industry leading internode bandwidth, Backflip enables businesses to create interactive
                    designs through their AI-based 3D design technology.</p>
            </div>
        </div>

        <div class="modal" id="modal-22">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-22')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/22.svg" alt="logo-ai" class="logo-ai">
                </div>
                <h1>Power AI-driven gameplay for video games and immersive experiences</h1>
                <p>Inworld uses advanced AI to build generative characters whose personalities, thoughts, memories, and behaviors are designed to mimic the deeply social nature of human interaction. The Inworld platform on OCI lets you create characters
                    with personality and contextual awareness to keep them in-world and in character. Integrations make it easy for developers to deploy characters into immersive experiences, while scale and performance are optimized for real-time experiences.</p>
            </div>

        </div>
        <div class="modal" id="modal-23">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-23')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/23.svg" alt="logo-ai" class="logo-ai">
                </div>
                <h1>Manage your machine learning lifecycle</h1>
                <p>VESSL AI is a fully managed machine learning operations platform for building, training, and deploying models faster at scale. The company’s integration with OCI enables users to enjoy seamless provisioning, enhanced cost-efficiency, and
                    adherence to the highest security and compliance standards.</p>
            </div>

        </div>
        <div class="modal" id="modal-24">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal('modal-24')">&times;</button>
                <div class="logo-ai-container">
                    <img src="../image/24.svg" alt="logo-ai" class="logo-ai">
                </div>
                <h1>GenAI-powered search and chat with your own data</h1>
                <p>Yurts is a generative AI integration platform on OCI that’s trusted by the world’s most secure organizations. The company offers high-quality attributed outputs, faster time to value, and seamless integration with source-of-truth applications.</p>
            </div>

        </div>
    </div>
    <section class="section-3">
        <div class="box7">
            <div class="content-7">
                <img src="../image/1.svg" alt="logo-ai" class="logo-ai1">
                <p>Oracle and NVIDIA are advancing AI adoption by offering a complete suite of NVIDIA AI software and services on Oracle Cloud Infrastructure. This collaboration enhances AI performance, scalability, and efficiency, enabling businesses to leverage powerful AI tools for innovation, automation, and data-driven decision-making in various industries.</p>
            </div>
        </div>
    </section>
        <script>
            function openModal(modalId) {
                document.getElementById(modalId).classList.add('show');
            }

            function closeModal(modalId) {
                document.getElementById(modalId).classList.remove('show');
            }
        </script>

        <!-------------footer include-->
        <?php include("footer.php"); ?>
</body>

</html>