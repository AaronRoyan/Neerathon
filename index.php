
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    /> -->
    <!-- <link rel="stylesheet" type="text/css" href="style.css" /> -->
    <link rel="stylesheet" type="text/css" href="/custom-style.css" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700;900&display=swap");
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 62.5%;
        }

        body {
            width: 100%;
            overflow-x: hidden;
            font-family: "Roboto", sans-serif;
            background-color: #302273;
        }

        .main__section {
            max-width: 1350px;
            margin: 0 auto;
            width: 100%;
        }

        .header__section {
            background-color: #302273;
            display: flex;
            flex-direction: column;
        }

        .header__navigation--container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 2rem 5rem;
            background-color: #302273;
        }

        .navigation__image--container {
            display: flex;
        }

        .navigation__image--container div {
            margin-left: 2rem;
            padding-left: 1.5rem;
            display: flex;
            flex-direction: column;
            border-left: 1px solid rgba(255, 255, 255, 0.55);
            color: #ffffff;
            font-size: 1.25rem;
        }

        .navigation__image {
            width: 6.5rem;
        }

        .termsandC {
            text-decoration: none;
            color: orange;
            text-underline-position: below;
        }

        .navigation__button {
            background-color: #d78c47;
            color: #ffffff;
            font-family: "Roboto", sans-serif;
            padding: 1.25rem 3rem;
            font-size: 1.65rem;
            font-weight: 500;
            letter-spacing: 1px;
            border-radius: 2px;
            border: 0;
            transition: all 0.3s ease;
        }

        .navigation__button:hover {
            background-color: #d66c11;
            cursor: pointer;
        }

        .cta__section {
            padding: 8rem 0 6rem 0;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cta__image--container {
            width: 40%;
        }

        .cta__image {
            width: 100%;
        }

        .cta__header--container {
            position: absolute;
            display: flex;
        }

        .cta__header--letter {
            font-size: 14rem;
            color: #cbfff3;
            margin: 0 1rem;
        }

        .cta__header--letter:nth-child(even) {
            transform: translateY(-3.5rem);
        }

        .cta__header--letter:nth-child(odd) {
            transform: translateY(1rem);
        }

        .partners__section {
            background-color: #302273;
            /* background: red; */
            padding: 6rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .about__section {
            background-color: #302273;
            /* background-color: red; */
            padding: 7rem 0 0 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .header2__header {
            color: #cbfff3;
            font-size: 3.5rem;
            text-transform: uppercase;
            text-align: center;
            display: inline-block;
            border-bottom: 1px solid rgba(255, 255, 255, 0.35);
            margin: 3rem 0;
            letter-spacing: 1.5px;
            padding-bottom: 2.5rem;
        }

        .about__content {
            width: 80%;
            font-size: 1.65rem;
            line-height: 1.85;
            color: #ffffff;
            font-style: italic;
            text-align: center;
            margin: 1rem 0 0 2rem;
        }

        .about__section button {
            margin-top: 3rem;
            margin-bottom: 2rem;
        }

        .about__section button:hover {
            transform: translateY(-5px);
        }

        .banner__section {
            margin-top: 10rem;
            background-color: #302273;
            /* background-color: red; */
            min-height: 75vh;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            background-image: url("./image/rec-banner.png");
            background-repeat: no-repeat;
            background-position: center;
        }

        .features__section {
            margin-top: 14rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .features__section .about__content {
            width: 45%;
            line-height: 1.9;
            font-size: 1.8rem;
        }

        .features__list {
            margin-top: 12rem;
            display: flex;
            width: 100%;
            align-items: center;
            background-color: #302273;
            /* background: red; */
            justify-content: space-around;
        }

        .feature__item {
            background-color: #ffffff;
            width: 18rem;
            height: 18rem;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .feature__item h3 {
            color: #d78c47;
            font-size: 3.5rem;
            margin: 4px 0;
        }

        .feature__item h4 {
            color: #302273;
            font-size: 1.5rem;
            text-transform: uppercase;
            margin-top: 5px;
        }

        .feature__item:nth-of-type(2) {
            transform: translateY(-6rem);
        }

        .middle__banner {
            background-color: #d78c47;
            width: 70%;
            margin: 7.5rem auto 0 auto;
            position: relative;
            top: 5rem;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            border-radius: 1.5rem;
            padding: 2rem;
        }

        .middle__banner--image img {
            width: 25rem;
        }

        .middle__banner--content {
            max-width: 50%;
        }

        .middle__banner--content h3 {
            color: #ffffff;
            font-size: 1.75rem;
            margin: 0.8rem 0;
        }

        .middle__banner--content p {
            font-size: 1.5rem;
            line-height: 1.65;
        }

        .gallery__section {
            padding-top: 18rem;
            padding-bottom: 12rem;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #1ec8ed;
        }

        .gallery__section img {
            margin: 0 1rem;
            opacity: 0.75;
            transition: 0.25s all ease;
        }

        .gallery__section img:hover {
            opacity: 1;
        }

        .registration__section {
            padding-top: 8rem;
            padding-bottom: 6rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .registration__section form {
            width: 60%;
        }

        .registration__section form .input-container {
            display: flex;
            flex-direction: column;
            margin: 2.5rem 0;
        }

        .registration__section form div label {
            margin-bottom: 0.6rem;
            color: #ffffff;
            font-size: 1.65rem;
            font-weight: 200;
            text-transform: uppercase;
        }

        .registration__section form div input[type="text"],
        .registration__section form div input[type="email"],
        .registration__section form div input[type="number"] {
            border: 0;
            outline: 0;
            font-size: 1.7rem;
            padding: 1rem 0.6rem;
            border-radius: 3px;
            font-family: "Roboto", sans-serif;
        }

        .registration__section form div input[type="radio"] {
            margin: 0.85rem;
        }

        .radio-container {
            flex-direction: row;
            margin: 1.8rem 0;
        }

        .radio-container p {
            font-size: 1.75rem;
            color: #ffffff;
            margin-bottom: 0.4rem;
        }

        .upload-status {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
        }

        .upload-status button {
            background-color: #5800ff;
            color: #ffffff;
            font-family: "Roboto", sans-serif;
            border: 0;
            outline: 0;
            padding: 1rem 2.5rem;
            margin: 1rem 0;
            font-size: 1.65rem;
            text-transform: uppercase;
            font-weight: 500;
            transition: all 0.2 ease;
            border-radius: 4px;
        }

        .upload-status button:hover {
            cursor: pointer;
            background-color: #3800ff;
        }

        .upload__id--btn {
            background-color: #5800ff;
            color: whitesmoke;
            font-family: "Roboto", sans-serif;
            border: 0;
            outline: 0;
            padding: 1rem 2.5rem;
            margin: 1rem 0;
            font-size: 1.65rem;
            text-transform: uppercase;
            font-weight: 500;
            transition: all 0.2 ease;
            border-radius: 4px;
        }

        h3 {
            font-size: 2em;
            color: whitesmoke;
        }

        .upload-status p {
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            margin: 2rem 0;
            padding: 2rem 0;
            color: #ffffff;
            width: 70%;
            font-size: 1.55rem;
        }

        .form__submit--btn {
            width: 100%;
            background-color: #d78c47;
            color: #ffffff;
            border: 0;
            outline: 0;
            padding: 1.2rem 0;
            font-size: 1.75rem;
            text-transform: uppercase;
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            letter-spacing: 1px;
            border-radius: 3px;
            transition: all 0.25s ease;
            border-radius: 1.5rem;
        }

        .form__submit--btn:hover {
            cursor: pointer;
            background-color: #d66c11;
        }

        .footer__section {
            background-color: #000000;
            height: 15vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 1.65rem;
        }

        @media only screen and (max-width: 75em) {
            html {
                font-size: 58%;
            }
        }

        @media only screen and (max-width: 62.5em) {
            html {
                font-size: 55%;
            }
            .cta__header--letter {
                font-size: 12rem;
            }
            .gallery__section img {
                width: 85%;
            }
        }


        /* 800px */

        @media only screen and (max-width: 50em) {
            html {
                font-size: 50%;
            }
            .cta__header--letter {
                font-size: 10rem;
            }
            .gallery__section {
                flex-direction: column;
            }
            .gallery__section img {
                margin: 1rem 0;
            }
            .partners__section {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                /*
                align-content: center;
            align-items: center;
            justify-content: center;
                */
                justify-items: center;
                grid-row-gap: 6rem;
            }
        }

        @media only screen and (max-width: 43.75em) {
            html {
                font-size: 52%;
            }
            .cta__header--letter {
                font-size: 8rem;
            }
            .registration__section form {
                width: 90%;
            }
            .middle__banner {
                width: 85%;
            }
            .middle__banner--image img {
                width: 20rem;
            }
            .cta__header--letter:nth-child(even) {
                transform: translateY(-2rem);
            }
            .cta__header--letter:nth-child(odd) {
                transform: translateY(0.45rem);
            }
        }


        /* 600px */

        @media only screen and (max-width: 37.5em) {
            html {
                font-size: 48%;
            }
            .cta__header--letter {
                font-size: 6rem;
            }
        }


        /* 500px */

        @media only screen and (max-width: 31.25em) {
            html {
                font-size: 44%;
            }
            /* .cta__header--letter {
            font-size: 4rem;
        } */
        }


        /* 400px */

        @media only screen and (max-width: 25em) {
            html {
                font-size: 40%;
            }
        }
    </style>
    <title>Neerathon</title>
</head>

<body>
    <main class="main__section">
        <header class="header__section">
            <nav class="header__navigation--container">
                <div class="navigation__image--container">
                    <img src="./image/logo.png" class="navigation__image" alt="Neerathon Logo" />
                    <div>
                        <span>ORGANISED BY WAAC</span>
                        <span>ST. JOSEPH'S COLLEGE</span>
                        <span>(AUTONOMOUS)</span>
                    </div>
                </div>
                <div class="navigation__button--container">
                    <button class="navigation__button">BE A PARTICIPANT</button>
                </div>
            </nav>

            <section class="cta__section">
                <div class="cta__image--container">
                    <img src="./image/runner.png" alt="Home hero image" class="cta__image" />
                </div>
                <div class="cta__header--container">
                    <h1 class="cta__header--letter">N</h1>
                    <h1 class="cta__header--letter">E</h1>
                    <h1 class="cta__header--letter">E</h1>
                    <h1 class="cta__header--letter">R</h1>
                    <h1 class="cta__header--letter">A</h1>
                    <h1 class="cta__header--letter">T</h1>
                    <h1 class="cta__header--letter">H</h1>
                    <h1 class="cta__header--letter">O</h1>
                    <h1 class="cta__header--letter">N</h1>
                </div>
            </section>
        </header>

        <section class="partners__section">
            <img src="./brands/Adobe.png" alt="Partner - Adobe" class="partners__img partners__adobe" />
            <img src="./brands/Google.png" alt="Partner - Google" class="partners__img partners__google" />
            <img src="./brands/Invision.png" alt="Partner - Invision" class="partners__img partners__invision" />
            <img src="./brands/Rakuten.png" alt="Partner - Rakuten" class="partners__img partners__rakuten" />
            <img src="./brands/Stripe.png" alt="Partner - Stripe" class="partners__img partners__stripe" />
            <img src="./brands/Zendesk.png" alt="Partner - Zendesk" class="partners__img partners__zendesk" />
        </section>

        <section class="about__section">
            <h2 class="header2__header">About our cause</h2>
            <p class="about__content">
                Every year, WACC – a student association of St. Joseph’s College (Autonomous), Bengaluru organises a run to raise awareness about water conservation called “Neerathon”. They raise funds to provide better drinking water facilities in rural as well as urban
                areas of the state. Wildlife Awareness and Conservation Club through Neerathon 5.0 aims to promote and advocate water conservation which is a prevalent issue in Bangalore, and in different parts of Karnataka. It brings a change by breaking
                the loop of ignorance towards saving the planet. After 4 years of successful Neerathons, Neerathon 5.0 and their enthusiasts this year aim to focus on conservation as well as other issues such as climate change, global warming, and pollution
                which are major concerns throughout the world. We aim to create awareness,and aim to create change.
            </p>
            <button class="navigation__button">BE A PARTICIPANT</button>
        </section>

        <section class="banner__section"></section>

        <section class="features__section">
            <h2 class="header2__header">It's gonna be huge!</h2>
            <p class="about__content">
                We're welcoming the student in St. Joseph's with a huge event and opportunities to meet new people and discover experiences.
            </p>
        </section>

        <section class="features__list">
            <div class="feature__item">
                <h3>2</h3>
                <h4>Days</h4>
            </div>
            <div class="feature__item">
                <h3>300+</h3>
                <h4>Students</h4>
            </div>
            <div class="feature__item">
                <h3>1</h3>
                <h4>Chance</h4>
            </div>
        </section>

        <section class="middle__banner">
            <div class="middle__banner--image">
                <img src="./image/brace.png" alt="Banner Rings Image" />
            </div>
            <div class="middle__banner--content">
                <h3>GET THE MOST OUT OF YOUR MEMBERSHIP</h3>
                <p>
                    Get entry to The Official NEERATHON 2021 for just ₹300 and yourself a NEERATHON 2021 wristband!
                </p>
            </div>
        </section>

        <section class="gallery__section">
            <div class="gallery__image">
                <img src="./image/1.png" alt="Gallery Image" />
            </div>
            <div class="gallery__image">
                <img src="./image/2.png" alt="Gallery Image" />
            </div>
        </section>

        <section class="registration__section">
            <h2 class="header2__header">Registration form</h2>

            <form action="./connect.php" method="POST">
                <div class="input-container">
                    <label for="full-name">Full Name *</label>
                    <input type="text" class="form-input" name="fullName" required/>
                </div>

                <div class="input-container">
                    <label for="email">Email *</label>
                    <input type="email" class="form-input" name="email" required/>
                </div>

                <div class="input-container">
                    <label for="number">Phone Number *</label>
                    <input type="number" class="form-input" name="phno" required/>
                </div>

                <div class="radio-container">
                    <p>Are you a Josephite?</p>
                    <div>
                        <input type="radio" name="Josephite" value="Yes" />
                        <label for="josephite-yes">Yes</label>
                    </div>
                    <div>
                        <input type="radio" name="Josephite" value="No" />
                        <label for="josephite-no">No</label>
                    </div>
                </div>

                <div class="radio-container">
                    <p>Select your event</p>
                    <div>
                        <input type="radio" id="first-event" name="S_Event" value="2 KM - Rs 200" />
                        <label for="first-event">3 KM - Rs 200</label>
                    </div>

                    <div>
                        <input type="radio" id="second-event" name="S_Event" value="5 KM - Rs 300" />
                        <label for="second-event">5 KM - Rs 300</label>
                    </div>
                    <div>
                        <input type="radio" id="second-event" name="S_Event" value="5 KM - Rs 300" />
                        <label for="second-event">10 KM - Rs 450</label>
                    </div>
                </div>  

                <div class="upload-status">
                    <input name="myImage" class="upload__id--btn" type="file" > 
                    <h3>
                        (Upload ID Card)
                    </h3>
                    </input> <br> <br>
                    <input name="payment" class="upload__id--btn" type="file" > 
                    <h3>
                        (Upload Payment) 
                    </h3>
                    </input>
                    
                    <p>
                        Once the form is submitted, payment and student ID will be verified and a confirmation mail will be sent to the given Email ID
                     <br> <br>
                    
                        By Registering, you agree to you <a href="./terms.php" class="termsandC" target="_blank"> Terms and Conditions</a>.
                    </p>
                </div>
                <button type="submit" name="submit" class="form__submit--btn">Submit Form</button>
            </form>
        </section>

        <footer class="footer__section">
            <p>&copy; Neerathon 2022. All rights reserved.</p>
        </footer>
    </main>
</body>

</html>