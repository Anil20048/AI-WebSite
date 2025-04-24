<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCI Solutions Menu</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
       .a {
            display: flex;
            height: 100vh;
            background: #1a1a1a;
            color: white;
            overflow: hidden;
        }
        
        .sidebar {
            width: 300px;
            background: black;
            padding: 20px;
            height: 100vh;
            overflow-y: auto;
        }
        
        .sidebar h2 {
            color: #ffcc00;
            margin-bottom: 20px;
        }
        
        .sidebar ul {
            list-style: none;
        }
        
        .sidebar ul li {
            padding: 10px 0;
            cursor: pointer;
            font-size: 18px;
        }
        
        .sidebar ul li:hover {
            color: #ffcc00;
        }
        
        .content {
            flex: 1;
            padding: 20px 30px;
            overflow-y: auto;
            height: 100vh;
            position: relative;
        }
        
        .category-title {
            color: #ffcc00;
            font-size: 22px;
            margin-bottom: 15px;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        
        .service-item {
            background: #222;
            padding: 15px;
            border-radius: 8px;
        }
        
        .service-item h4 {
            color: #ffcc00;
            margin-bottom: 5px;
        }
        
        .service-item p {
            font-size: 14px;
            color: #bbb;
        }
    </style>
</head>

<body>
<dic class="a">
<div class="sidebar">
        <h2>OCI Solutions</h2>
        <ul>
            <li onclick="showCategory('ai')">Artificial Intelligence</li>
            <li onclick="showCategory('migrate')">Migrate</li>
            <li onclick="showCategory('modernize')">Modernize</li>
            <li onclick="showCategory('hpc')">High Performance Computing</li>
        </ul>
    </div>
    <div class="content">
        <!-- <button class="close-btn" onclick="hideContent()">X</button> -->
        <h3 class="category-title" id="categoryTitle">Artificial Intelligence</h3>
        <div class="services-grid" id="servicesContent"></div>
    </div>
</dic>

    <script>
        const categories = {
            ai: [{
                title: "AI Infrastructure",
                desc: "Powerful AI computing with OCI."
            }, {
                title: "Modern Data Platforms",
                desc: "Transform data into AI insights."
            }, {
                title: "AI Solutions Hub",
                desc: "Explore AI-driven applications."
            }, {
                title: "AI for Fusion Cloud Applications",
                desc: "Enhance Oracle Fusion Apps with AI."
            }, {
                title: "Build AI with Data Science",
                desc: "Develop and deploy AI models."
            }],
            migrate: [{
                title: "Finance",
                desc: "Seamless migration solutions."
            }, {
                title: "Manufacturing",
                desc: "Support for all migrations."
            }, {
                title: "Government",
                desc: "Cloud-ready SaaS migration."
            }, {
                title: "Healthcare",
                desc: "Guided cloud migration plans."
            }, {
                title: "Government Contractors",
                desc: "Centralized migration management."
            }, {
                title: "Retail",
                desc: "Efficient migration strategies."
            }],
            modernize: [{
                title: "Containers Best Practices",
                desc: "Optimize containerized workloads."
            }, {
                title: "E-Business Suite Best Practices",
                desc: "Enhance business applications."
            }],
            hpc: [{
                title: "AI Infrastructure",
                desc: "High-performance AI workloads."
            }, {
                title: "High Performance Computing (HPC)",
                desc: "Run large-scale simulations."
            }]
        };

        function showCategory(category) {
            document.getElementById("categoryTitle").textContent = category.replace(/_/g, ' ');
            const contentDiv = document.getElementById("servicesContent");
            contentDiv.innerHTML = "";
            categories[category].forEach(service => {
                let div = document.createElement("div");
                div.classList.add("service-item");
                div.innerHTML = `<h4>${service.title}</h4><p>${service.desc}</p>`;
                contentDiv.appendChild(div);
            });
        }

        function hideContent() {
            document.body.style.display = "none"; 
        }

        showCategory('ai');
    </script>
</body>

</html>