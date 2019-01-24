function myFunction(col){
    document.getElementById('demo').style.backgroundColor = col;
}

function inserText(text){
    var div = document.getElementById('demo');
    div.innerHTML = text;
    div.style.textAlign = 'center';
    div.style.color = 'black';
    div.style.lineHeight = '200px';

}