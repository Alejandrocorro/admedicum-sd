@set($btn1, get_field('numero_contact', 'options'))
@set($btn2, get_field('correo_contact', 'options'))

<div class="has-padding-10 has-background-linear suave"></div>
<div class="">
    <div class="container card-content is-flex wrap">
        <div class="column is-6 is-12-mobile has-padding-5-mobile has-padding-top-40-mobile has-padding-top-140-desktop">
            <div class="column is-10 is-12-mobile has-padding-5-mobile caja-text">
                <span class="content" data-aos="fade-right" data-aos-duration="700">
                    Contact us
                </span>
                <h2 class="title" style="padding-right: 15%;" data-aos="fade-right" data-aos-delay="400" data-aos-duration="700">
                    Chat with us today
                </h2>
                <div class="subtitle is-full-width has-padding-right-10-desktop" data-aos="fade-right" data-aos-delay="600" data-aos-duration="700">
                    Chat with us today to see how we can help improve your patient engagement activities. Whether you are just starting out or looking for another viewpoint on your established programs, let’s talk. 
                </div>
                <div class="is-flex wrap">
                    <a href="{{$btn1['url']}}" class="is-full-width" data-aos="fade-right" data-aos-delay="800" data-aos-duration="700" >
                        <span class="color font-w is-600 tk-canada-type-gibson font-is-20">
                            {{$btn1['title']}}
                        </span>
                    </a>
                    <a href="{{$btn2['url']}}" class="is-full-width" data-aos="fade-right" data-aos-delay="1000" data-aos-duration="700">
                        <span class="color font-w is-600 tk-canada-type-gibson font-is-20">
                            {{$btn2['title']}}
                        </span>
                    </a>
                </div>
                <p class="color font-w is-600 tk-canada-type-gibson font-is-20 has-padding-top-20 has-padding-bottom-20 has-padding-bottom-20-desktop"  data-aos="fade-right" data-aos-delay="1200" data-aos-duration="700">
                    You can find us in the following locations
                </p>
                
                <div class="is-flex wrap-mobile has-padding-bottom-20 has-padding-bottom-30-desktop">
                    <a href="https://www.google.com/maps/place/Colonia,+Alemania/@50.9408562,6.8679447,11.38z/data=!4m5!3m4!1s0x47bf259169ab2fe5:0x42760fc4a2a77f0!8m2!3d50.937531!4d6.9602786" target="_blank"style="width: 120px;" class="btn-blue-dark center font-is-20 tk-canada-type-gibson" onmousemove="cologne()" data-aos="zoom-in" data-aos-delay="1400" data-aos-duration="800"><span>Cologne</span></a>
                    <a href="https://www.google.com/maps/place/Par%C3%ADs,+Francia/@48.8589466,2.2769955,12z/data=!3m1!4b1!4m5!3m4!1s0x47e66e1f06e2b70f:0x40b82c3688c9460!8m2!3d48.856614!4d2.3522219" target="_blank"style="width: 120px;" class="btn-blue-dark center font-is-20 tk-canada-type-gibson" onmousemove="paris()" data-aos="zoom-in" data-aos-delay="1600" data-aos-duration="800"><span>Paris</span></a>
                    <a href="https://goo.gl/maps/6vfTfmFtTWXanRwRA" target="_blank"style="width: 120px;" class="btn-blue-dark center font-is-20 tk-canada-type-gibson" onmousemove="amsterdam()" data-aos="zoom-in" data-aos-delay="1800" data-aos-duration="800"><span>Amsterdam</span></a>
                    <a href="https://goo.gl/maps/PUJSR4yt1HSsfeev5" target="_blank"style="width: 120px;" class="btn-blue-dark center font-is-20 tk-canada-type-gibson" onmousemove="barcelona()" data-aos="zoom-in" data-aos-delay="2000" data-aos-duration="800"><span>Barcelona</span></a>
                </div>
                <p class="subtitle is-full-width has-margin-top-20" data-aos="fade-right" data-aos-delay="1900" data-aos-duration="700">
                    To hear more about our patient engagement services or discuss your challenges in more depth, get in touch. We will send you back a complete slide deck detailing more about admedicum’s expertise and schedule a time to meet.
                </p>
                <a href="#" class="btn-blue-light is-2 font-is-20 tk-canada-type-gibson btn-contact-function" data-aos="zoom-in" data-aos-delay="2000" data-aos-duration="700"><span>Contact us</span></a>
            </div>
        </div>
        <div class="column is-6 is-12-mobile has-padding-5-mobile has-padding-top-40-mobile">
            <div class="img-hover-function cologne is-flex justify-center align-items-flex-end is-full-height justify-flex-start-mobile">
                <img class="border-img hero is-cologne" src="app/uploads/2022/04/copia-prueba.png" alt="">
                <img class="border-img hero is-paris" src="app/uploads/2022/04/img-prueba.jpg" alt="">
                <img class="border-img hero is-amsterdam" src="app/uploads/2022/04/copia-prueba.png" alt="">
                <img class="border-img hero is-barcelona" src="app/uploads/2022/04/img-prueba.jpg" alt="">
                <div class="has-background-primary border-img hero cont-contact-function" style="display: none; z-index: 2;">
                    <div class="has-margin-auto" style="width: 260px;height: 569px;">
                        <form action="" class="contact is-2">
                            <h3 class="font-is-20 has-padding-top-75 has-text-white has-padding-bottom-20">
                                Contact us
                            </h3>
                            <div class="has-padding-bottom-20">
                                <label for="">Name*</label>
                                <input type="text">
                            </div>
                            <div class="has-padding-bottom-20">
                                <label for="">Email*</label>
                                <input type="email">
                            </div>
                            <div class="has-padding-bottom-20">
                                <label for="">Phone</label>
                                <input type="text">
                            </div>
                            <div class="has-padding-bottom-20">
                                <label for="">Messeger</label>
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                            </div>
                            <a href="" class="has-text-white btn-blue-light is-full-width is-flex justify-center font-is-20 tk-canada-type-gibson">
                                <span>Send</span>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
// contact home
//Caja Foto
let functionImg = document.querySelector('.img-hover-function');

//paris
function paris() {
    //paises
    let cologneImg = document.querySelector('.cologne');
    let amsterdamImg = document.querySelector('.amsterdam');
    let barcelonaImg = document.querySelector('.barcelona');

    if(cologneImg){
        cologneImg.classList.remove('cologne')
    }
    if(amsterdamImg){
        amsterdamImg.classList.remove('amsterdam')
    }
    if(barcelonaImg){
        barcelonaImg.classList.remove('barcelona')
    }
    functionImg.classList.add('paris')
}
//Amsterdam
function amsterdam() {
    //paises
    let cologneImg = document.querySelector('.cologne');
    let parisImg = document.querySelector('.paris');
    let barcelonaImg = document.querySelector('.barcelona');

    if(cologneImg){
        cologneImg.classList.remove('cologne')
    }
    if(parisImg){
        parisImg.classList.remove('paris')
    }
    if(barcelonaImg){
        barcelonaImg.classList.remove('barcelona')
    }
    functionImg.classList.add('amsterdam')
}
//barcelona
function barcelona() {
    //paises
    let cologneImg = document.querySelector('.cologne');
    let parisImg = document.querySelector('.paris');
    let amsterdamImg = document.querySelector('.amsterdam');

    if(cologneImg){
        cologneImg.classList.remove('cologne')
    }
    if(parisImg){
        parisImg.classList.remove('paris')
    }
    if(amsterdamImg){
        amsterdamImg.classList.remove('amsterdam')
    }
    functionImg.classList.add('barcelona')
}
//barcelona
function cologne() {
    //paises
    let parisImg = document.querySelector('.paris');
    let amsterdamImg = document.querySelector('.amsterdam');
    let barcelonaImg = document.querySelector('.barcelona');

    if(barcelonaImg){
        barcelonaImg.classList.remove('barcelona')
    }
    if(parisImg){
        parisImg.classList.remove('paris')
    }
    if(amsterdamImg){
        amsterdamImg.classList.remove('amsterdam')
    }
    functionImg.classList.add('cologne')
}

</script>

