<div class="has-background-linear normal has-margin-bottom-25 align-items-center has-min-height-200 has-padding-bottom-40-desktop has-padding-top-40-desktop is-flex justify-center" data-aos="fade-up">
    <div class="column is-11 is-12-mobile has-padding-left-25-mobile">
        <h3 class="has-text-white font-w is-600 font-is-30"><strong class="has-text-white font-is-60 is-full-width" style="display: block;">1</strong>We create societal value, by</h2>
    </div>
    
</div>

<div class="bor none">
    @fields('repeater_1_values', 'options')
    <div class="arrow-down center-25 is-flex justify-center has-padding-bottom-25" id="arrow" data-aos="zoom-in">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.536 17.803">
            <g id="Drop_down" data-name="Drop down" transform="translate(1.768 1.768)">
              <path id="Drop_down-2" data-name="Drop down" d="M853.882,840.516l12.5,12.5,12.5-12.5" transform="translate(-853.882 -840.516)" fill="none" stroke="#2f4f9d" stroke-width="5"/>
            </g>
        </svg>
    </div>
    <div class="border-card-primary create" data-aos="fade-up">
        <div class="is-flex wrap has-padding-15">
            <div class="column is-3 align-items-center is-12-mobile is-flex justify-center">
                <div class="">
                    <img class="img-values" src="@sub('imagen')" alt="">
                </div>
            </div>
            <div class="column is-9 is-12-mobile has-text-centered-mobile align-self-center">
                <p class="font-is-20">@sub('texto')</p>
            </div>
        </div>
    </div>
@endfields
</div>
