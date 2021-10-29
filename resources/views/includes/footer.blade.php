      <!--  footer -->
      <footer>
        <div class="footer">
           <div class="container">
              <div class="row">
                 <div class="col-md-10 offset-md-1">
                    <div class="cont">
                       <h3>{{ $setting-> section_5_title }}</h3>
                       <span>{{ $setting-> section_5_subtitle }}</span>
                       <p>{{ $setting-> section_5_paragraph }}</p>
                       <div class="container">
                        <div class="basr-social-share social">
                            <ul class="">
                              <li>
                                <a target=”_blank” class="facebook" href=" {{ $setting->instagram_link }} ">
                                  <i class="fab fa-instagram"></i>
                                      <span>Instagram</span>
                                  </a>
                              </li>

                              <li>
                                <a target=”_blank” class="twitter" href=" {{ $setting->whatsapp_link }} ">
                                  <i class="fab fa-whatsapp"></i>
                                      <span>Whatsapp</span>
                                </a>
                              </li>

                              <li>
                                  <a target=”_blank” class="googleplus" href="{{ $setting->telegram_link }}">
                                  <i class="fab fa-telegram"></i>
                                  <span>Telegram</span>
                                  </a>
                              </li>

                              <li>
                                <a target=”_blank” class="linkedin" href=" {{ $setting->github_link }} ">
                                  <i class="fab fa-github"></i>
                                  <span>Github</span>
                                  </a>
                                  </li>
                            </ul>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <br />
           <div class="copyright">
              <div class="container">
                 <div class="row">
                    <div class="col-md-12">
                       <p style="font-size: 20px; color: #0c0f38;">{{ $setting-> footer_text}}</p>
                    </div>
                 </div>
              </div>
           </div>
        </div>

     </footer>

