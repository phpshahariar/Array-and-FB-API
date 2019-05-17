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
    
    <meta property="og:url"           content="http://espnbd.com/public/blog-detail/{{ $blog->id }}/{{ preg_replace('/\s+/u', '-', trim($blog->blog_title)) }}"/>
    <meta property="og:type"          content="website"/>
    <meta property="og:title"         content="Amaderpatrika.com - {{ $blog->blog_title }}"/>
    <meta property="og:description"   content="{{ $blog->blog_description }}"/>
    <meta property="og:image"         content="{{ asset($blog->blog_image) }}"/>
    
    
    <script>
        function fbShare(link, name) {
        var appId = '661300177656437';
        var pageUrl ="https://www.facebook.com/dialog/feed?app_id="+appId +"&link="+link;
        var w = 600;
        var h= 400;
        var left = (screen.width/2) - w/2;
        var top = (screen.height/2) - h/2;
        window.open(pageUrl, name, 'toolbar=no, location=no, directories=no, status=no, menubar=yes, scrollbars=no, resizeable=no, copyhistory=no, width='+800+', height='+650+', top='+top+', left='+left);
        return false;
    }
    </script>
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
            <div class="col-md-6">
                <img src="{{ asset($blog->blog_image) }}" alt="" class="w-100"/>
            </div>
            <div class="col-md-6">
                <h3>{{ $blog->blog_title }}</h3>
                <h4>{{ $blog->author->name }}</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <p>{{ $blog->blog_description }}</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                @php($name = preg_replace('/\s+/u', '-', trim($blog->blog_title)))
                @php($url = url('/blog-detail/'.$blog->id.'/'.$name))
                <a href="javascript:void(0)" class="btn btn-primary rounded-0" style="font-size: 18px;" onclick="fbShare('{{ $url }}', '{{ $blog->blog_title }}')">Facebook Share</a>
            </div>
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
