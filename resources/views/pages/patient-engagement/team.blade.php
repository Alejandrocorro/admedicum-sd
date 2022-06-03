<div class="has-padding-10 has-background-linear suave"></div>
<div class="has-padding-bottom-80-desktop" id="team">
    <div class="container card-content is-flex">
        <div class="column is-12 is-flex justify-center">
            <div class="column is-7 is-12-mobile is-paddingless">
                <div class="caja-text">
                    <span class="content">
                        THE TEAM
                    </span>
                    <h2 class="title">
                        Meet the admedicum team of patient engagement specialists
                    </h2>
                    <div class="subtitle is-full-width">
                        Lorem ipsum
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container is1630">
        <div class="slider-is4 is-arrow-none column is-12 is-12-mobile has-padding-5-mobile wrap-mobile is-flex">
            @query(['post_type' => 'empleados'])
            @posts()
            <div class="column is-12-mobile has-padding-5-mobile small-card-2 extend small-about is-6-mobile">
              <div class="small-card">
                  <div class="align-self-flex-start is-flex wrap">
                      <div class="img-about is-2 border-color" style="background: url('@thumbnail('full', false)') center center / cover no-repeat;"></div>
                      <div class="has-padding-20" style="min-height: 259px; display: grid;">
                          <h2 class="font-w is-700" style="color: white !important;">@title</h2>
                          <h3 style="color: white !important; font-weight: 400 !important;">@excerpt</h3>
                          <div class="column is-12 is-12-mobile" style="padding-left: 0 !important;">
                              <a href="@permalink" style="padding-left: 0 !important;" class="open-card open is-2 font-is-20 tk-canada-type-gibson">Read more
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                  </svg>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            @endposts
        </div>
    </div>
</div>
