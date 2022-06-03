<div class="has-padding-10 has-background-linear suave"></div>
<div class="">
    <div class="container card-content is-flex wrap">
        <div class="column is-12 is-12-mobile is-flex justify-center has-padding-5-mobile has-padding-top-40-mobile">
            <div class="column is-8 is-12-mobile has-padding-5-mobile caja-text">
                <div class="">
                    <span class="content" data-aos="fade-up">
                        About us
                    </span>
                    <h2 class="title" data-aos="fade-up">
                        We create value by making meaningful patient-access 
                    </h2>
                    <div class="subtitle" data-aos="fade-up">
                        We create value by making meaningful patient-access to our clients' products and services possible. We achieve this by bringing patients and companies together at the right time and the right place. This way patients benefit by accessing innovative and truly patient oriented products and services. And companies increase their chance for return on investment.
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-12 is-12-mobile is-flex has-padding-5-mobile" data-aos="fade-up">
            <div class="slider-img is-arrow-none is-full-width">
                @fields('clientes', 'clientes')
                    <div class="column is-flex justify-center align-self-center">
                        <a href="@sub('web')">
                            <img class="border-img clientes-img" src="@sub('logo')" alt="">
                        </a>
                    </div>
                @endfields
            </div>
        </div>
    </div>
</div>