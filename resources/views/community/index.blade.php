<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>communities</title>

    <link href="//cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

<div id="title" style="text-align: center;">
    <h1>SHOW COMMUNITIES</h1>
    <div style="padding: 5px; font-size: 16px;">testing function:communities</div>
</div>
<hr>
<div id="content">
    <ul>
        @foreach ($communities as $community)
            <li style="margin: 50px 0;">
                <div class="title">
                    <a href="{{ url('community/'.$community->id) }}">
                        <h4>{{ $community->name }}</h4>
                    </a>
                    <h6>created at {{$community->created_at}}</h6>
                </div>
                <div class="body">
                    <p>{{ $community->brief }}</p>
                </div>
            </li>
        @endforeach
    </ul>
</div>

</body>
</html>