<!DOCTYPE html>
<html>
    <title>Control Panel</title>
    <body style="background-color:#cbbeb5;"><center>
        <font face="serif" size="20px" color="black">Control Panel</font></center></body>

        <?php require_once 'conn.php'; ?>
        <form action="conn.php" method="GET">

        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <button type="submit" name="forward" id="forward" value="forward" 
        style="
        height: 40px;
        width: 100px;
        position:relative; left:124px; top:390px;
        text-transform: capitalize;
        font:italic small-caps bold 12px/30px Georgia, serif;
        border-style: solid;
        border-color: black;
        ">forward</button>
        <br/>

        <button type="submit" name="left" id="left" value="left"
        style="
        height: 40px;
        width: 100px;
        position:relative; left:20px; top:400px;
        text-transform: capitalize;
        font:italic small-caps bold 12px/30px Georgia, serif;
        border-style: solid;
        border-color: black;
        " >left</button>

        <button type="submit" name="stop" id="stop" class="stop" value="stop"
        style="
        height: 40px;
        width: 100px;
        position:relative; left:20px; top:400px;
        text-transform: capitalize;
        font:italic small-caps bold 12px/30px Georgia, serif;
        background: white;
        color: red;
        border-style: solid;
        border-color: black;
        ">stop</button>

        <button type="submit" name="right" id="right" value="right" 
        style="
        height: 40px;
        width: 100px;
        position:relative; left:20px; top:400px;
        text-transform: capitalize;
        font:italic small-caps bold 12px/30px Georgia, serif;
        border-style: solid;
        border-color: black;
        ">right</button>
        <br/>

        <button type="submit" name="backward"  id="backward" value="backward" 
        style="
        height: 40px;
        width: 100px;
        position:relative; left:126px; top:410px;
        text-transform: capitalize;
        font:italic small-caps bold 12px/30px Georgia, serif;
        border-style: solid;
        border-color: black;
        ">backward</button>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <br/><br/><br/><br/><br/><br/>

        <h1 style="color:black;position:relative; left:-5px; top:-760px;">
            <FONT face="serif" SIZE="4">‎ Engine 1</FONT></h1>
               <div class="range-wrap" style="width: 18%;" >
                    <input type="range" class="range" min="0" max="180" value="0" id="s1" name="s1">
                         <output class="bubble"></output>
                </div>

         <h2 style="color:black;position:relative; left:-5px; top:-760px;">
             <FONT face="serif" SIZE="4">‎ Engine 2 </FONT></h2>
                 <div class="range-wrap" style="width: 18%;">
                      <input type="range" class="range" min="0" max="180" value="0" id="s2" name="s2">
                          <output class="bubble"></output>
                    </div>

         <h3 style="color:b ;position:relative; left:-5px; top:-760px;">
              <FONT face="serif" SIZE="4">‎ Engine 3 </FONT></h3>
                 <div class="range-wrap" style="width: 18%;">
                     <input type="range" class="range" min="0" max="180" value="0" id="s3" name="s3">
                          <output class="bubble"></output>
                 </div>

         <h4 style="color:black;position:relative; left:-5px; top:-760px;">
               <FONT face="serif" SIZE="4">‎ Engine 4 </FONT></h4>
                 <div class="range-wrap" style="width: 18%;">
                     <input type="range" class="range" min="0" max="180" value="0" id="s4" name="s4">
                         <output class="bubble"></output>
                 </div>

         <h5 style="color:black;position:relative; left:-5px; top:-760px;">
              <FONT face="serif" SIZE="4">‎ Engine 5 </FONT></h5>
                 <div class="range-wrap" style="width: 18%;">
                      <input type="range" class="range" min="0" max="180" value="0" id="s5" name="s5">
                          <output class="bubble"></output>
                 </div>

        <h6 style="color:black;position:relative; left:-5px; top:-760px;">
               <FONT face="serif" SIZE="4">‎ Engine 6 </FONT></h6>
                  <div class="range-wrap" style="width: 18%;">
                     <input type="range" class="range" min="0" max="180" value="0" id="s6" name="s6">
                          <output class="bubble"></output>
                 </div>



  <button type="submit"  name="save" style = "position:relative; left:755px; top:-740px;
        height: 40px;
        width: 100px;
        text-transform: capitalize;
        font:italic small-caps bold 12px/30px Georgia, serif;
        border-style: solid;
        border-color: black;
        left: 50%;
        transform: translateX(-50%);" >Save</button>
  
  <head>
    <link rel="stylesheet" href="iin.css">
  </head>
  <script src="iin.js"></script>
        

        
</html>