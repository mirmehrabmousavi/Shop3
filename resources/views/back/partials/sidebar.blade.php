<div
    class="main-menu menu-fixed menu-accordion menu-shadow {{ user_option('theme_color') == 'light' ? 'menu-light' : 'menu-dark' }}"
    data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ url('/') }}" target="_blank">
                    <h2 class="brand-text mb-0">مدیریت سایت</h2>
                </a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item has-sub open">
                <a href="">
                    <i class="feather icon-home"></i>
                    <span class="menu-title">داشبورد ها</span>
                </a>
                <ul class="menu-content" style="">
                    <li class="{{ active_class('/') }} is-shown"><a href="{{url('/')}}"><i class="feather icon-circle"></i><span
                                class="menu-item">ایندکس</span></a></li>
                    <li class="{{ active_class('admin.dashboard') }} is-shown"><a href="{{route('admin.dashboard')}}"><i class="feather icon-circle"></i><span
                                class="menu-item">داشبورد</span></a></li>
                </ul>
            </li>
            <li class="nav-item has-sub"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title">فروشگاه</span></a>
                <ul class="menu-content">
                    <li class="{{ active_class('admin.shop.dashboard') }} nav-item"><a href="{{ route('admin.shop.dashboard') }}">
                            <i class="feather icon-home"></i>
                            <span class="menu-title">داشبورد</span>
                        </a>
                    </li>
                    <li class="nav-item has-sub {{ open_class(['admin.products.*', 'admin.brands.*']) }}"><a
                            href="#"><i class="feather icon-shopping-cart"></i><span
                                class="menu-title"> محصولات</span></a>
                        <ul class="menu-content">
                            <li class="{{ active_class('admin.products.index') }}">
                                <a href="{{ route('admin.products.index') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">لیست محصولات</span></a>
                            </li>
                            <li class="{{ active_class('admin.products.create') }}">
                                <a href="{{ route('admin.products.create') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">ایجاد محصول</span></a>
                            </li>
                            <li class="{{ active_class('admin.products.categories.index') }}">
                                <a href="{{ route('admin.products.categories.index') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">دسته بندی ها</span></a>
                            </li>
                            <li class="{{ active_class('admin.spectypes.index') }}">
                                <a href="{{ route('admin.spectypes.index') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">نوع مشخصات</span></a>
                            </li>
                            <li class="{{ active_class('admin.stock-notifies.index') }}">
                                <a href="{{ route('admin.stock-notifies.index') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">لیست اطلاع از موجودی</span></a>
                            </li>
                            <li class="{{ active_class('admin.product.prices.index') }}">
                                <a href="{{ route('admin.product.prices.index') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">قیمت ها</span></a>
                            </li>
                            <li class="{{ open_class(['admin.brands.*']) }}">
                                <a href="#"><i class="feather icon-circle"></i><span
                                        class="menu-item"> برندها</span></a>
                                <ul class="menu-content">
                                    <li class="{{ active_class('admin.brands.index') }}">
                                        <a class="{{ active_class('admin.brands.index') }}"
                                           href="{{ route('admin.brands.index') }}"><i
                                                class="feather icon-circle"></i><span
                                                class="menu-item">لیست برندها</span></a>
                                    </li>
                                    <li class="{{ active_class('admin.brands.create') }}">
                                        <a class="{{ active_class('admin.brands.create') }}"
                                           href="{{ route('admin.brands.create') }}"><i
                                                class="feather icon-circle"></i><span
                                                class="menu-item">ایجاد برند</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ open_class(['admin.attributeGroups.*']) }}">
                                <a href="#"><i class="feather icon-circle"></i><span
                                        class="menu-item"> ویژگی ها</span></a>
                                <ul class="menu-content">
                                    <li class="{{ active_class('admin.attributeGroups.index') }}">
                                        <a class="{{ active_class('admin.attributeGroups.index') }}"
                                           href="{{ route('admin.attributeGroups.index') }}"><i
                                                class="feather icon-circle"></i><span class="menu-item">لیست گروه ویژگی ها</span></a>
                                    </li>
                                    <li class="{{ active_class('admin.attributeGroups.create') }}">
                                        <a class="{{ active_class('admin.attributeGroups.create') }}"
                                           href="{{ route('admin.attributeGroups.create') }}"><i
                                                class="feather icon-circle"></i><span
                                                class="menu-item">ایجاد گروه ویژگی</span></a>
                                    </li>
                                    <li class="{{ active_class('admin.attributes.create') }}">
                                        <a class="{{ active_class('admin.attributes.create') }}"
                                           href="{{ route('admin.attributes.create') }}"><i
                                                class="feather icon-circle"></i><span
                                                class="menu-item">ایجاد ویژگی</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ open_class(['admin.filters.*']) }}">
                                <a href="#"><i class="feather icon-circle"></i><span
                                        class="menu-item"> فیلترها</span></a>
                                <ul class="menu-content">
                                    <li class="{{ active_class('admin.filters.index') }}">
                                        <a class="{{ active_class('admin.filters.index') }}"
                                           href="{{ route('admin.filters.index') }}"><i
                                                class="feather icon-circle"></i><span
                                                class="menu-item">لیست فیلتر ها</span></a>
                                    </li>
                                    <li class="{{ active_class('admin.filters.create') }}">
                                        <a class="{{ active_class('admin.filters.create') }}"
                                           href="{{ route('admin.filters.create') }}"><i
                                                class="feather icon-circle"></i><span
                                                class="menu-item">ایجاد فیلتر</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-sub {{ open_class(['admin.discounts.*']) }}"><a href="#"><i
                                class="feather icon-tag"></i><span class="menu-title"> تخفیف ها</span></a>
                        <ul class="menu-content">
                            <li class="{{ active_class('admin.discounts.index') }}">
                                <a class="{{ active_class('admin.discounts.index') }}"
                                   href="{{ route('admin.discounts.index') }}"><i
                                        class="feather icon-circle"></i><span class="menu-item">لیست تخفیف ها</span></a>
                            </li>
                            <li class="{{ active_class('admin.discounts.create') }}">
                                <a class="{{ active_class('admin.discounts.create') }}"
                                   href="{{ route('admin.discounts.create') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">ایجاد تخفیف</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-sub {{ open_class(['admin.orders.*']) }}"><a href="#"><i
                                class="feather icon-briefcase"></i><span class="menu-title"> سفارشات</span></a>
                        <ul class="menu-content">
                            <li class="{{ active_class('admin.orders.index') }}">
                                <a href="{{ route('admin.orders.index') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">همه سفارشات</span></a>
                            </li>
                            <li class="">
                                <a href="{{ route('admin.orders.index') }}?status=paid&shipping_status=pending"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">سفارشات جدید</span></a>
                            </li>
                            <li class="">
                                <a href="{{ route('admin.orders.index') }}?status=paid"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">سفارشات پرداخت شده</span></a>
                            </li>
                            <li class="{{ active_class('admin.orders.notCompleted') }}">
                                <a href="{{ route('admin.orders.notCompleted') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item"> محصولات منتظر ارسال</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-sub {{ open_class(['admin.provinces.*', 'admin.carriers.*', 'admin.tariffs.*']) }}">
                        <a href="#"><i class="feather icon-package"></i><span
                                class="menu-title"> حمل و نقل</span></a>
                        <ul class="menu-content">
                            <li class="{{ active_class('admin.carriers.index') }}">
                                <a class="{{ active_class('admin.carriers.index') }}"
                                   href="{{ route('admin.carriers.index') }}"><i
                                        class="feather icon-circle"></i><span class="menu-item">روش های ارسال</span></a>
                            </li>
                            <li class="{{ active_class('admin.provinces.index') }}">
                                <a class="{{ active_class('admin.provinces.index') }}"
                                   href="{{ route('admin.provinces.index') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">لیست استان ها</span></a>
                            </li>
                            <li class="{{ active_class('admin.provinces.create') }}">
                                <a class="{{ active_class('admin.provinces.create') }}"
                                   href="{{ route('admin.provinces.create') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">ایجاد استان</span></a>
                            </li>
                            <li class="{{ active_class('admin.cities.create') }}">
                                <a class="{{ active_class('admin.cities.create') }}"
                                   href="{{ route('admin.cities.create') }}"><i class="feather icon-circle"></i><span
                                        class="menu-item">ایجاد شهر</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-sub {{ open_class(['admin.sliders.*']) }}"><a href="#"><i
                                class="feather icon-sliders"></i><span class="menu-title"> اسلایدرها</span></a>
                        <ul class="menu-content">
                            <li class="{{ active_class('admin.sliders.index') }}">
                                <a href="{{ route('admin.sliders.index') }}"><i class="feather icon-circle"></i><span
                                        class="menu-item">لیست اسلایدرها</span></a>
                            </li>
                            <li class="{{ active_class('admin.sliders.create') }}">
                                <a href="{{ route('admin.sliders.create') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">ایجاد اسلایدر</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-sub {{ open_class(['admin.banners.*']) }}"><a href="#"><i
                                class="feather icon-image"></i><span class="menu-title"> بنرها</span></a>
                        <ul class="menu-content">
                            <li class="{{ active_class('admin.banners.index') }}">
                                <a href="{{ route('admin.banners.index') }}"><i class="feather icon-circle"></i><span
                                        class="menu-item">لیست بنرها</span></a>
                            </li>
                            <li class="{{ active_class('admin.banners.create') }}">
                                <a href="{{ route('admin.banners.create') }}"><i
                                        class="feather icon-circle"></i><span class="menu-item">ایجاد بنر</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-sub {{ open_class(['admin.links.*']) }}"><a href="#"><i
                                class="feather icon-link"></i><span class="menu-title"> لینک های فوتر</span></a>
                        <ul class="menu-content">
                            <li class="{{ active_class('admin.links.index') }}">
                                <a href="{{ route('admin.links.index') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">لیست لینک ها</span></a>
                            </li>
                            <li class="{{ active_class('admin.links.create') }}">
                                <a href="{{ route('admin.links.create') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">ایجاد لینک </span></a>
                            </li>
                            <li class="{{ active_class('admin.links.groups.index') }}">
                                <a href="{{ route('admin.links.groups.index') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">لیست گروه ها </span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-sub {{ open_class(['admin.pages.*']) }}"><a href="#"><i
                                class="feather icon-file"></i><span class="menu-title"> صفحات</span></a>
                        <ul class="menu-content">
                            <li class="{{ active_class('admin.pages.index') }}">
                                <a href="{{ route('admin.pages.index') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">لیست صفحات</span></a>
                            </li>
                            <li class="{{ active_class('admin.pages.create') }}">
                                <a href="{{ route('admin.pages.create') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">ایجاد صفحه</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-sub {{ open_class(['admin.roles.*']) }}"><a href="#"><i
                                class="feather icon-unlock"></i><span class="menu-title"> مقام ها</span></a>
                        <ul class="menu-content">
                            <li class="{{ active_class('admin.roles.index') }}">
                                <a href="{{ route('admin.roles.index') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">لیست مقام ها</span></a>
                            </li>
                            <li class="{{ active_class('admin.roles.create') }}">
                                <a href="{{ route('admin.roles.create') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">ایجاد مقام</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-sub"><a href="#"><i class="feather icon-pie-chart"></i><span
                                class="menu-title">گزارشات</span></a>
                        <ul class="menu-content">
                            <li class="{{ active_class('admin.statistics.orders') }}">
                                <a href="{{ route('admin.statistics.orders') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">سفارشات</span></a>
                            </li>
                            <li class="{{ active_class('admin.statistics.users') }}">
                                <a href="{{ route('admin.statistics.users') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">کاربران</span></a>
                            </li>
                            <li class="{{ active_class('admin.statistics.views') }}">
                                <a href="{{ route('admin.statistics.views') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">آمار بازدیدها</span></a>
                            </li>
                            <li class="{{ active_class('admin.statistics.viewsList') }}">
                                <a href="{{ route('admin.statistics.viewsList') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">لیست بازدیدها</span></a>
                            </li>
                            <li class="{{ active_class('admin.statistics.viewers') }}">
                                <a href="{{ route('admin.statistics.viewers') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item"> بازدید کنندگان امروز</span></a>
                            </li>
                            <li class="{{ active_class('admin.statistics.smsLog') }}">
                                <a href="{{ route('admin.statistics.smsLog') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item"> لاگ پیامک های ارسالی</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-sub {{ open_class(['admin.themes.*', 'admin.widgets.*']) }}"><a
                            href="#"><i class="feather icon-layout"></i><span class="menu-title">قالب </span></a>
                        <ul class="menu-content">
                            <li class="{{ active_class('admin.themes.index') }}">
                                <a href="{{ route('admin.themes.index') }}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">لیست قالب ها</span></a>
                            </li>
                            <li class="{{ active_class('admin.themes.create') }}">
                                <a href="{{ route('admin.themes.create') }}"><i class="feather icon-circle"></i><span
                                        class="menu-item">افزودن قالب جدید</span></a>
                            </li>
                            @if(config('front.settings.fields'))
                                <li class="{{ active_class('admin.themes.settings') }}">
                                    <a href="{{ route('admin.themes.settings') }}"><i
                                            class="feather icon-circle"></i><span
                                            class="menu-item">تنظیمات قالب</span></a>
                                </li>
                                @if (config('front.home-widgets'))
                                    <li class="{{ active_class('admin.widgets.index') }}">
                                        <a href="{{ route('admin.widgets.index') }}">   <i
                                                class="feather icon-circle"></i><span
                                                class="menu-item">مدیریت صفحه اصلی</span></a>
                                    </li>
                                @endif
                            @endif
                        </ul>
                    </li>
                    <li class="nav-item has-sub {{ open_class(['admin.transactions.*', 'admin.currencies.*']) }}"><a
                            href="#"><i class="feather icon-credit-card"></i><span class="menu-title"> پرداخت</span></a>
                        <ul class="menu-content">
                            <li class="{{ active_class('admin.transactions.index') }} nav-item">
                                <a href="{{ route('admin.transactions.index') }}">
                                    <i class="feather feather icon-circle"></i>
                                    <span class="menu-title"> لیست تراکنش ها</span>
                                </a>
                            </li>
                            <li class="{{ active_class('admin.wallet-histories.index') }} nav-item">
                                <a href="{{ route('admin.wallet-histories.index') }}">
                                    <i class="feather feather icon-circle"></i>
                                    <span class="menu-title"> تاریخچه کیف پول</span>
                                </a>
                            </li>
                            <li class="{{ active_class('admin.currencies.index') }} nav-item">
                                <a href="{{ route('admin.currencies.index') }}">
                                    <i class="feather feather icon-circle"></i>
                                    <span class="menu-title"> لیست ارز ها</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ active_class('admin.menus.index') }} nav-item">
                        <a href="{{ route('admin.menus.index') }}">
                            <i class="feather icon-menu"></i>
                            <span class="menu-title"> منوها</span>
                        </a>
                    </li>
                    <li class="{{ active_class('admin.contacts.index') }} nav-item">
                        <a href="{{ route('admin.contacts.index') }}">
                            <i class="feather icon-message-square"></i>
                            <span class="menu-title">لیست تماس با ما</span>
                        </a>
                    </li>
                    <li class="{{ active_class('admin.comments.index') }} nav-item"><a
                            href="{{ route('admin.comments.index') }}">
                            <i class="feather icon-message-circle"></i>
                            <span class="menu-title"> نظرات</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-sub"><a href="#"><i class="feather icon-book-open"></i><span class="menu-title">آموزشی</span></a>
                <ul class="menu-content">
                    <li class="{{ active_class('admin.edu.dashboard') }} nav-item"><a href="{{ route('admin.edu.dashboard') }}">
                            <i class="feather icon-home"></i>
                            <span class="menu-title">داشبورد</span>
                        </a>
                    </li>

                    <li class="{{ active_class('admin.indexCategory') }}  nav-item"><a href="{{route('admin.indexCategory')}}">
                            <i class="feather icon-menu"></i>
                            <span class="menu-title">دسته بندی</span>
                        </a>
                        <ul class="menu-content" style="">
                            <li class="{{ active_class('admin.indexCategory') }}  is-shown"><a href="{{route('admin.indexCategory')}}"><i
                                        class="feather icon-circle"></i><span class="menu-item">دسته بندی ها</span></a>
                            </li>
                            <li class="{{ active_class('admin.indexCategory') }}  is-shown"><a href="{{route('admin.createCategory')}}"><i
                                        class="feather icon-circle"></i><span
                                        class="menu-item">افزودن دسته بندی</span></a></li>
                        </ul>
                    </li>
                    <li class="{{ active_class('admin.indexCourse') }}   nav-item"><a href="{{route('admin.indexCourse')}}">
                            <i class="feather icon-menu"></i>
                            <span class="menu-title">دوره ها</span>
                        </a>
                        <ul class="menu-content" style="">
                            <li class="{{ active_class('admin.indexCourse') }}  is-shown"><a href="{{route('admin.indexCourse')}}"><i
                                        class="feather icon-circle"></i><span class="menu-item">دوره ها</span></a></li>
                            <li class="{{ active_class('admin.createCourse') }}  is-shown"><a href="{{route('admin.createCourse')}}"><i
                                        class="feather icon-circle"></i><span class="menu-item">افزودن دوره</span></a>
                            </li>

                            <li class="is-shown">
                                <div class="alert alert-warning"><p style="font-size: 10px">برای افزودن دوره حداقل یک
                                        دسته بندی
                                        اضافه کنید</p></div>
                            </li>

                        </ul>
                    </li>
                    <li class="{{ active_class('admin.indexLesson') }}   nav-item"><a href="{{route('admin.indexLesson')}}">
                            <i class="feather icon-menu"></i>
                            <span class="menu-title">درس ها</span>
                        </a>
                        <ul class="menu-content" style="">

                            <li class="{{ active_class('admin.indexLesson') }}  is-shown"><a href="{{route('admin.indexLesson')}}"><i
                                        class="feather icon-circle"></i><span class="menu-item">درس ها</span></a></li>
                            <li class="{{ active_class('admin.createLesson') }}  is-shown"><a href="{{route('admin.createLesson')}}"><i
                                        class="feather icon-circle"></i><span class="menu-item">افزودن درس</span></a>
                            </li>

                            <li class="is-shown">
                                <div class="alert alert-warning"><p style="font-size: 10px">برای افزودن درس حداقل یک
                                        دوره اضافه کنید</p></div>
                            </li>

                        </ul>
                    </li>
                    <li class="{{ active_class('admin.indexSeason') }}   nav-item"><a href="{{route('admin.indexSeason')}}">
                            <i class="feather icon-menu"></i>
                            <span class="menu-title">فصل ها</span>
                        </a>
                        <ul class="menu-content" style="">

                            <li class="{{ active_class('admin.indexSeason') }}  is-shown"><a href="{{route('admin.indexSeason')}}"><i
                                        class="feather icon-circle"></i><span class="menu-item">فصل ها</span></a></li>
                            <li class="{{ active_class('admin.createSeason') }}  is-shown"><a href="{{route('admin.createSeason')}}"><i
                                        class="feather icon-circle"></i><span class="menu-item">افزودن فصل</span></a>
                            </li>

                            <li class="is-shown">
                                <div class="alert alert-warning"><p style="font-size: 10px">برای افزودن فصل حداقل یک
                                        دوره اضافه کنید</p></div>
                            </li>

                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-sub"><a href="#"><i class="feather icon-command"></i><span
                        class="menu-title">خدماتی</span></a>
                <ul class="menu-content">
                    <li class="{{--{{ active_class('admin.dashboard') }}--}}  nav-item"><a href="{{ route('admin.dashboard') }}">
                            <i class="feather icon-home"></i>
                            <span class="menu-title">داشبورد</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-sub {{ open_class(['admin.users.*']) }}"><a href="#"><i
                        class="feather icon-users"></i><span class="menu-title"> کاربران</span></a>
                <ul class="menu-content">
                    <li class="{{ active_class('admin.users.index') }}">
                        <a href="{{ route('admin.users.index') }}"><i
                                class="feather icon-circle"></i><span
                                class="menu-item">لیست کاربران</span></a>
                    </li>
                    <li class="{{ active_class('admin.users.create') }}">
                        <a href="{{ route('admin.users.create') }}"><i
                                class="feather icon-circle"></i><span
                                class="menu-item">ایجاد کاربر</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-sub {{ open_class(['admin.posts.*']) }}"><a href="#"><i
                        class="feather icon-file-text"></i><span class="menu-title"> وبلاگ</span></a>
                <ul class="menu-content">
                    <li class="{{ active_class('admin.posts.index') }}">
                        <a href="{{ route('admin.posts.index') }}"><i
                                class="feather icon-circle"></i><span
                                class="menu-item">لیست نوشته ها</span></a>
                    </li>
                    <li class="{{ active_class('admin.posts.create') }}">
                        <a href="{{ route('admin.posts.create') }}"><i
                                class="feather icon-circle"></i><span
                                class="menu-item">ایجاد نوشته</span></a>
                    </li>
                    <li class="{{ active_class('admin.posts.categories.index') }}">
                        <a href="{{ route('admin.posts.categories.index') }}"><i
                                class="feather icon-circle"></i><span
                                class="menu-item">دسته بندی ها</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-sub {{ open_class(['admin.tickets.*']) }}"><a href="#"><i
                        class="feather icon-inbox"></i><span class="menu-title"> تیکت ها</span></a>
                <ul class="menu-content">
                    <li class="{{ active_class('admin.tickets.index') }}">
                        <a href="{{ route('admin.tickets.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item">لیست تیکت ها</span></a>
                    </li>
                    <li class="{{ active_class('admin.tickets.create') }}">
                        <a href="{{ route('admin.tickets.create') }}"><i
                                class="feather icon-circle"></i><span
                                class="menu-item">ایجاد تیکت</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-sub">
                <a href="#">
                    <i class="feather icon-settings"></i>
                    <span class="menu-title">تنظیمات</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ active_class('admin.settings.information') }}">
                        <a href="{{ route('admin.settings.information') }}"><i
                                class="feather icon-circle"></i><span
                                class="menu-item">اطلاعات کلی</span></a>
                    </li>
                    @if (config('front.socials'))
                        <li class="{{ active_class('admin.settings.socials') }}">
                            <a href="{{ route('admin.settings.socials') }}"><i
                                    class="feather icon-circle"></i><span class="menu-item">شبکه های اجتماعی</span></a>
                        </li>
                    @endif
                    <li class="{{ active_class('admin.settings.gateways') }}">
                        <a href="{{ route('admin.settings.gateways') }}"><i
                                class="feather icon-circle"></i><span
                                class="menu-item">درگاه های پرداخت</span></a>
                    </li>
                    <li class="{{ active_class('admin.settings.others') }}">
                        <a href="{{ route('admin.settings.others') }}"><i
                                class="feather icon-circle"></i><span
                                class="menu-item">تنظیمات دیگر</span></a>
                    </li>
                    <li class="{{ active_class('admin.settings.sms') }}">
                        <a href="{{ route('admin.settings.sms') }}"><i
                                class="feather icon-circle"></i><span
                                class="menu-item">تنظیمات پیامک</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-sub {{ open_class(['admin.file-manager', 'admin.backups.*', 'admin.apikeys.*', 'admin.notifications']) }}">
                <a href="#">
                    <i class="feather icon-more-horizontal"></i>
                    <span class="menu-title">دیگر</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ active_class('admin.file-manager') }} nav-item">
                        <a href="{{ route('admin.file-manager') }}">
                            <i class="feather icon-folder"></i>
                            <span class="menu-title"> فایل ها</span>
                        </a>
                    </li>
                    <li class="{{ active_class('admin.backups.index') }} nav-item">
                        <a href="{{ route('admin.backups.index') }}">
                            <i class="feather icon-upload-cloud"></i>
                            <span class="menu-title">لیست بکاپ ها</span>
                        </a>
                    </li>
                    <li class="{{ active_class('admin.apikeys.index') }} nav-item">
                        <a href="{{ route('admin.apikeys.index') }}">
                            <i class="fa fa-key"></i>
                            <span class="menu-title">کلیدهای وب سرویس</span>
                        </a>
                    </li>
                    <li class="{{ active_class('admin.notifications') }} nav-item">
                        <a href="{{ route('admin.notifications') }}">
                            <i class="feather icon-bell"></i>
                            <div class="d-flex justify-content-between w-100">
                                <span class="menu-title"> اعلان ها</span>
                                @if($notifications->count())
                                    <span
                                        class="badge badge badge-primary badge-pill"> {{ $notifications->count() }}</span>
                                @endif
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
