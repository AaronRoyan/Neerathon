<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./image/icon.png">
    <link rel="stylesheet" type="text/css" href="./successfully.css">
    <title>Success!</title>
</head>

<body>
    <div class="container-720 thestuff">
        <div class="heading" style="background: #5cb85c;display:flex; align-items: center;justify-content: space-between;margin-left:-20px;margin-right: -20px;box-shadow: 0 5px 10px -5px green;padding-left: 30px;padding-right:30px;">
            <h1 style="line-height: 50px;padding-left: 10px;color:white">Registration Successfull</h1>
        </div>
        <main style="padding: 10px;">

            <p><?php 
                echo("Hello,");
                ?>
            </p>
            <p>
                You have successfully registered for <b>Neerathon.</b><br> Your partcipant id is
            <h3 style="margin-left: 50px"><b>NA-001234</b></h3> 
            <h4>Please check your Registered Mail for a <u>Confirmation Email</u><br> If not Contact the number given below:</h4>
            </p>

            <p><i>
                    Kindly note that your registration is complete and that no RE-FUND will be granted.
                    The Event is on the day 18/04/2021, you need to do show the payment on the day of Neerathon.
                    We urge you to be present if possbile.
                </i></p>

            <!-- <p>
                <a href="https://techfest.org/" target="_blank" style="background: #f77b00;text-decoration: none;color: white;font-weight: 700;padding: 20px;min-width: 220px;display: inline-block;text-align: center;border-radius: 8px;box-shadow: 0 5px 5px -3px rgba(247, 123, 0, 0.6588235294117647);font-size: 1.4em;">
                    Pay Now
                </a>
            </p> -->
            <p>By registering you will also become eligible for availing the goodies given during the Event.<br>Once the payment is done, <a href="./custom-index.php">click here</a> to go to home screen.</p>
        </main>
        <footer style="padding:20px 10px 20px 10px;font-size: 0.9em;border-top:2px double #1f3f1f;">
            <p>
                If you have any querries related to Neerathon, feel free to contact the Team at <a href="">+91 696796969</a>
            </p>
            <p>
                <i>
                    For more information related to Neerathon, you can visit other websites <a href="https://www.google.com/search?q=neerathon&sxsrf=AOaemvJTR3DeTD9O6dCDF7EjB8s0m7xWPQ%3A1641584306933&source=hp&ei=spbYYYbLM-SSseMPq8eXyAc&iflsig=ALs-wAMAAAAAYdikwqQKDrPcrh42ZWtIT8R7h3zhGEv0&ved=0ahUKEwiG7OmLsqD1AhVkSWwGHavjBXkQ4dUDCAg&uact=5&oq=neerathon&gs_lcp=Cgdnd3Mtd2l6EAMyBQgAEIAEMgUIABCABDICCCY6BAgjECc6EQguEIAEELEDEIMBEMcBENEDOgsIABCABBCxAxCDAToICAAQgAQQsQM6CwguEIAEEMcBENEDOggIABCxAxCDAToKCAAQgAQQhwIQFDoICC4QgAQQsQM6BwgAEIAEEAo6BQguEIAEOgQIABAeOgYIABAKEB5QAFivG2CgHmgBcAB4AIAB5QKIAfsOkgEHMy4zLjEuM5gBAKABAQ&sclient=gws-wiz">Neerathon</a> <br>
                    For latest updates, you can follow us at our social media platforms: <a href="https://www.facebook.com/neerathon/">Facebook</a>,<a href="https://photogallery.indiatimes.com/events/bangalore/neerathon/articleshow/62616279.cms">Times of India</a>, <a href="https://www.instagram.com/neerathon/?hl=en">Instagram</a>
                </i>
            </p>
        </footer>
    </div>
</body>

</html>