<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quote</title>
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

        .quote-container {
            background-color: #001755;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .quote-text {
            color:#cd8f37;
            margin-bottom: 10px;
        }

        .author {
            color: #cd8f37;
            text-align: right;
        }

        .icon {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <h1>Random Quote</h1>

    <div class="quote-container">
        <p class="quote-text"><i class="fas fa-quote-left icon"></i>{{ $quoteData['quote'] }}<i class="fas fa-quote-right icon"></i></p>
        <p class="author"><i class="fas fa-user icon"></i> {{ $quoteData['author'] }}</p>
    </div>
</body>
</html>
