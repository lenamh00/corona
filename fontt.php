<?php
require_once "pdo.php";
require_once "funcs.php";
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    -->
    
    <link rel="stylesheet" href="cs/style.css"/>
    <link rel="stylesheet" href="cs/all.min.css"/>
    <link rel="stylesheet" href="csss/bootstrap.min.css"/>
    
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->










</head>
<body>

 

    <body>
        <header class="section home" id="home">
            <div class="top-nav-container">
                <div class="container">
                    <div class="top-nav">
                        <div class="logo">
                            <h1>c<i class="fas fa-virus"></i>vid<span>19</span></h1>
                        </div>
                        <div class="btn-icon icons">
                            <i class="fas fa-bars"></i>
                        </div>
                        <div class="overlay"></div>
                        <div class="close-icon icons">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="overlay-menu">
                            <ul>
                                <li><a href="#home" data-scroll="home">home</a></li>
                                <li><a href="#about" data-scroll="about">about us</a></li>
                                <li><a href="#symptoms" data-scroll="symptoms">symptoms</a></li>
                                <li><a href="#preventation" data-scroll="preventation">prevention</a></li>
                                <li><a href="#faq" data-scroll="faq">faq</a></li>

                                <li><a href="signup.php" data-scroll="login">login</a></li>
                                <li><a href="chatf.php" data-scroll="chat">chat</a></li>
                                <li><a href="#protect"><button class="btn">do & don’t</button></a></li>
                            </ul>
                        </div>
                        <nav>
                            <ul>
                                <li><a href="#home" data-scroll="home">home</a></li>
                                <li><a href="#about" data-scroll="about">about us</a></li>
                                <li><a href="#symptoms" data-scroll="symptoms">symptoms</a></li>
                                <li><a href="#prevention" data-scroll="prevention">prevention</a></li>
                                <li><a href="#faq" data-scroll="faq">faq</a></li>
                                <li><a href="signup.php" data-scroll="login">login</a></li>
                                <li><a href="chatf.php" data-scroll="chat">chat</a></li>
                                <li><a href="#protect"><button class="btn">do & don’t</button></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="icon-top"><a href="#"><i class="fas fa-arrow-up"></i></a></div>
            </div>
        </div>
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="banner-text col-12 col-lg-6">
                        <div class="text-head">
                            <h2 class="h2">corona</h2>
                            <span>
                                <h3>covid-19</h3>
                                <h2>virus</h2>
                            </span>
                        </div>
                        <p class="style-p para">
                            The coronavirus (COVID-19) was first reported in Wuhan, hubei, china in december 2019, the outbreak was later recognized as a pandemic by the World Health organization (WHO) on 11 march 2020.
                        </p>
                        <div class="text-btn">
                            <a href="#protect"><button class="btn">how to protect <span><i class="fas fa-shield-alt"></i></span></button></a>
                            <a href="#about" class="style-a"> webSite Doctors <span><i class="fas fa-arrow-right"></i></span></a>
                        </div>
                        <div class="banner-text-numbers">
                            <div class="banner-number">
                                <p class="text-num">worldwidecases</p>
                                <p class="num">8,949,671</p>
                            </div>
                            <div class="banner-number">
                                <p class="text-num">deaths</p>
                                <p class="num">467,432</p>
                            </div>
                            <div class="banner-number">
                                <p class="text-num">recovered</p>
                                <p class="num">4,556,091</p>
                            </div>
                        </div>
                        <p class="italic"><em>* Last updated: Jun 21, 2020, 09:24 AM America/Chicago</em></p>
                    </div>
                    <div class="col-12 col-lg-6 banner-img">
                        <img src="images/header-a.png">
                    </div>                
                </div>
            </div>
        </div>
    </header>
    <!--------------------section symptons                ----------------------------------->


    <section class="section symptoms" id="symptoms">
        <div class="container">
            <div class="symptoms-text">
                <h3 class="style-h3">what are the symptoms of covid-19 ?</h3>
                <h2 class="style-h2">symptoms of coronavirus</h2>
                <p class="style-p">The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. Also the symptoms may appear 2-14 days after exposure.</p>
            </div>
            <div class="symptoms-boxs">
                <div class="row">
                    <div class="symptoms-box col-12 col-lg-4">
                        <div class="symptoms-box-img">
                            <img src="images/symptom-a.png">
                        </div>
                        <div class="symptoms-box-text">
                            <h3>Fever</h3>
                            <p class="style-p"><span>High Fever</span> – this means you feel hot to touch on your chest or back (you do not need to measure your temperature). It is a common sign and also may appear in 2-10 days if you affected.</p>
                        </div>
                    </div>
                    <div class="symptoms-box col-12 col-lg-4">
                        <div class="symptoms-box-img">
                            <img src="images/symptom-b.png">
                        </div>
                        <div class="symptoms-box-text">
                            <h3>Cough</h3>
                            <p class="style-p"><span>Continuous cough</span>  – this means coughing a lot for more than an hour, or 3 or more coughing episodes in 24 hours (if you usually have a cough, it may be worse than usual).</p>
                        </div>
                    </div>
                    <div class="symptoms-box col-12 col-lg-4">
                        <div class="symptoms-box-img">
                            <img src="images/symptom-c.png">
                        </div>
                        <div class="symptoms-box-text">
                            <h3>Shortness of breath</h3>
                            <p class="style-p"><span>Difficulty breathing</span> – Around 1 out of every 6 people who gets COVID-19 becomes seriously ill and develops difficulty breathing or shortness of breath.</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="symptoms-button">
                <div class="text">
                    <i class="fas fa-exclamation-triangle"></i> 
                    <p class="style-p"><span>Stay at home and call your doctor:</span> <em>If you think you have been exposed to COVID-19 and develop a fever and any symptoms, such as cough or difficulty breathing, call your healthcare provider as soon as possible for medical advice.</em></p>
                </div>
                
            </div>
        </div>
    </section>



    <!---------------------------------------------------preventation section   --------------------------------------->



    <section class="section prevention" id="prevention">
        <div class="container">
            <div class="prevention-text">
                <h3 class="style-h3">how to protect yourself</h3>
                <h2 class="style-h2">prevention & advice</h2>
                <p class="style-p">There is currently no vaccine to prevent coronavirus disease 2019 (COVID-19). The best way to prevent illness is to avoid being exposed to this virus. Stay aware of the latest information on the COVID-19 outbreak, available on the WHO website and through your national and local public health authority.</p>
            </div>
            <div class="prevention-boxs">
                <div class="row justify-content-between">
                    <div class="prevention-box col-12 col-md-6 col-lg-3">
                        <div class="box-img">
                            <img src="images/advice-a.png">
                        </div>
                        <div class="box-text">
                            <h3>Wash your hands frequently</h3>
                            <p class="style-p">Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water for at least 20 seconds.</p>
                        </div>
                    </div>
                    <div class="prevention-box col-12 col-md-4 col-lg-3">
                        <div class="box-img">
                            <img src="images/advice-b.png">
                        </div>
                        <div class="box-text">
                            <h3>Maintain social distancing</h3>
                            <p class="style-p">Maintain at least 1 metre (3 feet) distance between yourself & anyone who is coughing or sneezing. If you are too close, get chance to infected.</p>
                        </div>
                    </div>
                    <div class="prevention-box col-12 col-md-4 col-lg-3">
                        <div class="box-img">
                            <img src="images/advice-c.png">
                        </div>
                        <div class="box-text">
                            <h3>Avoid touching face</h3>
                            <p class="style-p">Hands touch many surfaces and can pick up viruses. So, hands can transfer the virus to your eyes, nose or mouth and can make you sick.</p>
                        </div>
                    </div>
                    <div class="prevention-box col-12 col-md-4 col-lg-3">
                        <div class="box-img">
                            <img src="images/advice-d.png">
                        </div>
                        <div class="box-text">
                            <h3>Practice respiratory hygiene</h3>
                            <p class="style-p">Maintain good respiratory hygiene as covering your mouth & nose with your bent elbow or tissue when cough or sneeze.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="prevention-button">
                <a href="#follow"><button class="btn">Check how you wash hand <span> <i class="fas fa-arrow-right"></i></span></button></a>
                
            </div>
        </div>
    </section>


    <!--------------------------------------section follow------------------------------------>


    <section class="section follow" id="follow">
        <div class="container">
            <div class="follow-text">
                <h2>Follow steps to wash hands</h2>
                
            </div>
            <div class="follow-imgs">
                <div class="row justify-content-between">
                    <div class="follow-img col-6 col-md-4 col-lg-2">
                        <img src="images/hand-a.png">
                        <p>Soap on Hand</p>
                    </div>
                    <div class="follow-img col-6 col-md-4 col-lg-2">
                        <img src="images/hand-b.png">
                        <p>Palm to Palm</p>
                    </div>
                    <div class="follow-img col-6 col-md-4 col-lg-2">
                        <img src="images/hand-c.png">
                        <p>Between Fingers</p>
                    </div>
                    <div class="follow-img col-6 col-md-4 col-lg-2">
                        <img src="images/hand-d.png">
                        <p>Back to Hands</p>
                    </div>
                    <div class="follow-img col-6 col-md-4 col-lg-2">
                        <img src="images/hand-e.png">
                        <p>Clean with Water</p>
                    </div>
                    <div class="follow-img col-6 col-md-4 col-lg-2">
                        <img src="images/hand-f.png">
                        <p>Focus on Wrist</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--------------------faq--------------------->

<section class="section faq" id="faq">
        <div class="container">
            <div class="faq-text">
                <h3 class="style-h3">frequently asked question</h3>
                <h2 class="style-h2">common question & answer</h2>
            </div>
            <div class="faq-boxs">
                <div class="row">
                    <div class="faq-box-select col-lg-4 col-12">
                        <ul>
                            <li class="color-faq active"><p>Coronavirus Disease 2019 Basics</p><i class="fas fa-caret-right"></i></li>
                            <li class="color-faq"><p>How It Spreads</p><i class="fas fa-caret-right"></i></li>
                            <li class="color-faq"><p>How to Protect Yourself</p><i class="fas fa-caret-right"></i></li>
                            <li class="color-faq"><p>Symptoms & Testing</p><i class="fas fa-caret-right"></i></li>
                            <li class="color-faq"><p>Outbreak in Your Community</p><i class="fas fa-caret-right"></i></li>
                            <li class="color-faq"><p>Myth-Busters of coronavirus</p><i class="fas fa-caret-right"></i></li>
                        </ul>
                    </div>
                    <div class="faq-text col-lg-8 col-12">
                        <ul class="item">
                            <li class="click1 style-li"><p>What is a novel coronavirus?</p><div class="icon-plus hide"><i class="fas fa-plus"></i></div><div class="icon-minus"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text">
                                <p>On February 11, 2020 the World Health Organization announced an official name for the disease that is causing the 2019 novel coronavirus outbreak, first identified in Wuhan China. The new name of this disease is coronavirus disease 2019, abbreviated as COVID-19. In COVID-19, ‘CO’ stands for ‘corona,’ ‘VI’ for ‘virus,’ and ‘D’ for disease. Formerly, this disease was referred to as “2019 novel coronavirus” or “2019-nCoV”.</p>
                                <p>A novel coronavirus is a new coronavirus that has not been previously identified. The virus causing coronavirus disease 2019 (COVID-19), is not the same as the <span>coronaviruses that commonly circulate among humans</span> and cause mild illness, like the common cold.</p>
                            </div>
                            <li class="click2"><p>Why is the disease being called coronavirus disease 2019         COVID-19?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>On February 11, 2020 the World Health Organization announced an official name for the disease that is causing the 2019 novel coronavirus outbreak, first identified in Wuhan China. The new name of this disease is coronavirus disease 2019, abbreviated as COVID-19. In COVID-19, ‘CO’ stands for ‘corona,’ ‘VI’ for ‘virus,’ and ‘D’ for disease. Formerly, this disease was referred to as “2019 novel coronavirus” or “2019-nCoV”.</p>
                                <p>There are <span>many types</span> of human coronaviruses including some that commonly cause mild upper-respiratory tract illnesses. COVID-19 is a new disease, caused be a novel (or new) coronavirus that has not previously been seen in humans. The name of this disease was selected following the World Health Organization (WHO) best practiceexternal icon for naming of new human infectious diseases.</p>
                            </div>
                            <li class="click3"><p>How can people help stop stigma related to COVID-19?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>People can fight stigma and help, not hurt, others by providing social support. Counter stigma by learning and sharing facts. Communicating the facts that viruses do not target specific racial or ethnic groups and how COVID-19 actually spreads can help stop stigma.</p>
                            </div>
                            <li class="click4"><p>Why might someone blame or avoid individuals and groups?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>People in the U.S. may be worried or anxious about friends and relatives who are living in or visiting areas where COVID-19 is spreading. Some people are worried about the disease. Fear and anxiety can lead to social stigma, for example, towards Chinese or other Asian Americans or people who were in quarantine.</p>
                                <p>Stigma is discrimination against an identifiable group of people, a place, or a nation. Stigma is associated with a lack of knowledge about how COVID-19 spreads, a need to blame someone, fears about disease and death, and gossip that spreads rumors and myths.</p>
                                <p>Stigma hurts everyone by creating more fear or anger towards ordinary people instead of the disease that is causing the problem.</p>
                            </div>
                        </ul>
                        <ul class="item">
                            <li class="click1 style-li"><p>What is the source of the virus?</p><div class="icon-plus hide"><i class="fas fa-plus"></i></div><div class="icon-minus"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text">
                                <p>Coronaviruses are a large family of viruses. Some cause illness in people, and others, such as canine and feline coronaviruses, only infect animals. Rarely, animal coronaviruses that infect animals have emerged to infect people and can spread between people. This is suspected to have occurred for the virus that causes COVID-19. Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS) are two other examples of coronaviruses that originated from animals and then spread to people. More information about the <span>source and spread of COVID-19 is available on the Situation Summary: Source and Spread of the Virus.</span></p>
                            </div>
                            <li class="click2"><p>How does the virus spread?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>This virus was first detected in Wuhan City, Hubei Province, China. The first infections were linked to a live animal market, but the virus is now spreading from person-to-person. It’s important to note that person-to-person spread can happen on a continuum. Some viruses are highly contagious (like measles), while other viruses are less so.</p>
                                <p>The virus that causes COVID-19 seems to be spreading easily and sustainably in the community (“community spread”) in <span>some affected geographic areas.</span> Community spread means people have been infected with the virus in an area, including some who are not sure how or where they became infected.</p>
                                <p>Learn what is known about the <span>spread of newly emerged coronaviruses.</span></p>
                            </div>
                            <li class="click3"><p>Can someone who has had COVID-19 spread the illness to others?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>The virus that causes COVID-19 is <span>spreading from person-to-person.</span> Someone who is actively sick with COVID-19 can spread the illness to others. That is why CDC recommends that these patients be isolated either in the hospital or at home (depending on how sick they are) until they are better and no longer pose a risk of infecting others.</p>
                                <p>How long someone is actively sick can vary so the decision on when to release someone from isolation is made on a case-by-case basis in consultation with doctors, infection prevention and control experts, and public health officials and involves considering specifics of each situation including disease severity, illness signs and symptoms, and results of laboratory testing for that patient.</p>
                                <p>Current <span>CDC guidance for when it is OK to release someone from isolation</span> is made on a case by case basis and includes meeting all of the following requirements:</p>
                                <p>The patient is free from fever without the use of fever-reducing medications.</p>
                                <p>The patient is no longer showing symptoms, including cough.</p>
                                <p>The patient has tested negative on at least two consecutive respiratory specimens collected at least 24 hours apart.</p>
                                <p>Someone who has been released from isolation is not considered to pose a risk of infection to others.</p>
                            </div>
                            <li class="click4"><p>Will warm weather stop the outbreak of COVID-19?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>It is not yet known whether weather and temperature impact the spread of COVID-19. Some other viruses, like the common cold and flu, spread more during cold weather months but that does not mean it is impossible to become sick with these viruses during other months. At this time, it is not known whether the spread of COVID-19 will decrease when weather becomes warmer. There is much more to learn about the transmissibility, severity, and other features associated with COVID-19 and investigations are ongoing.</p>
                            </div>
                            <li class="click5"><p>Can the virus that causes COVID-19 be spread through food, including refrigerated or frozen food?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>Coronaviruses are generally thought to be spread from person-to-person through respiratory droplets. Currently there is no evidence to support transmission of COVID-19 associated with food. Before preparing or eating food it is important to always wash your hands with soap and water for 20 seconds for general food safety. Throughout the day wash your hands after blowing your nose, coughing or sneezing, or going to the bathroom.</p>
                                <p>It may be possible that a person can get COVID-19 by touching a surface or object that has the virus on it and then touching their own mouth, nose, or possibly their eyes, but this is not thought to be the main way the virus spreads.</p>
                                <p>In general, because of poor survivability of these coronaviruses on surfaces, there is likely very low risk of spread from food products or packaging that are shipped over a period of days or weeks at ambient, refrigerated, or frozen temperatures.</p>
                                <p>Learn what is known about the <span>spread of COVID-19.</span></p>
                            </div>
                            <li class="click6"><p>What is community spread?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>Community spread means people have been infected with the virus in an area, including some who are not sure how or where they became infected.</p>
                            </div>
                        </ul>
                        <ul class="item">
                            <li class="click1 style-li"><p>What can I do to protect myself and prevent the spread of disease?</p><div class="icon-plus hide"><i class="fas fa-plus"></i></div><div class="icon-minus"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text">
                                <p><span class="bold">Protection measures for everyone</span></p>
                                <p>Stay aware of the latest information on the COVID-19 outbreak, available on the WHO website and through your national and local public health authority. Many countries around the world have seen cases of COVID-19 and several have seen outbreaks. Authorities in China and some other countries have succeeded in slowing or stopping their outbreaks. However, the situation is unpredictable so check regularly for the latest news.</p>
                                <p>You can reduce your chances of being infected or spreading COVID-19 by taking some simple precautions:</p>
                                <ul class="style-ul">
                                    <li>
                                        <p>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water.</p>
                                        <p><span class="bold">Why?</span> Washing your hands with soap and water or using alcohol-based hand rub kills viruses that may be on your hands.</p>
                                    </li>
                                    <li>
                                        <p>Maintain at least 1 metre (3 feet) distance between yourself and anyone who is coughing or sneezing.</p>
                                        <p><span class="bold">Why?</span> When someone coughs or sneezes they spray small liquid droplets from their nose or mouth which may contain virus. If you are too close, you can breathe in the droplets, including the COVID-19 virus if the person coughing has the disease.</p>
                                    </li>
                                    <li>
                                        <p>Avoid touching eyes, nose and mouth.</p>
                                        <p><span class="bold">Why?</span> Hands touch many surfaces and can pick up viruses. Once contaminated, hands can transfer the virus to your eyes, nose or mouth. From there, the virus can enter your body and can make you sick.</p>
                                    </li>
                                    <li>
                                        <p>Make sure you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately.</p>
                                        <p><span class="bold">Why?</span> Droplets spread virus. By following good respiratory hygiene you protect the people around you from viruses such as cold, flu and COVID-19.</p>
                                    </li>
                                    <li>
                                        <p>Stay home if you feel unwell. If you have a fever, cough and difficulty breathing, seek medical attention and call in advance. Follow the directions of your local health authority.</p>
                                        <p><span class="bold">Why?</span> National and local authorities will have the most up to date information on the situation in your area. Calling in advance will allow your health care provider to quickly direct you to the right health facility. This will also protect you and help prevent spread of viruses and other infections.</p>
                                    </li>
                                    <li>
                                        <p>Keep up to date on the latest COVID-19 hotspots (cities or local areas where COVID-19 is spreading widely). If possible, avoid traveling to places – especially if you are an older person or have diabetes, heart or lung disease.</p>
                                        <p><span class="bold">Why?</span> You have a higher chance of catching COVID-19 in one of these areas.</p>
                                    </li>
                                </ul>
                            </div>
                            <li class="click2"><p>What should I do if I had close contact with someone who has COVID-19?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>Household members, intimate partners, and caregivers in a nonhealthcare setting may have close contact2 with a person with symptomatic, laboratory-confirmed COVID-19 or a person under investigation. Close contacts should monitor their health; they should call their healthcare provider right away if they develop symptoms suggestive of COVID-19 (e.g., fever, cough, shortness of breath)</p>
                                <p>Close contacts should also follow these recommendations:</p>
                                <ul class="style-ul">
                                    <li><p>Make sure that you understand and can help the patient follow their healthcare provider’s instructions for medication(s) and care. You should help the patient with basic needs in the home and provide support for getting groceries, prescriptions, and other personal needs.</p></li>
                                    <li><p>Monitor the patient’s symptoms. If the patient is getting sicker, call his or her healthcare provider and tell them that the patient has laboratory-confirmed COVID-19. This will help the healthcare provider’s office take steps to keep other people in the office or waiting room from getting infected. Ask the healthcare provider to call the local or state health department for additional guidance. If the patient has a medical emergency and you need to call 911, notify the dispatch personnel that the patient has, or is being evaluated for COVID-19.</p></li>
                                    <li><p>Household members should stay in another room or be separated from the patient as much as possible. Household members should use a separate bedroom and bathroom, if available.</p></li>
                                    <li><p>Prohibit visitors who do not have an essential need to be in the home.</p></li>
                                    <li><p>Household members should care for any pets in the home. Do not handle pets or other animals while sick. For more information, see COVID-19 and Animals.</p></li>
                                    <li><p>Make sure that shared spaces in the home have good air flow, such as by an air conditioner or an opened window, weather permitting.</p></li>
                                    <li><p>Perform hand hygiene frequently. Wash your hands often with soap and water for at least 20 seconds or use an alcohol-based hand sanitizer that contains 60 to 95% alcohol, covering all surfaces of your hands and rubbing them together until they feel dry. Soap and water should be used preferentially if hands are visibly dirty.</p></li>
                                    <li><p>Avoid touching your eyes, nose, and mouth with unwashed hands.</p></li>
                                    <li><P>The patient should wear a facemask when you are around other people. If the patient is not able to wear a facemask (for example, because it causes trouble breathing), you, as the caregiver, should wear a mask when you are in the same room as the patient.</P></li>
                                    <li><p>Wear a disposable facemask and gloves when you touch or have contact with the patient’s blood, stool, or body fluids, such as saliva, sputum, nasal mucus, vomit, urine.</p>
                                        <ul class="style-ul">
                                            <li><p>Throw out disposable facemasks and gloves after using them. Do not reuse.</p></li>
                                            <li><p>When removing personal protective equipment, first remove and dispose of gloves. Then, immediately clean your hands with soap and water or alcohol-based hand sanitizer. Next, remove and dispose of facemask, and immediately clean your hands again with soap and water or alcohol-based hand sanitizer.</p></li>
                                        </ul>
                                    </li>
                                    <li><p>Avoid sharing household items with the patient. You should not share dishes, drinking glasses, cups, eating utensils, towels, bedding, or other items. After the patient uses these items, you should wash them thoroughly (see below “Wash laundry thoroughly”).</p></li>
                                    <li><p>Clean all “high-touch” surfaces, such as counters, tabletops, doorknobs, bathroom fixtures, toilets, phones, keyboards, tablets, and bedside tables, every day. Also, clean any surfaces that may have blood, stool, or body fluids on them.</p>
                                        <ul class="style-ul">
                                            <li><p>Use a household cleaning spray or wipe, according to the label instructions. Labels contain instructions for safe and effective use of the cleaning product including precautions you should take when applying the product, such as wearing gloves and making sure you have good ventilation during use of the product.</p></li>
                                        </ul>
                                    </li>
                                    <li><p>Wash laundry thoroughly.</p>
                                    <ul class="style-ul">
                                        <li><p>Immediately remove and wash clothes or bedding that have blood, stool, or body fluids on them.</p></li>
                                        <li><p>Wear disposable gloves while handling soiled items and keep soiled items away from your body. Clean your hands (with soap and water or an alcohol-based hand sanitizer) immediately after removing your gloves.</p></li>
                                        <li><p>Read and follow directions on labels of laundry or clothing items and detergent. In general, using a normal laundry detergent according to washing machine instructions and dry thoroughly using the warmest temperatures recommended on the clothing label.</p></li>
                                    </ul>
                                    </li>
                                    <li><p>Place all used disposable gloves, facemasks, and other contaminated items in a lined container before disposing of them with other household waste. Clean your hands (with soap and water or an alcohol-based hand sanitizer) immediately after handling these items. Soap and water should be used preferentially if hands are visibly dirty.</p></li>
                                    <li><p>Discuss any additional questions with your state or local health department or healthcare provider. Check available hours when contacting your local health department.</p></li>
                                </ul>
                            </div>
                            <li class="click3"><p>Who is at higher risk for serious illness from COVID-19?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p><span class="bold">Older adults and people of any age who have serious underlying medical conditions</span> may be at higher risk for more serious complications from COVID-19. These people who may be at higher risk of getting very sick from this illness, includes:</p>
                                    <p><span class="bold">Older adults</span></p>
                                    <p><span class="bold">People who have serious underlying medical conditions like:</span></p>
                                    <p>Heart disease</p>
                                    <p>Diabetes</p>
                                    <p>Lung disease</p>
                            </div>
                            <li class="click4"><p>What should people at higher risk of serious illness with COVID-19 do?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>If you are at higher risk of getting very sick from COVID-19, you should: stock up on supplies; take everyday precautions to keep space between yourself and others; when you go out in public, keep away from others who are sick; limit close contact and wash your hands often; and avoid crowds, cruise travel, and non-essential travel. If there is an outbreak in your community, stay home as much as possible. Watch for symptoms and emergency signs. If you get sick, stay home and call your doctor. More information on how to prepare, what to do if you get sick, and how communities and caregivers can support those at higher risk is available on <span>People at Risk for Serious Illness from COVID-19.</span></p>
                            </div>
                            <li class="click5"><p>Should I wear a mask to protect myself?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>Only wear a mask if you are ill with COVID-19 symptoms (especially coughing) or looking after someone who may have COVID-19. Disposable face mask can only be used once. If you are not ill or looking after someone who is ill then you are wasting a mask. There is a world-wide shortage of masks, so WHO urges people to use masks wisely.</p>
                                <p>WHO advises rational use of medical masks to avoid unnecessary wastage of precious resources and mis-use of masks (<span> Advice on the use of masks</span>).</p>
                                <p>The most effective ways to protect yourself and others against COVID-19 are to frequently clean your hands, cover your cough with the bend of elbow or tissue and maintain a distance of at least 1 meter (3 feet) from people who are coughing or sneezing. See basic protective measures against the new coronavirus for more information.</p>
                            </div>
                        </ul>
                        <ul class="item">
                            <li class="click1 style-li"><p>What are the symptoms of COVID-19?</p><div class="icon-plus hide"><i class="fas fa-plus"></i></div><div class="icon-minus"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text">
                                <p>The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. Some people become infected but don’t develop any symptoms and don't feel unwell. Most people (about 80%) recover from the disease without needing special treatment. Around 1 out of every 6 people who gets COVID-19 becomes seriously ill and develops difficulty breathing. Older people, and those with underlying medical problems like high blood pressure, heart problems or diabetes, are more likely to develop serious illness. People with fever, cough and difficulty breathing should seek medical attention.</p>
                                <p>Read about<span> COVID-19 Symptoms from CDC.gov.</span></p>
                            </div>
                            <li class="click2"><p>Should I be tested for COVID-19?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>Not everyone needs to be tested for COVID-19. For information about testing, see <span>for COVID-19.</span></p>
                            </div>
                            <li class="click3"><p>Where can I get tested for COVID-19?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>The process and locations for testing vary from place to place. Contact your state, local, tribal, or territorial department for more information, or reach out to a medical provider. State and local public health departments have received tests from CDC while medical providers are getting tests developed by commercial manufacturers. While supplies of these tests are increasing, it may still be difficult to find someplace to get tested.</p>
                            </div>
                            <li class="click4"><p>Can a person test negative and later test positive for COVID-19?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>Using the CDC-developed diagnostic test, a negative result means that the virus that causes COVID-19 was not found in the person’s sample. In the early stages of infection, it is possible the virus will not be detected.</p>
                                <p>For COVID-19, a negative test result for a sample collected while a person has symptoms likely means that the COVID-19 virus is not causing their current illness.</p>
                            </div>
                        </ul>
                        <ul class="item">
                            <li class="click1 style-li"><p>What should I do if there is an outbreak in my community?</p><div class="icon-plus hide"><i class="fas fa-plus"></i></div><div class="icon-minus"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text">
                                <p>During an outbreak, stay calm and put your preparedness plan to work. Follow the steps below:</p>
                                <p><span class="bold">Protect yourself and others.</span></p>
                                <p>Stay home if you are sick. Keep away from people who are sick. Limit close contact with others as much as possible (about 6 feet).</p>
                                <p><span class="bold">Put your household plan into action.</span></p>
                                <p><span class="bold">Stay informed about the local COVID-19 situation.</span> Be aware of temporary school dismissals in your area, as this may affect your household’s daily routine.</p>
                                <p><span class="bold">Continue practicing everyday preventive actions.</span> Cover coughs and sneezes with a tissue and wash your hands often with soap and water for at least 20 seconds. If soap and water are not available, use a hand sanitizer that contains 60% alcohol. Clean frequently touched surfaces and objects daily using a regular household detergent and water.</p>
                                <p><span class="bold">Notify your workplace as soon as possible if your regular work schedule changes.</span> Ask to work from home or take leave if you or someone in your household gets sick with <span>COVID-19 symptoms</span>, or if your child’s school is dismissed temporarily. <span>Learn how businesses and employers can plan for and respond to COVID-19.</span></p>
                                <p><span class="bold">Stay in touch with others by phone or email.</span> If you have a chronic medical condition and live alone, ask family, friends, and health care providers to check on you during an outbreak. Stay in touch with family and friends, especially those at increased risk of developing severe illness, such as older adults and people with severe chronic medical conditions.</p>
                            </div>
                            <li class="click2"><p>How do I prepare my children in case of COVID-19 outbreak in our community?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>Outbreaks can be stressful for adults and children. Talk with your children about the outbreak, try to stay calm, and reassure them that they are safe. If appropriate, explain to them that most illness from COVID-19 seems to be mild.</p>
                                <p><span>Children respond differently to stressful situations than adults</span></p>
                            </div>
                            <li class="click3"><p>What steps should parents take to protect children during a community outbreak?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>This is a new virus and we are still learning about it, but so far, there does not seem to be a lot of illness in children. Most illness, including serious illness, is happening in adults of working age and older adults. If there cases of COVID-19 that impact your child’s school, the school may dismiss students. Keep track of school dismissals in your community. Read or watch local media sources that report school dismissals. If schools are dismissed temporarily, use alternative childcare arrangements, if needed.</p>
                                <p>If your child/children become sick with COVID-19, notify their childcare facility or school. Talk with teachers about classroom assignments and activities they can do from home to keep up with their schoolwork.</p>
                                <p>Discourage children and teens from gathering in other public places while school is dismissed to help slow the spread of COVID-19 in the community.</p>
                            </div>
                            <li class="click4"><p>Will schools be dismissed if there is an outbreak in my community?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>Depending on the situation, public health officials may recommend community actions to reduce exposures to COVID-19, such as school dismissals. Read or watch local media sources that report school dismissals or and watch for communication from your child’s school. If schools are dismissed temporarily, discourage students and staff from gathering or socializing anywhere, like at a friend’s house, a favorite restaurant, or the local shopping mall.</p>
                            </div>
                            <li class="click5"><p>Can the virus that causes COVID-19 be spread through food, including refrigerated or frozen food?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>Coronaviruses are generally thought to be spread from person-to-person through respiratory droplets. Currently there is no evidence to support transmission of COVID-19 associated with food. Before preparing or eating food it is important to always wash your hands with soap and water for 20 seconds for general food safety. Throughout the day wash your hands after blowing your nose, coughing or sneezing, or going to the bathroom.</p>
                                <p>It may be possible that a person can get COVID-19 by touching a surface or object that has the virus on it and then touching their own mouth, nose, or possibly their eyes, but this is not thought to be the main way the virus spreads.</p>
                                <p>In general, because of poor survivability of these coronaviruses on surfaces, there is likely very low risk of spread from food products or packaging that are shipped over a period of days or weeks at ambient, refrigerated, or frozen temperatures.</p>
                                <p>Learn what is known about the <span>spread of COVID-19.</span></p>
                            </div>
                            <li class="click6"><p>Should I go to work if there is an outbreak in my community?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>Follow the advice of your local health officials. Stay home if you can. Talk to your employer to discuss working from home, taking leave if you or someone in your household gets sick with <span>COVID-19 symptoms</span>, or if your child’s school is dismissed temporarily. Employers should be aware that more employees may need to stay at home to care for sick children or other sick family members than is usual in case of a community outbreak.</p>
                            </div>
                        </ul>
                        <ul class="item">
                            <li class="click1 style-li"><p>COVID-19 virus can be transmitted in areas with hot and humid climates?</p><div class="icon-plus hide"><i class="fas fa-plus"></i></div><div class="icon-minus"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text">
                                <p>From the evidence so far, the COVID-19 virus can be transmitted in ALL AREAS, including areas with hot and humid weather. Regardless of climate, adopt protective measures if you live in, or travel to an area reporting COVID-19. The best way to protect yourself against COVID-19 is by frequently cleaning your hands. By doing this you eliminate viruses that may be on your hands and avoid infection that could occur by then touching your eyes, mouth, and nose.</p>
                            </div>
                            <li class="click2"><p>Cold weather and snow CANNOT kill the new coronavirus</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>There is no reason to believe that cold weather can kill the new coronavirus or other diseases. The normal human body temperature remains around 36.5°C to 37°C, regardless of the external temperature or weather. The most effective way to protect yourself against the new coronavirus is by frequently cleaning your hands with alcohol-based hand rub or washing them with soap and water.</p>
                            </div>
                            <li class="click3"><p>Taking a hot bath does not prevent the new coronavirus disease</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>Taking a hot bath will not prevent you from catching COVID-19. Your normal body temperature remains around 36.5°C to 37°C, regardless of the temperature of your bath or shower. Actually, taking a hot bath with extremely hot water can be harmful, as it can burn you. The best way to protect yourself against COVID-19 is by frequently cleaning your hands. By doing this you eliminate viruses that may be on your hands and avoid infection that could occur by then touching your eyes, mouth, and nose.</p>
                            </div>
                            <li class="click4"><p>The new coronavirus CANNOT be transmitted through mosquito bites.</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>To date there has been no information nor evidence to suggest that the new coronavirus could be transmitted by mosquitoes. The new coronavirus is a respiratory virus which spreads primarily through droplets generated when an infected person coughs or sneezes, or through droplets of saliva or discharge from the nose. To protect yourself, clean your hands frequently with an alcohol-based hand rub or wash them with soap and water. Also, avoid close contact with anyone who is coughing and sneezing.</p>
                            </div>
                            <li class="click5"><p>Are hand dryers effective in killing the new coronavirus?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>No. Hand dryers are not effective in killing the 2019-nCoV. To protect yourself against the new coronavirus, you should frequently clean your hands with an alcohol-based hand rub or wash them with soap and water. Once your hands are cleaned, you should dry them thoroughly by using paper towels or a warm air dryer.</p>
                            </div>
                            <li class="click6"><p>Can an ultraviolet disinfection lamp kill the new coronavirus?</p><div class="icon-plus"><i class="fas fa-plus"></i></div><div class="icon-minus hide"><i class="fas fa-minus"></i></div></li>
                            <div class="ul-text hide">
                                <p>UV lamps should not be used to sterilize hands or other areas of skin as UV radiation can cause skin irritation.</p>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-------------------------------------------about us--------------------------------------------------->



<section class="about" id="about">
    <div class="container aboutus">
        <div class="row">
            <div class="col-xs-12   col-sm-6  col-md-6  col-lg-4  animate__animated animate__backInLeft">
              <img src="images/Ali.jpg" class="rounded-circle" width="100" height="100px">
              <h3 class="styleh3" style="color: blue"> Dr.Ali</h3>
              <p class="stylep"    style=" margin-top: 10%;"> An intensive care doctor <br> from Damascus university</p>
            </div><div class= " col-xs-offset-3 "></div>
          
            <div class="col-xs-12   col-sm-6  col-md-6  col-lg-4  animate__animated animate__bounce">
              <img src="images/Ahmad.jpg" class="rounded-circle" width="100" height="100px">
                <h3  class="styleh3" style="color: blue"> Dr.Amer</h3>
              <p class="stylep"   style=" margin-top: 10%;">  An ambulance doctor <br>from Damascus University</p>
            </div><div class= " col-xs-offset-"></div>
          
            <div class="col-xs-12   col-sm-6  col-md-6 col-lg-4  animate__animated animate__backInRight">
              <img src="images/Samr.jpg" class="rounded-circle" width="100" height="100px">
                <h3  class="styleh3"  style="color: blue">Dr.Samr</h3>
              <p class="stylep"  style=" margin-top: 10%;">An intensive care doctor<br> from Damascus university </p>
              
            </div><div class= " col-xs-offset-3 "></div>
            <div class="clearfix visible-md-inline"></div>
            <div class="col-xs-12   col-sm-6  col-md-6 col-lg-4  animate__animated animate__backInLeft">
              <img src="images/Alia.jpg" class="rounded-circle" width="100" height="100px">
                <h3  class="styleh3" style="color: blue">Dr.Alia</h3>
              <p class="stylep"  style=" margin-top: 10%;">chest Doctor <br>
            from tishreen university </p>
            </div>
            <div class= " col-xs-offset-3 "></div>
            <div class="col-xs-12   col-sm-6  col-md-6  col-lg-4  animate__animated animate__bounce">
              <img src="images/lena.jpg" class="rounded-circle" width="100" height="100px">
                <h3  class="styleh3"  style="color: blue">Dr.lena</h3>
              <p class="stylep" style=" margin-top: 10%;">An intensive care doctor<br> from Tishreen university </p></div>
              <div class= " col-xs-offset-3 "></div>
            
            <div class="col-xs-12   col-sm-6  col-md-6 col-lg-4  animate__animated animate__backInRight">
              <img src="images/Mais.jpg" class="rounded-circle" width="100" height="100px">
                <h3  class="styleh3"   style="color: blue">  Dr.Mais</h3>
              <p  class="stylep"  style=" margin-top: 10%;" ><br> An intensive care doctor <br>from Tishreen university </p>
            </div>
            <div class= " col-xs-offset-3 "></div>
                
              </div>
            </div>
    </div>
</section>
   







<footer>
        <div class="container">
            <div class="footer-boxs">
                <div class="row justify-content-between">
                    <div class="footer-box col-12 col-lg-4">
                        <div class="logo">
                            <h1>c<i class="fas fa-virus"></i>vid<span>19</span></h1>
                        </div>
                        <p>This website is for health information and advice about coronavirus (COVID-19), how to prevent and protect yourself from disease.</p>
                        <p>Learn about the government response to coronavirus on GOV.UK.</p>
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                    <div class="footer-box col-12 col-sm-3 col-lg-2">
                        <h3 class="style-h3">QUICK LINK</h3>
                        <ul>
                            <li><a href="#about">About Corona</a></li>
                            <li><a href="#symptoms">Symptoms</a></li>
                            <li><a href="#prevention">Prevention</a></li>
                            <li><a href="#protect">Protect Youself</a></li>
                            <li><a href="#faq">FAQs</a></li>
                        </ul>
                    </div>
                    <div class="footer-box col-12 col-sm-3 col-lg-3">
                        <h3 class="style-h3">HELPFULL LINK</h3>
                        <ul>
                            <li><a href="#">Healthcare Professionals</a></li>
                            <li><a href="#">Healthcare Facilities</a></li>
                            <li><a href="#">Older Adults & Medical Conditions</a></li>
                            <li><a href="#">Repare your Family</a></li>
                        </ul>
                    </div>
                    <div class="footer-box col-12 col-sm-3 col-lg-3">
                        <h3 class="style-h3">IMPORTANT LINK</h3>
                        <ul>
                            <li><a href="#">WHO Website</a></li>
                            <li><a href="#">CDC Website</a></li>
                            <li><a href="#">NHS Website</a></li>
                            <li><a href="#">Harvard Health</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-text">
                <p>© 2020 COVID-19. Template Made by<span> Moamen Gamal Elsabbah .</span>
                </p>
                <p>Disclaimer: We hope you find the information presented on this website useful. This website is for general information and raise awareness of (2019-nCoV) only. All the information based on WHO, NHS and CDC website. Information on our website is meant for awareness, if you have any doubt please verify from respective site</p>
            </div>
        </div>
    </footer>

<!--------------------------------------Register------------------------------------>
<!--
<section  class="Singup" id="login" >
    <form method="post" action="fontt.php">
        <div class="container" style="padding: 16px;">
          <h1  style="color: #394B6C;">Register</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          <label for="paname"><b style="color: #394B6C;">patient-name</b></label>
          <input type="text"   value="<?php echo $patient_name?>" placeholder="Enter your name" name="paname" id="paname" required  style="width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          display: inline-block;
          border: none;
          background: #f1f1f1;
          color: #394B6C;">
        

              <label for="M"><b style="color: #394B6C;">mobile</b></label>
          <input type="text"   value="  <?php echo $mobile?>" placeholder="Enter your mobile number" name="M" id="M" required  style="width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          display: inline-block;
          border: none;
          background: #f1f1f1;
          color: #394B6C;"> 
          <label for="psw"><b style="color: #394B6C;">Password</b></label>
          <input type="password"    value="  <?php echo $password?>" placeholder="Enter your password" name="psw" id="psw" required style="width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          display: inline-block;
          border: none;
          background: #f1f1f1;
          color: #394B6C;" >
          <label for="DD"><b style="color: #394B6C;">patient-Age</b></label>
          <input type="number"     value="<?php echo $Age?>" placeholder="Enter your Age" name="DD" id="DD" required  style="width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          display: inline-block;
          border: none;
          background: #f1f1f1;
          color: #394B6C;">
        
      
          
          <hr>
      
          
          <input type="submit" class="registerbtn"  name="reg">Register</button>

-->
<!--
        </div>
      
        <div class="container signin">
          <p>Already have an account? <a href="#loginn">login</a>.</p>
        </div>
      </form>
</section>

<section class="login" id="loginn">
    <form class="forming" style="position: absolute;
 margin-top:250px;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 350px
    ;
    height: 420px;
    background: rgba(0, 0, 0, 0.5);
    border-radius: 15px;
    box-sizing: border-box;
    box-shadow:3px 3px 10px 2px  blue;
    ">
    



       <img src="images/key.jpg" width="120px" height="120px" style="position: absolute;margin-top:-50px; left: 30%; border-radius: 50%">
       <h2 style="color: #FFF; text-align: center;margin-top: 90px; "  > Login</h2>
       
       <input type="text" placeholder="username"  style="position: absolute; outline: none;border: none;width: 250px; height: 35px; border-bottom: 2px solid #0a189c  ; background: none;  padding: 5px; color: #fff; top: 140px; left: 50px; ">
      
       <input type="password" placeholder="password"    style="position: absolute; outline: none;border: none;width: 250px; height: 35px; border-bottom: 2px solid #0a189c  ; background: none;  padding: 5px; color: #fff; top: 210px; left: 50px;">
       <button class="lkj" >login</button>
    </form>
   
</section>


<section class="chat" id="chat"  style="background-color:silver;;width:100%;
height: 800px;  margin-top:1000px; ">

<div class="container"  style="    background:white;
      width:70%; margin-top:500px;   height:800px;font-size:medium  ">

<div class="chatt"     style="margin-top:1005px;  width:100%;height:30px;border:1px solid gray;  align-items:center;border-botom:1px solid #394B6C;">
<form method="post" action="fontt.php"  >
<input type="text" name="name" placeholder="insert your name"  style="margin-top:10px;  width:100%; font-size:medium;height:30px; color: #394B6C;border:1px solid gray;border-raduis:5px;" />
<br>
<input type="text" name="msg" placeholder ="insert your message "  style="width:100%;"/ >
<br>
<input type="submit"  name="submit" value="send your message" style="border 1px solid #394B6C;; width:100%; height:30px;border:1px solid #394B6C;font-size:medium ;color:#394B6C;"/>
<input type="hidden" name="submit" value ="any value" />
</form>
-->
























<?php  


if(isset($_POST['submit'])){
   // echo "####";
    $name=$_POST['name'];
    $msg=$_POST['msg'];
    $query="INSERT INTO chat(name,msg) VALUES ('$name','$msg')";
    $run=$con -> query($query);
}
?>
</div>
</div>
</section>








       
           

























 <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
 <script src="jss/jquery.js"></script>
 
 <script src="jss/all.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <!--<script src="js/popper.js"></script>-->
 
 <script src="jss/costum.js"></script>


</body>


</html>


