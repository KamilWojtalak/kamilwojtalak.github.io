<footer>
    <iframe title="Kontakt - Katowice" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2550.5702972668!2d19.014013766924787!3d50.262609314614835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716ce392f080217%3A0xe6066816b95a0e63!2sMickiewicza%2021%2C%2040-085%20Katowice!5e0!3m2!1spl!2spl!4v1588441147344!5m2!1spl!2spl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <div class="footer-bg">
        <div class="content">
            <div class="col">
                <h2>Adres</h2>
                <p>Mickiewicza 21</p>
                <p>40-085 Katowice</p>
            </div>
            <div class="col">
                <h2>Numer telefonu:</h2>
                <p>+48 578 016 964</p>
            </div>
        </div>
    </div>
</footer>
<link rel="stylesheet" href="/css/jquery.bxslider.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&amp;display=swap&amp;subset=latin-ext" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/js/jquery.bxslider.min.js">
</script>
<script>
    $(document).ready(function() {
        $('.bxslider').bxSlider({
            auto: true,
            mode: 'fade',
            responsive: true,
            touchEnabled: false,
        });
        $('#mobile-menu').click(function() {
            $('header nav').toggle();
        });
        $('.dowiedz').click(function() {
            $('html, body').animate({
                    scrollTop: $('#cennik').position().top - 130
                },
                1000
            );
        });
    });
</script>
<script>
    function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace("w3-black", "w3-red");
        } else {
            x.className = x.className.replace(" w3-show", "");
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace("w3-red", "w3-black");
        }
    }
</script>
</body>

</html>