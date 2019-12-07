class Loader {
    constructor(pageLoader){
        this.pageLoader = pageLoader;
    }
// Change la classe de la div du loader
    play(){
        window.setTimeout(() => {
        this.pageLoader.classList.add("desactive-loader");
        }, 500 );
    };

};

let loader = new Loader(document.getElementById("loader"))
loader.play();