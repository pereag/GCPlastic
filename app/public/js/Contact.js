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
        console.log('script en cours');
        this.contactButton.on('click', () => {
           this.mailVerif();
        });
    };
    mailVerif(){
        console.log("buton formulaire cliqué");
        let regexTxt = RegExp(/^[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ]+$/);
        let regexMail = RegExp(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
        if(regexTxt.test(this.lastname.val()) && regexTxt.test(this.firstname.val()) && regexMail.test(this.email.val()) && regexTxt.test(this.message.val())) {
            jQuery.ajax({
                url: "http://localhost/GCPlastic/?action=sendEmail",
                data:'lastname='+this.lastname.val()+'&firstname='+
                this.firstname.val()+'&email='+
                this.email.val()+'&message='+
                this.message.val()+'&society='+
                this.society.val(),
                type: "POST",
                success: () => {
                    this.statusForm.text('Message envoyé.');
                },
                error: () => {
                    this.statusForm.text('Erreur scrypt Php');
                }
            });
        }
        else {
            this.statusForm.text('Formulaire incomplet ou email invalide.');
        }
    }
}

contact = new Contact($('#buttonContact'), $('#lastnameContact'), $('#firstnameContact'), $('#emailContact'), $('#societyContact'), $('#messageContact'), $('#statut-form-contact'));
contact.play();

/* 1 Ecoute le formulaire  OK
   2 Si on clique sur le boutton envoyer on verifie les informations du formulaire OK
   3 Si le tout est ok on crée une variable data qui contiendra les informations du formulaire
   4 on envois le la variable data via post au script php qui va  envoyer le mail sur la messagerie de GC plastic
*/