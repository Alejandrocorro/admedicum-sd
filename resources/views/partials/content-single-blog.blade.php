<div class="hero is-fullheight has-background-linear back-hero is-85 filter-hero">
    <div class="hero-body has-padding-10-mobile has-padding-top-100-mobile">
        <div class="container is1630 card-content is-flex wrap-reverse-mobile wrap-mobile has-padding-10-mobile">
            <div class="column is-6 is-12-mobile is-flex">
                <div class="column is-12 is-12-mobile is-paddingless align-self-center caja-text">
                  <div class="" >
                    <span class="content">
                        BLOG
                    </span>
                  </div>
                  <div class="has-padding-top-20">
                      <span class="font-GOTHICB-normal font-is-30 is-line-30 has-text-dark">
                          03. MAY 2021
                      </span>
                  </div>
                  <h1 class="title font-is-60">
                      @title
                  </h1>
                  <div class="subtitle">
                      @excerpt
                  </div>
                  <div class="has-padding-bottom-30 has-padding-top-30">
                    <a href="#" data-target="#ven" class="go-down btn-blue-light is-2 font-is-20 tk-canada-type-gibson">
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
    <div class="container has-padding-bottom-80 hero-body article-content has-padding-left-15-desktop has-padding-right-15-desktop" id="ven">
      <article @php(post_class())>
        <div class="column is-7 is-12-mobile has-margin-auto content-blog is-paddingless">
          <div class="font-is-20 entry-content class-case-blog">
            @php(the_content())
          </div>
          <div class="">
            <div class="has-margin-auto">
              <div class="column is-12 has-padding-bottom-50 has-padding-top-50 is-flex justify-center">
                <a href="{{home_url('blog/' . $item->slug)}}" class="btn-blue-light is-2 font-is-20 tk-canada-type-gibson" ><span>Go back</span></a>
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