<div id="timestamp"></div>

<?php include("navbar.php");


    date_default_timezone_set('Asia/Jerusalem');
    $tz_time = date("F j, Y h:i:s");
    
    ?>
    <div id="clock"></div>
    
    <script type="text/javascript">
                            var currenttime = '<?php echo $tz_time;?>'; // Timestamp of the timezone you want to use, in this case, it's server time
                            var servertime=new Date(currenttime);
                            function padlength(l){
                                var output=(l.toString().length==1)? "0"+l : l;
                                return output;
                            }
                            function digitalClock(){
                                servertime.setSeconds(servertime.getSeconds()+1);
                                var timestring=padlength(servertime.getHours())+":"+padlength(servertime.getMinutes())+":"+padlength(servertime.getSeconds());
                                document.getElementById("clock").innerHTML=timestring;
                            }
                            window.onload=function(){
                            setInterval("digitalClock()", 1000);
                            }
    </script> 


<!-- <h1 id="current-time-now" data-start="<?php echo time() ?>"></h1>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">>

    var freshTime = new Date(parseInt($("#current-time-now").attr("data-start"))*1000);
 
    var func = function myFunc() {
       
        $("#current-time-now").text(freshTime.toLocaleTimeString());
     
        freshTime.setSeconds(freshTime.getSeconds() + 1);
        
        setTimeout(myFunc, 1000);
    };
    func();
    </script> -->