<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NVIDIA</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        
        .nov {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #3a3636;
            position: relative;
        }
        
        .container {
            width: 90%;
            max-width: 900px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
            text-align: center;
            border-radius: 10px;
            transition: opacity 0.4s ease-in-out, transform 0.3s ease-in-out;
        }
        
        .logo-container {
            background-color: rgba(245, 244, 242, .5);
            text-align: center;
        }
        
        .logo {
            width: 536px;
            height: 222px;
            display: block;
            margin: 0 auto;
        }
        
        h1 {
            text-align: left;
            font-size: 28px;
            margin: 10px 0;
            padding-left: 20px;
           
        }
        
        p {
            text-align: left;
            font-size: 18px;
            color: #555;
            padding-left: 20px;
            margin-right: 20px;
        }
        
        .button-container {
            display: flex;
            justify-content: left;
            align-items: self-start;
            margin-top: 15px;
            padding: 20px;
        }
        
        .left-button {
            font-size: 20px;
            padding: 10px 20px;
            background-color: #0e0e0e;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        
        .left-button:hover {
            background-color: #404142;
        }
        
        .cut-button {
            padding: 8px 15px;
            background-color: wheat;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 30%;
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 16px;
            line-height: 1;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        
        .cut-button:hover {
            background-color: darkred;
        }

        /* Hide popup smoothly */
        .hide-popup {
            opacity: 0;
            transform: scale(0.9);
            pointer-events: none;
        }
        /* Responsive Design */

/* Tablets */
@media (max-width: 768px) {
    .container {
        width: 95%;
    }

    h1 {
        font-size: 24px;
        padding-left: 15px;
    }

    p {
        font-size: 16px;
        padding-left: 15px;
        margin-right: 15px;
    }

    .button-container {
        flex-direction: column;
        align-items: flex-start;
        padding: 15px;
    }

    .left-button {
        font-size: 18px;
        padding: 8px 15px;
    }
}

/* Mobile */
@media (max-width: 480px) {
    .container {
        width: 95%;
        padding: 15px;
    }

    .logo {
        width: 100%;
        max-width: 300px;
    }

    h1 {
        font-size: 22px;
        padding-left: 10px;
    }

    p {
        font-size: 14px;
        padding-left: 10px;
        margin-right: 10px;
    }

    .button-container {
        padding: 10px;
    }

    .left-button {
        font-size: 16px;
        padding: 8px 12px;
    }

    .cut-button {
        padding: 6px 12px;
        font-size: 14px;
        top: 5px;
        right: 5px;
    }
}
    </style>
</head>

<body>
    <div class="nov" id="popup">
        <button class="cut-button" onclick="closePopup()">X</button>
        <div class="container">
            <div class="logo-container">
                <img src="../image/14.svg" alt="Logo" class="logo">
            </div>
            <h1>Scaling medical knowledge and creating reliable AI for the health benefit of every person</h1>
            <p>Headquartered in San Francisco, California, Evidium is a health technology startup that has created a referenced AI platform to give healthcare organizations grounded and trustworthy AI. To power its model training, the company leverages GPUs on OCI for its diverse product line.</p>
            <div class="button-container">
                <button class="left-button">
                Learn more</button>
            </div>
        </div>
    </div>

    <script>
        function closePopup() {
            let popup = document.getElementById("popup");
            if (popup) {
                popup.classList.add("hide-popup");
                console.log("Popup closed");
            } else {
                console.log("Popup element not found!");
            }
        }

       
    </script>

</body>

</html>
