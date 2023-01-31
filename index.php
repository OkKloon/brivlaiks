<!DOCTYPE HTML>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        p {
            text-align: center;
            font-size: 60px;
            margin-top: 0px;
        }
    </style>
</head>


<body>
<p id="demo"></p>
<script>
    //one love rv3g


    var countDownDate = <?php echo strtotime('Jun 1, 2023 00:00:00') ?> * 1000;
    var now = <?php echo time() ?> * 1000;

    // Update the count down every 1 second
    var x = setInterval(function() {


        now = now + 1000;

        var distance = countDownDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        var hoursTo = Math.floor((days * 24) + hours + (minutes/60) + (seconds / 3600));
        var minutesTo = Math.floor((days * 24 * 60) + hours * 60 + (minutes) + seconds / 60);
        var secondsTo = Math.floor((days * 24 * 60 * 60) + hours * 60 * 60 + (minutes * 60) + seconds);


        document.getElementById("demo").innerHTML = "Līdz vasaras brīvlaikam ir: <br>" + days + " dienas " + hours + " stundas " +
            minutes + " minūtes " + seconds + " sekundes <br> jeb " + hoursTo + " stundas <br> jeb " + minutesTo + " minūtes <br> jeb " + secondsTo + " sekundes";

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Šobrīd ir vasaras brīvlaiks!";
        }
    }, 1000);
</script>
</body>

</html>