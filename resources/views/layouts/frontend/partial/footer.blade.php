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
                        <li><a target="_blank" class="icon-facebook" href="https://www.facebook.com/woldolgoprudny/"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li><a target="_blank" class="icon-instagram" href="https://www.instagram.com/woldolgoprudny/"><ion-icon name="logo-instagram"></ion-icon></a></li>
                        <li><a target="_blank" class="icon-vk" href="https://vk.com/wol_dolgoprudny"><ion-icon name="logo-vk"></ion-icon></a></li>
                        <li><a target="_blank" class="icon-youtube"href="https://www.youtube.com/channel/UCvFaJA6Ja8gV5sDplTuYsVQ"><ion-icon name="logo-youtube"></ion-icon></a></li>
                        
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
            {{-- <a style="color:white;" href="{{ asset('assets/frontend/files/personalData.pdf') }}" download="">«Политика в отношении обработки персональных данных»</a> --}}
            
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

            {{-- =============== modal form =================================== --}}

            {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Форма обратной связи</h5>
              
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="{{ route('feedback') }}">
                          @csrf
                          <div class="form-group">
                            <p>Оставьте сообщение или напишите молитвенную нужду!</p>
                            <label for="exampleFormControlInput1">Введите имя</label>
                            <input 
                            name="name" 
                            type="text" 
                            class="form-control" 
                            id="exampleFormControlInput1" 
                            placeholder="имя" value="{{ old('name') }}"
                            @if ($errors->has('title'))
                            <p class="text-danger">{{ $errors->first('name') }}</p>
                            @endif
                            >
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput12">Введите email</label>
                            <input name="email" type="email" class="form-control" id="exampleFormControlInput12" placeholder="name@example.com" value="{{ old('email') }}">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput13">Tелефон в формате 8xxxxxxxxxx</label>
                            <input name="phone" type="tel" class="form-control" id="exampleFormControlInput13" placeholder="8xxxxxxxxxx" value="{{ old('phone') }}">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Введите сообщение</label>
                            <textarea name="msg" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('msg') }}</textarea>
                          </div>
                          <div class="form-group form-check">
                            <input type="checkbox" class="" id="exampleCheck1" name="check" value="1">
                            <label class="" for="exampleCheck1">СОГЛАСИЕ НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ <a id="butId" class="formLink" href="">[?]</a></label>
                          </div>
                          <div id="first" class="my-hide-form">
                            <div class="form-top-link">
                              <a href="#" id="close-form"><ion-icon name="close-circle-outline"></ion-icon></a>
                            </div>
                            
                            Я даю свое согласие на обработку персональных данных, указанных в анкете, на неопределенный срок (сбор, накопление, хранение, уточнение, систематизация как на бумажном носителе, так и с использованием информационных систем) Местной религиозной организации Библейский центр христиан веры евангельской «Слово жизни» (далее оператор) ОГРН – 1037739249569, ИНН – 7726025431, для получения информационных писем/бюллетеней, журналов и открыток, при условии, что оператор будет хранить мои персональные данные, соблюдая требования законодательства РФ об обеспечении конфиденциальности. Я предупрежден(-а), что мои ФИО и почтовый адрес в процессе почтовой рассылки, возможно, будут переданы иной организации, имеющей право на почтовую рассылку.
                          
                          </div>
                          
                          <script>
                            let btn = document.getElementById("butId");
                            let close = document.getElementById("close-form");
                            btn.onclick = function() { 
                              event.preventDefault();
                              document.getElementById("first").classList.toggle("my-hide-form");
                              document.getElementById("first").classList.toggle("my-vision-form");
                            }
                            close.onclick = function() { 
                              event.preventDefault();
                              document.getElementById("first").classList.toggle("my-hide-form");
                              document.getElementById("first").classList.toggle("my-vision-form");
                            }
                            </script>
                          <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                  </div>
                </div>
              </div> --}}

              {{-- =============== modal form =================================== --}}
              
        </div><!-- row -->
    </div><!-- container -->
</footer>
<a href="#" class="back-to-top"></a>