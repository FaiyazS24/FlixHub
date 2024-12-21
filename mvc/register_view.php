<style>
/* SignUp page styles*/
div.allinfo{
    display: flex;
    
}

/*Form styles*/
.form{
    
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;
    max-width: 1100px;
    border: greenyellow solid;
    border-radius: 0.2in;
    position: relative;
    padding-top: 20px;
    padding-left: 50px;
    margin-left: 30px;
    margin-top: 10px;
    padding-bottom: 200px;
}


.h3{
    align-items: center;
    display: inline-block;
    color: white;
}
.sign{
    font-size: 22px;
    width: 30%;
    text-align: center;
}
.ben{
    font-size: 22px;
    width: 40%;
    margin-left: 230px;
    margin-bottom: 20px;
    text-align: center;
}
.form .input, .inputmes{
    max-width: 400px;
    padding: 8px;
}
.custinfo{
    display: flex;
    flex-direction: column;
}
.form .inputmes .custinfo{
    width: 50%;
}
.form .custinfo legend{
    color: rgb(255, 206, 116);
    margin-top: 2px;
    margin-bottom: 5px;
    font-size: 1.6em;;
}
.form .custinfo input{
    padding: 13px;
    font-size: 1.0em;
    border: 2px solid black;
    border-radius: 0.08in;
}
.form .custinfo textarea{
    
    font-size: 1.5em;
    width: 160%;
    height: 20vh;
    border-radius: 1.2em;
    padding-top: 10px;
}

.custinfo input[type="submit"]{
    background: #f5edd6;
    color: black;
    border-radius: 0.07in;
    font-size: 1.1em;
    max-width: 180px;
    cursor: pointer;
}

.custinfo input[type="submit"]:hover{
    background-color: rgb(147, 147, 240);
}
.contact{
    width: 35%;
}
form{
    display: flex;
}
.div{
    border: black solid 0.1px;
    margin-left: 100px;
}
.benefit{
    width: 48%;
    margin-left: 40px;
    display: block;
    padding-top: 12px;
    font-size: 25px;
    color: white;
}
.point{
    padding: 0px 40px 40px 0px;
}
.point h4{
    color: rgb(255, 206, 116);
}
.allinfo{
    display: flex;
    justify-content: center;
}
.custinfo input:focus{
    background-color: rgb(255, 255, 180);
}

/*User input validation*/
.custinfo input#custEmail:focus:valid,
.custinfo input#custfName:focus:valid,
.custinfo input#custlName:focus:valid{
   background: rgb(220, 255, 220) right/contain no-repeat;
}
.custinfo input#custEmail:focus:invalid,
.custinfo input#custfName:focus:invalid,
.custinfo input#custlName:focus:invalid{
   background: rgb(255, 230, 230) right/contain no-repeat;
}

/* SignUp page styles End*/
</style>

    <!--SignUp page content-->
    <div class="allinfo">
            
        
        <div class="form">
            <div class="heads">
                <div class="h3 sign">
                    <h3>Sign Up</h3>
                </div>
                <div class="h3 ben">
                    <h3>Benefits of your free MVDR account</h3>
                </div>
            </div>
            
            <!--SignUp page Form-->
            <form action = "register.php" name="myform" method="post">
            <div class="contact">
                
            <div class="input">
            <div class="custinfo">
                <legend><b>First Name*</b></legend>
                <input id="custfName2" name="custfName" type="text" placeholder="first name" maxlength="20" required>
            
            </div>
            
            <div class="custinfo">
                <legend><b>Last Name*</b></legend>
                <input id="custlName2" name="custlName" type="text" placeholder="last name" maxlength="20" required>
            
            </div>
            </div>
            
            <div class="input">
                <div class="custinfo">
                    <legend><b>Email*</b></legend>
                    <input id="custEmail2"name="custEmail" type="email" placeholder="xyz@gmail.com" required>
                </div>
                
                 <div class="custinfo">
                    <legend>Confirm Email*</legend>
                    <input id="custconEmail" name="custEmail" type="email" placeholder="xyz@gmail.com" required>
                </div>
            
            </div>
                
            <div class="input">
                <div class="custinfo">
                    <legend><b>Password*</b></legend>
                    <input id="custpass"name="custpass" type="password" required>
                </div>
                
                 <div class="custinfo">
                    <legend>Confirm Password*</legend>
                    <input id="custconpass"name="custconpass" type="password" required>
                </div>
            
            </div>
             
             <div class="inputmes">
                 <div class="custinfo">
                     <input type="submit" name="register" id="signupbtn" value="Sign Up">
                 </div>
             </div>
            
            </div>

            <!--SignUp page form End-->

            <!--SignUp page benefits-->
            <div style="display: flex;">
                <div class="div"></div>
            </div>

            
            <div class="benefit">

                <div class="point">
                    <h4>Personalized Recommendations</h4>
                    <p>Discover shows you'll love.</p>
                </div>

                <div class="point">
                    <h4>Your Ratings</h4>
                    <p>Rate and remember everything you've seen.</p>
                </div>

                <div class="point">
                    <h4>Contribute to MVDR</h4>
                    <p>Add data that will be seen by millions of people and get cool badges.</p>
                </div>
            </div>
            <!--SignUp page benefits End-->
            </form>              
        </div>
    </div>
    <!--SignUp page content End-->
