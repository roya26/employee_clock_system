<?php include("navbar.php");
echo "Timer</br>"

?>
<button class="set-btn">Set Timer</button>
<div class="timer"><div class="minute-timer">00</div>:<div class="second-timer">00</div></div>
<button class="start-btn">Start</button>
<button class="rese-btn">Reset</button>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>


jQuery(document).ready(()=>{
    jQuery(".set-btn").on("click",function(){
        console.log("hi from set btn");
        var minute=jQuery(".minute-timer").text()
       var second= jQuery(".second-timer").text()
       console.log(second);
       if(second<=60){
        second++
       }else if(second===60){
        jQuery(".second-timer").text(0)
        minute++
       }
       
   })
}
)
 

jQuery(document).ready(()=>{
    jQuery(".start-btn").on("click",function(){
      console.log("hi from start btn");
      var minute=jQuery(".minute-timer").text()
      if(minute!==0){ setInterval(() => {  
        minute--
      }, 1000);
    }else if(minute===0){
        jQuery(".minute-timer").text(0)
        var second= jQuery(".second-timer").text()
        second--
        if()
    }
     
    })
})


$(document).ready(()=>{
    $("reset-btn").on("click",function(){
        jQuery(".second-timer").text(0)
        jQuery(".minute-timer").text(0)   
    })
}

)
</script>




<style>
.timer{
    display:flex;
}
</style>