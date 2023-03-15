@extends('layout.main')
@section("content")
    <div class="home-sec" id="home">
        <div class="overlay">
            <div class="container">
                <div class="row text-center ">
                    <div class="col-lg-12 container1  col-md-12 col-sm-12">
                        <h1 class="h-animation" style="margin-top: 300px ; text-align: center; align-items: center">
                            <span style="font-size: 100px">UAB</span>
                            <span>UNIVERSITY HALL</span>
                            <span>College of arts and sciences</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--HOME SECTION END-->
    <div class="tag-line">
        <div class="container-fluid">
            <div class="row  text-center">
                <div class="col-lg-12  col-md-12 col-sm-12">
                    <h2 data-scroll-reveal="enter from the bottom after 0.1s"> CHÀO MỪNG ĐẾN VỚI UAB </h2>
{{--                    <p class="text-info" style="font-style: italic">--}}
{{--                        Trường Cao đẳng Nghệ thuật và Khoa học</p>--}}
                </div>
            </div>
        </div>

    </div>
    <!--HOME SECTION TAG LINE END-->
    <div id="features-sec" class="container set-pad" >
{{--        <div class="row text-center">--}}
{{--            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">--}}
{{--                <h1 data-scroll-reveal="enter from the bottom after 0.2s" class="header-line">--}}
{{--                    DANH SÁCH TÍNH NĂNG</h1>--}}
{{--            </div>--}}

{{--        </div>--}}
        <!--/.HEADER LINE END-->

        <!-- FEATURE LIST -->
        <div class="row" data-aos="fade-left" style="transition: 1s linear all">
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="about-div">
                    <i class="fa fa-paper-plane-o fa-4x icon-round-border"></i>
                    <h3>Giáo dục chất lượng
                    </h3>
                    <p>

                        Chất lượng giáo dục là việc thực hiện mục tiêu của cơ sở giáo dục hoặc chương trình giáo dục, yêu cầu của Luật Giáo dục, Luật sửa đổi, bổ sung một số điều của Luật Giáo dục, Luật Giáo dục đại học. , phù hợp với nhu cầu sử dụng nguồn nhân lực phục vụ phát triển kinh tế - xã hội của địa phương và cả nước.                    </p>
                    <br>
                    <a href="#" class="btn btn-info btn-set">HỎI CHUYÊN GIA</a>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="about-div">
                    <i class="fa fa-bolt fa-4x icon-round-border"></i>
                    <h3>
                        HỆ THỐNG</h3>
                    <p>
                        Một cách tiếp cận có hệ thống thường được sử dụng tại các dự án tại nơi làm việc. Mục tiêu của phương pháp này là xác định các phương tiện hiệu quả nhất để tạo ra các kết quả nhất quán và tối ưu. Nhiều công ty cần cách tiếp cận này để họ trang bị cho nhân viên đủ kiến ​​thức và nguồn lực để đạt được mục tiêu của công ty.
                    </p>
                    <a href="#" class="btn btn-info btn-set">HỎI CHUYÊN GIA</a>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                <div class="about-div">
                    <i class="fa fa-magic fa-4x icon-round-border"></i>
                    <h3>NGHIÊN CỨU MỘT ĐỐI VỚI MỘT
                    </h3>
                    <p>
                        “One to One” – Phương pháp học không còn xa lạ trên thế giới, nhưng ở Việt Nam nó vẫn luôn được coi là một hình thức dạy kèm (thầy là những học sinh không chuyên)
                        Đây là phương pháp học với giáo viên bản ngữ có trình độ tiếng Anh không chỉ mang lại hiệu quả mà còn thuận tiện cho người học.
                    </p>
                    <a href="#" class="btn btn-info btn-set">HỎI CHUYÊN GIA</a>
                </div>
            </div>
        </div>
    </div>
    <div id="features-sec" class="container" >
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.2s" class="header-line">
                    KHÓA HỌC </h1>
            </div>
        </div>
        <!--/.HEADER LINE END-->
        <div class="row" data-aos="fade-right" style="transition: 1s linear all">
            @include('khoahoc')
        </div>
    </div>
    <!-- FEATURES SECTION END-->
    <div id="faculty-sec" >
        <div class="container">
            <div class="row text-center" >
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2" >
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">
                        GƯƠNG MẶT TIÊU BIỂU</h1>
                    <p data-scroll-reveal="enter from the bottom after 0.3s">
                        Những gương mặt tiêu biểu thành công năm trước
                    </p>
                </div>
            </div>
            <!--/.HEADER LINE END-->
            <div class="row">
                @include('teacher')
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- FACULTY SECTION END-->
    <div id="course-sec" class="container set-pad" >
        <div class="row text-center" >
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2" >
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">
                    KHÓA HỌC THÊM </h1>
                <p data-scroll-reveal="enter from the bottom after 0.3s">
                    Ngoài các khóa học trên, chúng tôi còn có nhiều khóa học khác :
                </p>
            </div>
        </div>
        <!--/.HEADER LINE END-->
        <div class="row set-row-pad" data-aos="fade-right" style="transition: 1s linear all">
            <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s">
                <img src="{{asset('img/building.jpg')}}" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">
                                    <strong> 35+</strong>
                                    TỈNH TRÊN TOÀN QUỐC
                                </a>
                            </h4>
                        </div>

                    </div>
                    <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.7s">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
                                    <strong> 400+</strong>
                                    DOANH NGHIỆP HỢP TÁC
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.9s">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
                                    <strong> 15300+</strong>
                                    HỌC VIÊN ĐĂNG KÝ
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="alert alert-info" data-scroll-reveal="enter from the bottom after 1.1s">
                <span style="font-size:40px;">
                    <strong> 2500 + </strong>
                    <hr />
                    Trung Tâm
                </span>
                </div>
            </div>
        </div>
    </div>
    <!-- COURSES SECTION END-->
    <div id="contact-sec">
        <div class="overlay">
            <div class="container set-pad">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">
                            LIÊN HỆ CHÚNG TÔI </h1>
                        <p data-scroll-reveal="enter from the bottom after 0.3s">
                            Nếu bạn có bất kỳ câu hỏi nào hãy liên hệ với chúng tôi
                        </p>
                    </div>
                </div>
                <!--/.HEADER LINE END-->
                <div class="row set-row-pad" data-aos="fade-left" style="transition: 1s linear all">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                        @include('contact')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row set-row-pad" data-aos="fade-right" style="transition: 1s linear all">
            <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">
                <h2><strong>
                        Địa điểm của chúng tôi </strong></h2>
                <hr />
                <div>
                    <h4>234/80 -UFG , New Street,</h4>
                    <h4>Switzerland.</h4>
                    <h4><strong>Call:</strong> + 67-098-907-1269 / 70 / 71 </h4>
                    <h4><strong>Email: </strong>info@yourdomain.com</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">
                <div>
                    <iframe class="location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.795637402692!2d103.77571015019967!3d1.297301299049157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1a57a5e7f137%3A0xa44380ea7e9fa450!2sUniversity%20Hall!5e0!3m2!1svi!2s!4v1677500736473!5m2!1svi!2s" width="450" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
