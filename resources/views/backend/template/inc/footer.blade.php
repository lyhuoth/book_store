<!-- begin::Footer -->
<footer class="m-grid__item m-footer ">
    <div class="m-container m-container--fluid m-container--full-height m-page__container">
        <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
            <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                <span class="m-footer__copyright">
                    2019 &copy; IDG
                </span>
            </div>
        </div>
    </div>
</footer>

<!-- end::Footer -->
</div>

<!-- end::Quick Sidebar -->

<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->
<!--begin::Global Theme Bundle -->
<script src="{{asset('backend/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>


<!--end::Page Scripts -->
@stack('javascript') 
</body>

<!-- end::Body -->
</html>