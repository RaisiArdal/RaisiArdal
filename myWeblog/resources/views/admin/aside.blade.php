        <div class="sidebar">
            <div class="head">
                <img src="{{url('upload/images/user/tmp/user.png')}}">
                <h3>پنل مدیریت  </h3>

                <div class="level-user">
                    <span class="label-name">سطح مدیریتی : </span>
                    <span class="label-level">مدیر اصلی </span>
                </div>
                <div class="clear"></div>
            </div>

            <div class="menu">
                <UL class="text-right">

                    <li><a href="{{ route('admin.home') }}">پیشخوان</a></li>
                    <li class="has-sub"><a href="#">دسته ها</a>
                        <ul>
                            <li><a  href="{{route('aCategory.create')}}">جدید</a></li>
                            <li><a  href="{{route('aCategory.index')}}">لیست دسته ها</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="#">اخبار</a>
                        <ul>
                            <li><a  href="{{route('aNP.create')}}">جدید</a></li>
                            <li><a  href="{{route('aNP.index')}}">لیست اخبار</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="#">اسلایدر</a>
                        <ul>
                            <li><a  href="{{route('aSlider.create')}}">جدید</a></li>
                            <li><a  href="{{route('aSlider.index')}}">اسلایدر ها</a></li>
                        </ul>
                    </li>



                    <li><a href="#">تنظیمات</a></li>

                </UL>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
