$(document).ready(function(){

  if($("#contact_form").length > 0)
   {
     $('#contact_form').validate({
       rules:{
         name : {
           required : true,
           maxlength : 50
         },
         email : {
           required : true,
           maxlength : 50, 
           email : true
         },
       objet : {
         required : true,
           minlength : 10,
           maxlength : 255
         },
         message : {
           required : true,
           minlength : 50,
           maxlength : 500
         }
       },
       messages : {
         name : {
           required : 'Enter Name Detail',
           maxlength : 'Name should not be more than 50 character'
         },
         email : {
           required : 'Enter Email Detail',
           email : 'Enter Valid Email Detail',
           maxlength : 'Email should not be more than 50 character'
         },
         objet : {
           required : 'Enter subject Detail',
           objet : 'Enter Valid subject Detail',
           maxlength : 'subject should not be more than 50 character'
         },
         message : {
           required : 'Enter Message Detail',
           minlength : 'Message Details must be minimum 50 character long',
           maxlength : 'Message Details must be maximum 500 character long'
         }
       }
     });
   }
 
 });