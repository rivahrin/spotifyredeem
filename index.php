<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Spotify upgrades">
    <title>Spotify upgrades - Upgrade your account</title>
    <link rel="icon" href="./img/favicon.png" type="image/png">
    <link rel="stylesheet" href="./vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/custom.css?v=6">
</head>
<section style="margin-top: 25px;">
    <div class="container">
        <div class="section-intro text-center">
            <h2 class="section-intro__title">Upgrading your account</h2>
            <p><b>Step 1 )</b> Order your key and check your email for the confirmation email of your order.</p>
            <p><b>Step 2 )</b> Grab your purchased goods key from that email.</p>
            <p><b>Step 3 )</b> Paste in the key, choose your desired country and press <b>upgrade</b>.</p>
            <p><b>Step 4 )</b> Copy the address send to you under the upgrade button and click the invite link.</p>
            <p><b>Step 5 )</b> Pick manual address after clicking the link and paste in the address.</p><br>

            <h2 class="section-intro__title">Redeem your key</h2>
            <label for="key"><b>Key</b></label>
            <input id="key" class="form-control" type="text" name="key" placeholder="xxxx-xxxx-xxxx-xxxx-xxxx"><br>

            <label for="country"><b>Country</b></label>
            <select id="country" name="country" class="form-control">
            </select><br>

            <button id="redeem" class="button button-light">Upgrade</button>
            <div style="padding-top: 15px;" id="result_text"></div>
            <div id="result_link"></div>
            <div id="result_address"></div>

            <h2 style="padding-top: 50px;" class="section-intro__title">Check here if your key is eligible for a replacement</h2>

            <input id="replacekey" class="form-control" type="text" placeholder="xxxx-xxxx-xxxx-xxxx-xxxx" name="key"><br>

            <button id="replaceButton" class="button button-light">Replace</button>

            <div style="padding-top: 15px;" id="result_text_replace"></div>
            <div id="result_link_replace"></div>
            <div id="result_address_replace"></div>

            <h2 style="padding-top: 50px;" class="section-intro__title">View your key information</h2>
            <label for="lookup_key"><b>Key</b></label>
            <input id="lookup_key" class="form-control" type="text" name="lookup_key" placeholder="xxxx-xxxx-xxxx-xxxx-xxxx"><br>
            <button id="lookup" class="button button-light">View</button>

            <div style="padding-top: 15px;" id="result_text_info"></div>
            <div id="result_link_info"></div>
            <div id="result_address_info"></div>
            <br>
        </div>
    </div>
</section>
<script src="./vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="./vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="./js/jquery.ajaxchimp.min.js"></script>
<script src="./js/main.js"></script>
<script src="./js/blank-redeem.js?v=9"></script>
<script src="./js/blank-info.js?v=5"></script>
<script src="./js/blank-replace.js?v=5"></script>