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
            background: url(../image/b1.avif) center/cover no-repeat;
        }
        
        .text-section {
            max-width: 50%;
        }
        
        .text-section h1 {
            font-size: 2em;
            color: #222;
            text-align: left;
        }
        
        .text-section p {
            font-size: 1.5em;
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
        
        .underline-1 {
            width: 50px;
            height: 3px;
            background-color: #ffcc00;
            margin-left: 10px;
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
            margin-left: 20px;
        }

        /* Responsive Design */
@media (max-width: 1024px) {
    .cont {
        flex-direction: column;
        text-align: center;
        padding: 40px;
    }

    .text-section {
        max-width: 80%;
    }

    .video-section-1 {
        width: 80%;
        margin-top: 20px;
    }
}

@media (max-width: 768px) {
    .text-section h1 {
        font-size: 1.8em;
    }

    .text-section p {
        font-size: 0.9em;
    }

    .video-section-1 {
        width: 100%;
    }
}

@media (max-width: 480px) {
    .cont {
        padding: 20px;
    }

    .text-section {
        max-width: 100%;
    }

    .text-section h1 {
        font-size: 1.5em;
    }

    .text-section p {
        font-size: 0.85em;
    }

    .button {
        width: 100%;
        text-align: center;
        padding: 8px;
    }
}
       .benefits-section h2{
        font-size: 3em;
        text-align: left;
        margin-left: 30px;
      
    }
        .underline-a {
            width: 50px;
            height: 4px;
            background-color: #d4aa00;
            margin-left: 30px;
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
            width: 32%;
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
        
        h2 {
            font-size:2em !important;
            font-weight: bold;
            color: #000;
        }
        
        p {
            font-size: 1.5em !important;
            color: #333;
        }
        /* Responsive Design */
@media (max-width: 1024px) {
    .benefit-card {
        width: 48%; 
    }

    .underline-a {
        margin-left: 30px;
    }
}

@media (max-width: 768px) {
    .benefit-card {
        width: 100%; 
        text-align: center;
        padding: 25px;
    }

    .benefit-card h2 {
        font-size: 22px;
    }

    .benefit-card p {
        font-size: 14px;
    }

    .underline-a {
        margin-left: 30px;
    }
}

        .capabilities-section {
            padding: 10px;
            background-color: #f5f5f5;
        }
     
        .underline {
            width: 50px;
            height: 4px;
            background-color: #d4aa00;
            margin-left: 50px;
        }
     
        
        .capabilities-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 30px;
            padding: 0 40px;
        }
       
        
        .capability-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: all 0.3s ease-in-out;
        }
    
        
        .capability-card img {
            width: 100px;
        
            margin-bottom: 10px;
        }
        
        h2 {
            font-size: 18px;
            font-weight: bold;
            color: #000;
        }
        
        p {
            font-size: 14px;
            color: #333;
        }
        /* Responsive Design */
@media (max-width: 1024px) {
    .capabilities-container {
        grid-template-columns: repeat(2, 1fr);
        padding: 0 20px;
    }

    .underline {
        margin-left: 30px;
    }
}

@media (max-width: 768px) {
    .capabilities-container {
        grid-template-columns: repeat(1, 1fr);
        padding: 0 10px;
    }

    .capability-card {
        padding: 25px;
    }

    .capability-card img {
        width: 80px;
    }

    .capability-card h2 {
        font-size: 16px;
    }

    .capability-card p {
        font-size: 12px;
    }

    .underline {
        margin-left: 20px;
    }
}
        .cta-section {
            padding: 40px;
            text-align: center;
        }
        
        .cta-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
       
        
        .cta-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
         
            max-width: 1500px;
        }
    
        
        .cta-box {
            display: flex;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 580px;
            padding: 20px;
            align-items: center;
        }
     
        
        .cta-left {
            background-color: #177436;
            padding: 20px;
            text-align: center;
            flex: 1;
            border-radius: 8px;
        }
        
        .cta-left h2 {
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }
        /* Icon */
        
        .cta-icon {
            width: 40px;
            height: 40px;
        }
       
        
        .cta-right {
            flex: 2;
            padding: 20px;
            text-align: left;
        }
        
        .cta-right p {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
        }
        /* Button */
        
        .cta-button {
            background-color: rgb(15, 10, 10);
            border: 2px solid black;
            padding: 8px 15px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 5px;
        }
        
        .cta-button:hover {
            background-color: black;
            color: white;
        }

        /* Responsive Design */
@media (max-width: 1024px) {
    .cta-box {
        width: 100%;
        flex-direction: column;
        text-align: center;
    }

    .cta-left {
        border-radius: 8px 8px 0 0;
    }

    .cta-right {
        text-align: center;
    }
}

@media (max-width: 768px) {
    .cta-container {
        flex-direction: column;
        align-items: center;
    }

    .cta-box {
        width: 90%;
        flex-direction: column;
        text-align: center;
    }

    .cta-left {
        padding: 15px;
    }

    .cta-right {
        padding: 15px;
    }

    .cta-button {
        width: 100%; 
        padding: 10px;
    }
}
    </style>




    <div class="cont">
        <div class="text-section">
            <h1>Code Assist</h1>
            <div class="underline-1"></div>
            <p>Oracle Code Assist is an AI code companion to boost developer velocity, enhance code consistency, and is optimized for Java, SuiteScript, PL/SQL, and application development on Oracle Cloud Infrastructure (OCI). Developers within Oracle are
                using Oracle Code Assist to build new services. Code Assist, optimized for Java, is now available in beta.</p>
            <a href="Generative_AI_Service.php" class="button">Learn more about beta</a>
        </div>
        <div class="video-section-1">
            <img src="../image/ba1.avif" alt="Generative AI Video Thumbnail">
        </div>
    </div>

    <section class="benefits-section">
        <h2>Code Assist benefits</h2>
        <div class="underline-a"></div>

        <div class="benefits-container">
            <div class="benefit-card">
                <h2>Boost <br>developer velocity</h2>
                <p>Increase the speed of your application development. Get context-specific suggestions and explanations that can reduce time spent on routine tasks, giving you time for more strategic, value-added initiatives.</p>
            </div>

            <div class="benefit-card">
                <h2>Enhance <br>code consistency</h2>
                <p>Create code that is aligned with your organization's codebase. Tailor the tool to your own libraries, policies, and best practices to help create software in the style of those proprietary input parameters.</p>
            </div>

            <div class="benefit-card">
                <h2>Optimized for Java, OCI, SuiteScript, and PL/SQL</h2>
                <p>Use the plugin trained to give expert assistance with Java, SuiteScript, and application development on OCI. Speed up database upgrades when refactoring and testing complex, customized PL/SQL code.</p>
            </div>
        </div>
    </section>

    <section class="capabilities-section">
        <!-- <h4>Code Assist Capabilities</h4> -->
        <!-- <div class="underline"></div> -->

        <div class="capabilities-container">
            <div class="capability-card">
                <img src="../image/ass1.webp" alt="Productivity">
                <h2>Generate code to help improve productivity</h2>
                <p>Build applications faster and improve your productivity—because your time is precious.</p>
            </div>

            <div class="capability-card">
                <img src="../image/ass2.webp" alt="Test Coverage">
                <h2>Generate test cases to help increase coverage</h2>
                <p>Increase test quality with better test coverage spanning a greater variety of test inputs.</p>
            </div>

            <div class="capability-card">
                <img src="../image/ass3.avif" alt="Code Readability">
                <h2>Annotate code to help improve code readability</h2>
                <p>Improve maintainability with AI-generated API documentation or comments.</p>
            </div>

            <div class="capability-card">
                <img src="../image/ass4.webp" alt="Code Quality">
                <h2>Analyze code to help optimize code quality</h2>
                <p>Identify bugs and inefficiencies and produce opinionated code based on best practices.</p>
            </div>

            <div class="capability-card">
                <img src="../image/Ass5.avif" alt="Guidelines">
                <h2>Tailor suggestions based on your guidelines</h2>
                <p>Align your code with your organization’s existing codebase, which helps facilitate reviews.</p>
            </div>

            <div class="capability-card">
                <img src="../image/ass6.png" alt="OCI">
                <h2>Provide suggestions for AppDev on OCI</h2>
                <p>Maximize utility and boost effectiveness of applications that run on OCI and use OCI services.</p>
            </div>
        </div>
    </section>
    <section class="cta-section">
        <h2 class="cta-title">Get started with Oracle AI for Fusion Cloud Applications</h2>

        <div class="cta-container">

            <!-- Request a Demo Box -->
            <div class="cta-box">
                <div class="cta-left">
                    <img src="../image/desktop-solid (1).svg" alt="Demo Icon" class="cta-icon">
                    <i class="fa-solid fa-desktop"></i>
                    <h2>Request a demo</h2>
                </div>
                <div class="cta-right">
                    <p>Take a walkthrough with one of our experts.</p>
                    <button class="cta-button">Request a demo now</button>
                </div>
            </div>

            <!-- Contact Sales Box -->
            <div class="cta-box">
                <div class="cta-left">
                    <img src="../image/message-solid.svg" alt="Sales Icon" class="cta-icon">
                    <h2>Contact sales</h2>
                </div>
                <div class="cta-right">
                    <p>Talk to a team member about Oracle AI for Fusion Cloud Applications.</p>
                    <button class="cta-button">Talk to sales</button>
                </div>
            </div>

        </div>
    </section>


  <!-------------footer include-->
  <?php include("footer.php"); ?>
</body>

</html>