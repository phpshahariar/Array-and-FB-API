<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/wickedpicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <ul class="navbar-nav">
            @foreach($authors as $author)
            <li><a href="" class="nav-link">{{ $author->name }}</a></li>
            @endforeach
        </ul>
    </div>
</nav>
<section class="py-5">
    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-md-4 mb-3">
                <div class="card rounded-0">
                    <img src="{{ asset($blog->blog_image) }}" alt="" class="w-100"/>
                    <div class="card-body">
                        <p>{{ $blog->blog_title }}</p>
                        <p>{{ $blog->blog_description }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('blog-detail', ['id' => $blog->id, 'name'=>preg_replace('/\s+/u', '-', trim($blog->blog_title))]) }}" class="btn btn-success">Blog Details..</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script src="{{ asset('/') }}assets/js/jquery-3.4.0.js"></script>
<script src="{{ asset('/') }}assets/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="{{ asset('/') }}assets/js/wickedpicker.min.js"></script>
<script src="{{ asset('/') }}assets/js/bootstrap.js"></script>
<script>
</script>
</body>
</html>
