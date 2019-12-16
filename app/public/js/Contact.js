class Contact {
    constructor(contactButton, lastname, firstname, email, society, message, statusForm){
        this.contactButton = contactButton;
        this.lastname = lastname;
        this.firstname = firstname;
        this.email = email;
        this.society = society;
        this.message = message;
        this.statusForm = statusForm;
    }

    
    play(){
    //On écoutes le bouton du formulaire
        this.contactButton.on('click', () => {
           this.mailVerif();
        });
    };


    mailVerif(){
        console.log("buton formulaire cliqué");
        let regexTxt = RegExp(/^[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ]+$/);
        let regexMail = RegExp(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
    //On vérifie si les données 
        if(regexTxt.test(this.lastname.val()) && regexTxt.test(this.firstname.val()) && regexMail.test(this.email.val()) && regexTxt.test(this.message.val())) {
        //On envois la requête Ajax avec les valeurs du formulaires
            jQuery.ajax({
                url: "http://localhost/GCPlastic/?action=sendEmail",
                data:'lastname='+this.lastname.val()+'&firstname='+
                this.firstname.val()+'&email='+
                this.email.val()+'&message='+
                this.message.val()+'&society='+
                this.society.val(),
                type: "POST",
                success: (data,textStatus,request) => {
                    console.log(request.getResponseHeader('Content-Type'));
                    this.statusForm.text('Message envoyé.');
                },
                error: () => {
                    this.statusForm.text('Erreur scrypt Php');
                }
            });
        }
        else {
        //Si les données sont invalides, on envois un message d'erreur sous le formulaire 
            this.statusForm.text('Formulaire incomplet ou email invalide.');
        }
    }
}

contact = new Contact($('#buttonContact'), $('#lastnameContact'), $('#firstnameContact'), $('#emailContact'), $('#societyContact'), $('#messageContact'), $('#statut-form-contact'));
contact.play();