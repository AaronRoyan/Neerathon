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
    <link rel="icon" href="./image/icon.png">
    <link rel="stylesheet" type="text/css" href="./custom-style.css" />
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
                <div class="input-container">
                    <label for="myImage">ID Drive Link *</label>
                    <input type="url" class="form-input" name="myImage" required/>
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
                    <!-- <input name="myImage" class="upload__id--btn" type="file" > 
                    <h3>
                        (Upload ID Card)
                    </h3>
                    </input> <br> <br>
                    <input name="payment" class="upload__id--btn" type="file" > 
                    <h3>
                        (Upload Payment) 
                    </h3>
                    </input> -->
                    
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