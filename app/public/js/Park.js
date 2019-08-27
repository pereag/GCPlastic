class Park {
   constructor(park, milling, tower, erosion, injection, grinding, btnMilling, btnTower, btnErosion, btnInjection, btnGrinding) {
      this.park = park;
      this.milling = milling;
      this.tower = tower;
      this.erosion = erosion;
      this.injection = injection;
      this.grinding = grinding;
      this.btnMilling = btnMilling;
      this.btnTower = btnTower;
      this.btnErosion = btnErosion;
      this.btnInjection = btnInjection;
      this.btnGrinding = btnGrinding;
   } 

   play() {
      this.display(this.btnMilling);
      this.display(this.btnTower);
      this.display(this.btnErosion);
      this.display(this.btnInjection);
      this.display(this.btnGrinding);
   }

   display(btn){
      btn.bind("click", ()=> {
         console.log("yolo");
         this.park.removeClass("park__active");
         this.park.addClass("park__desable");
         if(btn == this.btnMilling){
            this.milling.removeClass("park__desable");
            this.milling.addClass("park__active");
         }
         else if(btn == this.btnTower){
            console.log("YOLO")
            this.tower.removeClass("park__desable");
            this.tower.addClass("park__active");
         }
         else if(btn == this.btnErosion){
            this.erosion.removeClass("park__desable");
            this.erosion.addClass("park__active");
         }
         else if(btn == this.btnInjection){
            this.injection.removeClass("park__desable");
            this.injection.addClass("park__active");
         }
         else if(btn == this.btnGrinding){
            this.grinding.removeClass("park__desable");
            this.grinding.addClass("park__active");
         } 
      })
   }
}

let park = new Park($(".park"), $("#park-milling"), $("#park-tower"), $("#park-erosion"), $("#park-injection"), $("#park-grinding"), $(".btn-milling"), $(".btn-tower"), $(".btn-erosion"), $(".btn-injection"), $(".btn-grinding"));
park.play();