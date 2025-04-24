<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCI Services Menu</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        .ani-si {
            background: #1a1a1a;
            color: white;
            display: flex;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        .oci-sidebar {
            width: 300px;
            background: black;
            padding: 20px;
            height: 100vh;
        }
        
        .oci-sidebar h2 {
            color: #ffcc00;
            margin-bottom: 20px;
        }
        
        .oci-sidebar ul {
            list-style: none;
        }
        
        .oci-sidebar ul li {
            padding: 10px 0;
            cursor: pointer;
        }
        
        .oci-sidebar ul li:hover {
            color: #ffcc00;
        }
        
        .oci-content {
            flex: 1;
            padding: 30px;
        }
        
        .oci-header {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        
        .oci-header h3 {
            color: #ffcc00;
        }
        
        .oci-services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, auto);
            gap: 20px;
        }
        
        .oci-service-item {
            background: #222;
            padding: 15px;
            border-radius: 8px;
        }
        
        .oci-service-item h4 {
            color: #ffcc00;
            margin-bottom: 5px;
        }
        
        .oci-service-item p {
            font-size: 14px;
            color: #bbb;
        }
    </style>
</head>

<body>
    <div class="ani-si">
        <div class="oci-sidebar">
            <h2>OCI Services</h2>
            <ul>
                <li onclick="showCategory('ai')">AI and Machine Learning</li>
                <li onclick="showCategory('analytics')">Analytics</li>
                <li onclick="showCategory('compute')">Compute</li>
                <li onclick="showCategory('database')">Database Services</li>
                <li onclick="showCategory('developer')">Developer Services</li>
                <li onclick="showCategory('storage')">Storage</li>
            </ul>
        </div>

        <div class="oci-content">
            <div class="oci-header">
                <h3 id="categoryTitle">AI and Machine Learning</h3>
            </div>

            <div class="oci-services-grid" id="servicesContent">
                <div class="oci-service-item">
                    <h4>Generative AI</h4>
                    <p>Choose open-source or proprietary LLMs.</p>
                </div>
                <div class="oci-service-item">
                    <h4>Oracle AI ISVs</h4>
                    <p>Accelerate AI innovation with partners.</p>
                </div>
                <div class="oci-service-item">
                    <h4>AI Infrastructure</h4>
                    <p>High-performance AI with OCI cloud.</p>
                </div>
                <div class="oci-service-item">
                    <h4>Machine Learning</h4>
                    <p>Build, train, and deploy ML models.</p>
                </div>
                <div class="oci-service-item">
                    <h4>AI Services</h4>
                    <p>Integrate AI models into applications.</p>
                </div>
                <div class="oci-service-item">
                    <h4>AI Solutions</h4>
                    <p>Real-world AI applications for business.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        const categories = {
            ai: [{
                title: "Generative AI",
                desc: "Choose open source or proprietary LLMs. Tune and augment them with your own data."
            }, {
                title: "AI Infrastructure",
                desc: "Get high performance AI delivered where you need it with OCI’s distributed cloud."
            }, {
                title: "AI Services",
                desc: "Add AI models to your applications and customize them with your data.."
            }, {
                title: "Oracle AI ISVs",
                desc: "Accelerate and streamline AI innovation with help from our partners.."
            }, {
                title: "Machine Learning Services",
                desc: "Build, train, and deploy open source models or leverage in-database ML."
            }, {
                title: "AI Solutions",
                desc: "See real-world examples of AI services meeting business needs."
            }],
            analytics: [{
                title: "Analytics Cloud",
                desc: "Help business leaders, analysts, and IT pros use data effectively, wherever they are."
            }, {
                title: "Data Integration",
                desc: "Easily extract, transform, and load (ETL) data for analytics and data science use cases."
            }, {
                title: "Data Catalog",
                desc: "Metadata management to help discover data and support data governance on OCI."
            }, {
                title: "Big Data Service",
                desc: "Provision open source data analytics, including Hadoop, Hive, Spark, and Hbase, integrated with OCI."
            }, {
                title: "Autonomous Data Warehouse",
                desc: "Use a fully automated database service that is preconfigured and optimized for data warehousing, analytics, and data lakes."
            }, {
                title: "Data Flow",
                desc: "Process extremely large datasets with a fully managed Apache Spark service."
            }],
            compute: [{
                title: "Virtual Machines (VMs)",
                desc: "Run workloads with secure, scalable, and easily managed compute instances."
            }, {
                title: "Kubernetes Engine",
                desc: "Reduce the complexity of managing container instances and clusters at scale."
            }, {
                title: "VMware Solution",
                desc: "Build and manage a VMware environment architected to your needs."
            }, {
                title: "Container Instances",
                desc: "Create a serverless compute resource without concern for managing underlying infrastructure."
            }, {
                title: "GPU Instances",
                desc: "Deploy GPU-accelerated compute instances for AI, HPC, and graphics."
            }, {
                title: "Arm Instances",
                desc: "Choose bare metal instances or VMs using Ampere’s Arm processors.."
            }],
            database: [{
                title: "Autonomous Data Warehouse",
                desc: "Use a fully automated database service that is preconfigured and optimized for data warehousing, analytics, and data lakes."
            }, {
                title: "Exadata Database",
                desc: "Use optimized infrastructure for the highest performance, scale, and availability for database workloads."
            }, {
                title: "Globally Distributed Autonomous Database",
                desc: "Address data sovereignty, performance, and automated distributed database. "
            }, {
                title: "Autonomous Transaction Processing",
                desc: "Use a fully automated database service that is preconfigured and optimized for both transactional and mixed OLTP and OLAP workloads."
            }, {
                title: "HeatWave Lakehouse",
                desc: "Query data in object storage with unmatched performance and price-performance."
            }, {
                title: "HeatWave MySQL",
                desc: "Use one cloud service for transactions, real-time analytics across data warehouses and data lakes, and machine learning."
            }],
            developer: [{
                title: "Kubernetes Engine (OKE)",
                desc: "Managed Kubernetes service with advanced security, high performance, and an optional serverless experience."
            }, {
                title: "Events",
                desc: "Track and respond to resource changes in real time using Events-driven applications."
            }, {
                title: "AI Services",
                desc: "Collection of offerings with prebuilt models that make it easier for developers to apply AI to applications.."
            }, {
                title: "Container Instances",
                desc: "Create a serverless compute resource without concern for managing underlying infrastructure."
            }, {
                title: "Notifications",
                desc: "Send alerts and messages across different platforms with a highly available, low-latency publish/subscribe service."
            }, {
                title: "APEX",
                desc: "Build and deploy data-driven apps faster using a low-code application development platform"
            }],
            storage: [{
                title: "Block Volumes",
                desc: "Reliable, high performance block storage for your cloud infrastructure.."
            }, {
                title: "Archive Storage",
                desc: "Reliable long-term storage at one-tenth the cost of object storage."
            }, {
                title: "File Storage",
                desc: "A Network File System (NFS) supporting multiway replication and dynamic scaling."
            }, {
                title: "Object Storage",
                desc: "Store any data format, no matter the volume."
            }],
        };

        function showCategory(category) {
            document.getElementById("categoryTitle").textContent = category.replace(/_/g, ' ');
            const contentDiv = document.getElementById("servicesContent");
            contentDiv.innerHTML = "";
            categories[category].forEach(service => {
                let div = document.createElement("div");
                div.classList.add("oci-service-item");
                div.innerHTML = `<h4>${service.title}</h4><p>${service.desc}</p>`;
                contentDiv.appendChild(div);
            });
        }
    </script>
</body>

</html>