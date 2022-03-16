<?php
session_start();
$sname = "localhost";
$uname = "root";
$password = "";
$db = "test";

$conn = mysqli_connect($sname, $uname, $password, $db);
if (isset($_SESSION['id']) && isset($_SESSION['userName'])) {
    $query = "select * from registration";
    $result = mysqli_query($conn, $query);

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./Welcome.css">
        <script type="text/javascript" href="./Welcome.js"></script>
        <link rel="icon" href="./image/icon.png">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <title>Admin</title>
    </head> 

    <body>
        <div class="hamburger-menu">
            <div class="hamburger"></div>
        </div>
        <navbar class="sliding-navbar">
            <a class="navbar-brand ps-3 guests" href="">Welcome, <?php echo $_SESSION['name']; ?></a>
            <ul class="navbar--items">
                <!-- <li><a class="navbar--item" href="./Welcome.php">Registration</li> <br>
                <li><a class="navbar--item" href="">Item 3</li> <br> -->
                <li><a class="navbar--item" href="./logout.php">Logout</a></li> <br>
            </ul>
        </navbar>
        <div class="mask"></div>

        <section>
            <!--for demo wrap-->
            <h1>Neerathon Entries</h1>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Entries.." title="Type in a name">
            <div class="tbl-header" id="myTable">
                <table id="myTable" cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr class="header">
                            <th >Full Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Josephite</th>
                            <th>Event (KMs)</th>
                            <th>Reg ID</th>
                            <th>ID Card</th>
                        </tr>
                    </thead>    
            
            
                <?php
                while ($rows = mysqli_fetch_assoc($result)) {
                ?>
                    
                        <tr>
                            <td><?php echo $rows['fullName'] ?></td>
                            <td><?php echo $rows['email'] ?></td>
                            <td><?php echo $rows['phoneNumber'] ?></td>
                            <td><?php echo $rows['Josephite'] ?></td>
                            <td><?php echo $rows['S_event'] ?></td>
                            <td><?php echo $rows['id'] ?></td>
                            <td style="word-wrap: break-word"><a href="<?php $rows['myImage'] ?>" target="_blank"><?php echo $rows['myImage'] ?></a></td>

                        </tr>
                    
                <?php
                }
                ?>
                </table>
                </div>
        </section>
        <script>
            function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }       
            }
            }
            // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
            $(window).on("load resize ", function() {
                var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
                $('.tbl-header').css({
                    'padding-right': scrollWidth
                });
            }).resize();
            $(function() {
                $('.hamburger-menu').click(function() {
                    $('.sliding-navbar').toggleClass('sliding-navbar--open');
                    $('.mask').toggleClass('show')
                    $('.hamburger').toggleClass('menu-opened');
                });

                $('.mask').click(function() {
                    $('.sliding-navbar').toggleClass('sliding-navbar--open');
                    $('.mask').removeClass('show');
                    $('.hamburger').toggleClass('menu-opened');
                })
            });
        </script>
    </body>
    </head>

    </html>
<?php
} else {
    header("Location: indexAdminLogin.php");
    exit();
}

?>