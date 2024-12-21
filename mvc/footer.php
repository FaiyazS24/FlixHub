<style>
    /*Footer styles*/
    footer{
    background: #202222;
    margin: 20px 0px 0px 0px;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 15px;
    padding-bottom: 10px;
}

.footer1, .footer2{
    display: block;
    color: white;
}

#button_signin{
    width: 150%;
    height: 50px;
    font-size: 20px;
    font-weight: bolder;
    background-color: orange;
    border-radius: 0.07in;
}

#button_signin > a{
    text-decoration: none;
    color: black;
}

#button_signin:hover{
    background-color: rgb(236, 166, 73);
}
#icons{
    padding-left: 50px;
}

.footer3{
    margin-left: 40px;
}

.footer3 #icons{
    font-size: 18px;
    margin-right: 20px;
    color: white;
}

.footer3 #copyright{
    margin-left: 272px;
    font-size: 12px;
    color: white;
}
</style>

 <!--Footer starts-->
<footer>

        <div class="footer1">
            <button type="button" id="button_signin" ><a href="login.php">Sign In for more</a></button>
        </div>
        <div class="footer2">
            <a id="icons"><img src="views/icons8-facebook-100.png"></a>
            <a id="icons"><img src="views/icons8-instagram-100.png"></i></a>
            <a id="icons"><img src="views/icons8-twitter-100.png"></i></a>
            <a id="icons"><img src="views/icons8-youtube-100.png"></i></a>
        </div>
        <div class="footer3">
            <a id="icons" href="">Help</a>
            <a id="icons" href="">Privacy Policy</a>
            <a id="icons" href="">Get Our App</a>
            <a id="icons" href="">Conditions of Use</a></br></br>
            <a id="copyright">© 2023 by FlixHub.com, Inc.</a>
        </div>

    </footer>
<!--Footer ends-->
</body>
</html>  