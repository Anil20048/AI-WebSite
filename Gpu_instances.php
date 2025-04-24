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
            /* align-items: self-start; */
            justify-content: space-between;
            padding: 50px;
            background-color: #FDF3E4;
            width: 100%;
            background: url(../image/b1.avif) center/cover no-repeat;
        }
        
        .text-section {
            max-width: 50%;
        }
        
        .text-section h1 {
            font-size: 2em;
            color: #222;
            padding-left: 10px;
            
        }
        
        .text-section p {
            font-size: 1em;
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
            padding-left: 0px;
        }
        
/* Tablet (768px - 1024px) */
@media (max-width: 1024px) {
    .cont {
        flex-direction: column;
        text-align: center;
        padding: 40px;
    }

    .text-section {
        max-width: 100%;
        text-align: left; /* Keep text left-aligned */
    }

    .text-section h1 {
        font-size: 1.8em;
        text-align: left;
    }

    .underline {
        margin-left: 0;
    }

    .video-section-1 img {
        width: 400px;
        margin: auto;
    }
}

/* Mobile (Below 768px) */
@media (max-width: 768px) {
    .cont {
        padding: 30px;
    }

    .text-section h1 {
        font-size: 1.5em;
        text-align: left;
    }

    .text-section p {
        font-size: 0.9em;
        text-align: left;
    }

    .underline {
        margin-left: 10px;
    }

    .video-section-1 img {
        width: 100%;
    }

    .button {
        font-size: 14px;
        padding: 8px 16px;
    }
}

    
     .wrapper {
            width: 90%;
            margin: auto;
            padding: 20px;
        }
        
        h1 {
            text-align: left;
            color: #222;
            /* border-bottom: 3px solid #caa731; */
            display: inline-block;
            padding-bottom: 5px;
        }
        
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }
        
        .card-box {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            flex: 1;
            min-width: 250px;
            text-align: left;
        }
        
        .card-box h2 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }
        
        .card-box p {
            font-size: 18px;
            font-weight: bold;
            color: #000;
            margin-top: 10px;
        }
        
        .footnote-text {
            font-size: 11px;
            color: #555;
            margin-top: 20px;
        }
        
@media (max-width: 1024px) {
    .card-container {
        justify-content: center;
    }

    .card-box {
        flex: 1 1 45%; 
    }
}
@media (max-width: 768px) {
    .card-container {
        flex-direction: column;
        align-items: center;
    }

    .card-box {
        width: 100%;
    }

    h1 {
        text-align: center;
    }
}
       
        .wrapper-1 {
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
        
        .content-wrapper-1 {
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
        
        .title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: left;
            padding-left: 85px;
        }
        
        .underline-1 {
            width: 50px;
            height: 4px;
            background-color: #daba79;
            margin-left: 85px;
        }
        
        .pra p {
            width: 70%;
            padding-left: 85px;
          
        }
@media (max-width: 1024px) {
    .main-container {
        flex-direction: column;
    }

    .sidebar {
        width: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .content-wrapper-1 {
        flex-direction: column;
        text-align: center;
    }

    .image-box {
        width: 100%;
    }

    .text-box {
        width: 100%;
    }

    .title,
    .underline-1,
    .pra p {

        padding-left: 20px;
        text-align: center;
        width: 100%;
    }
}
@media (max-width: 768px) {
    .sidebar {
        flex-direction: column;
        align-items: center;
    }

    .sidebar-btn {
        width: 100%;
        text-align: center;
    }
    .content-section.active {
        flex-direction: column;  
                } 
    .image-box img {
        max-width: 80%;
    }

    .title,
    .pra p {
        font-size: 20px;
        padding-left: 0;
        text-align: center;
        width: 100%;
    }
    .underline-1{
        padding-left: 0;
        text-align: left;
        width: 10%;  
    }

    .content-wrapper-1 {
        padding: 10px;
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
        .wrapper-container {
            background: white;
            padding: 40px;
            width: 90%;
           
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
        
        .page-background {
            background-image: url('your-background-image.jpg');
        
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 20px;
        }
        
        .blog-container {
            display: flex;
            width: 90%;
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
            color: #1e1f1e;
            display: block;
            margin-top: 10px;
        }
        
        .featured-blogs a:hover {
            text-decoration: underline;
        }
        /* Responsive Design */
@media screen and (max-width: 1024px) {
    .blog-container {
        flex-direction: column; 
    }

    .blog-sidebar {
        border-left: none;
        border-top: 2px solid #ddd;
        margin-top: 20px;
    }
}

@media screen and (max-width: 768px) {
    .page-background {
        padding: 10px;
    }

    .blog-container {
        width: 95%;
        padding: 15px;
    }

    .main-content, .blog-sidebar {
        padding: 15px;
    }

    h2 {
        font-size: 22px;
    }

    p {
        font-size: 14px;
    }
}

@media screen and (max-width: 480px) {
    h2 {
        font-size: 20px;
    }

    p {
        font-size: 13px;
    }

    .blog-container {
        padding: 10px;
    }

    .main-content, .blog-sidebar {
        padding: 10px;
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
      
        
        .wrapper-container {
            background: white;
            padding: 10px;
            width: 90%;
            
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
            padding-left: 50pxpx;
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
        
        .content-active {
            display: block;
        }
        /* Buttons */
        
        .primary-button {
            background-color: black;
            color: white;
            /* padding: 12px 20px; */
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
        /* Responsive Design */
@media screen and (max-width: 1024px) {
    .wrapper-container {
        width: 95%;
        padding: 15px;
    }

    h1 {
        font-size: 28px;
    }

    .p {
        font-size: 16px;
        padding-left: 15px;
    }

    .menu-tabs {
        flex-wrap: wrap;
        gap: 10px;
    }

    .menu-item {
        font-size: 16px;
        padding-left: 10px;
    }
}

@media screen and (max-width: 768px) {
    .wrapper-container {
        width: 100%;
        margin: 80px auto;
        padding: 15px;
    }

    h1 {
        font-size: 24px;
    }

    .p {
        font-size: 14px;
    }

    .menu-tabs {
        justify-content: center;
        gap: 10px;
    }

    .menu-item {
        font-size: 14px;
        padding-left: 5px;
    }

    .primary-button {
        font-size: 14px;
        padding: 10px 15px;
    }

    .image-box-i img {
        width: 100%;
        border-radius: 5px;
    }
}

@media screen and (max-width: 480px) {
    .wrapper-container {
        width: 100%;
        padding: 10px;
    }

    h1 {
        font-size: 20px;
    }

    .p {
        font-size: 13px;
    }

    .menu-tabs {
        gap: 5px;
    }

    .menu-item {
        font-size: 12px;
        padding-left: 5px;
    }

    .primary-button {
        font-size: 12px;
        padding: 8px 12px;
    }
}
    </style>

    <div class="cont">
        <div class="text-section">
            <h1>GPU Instances</h1>
            <div class="underline"></div>
            <p>GPU instances on Oracle Cloud Infrastructure (OCI) deliver powerful, scalable computing for AI, machine learning, high-performance computing (HPC), and graphics-intensive workloads. Equipped with the latest NVIDIA GPUs—including A100, H100, and upcoming Blackwell—these instances offer exceptional parallel processing, high memory bandwidth, and fast interconnects. OCI GPU instances support both training and inference, enabling faster time to insights and model deployment. With flexible configurations, bare metal and virtual machine options, and integration with OCI storage and networking, they provide the performance and agility needed for demanding workloads. Ideal for deep learning, simulation, and 3D rendering, OCI GPU instances help organizations accelerate innovation and drive smarter outcomes.</p>
          
        </div>
        <div class="video-section-1">
            <img src="../image/gup.avif" alt="Generative AI Video Thumbnail">
        </div>
    </div>
    

    <div class="wrapper">
        <h1>Why use OCI for GPU instances?</h1>
        <div class="card-container">
            <div class="card-box">
                <h2>Scalability</h2>
                <p>131,072</p>
                <p>Maximum number of GPUs in an OCI Supercluster<sup>1</sup></p>
            </div>
            <div class="card-box">
                <h2>Performance</h2>
                <p>3,200</p>
                <p>Up to 3,200 Gb/sec of RDMA cluster network bandwidth<sup>2</sup></p>
            </div>
            <div class="card-box">
                <h2>Value</h2>
                <p>220%</p>
                <p>GPUs for other CSPs can be up to 220% more expensive<sup>3</sup></p>
            </div>
            <div class="card-box">
                <h2>Choice</h2>
                <p>VM/BM</p>
                <p>Rightsizing with VM and performance with bare metal instances</p>
            </div>
        </div>
        <div class="footnote-text">
            <p>1. OCI Supercluster scales up to 131,072 NVIDIA B200 GPUs (planned)...</p>
            <p>2. For bare metal instances with NVIDIA H100 GPUs and AMD MI300X GPUs.</p>
            <p>3. Based on on-demand pricing as of June 5, 2024.</p>
        </div>
    </div>
    <div class="title">GPU instances—key features</div>

    <!-- <div class="underline-1"></div> -->
    <div class="pra">
        <p>Oracle Cloud Infrastructure (OCI) stands out as the only major cloud provider offering bare metal instances with both NVIDIA and AMD GPUs, delivering high performance without virtualization overhead. This direct access to hardware ensures maximum compute efficiency, ideal for AI training and HPC workloads. OCI also provides unmatched local storage per node—up to 61.4 TB with NVIDIA H100 GPUs—crucial for fast checkpointing and large model training. For organizations seeking a cost-effective alternative, OCI’s GPU-enabled VM instances deliver excellent performance at consistently lower prices compared to AWS and Azure. Whether using bare metal for peak performance or VMs for affordability, OCI delivers the scalability, speed, and cost advantages needed for modern AI and compute-intensive applications, without compromising on capability.</p>
    </div>
    <div class="wrapper-1">
        <div class="main-container">
            <div class="sidebar">
                <button class="sidebar-btn active" onclick="switchContent(0)">Workload acceleration</button>
                <button class="sidebar-btn" onclick="switchContent(1)">Instance choice</button>
                <button class="sidebar-btn" onclick="switchContent(2)">Readily available software</button>
            </div>

            <div class="content-wrapper-1">
                <div class="content-section active" id="section-0">
                    <div class="text-box">
                        <h2>NVIDIA Tensor Core GPUs</h2>
                        <p>NVIDIA Tensor Core GPUs are designed for high-performance AI and deep learning tasks. They accelerate matrix operations critical to training and inference, delivering exceptional speed and efficiency. Supporting FP16, BF16, and INT8 precision, Tensor Cores optimize performance across AI, HPC, and graphics workloads, enabling faster, more accurate model development and deployment.</p>
                        <h2>NVIDIA superchips</h2>
                        <p>NVIDIA superchips combine CPU and GPU technologies in a single package to deliver exceptional performance for AI, HPC, and data center workloads. Examples like Grace Hopper and Grace Blackwell enable ultra-fast data processing, energy efficiency, and massive memory bandwidth, making them ideal for training large AI models and running complex simulations.</p>
                        <h2>AMD Instinct accelerators</h2>
                        <p>AMD Instinct accelerators are high-performance GPUs designed for AI, machine learning, and high-performance computing workloads. Built on the advanced CDNA architecture, they deliver exceptional compute efficiency, memory bandwidth, and scalability. Ideal for data centers and scientific computing, AMD Instinct accelerators power demanding applications with energy-efficient, parallel processing capabilities and open software support.</p>
                        <h2>High performance cluster networking</h2>
                        <p>High performance cluster networking enables fast, low-latency communication between compute nodes in large-scale environments like HPC and AI training. Technologies such as RDMA over converged Ethernet (RoCE) and InfiniBand provide high bandwidth and low latency, ensuring efficient data exchange. This accelerates parallel processing, reduces bottlenecks, and improves scalability for demanding workloads in research, finance, and enterprise applications.</p>
                       
                    </div>
                    <div class="image-box">
                        <img src="../image/ws3.png" alt="Image 1">
                    </div>
                </div>
                <div class="content-section" id="section-1">
                    <div class="text-box">
                        <h2>VM instances</h2>
                        <p>VM (Virtual Machine) instances on Oracle Cloud Infrastructure provide flexible, scalable compute environments for running applications, workloads, and services. Available in various shapes optimized for general purpose, high memory, compute-intensive, and GPU-based tasks, they offer rapid provisioning, secure isolation, and cost efficiency. With customizable networking, storage, and OS options, VM instances support a wide range of use cases—from development and testing to production-scale enterprise applications and AI workloads.</p>
                        <h2>Bare metal instances</h2>
                        <p>Bare metal instances on Oracle Cloud Infrastructure provide dedicated physical servers with no virtualization, offering full control, high performance, and consistent, predictable compute power. Ideal for demanding workloads like HPC, big data, and large-scale databases, they support custom hypervisors, legacy applications, and GPU configurations. Bare metal instances combine cloud scalability with on-premises-level performance and security for maximum flexibility.</p>
                        <h2>Kubernetes orchestration</h2>
                        <p>Kubernetes orchestration automates the deployment, scaling, and management of containerized applications across clusters of machines. It ensures high availability, load balancing, and efficient resource usage while simplifying updates and rollbacks. With features like self-healing, service discovery, and automated scheduling, Kubernetes streamlines operations for DevOps teams. Integrated with OCI, it enables seamless container orchestration in the cloud, supporting agile development, scalability, and resilient cloud-native applications.</p>
                    </div>
                    <div class="image-box">
                        <img src="../image/ws.avif" alt="Image 2">
                    </div>
                </div>
                <div class="content-section" id="section-2">
                    <div class="text-box">
                        <h2>Access software and disk images</h2>
                        <p>Accessing software and disk images in Oracle Cloud Infrastructure allows users to quickly deploy virtual machines, applications, and development environments. Prebuilt images include operating systems, databases, and enterprise software. Custom images can also be created and reused, enabling faster provisioning, consistency, and simplified configuration across multiple cloud instances and environments.</p>
                        <h2>NVIDIA AI Enterprise</h2>
                        <p>NVIDIA AI Enterprise is a comprehensive software suite optimized for accelerated computing, enabling businesses to develop, deploy, and manage AI applications efficiently. It includes tools for data science, machine learning, and deep learning, and is certified for leading platforms. The suite simplifies AI workflows, enhances performance, and ensures enterprise-grade reliability and support.</p>
                        <h2>NVIDIA DGX Cloud</h2>
                        <p>​NVIDIA DGX Cloud is a fully managed AI platform that provides enterprises with immediate access to AI supercomputing resources via a web browser. It offers dedicated clusters of NVIDIA DGX systems integrated with NVIDIA AI software, enabling efficient training of advanced models for generative AI and other applications. Hosted on leading cloud providers like Oracle Cloud Infrastructure, DGX Cloud combines high-performance computing with scalability, allowing organizations to accelerate AI development without the complexities of on-premises infrastructure.</p>
                    </div>
                    <div class="image-box">
                        <img src="../image/ws2.png" alt="Image 3">
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
                    <!-- <button class="primary-button">Learn about GPUs for AI innovators</button> -->
                    <div class="image-box-i ">
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
                    <!-- <button class="primary-button">See how Punch Torino deployed HPC on OCI (3:18)</button> -->
                    <div class="image-box-i">
                        
                    <img src="../image/aiin10.avif" alt="">
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
                <p><a href="read1.php">Read the full article |</a><a href="blog.php" >Subscribe to the blog</a></p>
            </div>
            <div class="blog-sidebar">
                <h3>Featured blogs</h3>
                <div class="featured-blogs">
                    <p><strong>MARCH 14, 2024</strong></p>
                    <a href="Ai_servicees.php">Announcing the general availability of OCI Language 3.0</a>
                    <p><strong>NOVEMBER 2, 2022</strong></p>
                    <a href="Learn_more.php">Custom models and text translation come to OCI Language</a>
                    <p><strong>MARCH 11, 2021</strong></p>
                    <a href="Ai_servicees.php">6 tips for easier AI adoption</a>
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
    </script>

    <script>
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