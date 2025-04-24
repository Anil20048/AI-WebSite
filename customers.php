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
    .hero{
        background: url(../image/hero.avif) no-repeat center ;
        background-size: cover;
    }
    
    </style>
    <!-- Hero Section -->
    <div class="hero">
        <div class="content-14">
            <h1>Oracle Customer Successes</h1>
            <p>Organizations trust Oracle for innovation, user-friendly solutions, and superior results. Its technology enhances efficiency, scalability, and performance across industries. With advanced cloud, AI, and data management tools, Oracle empowers businesses to optimize operations, drive growth, and stay competitive in a rapidly evolving digital landscape.</p>
        </div>
    </div>

    <div class="stats">
    <div class="stat-box">
        <h2>430K+</h2>
        <p>customers</p>
    </div>
    <div class="stat-box">
        <h2>30K+</h2>
        <p>customer reviews</p>
    </div>
    <div class="stat-box">
        <h2>300K+</h2>
        <p>cloud community members</p>
    </div>
    <div class="stat-box">
        <h2>85K+</h2>
        <p>customer references</p>
    </div>
</div>

    <!-- banner -->
    <div class="banner-1">
        <h2>Learn about our latest customer successes.</h2>
        <a href="read1.php">View our customer highlights</a>
    </div>

    <!-- search -->
    <div class="container-lo">

        <!-- Sidebar Filters -->
        <div class="-a">
            <input type="text" class="search-bar1" id="searchInput" placeholder="🔍 Search">
            <div class="filter-option" onclick="filterCards('Healthcare')">Region</div>
            <div class="filter-option" onclick="filterCards('Technology')">Industry</div>
            <div class="filter-option" onclick="filterCards('Real Estate')">Products</div>
            <div class="filter-option" onclick="filterCards('Pharma')">Use Case</div>
        </div>

        <!-- Card Grid -->
        <div class="card-container1" id="cardContainer">
            <div class="card2" data-category="Healthcare">
                <img src="../image/l1.svg" alt="Logo" class="logo3">
                <p>The Royal Flying Doctor Service (RFDS) enhances emergency healthcare by leveraging Oracle Autonomous Database for a robust IT architecture. This system ensures real-time data access, improved patient care, and operational efficiency. With automation, security, and scalability, RFDS streamlines medical services, supporting remote communities with reliable, life-saving digital infrastructure.</p>
            </div>
            <div class="card2" data-category="Healthcare">
                <img src="../image/loge1.svg" alt="Logo" class="logo3">
                <p>Umm Al-Qura University (UQU) is a prestigious public university in Mecca, Saudi Arabia, founded in 1949. It specializes in Islamic studies, engineering, medicine, and other fields. UQU plays a key role in research, education, and serving pilgrims. It has multiple campuses and a diverse student body from around the world.</p>
            </div>
            <div class="card2" data-category="Healthcare">
                <img src="../image/lo6.svg" alt="Logo" class="logo3">
                <p>The Vitamin Shoppe boosts customer engagement using Oracle Responsys for personalized marketing emails. With data-driven insights, it delivers targeted promotions, recommendations, and re-engagement campaigns. Automation and segmentation enhance customer interactions, increasing retention and sales. This strategic approach strengthens brand loyalty while optimizing email marketing efficiency for better business outcomes.</p>
            </div>
            <div class="card2" data-category="Healthcare">
                <img src="../image/lo7.svg" alt="Logo" class="logo3">
          <p>​Barwon Health, established in 1998 through the amalgamation of several health services, is one of Australia's largest regional healthcare providers. Based in Geelong, Victoria, it offers a comprehensive range of services, including acute care at University Hospital Geelong, rehabilitation at the McKellar Centre, aged care, mental health, and community health services across multiple sites. Barwon Health serves the Barwon South West region, providing care to a population of up to 500,000 people.</p>
            </div>
            <div class="card2" data-category="Healthcare">
                <img src="../image/lo8.svg" alt="Logo" class="logo3">
                <p>e& strengthens its business security with Oracle Identity and Access Management, ensuring robust access control, compliance, and data protection. The solution enhances identity governance, automates user authentication, and mitigates cyber threats. By streamlining security operations, e& safeguards critical assets while enabling seamless and secure digital experiences for its users.</p>
            </div>
            <div class="card2" data-category="Healthcare">
                <img src="../image/lo9.svg" alt="Logo" class="logo3">
                <p>Northwell Health leverages Oracle Cloud HCM and AI to enhance workforce management and employee experience. The platform streamlines HR processes, automates tasks, and provides data-driven insights for better decision-making. With AI-powered tools, Northwell optimizes talent management, boosts engagement, and ensures efficient operations, supporting its healthcare professionals effectively.</p>
            </div>
            <div class="card2" data-category="Healthcare">
                <img src="../image/lo50.svg" alt="Logo" class="logo3">
                <p>The Bukhatir Group is one of the most diversified business houses in the United Arab Emirates. Its main interests straddle construction, education, information technology, real estate, shopping, commercial and retail development, sports and leisure, and services</p>
               
            </div>
            <div class="card2" data-category="Healthcare">
                <img src="../image/lo11.svg" alt="Logo" class="logo3">
                <p>Techsol Life Sciences is a global provider of technology-driven solutions for the pharmaceutical and life sciences industries. They specialize in offering regulatory compliance services, pharmacovigilance, clinical data management, and technology platforms to support drug development and ensure patient safety.</p>
            
            </div>
            <div class="card2" data-category="Healthcare">
                <img src="../image/lo12.svg" alt="Logo" class="logo3">
                <p>Acciona, S.A. is a Spanish multinational conglomerate specializing in infrastructure development and renewable energy. Founded in 1997 through the merger of Entrecanales y Távora and Cubiertas y MZOV, its headquarters are in Alcobendas, Spain. Acciona operates globally, employing around 30,000 professionals across 30 countries.</p>
                
            </div>
            <div class="card2" data-category="Healthcare">
                <img src="../image/lo13.svg" alt="Logo" class="logo3">
                <p>Saft's I-Sight AI is an advanced analytics platform designed to optimize the performance and lifespan of energy storage systems. It utilizes artificial intelligence to monitor, predict, and enhance battery operations, ensuring efficient energy management and reliability for various applications.</p>
               
            </div>
            <div class="card2" data-category="Healthcare">
                <img src="../image/lo14.svg" alt="Logo" class="logo3">
                <p>Brain4Data is a German company specializing in Augmented Intelligence (AI) and Robotic Process Automation (RPA). Their digital assistant, "Fred," streamlines workflows by integrating information from various sources, providing timely recommendations, and reducing communication overhead. Fred has been shown to handle 80% of end-user requests within months of implementation.</p>
               
               
            </div>
            <div class="card2" data-category="Healthcare">
                <img src="../image/lo15.svg" alt="Logo" class="logo3">
                <p>​CHIeru Co., Ltd. is a Japanese company specializing in ICT solutions for education. They provide software, systems, and digital teaching materials to schools and universities, supporting classroom teaching with technology. Their products are used in over 60% of Japanese schools and in 20 other countries.</p>
               
                
            </div>
            <div class="card2" data-category="Healthcare">
                <img src="../image/lo16.svg" alt="Logo" class="logo3">
                <p>Torchy's Tacos is a popular American taco chain known for its bold flavors and unique, chef-inspired tacos. Founded in Austin, Texas, in 2006, it has expanded across multiple states. Their menu features creative tacos, queso, and margaritas, all made with fresh ingredients and a fun, rebellious attitude.</p>
                
            </div>
            <div class="card2" data-category="Healthcare">
                <img src="../image/17.svg" alt="Logo" class="logo3">
                <p>​The Mosaic Company, a Fortune 500 firm based in Tampa, Florida, is the world's leading integrated producer of concentrated phosphate and potash fertilizers. With operations in over 40 countries, including India, Mosaic provides essential crop nutrients to support global agriculture and enhance food production</p>
               
            </div>
            <div class="card2" data-category="Healthcare">
                <img src="../image/lo18.svg" alt="Logo" class="logo3">
                <p>Liantis is a Belgian human resources services group offering comprehensive support to entrepreneurs and businesses. Their services include assistance with business startups, social security contributions, payroll administration, insurance, and health and safety policies. Liantis serves approximately 220,000 self-employed individuals and 67,500 employers, providing a one-stop shop for HR needs</p>
               
              
            </div>
            <!-- <fgh></fgh> -->


            <div class="card2" data-category="Technology">
                <img src="../image/lo19.svg" alt="Logo" class="logo3">
                <p>Nokia is a Finnish multinational company specializing in telecommunications, consumer electronics, and networking solutions. Founded in 1865, it played a key role in mobile phone development and now focuses on 5G, cloud services, and digital infrastructure. Nokia continues to innovate in connectivity, powering global communication networks and digital transformation</p>
                
            </div>
            <div class="card2" data-category="Technology">
                <img src="../image/lo20.svg" alt="Logo" class="logo3">
                <p>Kerzner International, founded in 1993 and headquartered in Dubai, is a leading global developer and operator of luxury resorts and residences. Their renowned brands include Atlantis, One&Only, SIRO, and Rare Finds, each offering unique, immersive experiences. Kerzner is acclaimed for its innovative, destination-defining hospitality concepts. </p>
                
            </div>
            <div class="card2" data-category="Technology">
                <img src="../image/lo21.svg" alt="Logo" class="logo3"> 
                <p>Emerson is a global technology and engineering company specializing in automation solutions and commercial & residential systems. Founded in 1890 and headquartered in St. Louis, Missouri, it provides innovative technologies for industries like manufacturing, energy, and healthcare. Emerson helps businesses optimize performance, improve efficiency, and drive sustainability worldwide.</p>
            </div>

            <div class="card2" data-category="Technology">
                <img src="../image/lo22.svg" alt="Logo" class="logo3">
                <p>A network is a system of interconnected devices, computers, or entities that communicate and share resources. Networks can be wired or wireless, spanning from small local areas (LAN) to global connections (WAN, internet). They enable data exchange, collaboration, and communication, playing a vital role in modern technology and digital infrastructure.</p>
               
            </div>

            <div class="card2" data-category="Technology">
                <img src="../image/lo23.svg" alt="Logo" class="logo3">
                <p>Deutsche Bank is a leading global investment bank and financial services company headquartered in Frankfurt, Germany. Founded in 1870, it offers banking, asset management, and corporate finance solutions. With a strong presence in Europe, the Americas, and Asia, Deutsche Bank serves individuals, businesses, and institutions worldwide.</p>
            </div>

            <div class="card2" data-category="Technology">
                <img src="../image/lo24.svg" alt="Logo" class="logo3">
                <p>Lexington, Massachusetts: Famous as the site of the first shots of the American Revolutionary War in 1775, it's rich in colonial history and landmarks like the Lexington Battle Green..</p>
            </div>

            <div class="card2" data-category="Technology">
                <img src="../image/lo25.svg" alt="Logo" class="logo3">
                <p>Civil nuclear refers to the peaceful use of nuclear energy for power generation, medical applications, and scientific research. It includes nuclear power plants, radiation therapy, and isotope production. Governed by international regulations, civil nuclear programs aim to provide clean energy while ensuring safety, security, and non-proliferation of nuclear materials.</p>
            </div>

            <div class="card2" data-category="Technology">
                <img src="../image/lo26.svg" alt="Logo" class="logo3">
                <p>Republic Services is a leading American waste disposal and recycling company. Headquartered in Phoenix, Arizona, it provides non-hazardous waste collection, recycling, and landfill services across the U.S. With a focus on sustainability, Republic Services aims to reduce landfill waste, promote recycling, and support environmental responsibility in waste management</p>
            </div>
            <div class="card2" data-category="Technology">
                <img src="../image/lo27.svg" alt="Logo" class="logo3">
                <p>kW (kilowatt) is a unit of power equal to 1,000 watts. It measures the rate of energy consumption or production. Commonly used in electricity and engineering, kW is essential for calculating power usage in homes, industries, and vehicles, including electric cars and renewable energy systems like solar panels.</p>
            </div>
            <div class="card2" data-category="Real Estate">
                <img src="../image/lo28.svg" alt="Logo" class="logo3">
                <p>​Biofy Technologies, founded in 2024 and headquartered in Uberlândia, Brazil, specializes in developing AI-driven solutions to combat antibiotic resistance. By integrating advanced genetic sequencing with Oracle Cloud Infrastructure's generative AI, Biofy has reduced diagnostic times from five days to under four hours, enhancing patient care efficiency. The company offers a comprehensive range of services, including software, hardware, and firmware development, as well as business transformation consulting. Strategic partnerships with Oracle and NVIDIA bolster Biofy's commitment to technological innovation</p>
            </div>
            <div class="card2" data-category="Real Estate">
                <img src="../image/lo29.svg" alt="Logo" class="logo3">
                <p>​NET Power Inc., founded in 2010 and headquartered in Durham, North Carolina, is a clean energy technology company. It has developed the proprietary NET Power Cycle, an innovative process that generates electricity from natural gas while capturing nearly all emissions, including carbon dioxide. This technology aims to provide low-cost, reliable, and environmentally friendly power solutions. NET Power is publicly traded on the NYSE under the ticker symbol NPWR. </p>
            </div>
            <div class="card2" data-category="Real Estate">
                <img src="../image/lo30.svg" alt="Logo" class="logo3">
                <p>Al Babtain Group, established in 1948 in Kuwait, is a diversified conglomerate operating across automotive, information technology, investment, industrial, and finance sectors. It holds licensing rights for leading global brands and emphasizes customer satisfaction and quality service. With over 70 years of experience, the group continues to expand its regional presence. </p>
            </div>
            <div class="card2" data-category="Real Estate">
                <img src="../image/lo31.svg" alt="Logo" class="logo3">
                <h3>Leeters</h3>
                <p>CPS (Cyber-Physical Systems) are integrated systems that combine physical processes with computational control and networking. They are used in smart grids, autonomous vehicles, industrial automation, and healthcare. CPS enables real-time monitoring, data exchange, and automation, improving efficiency and safety in various industries through the seamless interaction of digital and physical components.</p> 
            </div>
            <div class="card2" data-category="Real Estate">
                <img src="../image/lo32.svg" alt="Logo" class="logo3">
                <p>Unilever is a British-Dutch multinational company specializing in consumer goods, including food, beverages, cleaning products, and personal care. Founded in 1929, it owns brands like Dove, Lipton, and Knorr. With a focus on sustainability, Unilever operates in over 190 countries, serving billions of customers worldwide with everyday essential products.</p>
            </div>
            <div class="card2" data-category="Real Estate">
                <img src="../image/lo33.svg" alt="Logo" class="logo3">
                <p>​Industrial Scientific Corporation, founded in 1985 and headquartered in Pittsburgh, Pennsylvania, is a global leader in designing and manufacturing gas detection products and safety solutions. Their offerings include portable gas detectors, area monitoring systems, and cloud-connected software like the iNet® platform, which provides real-time site analytics and worker status updates. Serving industries such as utilities, chemical production, and oil and gas, Industrial Scientific is dedicated to eliminating death on the job by 2050. In 2017, the company became a subsidiary of Fortive Corporation.</p>
            </div>
            <div class="card2" data-category="Real Estate">
                <img src="../image/lo34.svg" alt="Logo" class="logo3">
              
                <p>Bhamra Company Limited: A UK-based private limited company, incorporated in 2018, specializing in the construction of commercial and domestic buildings.</p>
               
            </div>
            <div class="card2" data-category="Real Estate">
                <img src="../image/lo35.svg" alt="Logo" class="logo3">
                <p>​Native Instruments is a German company specializing in software and hardware for computer-based audio production and DJing. Founded in 1996 and headquartered in Berlin, it offers products like the Komplete bundle, Maschine, and Traktor. In June 2023, iZotope, Plugin Alliance, and Brainworx joined Native Instruments to develop integrated solutions for various creative tasks and skill levels</p>  
            </div>
            <div class="card2" data-category="Real Estate">
                <img src="../image/lo37.svg" alt="Logo" class="logo3">
                <p>​Canada's first hospital, the Hôtel-Dieu de Québec, was established in 1639 by three Augustinian nuns from France: Marie Guenet de Saint-Ignace, Anne Le Cointre de Saint-Bernard, and Marie Forestier de Saint-Bonaventure-de-Jésus. Funded by the Duchesse d'Aiguillon, it was the first such facility in Canada and in North America north of Mexico. This hospital continues to operate today, maintaining its legacy of care and innovation</p>
            </div>
            <div class="card2" data-category="Pharma">
                <img src="../image/lo38.svg" alt="Logo" class="logo3">
                <p>Dolphin Fitness Limited: An e-commerce platform based in Shoreham-by-Sea, UK, specializing in nutrition and health products. Founded in 2001, it serves over 50,000 UK customers monthly. </p>
            </div>
            <div class="card2" data-category="Pharma">
                <img src="../image/lo39.svg" alt="Logo" class="logo3">
                <p>​Henry Community Health (HCH) is a non-profit health system based in New Castle, Indiana, offering a comprehensive range of services, including primary care, surgery, orthopedics, and cardiology. Established in 1930, HCH operates a 48-bed acute care hospital and has been nationally recognized for patient safety and outstanding care..</p>
            </div>
            <div class="card2" data-category="Pharma">
                <img src="../image/loeoe.svg" alt="Logo" class="logo3">
                <p>​The term "'Merican" is an informal contraction of "American," often used humorously or sarcastically to convey patriotic sentiment or to mimic certain regional accents. It reflects a colloquial pronunciation where the initial unstressed syllable is omitted.</p>
            </div>
            <div class="card2" data-category="Pharma">
                <img src="../image/lo41.svg" alt="Logo" class="logo3">
              
                <p>Rexel is a French multinational company specializing in the distribution of electrical, heating, lighting, and plumbing equipment, as well as renewable energy solutions. Founded in 1967 and headquartered in Paris, Rexel operates approximately 1,950 branches across 19 countries, employing over 27,000 people. The company serves industrial, commercial, and residential markets, offering products from leading brands like 3M and ABB. Rexel is publicly traded on the Paris Stock Exchange.</p>
            </div>
            <div class="card2" data-category="Pharma">
                <img src="../image/lo42.svg" alt="Logo" class="logo3">
             
                <p>​The Estonian IT Centre (RIT), established on December 1, 2021, is a government agency under the Ministry of Justice and Digital Affairs. It centralizes ICT services for Estonia's public sector, offering computer workstation management, server infrastructure, and additional services. RIT also manages the Estonian Government Cloud, providing secure and cost-effective cloud solutions to state institutions. By consolidating IT services, RIT enhances efficiency, security, and innovation across government operations.</p>
                
            </div>
            <div class="card2" data-category="Pharma">
                <img src="../image/lo43.svg" alt="Logo" class="logo3">
                <p>American University (AU) is a private research university in Washington, D.C., founded in 1893. Known for its strong programs in international relations, law, business, and public affairs, AU offers diverse undergraduate and graduate degrees. It emphasizes global engagement, leadership, and service, attracting students from across the world.</p>
            </div>
            <div class="card2" data-category="Pharma">
                <img src="../image/lo44.svg" alt="Logo" class="logo3">
                <p>NRI (Non-Resident Indian) refers to an Indian citizen living abroad for work, education, or residency purposes. NRIs maintain Indian citizenship but are subject to different tax and investment regulations. They contribute significantly to India's economy through remittances and often retain strong cultural and financial ties with their home country.</p>  
            </div>
            <div class="card2" data-category="Pharma">
                <img src="../image/lo45.svg" alt="Logo" class="logo3">
               
                <p>The surname "Cahill" is of Irish origin, derived from the Gaelic "Ó Cathail" or "Mac Cathail," meaning "descendant" or "son of Cathal." The personal name "Cathal" translates to "powerful in battle.Historically, the Cahill family name has been associated with several regions in Ireland, notably Counties Galway, Kerry, and Tipperary. The principal sept of the O'Cahills was located in County Galway, with other distinct septs in Kerry and Tipperary. ​</p>
                
            </div>
            <div class="card2" data-category="Pharma">
                <img src="../image/lo46.svg" alt="Logo" class="logo3">
                <p>Covenant Health (Tennessee): Headquartered in Knoxville, Tennessee, this community-owned integrated healthcare delivery system operates multiple hospitals and clinics, providing comprehensive services to East Tennessee.</p>
            </div>
            <div class="card2" data-category="Pharma">
                <img src="../image/lo47.svg" alt="Logo" class="logo3">
                <p>NRL (National Rugby League) is Australia’s premier professional rugby league competition, established in 1998. Featuring 17 teams from Australia and New Zealand, it is known for its intense matches and passionate fan base. The league culminates in the NRL Grand Final, one of the country’s biggest sporting events.</p>
            </div>
            <div class="card2" data-category="Pharma">
                <img src="../image/lo48.svg" alt="Logo" class="logo3">
                <p>​The surname "Thuresson" is of Swedish origin, traditionally signifying "son of Thure." Predominantly found in Sweden, it is most prevalent in Skåne, Västra Götaland, and Stockholm counties. Notable individuals with this surname include Svante Thuresson, a celebrated Swedish jazz musician who represented Sweden in the 1966 Eurovision Song Contest, and Andreas Thuresson, a professional ice hockey player with experience in the NHL and European leagues</p>   
            </div>
            <div class="card2" data-category="Pharma">
                <img src="../image/lo49.svg" alt="Logo" class="logo3">
                <p>​Barwon Health, established in 1998 through the amalgamation of several health services, is one of Australia's largest regional healthcare providers. Based in Geelong, Victoria, it offers a comprehensive range of services, including acute care at University Hospital Geelong, rehabilitation at the McKellar Centre, aged care, mental health, and community health services across multiple sites. Barwon Health serves the Barwon South West region, providing care to a population of up to 500,000 people</p>  
            </div>
        </div>
    </div>
    <script>
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".stat-box h2");
    let hasAnimated = false;

    function animateCounters() {
        counters.forEach(counter => {
            let originalText = counter.innerText.trim();
            let suffix = originalText.match(/[^\d]/g)?.join('') || '';
            let target = parseInt(originalText.replace(/[^\d]/g, ''));

            let count = 0;
            let increment = Math.ceil(target / 100);

            const update = () => {
                count += increment;
                if (count < target) {
                    counter.innerText = count.toLocaleString() + suffix;
                    requestAnimationFrame(update);
                } else {
                    counter.innerText = target.toLocaleString() + suffix;
                }
            };

            update();
        });
    }

    // Optional: Trigger only when stats section is in view
    function isInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top <= window.innerHeight &&
            rect.bottom >= 0
        );
    }

    function handleScroll() {
        const statsSection = document.querySelector(".stats");
        if (!hasAnimated && isInViewport(statsSection)) {
            animateCounters();
            hasAnimated = true;
        }
    }

    window.addEventListener("scroll", handleScroll);
    handleScroll(); // Check on load
});
</script>



    <!-------------footer include-->
    <?php include("footer.php"); ?>

</body>

</html>