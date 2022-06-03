import Splide from '@splidejs/splide';
import '@splidejs/splide/dist/css/themes/splide-default.min.css';

export const slider = {
    type1 : (props, structure)=>{
        let slider = document.querySelector(props.element);
        structure = !structure;
        if(slider) {
            if(!structure){
                let childs = slider.children;
                let items = [];
                Array.from(childs).forEach(element => {
                    items.push(`
                        <li class="splide__slide column is-flex">
                            ${element.outerHTML}
                        </li>
                    `)
                });
                let output = `
                <div class="splide__track is-full-width">
                    <ul class="splide__list is-flex">
                        ${items.join("")}
                    </ul>
                </div>
                <div class="is-arrow-slider-style is-flex wrap-mobile is-full-width-mobile splide__arrows" data-aos="zoom-in">
                    <div class="splide__arrow--prev has-cursor-pointer">
                        <span class="has-cursor-pointer btn-blue-light is-2 font-is-20 tk-canada-type-gibson"><span>Previous</span></span>
                    </div>
                    <div class="splide__arrow--next has-cursor-pointer">
                        <span class="has-cursor-pointer btn-blue-light is-2 has-margin-left-20-tablet font-is-20 tk-canada-type-gibson"><span>Next</span></span>
                    </div>
                </div>`
                slider.innerHTML = output;
            }

            new Splide( props.element, props.props ).mount();
        }
    }
}