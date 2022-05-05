
alert("Hi there! my name is Rose Falahee and I'm going to show you a simple magic trick... I hope you'll  be entertained.");
    
var kj = 0;
function Direction(Choice){
// The choice of the first buttons 
    if(Choice == "okay"){
        document.getElementById("result").innerHTML = "<center>~~~~~~~~~~~~<br><br>Do you see your number below? <br><pre>32  33  34  35<br><br>36  37  38  39<br><br>40  41  42  43<br><br>44  45  46  47<br><br>48 49</pre>";
        document.getElementById('okay').style.display = 'none';
                document.getElementById("result").style.display = 'inline';
        document.getElementById('yes').style.display = 'inline';
        document.getElementById("no").style.display = 'inline';
    }
}
        
function Direction2(Choice){

if(Choice == 'yes'){ kj+=32;}        
            document.getElementById("result2").innerHTML = "<center>~~~~~~~~~~~~<br><br>Do you see your number below? <br><pre>17  25  30  22<br><br>23  31  16  29<br><br>19  27  20  24<br><br>26  21  28  18<br><br>48 49</pre>";
        document.getElementById('yes').style.display = 'none';
        document.getElementById("no").style.display = 'none';
        document.getElementById("result2").style.display = 'inline';
        document.getElementById('yes2').style.display = 'inline';
             document.getElementById('no2').style.display = 'inline';
}

function Direction3(Choice){
if(Choice == 'yes2'){ kj+=16;}
            document.getElementById("result3").innerHTML = "<center>~~~~~~~~~~~~<br><br>How about here? <br><pre> 7   2  10  15<br><br>23  18  31  26<br><br> 3  27  11  19<br><br> 6  30  14  22<br><br>34 35 38 39<br><br>42 43 46 47</pre>";
        document.getElementById('yes2').style.display = 'none';
        document.getElementById("no2").style.display = 'none';
        document.getElementById("result3").style.display = 'inline';
        document.getElementById('yes3').style.display = 'inline';
             document.getElementById('no3').style.display = 'inline';  
        
}

function Direction4(Choice){
if(Choice == 'yes3'){ kj+=2;}
            document.getElementById("result4").innerHTML = "<center>~~~~~~~~~~~~<br><br>I need to be sure. Do you see it here? <br><pre>24  12   8  28<br><br> 9  30  10  29<br><br>25  15  13  27<br><br>31  26  11  14<br><br>40 41 42 43<br><br>44 45 46 47</pre>";
        document.getElementById('yes3').style.display = 'none';
        document.getElementById("no3").style.display = 'none';
        document.getElementById("result4").style.display = 'inline';
        document.getElementById('yes4').style.display = 'inline';
             document.getElementById('no4').style.display = 'inline';  
        
}     

function Direction5(Choice){
if(Choice == 'yes4'){ kj+=8;}
            document.getElementById("result5").innerHTML = "<center>~~~~~~~~~~~~<br><br>We're almost done. Is your number here? <br><pre>31   1   7  25<br><br>23   9  15  17<br><br>29   3  11  27<br><br>21   5  13  19<br><br>33 35 37 39<br><br>41 43 45 47 49</pre>";
        document.getElementById('yes4').style.display = 'none';
        document.getElementById("no4").style.display = 'none';
        document.getElementById("result5").style.display = 'inline';
        document.getElementById('yes5').style.display = 'inline';
             document.getElementById('no5').style.display = 'inline';  
        
} 

function Direction6(Choice){
if(Choice == 'yes5'){ kj+=1;}
            document.getElementById("result6").innerHTML = "<center>~~~~~~~~~~~~<br><br>Finally, do you see your number below? <br><pre>20  28  12   4<br><br> 5  31  21  29<br><br>13   6  22  30<br><br> 7  14  23  15<br><br>36 37 38 39<br><br>44 45 46 47</pre>";
        document.getElementById('yes5').style.display = 'none';
        document.getElementById("no5").style.display = 'none';
        document.getElementById("result6").style.display = 'inline'; 
        document.getElementById('yes6').style.display = 'inline';
             document.getElementById('no6').style.display = 'inline';  
        
}      

function Direction7(Choice){
if(Choice == 'yes6'){ kj+=4;}
            document.getElementById("result6").innerHTML = "<center>~~~~~~~~~~~~<br><br><h4>Your number is "+kj+"</h4><br>🎊🎉🎊🎉🎊<br>😂😊😯😆💞💓👍🌹";
        document.getElementById('yes6').style.display = 'none';
        document.getElementById("no6").style.display = 'none';
        document.getElementById("result7").style.display = 'inline'; 
        
}      
        
    