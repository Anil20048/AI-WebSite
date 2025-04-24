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
            margin-left: 0px;
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
        
        .underline {
            width: 50px;
            height: 3px;
            background-color: #ffcc00;
            margin-left: 10px;
        }

        /* Responsive Design */
@media (max-width: 768px) {
    .text-section h1 {
        font-size: 28px;
    }

    .button {
        display: block;
        width: 100%;
        margin: 10px auto;
    }
}

@media (max-width: 480px) {
    .text-section h1 {
        font-size: 16px;
    }

    .button {
        width: 100%;
        font-size: 14px;
    }
}


        /* Section Styles */
        
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
            margin-left: 0px;
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
        
        .ani-par {
            width: 100%;
            text-align: left;
        }
        
        .ani-par h1 {
            margin-top: 21px;
            font-size: 20px;
            color: #000;
            padding-left: 100px;
        }
        
        .ani-par p {
            font-size: 15px;
            color: #898282;
            padding-left: 100px;
        }

        /* Responsive Design */
@media (max-width: 1024px) {
    .ani-par h1,
    .ani-par p {
        padding-left: 50px;
    }
}

@media (max-width: 768px) {
    h2 {
        font-size: 24px;
    }

    .navigation-tabs {
        flex-direction: column;
        align-items: center;
    }

    .navigation-tab {
        width: 100%;
        text-align: center;
        padding: 12px;
    }

    .ani-par h1,
    .ani-par p {
        padding-left: 20px;
        text-align: center;
    }
}

@media (max-width: 480px) {
    h2 {
        font-size: 22px;
    }

    .underline {
        width: 40px;
        height: 3px;
    }

    .ani-par h1 {
        font-size: 18px;
    }

    .ani-par p {
        font-size: 14px;
    }
}
    </style>


    <div class="cont">
        <div class="text-section">
            <h1>Digital Assistant FAQ</h1>
            <div class="underline"></div>
            <a href="#" class="button">Get our newsletter</a>
            <a href="#" class="button">Try a workshop</a>
        </div>
    </div>

    <div class="navigation-tabs">
        <div class="navigation-tab" onclick="openPage('overview2.php')">Overview</div>
        <div class="navigation-tab" onclick="openPage('features2.php')">Features</div>
        <div class="navigation-tab" onclick="openPage('price.php')">Pricing</div>
        <div class="navigation-tab" onclick="openPage('faq2.php')">FAQ</div>
        <!-- <div class="navigation-tab" onclick="openPage('product_tour.html')">Product Tour</div> -->
    </div>

    <div class="ani-par">
        <h1>Can I create chatbots and voice bots with Oracle Digital Assistant?</h1>
        <p>Yes, Oracle Digital Assistant provides a complete platform for delivering conversation experiences with chat and voice interfaces with advanced natural language processing that surpasses simple chatbots.</p>
        <h1>Can Oracle Digital Assistant be used to help my customers and my employees?</h1>
        <p>Yes, Oracle Digital Assistant provides a single platform from which you can create assistants that support all your users, both inside and outside your organization.</p>
        <h1>Does Oracle Digital Assistant support multiple languages?</h1>
        <p>Yes, Oracle Digital Assistant’s advanced natural language understanding incorporates zero-shot learning and classification for multiple languages.</p>

        <h1>Can Oracle Digital Assistant connect to my back-end applications?</h1>
        <p>Yes, Oracle Digital Assistant enables you to simply and securely connect to any applications and data sources via simple REST services or through Oracle Integration Cloud.</p>
        <h1>Can I create chatbots for social and collaboration channels, such as WhatsApp and Microsoft Teams?</h1>
        <p>Yes, Oracle Digital Assistant has support for all the most popular channels and webhooks.</p>
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
    </script>
      <!-------------footer include-->
      <?php include("footer.php"); ?>

      </body>
      </html>