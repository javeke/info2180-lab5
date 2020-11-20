window.onload = ev =>{
    var lookUp = document.getElementById('lookup');
    var lookUp1 = document.getElementById('lookup1');
    var country = document.getElementById('country');
    var result = document.getElementById('result');

    lookUp.onclick = ev =>{
        var http = new XMLHttpRequest();
        http.onreadystatechange = function(){
            if(http.readyState==4 && http.status==200){
                result.innerHTML = http.response;
            }
        }
        http.open('GET', `world.php?country=${country.value.trim()}`);
        http.send();
    }

    lookUp1.onclick = ev =>{
        var http = new XMLHttpRequest();
        http.onreadystatechange = function(){
            if(http.readyState==4 && http.status==200){
                result.innerHTML = http.response;
            }
        }
        http.open('GET', `world.php?country=${country.value.trim()}&context=cities`);
        http.send();
    }
}