class TitleAnimation {
    constructor(title){
        this.title = title;
    }

    animation(){
        this.title.style.opacity = 1;
        this.title.style.transition = "opacity 6s";
    };
}

titleAnimation = new TitleAnimation(document.getElementById("banner-title"));
titleAnimation.animation()

