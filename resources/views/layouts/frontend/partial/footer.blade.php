<footer>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6">
                <div class="footer-section">

                <a class="logo" href="{{ route('mainhome') }}"><img src="{{ asset('assets/frontend/images/min-logo-top.png') }}" alt="Logo Image"></a>
                    {{-- <p class="copyright">Bona @ 2017. All rights reserved.</p>
                    <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></p> --}}
                    <br>
                    <br>
                    <ul class="btm-icons">
                        <li><a class="icon-facebook" href="https://www.facebook.com/woldolgoprudny/"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li><a class="icon-instagram" href="https://www.instagram.com/woldolgoprudny/"><ion-icon name="logo-instagram"></ion-icon></a></li>
                        <li><a class="icon-vk" href="https://vk.com/wol_dolgoprudny"><ion-icon name="logo-vk"></ion-icon></a></li>
                        <li><a class="icon-youtube"href="https://www.youtube.com/channel/UCvFaJA6Ja8gV5sDplTuYsVQ"><ion-icon name="logo-youtube"></ion-icon></a></li>
                        
                    </ul>

                </div><!-- footer-section -->
            </div><!-- col-lg-4 col-md-6 -->

            <div class="col-lg-6 col-md-6">
                {{-- <div class="footer-section">
                    <h4 class="title"><b>Наши Служения</b></h4>                  
                    <ul>
                        @foreach ($allCategories as $category)
                    <li><a href="{{ route('category.posts', $category->slug) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div> --}}
            </div><!-- col-lg-4 col-md-6 -->
            <div class="col-lg-12 col-md-12 text-center">
                
                <p>© 2018 * Централизованная религиозная организация Содружество церквей христиан веры евангельской (пятидесятников) «Слово жизни»</p>
                <p>ИНН 7719286496, ОГРН 1037739246951, бланк свидетельства Министерства юстиции ЦА 03303, учетный № 0011010266, дата выдачи 13.04.2016г.</p>
            </div>
            {{-- <div class="col-lg-4 col-md-6">
                <div class="footer-section">

                    <h4 class="title"><b>SUBSCRIBE</b></h4>
                    <div class="input-area">
 
                    <form method="POST" action="{{ route('subscriber.store') }}">
                        @csrf
                            <input class="email-input" type="email" name="email" placeholder="Enter your email">
                            <button class="submit-btn" type="submit"><i class="icon ion-ios-email-outline"></i></button>
                        </form>
                    </div>

                </div><!-- footer-section -->
            </div><!-- col-lg-4 col-md-6 --> --}}

        </div><!-- row -->
    </div><!-- container -->
</footer>