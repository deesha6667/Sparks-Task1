<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SPARKS BANKING SYSTEM</title> 
        <link rel="stylesheet" href="styled.css">
    </head>

    <body style="margin: 0;">
        <div class="full" style="background-image:linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) ,url(background.jpg);">
            <header  class="header">
                <nav id="navbar">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="contact.php">Contact Us</a>
                </nav>
            </header>
            <main id="main">
                <section class="sec" id="home">
                    <h1>WELCOME TO THE ONLINE BANKING SYSTEM</h1>
                    <i>Start transferring your money in smarter way.</i>
                </section>
            </main>
        </div>
        <section class="About" id="about">
            <h1 style="text-align: center;">ABOUT</h1>

        <table style="text-align: center; margin-left: auto; margin-right: auto;"> 
            <tr>
                <td>
                    <div class="info">
                        <a href="transactionhistory.php">
                        <img class="img" src="transactions.jpg"></a>
                        <h3 class="caption" style="color: black"><b>Transactions</b></h3>
                    </div>
                </td>
                <td>
                    <div class="info">
                    <a href="transfermoney.php">
                        <img class="img" src="transfermoney.JPG" alt=""></a>
                        <h3 class="caption" style="color: black"><b>Transfer Money</b></h3>
                    </div>
                </td>
                <td>
                    <div class="info">
                    <a href="bankservices.php">
                        <img class="img" src="about.JPG" alt=""></a>
                        <h3 class="caption" style="color: black"><b>Bank Services</b></h3>
                    </div>
                </td>
            </tr>
            </table>
        </section>

        <footer class="footer" style="background-color: lightgrey;">

			<div class="footer-left">

				<p style="text-align: center;">&copy 2021. Made by <b>Deesha Bhanushali</b> <br> 
                For the Project of  <b>The Sparks Foundation</b></p>
			</div>
        </footer>
    </body>
</html>