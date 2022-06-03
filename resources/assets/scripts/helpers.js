    //target only allow string
    //parent can be STRING or DOM element
    export const getElement = (target, parent) => {
        target = typeof target == "string" ? target : false;
        if(!target) {
            console.warn('the target element you are looking for must be a string');
            return document.body;
        }
        parent = !parent ? false : typeof parent == "string" ? document.querySelector(parent) : parent;
        return (parent || document).querySelectorAll(target);
    }
    
        //target can be STRING or DOM element
        //cssClass can be a single css class or multiple css classes separated by space
        //parent can be STRING or DOM element, only works when target is STRING
    export const addClass = (target, cssClass, parent = false) => {
        target = typeof target == "string" ? getElement(target, parent) : target;
        cssClass = cssClass.split(' ');
        target.forEach(element => {
            cssClass.forEach(item => {
                element.classList.add(item)
            })
        });
    }
    
        //target can be STRING or DOM element
        //cssClass can be a single css class or multiple css classes separated by space
        //parent can be STRING or DOM element, only works when target is STRING
    export const removeClass = (target, cssClass, parent = false) => {
        target = typeof target == "string" ? getElement(target, parent) : target;
        cssClass = cssClass.split(' ');
        target.forEach(element => {
            cssClass.forEach(item => {
                element.classList.remove(item)
            })
        });
    }
    
        //target can be STRING or DOM element
        //cssClass can be a single css class or multiple css classes separated by space
        //parent can be STRING or DOM element, only works when target is STRING
    export const hasClass = (target, cssClass, parent = false) => {
        target = typeof target == "string" ? getElement(target, parent) : target;
        cssClass = cssClass.split(' ');
        let classesState = 0;
        target.forEach(element => {
            cssClass.forEach(item => {
                classesState = element.classList.contains(item) ? classesState + 1 : classesState;
            })
        });
        return classesState == cssClass.length;
    }
        
        //target can be STRING or DOM element
        //cssClass can be a single css class or multiple css classes separated by space
        //parent can be STRING or DOM element, only works when target is STRING
    export const toggleClass = (target, cssClass, parent = false) => {
        target = typeof target == "string" ? getElement(target, parent) : target;
        cssClass = cssClass.split(' ');
        target.forEach(element => {
            cssClass.forEach(item => {
                element.classList.toggle(item)
            })
        });
    }
    
        //Clear timeout interval
    export const clearVarTimeout = (target)=>{
        if(window.target !== undefined) {
            window.clearInterval(target)
        }
    }
    
        //incrementa los numeros
    export const contador = (target)=>{
        target = document.querySelectorAll(target);
        if(target.length > 0){
          Array.from(target).map(el => {
            let child = el.querySelector('.increment');
            let init = (child.dataset.init * 1);
            let end = (child.dataset.end * 1);
            setInterval(()=>{
              if(el.classList.contains('aos-animate')){
                  if(init < end + 1){
                      init += (end / 10);
                    if(init > end || init < 1){
                        let total = `${end}`;
                        child.textContent = total.length >= 3 ? Math.trunc(total) : `${Math.trunc(total)}`;
                    }else {
                        let total = `${init}`;
                        child.textContent = total.length >= 3 ? Math.trunc(total) : `${Math.trunc(total)}`;
                    }
                  }
              }else {
                init = (init >= end) ? 0 : init;
              }
            }, 200)
          })
        }
    }
    
        //detectar el hover sobre elementos en especifico
    export const cursorHover = (target, cssClass, cursorIndicador)=>{
        let cursor = document.querySelector((cursorIndicador || '#cursor'));
        target = typeof target == "string" ? document.querySelector(target) : target;
        target.addEventListener('mousemove', ()=> cursor.classList.add(cssClass), false)
        target.addEventListener('mouseleave', ()=> cursor.classList.remove(cssClass), false)
        window.addEventListener('mouseleave', ()=> cursor.classList.remove(cssClass), false)
    
        if(cssClass == 'normal') {
            let cursor = document.querySelector('#cursorPet');
            target.addEventListener('mousemove', ()=> cursor.classList.add(cssClass), false)
            target.addEventListener('mouseleave', ()=> cursor.classList.remove(cssClass), false)
            window.addEventListener('mouseleave', ()=> cursor.classList.remove(cssClass), false)
        }
    }
    
    export const scrollTo = (to, duration) =>{
        var start = window.pageYOffset,
            change = to - start,
            currentTime = 0,
            increment = 20;
            
        var animateScroll = function(){
            currentTime += increment;
            var val = Math.easeInOutQuad(currentTime, start, change, duration);
            window.scroll(0, val);
            if(currentTime < duration) {
                setTimeout(animateScroll, increment);
            }
        };
        animateScroll();
    }
    
    Math.easeInOutQuad = function (t, b, c, d) {
        t /= d/2;
        if (t < 1) return c /2* t * t + b;
            t--;
        return -c / 2 * ( t *( t - 2) - 1) + b;
    };
    