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
@media (max-width: 1024px) {
    .text-section {
        max-width: 60%;
    }
}

@media (max-width: 768px) {
    .content-wrapper {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .text-section {
        max-width: 100%;
    }

    .text-section h1 {
        font-size: 28px;
    }

    .text-section p {
        font-size: 15px;
    }
}

@media (max-width: 480px) {
    .text-section h1 {
        font-size: 24px;
    }

    .text-section p {
        font-size: 14px;
    }

    .cta-button {
        width: 100%;
        padding: 14px;
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
@media (max-width: 1024px) {
    .conte {
        margin-left: 260px;
    }
}

@media (max-width: 768px) {
    .sidebar {
        width: 200px;
    }

    .conte {
        margin-left: 210px;
        width: calc(100% - 210px);
    }

    .navigation-tabs {
        flex-wrap: wrap;
        justify-content: center;
    }

    .navigation-tab {
        margin: 5px;
        text-align: center;
    }
}

@media (max-width: 600px) {
    .sidebar {
        position: absolute;
        left: -260px;
        transition: left 0.3s ease-in-out;
    }

    .conte {
        margin-left: 0;
        width: 100%;
        padding: 20px;
    }

    .sidebar.open {
        left: 0;
    }

    /* Show menu button */
    .menu-button {
        display: block;
        background: #007bff;
        color: white;
        padding: 10px 15px;
        border: none;
        cursor: pointer;
        font-size: 16px;
        margin-bottom: 10px;
        width: 100%;
        text-align: left;
    }

    .menu-button:hover {
        background: #0056b3;
    }
}
    </style>

    <div class="content-wrapper">
        <div class="text-section">
            <h1>AI Speech to Text FAQ</h1>
            <div class="highlight"></div>
            <button class="cta-button">Speak to an AI expert</button>
        </div>
       
    </div>



    <!-- tab -->

    <div class="navigation-tabs">
        <div class="navigation-tab" onclick="openPage('overview3.php')">Overview</div>
        <div class="navigation-tab" onclick="openPage('pricing3.php')">Pricing</div>
        <div class="navigation-tab" onclick="openPage('faq3.php')">FAQ</div>

    </div>

    <!-- sider -->

    <div class="contai">
        <!-- Sidebar Navigation -->
        <nav class="sidebar">
            <h2>Key features</h2>
            <ul>
                <li class="active"><a href="#models">Key features</a></li>
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





   



    <script>
        function openPage(url) {
            window.location.href = url;
        }


        // tab

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


        document.addEventListener("DOMContentLoaded", function() {
            const sidebarLinks = document.querySelectorAll(".sidebar ul li a");

            sidebarLinks.forEach(link => {
                link.addEventListener("click", function() {
                    sidebarLinks.forEach(item => item.parentElement.classList.remove("active"));
                    this.parentElement.classList.add("active");
                });
            });
        });
    </script>

      <!-------------footer include-->
      <?php include("footer.php"); ?>
</body>

</html>