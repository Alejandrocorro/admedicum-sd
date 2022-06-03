
<div class="has-padding-10 has-background-linear suave"></div>
<div class="has-padding-bottom-30-desktop has-padding-top-30-desktop has-padding-top-40-mobile">
    <div class="container card-content is-flex wrap">
        <div class="column is-12 is-flex justify-center has-padding-5-mobile">
            <div class="column is-7 is-12-mobile has-padding-5-mobile is-paddingless caja-text">
                <div class="">
                    <h2 class="title">
                        Our work with patient organisations
                    </h2>
                    <div class="subtitle is-full-width">
                        Though many of our clients are pharmaceutical and biotech companies, we also work for patient organisations in multi-stakeholder alliances. 
                    </div>
                    <div class="subtitle is-full-width">
                        We believe in the power of groups of people to achieve a shared goal, we feel comfortable guiding those Alliances through our role as Secretariat or project manager. 
                    </div>
                    <div class="subtitle is-full-width">
                        One example of this is the European Alliance for Newborn Screening in Spinal Muscular Atrophy where admedicum acts as the Secretariat and coordinates the activity while managing the partners.
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-12 is-flex">
            <div class="slider-is5 is-arrow-none column is-12 is-12-mobile wrap-mobile is-flex">
                @fields('clientes-patients', 'clientes-patients')
                    <div class="column is-flex justify-center align-self-center">
                        <a href="@sub('web')">
                            <img class="border-img clientes-img{" src="@sub('logo')" alt="">
                        </a>
                    </div>
                @endfields
            </div>
        </div>
    </div>
</div>

