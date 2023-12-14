</div>
</div>


</div>
</div>


</div>
</div>

</div>
</div>




<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>

<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->


<script type="text/javascript" src="{{ URL::asset('assets2/js/jquery/jquery.min.js')}}"></script>

<script type="text/javascript" src="{{ URL::asset('assets2/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets2/js/popper.js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets2/js/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ URL::asset('assets2/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ URL::asset('assets2/js/modernizr/modernizr.js')}}"></script>
<!-- am chart -->
<script src="{{ URL::asset('assets2/pages/widget/amchart/amcharts.min.js')}}"></script>
<script src="{{ URL::asset('assets2/pages/widget/amchart/serial.min.js')}}"></script>
<!-- Todo js -->
<script type="text/javascript " src="{{ URL::asset('assets2/pages/todo/todo.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{ URL::asset('assets2/pages/dashboard/custom-dashboard.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets2/js/script.js')}}"></script>
<script type="text/javascript " src="{{ URL::asset('assets2/js/SmoothScroll.js')}}"></script>
<script src="{{ URL::asset('assets2/js/pcoded.min.js')}}"></script>
<script src="{{ URL::asset('assets2/js/demo-12.js')}}"></script>
<script src="a{{ URL::asset('assets2/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>

{{-- <script type="text/javascript" src="{{ URL::asset('js/livewire.js')}}"></script> --}}

@yield('scriptfooter')



<script>
    var $window = $(window);
    var nav = $('.fixed-button');
    $window.scroll(function(){
    if ($window.scrollTop() >= 200) {
    nav.addClass('active');
    }
    else {
    nav.removeClass('active');
    }
    });
</script>






</body>

</html>

