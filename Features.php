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
    <!-- style -->
    <style>
        
        
        .content-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 40px;
            background: #FDF3E4;
        }
        
        .text-section {
            max-width: 50%;
        }
        
        .text-section h1 {
            font-size: 32px;
            color: #000;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        
        .text-section p {
            font-size: 16px;
            color: #333;
            line-height: 1.6;
        }
        
        .highlight {
            width: 50px;
            height: 3px;
            background-color: #E6C17A;
            margin: 5px 0 20px 0;
        }
        
        .cta-button {
            background-color: #000;
            color: #fff;
            padding: 12px 18px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
        }
        
        .cta-button:hover {
            background-color: #333;
        }
        /* Responsive Design */

/* Tablet (≤1024px) */
@media screen and (max-width: 1024px) {
    .content-wrapper {
        flex-direction: column;
        align-items: flex-start;
        padding: 30px;
    }

    .text-section {
        max-width: 100%;
        text-align: left;
    }

    .text-section h1 {
        font-size: 28px;
    }

    .text-section p {
        font-size: 15px;
    }

    .cta-button {
        font-size: 13px;
        padding: 10px 16px;
    }
}

/* Mobile (≤768px) */
@media screen and (max-width: 768px) {
    .content-wrapper {
        padding: 20px;
    }

    .text-section h1 {
        font-size: 24px;
    }

    .text-section p {
        font-size: 14px;
        line-height: 1.5;
    }

    .highlight {
        width: 40px;
        height: 2px;
        margin: 3px 0 15px 0;
    }

    .cta-button {
        width: 80%;
        font-size: 12px;
        padding: 8px 14px;
    }
}
        /* sidbar */
        /* Sidebar */
        
        .sidebar {
            width: 250px;
            background: #ffffff;
            padding: 20px;
            border-right: 2px solid #ddd;
            position: static;
            height: 80vh;
            overflow-y: auto;
        }
        
        .sidebar h2 {
            font-size: 20px;
            color: #030303;
            margin-bottom: 15px;
        }
        
        .sidebar ul {
            list-style: none;
            padding: 0;
            /* color: #000; */
        }
        
        .sidebar ul li {
            padding: 10px 0;
            color: #000;
        }
        
        .sidebar ul li a {
            text-decoration: none;
            color: #000000;
            font-weight: bold;
            display: block;
            padding: 8px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        
        .sidebar ul li a:hover,
        .sidebar ul li.active a {
            background: #e0f2e9;
            color: #00703c;
        }

        /* Responsive Design */

/* Tablet (≤1024px) */
@media screen and (max-width: 1024px) {
    .sidebar {
        width: 200px;
        padding: 15px;
    }

    .sidebar h2 {
        font-size: 18px;
    }

    .sidebar ul li a {
        font-size: 14px;
        padding: 6px;
    }
}

/* Mobile (≤768px) */
@media screen and (max-width: 768px) {
    .sidebar {
        width: 100%;
        height: auto;
        position: relative;
        border-right: none;
        border-bottom: 2px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    .sidebar ul {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 0;
    }

    .sidebar ul li {
        display: inline-block;
        margin: 5px;
    }

    .sidebar ul li a {
        display: inline-block;
        padding: 8px 12px;
        font-size: 14px;
    }
}

        /* Main Content */
        
        .conte {
            margin-left: 270px;
            padding: 30px;
            width: calc(100% - 270px);
        }
        
        h1 {
            font-size: 24px;
            color: #000;
            margin-top: 30px;
        }
        
        p,
        ul {
            font-size: 16px;
            color: #555;
        }
        /* Sidebar: Fixed position */
        /* Main content area */
        
        .conte {
            margin-left: 260px;
            padding: 20px;
            overflow-y: auto;
            height: 80vh;
        }
        
        .conte-btn {
            display: inline-block;
            padding: 12px 20px;
            margin-top: 20px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: 0.3s;
        }
        
        .conte-btn:hover {
            background-color: #218838;
        }
        
/* Responsive Design */

/* Tablet (≤1024px) */
@media screen and (max-width: 1024px) {
    .conte {
        margin-left: 220px;
        width: calc(100% - 220px);
        padding: 20px;
    }
}

/* Mobile (≤768px) */
@media screen and (max-width: 768px) {
    .conte {
        margin-left: 0;
        width: 100%;
        padding: 15px;
        height: auto;
    }
}
        .navigation-tabs {
            display: flex;
            background: #f4f4f4;
            padding: 10px 20px;
            border-bottom: 3px solid #007bff;
        }
        
        .navigation-tab {
            padding: 10px 15px;
            margin: 0 10px;
            cursor: pointer;
            font-weight: bold;
            color: #333;
            transition: color 0.3s;
        }
        
        .navigation-tab:hover,
        .active {
            color: #007bff;
        }
        /* Responsive Design */

/* Tablet (≤1024px) */
@media screen and (max-width: 1024px) {
    .navigation-tabs {
        justify-content: center;
    }

    .navigation-tab {
        padding: 8px 12px;
        font-size: 14px;
    }
}

/* Mobile (≤768px) */
@media screen and (max-width: 768px) {
    .navigation-tabs {
        flex-direction: column;
        align-items: center;
        padding: 10px;
    }

    .navigation-tab {
        margin: 5px 0;
        font-size: 14px;
        text-align: center;
        width: 100%;
        padding: 12px 0;
        border-bottom: 1px solid #ddd;
    }

    .navigation-tab:last-child {
        border-bottom: none;
    }
}
    </style>

    <!-- section -->

    

    <div class="content-wrapper">
        <div class="text-section">
            <h1>Generative AI Service Features</h1>
            <div class="highlight"></div>
            <button class="cta-button">Speak to an AI expert</button>
        </div>
    </div>

    <!-- <tab></tab> -->

    <!-- tab -->

    <div class="navigation-tabs">
        <div class="navigation-tab" onclick="openPage('overview.php')">Overview</div>
        <div class="navigation-tab" onclick="openPage('features.php')">Features</div>
        <div class="navigation-tab" onclick="openPage('pricing.php')">Pricing</div>
        <div class="navigation-tab" onclick="openPage('faq.php')">FAQ</div>
        <div class="navigation-tab" onclick="openPage('product-tour.php')">Product Tour</div>
    </div>
    <!-- sider -->

    <div class="contai">
        <!-- Sidebar Navigation -->
        <nav class="sidebar">
            <h2>Features topics</h2>
            <ul>
                <li class="active"><a href="#models">Models</a></li>
                <li><a href="#clusters">Dedicated AI clusters</a></li>
                <li><a href="#chat-api">Chat API and Playground</a></li>
                <li><a href="#langchain">LangChain integration</a></li>
                <li><a href="#llamaindex">LlamaIndex integration</a></li>
                <li><a href="#operations">Generative AI operations</a></li>
                <li><a href="#oci">OCI Generative AI for Oracle Cloud Applications</a></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="conte">
            <section id="models">
                <h1>Models</h1>
                <p>Models available from Cohere and Meta for OCI Generative AI include:</p>
                <ul>
                    <li><strong>Meta Llama models:</strong> The latest include the flagship foundation Llama 3.1 405B model, which allows for the widest range of use cases; Llama 3.2 multimodal models for use with images; and Llama 3.3 70B, with improved
                        cost performance for text-only applications. API tool support is available for Llama models.</li>
                    <li><strong>Cohere Command R:</strong> Part of a new category of scalable models, Command R aims to balance high efficiency with strong accuracy for retrieval-augmented generation (RAG) applications. Compared with original Cohere models,
                        Command R offers higher throughput and lower latency, a larger context window, and strong performance across 10 languages.</li>
                    <li><strong>Cohere Command R+:</strong> Command R+ is enhanced with additional training of Command R for more specialized use cases. Command R+ has a deeper understanding of language and the ability to generate more nuanced and contextually
                        appropriate responses. Use Command R+ for use cases such as generating long-form content, summarization, question answering, and language generation for specific domains or industries.</li>
                    <li><strong>Cohere Embed:</strong> These English and multilingual embedding models (v3) convert text to vector embeddings representation. "Light" versions of Embed are smaller and faster (English only).</li>
                </ul>
            </section>

            <section id="clusters">
                <h1>Dedicated AI clusters</h1>
                <p>With dedicated AI clusters, you can host foundational models on dedicated GPUs that are private to you. These clusters provide stable, high-throughput performance that’s required for production use cases and can support hosting and fine-tuning
                    workloads. OCI Generative AI enables you to scale out your cluster with zero downtime to handle changes in volume.</p>
            </section>

            <section id="chat-api">
                <h1>Chat API and Playground</h1>
                <p>The chat experience provides an out-of-the box interface with Cohere and Meta models where users can ask questions and get conversational responses via the OCI console or API.

                </p>
            </section>

            <section id="langchain">
                <h1>LangChain integration</h1>
                <p>OCI Generative AI is integrated with LangChain, an open source framework that can be used to develop new interfaces for generative AI applications based on language models. LangChain makes it easy to swap out abstractions and components
                    that are necessary to work with language models.</p>
            </section>

            <section id="llamaindex">
                <h1>LlamaIndex integration</h1>
                <p>Use LlamaIndex, an open source framework for building context-augmented applications, with OCI Generative AI to easily build RAG solutions or agents. Bring your solutions from prototype to production with custom data sources and flexible
                    tooling.
                </p>
            </section>

            <section id="operations">
                <h1>Generative AI operations</h1>
                <p>OCI Generative AI provides content moderation controls, and coming soon: endpoint model swap with zero downtime, and endpoints deactivation and activation capabilities. For each model endpoint, OCI Generative AI captures a series of analytics,
                    including call statistics, tokens processed, and error counts.</p>
            </section>

            <section id="oci">
                <h1>OCI Generative AI for Oracle Cloud Applications</h1>
                <p>By embedding features created with OCI Generative AI directly into Oracle Cloud Applications, we make it easy for customers to instantly access them without complex integrations.</p>
            </section>
            <a href="http://localhost/ai/home/Learn_more.php" target="_blank">
                <button class="conte-btn">Learn more</button>
            </a>
        </div>

    </div>

    <!-- siderbar -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarLinks = document.querySelectorAll(".sidebar ul li a");

            sidebarLinks.forEach(link => {
                link.addEventListener("click", function() {
                    sidebarLinks.forEach(item => item.parentElement.classList.remove("active"));
                    this.parentElement.classList.add("active");
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            const tabs = document.querySelectorAll(".anc-tab");
            const contents = document.querySelectorAll(".anc-tab-content");

            tabs.forEach((tab, index) => {
                tab.addEventListener("click", function() {
                    tabs.forEach(t => t.classList.remove("anc-active"));
                    contents.forEach(c => c.classList.remove("anc-active"));
                    tab.classList.add("anc-active");
                    contents[index].classList.add("anc-active");
                });
            });
        });


        function openPage(url) {
            window.location.href = url;
        }
    </script>








     <!-------------footer include-->
     <?php include("footer.php"); ?>
</body>

</html>