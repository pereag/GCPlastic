class Paging {
    constructor(page, articleNew, pagingId, btnPrevious, btnNext, limiteArtcles, anchor) {
        this.page = page;
        this.articleNew = articleNew;
        this.pagingId = pagingId;
        this.btnPrevious = btnPrevious;
        this.btnNext = btnNext;
        this.limiteArticles = limiteArtcles;
        this.anchor = anchor;
    }

    play() {
            let a = this.articleNew.length / this.limiteArticles;
        // On calcule le nombre de page maximum
            this.pageNbr = Math.ceil(a);
        // On crée un objet Page par page 
            for ( let i = 1; i < this.pageNbr + 1; i++) {
               new Page(i, this.limiteArticles, this.articleNew, this.page, this.btnPrevious, this.btnNext).play();
            }
    // on ecoute le click des boutons 
        this.btnPrevious.click(() => {
            this.btnPreviousClick();
            let event = new Event("pageChange", {bubbles: true}); 
            document.dispatchEvent(event);   
        });
        this.btnNext.click(() => {
            this.btnNextClick();
            let event = new Event("pageChange", {bubbles: true}); 
            document.dispatchEvent(event); 
        });
    // On verifie si le nombre d'articles ne dépace pas la limite
        if (this.articleNew.length <= this.limiteArticles){
            this.btnNext.addClass("btn__desable"); 
        }
    }

// Allé jusqu'à l'ancre
    goToAnchor() {
        $("html, body").stop().animate( { scrollTop: this.anchor.offset().top }, 1500);
    }

    btnPreviousClick() {
    // Si on est pas sur la page 
        if(this.page.hasClass("page-" + 1) === false){
                let i = 0;
            this.goToAnchor();
        // On enlève 1 à la class de la page
            while (i < this.pageNbr) {
                i++;
                if (this.page.attr("class") == "page-" + i ) {
                    this.btnNext.removeClass("btn__desable");
                    this.page.removeClass("page-" + i);
                    this.page.addClass("page-" + (i-1));
                // Si on va sur la première page
                    if( i == 2) {
                        this.btnPrevious.addClass("btn__desable");
                    }
                    break
                }
            }      
        }
    }

    btnNextClick() {
    // Si on est pas sur la derniere page
        if(this.page.hasClass("page-" + this.pageNbr) === false){
            let i = 0;
            this.goToAnchor();

            while (i < this.pageNbr) {
                if (this.page.attr("class") == "page-" + i ) {
                    this.btnPrevious.removeClass("btn__desable");
                    this.page.removeClass("page-" + i);
                    this.page.addClass("page-" + (i + 1));

                // Si on va sur la dernière page
                    if( i == this.pageNbr - 1){
                        this.btnNext.addClass("btn__desable");
                    }
                    break
                }
                i++;
                
            }    
        }
    }
}
let paging = new Paging($("#page"), $(".news-content"), $("#paging"), $("#paging-previous"), $("#paging-next"), 2, $(".hr-yellow"))
paging.play();
