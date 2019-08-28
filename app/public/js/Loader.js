class Loader {
    constructor(pageLoader){
        this.pageLoader = pageLoader;
    }
// Change la clave de la div loader 
    play(){
        console.log(this.pageLoader)
        window.setTimeout(() => {
        this.pageLoader.classList.add("desactive-loader");
        }, 500 )
    };

};

let loader = new Loader(document.getElementById("loader"))
loader.play();