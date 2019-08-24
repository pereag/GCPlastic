class ServicesNav {
    constructor(servicesNav, btnTools, btnMaintenance, btnMachining, btnPrototype,
                toolsContent, maintenanceContent, machiningContent, prototypeContent){
        this.servicesNav = servicesNav;
        this.btnTools = btnTools;
        this.btnMaintenance = btnMaintenance;
        this.btnMachining = btnMachining;
        this.btnPrototype = btnPrototype;
        this.toolsContent = toolsContent;
        this.maintenanceContent = maintenanceContent;
        this.machiningContent = machiningContent;
        this.prototypeContent = prototypeContent; 
    }

    play(){
        this.clickbutton(this.btnTools);
        this.clickbutton(this.btnMaintenance);
        this.clickbutton(this.btnMachining);
        this.clickbutton(this.btnPrototype);
    }
    clickbutton(btn){
        btn.addEventListener("click", ()=>{
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
        })
    }
}

servicesNav = new ServicesNav(document.getElementById("services-nav"), document.getElementById("tools"), document.getElementById("maintenance"),
                             document.getElementById("machining"), document.getElementById("prototype"),
                             document.getElementById("tools-content"), document.getElementById("maintenance-content"),
                             document.getElementById("machining-content"), document.getElementById("prototype-content"));

servicesNav.play();