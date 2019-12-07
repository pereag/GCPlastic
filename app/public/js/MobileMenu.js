class MobileMenu {
    constructor(buttonMobileMenu, backgroundMobileMenu, buttonsMobilesMenu, contentMobileMenu ){
        this.buttonMobileMenu = buttonMobileMenu;
        this.backgroundMobileMenu = backgroundMobileMenu;
        this.buttonsMobilesMenu = buttonsMobilesMenu;
        this.contentMobileMenu = contentMobileMenu;
    }

    
//On initialise les élèments du menu
    init(){
        this.displayContentMobileMenu(this.buttonMobileMenu);
        this.displayContentMobileMenu(this.backgroundMobileMenu);
        this.displayContentMobileMenu(this.buttonsMobilesMenu);
        this.listenSizeWindow();
    };


//On écoute l'élèment et change la valeurs de la class ou non, si l'élèment est cliqué
    displayContentMobileMenu(element){
        element.addEventListener("click", ()=>{
            if(this.contentMobileMenu.classList.contains("mobileMenu_disable")){
                this.contentMobileMenu.classList.replace("mobileMenu_disable", "mobileMenu_active");
                if(this.backgroundMobileMenu.classList.contains("mobileMenu-background_disable")) {
                    this.backgroundMobileMenu.classList.replace("mobileMenu-background_disable", "mobileMenu-background_active");
                }
            }
            else if(this.contentMobileMenu.classList.contains("mobileMenu_active")){
                this.contentMobileMenu.classList.replace("mobileMenu_active", "mobileMenu_disable");
                if(this.backgroundMobileMenu.classList.contains("mobileMenu-background_active")) {
                    this.backgroundMobileMenu.classList.replace("mobileMenu-background_active", "mobileMenu-background_disable");
                };
            };
        });
    }; 


// Écoute la largeur de l'écran toute les 150 000 secondes pour verifier les classes à appliquer
    listenSizeWindow(){
        setInterval(() => {
            if(window.innerWidth > 1100) {
                if(this.contentMobileMenu.classList.contains("mobileMenu_active")){
                    this.contentMobileMenu.classList.replace("mobileMenu_active", "mobileMenu_disable");
                    if(this.backgroundMobileMenu.classList.contains("mobileMenu-background_active")) {
                        this.backgroundMobileMenu.classList.replace("mobileMenu-background_active", "mobileMenu-background_disable");
                    };
                };
            };
        }, 150);
    };
};

let mobileMenu = new MobileMenu(document.getElementById("header-mobileImg"), document.getElementById("mobileMenu-background"), document.getElementById("mobileMenu-buttonGroupe"), document.getElementById("mobileMenu"));
mobileMenu.init();