@extends('layouts.app')

@section('content')

<div class="is-blog" style="display: none;">
  <div class="hero is-fullheight has-background-linear back-hero is-81 filter-hero">
    <div class="hero-body has-padding-10-mobile has-padding-top-90-mobile align-items-flex-start">
      <div class="has-padding-top-80-mobile is-full-width" style="padding-top: 200px;">
        <div class="container is1630 card-content has-padding-top-5-desktop justify-center is-flex wrap has-padding-10-mobile">
          @if (! have_posts())
          @include('components.404')
          @else 
            <div class="column is-6 is-12-mobile is-paddingless has-text-centered caja-text align-self-center">
              <span class="content">
                  blog
              </span>
              <h1 class="title">
                  Admedicum news
              </h1>
              <div class="subtitle has-margin-auto">
                  Our greatest passion is learning from patients and partnering with them to capture and share their expertise with professionals in the healthcare system, in particular industry, payers, and HCPs.
              </div>
              
          </div>
          <div class="column is-12 is-12-mobile ">
              <div class="is-flex justify-center wrap-mobile">
                  <a href="#" class="has-text-centered-mobile font-is-20 tk-canada-type-gibson has-text-dark has-padding-left-20 has-padding-right-20">
                      <span>Patient Engagement</span>
                  </a>
                  <a href="#" style="border-left: 3px solid #2F4F9D;" class="is-full-width-mobile has-text-centered-mobile is-border-none-mobile font-is-20 tk-canada-type-gibson has-text-dark has-padding-left-20 has-padding-right-20">
                      <span>Patient Access</span>
                  </a>
                  <a href="#" style="border-left: 3px solid #2F4F9D;" class="is-full-width-mobile has-text-centered-mobile is-border-none-mobile font-is-20 tk-canada-type-gibson has-text-dark has-padding-left-20 has-padding-right-20">
                      <span>Patient-focused drug development</span>
                  </a>
                  <a href="#" style="border-left: 3px solid #2F4F9D;" class="is-full-width-mobile has-text-centered-mobile is-border-none-mobile font-is-20 tk-canada-type-gibson has-text-dark has-padding-left-20 has-padding-right-20">
                      <span>Patient-focused digital solutions</span>
                  </a>
                  <a href="#" style="border-left: 3px solid #2F4F9D;" class="is-full-width-mobile has-text-centered-mobile is-border-none-mobile font-is-20 tk-canada-type-gibson has-text-dark has-padding-left-20 has-padding-right-20">
                      <span>Show all</span>
                  </a>
                </div>
            </div>
          @endif
        </div>
      </div>
    </div>
    <div class="columns is-multiline is-contenedor-blog">
      <div class="container is1630 margintop">
        <div class="column is-12 is-12-mobile wrap is-flex has-padding-top-40-mobile has-padding-5-mobile">
          @while(have_posts()) @php(the_post())
            <div class="column is-4 is-12-mobile small-card-2 extend small-case-2 is-6-mobile">
              <div class="small-card">
                <div class="align-space-between is-flex wrap">
                  <div class="img-case-studies border-color" style="background: url('@thumbnail('full', false)') center center / cover no-repeat;background-color: white;"></div>
                  <div class="has-padding-15-mobile has-padding-top-25 has-margin-auto" style="width: 428px;height: 361px; display: grid;">
                    <div class="">
                        <span class="has-margin-bottom-10 font-GOTHICB-normal font-is-15" >30.SEPTEMBER 2020</span>
                        <h2 class="font-is-30 font-w is-700 has-padding-bottom-20 has-margin-top-20" style="height: 74px;overflow: hidden;margin-bottom: 15px;">@title</h2>
                    </div>
                    <h3 class="tk-canada-type-gibson font-is-20">@excerpt</h3>
                    <div class="column is-12 is-12-mobile" style="padding-left: 0 !important;">
                        <a href="@permalink" style="padding-left: 0 !important;" class="tk-canada-type-gibson font-is-20 open-card open">Read more
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endwhile
        </div>
      </div>
    </div>
  </div>
</div>

<div class="is-studies" style="display: none;">
  <div class="hero is-fullheight has-background-linear back-hero is-81 filter-hero">
    <div class="hero-body has-padding-10-mobile has-padding-top-90-mobile">
      <div class="container is1630 card-content justify-center is-flex wrap has-padding-10-mobile" style="padding-top: 200px;">
        @if (! have_posts())
        @include('components.404')
        @else 
          <div class="column is-6 is-12-mobile is-paddingless has-text-centered caja-text align-self-center">
            <span class="content">
              CASE STUDIES
            </span>
            <h1 class="title">
                We help you understanding patient needs with a customized mix of approaches.
            </h1>
            <div class="subtitle has-margin-auto has-padding-left-20-desktop has-padding-right-20-desktop">
                Our greatest passion is learning from patients and partnering with them to capture and share their expertise with professionals in the healthcare system, in particular industry, payers, and HCPs. With every project, our goal is co-creating solutions that benefit both patients and industry.
            </div>
        </div>
        <div class="column is-12 is-12-mobile ">
            <div class="is-flex justify-center wrap-mobile">
                <a href="#" class="has-text-centered-mobile font-is-20 tk-canada-type-gibson has-text-dark has-padding-left-20 has-padding-right-20">
                    <span>Patient Engagement</span>
                </a>
                <a href="#" style="border-left: 3px solid #2F4F9D;" class="is-full-width-mobile has-text-centered-mobile is-border-none-mobile font-is-20 tk-canada-type-gibson has-text-dark has-padding-left-20 has-padding-right-20">
                    <span>Patient Access</span>
                </a>
                <a href="#" style="border-left: 3px solid #2F4F9D;" class="is-full-width-mobile has-text-centered-mobile is-border-none-mobile font-is-20 tk-canada-type-gibson has-text-dark has-padding-left-20 has-padding-right-20">
                    <span>Patient-focused drug development</span>
                </a>
                <a href="#" style="border-left: 3px solid #2F4F9D;" class="is-full-width-mobile has-text-centered-mobile is-border-none-mobile font-is-20 tk-canada-type-gibson has-text-dark has-padding-left-20 has-padding-right-20">
                    <span>Patient-focused digital solutions</span>
                </a>
                <a href="#" style="border-left: 3px solid #2F4F9D;" class="is-full-width-mobile has-text-centered-mobile is-border-none-mobile font-is-20 tk-canada-type-gibson has-text-dark has-padding-left-20 has-padding-right-20">
                    <span>Show all</span>
                </a>
            </div>
          </div>
        @endif
      </div>
    </div>
    <div class="columns is-multiline is-contenedor-case-studies">
      <div class="container is1630 margintop">
        <div class="column is-12 is-12-mobile wrap is-flex has-padding-top-40-mobile has-padding-5-mobile">
          @while(have_posts()) @php(the_post())
            <div class="column is-4 is-12-mobile small-card-2 extend small-case is-6-mobile">
              <div class="small-card">
                  <div class="align-space-between is-flex wrap">
                      <div class="img-case-studies border-color" style="background: url('@thumbnail('full', false)') center center / cover no-repeat;"></div>
                      <div class="has-padding-15-mobile has-padding-top-25 has-margin-auto" style="width:427px;height: 259px; display: grid;">
                          <h2 class="font-is-30 font-w is-700 has-padding-bottom-20 font-GOTHICB-normal" style=" height: 74px;overflow: hidden;margin-bottom: 15px;">@title</h2>
                          <h3 class="tk-canada-type-gibson font-is-20">@excerpt</h3>
                          <div class="column is-12 is-12-mobile" style="padding-left: 0 !important;">
                              <a href="@permalink" style="padding-left: 0 !important;" class="tk-canada-type-gibson font-is-20 open-card open">Read more
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                  </svg>
                              </a>
                              <a href="#" class="tk-canada-type-gibson font-is-20 closer-card closer">Close x</a>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          @endwhile   
        </div>
      </div>
    </div>
  </div>
</div>

<div class="is-blog" style="display: none;">
  
</div>

<div class="is-studies" style="display: none;">
  
</div>

<div class="is-studies" style="display: none;">
  <div class="container has-padding-20 has-padding-top-40-mobile has-padding-bottom-40-mobile has-padding-15-mobile has-margin-bottom-100-tablet">
    <div class="is-flex justify-center">
        <div class="column is-8 has-padding-5-mobile has-padding-left-65-desktop has-padding-right-65-desktop">
            <p class="font-is-20 tk-canada-type-gibson">
                *All ideas for illustration only. Any specific recommendations require a detailed confidential discussion with the client. Contact us to get started in that process. We tailor our proposals and services to the needs of each client in a cost-effective manner that upholds patients’ dignity as the first principal.
            </p>
        </div>
    </div>
  </div>
</div>
<div class="is-blog" style="display: none;">
  <div class="container has-padding-20 has-padding-top-40-mobile has-padding-bottom-40-mobile has-padding-15-mobile has-margin-bottom-100-tablet">
    <div class="is-flex justify-center">
        <div class="column is-7 has-padding-5-mobile">
            <div class="has-padding-top-30 column is-12 is-flex justify-center">
                <a href="" id="readmoreblog" class="btn-blue-light is-2 font-is-20 tk-canada-type-gibson" ><span>Read more</span></a>
            </div>
        </div>
      </div>
  </di>
</div>
{!! get_the_posts_navigation() !!}

{{--
@include('pages.blog.hero')
@include('pages.blog.contenedor-blog')
--}}
@endsection