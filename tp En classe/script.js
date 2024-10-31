const squeezie={
    name:"squeezie",
    link:"https://www.twitch.tv/squeezie",
    imageUrl:"images/squeezie.jpeg",
    followers:"3,944,989",
    firstVue:"24 novembre 2013",
    heurevisionage:"4,761,997",
    pic:"1,018,817",

}
const Gotaga={
    name:"Gotaga",
    link:"https://www.twitch.tv/gotaga",
    imageUrl:"images/gotaga.jpg",
    followers:"3,750,621",
    firstVue:"17 aout 2011",
    heurevisionage:"1,3413,942",
    pic:"72,185",

}
const solaryFortnite={
    name:"solaryFortnite",
    link:"https://www.twitch.tv/solaryfortnite",
    imageUrl:"images/solary.png",
    followers:"2,075,772",
    firstVue:"26 fevrier 2018",
    heurevisionage:"397,443",
    pic:"2,628",

}

const mostpopular=[squeezie,Gotaga,solaryFortnite];
const mostViewed =[Gotaga,squeezie,solaryFortnite];
const fastcroissance =[solaryFortnite,squeezie,Gotaga]

function affichertableau(order) {
    const tableau = document.getElementById("tab");
    tableau.innerHTML=' <tr>\n' +
        '                <th>Rang</th>\n' +
        '                <th>Nom</th>\n' +
        '                <th>lien</th>\n' +
        '                <th>statistics</th>\n' +
        '\n' +
        '            </tr>'
    order.forEach((streamer, index) => {
        const ligne = `<tr> 
            <td>${index + 1}</td> 
            <td><img src='${streamer.imageUrl}' class='profile'><b class='name'>${streamer.name}</b></td> 
            <td><a href='${streamer.link}' target='_blank'>${streamer.link}</a></td> 
            <td class='paa'><div class='stat'>
            <p class='palm'>Nombre de followers:</p>${streamer.followers}
            </div>
            <div class='stat'>
            <p class='palm'>Vue premiere fois:</p>${streamer.firstVue}
            </div>
            <div class='stat'>
            <p class='palm'>Heure de visionage:</p>${streamer.heurevisionage}
            </div>
            <div class='stat'>
            <p class='palm'>pic telespectateur:</p>${streamer.pic}
            </div>
            </td> 
        </tr>`;
        tableau.innerHTML += ligne;
    });
}

/**function populair() {
    affichertableau(mostpopular);
}
function mostview() {
    affichertableau(mostViewed);
}
function fastest() {
    affichertableau(fastcroissance);
}**/