<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Search Results</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        h1 {
            color: #000000;
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
            background-color: #001755;
        }

        li {
            margin-bottom: 20px;
            background-color: #cd8f37;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        a {
            color: #ffffff;
            text-decoration: none;
        }

        p {
            color: #ffffff;
            margin-top: 5px;
            font-size: 14px;
        }

        .url {
            color: #ffffff;
            font-weight: bold;
        }

        .metadata {
            display: flex;
            justify-content: space-between;
        }

        .icon {
            margin-right: 5px;
            color: #ffffff;
        }

        .result-details {
            text-align: center;
        }

        .result-details p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Google Search Results</h1>

    <div>
        <ul>
            @foreach ($searchResults as $result)
                <li>
                    <div class="result-details">
                        <div class="result-title">
                            <i class="fas fa-link icon"></i>
                            <a href="{{ $result['link'] }}" target="_blank">{{ $result['title'] }}</a>
                        </div>
                        <p class="url">{{ $result['link'] }}</p>
                        <p>{{ $result['snippet'] }}</p>
                        <div class="metadata">
                            <p><i class="far fa-calendar-alt icon"></i> Published: {{ $result['publishedDate'] }}</p>
                            <p><i class="fas fa-star icon"></i> Relevance Score: {{ $result['relevanceScore'] }}</p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
