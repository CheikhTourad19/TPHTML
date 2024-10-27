/**function loading(){
    console.log("loading....")
}

    const mybtn = window.document.getElementById('myButton');
    mybtn.addEventListener('click',  () =>{window.alert("hello world");});
var i=0;
function addCount() {
    i++;
}
function showCount() {
console.log(i);
}
function ChangeValue() {
    doucument.getElementById("prenom").value="Have a nice day";
}

var x=document.getElementById("select");
x.addEventListener("change",function(){

    var value=document.getElementById("select").value;
document.getElementById("classee").innerHTML="tu as selectionné "+value;
});**/

function handleSubmit(event) {
    const emailInput=document.getElementById("email");
    const emailValeur = emailInput.value.trim();
    const emailRegex = /^\S+@\S+\.\S+$/;
    if (!emailRegex.test(emailValeur)){
        event.preventDefault();
        console.log("veillez entrer une adresse mail valide");
    }
}
const monformulaire= document.getElementById("monformulaire");
monformulaire.addEventListener("submit",handleSubmit);

var sexe=document.getElementsByName("sexe").value;
document.getElementById("monformulaire").addEventListener("submit",function (e){
    e.preventDefault();
    var nom=document.getElementById("prenom").value
    console.log(sexe);
    if (sexe=="F"){
        document.getElementById("classee").innerHTML="Bienvenue Mme"+nom;
    }else {
        document.getElementById("classee").innerHTML="Bienvenue Mr"+nom;
    }
})

function changeInput() {
    document.getElementById("prenom").style.backgroundColor="red";
}
function resett() {
    document.getElementById("prenom").style.backgroundColor="blue";
}