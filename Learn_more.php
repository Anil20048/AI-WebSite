<!DOCTYPE html>
<html lang="en">


    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn_more</title>
    <link rel="stylesheet" href="styles.css"> -->
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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        } 
        .container-re {
            display: flex;
            justify-content: space-between;
            padding: 50px;
            background-color: rgb(242, 236, 232);
        }
        
        .content-re {
            max-width: 50%;
        }
        
        .content-re h1 {
            font-size: 32px;
        }
        
        .content-re p {
            font-size: 1.2em;
            color: #444;
        }
        
        .demo-btn {
            background-color: black;
            color: white;
            padding: 10px 15px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }
        
        .demo-btn:hover {
            background-color: #444;
        } 
        .video img {
            width: 600px;
            height: auto;
            border-radius: 8px;
        }
        
        .video p {
            font-size: 14px;
            text-align: center;
            color: #666;
        }
        
        .underline {
            width: 50px;
            height: 3px;
            background-color: #ffcc00;
            margin: 5px 0 20px 0;
        }


        
        @media (max-width: 1024px) {
    .container-re {
        padding: 30px;
    }

    .content-re {
        max-width: 100%;
        margin-bottom: 20px; 
    }

    .video img {
        width: 100%; 
        max-width: 500px; 
    }

    .demo-btn {
        font-size: 14px; 
    }
}


@media (max-width: 768px) {
    .container-re {
        padding: 20px;
        flex-direction: column; 
    }

    .content-re {
        max-width: 100%;
        margin-bottom: 20px;
    }

    .video img {
        width: 100%; 
        height: auto;
    }

    .demo-btn {
        font-size: 14px;
        padding: 8px 12px;
    }

    .content-re h1 {
        font-size: 28px; 
    }

    .content-re p {
        font-size: 14px; 
    }
}


@media (max-width: 480px) {
    .content-re h1 {
        font-size: 20px; 
        padding-left: -10px;
    }

    .content-re p {
        font-size: 14px; 
    }

    .demo-btn {
        font-size: 12px; 
        padding: 8px 10px; 
    }

    .video img {
        width: 100%;
        max-width: 100%; 
    }
    .underline {
        margin-left: 50px;
    }


}
   
.ai-section {
  display: flex;
  justify-content: space-between;
  background-color: #f5fbfd;
  padding: 30px;
  gap: 20px;
  flex-wrap: wrap;
}

.ai-card {
  background: #ffffff;
  display: flex;
  align-items: flex-start;
  width: 48%;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  gap: 20px;
}

.ai-card img {
  width: 200px;
  height: 200px;
  border-radius: 8px;
  object-fit: cover;
}

.card-content {
  flex: 1;
}

.card-content h3 {
  font-size: 1.5em;
  font-weight: bold;
  margin-bottom: 10px;
  color: #000;
}

.card-content p {
  font-size: 1.2em;
  color: #333;
  margin-bottom: 15px;
}

.card-button {
  background-color: #222;
  color: #fff;
  padding: 10px 16px;
  text-decoration: none;
  border-radius: 5px;
  display: inline-block;
}

.card-button:hover {
  background-color: #444;
}

.ai-card a:hover{
    text-decoration: none;
}

@media (max-width: 992px) {
  .ai-card {
    width: 100%;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .ai-card img {
    width: 150px;
    height: 150px;
    margin-bottom: 15px;
  }

  .card-content {
    width: 100%;
    text-align: center;
  }

  .card-content h3 {
    font-size: 1.3em;
  }

  .card-content p {
    font-size: 1em;
  }

  .card-button {
    padding: 10px 20px;
    font-size: 1em;
  }
}

@media (max-width: 576px) {
  .ai-section {
    padding: 20px 10px;
  }

  .card-content h3 {
    font-size: 1.1em;
  }

  .card-content p {
    font-size: 0.95em;
  }

  .card-button {
    width: 100%;
    text-align: center;
  }
}
              /* Heading */  
        .heading-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #000;
            padding-left: 80px;
        }
        
        .highlight-bar {
            width: 60px;
            height: 4px;
            background: #e0c070;
            margin-bottom: 20px;
            margin-left: 80px;
        }
        /* Container */
        
        .container-1 {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            padding: 20px 0;
            background-color: #F5F4F2;
            width: 97%;
            margin-top: 20px;
        }
        /* Card Styles */
        
        .card {
            width: 340px;
            border-radius: 8px;
            overflow: hidden;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }
        
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }
        /* Hover Effect */
        
        .card:hover {
            transform: translateY(-10px);
        }
        
        .card:hover img {
            transform: scale(1.05);
        }
        /* Info Box */
        
        .info {
            padding: 15px;
            text-align: left;
        }
        
        .info h3 {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .info p {
            font-size: 14px;
            color: #555;
        }
        /* tab */
        
        h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
       /* Responsive Styles */
@media screen and (max-width: 1024px) {
    .heading-title {
        font-size: 24px; /* Adjust title font size for tablets */
        padding-left: 20px; /* Adjust padding on smaller screens */
    }

    .highlight-bar {
        margin-left: 20px; /* Adjust margin on smaller screens */
    }

    .container-1 {
        justify-content: flex-start; /* Align cards left */
        gap: 15px;
    }

    .card {
        width: 280px; /* Adjust card width for tablets */
    }
}

@media screen and (max-width: 768px) {
    .heading-title {
        font-size: 22px; /* Adjust title font size for mobile */
        padding-left: 10px; /* Further adjust padding */
    }

    .highlight-bar {
        margin-left: 10px; /* Adjust margin on smaller screens */
    }

    .container-1 {
        justify-content: center; /* Center align on mobile */
        padding: 10px;
    }

    .card {
        width: 100%; 
        margin-bottom: 20px; 
    }

    .card img {
        height: 180px; /
    }

    .info h3 {
        font-size: 14px;
    }

    .info p {
        font-size: 12px; 
    }
}

@media screen and (max-width: 480px) {
    .heading-title {
        font-size: 20px; 
    }

    .highlight-bar {
        width: 50px; 
    }

    .card img {
        height: 150px; 
    }

    .info h3 {
        font-size: 12px; 
    }

    .info p {
        font-size: 10px; 
    }
}
        .heading-title1 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #000;
            padding-left: 50px;
        }
        
        .highlight1-bar {
            width: 60px;
            height: 4px;
            background: #e0c070;
            margin-bottom: 20px;
            margin-left: 50px;
        }
        
        .heading-title2 {
            font-size: 20px;
            padding-left: 50px;
        }
        /* Responsive Adjustments */
@media screen and (max-width: 1024px) {
    .heading-title1, 
    .highlight1-bar, 
    .heading-title2 {
        padding-left: 50px;
        margin-left: 50px;
    }
}

@media screen and (max-width: 768px) {
    .heading-title1, 
    .highlight1-bar, 
    .heading-title2 {
        padding-left: 20px;
        margin-left: 20px;
        text-align: left;
    }
}

@media screen and (max-width: 480px) {
    .heading-title1 {
        font-size: 24px;
    }

    .heading-title2 {
        font-size: 18px;
    }

    .highlight1-bar {
        width: 50px;
        height: 3px;
        margin-left: 41px;
    }
}
        .tabs {
            display: flex;
            justify-content: left;
            /* gap: 10px; */
            margin: 20px 0;
            padding-left: 40px;
        }
        /* Tab Button Styling */
        
        .tab-btn {
            background: none;
            border: none;
            /* padding: 10px 20px; */
            font-size: 16px;
            cursor: pointer;
            border-bottom: 3px solid transparent;
            transition: 0.3s;
            color: #000;
        }
        
        .tab-btn.active {
            border-bottom: 3px solid #0077b6;
            font-weight: bold;
        }
        /* Content Box */
        
        .tab-content {
            display: none;
            padding-left: 80px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding-bottom: 50px;
        }
        
        .tab-content.active {
            display: block;
        }

        /* Active Tab Content */
.tab-content.active {
    display: block;
}

/* Responsive Adjustments */
@media screen and (max-width: 1024px) {
    .tabs {
        padding-left: 50px;
        justify-content: center; /* Center align on tablets */
    }

    .tab-content {
        padding-left: 50px;
    }
}

@media screen and (max-width: 768px) {
    .tabs {
        padding-left: 20px;
        justify-content: center; 
    }

    .tab-content {
        padding-left: 20px;
        padding-bottom: 30px;
    }

    .tab-btn {
        font-size: 14px;
        padding: 8px 12px;
    }
}

@media screen and (max-width: 480px) {
    .tabs {
        flex-direction: column;
        align-items: center;
        padding-left: 0;
    }

    .tab-btn {
        font-size: 14px;
        padding: 6px 10px;
    }

    .tab-content {
        padding-left: 10px;
        padding-bottom: 20px;
    }
}
        /* Table Styling */
        
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #0077b6;
            color: white;
        }
        /* CTA Button */
        
        .cta-btn {
            background-color: #333;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
        
        .cta-btn:hover {
            background-color: #444;
        }
        /* Responsive Adjustments */
@media screen and (max-width: 1024px) {
    table {
        width: 90%; /* Slightly wider on tablets */
    }
}

@media screen and (max-width: 768px) {
    table {
        width: 100%; /* Full width on small screens */
    }

    th,
    td {
        padding: 6px; /* Reduce padding for better spacing */
        font-size: 14px;
    }

    .cta-btn {
        font-size: 13px;
        padding: 8px 12px;
    }
}

/* Mobile-Friendly Table */
@media screen and (max-width: 480px) {
    table {
        width: 100%;
        display: block;
        overflow-x: auto; /* Enable horizontal scrolling */
        /* white-space: nowrap; */
    }

    th,
    td {
        font-size: 12px;
        padding: 5px;
    }

    .cta-btn {
        font-size: 12px;
        padding: 6px 10px;
    }
}
        /* Oracle TV Section */
        
        .heading-3-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #000;
            padding-left: 70px;
            background: #ffffff;
        }
        
        .highlight-3-bar {
            width: 60px;
            height: 4px;
            background: #e0c070;
            margin-bottom: 20px;
            margin-left: 70px;
        }
        /* Responsive Adjustments */
@media screen and (max-width: 1024px) {
    .heading-3-title,
    .highlight-3-bar {
        padding-left: 80px; /* Adjust alignment for tablets */
    }
}

@media screen and (max-width: 768px) {
    .heading-3-title {
        font-size: 24px;
        padding-left: 50px;
    }

    .highlight-3-bar {
        margin-left: 50px;
    }
}

@media screen and (max-width: 480px) {
    .heading-3-title {
        font-size: 22px;
        padding-left: 20px; /* Adjust for mobile */
        text-align: left;
    }

    .highlight-3-bar {
        width: 50px;
        height: 3px;
        margin-left: 20px;
    }
}

        .oracle-tv-section {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }
        
        .oracle-tv-container {
            display: flex;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            gap: 20px;
        }
        
        .oracle-tv-thumbnail {
            position: relative;
            width: 50%;
        }
        
        .oracle-tv-thumbnail img {
            width: 100%;
            border-radius: 8px;
        }
        
        .play-btn {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 50%;
            cursor: pointer;
        }
        
        .oracle-tv-content {
            flex: 1;
            width: 60%;
            justify-content: center;
            padding-top: 10px;
            margin-left: 50px;
        }
        
        .oracle-tv-content h2 {
            font-size: 25px;
            color: #333;
        }
        
        .underline {
            width: 50px;
            height: 3px;
            background-color: #f4b400;
            margin: 10px 0;
        }
        
        .oracle-tv-content p {
            color: #555;
            font-size: 16px;
        }
        
        .watch-video-btn {
            background-color: white;
            color: black;
            border: 1px solid black;
            padding: 8px 12px;
            cursor: pointer;
            margin-top: 10px;
        }
        
        .watch-video-btn:hover {
            background-color: black;
            color: white;
        }
        /* Responsive Adjustments */
@media screen and (max-width: 1024px) {
    .oracle-tv-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 15px;
    }

    .oracle-tv-thumbnail {
        width: 100%;
    }

    .oracle-tv-content {
        width: 100%;
        padding-top: 20px;
    }
}

@media screen and (max-width: 768px) {
    .oracle-tv-content h2 {
        font-size: 18px;
    }

    .oracle-tv-content p {
        font-size: 13px;
    }
}

@media screen and (max-width: 480px) {
    .oracle-tv-container {
        padding: 15px;
    }

    .oracle-tv-content {
        padding-top: 10px;
    }

    .oracle-tv-content h2 {
        font-size: 16px;
    }

    .play-btn {
        padding: 8px 12px;
    }
}
        /* AI Benefits Section */
        
        .ai-benefits-section {
            padding: 40px;
            text-align: center;
            background: #F5FAFC;
        }
        
        .ai-benefits-title {
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 20px;
        }
        /* Box Container */
        
        .ai-benefits-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 20px;
            max-width:97%;
            margin: 0 auto;
        }
        /* Individual Boxes */
        
        .ai-benefits-box {
            display: flex;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            align-items: center;
        }
        /* Yellow Bar */
        
        .ai-benefits-bar {
            width: 4px;
            height: 100%;
            background-color: #f4b400;
            margin-right: 15px;
        }
        /* Box Content */
        
        .ai-benefits-content {
            text-align: left;
        }
        
        .ai-benefits-content h3 {
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .ai-benefits-content p {
            font-size: 1.1em;
            color: #555;
        }
        
/* Responsive Design */
@media screen and (max-width: 1024px) {
    .ai-benefits-container {
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    }

    .ai-benefits-title {
        font-size: 22px;
    }
}

@media screen and (max-width: 768px) {
    .ai-benefits-container {
        grid-template-columns: 1fr;
        gap: 15px;
    }

    .ai-benefits-box {
        flex-direction: column;
        align-items: flex-start;
        padding: 15px;
    }

    .ai-benefits-bar {
        width: 100%;
        height: 4px;
        margin: 10px 0;
    }

    .ai-benefits-content {
        text-align: center;
    }
}

@media screen and (max-width: 480px) {
    .ai-benefits-section {
        padding: 20px;
    }

    .ai-benefits-title {
        font-size: 20px;
    }

    .ai-benefits-box {
        padding: 10px;
    }

    .ai-benefits-content h3 {
        font-size: 16px;
    }

    .ai-benefits-content p {
        font-size: 13px;
    }
}
        /* Call to Action Section */
        
        .cta-section {
            padding: 40px;
            text-align: center;
        }
        
        .cta-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        /* Container */
        
        .cta-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            /* width: 1200px; */
            max-width: 1500px;
        }
        /* Individual Boxes */
        
        .cta-box {
            display: flex;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 580px;
            padding: 20px;
            align-items: center;
        }
        /* Left Side (Icon + Title) */
        
        .cta-left {
            background-color: #fde9c9;
            padding: 20px;
            text-align: center;
            flex: 1;
            border-radius: 8px;
        }
        
        .cta-left h3 {
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }
        /* Icon */
        
        .cta-icon {
            width: 40px;
            height: 40px;
        }
        /* Right Side (Text + Button) */
        
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
            background-color: white;
            border: 2px solid black;
            padding: 8px 15px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 5px;
            color: #000;
        }
        
        .cta-button:hover {
            background-color: black;
            color: white;
        }

        /* 🌟 Responsive Design */
@media screen and (max-width: 1024px) {
    .cta-container {
        flex-direction: column;
        align-items: center;
    }

    .cta-box {
        width: 90%;
        flex-direction: column;
        text-align: center;
    }

    .cta-left,
    .cta-right {
        width: 100%;
        text-align: center;
    }

    .cta-left {
        padding: 15px;
    }

    .cta-right {
        padding: 15px;
    }
}

@media screen and (max-width: 768px) {
    .cta-title {
        font-size: 22px;
    }

    .cta-box {
        width: 95%;
    }

    .cta-button {
        width: 100%;
    }
}

@media screen and (max-width: 480px) {
    .cta-section {
        padding: 20px;
    }

    .cta-title {
        font-size: 20px;
    }

    .cta-box {
        width: 100%;
        padding: 15px;
    }

    .cta-left h3 {
        font-size: 14px;
    }

    .cta-right p {
        font-size: 13px;
    }
}
    </style>
    <!-- Main Content -->
    <div class="container-re">
        <div class="content-re">
            <h1>Oracle AI for Fusion Applications</h1>
            <div class="underline"></div>
            <p>
            Oracle delivers AI that’s purpose-built for business, enabling organizations to make smarter, faster decisions and empowering employees to work more efficiently. By embedding both classic and generative AI directly into Oracle Fusion Cloud Applications, users can access real-time insights and intelligent recommendations within the tools they already use. This seamless integration eliminates the need to switch between platforms, streamlining workflows and boosting productivity. Whether it’s automating tasks, forecasting outcomes, or enhancing customer experiences, Oracle’s AI capabilities are designed to drive measurable results. Businesses benefit from a consistent, scalable approach to AI that supports innovation and delivers tangible value across operations.
            </p>
          
        </div>
        <div class="video">
            <img src="../image/yt-thumbnail-h-c5dh3w1dg.webp" alt="Oracle AI Video Thumbnail">
    
        </div>
    </div>
    <div class="ai-section">
  <div class="ai-card">
    <img src="../image/li1.webp" alt="Oracle AI Presentation">
    <div class="card-content">
      <h3>Oracle AI in Fusion Applications: Built for your business in the age of AI</h3>
      <p>Learn how Oracle AI in Fusion Applications helps unlock unprecedented levels of productivity and innovation.</p>
      <a href="https://www.oracle.com/in/a/ocom/docs/applications/oracle-ai-for-fusion-apps.pdf" class="card-button" target="_blank">View the product brief (PDF)</a>


    </div>
  </div>

  <div class="ai-card">
    <img src="../image/lu2.webp" alt="Oracle AI Agents">
    <div class="card-content">
      <h3>Build and customize your own AI agents</h3>
      <p>Be an AI change maker. With Oracle AI Agent Studio for Fusion Applications, you can modify the pre-built AI agents within Fusion Applications or quickly create new ones to bring your AI ideas to life where the daily work gets done.</p>
      <a href="https://www.oracle.com/in/a/ocom/docs/applications/fusion-apps-ai-agent-studio-solution-brochure.pdf" class="card-button" target="_blank">Read the guide (PDF)</a>
    </div>
  </div>
</div>
    <h2 class="heading-title">See AI agents in action in Oracle Fusion Cloud Applications</h2>
    <div class="highlight-bar"></div>

    <div class="container-1">
        <div class="card">
            <img src="../image/-86fqfyywhyIyukv.webp" alt="Ledger AI">
            <div class="info">
                <h3>Ledger AI Agent in Oracle Fusion Cloud ERP</h3>
                <p>This demo shows how AI agents coming to Oracle Fusion Cloud ERP can help resolve a revenue variance in the days before quarter-end.</p>
            </div>
        </div>

        <div class="card">
            <img src="../image/Zl10hgcohqu.webp" alt="z">
            <div class="info">
                <h3>Benefits analyst agent in Oracle Fusion Cloud HCM</h3>
                <p>See how AI agents embedded in Oracle Fusion Cloud HCM streamline the benefits enrollment process.</p>
            </div>
        </div>

        <div class="card">
            <img src="../image/uqmy0stdtfy.avif" alt="Sales AI">
            <div class="info">
                <h3>Sales automation AI agents in Oracle Fusion Cloud CX</h3>
                <p>Discover how AI agents embedded in Oracle Fusion Cloud Sales can help empower reps to accelerate deals.</p>
            </div>
        </div>

        <div class="card">
            <img src="../image/qyidh-f7rfy.webp" alt="Document AI">
            <div class="info">
                <h3>Document IO agent in Oracle Fusion Cloud ERP</h3>
                <p>See the Oracle document IO agent at work in Oracle Fusion Cloud ERP, helping streamline procure-to-pay processes.</p>
            </div>
        </div>
    </div>

    <!-- tab -->

    <h2 class="heading-title1">See AI agents in action in Oracle Fusion Cloud Applications</h2>

    <div class="highlight1-bar"></div>
    <p class="heading-title2">Organizations can quickly and easily adopt the latest AI capabilities to help improve productivity...</p>




    <!-- Tab Navigation -->
    <div class="tabs">
        <button class="tab-btn active" onclick="showTab('erp')">ERP</button>
        <button class="tab-btn" onclick="showTab('hcm')">HCM</button>
        <button class="tab-btn" onclick="showTab('scm')">SCM</button>
        <button class="tab-btn" onclick="showTab('sales')">Sales</button>
        <button class="tab-btn" onclick="showTab('service')">Service</button>
        <button class="tab-btn" onclick="showTab('marketing')">Marketing</button>
    </div>

    <!-- Tab Content -->
    <div id="erp" class="tab-content active">
        <p>AI-powered features for finance tasks help improve performance...</p>
      
        <table>
            <tr>
                <th>Functional Area</th>
                <th>Use Case</th>
                <th>Business Benefit</th>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>

        </table>
    </div>

    <div id="hcm" class="tab-content">
        <p>AI-powered features for finance tasks help improve performance...</p>
      
        <table>
            <tr>
                <th> Area</th>
                <th>Use Case</th>
                <th>Business Benefit</th>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>

            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
        </table>
    </div>

    <div id="scm" class="tab-content">
        <p>AI-powered features for finance tasks help improve performance...</p>
      
        <table>
            <tr>
                <th> Area</th>
                <th>Use Case</th>
                <th>Business Benefit</th>
            </tr>
            <tr>
                <td>Cost management</td>
                <td>Generate accrual clearing summary*</td>
                <td>Designed to streamline the accrual clearing process when used to generate justification text for accrual clearing transactions.</td>
            </tr>
            <tr>
                <td>Cost management</td>
                <td>Generate accrual clearing summary*</td>
                <td>Designed to streamline the accrual clearing process when used to generate justification text for accrual clearing transactions.</td>
            </tr>
            <tr>
                <td>Cost management</td>
                <td>Generate accrual clearing summary*</td>
                <td>Designed to streamline the accrual clearing process when used to generate justification text for accrual clearing transactions.</td>
            </tr>
            <tr>
                <td>Cost management</td>
                <td>Generate accrual clearing summary*</td>
                <td>Designed to streamline the accrual clearing process when used to generate justification text for accrual clearing transactions.</td>
            </tr>
            <tr>
                <td>Cost management</td>
                <td>Generate accrual clearing summary*</td>
                <td>Designed to streamline the accrual clearing process when used to generate justification text for accrual clearing transactions.</td>
            </tr>
            <tr>
                <td>Cost management</td>
                <td>Generate accrual clearing summary*</td>
                <td>Designed to streamline the accrual clearing process when used to generate justification text for accrual clearing transactions.</td>
            </tr>
            <tr>
                <td>Cost management</td>
                <td>Generate accrual clearing summary*</td>
                <td>Designed to streamline the accrual clearing process when used to generate justification text for accrual clearing transactions.</td>
            </tr>
            <tr>
                <td>Cost management</td>
                <td>Generate accrual clearing summary*</td>
                <td>Designed to streamline the accrual clearing process when used to generate justification text for accrual clearing transactions.</td>
            </tr>
            <tr>
                <td>Cost management</td>
                <td>Generate accrual clearing summary*</td>
                <td>Designed to streamline the accrual clearing process when used to generate justification text for accrual clearing transactions.</td>
            </tr>
            <tr>
                <td>Cost management</td>
                <td>Generate accrual clearing summary*</td>
                <td>Designed to streamline the accrual clearing process when used to generate justification text for accrual clearing transactions.</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>
        </table>
    </div>

    <div id="sales" class="tab-content">
        <p>AI-powered features for finance tasks help improve performance...</p>
      
        <table>
            <tr>
                <th> Area</th>
                <th>Use Case</th>
                <th>Business Benefit</th>
            </tr>
            <tr>
                <td>Sales force automation</td>
                <td>Appointment agenda authoring from email*</td>
                <td>Can be used to automate meeting agenda creation.</td>
            </tr>
            <tr>
                <td>Sales force automation</td>
                <td>Appointment agenda authoring from email*</td>
                <td>Can be used to automate meeting agenda creation.</td>
            </tr>
            <tr>
                <td>Sales force automation</td>
                <td>Appointment agenda authoring from email*</td>
                <td>Can be used to automate meeting agenda creation.</td>
            </tr>
            <tr>
                <td>Sales force automation</td>
                <td>Appointment agenda authoring from email*</td>
                <td>Can be used to automate meeting agenda creation.</td>
            </tr>
            <tr>
                <td>Sales force automation</td>
                <td>Appointment agenda authoring from email*</td>
                <td>Can be used to automate meeting agenda creation.</td>
            </tr>

            <tr>
                <td>Sales force automation</td>
                <td>Appointment agenda authoring from email*</td>
                <td>Can be used to automate meeting agenda creation.</td>
            </tr>
            <tr>
                <td>Sales force automation</td>
                <td>Appointment agenda authoring from email*</td>
                <td>Can be used to automate meeting agenda creation.</td>
            </tr>
            <tr>
                <td>Sales force automation</td>
                <td>Appointment agenda authoring from email*</td>
                <td>Can be used to automate meeting agenda creation.</td>
            </tr>
            <tr>
                <td>Sales force automation</td>
                <td>Appointment agenda authoring from email*</td>
                <td>Can be used to automate meeting agenda creation.</td>
            </tr>
            <tr>
                <td>Sales force automation</td>
                <td>Appointment agenda authoring from email*</td>
                <td>Can be used to automate meeting agenda creation.</td>
            </tr>
            <tr>
                <td>Sales force automation</td>
                <td>Appointment agenda authoring from email*</td>
                <td>Can be used to automate meeting agenda creation.</td>
            </tr>
            <tr>
                <td>Sales force automation</td>
                <td>Appointment agenda authoring from email*</td>
                <td>Can be used to automate meeting agenda creation.</td>
            </tr>
            <tr>
                <td>Sales force automation</td>
                <td>Appointment agenda authoring from email*</td>
                <td>Can be used to automate meeting agenda creation.</td>
            </tr>

            <tr>
                <td>Sales force automation</td>
                <td>Appointment agenda authoring from email*</td>
                <td>Can be used to automate meeting agenda creation.</td>
            </tr>
            <tr>
                <td>Sales force automation</td>
                <td>Appointment agenda authoring from email*</td>
                <td>Can be used to automate meeting agenda creation.</td>
            </tr>
            <tr>
                <td>Sales force automation</td>
                <td>Appointment agenda authoring from email*</td>
                <td>Can be used to automate meeting agenda creation.</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>
        </table>
    </div>

    <div id="service" class="tab-content">
        <table>
            <tr>
                <th> Area</th>
                <th>Use Case</th>
                <th>Business Benefit</th>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Intelligent account combination defaulting</td>
                <td>Predict and populate account code combinations...</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>
        </table>
    </div>

    <div id="marketing" class="tab-content">
        <table>
            <tr>
                <th> Area</th>
                <th>Use Case</th>
                <th>Business Benefit</th>
            </tr>
            <tr>
                <td>Marketing</td>
                <td>Opportunity scoring model</td>
                <td>Scores a sales opportunity based on campaign engagement levels.</td>
            </tr>
            <tr>
                <td>Marketing</td>
                <td>Opportunity scoring model</td>
                <td>Scores a sales opportunity based on campaign engagement levels.</td>
            </tr>
            <tr>
                <td>Marketing</td>
                <td>Opportunity scoring model</td>
                <td>Scores a sales opportunity based on campaign engagement levels.</td>
            </tr>
            <tr>
                <td>Marketing</td>
                <td>Opportunity scoring model</td>
                <td>Scores a sales opportunity based on campaign engagement levels.</td>
            </tr>
            <tr>
                <td>Marketing</td>
                <td>Opportunity scoring model</td>
                <td>Scores a sales opportunity based on campaign engagement levels.</td>
            </tr>
            <tr>
                <td>Marketing</td>
                <td>Opportunity scoring model</td>
                <td>Scores a sales opportunity based on campaign engagement levels.</td>
            </tr>
            <tr>
                <td>Marketing</td>
                <td>Opportunity scoring model</td>
                <td>Scores a sales opportunity based on campaign engagement levels.</td>
            </tr>
            <tr>
                <td>Marketing</td>
                <td>Opportunity scoring model</td>
                <td>Scores a sales opportunity based on campaign engagement levels.</td>
            </tr>
            <tr>
                <td>Marketing</td>
                <td>Opportunity scoring model</td>
                <td>Scores a sales opportunity based on campaign engagement levels.</td>
            </tr>
            <tr>
                <td>Marketing</td>
                <td>Opportunity scoring model</td>
                <td>Scores a sales opportunity based on campaign engagement levels.</td>
            </tr>
            <tr>
                <td>Finance</td>
                <td>Dynamic discounting</td>
                <td>Facilitate execution of a dynamic discounting program...</td>
            </tr>
        </table>
    </div>
    <h2 class="heading-3-title">See AI agents in action in Oracle Fusion Cloud Applications</h2>
    <div class="highlight-3-bar"></div>

    <div class="container-1">
        <div class="card">
            <img src="../image/s1.avif" alt="Ledger AI">
            <div class="info">
                <h3>PLM Item Description Generation</h3>
                <p>Learn how generative AI in Oracle Product Lifecycle Management helps busy product managers create SEO friendly product descriptions.</p>
            </div>
        </div>

        <div class="card">
            <img src="../image/s2.avif" alt="Benefits AI">
            <div class="info">
                <h3>CX Cloud Service request</h3>
                <p>See how GenAI embedded in Oracle Fusion Cloud Service can help boost customer satisfaction, accelerate issue resolution, and increase agent efficiency.</p>
            </div>
        </div>

        <div class="card">
            <img src="../image/s3.avif" alt="Sales AI">
            <div class="info">
                <h3>ERP project planning
                </h3>
                <p>See how AI-powered project planning in Oracle Fusion Cloud ERP helps a project manager use GenAI to quickly assemble project plans that balance customer requirements with resource, risk, and budget concerns.</p>
            </div>
        </div>

        <div class="card">
            <img src="../image/s4.avif" alt="Document AI">
            <div class="info">
                <h3>EPM narrative reporting</h3>
                <p>Watch a finance director use GenAI narrative reporting in Oracle Fusion Cloud EPM to explain the impacts of a supply shortage in a quarterly roll-forward report. See how GenAI helps provide insights, draft descriptions, and create visuals, saving time and improving accuracy.</p>
            </div>
        </div>

    </div>
    <div class="container-1">
        <div class="card">
            <img src="../image/rc4.webp" alt="Ledger AI">
            <div class="info">
                <h3>CX Knowledge Article Authoring</h3>
                <p>Using generative AI embedded in Oracle Service to create knowledge articles minimizes the burden on service and product teams who find crafting these assets time-consuming and helps build a repository of valuable tribal knowledge to help customers and agents resolve issues faster.</p>
            </div>
        </div>

        <div class="card">
            <img src="../image/s6.webp" alt="Benefits AI">
            <div class="info">
                <h3>HCM candidate experience</h3>
                <p>See how embedded GenAI in Oracle Fusion Cloud HCM can help job seekers find a great fit. By simply uploading a resume, candidates get matched with openings based on their specific experiences and skills.</p>
            </div>
        </div>

        <div class="card">
            <img src="../image/s7.webp" alt="Sales AI">
            <div class="info">
                <h3>HCM performance review</h3>
                <p>See how GenAI embedded in Oracle Fusion Cloud HCM can help managers with employee performance reviews. GenAI creates a synopsis of peer feedback and summarizes overall performance in just a few seconds.</p>
            </div>
        </div>

        <div class="card">
            <img src="../image/s8.avif" alt="Document AI">
            <div class="info">
                <h3>HCM job post authoring</h3>
                <p>Watch how GenAI in Oracle Fusion Cloud HCM helps a busy manager create a job description for a junior position on her team. AI effortlessly drafts job description sections in seconds and optimizes the posting for keyword searches and applicant tracking systems.</p>
            </div>
        </div>

    </div>


    <section class="oracle-tv-section">
        <div class="oracle-tv-container">
            <div class="oracle-tv-thumbnail">
                <img src="../image/xy.webp" alt="Oracle AI Agents">
               
            </div>
            <div class="oracle-tv-content">
                <h1>Oracle TV CloudWorld 2024: Introducing Oracle Intelligent AI Agents</h1>
                <div class="underline"></div>
                <p>Chris Leone, Executive Vice President and General Manager of Human Capital Management and Supply Chain Management at Oracle, joins Oracle TV to highlight the latest innovations in Oracle's intelligent AI agents. These cutting-edge agents are designed to enhance productivity, streamline operations, and drive smarter decision-making across enterprise functions. Leone discusses how Oracle’s AI is embedded directly into workflows, allowing users to interact in natural language, automate routine tasks, and gain real-time insights. He also addresses the real-world challenges these AI solutions are helping customers overcome—such as talent shortages, supply chain disruptions, and the need for faster, more adaptive planning. By integrating AI deeply within Oracle Cloud applications, businesses can not only respond more quickly to change but also anticipate it. Leone emphasizes Oracle’s commitment to continuous innovation, ensuring customers have the tools they need to stay ahead in today’s fast-evolving business landscape. Watch the full segment on Oracle TV.</p>
           
            </div>
        </div>
    </section>

    <section class="ai-benefits-section">
        <h2 class="ai-benefits-title">Oracle AI for Fusion Applications—key benefits</h2>

        <div class="ai-benefits-container">
            <div class="ai-benefits-box">
                <div class="ai-benefits-bar"></div>
                <div class="ai-benefits-content">
                    <h3>AI built for business</h3>
                    <p>
                        Oracle has decades of experience building AI-powered features into software that powers enterprises and solves real-world problems. We have a proven and deliberate approach to AI, putting customer data security and privacy first. Our AI features deliver
                        intelligence, but not decision-making. AI empowers people to work smarter and be more productive—but the human is always in the driver’s seat.
                    </p>
                </div>
            </div>

            <div class="ai-benefits-box">
                <div class="ai-benefits-bar"></div>
                <div class="ai-benefits-content">
                    <h3>Robust performance with the backing of Oracle Cloud Infrastructure</h3>
                    <p>
                        Built to run complex AI workloads, OCI delivers the highest performance and lowest cost GPU cluster technology and the highest bandwidth RDMA network in the cloud. All of this means we have the compute power to ensure low latency and solid performance,
                        especially in an era where larger, more powerful AI models demand significant resources.
                    </p>
                </div>
            </div>

            <div class="ai-benefits-box">
                <div class="ai-benefits-bar"></div>
                <div class="ai-benefits-content">
                    <h3>AI delivered where work gets done</h3>
                    <p>
                        With AI built natively into Fusion Applications, actionable insights, timely predictions, and time-saving automation are surfaced seamlessly in the flow of work. No cumbersome implementations or tricky integrations to manage. From day one, you get value
                        as well as a built-in, continuous learning loop to improve performance over time.
                    </p>
                </div>
            </div>

            <div class="ai-benefits-box">
                <div class="ai-benefits-bar"></div>
                <div class="ai-benefits-content">
                    <h3>Feedback from thousands of customers to power innovation</h3>
                    <p>
                        Thousands of companies across all industries and domains use Oracle software daily. This creates a powerful feedback loop to enable our teams to innovate quickly, improve AI capabilities, deliver generative AI done right, and bring best-in-class enterprise
                        AI to market.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <script>
        function showTab(tabId) {
            let contents = document.querySelectorAll(".tab-content");
            contents.forEach(content => content.classList.remove("active"));
            let buttons = document.querySelectorAll(".tab-btn");
            buttons.forEach(button => button.classList.remove("active"));
            document.getElementById(tabId).classList.add("active");
            event.currentTarget.classList.add("active");
        }
    </script>
    <!-------------footer include-->
    <?php include("footer.php"); ?>


</body>

</html>