let scoreA=document.getElementById("teamAscore");
let scoreB=document.getElementById("teamBscore");
let board=document.getElementById('board')
let nbrA=document.getElementById("nbrgainA");
let nbrB=document.getElementById("nbrgainB")

function inserer() {

    let scorea=parseInt(scoreA.innerHTML);
    let scoreb=parseInt(scoreB.innerHTML);
    if (isNaN(scorea)){scorea=0;}
    if (isNaN(scoreb)){scoreb=0;}
    let scoreputeda=parseInt(document.getElementById("teamAincrement").value);
    let scoreputedb=parseInt(document.getElementById("teamBincrement").value);
    if (isNaN(scoreputeda)){scoreputeda=0;}
    if (isNaN(scoreputedb)){scoreputedb=0;}
    scoreA.innerHTML=scorea+scoreputeda;
    scoreB.innerHTML=scoreb+scoreputedb;
    let history = `<tr><td><b>${scoreputeda}</b></td><td><b>${scoreputedb}</b></td></tr>`;
    board.insertAdjacentHTML('beforeend', history);

    document.getElementById("teamAincrement").value='';
    document.getElementById("teamBincrement").value='';
    updateUi()

}
function resetscore() {

    let tiret=`<tr><td class='tiret'><b class="final">${scoreA.innerHTML}</b></td><td class='tiret'><b class="final">${scoreB.innerHTML}</b></td></tr>`;
    board.insertAdjacentHTML('beforeend',tiret)
    scoreA.innerHTML='0';
    scoreB.innerHTML='0';

}
function updateUi() {
    let scorea=parseInt(scoreA.innerHTML);
    let scoreb=parseInt(scoreB.innerHTML);
    if (scorea>=100 && scorea>scoreb){
        nbrA.innerHTML=parseInt(nbrA.innerHTML)+1;
        resetscore()
    }
    if (scoreb>=100 && scoreb>scorea){
       nbrB.innerHTML=parseInt(nbrB.innerHTML)+1;
       resetscore()
    }
}
