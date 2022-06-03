<nav class="navbar is-fixed-top is-spaced" role="navigation">
  <div class="container">
    <div class="navbar-brand">
      <a class="level-item has-margin-right-50 has-padding-5 has-margin-5-mobile" href="{{home_url()}}" style="margin-top: -15px;">
        {{--<img class="has-padding-right-60-mobile" src="/app/uploads/2022/04/Zeichenflache-1-1.png" width="210">--}}
        @include('pages.home.logo')
      </a>
      <div class="is-relative is-inline-block-mobile" style="display: none;">
        <ul class="ul-idioma idioma-nav-mobile navbar-mobile-is"> 
          <li class="list-dropdown open-en open-en-nav-mobile"> 
            <a class="dropdown-item has-text-dark ">English
              <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 28.536 17.803">
                <g id="Drop_down" data-name="Drop down" transform="translate(1.768 1.768)">
                  <path id="Drop_down-2" data-name="Drop down" d="M853.882,840.516l12.5,12.5,12.5-12.5" transform="translate(-853.882 -840.516)" fill="none" stroke="#2f4f9d" stroke-width="5"/>
                </g>
              </svg>
            </a>
          </li>
          <li class="list-dropdown open-de"> 
            <a class="dropdown-item has-text-dark">Deutch
              <svg xmlns="http://www.w3.org/2000/svg" style="c" width="10" height="10" viewBox="0 0 28.536 17.803">
                <g id="Drop_down" data-name="Drop down" transform="translate(1.768 1.768)">
                  <path id="Drop_down-2" data-name="Drop down" d="M853.882,840.516l12.5,12.5,12.5-12.5" transform="translate(-853.882 -840.516)" fill="none" stroke="#2f4f9d" stroke-width="5"/>
                </g>
              </svg>
            </a>
          </li>
          <li class="list-dropdown open-fre"> 
            <a class="dropdown-item has-text-dark">French
              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;" width="10" height="10" viewBox="0 0 28.536 17.803">
                <g id="Drop_down" data-name="Drop down" transform="translate(1.768 1.768)">
                  <path id="Drop_down-2" data-name="Drop down" d="M853.882,840.516l12.5,12.5,12.5-12.5" transform="translate(-853.882 -840.516)" fill="none" stroke="#2f4f9d" stroke-width="5"/>
                </g>
              </svg>
            </a>
          </li>
        </ul>
      </div>
      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
        data-target="navbar-menu">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbar-menu" class="navbar-menu">
      <div class="navbar-start">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-item is-flex-desktop', 'echo' => false]) !!}
        @endif
        
      </div>
      <div class="navbar-end">
        <div class="is-relative is-inline-none-mobile">
          <ul class="ul-idioma idioma-nav"> 
            <li class="list-dropdown open-en-nav "> 
              <a class="dropdown-item has-text-dark ">English
                <svg xmlns="http://www.w3.org/2000/svg" style="" width="10" height="10" viewBox="0 0 28.536 17.803">
                  <g id="Drop_down" data-name="Drop down" transform="translate(1.768 1.768)">
                    <path id="Drop_down-2" data-name="Drop down" d="M853.882,840.516l12.5,12.5,12.5-12.5" transform="translate(-853.882 -840.516)" fill="none" stroke="#2f4f9d" stroke-width="5"/>
                  </g>
                </svg>
              </a>
            </li>
            <li class="list-dropdown open-de"> 
              <a class="dropdown-item has-text-dark">Deutch
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;" width="10" height="10" viewBox="0 0 28.536 17.803">
                  <g id="Drop_down" data-name="Drop down" transform="translate(1.768 1.768)">
                    <path id="Drop_down-2" data-name="Drop down" d="M853.882,840.516l12.5,12.5,12.5-12.5" transform="translate(-853.882 -840.516)" fill="none" stroke="#2f4f9d" stroke-width="5"/>
                  </g>
                </svg>
              </a>
            </li>
            <li class="list-dropdown open-fre"> 
              <a class="dropdown-item has-text-dark">French
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;" width="10" height="10" viewBox="0 0 28.536 17.803">
                  <g id="Drop_down" data-name="Drop down" transform="translate(1.768 1.768)">
                    <path id="Drop_down-2" data-name="Drop down" d="M853.882,840.516l12.5,12.5,12.5-12.5" transform="translate(-853.882 -840.516)" fill="none" stroke="#2f4f9d" stroke-width="5"/>
                  </g>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
