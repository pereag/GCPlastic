class ServicesNav {
    constructor(servicesNav, btnTools, btnMaintenance, btnMachining, btnPrototype,
                toolsContent, maintenanceContent, machiningContent, prototypeContent, anchor){
        this.servicesNav = servicesNav;
        this.btnTools = btnTools;
        this.btnMaintenance = btnMaintenance;
        this.btnMachining = btnMachining;
        this.btnPrototype = btnPrototype;
        this.toolsContent = toolsContent;
        this.maintenanceContent = maintenanceContent;
        this.machiningContent = machiningContent;
        this.prototypeContent = prototypeContent;
        this.anchor = anchor;
    }

    
// Initialise les boutons 
    play(){
        this.clickbutton(this.btnTools);
        this.clickbutton(this.btnMaintenance);
        this.clickbutton(this.btnMachining);
        this.clickbutton(this.btnPrototype);
    }


//Ecoute le boutton et distribue l'action associé
    clickbutton(btn){
        btn.addEventListener("click", () => {
            this.toolsContent.classList.replace("content__active", "content__desactive");
            this.maintenanceContent.classList.replace("content__active", "content__desactive");
            this.machiningContent.classList.replace("content__active", "content__desactive");
            this.prototypeContent.classList.replace("content__active", "content__desactive");
            
            if(btn == this.btnTools) {
                this.toolsContent.classList.replace("content__desactive", "content__active");
            }
            else if ( btn == this.btnMaintenance) {
                this.maintenanceContent.classList.replace("content__desactive", "content__active");
            }
            else if ( btn ==  this.btnMachining) {
                this.machiningContent.classList.replace("content__desactive", "content__active");
            }
            else if ( btn == this.btnPrototype) {
                this.prototypeContent.classList.replace("content__desactive", "content__active");
            }
            this.goToAnchor();
        })
    }


//Scroll jusqu'à l'ancre designé
    goToAnchor() {
        $("html, body").stop().animate( { scrollTop: this.anchor.offset().top }, 1500);
    }
}

let servicesNav = new ServicesNav(document.getElementById("services-nav"), document.getElementById("tools"), 
                                document.getElementById("maintenance"), document.getElementById("machining"), 
                                document.getElementById("prototype"), document.getElementById("tools-content"), 
                                document.getElementById("maintenance-content"), document.getElementById("machining-content"), 
                                document.getElementById("prototype-content"), $("#prototype h3"));

servicesNav.play();