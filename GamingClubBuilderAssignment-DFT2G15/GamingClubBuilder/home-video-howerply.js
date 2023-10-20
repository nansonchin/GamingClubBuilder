var playvideo=$("video");
[].forEach.call(playvideo,function(item,index){
   item.addEventListener('mouseover',hoverVideo.bind(item,index),false);
   item.addEventListener('mouseout',hideVideo.blind(item,index),false);
});

function hoverVideo(index,e){
    vid[index].play();
}
function hideVideo(index,e){
    vid[index].pause();
}

