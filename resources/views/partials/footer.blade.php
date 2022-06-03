@if(!is_front_page())
  @include('partials.featured')
@endif


{{-- @include('forms.contact') 
button logos-footer has-margin-left-10-desktop has-margin-right-10-desktop is-borderless is-paddingless--}}
<div class="has-padding-10 has-background-linear back"></div>
<footer class="hero is-medium">
  <div class="hero-body has-background-linear footer">
    <div class="container">
      <div class="column is-12 justify-center is-flex justify-flex-start-mobile">
        <a href="#" class="button logos-footer has-margin-left-15 has-margin-right-15" style="background: transparent !important;">
          <span class="">
              <svg id="Twitter" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40">
                <defs>
                  <clipPath id="clip-path4">
                    <rect id="Rectángulo_104" data-name="Rectángulo 10" width="40" height="40" fill="none"/>
                  </clipPath>
                </defs>
                <rect id="Rectángulo_94" data-name="Rectángulo 9" width="40" height="40" fill="#319966"/>
                <g id="Grupo_94" data-name="Grupo 9">
                  <g id="Grupo_84" data-name="Grupo 8" clip-path="url(#clip-path)">
                    <path id="Trazado_324" data-name="Trazado 32" d="M44.038,24.079a11.46,11.46,0,0,1-3.616,1.433,5.733,5.733,0,0,0-8.1-.292l-.1.092a6.049,6.049,0,0,0-1.667,5.649,16.4,16.4,0,0,1-12.015-6.232,6,6,0,0,0,1.8,7.9,5.754,5.754,0,0,1-2.633-.733,5.883,5.883,0,0,0,4.666,5.8,5.568,5.568,0,0,1-1.533.2,5.648,5.648,0,0,1-1.1-.117,5.815,5.815,0,0,0,5.416,4.1,11.666,11.666,0,0,1-8.615,2.45,16.347,16.347,0,0,0,22.618-4.783q.107-.165.211-.333a17.047,17.047,0,0,0,2.6-9.032v-.783a11.881,11.881,0,0,0,2.9-3.066,11.482,11.482,0,0,1-3.333.933,5.9,5.9,0,0,0,2.5-3.183" transform="translate(-10.707 -15.329)" fill="#fff"/>
                  </g>
                </g>
              </svg>
          </span>
        </a>
        <a href="#" class="button logos-footer has-margin-left-15 has-margin-right-15" style="background: transparent !important;">
          <span class="">
            <svg id="Facebook" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40">
              <defs>
                <clipPath id="clip-path5">
                  <rect id="Rectángulo_125" data-name="Rectángulo 12" width="40" height="40" fill="none"/>
                </clipPath>
              </defs>
              <rect id="Rectángulo_115" data-name="Rectángulo 11" width="40" height="40" fill="#319966"/>
              <g id="Grupo_125" data-name="Grupo 12">
                <g id="Grupo_115" data-name="Grupo 11" clip-path="url(#clip-path)">
                  <path id="Trazado_335" data-name="Trazado 33" d="M61.309,26.217V22.732c0-1.51.349-2.323,2.788-2.323h3.02V14.6H62.471c-5.808,0-8.132,3.833-8.132,8.131v3.485H49.693v5.808h4.646V49.45h6.97V32.025H66.42l.7-5.808Z" transform="translate(-32.162 -9.45)" fill="#fff"/>
                </g>
              </g>
            </svg>
          </span>
        </a> 
        <a href="#" class="button logos-footer has-margin-left-15 has-margin-right-15" style="background: transparent !important;">
          <span class="">
            <svg id="Linkedin" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40">
              <defs>
                <clipPath id="clip-path2">
                  <rect id="Rectángulo_152" data-name="Rectángulo 152" width="40" height="40" fill="none"/>
                </clipPath>
              </defs>
              <rect id="Rectángulo_132" data-name="Rectángulo 13" width="40" height="40" fill="#319966"/>
              <rect id="Rectángulo_142" data-name="Rectángulo 14" width="7.031" height="20.892" transform="translate(3.884 14.591)" fill="#fff"/>
              <g id="Grupo_152" data-name="Grupo 15">
                <g id="Grupo_142" data-name="Grupo 14" clip-path="url(#clip-path)">
                  <path id="Trazado_342" data-name="Trazado 34" d="M14.312,12.805a3.6,3.6,0,1,1-.091,0Z" transform="translate(-6.876 -8.288)" fill="#fff"/>
                  <path id="Trazado_352" data-name="Trazado 35" d="M55.324,39.953A6.994,6.994,0,0,0,49,43.377V40.445H41.991V61.337h7.031V49.661a4.844,4.844,0,0,1,.219-1.694,3.843,3.843,0,0,1,3.643-2.532c2.532,0,3.643,1.822,3.643,4.718V61.337h6.9V49.352c0-6.411-3.479-9.4-8.105-9.4" transform="translate(-27.178 -25.854)" fill="#fff"/>
                </g>
              </g>
            </svg>
          </span>
        </a>
      </div>
      <div class="column is-12 justify-center is-flex justify-flex-start-mobile">
          {!! wp_nav_menu(['menu-footer' => 'menu-footer', 'menu_class' => 'menu-items-footer is-full-width font-is-20 tk-canada-type-gibson', 'echo' => false]) !!}
      </div>
      
      <div class="column is-12 justify-center is-flex justify-flex-start-mobile has-padding-bottom-25">
        <a href="{{home_url()}}">
          @include('pages.home.logo')
        </a>
      </div>
      <div class="column is-12 justify-center is-flex justify-flex-start-mobile">
        <div class="text-center has-text-grey font-is-20 tk-canada-type-gibson">
          © 2022 admedicum.com - All rights reserved. 
          <a href="#" class="has-margin-left-30-tablet has-text-grey font-is-20 tk-canada-type-gibson">
            <span>
              Privacy Policy
            </span>
          </a>
          <a href="#" class="has-margin-left-30-tablet has-text-grey font-is-20 tk-canada-type-gibson">
            <span>
              Cookies
            </span>
          </a>
          <a href="#" class="has-margin-left-30-tablet has-text-grey font-is-20 tk-canada-type-gibson">
            <span>
              Legal Informacion
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>
<style>
  .logos-footer svg{
      fill: #319966;
  }
  .is-paddingless{
    padding: 0 !important;
  }
  </style>