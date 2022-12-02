<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Coach</title>
    <style>
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0;
            font-family: 'Nunito', sans-serif;
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        .primary {
            color: #3490dc
        }

        .navbar {
            padding: 10px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 1px rgba(0, 0, 0, .1);
        }

        .row {
            max-width: 1200px;
            display: flex;
            margin: 0 auto;
            justify-content: space-around;
        }

        .column {
            flex: 1;
            padding: 0 30px;
        }

        .image {
            width: 100%;
        }

        input[type=text], textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid;
            border-radius: 0.5rem;
        }

        .button {
            background-color: #1D4ED8;
            border: none;
            color: white;
            padding: 10px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            width: 100%;
            border-radius: 0.5rem;
            cursor: pointer;
        }
        .button:hover {
            box-shadow: 0 0 0 1px #1D4ED8
        }
        .review {
            background-color: #fff;
            border-radius: 0.5rem;
            padding: 0.5rem 1rem;
            margin: 0.5rem 0;
            border: 1px solid #e2e8f0;
        }
    </style>
</head>
<body class="antialiased">
<div>
    <div class="navbar">
        <h1 style="margin: 0" class="primary">Lemon Gym</h1>
        <a href="tel:+3708645154">Phone: +3708645154</a>
    </div>
    <div style="padding: 60px">
        <h1 style="text-align: center">Domantas dumčius</h1>
    </div>

    <div class="row">
        <div class="column">
            <h2 style="text-align: center">Coach</h2>
            <img class="image" src="/images/coach.jpg" alt="Today workout deadlift">

            <form action="{{route('review.store')}}" method="POST">
                @csrf
                <label for="name">
                    <input type="text" name="name" id="name" placeholder="Name">
                </label>
                <label for="review"l>
                    <textarea name="review" id="review" placeholder="Review"></textarea>
                </label>
                <button type="submit" class="button">Submit</button>
            </form>
            @foreach($reviews as $review)
                <div class="review">
                    <h3 style="margin: 0">{{$review->name}}</h3>
                    <div>{{$review->review}}</div>
                </div>
            @endforeach
        </div>
        <div class="column">
            <h2> Email address </h2>
            <p><a href="mailto:domantas@gmail.com">domantas@gmail.com</a></p>
            <h2> darbo patirtis </h2>
            <p> 3 metai </p>
            <h2> gyvenimo moto 🖤 </h2>
            <p> gyvenime nėra nieko neįmanomo </p>
            <h2> išsilavinimas </h2>
            <p> vidurinis </p>
            <h2> pasiekimai </h2>
            <p> 2 metai armijoje. 3 metu patirtis kaip privačiu treneriu </p>
            <img class="image" src="/images/workout.jpeg" alt="Today workout deadlift">
            <h2>Today workout deadlift </h2>
            <img class="image" src="/images/murilo.jpg" alt="Marius rybačiauskas">
            <h2>Marius rybačiauskas </h2>
        </div>
    </div>

</div>
</body>
</html>
