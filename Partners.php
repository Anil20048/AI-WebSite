<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hover Effect Layout</title>
    <style>
        .self-service {
            font-family: Arial, sans-serif;
            background-color: #222;
            color: white;
            text-align: left;
            margin: 0;
            padding: 20px;
        }
        
        .main-title {
            transition: color 0.3s ease, text-decoration 0.3s ease;
            color: white;
        }
        
        .main-title:hover {
            color: #f39c12;
            text-decoration: underline;
        }
        
        .resource-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: left;
            gap: 20px;
            margin-top: 20px;
        }
        
        .resource-box {
            width: 320px;
            height: auto;
            display: flex;
            align-items: self-start;
            justify-content: left;
            flex-direction: column;
            font-size: 18px;
            border-radius: 10px;
            transition: background-color 0.3s ease;
            padding: 10px;
        }
        
        .resource-title {
            font-size: 20px;
            text-align: left;
            margin: 0;
            transition: color 0.3s ease, text-decoration 0.3s ease;
            color:white;
        }
        
        .resource-title:hover {
            color: #f39c12;
            text-decoration: underline;
        }
        
        .resource-text {
            width: 100%;
            margin: 10px 0 0 0;
            text-align: left;
            font-size: 14px;
            color: aliceblue;
        }
    </style>
</head>

<body>
    <div class="self-service">
        <h1 class="main-title">Self-Service Resources</h1>
        <div class="resource-container">
            <div class="resource-box">
                <h1 class="resource-title">Architecture Center</h1>
                <p class="resource-text">Design and implement workloads using hundreds of reference architectures, playbooks, best practice frameworks, and more.</p>
            </div>
            <div class="resource-box">
                <h1 class="resource-title">Hands-On Labs</h1>
                <p class="resource-text">Get access to Oracle's tools and technologies to run a wide variety of labs and workshops.</p>
            </div>
            <div class="resource-box">
                <h1 class="resource-title">Certifications</h1>
                <p class="resource-text">Demonstrate you have the knowledge required to specify, architect, and implement OCI services and solutions by earning an OCI Certification.</p>
            </div>
            <div class="resource-box">
                <h1 class="resource-title">Cloud Adoption Framework</h1>
                <p class="resource-text">Get guidance on cloud strategy and implementation through a collection of resources, best practices, tutorials, and enablement tools.</p>
            </div>
        </div>
        <div class="resource-container">
            <div class="resource-box">
                <h1 class="resource-title">Comparing OCI's Distributed Cloud Key Offerings</h1>
                <p class="resource-text">See how three of OCI’s key distributed cloud offerings deliver full functionality with a range of operational controls to help customers meet regulatory, performance, and other needs.</p>
            </div>
            <div class="resource-box">
                <h1 class="resource-title">Tutorials</h1>
                <p class="resource-text">Take these tutorials with Oracle Cloud Free Tier, your own Oracle Cloud tenancy, or in an Oracle-provided free lab environment.</p>
            </div>
            <div class="resource-box">
                <h1 class="resource-title">Technical Case Studies</h1>
                <p class="resource-text">Discover how OCI helps customers successfully deliver 24/7 operations with distributed architectures and scalable and secure applications.</p>
            </div>
            <div class="resource-box">
                <h1 class="resource-title">Quick Start with Terraform</h1>
                <p class="resource-text">Terraform stacks in GitHub. Deploy stacks on your tenancy and get infrastructure up and running in minutes.</p>
            </div>
        </div>
        <div class="resource-container">
            <div class="resource-box">
                <h1 class="resource-title">Documentation</h1>
                <p class="resource-text">Find information about services as well as user guides, getting started guides, tutorials, and more.</p>
            </div>
            <div class="resource-box">
                <h1 class="resource-title">Free Cloud Training and Certification</h1>
                <p class="resource-text">Advance and future-proof your career by learning OCI for free with our expert-created training and globally recognized certification program.</p>
            </div>
            <div class="resource-box">
                <h1 class="resource-title">Compliance</h1>
                <p class="resource-text">Ensure global, regional, and industry compliance with Oracle Cloud’s 80+ compliance programs.</p>
            </div>
        </div>
    </div>
</body>

</html>