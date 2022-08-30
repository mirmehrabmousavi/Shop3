@extends('front::edu.layout.app')

@section('content')
    <!-- ============================ Hero Banner  Start================================== -->
    <div class="image-cover hero_banner hero-inner-2" style="background:#152974;" data-overlay="0">
        <div class="container">
        @foreach($option as $val)
            <!-- Type -->
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="banner-search-2 transparent">
                            {!! $val->banner_txt_1 !!}
                            <div class="mt-4">
                                <a href="#" class="btn btn-modern dark" data-toggle="modal"
                                   data-target="#signup">ثبت نام کنید<span><i class="ti-arrow-left"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="flixio pt-5">
                            <img class="img-fluid" src="{{$val->banner_img_1}}" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
    <!-- ============================ Hero Banner End ================================== -->

    <!-- ========================== Featured Category Section =============================== -->
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="sec-heading center">
                        <p>دسته بندی های منتخب</p>
                        <h2>موضوعات و محورهای آموزشی <span class="theme-cl">پرمنتخب</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($cat as $category)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="edu_cat_2 cat-{{$loop->index+1}}">
                            <div class="edu_cat_icons">
                                <a class="pic-main" href="{{route('coursesCat',['id' => $category->id])}}"><img
                                        src="/assets/img/{{$loop->index+1}}.png" class="img-fluid"
                                        alt=""/></a>
                            </div>
                            <div class="edu_cat_data">
                                <h4 class="title"><a
                                        href="{{route('coursesCat',['id' => $category->id])}}">{{$category->category_name}}</a>
                                </h4>
                                <ul class="meta">

                                    @php
                                        $course = \App\Models\Course::where('category_id',$category->category_name)->get();
                                    @endphp
                                    <li class="video"><i class="ti-video-clapper"></i>{{count($course)}} دوره آموزشی
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ========================== Featured Category Section =============================== -->

    <!-- ============================ Featured courses Start ================================== -->
    <section class="light-2">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="sec-heading center">
                        <p>دوره آموزشی پرمخاطب</p>
                        <h2>موضوعات و محورهای آموزشی <span class="theme-cl">پرمخاطب</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">

            @foreach($courses as $course)
                <!-- Cource Grid 1 -->
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="education_block_list_layout style-2">

                            <div class="education_block_thumb n-shadow">
                                <a href="{{route('course.show',['id' => $course->id])}}"><img
                                        src="{{$course->c_poster}}" class="img-fluid" alt="{{$course->c_alt_img}}"></a>
                            </div>

                            <div class="list_layout_ecucation_caption">

                                <div class="education_block_body">
                                    <h4 class="bl-title"><a
                                            href="{{route('course.show',['id' => $course->id])}}">{{$course->title}}</a>
                                    </h4>
                                    <div class="_course_admin_ol12">مدرس: <strong>{{$course->user_id}}</strong></div>

                                    <div class="_course_less_infor">
                                        <ul>
                                            @php $lesson = \App\Models\Lesson::where('user_id',$course->user_id)->get(); @endphp
                                            <li><i class="ti-desktop ml-1"></i>{{count($lesson)}} درس</li>
                                            <li><span class="class online"></span>آنلاین</li>
                                        </ul>
                                    </div>

                                    <div class="course_rate_system_wrap">
                                        <div class="course_rate_system">
                                            <div class="course_ratting">
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="course_reviews_info">
                                                <strong class="mid">4.9</strong>
                                            </div>
                                        </div>
                                        <div class="_course_category_01"><span
                                                class="cat-7">{{$course->category_id}}</span></div>
                                    </div>
                                </div>

                                <div class="education_block_footer">
                                    <div class="cources_price">{{$course->price_off}}
                                        <div class="less_offer">{{$course->price}}</div>
                                    </div>
                                    <div class="cources_info_style3">
                                        <a href="{{route('course.show',['id' => $course->id])}}"
                                           class="_cr_detail_arrow"><i class="fa fa-arrow-left"></i></a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
    <!-- ============================ Featured courses End ================================== -->

    <!-- ========================== About Facts List Section =============================== -->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="vid" style="align-items: center; text-align: center">
                        @foreach($option as $val)
                        @php $ccc = \App\Models\Option::find(1); @endphp
                        <video controls
                               src="{{$ccc->video_file}}"
                               poster="{{$ccc->video_poster}}">

                            Sorry, your browser doesn't support embedded videos,
                            but don't worry, you can <a href="{{$val->video_file}}">download it</a>
                            and watch it with your favorite video player!


                        </video>
                        @endforeach
                    </div>
                </div>
            </div>{{--
            <div class="row align-items-center align-content-center" style="margin-top: 100px">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <a href="#" class="btn btn-primary waves-effect d-block">تعیین سطح و مشاوره
                        رایگان</a>
                </div>
            </div>--}}
        </div>
    </section>

    <!-- ========================== Featured Category Section =============================== -->
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="sec-heading center">
                        <h2>کلاس های<span class="theme-cl"> پر مخاطب </span></h2>
                    </div>
                </div>
            </div>

            <div class="row">
            @foreach($classes as $val)
                <!-- Cource Grid 1 -->
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="education_block_list_layout style-2">

                            <div class="education_block_thumb n-shadow">
                                <a href="{{route('class.show',['id' => $val->id])}}"><img
                                        src="{{(empty($val->poster) ? '/upload/no-image.png' : $val->poster)}}"
                                        class="img-fluid" alt="{{$val->topic}}"></a>
                            </div>

                            <div class="list_layout_ecucation_caption">

                                <div class="education_block_body">
                                    <h4 class="bl-title"><a
                                            href="{{route('class.show',['id' => $val->id])}}">{{$val->topic}}</a>
                                    </h4>
                                    @php $user = \App\Models\User::find($val->user_id); @endphp
                                    <div class="_course_admin_ol12">مدرس: <strong>{{$user->email}}</strong></div>

                                    <div class="_course_less_infor">
                                        <ul>
                                            <li><i class="ti-desktop ml-1"></i>زمان شروع : {{$val->start_time}}</li>
                                            <li><i class="ti-desktop ml-1"></i>مدت زمان : {{$val->duration}}</li>
                                        </ul>
                                    </div>

                                    <div class="course_rate_system_wrap">
                                        <div class="course_rate_system">
                                            <div class="course_ratting">
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="course_reviews_info">
                                                <strong class="mid">4.9</strong>
                                            </div>
                                        </div>
                                        <div class="_course_category_01"><span class="cat-7"></span></div>
                                    </div>
                                </div>

                                <div class="education_block_footer">
                                    <div class="cources_price">
                                        <h6 class="ml-2">{{(empty($val->price)) ? 'رایگان' : $val->price.'تومان'}}</h6>
                                        <p>{{(empty($val->d_price)) ? 'رایگان' : $val->d_price.'دلار'}}</p>
                                    </div>
                                    <div class="cources_info_style3">
                                        <a href="{{route('class.show',['id' => $val->id])}}"
                                           class="btn btn-primary rounded waves-effect">خرید <i
                                                class="fa fa-shopping-bag"></i></a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ========================== Featured Category Section =============================== -->


    <!-- ========================== About Facts List Section =============================== -->
    <section>
        <div class="container">

            <div class="row align-items-center">
                @foreach($option as $val)
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="about-short">
                            {!! $val->banner_txt_2 !!}
                            <a href="https://rayalanguage.com/aboutus" class="btn btn-modern">درباره ما<span><i
                                        class="ti-arrow-left"></i></span></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="list_facts_wrap_img">

                            <img src="{{$val->banner_img_2}}" class="img-fluid" alt="">

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- ========================== Brand Section =============================== -->
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="sec-heading center">
                        <p>مردم چه می گویند؟</p>
                        <h2><span class="theme-cl">نظرات </span> زبان آموزان ما</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="reviews_third" id="reviews-slide" dir="rtl">
                    @php $comments = \App\Models\Edu\Advice::all(); @endphp
                    @foreach($comments as $val)
                        <!-- single -->
                            <div class="testimonial-wraps">
                                <div class="testimonial-icon">
                                    <div class="testimonial-icon-thumb"><span class="quotes"><i
                                                class="fas fa-quote-right"></i></span><img src="{{$val->profile}}"
                                                                                           class="img-fluid" alt="">
                                    </div>
                                    <h5>{{$val->name}}</h5>
                                    <span>{{$val->group}}</span>
                                    <div class="testi-rate">
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                    </div>
                                </div>
                                <div class="facts-detail">
                                    <p>{!! $val->message !!}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== Brand Section =============================== -->
    @php $num = \App\Models\User::find(1); @endphp
    <a href="https://wa.me/989127041207" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
@endsection
