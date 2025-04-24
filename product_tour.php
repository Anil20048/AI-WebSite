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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body>

    <!-- -----------header include -->
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
            color: #ffffff;
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
@media screen and (max-width: 1024px) {
    .content-wrapper {
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 30px;
    }

    .text-section {
        max-width: 80%;
    }

    .text-section h1 {
        font-size: 28px;
    }

    .text-section p {
        font-size: 15px;
    }
}

@media screen and (max-width: 768px) {
    .text-section {
        max-width: 90%;
    }

    .text-section h1 {
        font-size: 26px;
    }

    .text-section p {
        font-size: 14px;
    }

    .cta-button {
        font-size: 13px;
        padding: 10px 15px;
    }
}

@media screen and (max-width: 480px) {
    .content-wrapper {
        padding: 20px;
    }

    .text-section {
        max-width: 100%;
    }

    .text-section h1 {
        font-size: 22px;
    }

    .text-section p {
        font-size: 13px;
    }

    .cta-button {
        font-size: 12px;
        padding: 8px 12px;
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
            color: #7d8667;
        }
          /* Responsive Design */
@media (max-width: 768px) {
    .navigation-tabs {
        flex-direction: column;
        align-items: center;
        padding: 10px;
    }

    .navigation-tab {
        width: 100%;
        text-align: center;
        padding: 12px 0;
        border-bottom: 1px solid #ddd;
    }

    .navigation-tab:last-child {
        border-bottom: none;
    }
}
       /* <slider> */
        
        .carousel-wrapper {
            position: relative;
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        
        .carousel {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 100%;
        }
        
        .carousel-item {
            width: 100%;
            flex-shrink: 0;
            display: flex;
        }
        
        .carousel-image-box,
        .carousel-content-box {
            width: 50%;
            padding: 20px;
        }
        
        .carousel-image-box img {
            width: 100%;
            display: block;
        }
        
        .carousel-prev,
        .carousel-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgb(146, 35, 35);
            color: rgb(0, 0, 0);
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        
        .carousel-prev {
            left: 10px;
        }
        
        .carousel-next {
            right: 10px;
        }
        
        .slider-container {
            display: flex;
            width: 90%;
            background: rgb(255, 255, 255);
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }
        
        .left {
            width: 60%;
            position: relative;
        }
        
        .left img {
            width: 100%;
            height: auto;
            cursor: pointer;
            border-radius: 5px;
        }
        
        .enlarge {
            display: block;
            margin-top: 10px;
            color: rgb(21, 21, 21);
            cursor: pointer;
            text-align: center;
        }
        
        .right {
            width: 40%;
            padding-left: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .slide {
            display: none;
        }
        
        .slide.active {
            display: block;
        }
        
        .slider-controls {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
        .slider-controls span {
            font-size: 18px;
            font-weight: bold;
        }
        
        .slider-controls button {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #000;
        }
        
        .modal {
            display: none;
            position: fixed;
            top: 5%;
            left: 5%;
            width: 90%;
            height: 90%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }
        
        .modal img {
            width: 100%;
            height: 90%;
            object-fit: contain;
        }
        
        .modal .close {
            position: absolute;
            top: 10px;
            right: 20px;
            color: rgb(20, 19, 19);
            font-size: 24px;
            cursor: pointer;
        }
        
        .slide.active a {
            color: #23468e;
            text-decoration: none;
            padding-top: 5px;
        }
        
        .slide.active a:hover {
            text-decoration: underline;
        }
        
        .slide.active h2 {
            font-weight: 700;
            padding: 10px;
            font-size: 25px;
            color: #000;
        }
        
        .slide.active p {
            font-weight: 700;
            padding: 10px;
            font-size: 18px;
            color: #000;
        }
        
        .slide h2 {
            font-weight: 700;
            padding: 10px;
            font-size: 25px;
            color: #000;
        }
        
        .slide p {
            font-weight: 700;
            padding: 10px;
            font-size: 18px;
            color: #000;
        }
        /* Responsive Design */
        
        @media screen and (max-width: 1024px) {
            .carousel-wrapper {
                width: 90%;
            }
            .carousel-item {
                flex-direction: column;
                text-align: center;
            }
            .carousel-image-box,
            .carousel-content-box {
                width: 100%;
                padding: 15px;
            }
            .carousel-prev,
            .carousel-next {
                padding: 8px;
                font-size: 14px;
            }
            .slider-container {
                flex-direction: column;
                padding: 15px;
            }
            .left,
            .right {
                width: 100%;
                padding: 0;
            }
            .left img {
                width: 100%;
                height: auto;
            }
        }
        
        @media screen and (max-width: 768px) {
            .carousel-wrapper {
                width: 100%;
            }
            .carousel-item {
                flex-direction: column;
            }
            .carousel-image-box,
            .carousel-content-box {
                width: 100%;
                padding: 10px;
            }
            .carousel-prev,
            .carousel-next {
                padding: 5px;
                font-size: 12px;
            }
            .slider-container {
                flex-direction: column;
                width: 100%;
                padding: 10px;
            }
            .left,
            .right {
                width: 100%;
                padding: 5px;
            }
        }
        
        @media screen and (max-width: 480px) {
            .carousel-wrapper {
                width: 100%;
                padding: 5px;
            }
            .carousel-image-box,
            .carousel-content-box {
                width: 100%;
                padding: 5px;
            }
            .carousel-prev,
            .carousel-next {
                font-size: 10px;
                padding: 4px;
            }
            .slider-container {
                padding: 5px;
            }
            .left,
            .right {
                width: 100%;
                padding: 5px;
            }
            .slide.active h2,
            .slide h2 {
                font-size: 20px;
                padding: 5px;
            }
            .slide.active p,
            .slide p {
                font-size: 14px;
                padding: 5px;
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


    <div class="navigation-tabs">
        <div class="navigation-tab" onclick="openPage('overview.php')">Overview</div>
        <div class="navigation-tab" onclick="openPage('features.php')">Features</div>
        <div class="navigation-tab" onclick="openPage('pricing.php')">Pricing</div>
        <div class="navigation-tab" onclick="openPage('faq.php')">FAQ</div>
        <div class="navigation-tab" onclick="openPage('product_tour.php')">Product Tour</div>
    </div>



    <div class="slider-container">
        <!-- Left Side with Image Slider -->
        <div class="left">
            <img id="mainImage" src="" alt="Slide Image" onclick="openModal()">
            <div class="enlarge" onclick="openModal()">Enlarge+</div>
        </div>
        <!-- Right Side with Content Slider -->
        <div class="right">
            <div class="slider-controls">
                <button onclick="prevSlide()">&lt;</button>
                <span id="slideIndex">1</span> / <span>10</span>
                <button onclick="nextSlide()">&gt;</button>
            </div>
            <div class="slide active">
                <h2>a fully managed generative ai service built for business</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quaerat, consectetur modi blanditiis iure voluptatum ea quod quibusdam ipsum voluptates exercitationem numquam? Dolorum mollitia culpa molestias in sed odit? Aspernatur debitis
                    veniam quos assumenda aliquid hic nisi modi accusamus laudantium asperiores nihil eos tempore numquam quisquam, eum incidunt beatae aliquam.</p>
                <p><a href="read1.php">Read more about Oracle’s generative AI strategy</a></p>
                </p>
                <p><a href="Generative_AI_Service.php">A fully managed generative AI service built for business</a></p>
                </p>
            </div>
            <div class="slide">
                <h2>Use the Playground for out-of-the-box models and sample library</h2>
                <p>The Playground provides a chat-like exploratory experience to easily work with the out-of-the-box LLMs and fine-tuned custom models. Experiment with parameter settings to change the model output. Automatically generated Python and Java
                    code snippets can be used in your applications.</p>
            </div>
            <div class="slide">
                <h2>Enterprise-grade generative AI with data governance and security</h2>
                <p>Only you have access to your data and custom trained models. Only you can use a custom model trained on your data. No other customers can see your data or custom models.</p>
                <p><a href="#">Learn more about data handling in OCI Generative AI</a></p>
            </div>
            <div class="slide">
                <h2>Best-in-class Al infrastructure</h2>
                <p>Use prebuilt models on demand by paying only for tokens sent and received or use dedicated Al clusters available for predictable performance and pricing. Both use OCl, which provides industry-leading performance and cost efficiency with
                    NVIDIA GPUs.</p>
                <p><a href="Ai_Infrastructure.php">Discover OCI AI infrastructure</a></em>
            </div>
            <div class="slide">
                <h2>Start fast with pretrained, out-of-the-box LLMs</h2>
                <p>Models from Cohere and Meta are available out of the box.</p>
                <ul>
                    <li>Cohere Command R and R+</li>
                    <li>Cohere Embed</li>
                    <li>Meta Llama 3</li>
                </ul>
                <p><a href="Learn_more.php">Learn more about the pretrained models</a></p>
            </div>
            <div class="slide">
                <h2>Text generation</h2>
                <p>Rapidly create job descriptions, blogs, emails, marketing copy, and more. Perform text translations. Ask questions conversationally in natural language.</p>
            </div>
            <div class="slide">
                <h2>Summarization</h2>
                <p>Create short, accurate, and fluent summaries of articles, blogs, emails, and other bodies of text using the Cohere Summarize model. Save time and effort to comprehend and share the core ideas within a longer text document.</p>
             
            </div>
            <div class="slide">
                <h2>Embedding</h2>
                <p>Create vector representations of paragraphs, sentences, and phrases. Visualize the output vector to identify outliers and similarly grouped phrases. Use these vector representations for semantic search, text classification, and many other
                    use cases.</p>
            </div>
            <div class="slide">
                <h2>Refine models with your own business knowledge</h2>
                <p>Fine-tune Cohere and Llama 3 models with your domain knowledge and leverage the custom model endpoints in your applications. Use dedicated fine-tuning clusters for predictable performance and pricing.</p>
            
            </div>
            <div class="slide">
                <h2>Next steps</h2>
                <p><a href="Generative_AI_Service.php">Learn more about generative AI</a></p>
                <p><a href="Generative_AI_Service.php">Speak to an AI expert</a></p>
            </div>


        </div>
    </div>



    <!-- Modal for Enlarge Image (Hidden Initially) -->
    <div class="modal" id="imageModal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img id="modalImage" src="../image/slide1.webp" alt="Enlarged Image">
    </div>








    <!-- siderbar -->
    <script>
        document.addEventListener("DOMContentLoaded", function(onWindowLoad) {
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

        //   tab


        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const slideIndex = document.getElementById("slideIndex");
        const mainImage = document.getElementById("mainImage");
        const modalImage = document.getElementById("modalImage");
        const modal = document.getElementById("imageModal");

        // List of 10 Local Images
        const images = [
            "../image/sl1.avif",
            "../image/sl2.avif",
            "../image/sl3.avif",
            "../image/sl4.avif",
            "../image/sl5.avif",
            "../image/sl6.avif",
            "../image/sl7.avif",
            "../image/sl8.avif",
            "../image/sl9.webp",
            "../image/sl10.avif"
        ];

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                if (i === index) {
                    slide.classList.add('active');
                }
            });
            mainImage.src = images[index];
            modalImage.src = images[index];
            slideIndex.textContent = index + 1;
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        function openModal() {
            modal.style.display = "flex"; 
        }

        function closeModal() {
            modal.style.display = "none"; 
        }
    </script>


      <!-------------footer include-->
      <?php include("footer.php"); ?>
</body>

</html>