<script>
    $('footer .container-trad').click(function () {
        if ($('footer .container-trad').hasClass('open')) {
            $('footer .container-trad').removeClass('open');
            setTimeout(function () {
                $('footer .container-trad .dropdown').hide;
            }, 250);
        } else {
            $('footer .container-trad .dropdown').show();
            setTimeout(function () {
                $('footer .container-trad').addClass('open');
            }, 50);
        }

    })
</script>

<div id="cookie-banner">
    <div class="container">
        <div class="container-text">
            <p>
                By browsing this website, you accept the use of cookies 🍪, as they help us optimise your experience. <a target="_blank" href="https://support.collab.eu/hc/fr/articles/115001655229-Politique-d-Utilisation-des-Cookies">Learn more</a>
            </p>
            <button class="btn-primary close">OK</button>
        </div>
    </div>
</div>