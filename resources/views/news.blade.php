<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest News</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #ffffff;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #001755;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #cd8f37;
            font-size: 30px;
            font-weight: 1200;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .article {
            margin-bottom: 20px;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .article:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .article h2 {
            margin: 0;
            padding: 20px;
            background-color: #cd8f37;
            color: #fff;
            font-size: 20px;
            font-weight: 500;
            text-align: center;
        }

        .article-content {
            padding: 20px;
        }

        .article p {
            margin-bottom: 10px;
            line-height: 1.5;
        }

        .article a {
            color: #007bff;
            text-decoration: none;
        }

        .article a:hover {
            text-decoration: underline;
        }

        .icon {
            margin-right: 5px;
        }

        hr {
            border: none;
            border-top: 1px solid #e0e0e0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Latest News</h1>
        <div class="articles">
            @foreach ($newsData['articles'] as $article)
                <div class="article">
                    <h2>{{ $article['title'] }}</h2>
                    <div class="article-content">
                        <p><i class="fas fa-user icon"></i> Author: {{ $article['author'] }}</p>
                        <p><i class="far fa-calendar-alt icon"></i> Published At: {{ $article['publishedAt'] }}</p>
                        <p><i class="fas fa-newspaper icon"></i> Source: {{ $article['source']['name'] }}</p>
                        <p><i class="fas fa-link icon"></i> URL: <a href="{{ $article['url'] }}" target="_blank">{{ $article['url'] }}</a></p>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
</body>
</html>
