<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   
   <style>
       .clock{
         background: lightgrey;  
         width: 300px;
         height: 300px;
         border-radius: 50%;
         position: relative;
         margin: 8% auto;
         border: 10px solid;
         
       }
       .dot{
           width: 14px;
           height: 14px;
           border-radius: 50px;
           background: #000;
           top: 0;
           left: 0;
           right: 0;
           bottom: 0;
           margin: auto;
           position: absolute;
           z-index: 10;
          
       }
       .hour-hand{
           position: absolute;
           z-index: 5;
           width: 6px;
           height: 65px;
           background: blue;
           top: 79px;
           transform-origin: 50% 72px;
           left: 50%;
           margin-left: -3px;
           border-top-left-radius: 50%;
           border-top-right-radius: 50%;
       }
       
       .minut-hand{
            position: absolute;
           z-index: 6;
           width: 4px;
           height: 100px;
           background: yellow;
           top: 58px;
           
           left: 50%;
           margin-left: -2px;
           border-top-left-radius: 50%;
           border-top-right-radius: 50%;
           transform-origin: 50% 100px;
           
       }
        .second-hand{
            position: absolute;
           z-index: 8;
           width: 4px;
           height: 120px;
           background: red;
           top: 30px;
           left: 50%;
           margin-left: -2px;
           border-top-left-radius: 50%;
           border-top-right-radius: 50%;
           transform-origin: 50% 125px;
           
       }
       
       span{
           display: inline-block;
           position: absolute;
           color: #000;
           font-size: 22px;
           font-family: 'poiret one';
           font-weight: 700;
           z-index: 4;
           
       }
       .h12{
           top:10px;
           left: 140px;
      
       }
       .h3{
           top:140px;
           right:20px;
           
           
       }
       .h6{
           bottom: 10px;
           left: 145px;
           
       }
       .h9{
          top:140px;
          left:20px; 
           
       }
       
       .diallines{
           position: absolute;
           z-index: 2;
           width: 2px;
           height: 15px;
           background: #000;
           left: 50%;
           transform-origin: 50% 150px;
           
           
       }
       .diallines:nth-of-type(5n){
           position: absolute;
           z-index: 2;
           width: 2px;
           height: 15px;
           background: #000;
           left: 50%;
           transform-origin: 50% 150px;
           
           
       }
       .date{
           position: absolute;
           width : 120px;
           height: 15px;
           border-radius: 7px;
           background-color: black;
           text-align: center;
           line-height: 20px;
           color: white;
           font-size: 11px;
           top:80px;
           left: 50%;
           margin-left: -60px;
            font-family: 'poiret one';
           font-weight: 700;
           z-index: 3;
           letter-spacing: 3px;
       }
       .day{
           
           position: absolute;
           width : 120px;
           height: 15px;
           border-radius: 7px;
           background-color: black;
           text-align: center;
           line-height: 20px;
           color: white;
           font-size: 11px;
           bottom:80px;
           left: 50%;
           margin-left: -60px;
            font-family: 'poiret one';
           font-weight: 700;
           z-index: 3;
           letter-spacing: 3px;
       }
       
       
   </style>
   
    </head>
    <body>
        <div class="clock">
            <div>
                <div class="date"></div>
                <div class="day"></div>
            </div>
            <div class="dot"></div>
            
            <div>
                <div class="hour-hand"></div>
                 <div class="minut-hand"></div>
                  <div class="second-hand"></div>
            </div>
            <div>
                <span class="h3">3</span>
                <span class="h6">6</span>
                <span class="h9">9</span>
                <span class="h12">12</span>
            </div>
            <div class="diallines"></div>
            
        </div>
        <script>
        var daillines=document.getElementsByClassName('diallines');
        var clockE1=document.getElementsByClassName('clock')[0];
        
        for(var i=1; i<60; i++)
        {
            clockE1.innerHTML+='<div class="diallines"></div>';
            daillines[i].style.transform="rotate("+6*i+"deg)";
            
            
        }
        function clock(){
            
            var weekday=new Array(7),
            d=new Date(),
            h=d.getHours(),        
            m=d.getMinutes(), 
            s=d.getSeconds(), 
            date=d.getDate(), 
            month=d.getMonth()+1, 
            year=d.getFullYear();
            
            hDeg=(360 / 100) * ((h / 12) * 100);
            mDeg=(360 / 100) * ((m / 60) * 100);
            sDeg=(360 / 100) * ((s / 60) * 100);
            
            hE1=document.querySelector('.hour-hand'),
            mE1=document.querySelector('.minut-hand'),
            sE1=document.querySelector('.second-hand'),
            
            dateE1=document.querySelector('.date'),
            dayE1=document.querySelector('.day');
            
            weekday[0]='Sunday';
            weekday[1]='Monday';
            weekday[2]='Tuesday';
            weekday[3]='Wednesday';
            weekday[4]='Thusday';
            weekday[5]='Friday';
            weekday[6]='Saturday';
    
            var day=weekday[d.getDay()];
            hE1.style.transform="rotate("+hDeg+"deg)";
            mE1.style.transform="rotate("+mDeg+"deg)";
            sE1.style.transform="rotate("+sDeg+"deg)";
            
            dateE1.innerHTML=date+"/"+month+"/"+year;
             dayE1.innerHTML=day;
        }
        
        setInterval("clock()",100);
        
        </script>
            
            
        

    </body>
</html>
