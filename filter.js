import Swal from '/home/user/node_modules/sweetalert2/dist/sweetalert2.min.js';
class Filter{
    constructor(el,amount){
this.el = el;
this.amount = amount;
    }
    FilterForm() {
try{
 let textbox = document.getElementById(this.el);
 let passInput = document.getElementById("inputpass");
 if (textbox.value.length >= this.amount){
 document.getElementById("msg").innerHTML = "Cannot be more than 10 chars.";
 textbox.value = textbox.value.substring(0, this.amount);
}
 else if(textbox.value == null || passInput.value == null){
Swal.fire({
  title: 'Empty Input',
  text: 'Input boxes cannot be empty!',
  imageUrl: 'https://unsplash.it/400/200',
  imageWidth: 400,
  imageHeight: 200,
  imageAlt: 'Custom image',
})
}

 else{
 Swal.fire({
  title: 'Unexpected Error Occured.',
  width: 600,
  height:400,
  padding: '3em',
  background: 'https://img-16.ccm2.net/_SqzzXVDSG50FWb_UBrCl3XwV78=/440x/1685e17045e747a899925aa16189c7c6/ccm-encyclopedia/99776312_s.jpg',
  backdrop: `
    rgba(0,0,123,0.4)
    url("https://i.pinimg.com/originals/15/b5/ab/15b5abeff5375c8dee4e3456dda4ca04.gif")
    left top
    no-repeat
  `
})
}
}catch(err){
  alert(err);
  }
}
    }
let filterfunc = new Filter();
filterfunc.constructor("username",10);
filterfunc.FilterForm();

