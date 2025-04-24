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
        .background-graphic {
            width: 100%;
            /* height: auto; */
            display: flex;
            background-color: #FDF3E4;
            /* align-items: center; */
        }
        
        .wrapper {
            width: 100%;
            padding: 20px;
            justify-content: left;
            text-align: left;
            padding-left: 50px;
        }
        
        .heading {
            font-size: 32px;
            font-weight: bold;
            margin-top: 10px;
            text-align: left;
        }
        
        .line {
            width: 50px;
            height: 4px;
            background-color: #daba79;
            margin-top: 5px;
            text-align: left;
        }
        
        .text {
            font-size: 16px;
            margin-top: 20px;
            color: #333;
        }
        
        .cta-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border-radius: 5px;
            text-align: left;    
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
        .currency {
            width: 100%;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #f4f4f4;
        }
        
        select,
        button {
            margin: 10px;
            padding: 10px;
            font-size: 16px;
        }
        
        #result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
        
        .pricing-container {
            max-width: 1200px;
            margin: auto;
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .pricing-header {
            background-color: #2d4a33;
            color: white;
            padding: 15px;
            font-size: 22px;
            font-weight: bold;
            border-radius: 8px 8px 0 0;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        
        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        
        th {
            background-color: #f5f5f5;
        }
       
        .sales-contact {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: white;
            padding: 10px 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        
        .sales-contact img {
            width: 20px;
            margin-right: 5px;
        }
        /* Responsive Design */

/* Tablet (≤1024px) */
@media screen and (max-width: 1024px) {
    .pricing-container {
        padding: 30px;
    }

    .pricing-header {
        font-size: 20px;
    }

    table {
        font-size: 14px;
    }

    th,
    td {
        padding: 8px;
    }
}

/* Mobile (≤768px) */
@media screen and (max-width: 768px) {
    .currency {
        padding: 15px;
    }

    select,
    button {
        font-size: 14px;
        width: 90%;
    }

    .pricing-container {
        padding: 20px;
    }

    .pricing-header {
        font-size: 18px;
        padding: 12px;
    }

    table {
        font-size: 12px;
    }

    th,
    td {
        padding: 6px;
    }

    .sales-contact {
        bottom: 10px;
        right: 10px;
        padding: 8px 12px;
        font-size: 14px;
    }

    .sales-contact img {
        width: 16px;
    }
}
        .pricing-table-container {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 30px;
        width: 92%;
            padding: 5px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .pricing-table-header {
            background-color: #2f5435;
            color: white;
            padding: 15px;
            font-size: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-weight: bold;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f9f9f9;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        .unit-price {
            font-weight: bold;
            color: #2f5435;
        }
        /* .calculator-container */
        
        .calculator-container {
            width: 100%;
            background: rgb(255, 255, 255);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            padding: 20px;
        }
        
        .calculator-header {
            background-color: #2f5435;
            color: white;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .currency-dropdown {
            padding: 8px;
            font-size: 14px;
        }
        
        .calculator-section-title {
            font-size: 18px;
            font-weight: bold;
            margin: 15px 0;
        }
        
        .calculator-input-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        
        .calculator-input-group label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
        }
        
        .calculator-input-group select,
        .calculator-input-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        .calculator-result {
            font-size: 20px;
            font-weight: bold;
            color: #2f5435;
            margin-top: 20px;
        }
        
        .pricing-disclaimer-container {
            position: relative;
            font-family: Arial, sans-serif;
            font-size: 14px;
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            line-height: 1.6;
            margin: 20px 0;
        }
        
        .pricing-disclaimer-button {
            position: absolute;
            top: -10px;
            right: 20px;
            background-color: #0073e6;
            color: rgb(248, 248, 248);
            border: none;
            padding: 4px 5px;
            cursor: pointer;
            border-radius: 5px;
        }
        
        .pricing-disclaimer-button:hover {
            background-color: #005bb5;
        }
        
        .pricing-disclaimer a {
            color: #23468e;
            text-decoration: none;
        }
        
        .pricing-disclaimer a:hover {
            text-decoration: underline;
        }
        
        .pricing-disclaimer em {
            font-style: italic;
            font-size: 13px;
            display: block;
            margin-top: 10px;
        }
        
        .pricing-disclaimer p {
            margin-top: 20px;
            margin-bottom: 10px;
        }
        
        .pricing-disclaimer strong {
            font-weight: bold;
        }
        /* Responsive Design */

/* Tablet (≤1024px) */
@media screen and (max-width: 1024px) {
    .pricing-disclaimer-container {
        padding: 15px;
    }

    .pricing-disclaimer-button {
        top: -8px;
        right: 15px;
        font-size: 11px;
    }

    .pricing-disclaimer {
        font-size: 13px;
    }
}

/* Mobile (≤768px) */
@media screen and (max-width: 768px) {
    .pricing-disclaimer-container {
        padding: 12px;
        margin: 15px 0;
    }

    .pricing-disclaimer-button {
        top: -8px;
        right: 12px;
        font-size: 10px;
        padding: 3px 6px;
    }

    .pricing-disclaimer {
        font-size: 12px;
        line-height: 1.4;
    }

    .pricing-disclaimer em {
        font-size: 12px;
    }
}
    </style>

    <div class="background-graphic">
        <div class="wrapper">
            <div class="heading">AI Vision Pricing</div>
            <div class="line"></div>
            <a href="#" class="cta-button">Speak to an AI expert</a>
        </div>
        <!-- <div class="img"> <img src="../image/bga.avif" alt=""></div> -->
    </div>
    <!-- tab -->

    <div class="navigation-tabs">
        <div class="navigation-tab" onclick="openPage('overviewv1.php')">Overview</div>
        <div class="navigation-tab" onclick="openPage('pricingv1.php')">Features</div>
        <div class="navigation-tab" onclick="openPage('faqv1.php')">Pricing</div>
    </div>


    <div class="currency">
        <div class="currency-first">
            <h2>Currency Converter (to INR)</h2>
            <select id="countrySelect" onchange="convertCurrency()"></select>
            <p id="result"></p>


            <div class="pricing-container">
                <div class="pricing-header">OCI Generative AI</div>
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Comparison Price (/vCPU)</th>
                            <th>Unit Price</th>
                            <th>Unit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Oracle Cloud Infrastructure Generative AI - Large Cohere - 10,000 Transactions</td>
                            <td>—</td>
                            <td>R$0,<span id="unitprice"></span></td>
                            <td>10,000 Transactions</td>
                        </tr>
                        <tr>
                            <td>Oracle Cloud Infrastructure Generative AI - Small Cohere - 10,000 Transactions</td>
                            <td>—</td>
                            <td>R$0,0049 <span id="uniteprice2"></span></td>
                            <td>10,000 Transactions</td>
                        </tr>
                        <tr>
                            <td>Oracle Cloud Infrastructure Generative AI - Embed Cohere - 10,000 Transactions</td>
                            <td>—</td>
                            <td>R$0,005<span id="uniteprice3"></span></td>
                            <td>10,000 Transactions</td>
                        </tr>
                        <tr>
                            <td>Oracle Cloud Infrastructure Generative AI - Large Meta</td>
                            <td>—</td>
                            <td>R$0,009<span id="uniteprice4"></span></td>
                            <td>10,000 Transactions</td>
                        </tr>
                        <tr>
                            <td>Oracle Cloud Infrastructure Generative AI - Meta Llama 3.1 405B</td>
                            <td>—</td>
                            <td>R$0,147<span id="uniteprice5"></span></td>
                            <td>10,000 Transactions</td>
                        </tr>
                        <tr>
                            <td>Oracle Cloud Infrastructure Generative AI - Large Cohere - Dedicated - AI Unit Per Hour</td>
                            <td>—</td>
                            <td>R$132<span id="uniteprice6"></span></td>
                            <td>Per Hour</td>
                        </tr>
                        <tr>
                            <td>Oracle Cloud Infrastructure Generative AI- Large Meta - Dedicated</td>
                            <td>—</td>
                            <td>R$66,<span id="uniteprice7"></span></td>
                            <td>Per Hour</td>
                        </tr>
                        <tr>
                            <td>Oracle Cloud Infrastructure Generative AI - Embed Cohere - Dedicated - AI Unit Per Hour</td>
                            <td>—</td>
                            <td>R$35<span id="uniteprice8"></span></td>
                            <!-- <td>Per Hour</td> -->
                        </tr>
                        <tr>
                            <td>Oracle Cloud Infrastructure Generative AI - Large Cohere - Dedicated - AI Unit Per Hour</td>
                            <td>—</td>
                            <td>R$60<span id="uniteprice9"></span></td>
                            <!-- <td>Per Hour</td> -->
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        <div class="pricing-table-container">
            <div class="pricing-table-header">OCI Generative AI Agents</div>
            <table>
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Comparison Price (/vCPU)</th>
                        <th>Unit Price</th>
                        <th>Unit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Oracle Cloud Infrastructure Generative AI Agents - Retrieval-Augmented Generation (RAG)</td>
                        <td>—</td>
                        <td>R$0,0<span id="uniteprice10"></span></td>
                        <td>10,000 Transactions</td>
                    </tr>
                    <tr>
                        <td>Oracle Cloud Infrastructure Generative AI Agents - Knowledge Base Storage</td>
                        <td>—</td>
                        <td>R$0,0<span id="uniteprice11"></span></td>
                        <td>Gigabyte Storage Per Hour</td>
                    </tr>
                    <tr>
                        <td>Oracle Cloud Infrastructure Generative AI Agents - Data Ingestion</td>
                        <td>—</td>
                        <td>R$0,00<span id="uniteprice12"></span></td>
                        <td>10,000 Transactions</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="calculator-container">
            <div class="calculator-header">
                OCI Generative AI
                <div>
                    <select id="currency" class="currency-dropdown">
                    <option value="INR">₹ - Indian Rupee</option>
                    <option value="USD">$ - US Dollar</option>
                    <option value="EUR">€ - Euro</option>
                </select> Estimated Monthly Cost: <span id="cost">₹0.00</span>
                </div>
            </div>

            <div class="calculator-section-title">OCI Generative AI</div>

            <div class="calculator-input-group">
                <label for="serviceMetric">Service Metric</label>
                <select id="serviceMetric">
                <option value="onDemand">On Demand</option>
            </select>
            </div>

            <div class="calculator-input-group">
                <label for="model">Model</label>
                <select id="model">
                <option value="cohere">Cohere Command R+</option>
            </select>
            </div>

            <div class="calculator-input-group">
                <label for="requests">Expected number of requests per month</label>
                <input type="number" id="requests" value="1" min="1">
            </div>

            <div class="calculator-input-group">
                <label for="promptLength">Prompt length (in characters)</label>
                <input type="number" id="promptLength" value="1" min="1">
            </div>

            <div class="calculator-input-group">
                <label for="responseLength">Model Response length (in characters)</label>
                <input type="number" id="responseLength" value="1" min="1">
            </div>

            <div class="calculator-result">Estimated Monthly Cost: <span id="finalCost">₹0.00</span></div>
        </div>


    <div class="pricing-disclaimer-container">
      
        <div class="pricing-disclaimer">
            <p><strong>Disclaimer:</strong> The pricing estimates displayed are monthly amounts and are based on your selected Cloud Services, configurations and dependent services. Monthly costs are billed on actual usage, prepayment is not required. Annual
                flex is a fixed commitment and is available from your Sales Representative. Your actual price at checkout may differ from this estimate. <a href="https://www.oracle.com/legal/privacy/" target="_blank">Complete pricing information here.</a></p>

            <p>To find out where a specific Oracle Cloud service is available refer to <a href="http://localhost/ai/home/Learn_more.php">Data Regions for Platform and Infrastructure Services</a>.</p>

            <p>The right to access, use, modify, reproduce, release, perform, display, disclose or dispose of information revealed or submitted herein is restricted in accordance with or subject to <a href="https://www.oracle.com/legal/privacy/" target="_blank">Oracle Legal Notices</a>.</p>

            <p>Common cloud industry practice is to define compute instances based on the number of virtual CPUs (vCPUs) they include. Each vCPU provides the capacity for one thread of execution. A vCPU does not provide a whole physical compute core, it’s
                part of a core. In contrast, Oracle’s x86 compute shapes use OCPUs which equate to physical CPU cores, each of which provides for two threads.</p>

            <p>Total monthly cost for a product with tier pricing is calculated based on aggregated quantity for given product across entire user estimate.</p>

          

            <p><strong>Data Build Id:</strong> 37 &nbsp;&nbsp; <strong>Build Date:</strong> 2025-02-06T10:37:39Z</p>
            <p><strong>Source Build Id:</strong> 39 &nbsp;&nbsp; <strong>Build Date:</strong> 2025-02-11T15:48:27Z</p>
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

        // tab
        const apiKey = '29e92e64b53a0e78dfb7c3459ade0019';
        const apiUrl = `https://api.exchangeratesapi.io/latest?access_key=${apiKey}`;
        const countryCurrencyMap = {
            "United States": "USD",
            "United Kingdom": "GBP",
            "Eurozone": "EUR",
            "Japan": "JPY",
            "Australia": "AUD",
            "Canada": "CAD",
            "Switzerland": "CHF",
            "China": "CNY",
            "India": "INR",
            "Russia": "RUB"
        };

        const countrySelect = document.getElementById("countrySelect");
        Object.keys(countryCurrencyMap).forEach(country => {
            let option = document.createElement("option");
            option.value = countryCurrencyMap[country];
            option.textContent = `${country} (${countryCurrencyMap[country]})`;
            countrySelect.appendChild(option);
        });

        async function convertCurrency() {
            const selectedCurrency = countrySelect.value;
            const response = await fetch(apiUrl);
            const data = await response.json();
            const anil = document.getElementById("unitprice");

            if (data.rates && data.rates[selectedCurrency] && data.rates["INR"]) {
                const conversionRate = data.rates["INR"] / data.rates[selectedCurrency];
                document.getElementById("result").textContent = `1 ${selectedCurrency} = ${conversionRate.toFixed(2)} INR`;
                document.getElementById("uniteprice2").textContent = `1 ${selectedCurrency} = ${conversionRate.toFixed(2)} INR`;
                document.getElementById("uniteprice3").textContent = `1 ${selectedCurrency} = ${conversionRate.toFixed(2)} INR`;
                document.getElementById("uniteprice4").textContent = `1 ${selectedCurrency} = ${conversionRate.toFixed(2)} INR`;
                document.getElementById("uniteprice5").textContent = `1 ${selectedCurrency} = ${conversionRate.toFixed(2)} INR`;
                document.getElementById("uniteprice6").textContent = `1 ${selectedCurrency} = ${conversionRate.toFixed(2)} INR`;
                document.getElementById("uniteprice7").textContent = `1 ${selectedCurrency} = ${conversionRate.toFixed(2)} INR`;
                document.getElementById("uniteprice8").textContent = `1 ${selectedCurrency} = ${conversionRate.toFixed(2)} INR`;
                document.getElementById("uniteprice9").textContent = `1 ${selectedCurrency} = ${conversionRate.toFixed(2)} INR`;
                document.getElementById("uniteprice10").textContent = `1 ${selectedCurrency} = ${conversionRate.toFixed(2)} INR`;
                document.getElementById("uniteprice11").textContent = `1 ${selectedCurrency} = ${conversionRate.toFixed(2)} INR`;
                document.getElementById("uniteprice12").textContent = `1 ${selectedCurrency} = ${conversionRate.toFixed(2)} INR`;
                anil.innerHTML = `1 ${selectedCurrency} = ${conversionRate.toFixed(2)} INR`;
            } else {
                document.getElementById("result").textContent = "Conversion data not available.";
            }
        }



        function calculateCost() {
            let requests = document.getElementById("requests").value;
            let promptLength = document.getElementById("promptLength").value;
            let responseLength = document.getElementById("responseLength").value;
            let currency = document.getElementById("currency").value;

            // Sample pricing calculation formula (modify as needed)
            let basePrice = 0.0005; // Assume a base price per character
            let estimatedCost = (requests * (parseInt(promptLength) + parseInt(responseLength)) * basePrice);

            // Currency conversion (sample values)
            if (currency === "USD") estimatedCost *= 0.012;
            else if (currency === "EUR") estimatedCost *= 0.011;

            // Formatting output
            let formattedCost = new Intl.NumberFormat("en-IN", {
                style: "currency",
                currency: currency
            }).format(estimatedCost);

            document.getElementById("finalCost").innerText = formattedCost;
            document.getElementById("cost").innerText = formattedCost;
        }

        document.getElementById("requests").addEventListener("input", calculateCost);
        document.getElementById("promptLength").addEventListener("input", calculateCost);
        document.getElementById("responseLength").addEventListener("input", calculateCost);
        document.getElementById("currency").addEventListener("change", calculateCost);

        // Initial calculation
        calculateCost();
    </script>

    <!-------------footer include-->
    <?php include("footer.php"); ?>
</body>

</html>