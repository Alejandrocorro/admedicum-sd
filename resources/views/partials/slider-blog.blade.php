<div class="has-padding-10 has-background-linear suave"></div>
<div class="has-padding-top-80-desktop has-padding-bottom-50-desktop has-padding-top-40-mobile">
    <div class="container card-content" data-aos="fade-up">
        <div class="column is-12 is-12-mobile has-padding-5-mobile wrap-mobile is-flex justify-end align-items-flex-end has-padding-bottom-30-desktop">
            <div class="column is-4 is-12-mobile has-padding-5-mobile caja-text">
                <h2 class="title">
                    Related news
                </h2>
                <div class="subtitle">
                    Lorem ipsum dolor
                </div>
            </div>
            <div class="column is-8 is-12-mobile is-flex justify-end has-padding-5-mobile">
            </div>
        </div>
        
        <div class="slider-blog is-relative column has-padding-5-mobile is-12 is-12-mobile wrap-mobile is-flex">
            @query(['post_type' => 'blog'])
            @posts()
            <div class="column is-paddingless">
                <div class="big-card-primary-dark is-flex wrap">
                    <div class="is-full-width">
                        <div >
                            <div class="border-img carrusel-primary" style="background: url('@thumbnail('full', false)') center center / cover no-repeat;background-color: white;"></div>
                        </div>
                    </div>
                    <div class="has-padding-20 align-space-between has-padding-20 has-min-height-300 is-flex wrap">
                        <div class="is-full-width">
                            <span class="has-margin-bottom-10 tk-canada-type-gibson font-is-15">03.MAY 2021</span>
                        </div>
                        <h2 class="has-margin-bottom-10 title has-text-white font-is-30">@title</h2>
                        <p class="font-is-20">@excerpt</p>
                        <div class="has-margin-top-10">
                            <a href="@permalink" class="has-text-white tk-canada-type-gibson font-is-20">Read more
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endposts  
        </div>
    </div>
</div>