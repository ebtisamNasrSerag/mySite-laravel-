<div class="bg-footer">
            <img src="{{ asset('assets/images/background/btm.png')}}" alt="">
        </div>
        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row">
                        <!--Big Column-->
                        <div class="big-column col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <!--Footer Column-->
                                <div class="footer-column col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="footer-widget about-widget">
                                        <div class="footer-logo">
                                            <figure>
                                                <a href="index.html"><img src="{{ asset('assets/images/'.$site_data['logo'])}}" alt=""></a>
                                            </figure>
                                        </div>
                                        <div class="footer-widget links-widget">
                                            <div class="widget-content">
                                                <ul class="list">
                                                    <li>
                                                    @if(app()->getLocale() == 'ar')
                                                    {{$site_data['address_ar']}}
                                                    @else
                                                    {{$site_data['address_en']}}
                                                    @endif
                                                    </li>
                                                    <li>{{$site_data['phone']}}</li>
                                                    <li>{{$site_data['email']}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-xl-5 col-lg-5 col-md-6 col-sm-12">
                                    <div class="footer-widget recent-posts">
                                        <h2 class="widget-title">{{trans('lang.contact_us')}}</h2>
                                        <!--Footer Column-->
                                        <div class="contact-page-section">
                                            <div class="contact-form">
                                                <form class="form" action="{{url('/contact')}}">
                                                    <div id="form-results"></div>
                                                    {{csrf_field()}}
                                                    <div class="row">
                                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                                            <input type="text" name="username" placeholder="{{trans('lang.Name')}}" required="">
                                                        </div>

                                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                                            <input type="text" name="phone" placeholder="{{trans('lang.Phone num')}}" required="">
                                                        </div>

                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                            <input type="email" name="email" placeholder="{{trans('lang.email')}}" required="">
                                                        </div>

                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                            <textarea name="message" placeholder="{{trans('lang.Message')}}"></textarea>
                                                        </div>

                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                            <button class="theme-btn btn-style-three submit-btn"  name="submit-form">{{trans('lang.send')}}</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h2 class="widget-title">{{trans('lang.map')}}</h2>
                                        <div class="map">
                                            <iframe src="http://maps.google.com/maps?q={{$site_data['map_lat']}}, {{$site_data['map_lng']}}&z=15&output=embed"  width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Footer Bottom-->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <div class="social-links">
                            <ul class="social-icon-two">
                                <li><a href="{{$site_data['facebook']}}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{$site_data['twitter']}}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{$site_data['insta']}}"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="{{$site_data['youtube']}}"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>

                        <div class="copyright-text">
                            <p>Copyright © 2019 <a href="#">Ebtisam Nasr.</a> All right reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Main Footer -->
    </div>
    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-o-up"></span></div>

    <script src="{{ asset('assets/js/jquery.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('assets/js/owl.js')}}"></script>
    <script src="{{ asset('assets/js/wow.js')}}"></script>
    <script src="{{ asset('assets/js/appear.js')}}"></script>
    <script src="{{ asset('assets/js/mixitup.js')}}"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>
    <script >
        $(document).on('click', '.submit-btn', function(){

        btn = $(this);
        form = btn.parents('.form');

        url  = form.attr('action');
        data = new FormData(form[0]);

        formResults = form.find('#form-results');

        $.ajax({
                url : url,
                type : 'POST',
                data : data,
                dataType : 'json',
                
                success : function(results){
                  
                    if(results.errors)
                    {
                        formResults.removeClass().addClass('alert alert-danger').html(results.errors);
                    }else{
                        formResults.removeClass().addClass('alert alert-success').html(results.success);
                         $(form)[0].reset();

                    }

                },
                cache : false,
                processData : false,
                contentType : false,
            });
        return false;
    });
    </script>
</body>
</html>
