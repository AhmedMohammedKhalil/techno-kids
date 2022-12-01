<aside class="widget-area">
    <section class="widget widget_categories">
        @auth('admin')
            <ul>
                <li><a href="{{ route('admin.dashboard') }}">الإحصائيات</a></li>
                <li><a href="{{ route('admin.topic.index') }}">لوحة تحكم المواضيع</a></li>
                <li><a href="{{ route('admin.video.index') }}">لوحة تحكم الفيديوهات</a></li>
                <li><a href="{{ route('admin.quiz.index') }}">لوحة تحكم الاختبارات</a></li>
                <li><a href="{{ route('admin.profile') }}">البروفايل</a></li>
                <li><a href="{{ route('admin.changePassword') }}">تغيير كلمة السر</a></li>
                <li><a href="{{ route('admin.settings') }}">الإعدادات</a></li>
                <li><a href="{{ route('admin.logout') }}">خروج</a></li>
            </ul>
        @endauth

        @auth('kid')
            <ul>
                <li><a href="{{ route('kid.profile') }}">البروفايل</a></li>
                <li><a href="#">الاختبارات</a></li>
                <li><a href="{{ route('kid.changePassword') }}">تغيير كلمة السر</a></li>
                <li><a href="{{ route('kid.settings') }}">الإعدادات</a></li>
                <li><a href="{{ route('kid.logout') }}">خروج</a></li>
            </ul>
        @endauth
    </section>
</aside>
