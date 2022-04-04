<x-guest-layout>
    @push('style')
        <style>

            body {
                margin: 0;
                font-family: Georgia, serif;
                background-color: #F7F9EE;
            }

            .fieldsetformat{
                width: 900px;
                padding-top: 30px;
                padding-left: 50px;
                padding-bottom: 40px;
                padding-right: 50px;
                margin-left: 200px;
                background-color: #F3E1C7;
                border-radius: 5px;
                border-color: #F5DEBE;
            }
            .fieldsetformat2{
                width: 900px;
                padding-top: 30px;
                padding-left: 50px;
                padding-bottom: 40px;
                padding-right: 50px;
                margin-left: 200px;
                background-color: #D4E8EF;
                border-radius: 5px;
                border-color: #D4E8EF;
                border-style: none;
            }

            .box{
                width: 400px;
                padding: 15px;
                margin: 5px 0 2px 0;
                border: none;
                background: #f1f1f1;
                border-radius: 10px;
            }
            .box2{
                width: 850px;
                padding: 15px;
                margin: 5px 0 2px 0;
                border: none;
                background: #f1f1f1;
                border-radius: 10px;
            }

            .submitbtn {
                background-color: #DAA520;
                color: white;
                padding: 16px 20px;
                margin: 8px 0;
                cursor: pointer;
                width: 100px;
                font-weight: bold;
                border-radius: 10px;
            }
            .submitbtn:hover {
                background-color: #EAC770;
                color: black;
                padding: 16px 20px;
                margin: 8px 0;
                cursor: pointer;
                width: 100px;
                font-weight: bold;
                border-radius: 10px;
            }

            .space{
                padding-left: 20px;
            }
            .title1{
                color: #000000;
            }
            .title2{
                color: #040960;
            }
            .title3{
                margin-left: 250px;
            }
            .content1_secondtxt{
                margin-left: 250px;
                line-height: 25px;
            }
            .content1_firsttxt{
                font-size: 18px;
            }

        </style>
    @endpush()

    <div class="topnav">
        <div>
            <!----------------content1-------------------------->
            <div>
                <br>
                <div>
                    <h2 class="title1" align="center">Service Promise</h2>
                </div>
                <div align="center" class="content1_firsttxt">We want everything to be right and that you are happy. If something hasn’t quite gone to plan, let us know.</div>
                <br><br><br><br>
                <div class="content1_secondtxt"><h4>Our promise to you:</h4></div>
                <div class="content1_secondtxt">
                    <ul type="disc">
                        <li>We welcome the chance to put things right</li>
                        <li>We promise to listen and to do our best to resolve with you</li>
                        <li>Our customer care team will look after you, with a named Care Executive assigned to liaise with you until it is resolved</li>
                        <li>We will acknowledge your concern immediately</li>
                        <li>We will investigate and aim to provide you with a full response within two working days.<br> Where further investigation is required this may take a little longer and we will keep you updated throughout</li>
                        <li>What we learn from concerns shared with us will be reviewed for our future ways of working</li>
                    </ul>
                </div>
                <br><br>
                <div align="center" style="line-height: 25px;">
                    Telephone: 0330 333 3303 <br>
                    Opening hours: 7am – 8pm Monday-Friday / 9am – 5pm Saturday and Sunday
                </div>
                <br><br><br>
            </div>
            <!--------------------------content 2 - form ------------------------>
            <div >
                <form action="/php_page.php" name="myForm" onSubmit="return validateForm()" method="post">
                    <fieldset class="fieldsetformat">


                        <h2 class="title1">Contact Us</h2>
                        <br>
                        <table border="0">
                            <tr height="70px">
                                <td colspan="2" width="850px">
                                    <label for="cars"><b>My enquiry is about :</b></label>
                                    <select name="query" id="query" placeholder="Select One" class="box">
                                        <option value="product Query">product Query</option>
                                        <option value="Order Query">Order Query</option>
                                        <option value="Refund Query">Refund Query</option>
                                        <option value="Return Query">Return Query</option>
                                        <option value="Repair Query">Repair Query</option>
                                        <option value="Complaint Query">Complaint Query</option>
                                        <option value="Service Query">Service Query</option>
                                        <option value="Technical/web Query">Technical/web Query</option>
                                        <option value="Trade Creadit enquiry">Trade Creadit enquiry</option>
                                        <option value="Cancel Order">Cancel Order</option>
                                        <option value="Other Query">Other Query</option>
                                    </select>
                                </td>
                            </tr>
                            <tr height="90px">
                                <td colspan="2" >
                                    <label for="fname"><b>Full name:</b></label><br>
                                    <input type="text" id="fname" name="fname" placeholder="Enter Your Full Name*" class="box2">
                                </td>
                            </tr>
                            <tr height="90px">
                                <td width="425px">
                                    <label for="email"><b>Email:</b></label><br>
                                    <input type="email" id="email" name="email" placeholder="Enter Valid  Email Here*" class="box">
                                </td>
                                <td class="space">
                                    <label for="Telephone" ><b>Telephone:</b></label><br>
                                    <input type="number" id="Telephone" name="Telephone" placeholder="Enter Your Telephone Number*" class="box">
                                </td>
                            </tr>
                            <tr height="90px">
                                <td >
                                    <label for="address"><b>Address:</b></label><br>
                                    <input type="text" id="address" name="address" placeholder="Enter Your Address*" class="box">
                                </td>
                                <td class="space">
                                    <label for="postcode"><b>Post Code:</b></label><br>
                                    <input type="number" id="postcode" name="postcode" placeholder="Enter Your Post Code *" class="box">
                                </td>
                            </tr>
                            <tr height="90px">
                                <td colspan="2">
                                    <label for="OrderNumber"><b>Order Number:</b></label><br>
                                    <input type="text" id="OrderNumber" name="OrderNumber" placeholder="Enter Your Order Number " class="box2">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <label for="message"><b>Your Message:</b></label><br>
                                    <textarea rows="4" cols="50" name="comment" class="box2" ></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="left">
                                    <input type="submit" value="Submit" align="center" class="submitbtn">
                                </td>
                            </tr>
                        </table>

                    </fieldset>
                </form>

            </div>
            <!---------------content 3 ---------------------------->
            <br><br><br><br><br>


            <div>
                <fieldset class="fieldsetformat2">
                    <div><h2 class="title2">Experiencing any troubles in our site?</h2></div>
                    <div>If you are experiencing any problems we may help to solve the problem.  Please do contact us on the form above.
                    </div>
                </fieldset>
            </div>
            <br><br><br>
        </div>


    </div>

@push('script')
            <script>
                function validateForm() {
                    var x = document.forms["myForm"]["fname"].value;
                    var y = document.forms["myForm"]["lname"].value;
                    var z = document.forms["myForm"]["email"].value;

                    if (x == "" ||y == "" ||z == ""){
                        alert("All First Name , Last Name and Email must be filled out");
                        return false;
                    }

                }
            </script>
        @endpush

</x-guest-layout>
