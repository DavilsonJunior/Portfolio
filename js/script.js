function openNav() {

    var x = document.getElementById("navigation");
    var icon = document.getElementById("threeline-icon");

    if(x.className === 'navigation') {
        x.className += ' menujs';
        icon.innerHTML = "&Cross;";
    } else {
        x.className = 'navigation';
        icon.innerHTML = "&#9776;";
    }
}

function enviado() {
    alert("dados enviados com Sucesso!");
}