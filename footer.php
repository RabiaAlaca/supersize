<!-- Footer -->


<footer class="w3-row-padding w3-padding-32 w3-light-gray">
    <div class="w3-third" style=" text-align: center;  ">
        <h4 style="font-family: monospace;">BLOG POSTS</h4>
        <ul class="w3-ul w3-hoverable">
            <li class="w3-padding-16">
                <img src="./w3images/symbol.jpg" class="w3-left w3-margin-right" style="width:50px">
                <span class="w3-large">Tricks</span><br>
                <span>What is better for you?</span>
            </li>
            <li class="w3-padding-16">
                <img src="../w3images/symbol2.jpg" class="w3-left w3-margin-right" style="width:50px">
                <span class="w3-large">Healt</span><br>
                <span>Life with Sport</span>
            </li>
        </ul>
    </div>

    <div class="w3-third w3-serif w3-center">
        <h4 style="font-family: monospace;">POPULAR TAGS</h4>
        <p>
            <span class="w3-tag w3-black w3-margin-bottom">Energie</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Vienna</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dinner</span>
            <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fit</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Österreich</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Drinks</span>
            <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Jogging</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cuisine</span>
            <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Pants</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Sport</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fried</span>
            <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Pullover</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Womenwear</span>
        </p>
    </div>

    <div class="newsletter  clearfix">
        <h3>SIGN UP TO SAVE 10%</h3>
        <p>Save 10% off your first order and be the first to know about new releases and member-only discounts.</p>

        <p class="message"></p>
        <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form">
            <input type="hidden" name="form_type" value="customer" />
            <input type="hidden" name="utf8" value="✓" />
            <input type="hidden" name="contact[tags]" value="newsletter"/>


            <input type="hidden" name="challenge" value="false">
            <input type="email" class="contact_email" name="contact[email]" required placeholder="Enter your email address..." autocorrect="off" autocapitalize="off" />
            <input type='submit' class="action_button sign_up" value="Sign Up" />
        </form>
    </div>

</footer>

<script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script>

</body>
</html>

