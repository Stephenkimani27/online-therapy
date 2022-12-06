<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="list.css">
    <link rel="stylesheet" href="accord.css">

    <title>Document</title>
</head>
<body>
<section class="about-section">
    <!-- about left  -->
    <div class="about-left">
        <img src="image/winnie.jpg" width="500px" />
    </div>

    <!-- about right  -->
    <div class="about-right">
        <h4>Winnie andrews</h4>
        <h1>About Me</h1>
        <p>
            winnie andrews   received her Master’s Degree in Counseling from National Louis University in 2012. She has experience working in private practice and school counseling
        </p>
        <div class="address">
            <ul>
                <li>
                            <span class="address-logo">
                                <i class="fas fa-paper-plane"></i>
                            </span>
                    <p>Address</p>
                    <span class="saprater">:</span>
                    <p>kenya, nairobi, </p>
                </li>
                <li>
                            <span class="address-logo">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                    <p>Phone No</p>
                    <span class="saprater">:</span>
                    <p>+91 987-654-4321</p>
                </li>
                <li>
                            <span class="address-logo">
                                <i class="far fa-envelope"></i>
                            </span>
                    <p>Email ID</p>
                    <span class="saprater">:</span>
                    <p>murife@gmail.com</p>
                </li>
            </ul>
        </div>
        <br>
        <div class="theContainer">
            <div class="w3jar-accordion">
                <ul class="panel">
                    <li class="wrap active"><a href="#" class="title">Treatment</a>
                        <ul class="sub-panel">
                            <li>1.depression</li>
                            <li>2.Anxiety disorder </li>
                            <li>3.phobias</li>
                            <li>4.ptsd</li>
                            <li>5.Obssessive compulsive disorder</li>
                            <li>6.Bipolar disorder</li>
                            <li>7.schizophrenia</li>
                        </ul>
                    </li>



                    <li class="wrap"><a href="#" class="title">Treatment model</a>
                        <ul class="sub-panel">
                            <li>1.Attachment-based</li>
                            <li>2.Person-Centered</li>
                            <li>3.Positive Psychology</li>
                        </ul>
                    </li>





                </ul>
            </div>
        </div>
</section>
<section class="contact">
    <div class="container">
        <h1 class="form-title">FEEDBACK</h1>
        <form action="#">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="fullName">Full Name</label>
                    <input type="text"
                           id="fullName"
                           name="fullName"
                           placeholder="Enter Full Name"/>
                </div>
                <div class="user-input-box">
                    <label for="username">lastname</label>
                    <input type="text"
                           id="username"
                           name="username"
                           placeholder="Enter Username"/>
                </div>
                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="email"
                           id="email"
                           name="email"
                           placeholder="Enter Email"/>
                </div>
                <div class="user-input-box">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text"
                           id="phoneNumber"
                           name="phoneNumber"
                           placeholder="Enter Phone Number"/>
                </div>

                <textarea id="w3review" name="w3review" rows="9" cols="90"></textarea>


            </div>

            <div class="form-submit-btn">
                <input type="submit" value="submit">
            </div>
        </form>
    </div>
</section>
<script>
    var allBtns = document.querySelectorAll('.w3jar-accordion .panel .wrap > .title');
    var allEl = document.querySelectorAll('.w3jar-accordion .panel .wrap');

    Array.from(allBtns).forEach(function (el) {

        var parentEl = el.parentElement;
        el.onclick = function () {
            if (!parentEl.classList.contains('active')) {
                Array.from(allEl).forEach(function (el) {
                    if (el.classList.contains('active')) {
                        el.classList.remove('active');
                        parentEl.classList.add('active');
                    }
                });
            }
        };

    });
</script>




<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?76889';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
        "enabled":true,
        "chatButtonSetting":{
            "backgroundColor":"#4dc247",
            "ctaText":"",
            "borderRadius":"25",
            "marginLeft":"0",
            "marginBottom":"50",
            "marginRight":"50",
            "position":"right"
        },
        "brandSetting":{
            "brandName":"winnie",
            "brandSubTitle":"Typically replies within a day",
            "brandImg":"https://cdn.clare.ai/wati/images/WATI_logo_square_2.png",
            "welcomeText":"Hi there!\nHow can I help you?",
            "messageText":"Hello, I have a question about {{page_link}}",
            "backgroundColor":"#0a5f54",
            "ctaText":"Start Chat",
            "borderRadius":"25",
            "autoShow":false,
            "phoneNumber":"254796604209"
        }
    };
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>




</body>
</html>



