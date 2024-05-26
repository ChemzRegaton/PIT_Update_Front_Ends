<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif; 
            background-color: #f0f0f0;
            background-image: url('C:/xampp/htdocs/SIAPIT_Group3-main/resources/siteBackgrounds/weather.jpg'); /* Replace 'path_to_your_image.jpg' with the actual path to your image */
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #ffffff;
        }

        .container {
            max-width: 800px;
            background-color: #001755;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            
        }

        h1 {
            font-size: 24px;
            color: #cd8f37;
            margin-bottom: 20px;
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            background-color: #cd8f37;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
        }

        strong {
            color: #333;
            margin-right: 10px;
        }

        .weather-icon {
            font-size: 24px;
            margin-right: 10px;
        }

        .no-data {
            font-style: italic;
            color: #999;
            text-align: center;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Weather Data</h1>
        @if(!empty($weatherData))
            <ul>
                @foreach($weatherData['data'] as $weather)
                    <li>
                        <div style="flex: 1;">
                            <i class="fas fa-calendar-alt weather-icon"></i>
                            <strong>Date:</strong> {{ $weather['date'] }}<br>
                            <i class="fas fa-thermometer-half weather-icon"></i>
                            <strong>Temperature:</strong> {{ $weather['temperature'] }}°C<br>
                            <i class="fas fa-tint weather-icon"></i>
                            <strong>Humidity:</strong> {{ $weather['humidity'] }}%<br>
                            <i class="fas fa-wind weather-icon"></i>
                            <strong>Wind Speed:</strong> {{ $weather['wind_speed'] }} km/h<br>
                        </div>
                        <!-- Add more weather details as needed -->
                    </li>
                @endforeach
            </ul>
        @else
            <p class="no-data">No weather data available.</p>
        @endif
    </div>
    <footer>
        
    </footer>
</body>
</html>
