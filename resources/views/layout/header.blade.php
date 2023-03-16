<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand" href="{{route('main')}}"><img class="logo-custom" src="{{asset('picture/logo1.png')}}" alt="" /></a>
        </div>
        <div class="navbar-collapse collapse move-me">
            <ul class="nav navbar-nav navbar-right .nav">
                <li style="margin-top: 15px; margin-right: 70px;">
                        <form action="" method="get">
                            <Label>Bộ lọc </Label>
                            <select value="">
                                @foreach($mn as $m)
                                <option value="{{$m->course_id}}" style="color: red;">{{$m->course_name}}</option>
                                @endforeach
                            </select>
                            <input type="submit" value="Tìm" class="btn btn-primary">
                        </form>
                </li>
                <li><a href="#home">TRANG CHỦ</a></li>
                <li><a href="#features-sec">ĐẶC TRƯNG</a></li>
                <li><a href="#course-sec">KHOÁ HỌC</a></li>
                <li><a href="#faculty-sec">GIẢNG VIÊN</a></li>
                <li><a href="#contact-sec">LIÊN HỆ</a></li>
                <li><a><i style="font-size: 1.2em" class="fa fa-solid fa-bars menu top_menu"></i>
                    </a>
                    <ul class="show-menu">
                        @foreach($mn as $m)
                        <li><a href="{{route('kh',[$m->course_id])}}">{{$m->course_name}}</a> </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</div>