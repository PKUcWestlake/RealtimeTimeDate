<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jam Realtime PHP/Javascript</title>
	<style>
		body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 90vh;
            background: #060a1f;
        }
        #clock {
        	background-color: #FFF;
        	padding: 10px;
        	border-radius: 10px;
        	text-align: center;
        }

        #time {
        	display: flex;
        }

        #time div {
            position: relative;
            margin: 0 5px;
            background: #000;
        }

        #time div span {
            width: 100px;
            height: 80px;
            background: #2196f3;
            color: #fff;
            font-weight: 300;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3em;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2);
        }

        #cal {
            position: relative;
            margin: 0 5px;
            background: #000;
        }

        #cal span {
            background: #000;
            color: #fff;
            font-weight: 300;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3em;
        }        
	</style>
</head>
<body>
	<div id="clock">
        <h2>&#11088; Jam Realtime PHP/Javascript &#11088;</h2>
        <div id="time">
            <div>
                <span id="hours">00</span>
            </div>
            <div>
                <span id="minutes">00</span>
            </div>
            <div>
                <span id="seconds">00</span>
            </div>
            <div>
                <span id="amOrpm">AM</span>
            </div>
        </div>

        <div id="cal">
            <span id="fullyear">25 Januari 2021</span>
        </div>
        <h2>&#128187; Kecoak Sakti Official &#128187;</h2>
    </div>
</body>

<script type="text/javascript">
function SettingCurrentTime() {
	var currentTime = new Date();
	var hours = currentTime.getHours();
	var minutes = currentTime.getMinutes();
	var seconds = currentTime.getSeconds();
	var amOrPm = hours < 12 ? "AM" : "PM";

	hours = hours === 0 ? 12 : hours > 12 ? hours - 12 : hours;
	hours = addZero(hours);
	minutes = addZero(minutes);
	seconds = addZero(seconds);

	var currentDate = currentTime.getDate();
	var currentMonth = ConvertMonth(currentTime.getMonth());
	var currentYear = currentTime.getFullYear();
	var fullDateDisplay = `${currentDate} ${currentMonth} ${currentYear}`;

	document.getElementById("hours").innerText = hours;
	document.getElementById("minutes").innerText = minutes;
	document.getElementById("seconds").innerText = seconds;
	document.getElementById("amOrpm").innerText = amOrPm;
	document.getElementById("fullyear").innerText = fullDateDisplay;

	var timer = setTimeout(SettingCurrentTime, 1000);
}

function addZero(component) {
	return component < 10 ? "0" + component : component;
}

function ConvertMonth(component) {
	month_array = new Array('Januari', 'Febuari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');	
	return month_array[component];
}

SettingCurrentTime();

</script>

</html>