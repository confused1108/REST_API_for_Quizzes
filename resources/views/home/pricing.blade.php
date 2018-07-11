<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 29-Jun-18
 * Time: 9:09 PM
 */
?>
        <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>

    <link rel="stylesheet" href="{{URL::asset('assets/price/css/master.css')}}" media="screen">
    <link rel="stylesheet" href="{{URL::asset('assets/price/css/reset.css')}}" media="screen">

    <script type="text/javascript" src="{{URL::asset('assets/price/js/css-browser-select.js')}}"></script>

    <title>Pricing table</title>
</head>
<body>

<div id="pageContainer">

    <div id="tableContainer">

        <div class="tableCell">
            <div class="tableHeading">
                <h2>Basic</h2>

                <div class="price1 priceContainer">
                    <p>500 Rs<sup></sup></p>
                    <span>per month</span>
                </div> <!-- end price1 -->
            </div> <!-- end tableHeading -->
        </div>

        <div class="tableCell">
            <div class="tableHeading">
                <h2>Corporate</h2>

                <div class="price2 priceContainer">
                    <p>1000 Rs<sup></sup></p>
                    <span>per month</span>
                </div> <!-- end price1 -->
            </div> <!-- end tableHeading -->
        </div>

        <div class="tableCell recommended">
            <div class="tableHeading">
                <h2>Business</h2>

                <div class="price3 priceContainer">
                    <p>1500 Rs<sup></sup></p>
                    <span>per month</span>
                </div> <!-- end price1 -->
            </div> <!-- end tableHeading -->
        </div>

        <div class="tableCell noBorder">
            <div class="tableHeading">
                <h2>Platinum</h2>

                <div class="price4 priceContainer">
                    <p>2000 Rs<sup></sup></p>
                    <span>per month</span>
                </div> <!-- end price1 -->
            </div> <!-- end tableHeading -->
        </div>

        <div class="cl"><!-- --></div>

        <table class="pricingTableContent">
            <tr class="signUpRow">
                <td><a href="#" class="signUpButton">Sign Up</a></td>
                <td><a href="#" class="signUpButton">Sign Up</a></td>
                <td class="recommended"><a href="#" class="signUpButton">Sign Up</a></td>
                <td class="noBorder"><a href="#" class="signUpButton">Sign Up</a></td>
            </tr>

            <!-- Table Content -->
            <tr>
                <td><strong>50</strong> Max. number of users</td>
                <td><strong>100</strong> Max. number of users</td>
                <td class="recommended"><strong>200</strong> Max. number of users</td>
                <td class="noBorder"><strong>400</strong> Max. number of users</td>
            </tr>

            <tr class="altRow">
                <td><strong>3 months</strong> Support</td>
                <td><strong>6 months</strong> Support</td>
                <td class="recommended"><strong>1 year</strong> Support</td>
                <td class="noBorder"><strong>2 years</strong> Support</td>
            </tr>

            <tr>
                <td><strong>2</strong> number of admins</td>
                <td><strong>5</strong> number of admins</td>
                <td class="recommended"><strong>10</strong> number of admins</td>
                <td class="noBorder"><strong>20</strong> number of admins</td>
            </tr>

            <tr class="altRow">
                <td>-</td>
                <td>Maintenance Support</td>
                <td class="recommended">Maintenance Support</td>
                <td class="noBorder">Maintenance Support</td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td class="recommended"></td>
                <td class="noBorder"></td>
            </tr>

            <!-- <tr>
                <td>-</td>
                <td>Maintenance Support</td>
                <td class="recommended">Maintenance Support</td>
                <td class="noBorder">Maintenance Support</td>
            </tr>

            <tr class="altRow">
                <td>MySQL Support</td>
                <td>MySQL Support</td>
                <td class="recommended">MySQL Support</td>
                <td class="noBorder">MySQL Support</td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td>PHP5 Support</td>
                <td class="recommended">PHP5 Support</td>
                <td class="noBorder">PHP5 Support</td>
            </tr>

            <tr class="altRow">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td class="recommended">Plesk Control Panel</td>
                <td class="noBorder">Plesk Control Panel</td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td class="recommended">&nbsp;</td>
                <td class="noBorder">Spam Assassin</td>
            </tr> -->

            <!-- Table Footer -->
            <tfoot>
            <tr>
                <td>
                    <h4>500 Rs<sup></sup></h4>
                    <span>per month</span>

                    <a href="#" class="signUpButton">Sign Up</a>
                </td>

                <td>
                    <h4>1000 Rs<sup></sup></h4>
                    <span>per month</span>

                    <a href="#" class="signUpButton">Sign Up</a>
                </td>

                <td class="recommended">
                    <h4>1500 Rs<sup></sup></h4>
                    <span>per month</span>

                    <a href="#" class="signUpButton">Sign Up</a>
                </td>

                <td class="noBorder">
                    <h4>2000 Rs<sup></sup></h4>
                    <span>per month</span>

                    <a href="#" class="signUpButton">Sign Up</a>
                </td>
            </tr>
            </tfoot>
        </table>

    </div> <!-- end tableContainer -->

</div> <!-- end pageContainer -->

</body>
</html>