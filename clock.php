<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Digital Clock with Weather</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #282c34;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .clock {
            font-size: 48px;
            font-weight: bold;
            background-color: #3b3b3b;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            text-align: center;
            margin-bottom: 20px;
        }

        .weather {
            font-size: 24px;
            font-weight: normal;
            background-color: #4a4a4a;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="clock" id="clock"></div>
    <div class="weather" id="weather">Loading weather...</div> <!-- Weather info will be updated -->

    <script>
        function updateClock() {
            // Get the current time
            const now = new Date();
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();

            // Determine AM or PM
            const ampm = hours >= 12 ? 'PM' : 'AM';

            // Convert to 12-hour format
            hours = hours % 12;
            hours = hours ? hours : 12; // If hour is 0, set it to 12

            // Format time as HH:MM:SS AM/PM
            let formattedTime = 
                String(hours).padStart(2, '0') + ':' + 
                String(minutes).padStart(2, '0') + ':' + 
                String(seconds).padStart(2, '0') + ' ' + ampm;

            // Display the updated time
            document.getElementById('clock').textContent = formattedTime;
        }

        function fetchWeather() {
            const apiKey = '10228fc4157d9c40449e7a6bf0977bc9'; // Your OpenWeatherMap API key
            const city = 'London'; // Replace with your desired city
            const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${apiKey}`;

            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    const temperature = data.main.temp;
                    const weatherDescription = data.weather[0].description;
                    const weatherText = `${weatherDescription.charAt(0).toUpperCase() + weatherDescription.slice(1)}, ${temperature}°C`;

                    // Display the weather information
                    document.getElementById('weather').textContent = weatherText;
                })
                .catch(error => {
                    console.error('Error fetching weather data:', error);
                    document.getElementById('weather').textContent = 'Unable to load weather data';
                });
        }

        // Update the clock immediately and then every second
        updateClock();
        setInterval(updateClock, 1000);

        // Fetch the weather immediately and then every 10 minutes
        fetchWeather();
        setInterval(fetchWeather, 600000); // 600000 ms = 10 minutes
    </script>
</body>
</html>
