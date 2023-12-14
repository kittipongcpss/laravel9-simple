@section('navright')
<ul class="nav-right">
    <!--<li class="header-notification">
        <a href="#!">
            <i class="ti-bell"></i>
            <span class="badge bg-c-pink"></span>
        </a>
        <ul class="show-notification">
            <li>
                <h6>Notifications</h6>
                <label class="label label-danger">New</label>
            </li>
            <li>
                <div class="media">
                    <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="notification-user">John Doe</h5>
                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                        <span class="notification-time">30 minutes ago</span>
                    </div>
                </div>
            </li>
            <li>
                <div class="media">
                    <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="notification-user">Joseph William</h5>
                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                        <span class="notification-time">30 minutes ago</span>
                    </div>
                </div>
            </li>
            <li>
                <div class="media">
                    <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="notification-user">Sara Soudein</h5>
                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                        <span class="notification-time">30 minutes ago</span>
                    </div>
                </div>
            </li>
        </ul>
    </li>-->
    <li class="user-profile header-notification">
       
            
       
        @guest
        <i class="ti-user" style="font-size: 18px;"></i> 
            @if(Auth::check())
            {{ Auth::user()->name }}
            <span> (ผู้ดูแลระบบ) </span>
            @else
            <span> ผู้ใช้งานทั่วไป </span>
            @endif
            <i class="ti-angle-down"></i>
            <ul class="show-notification profile-notification">
            @if (Route::has('login'))
            <li><a href="{{ route('login') }}" > <i class="ti-angle-double-right"></i> เข้าระบบ</a></li>
            @endif
            {{-- @if (Route::has('register'))
            <li ><a href="{{ route('register') }}" > <i class="ti-write"></i> ลงทะเบียน</a></li>
            @endif --}}
            </ul>
        @else

            <i class="ti-user" style="font-size: 18px;"></i> 
            {{ Auth::user()->name }}

            <span> (ผู้ดูแลระบบ) </span>
            <i class="ti-angle-down"></i>
        {{--  @php if(isset($_SESSION['username'])){

            $tmp = con::db()->select('member','*',[
            'username[=]' => $_SESSION['username'],
            'password[=]' => $_SESSION['password']
            ]);
            $member = $tmp[0];
        ?>  --}}

        <ul class="show-notification profile-notification">
            <li>
                <a href="./?m=main">
                    <i class="ti-home"></i> หน้าหลัก
                </a>
            </li>
            <li>
                <a href="./?m=login&p=main">
                    <i class="ti-user"></i> จัดการผู้สมัคร
                </a>
            </li>
            <li>
                
                <a  href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="ti-power-off"></i> ออกจากระบบ
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

                    
                
            </li>
        </ul>
        
        @endguest    
    </li>
</ul>
@endsection