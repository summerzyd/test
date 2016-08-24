<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body>
        <div class="container">
            @include('Common.header')
            <div class="main">
                <div class="banner">
                    <img src="../img/1.png" class="banner-img">
                </div>
                <div></div>
                <div class="content">
                    @if(!empty($data))
                        @foreach($data as $key => $row)
                            <div class="article">
                                <h2>{{$row->a_title}}</h2>
                                <div class="clearfix" >
                                    <a class="article-img"><img src="{{$row->a_img}}"/></a>
                                        <h4>{{$row->a_content}}</h4>
                                        <a href="#">继续查看</a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            @include('Common.footer')
        </div>
    </body>
</html>