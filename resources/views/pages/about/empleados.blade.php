<div class="is-relative class-empleados">
    <div class="column is-12 has-padding-5-mobile wrap is-flex">
            @query(['post_type' => 'empleados'])
            @posts()
                <div class="column is-3 is-12-mobile small-card-2 extend small-about is-6-mobile">
                    <div class="small-card is-full-width-mobile" style="width:598px;"">
                        <div class=" is-flex wrap is-full-width" style="display: grid !important;grid-template-rows: 324px calc(100% - 324px);">
                            <div class="img-about border-color" style="background: url('@thumbnail('full', false)') center center / cover no-repeat;"></div>
                            <div class="is-info-empleados-hover hover has-padding-20-mobile has-padding-top-25 has-margin-auto" style="width:290px;min-height: 300px; display: grid;margin-top: 0 !important; flex: none;height: auto; margin-bottom:0 !important;">
                                
                                <div class="oculto-hover" style="position: absolute !important; top: 50px;">
                                    <h2 class="font-GOTHICB-normal font-w is-700 has-padding-bottom-20">@title</h2>
                                    @hasfield('puesto')
                                    <h3 class="tk-canada-type-gibson" >
                                        @field('puesto')
                                    </h3>
                                    @endfield  
                                </div>     
                               <div style="display: flex; flex-direction: column;">
                                <h3 class="muestra-hover tk-canada-type-gibson" style="position: relative !important; opacity: 0;">@excerpt
                                
                                    <div class="is-full-width has-padding-bottom-20 has-padding-top-20">
                                        @hasfield('email')
                                        <a href="mailto:@field('email')" class="btn-blue-light is-2 font-is-20 tk-canada-type-gibson is-full-width has-text-centered">
                                            <span class="is-full-width">Contact</span>
                                        </a>
                                        @endfield 
                                    </div>
                                </h3>
                                
                                <div class="column is-12 is-12-mobile has-padding-bottom-20 has-padding-top-20" style="padding-left: 0 !important; margin-top: auto;">
                                    <a href="@permalink" style="padding-left: 0 !important;" class="open-card open font-is-20 tk-canada-type-gibson">Read more
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                        </svg>
                                    </a>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endposts
    </div>
</div>