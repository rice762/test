var maney = 0;
function insert(){
    maney = maney + 100;
    alert(maney + '円入っています');
}
function buy(){
    if(maney < 200){
        alert(maney + '円しかないよ');
    }else{
        maney = maney - 200;
        alert('飲み物買えた');
    }
}