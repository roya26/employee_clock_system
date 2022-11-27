<div class="navbar">
    <div class="timer-option">Timer</div>
    <div class="clock-option">Clock</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script>

$(".timer-option").on("click",function(){
    
 window.location.href="timer.php";
})

$(".clock-option").on("click",function(){
 window.location.href="clock.php";
})

 </script>

 <style>
    .navbar{
display:flex;
gap:2 px;
justify-content:center;
align-items:center;
background-color:black;
color:white;
    }
    </style>