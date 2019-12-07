class Page {
    constructor(pagesNbr, limitArticles, articlesNews, page, btnPrevious, btnNext){
        this.pagesNbr = pagesNbr;
        this.limitArticles = limitArticles;
        this.articlesNews = articlesNews;
        this.page = page;
        this.btnPrevious = btnPrevious;
        this.btnNext = btnNext;

    }


    play(){
        let i = 0;
        while (i <= this.limitArticles) {
        // Afficher les articles correspondants
            $("#new-" + i).removeClass("news-content__desable");
            $("#new-" + i).addClass("news-content__active");  
            i++;  
        }
        
        document.addEventListener("pageChange", () => {
            this.displayPage()
        })
    }
    
    
    displayPage() {
    //Si la class de la page == a cette objet Page 
        if (this.page.attr("class") == "page-" + (this.pagesNbr)){
        //On desactive l'affichage de tous les articles
            this.articlesNews.removeClass("news-content__active");
            this.articlesNews.addClass("news-content__desable");
            let  a = this.pagesNbr - 1;
            let startDispay = a * this.limitArticles;
            let endDisplay =  startDispay + this.limitArticles;
            let i = startDispay;
        //On affiche les articles corespondant à la page
            while (i < endDisplay) {
                i++;
                $("#new-" + i).removeClass("news-content__desable");
                $("#new-" + i).addClass("news-content__active");    
            }
        }
    }
}

