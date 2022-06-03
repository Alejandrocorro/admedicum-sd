<div class="container is1630 margintop">
    <div class="column is-12 is-12-mobile wrap is-flex has-padding-top-40 has-padding-5-mobile">
       
        @query(['post_type' => 'case-studies'])
            @posts()
            <div class="column is-4 is-12-mobile small-card-2 extend small-case is-6-mobile">
                <div class="small-card">
                    <div class="align-space-between is-flex wrap">
                        <div class="img-case-studies border-color" style="background: url('@thumbnail('full', false)') center center / cover no-repeat;"></div>
                        <div class="has-padding-15-mobile has-padding-top-25 has-margin-auto" style="width:427px;height: 259px; display: grid;">
                            <h2 class="font-is-30 font-w is-700 has-padding-bottom-20 font-GOTHICB-normal" style=" height: 74px;overflow: hidden;margin-bottom: 15px;">@title</h2>
                            <h3 class="tk-canada-type-gibson font-is-20">@excerpt</h3>
                            <div class="column is-12 is-12-mobile" style="padding-left: 0 !important;">
                                <a href="#" style="padding-left: 0 !important;" class="tk-canada-type-gibson font-is-20 open-card open">Read more
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
            @endposts 
    </div>
</div>
<div class="container has-padding-20 has-padding-top-40-mobile has-padding-bottom-40-mobile has-padding-15-mobile has-margin-bottom-100-tablet">
    <div class="is-flex justify-center">
        <div class="column is-8 has-padding-5-mobile has-padding-left-65-desktop has-padding-right-65-desktop">
            <p class="font-is-20 tk-canada-type-gibson">
                *All ideas for illustration only. Any specific recommendations require a detailed confidential discussion with the client. Contact us to get started in that process. We tailor our proposals and services to the needs of each client in a cost-effective manner that upholds patients’ dignity as the first principal.
            </p>
        </div>
    </div>
</div>