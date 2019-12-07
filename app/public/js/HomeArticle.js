class HomeNew {
    constructor(article, title, alert) {
        this.article = article;
        this.title = title
        this.alert = alert;
    }

    
    play() {
    //Si la page principale n'a aucun Titre à afficher (donc aucune données envoyées), on cache la zone de l'article et on affiche un message d'information 
        if(!this.title.html()){
            this.article.remove();
            console.log(this.alert.html())
            this.alert.remove("home-alert__desable");
            this.alert.addClass("home-alert__active");
        }
    }
}

HomeNew = new HomeNew($('#lnew-content'), $('#lnc-txt-title'), $('#home-alert'));
HomeNew.play();