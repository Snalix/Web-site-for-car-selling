<?php
require_once "navigation.php";
?>
    <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
    <script>
        function showTime(){
            var date = new Date();
            var h = date.getHours();
            var m = date.getMinutes();
            var s = date.getSeconds();
            var session = "AM";

            if(h === 0){
                h = 12;
            }

            if(h > 12){
                h = h - 12;
                session = "PM";
            }

            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;

            var time = h + ":" + m + ":" + s + " " + session;
            document.getElementById("MyClockDisplay").innerText = time;
            document.getElementById("MyClockDisplay").textContent = time;

            setTimeout(showTime, 1000);

        }

        showTime();
    </script>


    <style>

        body{
            background-color: #f2cf43;
            background-image: linear-gradient(315deg, #f2cf43 0%, #19a186 74%);
            background-repeat: repeat;
        }

        .clock {
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            color: black;
            font-size: 60px;
            font-family: Orbitron, serif;
            letter-spacing: 7px;
            border: 4px dashed black;
            margin-top:400px;
            padding:20px;
            position: relative;
            justify-content: center;
            align-items: center;
            display: flex;
            width: 50%;
            top:-200px;
        }
    </style>
<?php
require_once "footer.php";
?>