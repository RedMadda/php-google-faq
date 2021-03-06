<?php
    $main_content = [
        [
            "question" => "How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?",
            "answer" => [
                "The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.",

                "Since this ruling was published on 13 May 2014, we've been working around the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with the public's right to know and distribute information.",

                "If you have a removal request, please fill out this web form. You'll receive an automatic reply confirming that we have received your request. We will then assess your case – please note that this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results – for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organisation, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.",

                "We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe that it's important to respect the Court's judgement and we are working hard to devise a process that complies with the law.",

                "When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal."
            ]
        ],
        [
            "question" => "How does Google protect my privacy and keep my information secure?",
            "answer" => [
                "We know that security and privacy are important to you - and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.",

                "We’re constantly working to ensure strong security, protect your privacy and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We've also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you’re in control.",

                "You can find out more about safety and security online, including how to protect yourself and your family online, at the Google Safety Centre.",

                "Find out more about how we keep your personal information private and safe – and put you in control."
            ]
        ],
        [
            "question" => "Why is my account associated with a country?",
            "answer" => [
                "Your account is associated with a country (or territory) in the Terms of Service so that we ca determine two things:",

                "1. The Google affiliate that provides the services, that processes your information, and that i    responsible for complying with applicable privacy laws. Generally, Google offers its consume    services through either of two companies:
                    a. Google Ireland Limited, if you’re located in the European Economic Area (EU countries plu    Iceland, Liechtenstein, and Norway) or Switzerland
                    b. Google LLC, based in the United States, for the rest of the world
                2. The version of the terms that govern our relationship, which can vary depending on local laws",

                "Keep in mind that Google services are essentially the same, regardless of the affiliate that  provides the services or your country association."
            ]
        ],
        [
            "question" => "Determining the country associated with your account",
            "answer" => [
                "When you create a new account, we associate your account with a country based on where youcreated your Google Account. For accounts at least a year old, we use the country from which youusually access Google services – typically where you’ve spent the most time in the last year.",
                "Frequent travel doesn’t generally affect the country associated with your account. If you move toa new country, it can take about a year for your country association to update.",
                "If the country associated with your account doesn’t correspond to your country of residence, itcould be because of a difference between your country of work and residence, because you’veinstalled a Virtual Private Network (VPN) to mask your IP address, or because you live close to aterritorial border. Contact us if you think that your country association is wrong."
            ]
        ],
        [
            "question" => "How can I remove information about myself from Google’s search results?",
            "answer" => [
                "Google search results are a reflection of the content publicly available on the web. Searchengines can't remove content directly from websites, so removing search results from Googlewouldn't remove the content from the web. If you want to remove something from the web, you shouldcontact the webmaster of the site the content is posted on and ask him or her to make a change.Additionally, if under European data protection law, you would like to request removal of certaininformation about you that appears in Google's search results, please click here. Once the contenthas been removed and Google has noted the update, the information will no longer appear inGoogle's search results. If you have an urgent removal request, you can also visit our help pagefor more information."
            ]
        ],
        [
            "question" => "Are my search queries sent to websites when I click on Google Search results?",
            "answer" => [
                "In some cases, yes. When you click on a search result in Google Search, your web browser may alsosend the Internet address, or URL, of the search results page to the destination web page as theReferrer URL. The URL of the search results page may sometimes contain the search query that youentered. If you are using SSL Search (Google’s encrypted search functionality), under mostcircumstances, your search terms will not be sent as part of the URL in the Referrer URL. Thereare some exceptions to this behaviour, such as if you are using some less popular browsers. Moreinformation on SSL Search can be found here. Search queries or information contained in theReferrer URL may be available via Google Analytics or an application programming interface (API).In addition, advertisers may receive information relating to the exact keywords that triggered anad click."
            ]
        ]
    ];

    // var_dump($main_content);
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Google faq</title>
</head>
<body>
    <header class="mb-3">
        <!-- top header -->
        <div class="top-header d-flex justify-content-between">

            <div class="header-left mx-3">
                <!-- logo -->
                <a href="#" class="d-flex">
                    <img id="goog-logo" class="mt-1" src="img/google_logo.svg" alt="Logo google">
                    <h5 class=" privacy-text grey">Privacy&Terms</h5>
                </a>
            </div>
            <div class="header-right mt-3 mx-3">
                <a href="#">
                    <img id="menu-icon" src="img/icons8-circled-menu-48.png" alt="Menu icon">
                </a> 
                <a href="#">
                    <img id= "profile-pic" class="ms-3" src="img/profile.jpg" alt="Profile pic">
                </a>
            </div>
        </div>
        <!-- /top header -->
        <!-- nav -->
        <div class="container-fluid nav-wrapper">
            <nav class="mx-3">
                <ul class="d-flex list-unstyled">
                    <li class="nav-item me-5">
                        <a class="grey" aria-current="page" href="#">Overview</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="grey" href="#">Privacy Policy</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="grey" href="#">Terms of Service</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="grey" href="#">Tecnologies</a>
                    </li>
                    <li class="nav-item">
                        <a class="active" href="#">FAQ</a>
                    </li>       
                </ul>
            </nav>
        </div>
        <!-- /nav -->
    </header>
    <!-- /header -->

    <!-- beginn main -->
    <main>
        <div class="container d-flex flex-column align-items-center mt-5 pt-5 ">
            <div class="text-wrapper text-start">
                <?php foreach($main_content as $faq){
                    foreach($faq as $key => $value){
                        if($key == "question"){ ?>
                         <!-- stampo la domanda -->
                        <p class="question ">
                            <strong>
                                <?php echo $value; ?>
                            </strong>
                        </p>
                        <?php
                        } elseif($key == "answer"){
                            // stampo risposta
                            foreach($value as $p){ ?>
                                <p>
                                    <?php echo $p; ?>
                                </p>
                            <?php
                        
                        }  
                    }
                }} ?>
            </div>
        </div>
    </main>
    <!-- /main -->

    <!-- footer -->
    <footer>
        <div class="p-2 d-flex justify-content-center" style="background-color: rgba(0, 0, 0, 0.05);">
            <p id = "footer-txt" class="pt-2">
                <span><a href="#">Google</a></span> ·
                <span><a href="#"> About</a></span> ·
                <span><a href="#">GooglePrivacyTerms</a></span> 
            </p> 
        </div>
    </footer>
</body>
</html>