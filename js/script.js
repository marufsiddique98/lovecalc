$("#btn").click(function(){
    $("#container2").addClass("d-none");
    $("#container1").removeClass("d-none");
});

$(".submit").click(function(){
    if($('#myName').val()==''){
        alert("Don't you have a name");
    }
    else if($('#crushName').val()==''){
        alert("")
    }
    else{
        $("#container2").removeClass("d-none");
    $("#container1").addClass("d-none");


    var prcntg=Math.floor(Math.random() * 101);
    var msg=' OMG!! You guys really love each other so very much!!';
    var src='img/very happy.png';

    if(prcntg<26){
        msg='Shitt!! You guys should really fix it up!!<br> You are in a very bad shape.';
        src='img/not good.png';
    }
    else if(prcntg<51){
        msg='Wow!You are starting to love each other.<br> Try to spend more time and probably go on a date';
        src='img/starting.png';
    }
    else if(prcntg<76){
        msg='Great!! You guys are really working out.'
        src='img/good.png';
    }
    document.querySelector('.percentage').innerHTML=prcntg.toString()+'%';
    document.querySelector('.message').innerHTML=msg;
    document.querySelector('.image').setAttribute('src',src);
    }
});

