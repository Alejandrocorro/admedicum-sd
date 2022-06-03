{{--
@include('partials.page-header')
  <div class="is-relative">
    <div class="container py-6">
      <h1 class="title is-1 has-margin-bottom-40">@title</h1>
      <article @php(post_class())>
        <div class="entry-content">
          @php(the_content())
        </div>
      
        <footer>
          {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
        </footer>
      
        @php(comments_template())
      </article>
    </div>
  </div>--}}

  <div class="hero is-fullheight has-background-linear back-hero is-85 filter-hero">
    <div class="hero-body has-padding-10-mobile has-padding-top-100-mobile">
        <div class="container is1630 card-content is-flex wrap-reverse-mobile wrap-mobile has-padding-10-mobile">
            <div class="column is-6 is-12-mobile is-flex">
                <div class="column is-12 is-12-mobile is-paddingless align-self-center caja-text">
                  <div class="column is-10 is-12-mobile is-paddingless">
                    <h1 class="title font-is-60">
                      @title
                    </h1>
                  </div>
                  @hasfield('puesto')
                    <div class="puesto">
                        @field('puesto')
                    </div>
                  @endfield
                  <div class="subtitle">
                      @excerpt
                  </div>
                  <div class="has-padding-bottom-30 has-padding-top-30">
                    <a href="" data-target="#ven" class="btn-blue-light is-2 font-is-20 tk-canada-type-gibson go-down ">
                      <span>Continue reading</span>
                    </a>
                  </div>
                </div>
            </div>
            @include('partials.page-header')
        </div>
    </div>
    <div class="arrow-down center-normal margin-mobile-50" style="margin-top: -150px;">
        <a href="#" data-target="#ven" class="flex-column-mobile is-relative go-down has-text-primary font-w is-800 has-margin-top-auto has-margin-top-40-mobile has-margin-bottom-40 flex-column align-items-center">
            <img class="has-margin-top-20" src="/app/themes/web-2/dist/images/down.png" width="65" alt="">
        </a> 
    </div>
  </div>
  <div class="content is-single">
    <div class="container has-padding-bottom-120-desktop hero-body article-content" id="ven">
      <article @php(post_class())>
        <div class="column is-7 is-12-mobile has-margin-auto content-blog is-paddingless">
          <div class="font-is-20 entry-content class-case">
            @php(the_content())
          </div>
          <div>
            <div class="has-margin-auto">
              <div class="column is-12 has-padding-bottom-50 has-padding-top-50 is-flex justify-center">
                  @hasfield('email')
                  <a href="mailto:@field('email')" class="btn-blue-light is-2 font-is-20 tk-canada-type-gibson has-text-centered">
                      <span class="is-full-width">Contact</span>
                  </a>
                  @endfield 
              </div>
            </div>
          </div>
          
        </div>
        <footer>
          {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
        </footer>
      
        @php(comments_template())
      </article>
    </div>
  </div>

  @include('partials.slider-blog')