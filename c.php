
<html>

<head>

 <meta name="viewport" content="width=device-width, initial-scale=1">


 <style>

  body     {font-family: Arial, Helvetica, sans-serif;background-image : url('back.jpg');}

  /* Full-width input fields */
  input[type=text], input[type=password]
  {
   width: 100%;
   padding: 12px 20px;
   margin: 8px 0;
   display: inline-block;
   border: 1px solid #ccc;
   box-sizing: border-box;
   text-align:center;
  }

  label
  {
   width: 100%;

   margin: 8px 0;
   display: inline-block;


   text-align:right;
  }

  /* Set a style for all buttons */
  button
  {
      alignment: center;
   background-color: #595959;
   color: white;
   padding: 14px 20px;
   margin: 8px 0;
   border: 10.0px;
   cursor: pointer;
   width: 100%;
   font-size: 23px;

  }

  button:hover
  {
   opacity: 0.8;
  }

  /* Extra styles for the cancel button */
  .cancelbtn
  {
   width: auto;
   padding: 10px 18px;
   background-color: #f44336;
  }

  /* Center the image and position the close button */
  .imgcontainer
  {
   text-align: center;
   margin: 10% 0 6% 0;

   position: relative;
  }

  img.avatar
  {
   width: 20%;
   border-radius: 50%;
  }

  .container
  {
   padding: 6%;
  }
  ;
  span.psw
  {
   float: right;
   padding-top: 16px;
  }

  /* The Modal (background) */
  .modal
  {
   display: none; /* Hidden by default */
   position: fixed; /* Stay in place */
   z-index: 1; /* Sit on top */
   left: 0;
   top: 0;
   width: 100%; /* Full width */
   height: 100%; /* Full height */
   overflow: auto; /* Enable scroll if needed */
   background-color: rgb(0,0,0); /* Fallback color */
   background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
   padding-top: 60px;
  }

  /* Modal Content/Box */
  .modal-content
  {
   background-color: #fefefe;
   margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
   border: 1px solid #888;
   width: 35%; /* Could be more or less, depending on screen size */
  }

  /* The Close Button (x) */
  .close
  {
   position: absolute;
   right: 25px;
   top: 0;
   color: #000;
   font-size: 35px;
   font-weight: bold;
  }

  .close:hover,
  .close:focus
  {
   color: red;
   cursor: pointer;
  }

    .key-color
    {
        color:red;
    }

   /* Add Zoom Animation */
  .animate
  {
   -webkit-animation: animatezoom 0.6s;
   animation: animatezoom 0.6s
  }

  @-webkit-keyframes animatezoom
  {
   from {-webkit-transform: scale(0)}
   to {-webkit-transform: scale(1)}
  }

  @keyframes animatezoom
  {
   from {transform: scale(0)}
   to {transform: scale(1)}
  }

  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px)
  {
   span.psw
   {
    display: block;
    float: none;
   }

   .cancelbtn
   {
    width: 100%;
   }
  }


 </style>
</head>
<body>


</br>
</br>
<center><h1>Welcom To Captcha</h1></center></br>
<center><img src="background.jpg"  height="200" width="200"></center>
<center><b><button onclick="loadDoc()" style="width: 100px;">login </button></b></center>

<div id="id01" class="modal">

 <div class="modal-content animate" name='input'">
  <div class="imgcontainer">
   <span onclick="closeModal()" class="close" title="Close Modal">&times;</span>

   <img src="cap1.jpg" id="image1" height="200" width="200">
   <ol type="i">
          <li id = "Desc">Leading with the Car Letter: Rotate to the Right </li>
       <li id = "Desc1">Leading with the Car Letter: Rotate to the Right </li>
  </div>

  <div class="container">
   <label style="alignment: center;font-size: 20px;font-family: 'Comic Sans MS'" for="uname"><b>solution</b>  </label>
   <input type="text" placeholder="enter captcha"  id='cap1' name='cap1' required>
      <input type="text" placeholder="enter captcha"  id='cap2' name='cap2' required>
   <div id="Error" class='error'></div>
   <button onclick="submit()" type="submit" name='sub' >submit</button>


   <label>

   </label>
  </div>


 </div>
</div>
<script>


    function image()
    {
        var x = ['cap1.jpg','cap2.jpg','cap3.jpg'];
        var y = Math.floor(Math.random()*3);
        document.getElementById('image1').src = x[y];
        document.getElementById('id01').style.display='block';
    }

    var key1,key2;
    var times=0;
    var T,imgId;
    var f;
    var counter =0;
    var myCounter;
    var counterTrue , counterFalse;

    function closeModal()
    {
        document.getElementById('id01').style.display='none';
        clearInterval(myCounter);
        counter = 0;
    }

    function loadDoc()
    {

         myCounter = setInterval(()=>
         {
            counter++;
            if(counter == 900)
            {
                alert('your time is gone!!');
                closeModal();
            }
        } , 1000);
        <?php if( isset($_COOKIE['ip']))
        {?>

        alert("You are blocked");
        return;

        <?php }?>

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                var imageData = JSON.parse(this.responseText);


                var y = Math.floor(Math.random()*imageData.length);
                document.getElementById('image1').src = imageData[y].image_src;
                document.getElementById('Desc').innerHTML = imageData[y].image_value;
                document.getElementById('Desc1').innerHTML = imageData[y].image_value2;
                key1 = imageData[y].image_key;
                key2 = imageData[y].image_key2;
                document.getElementById('id01').style.display='block';
                T=imageData[y].truenum ;
                imgId = imageData[y].id;
                F=imageData[y].falsenum ;
                counterTrue = imageData[y].true_time;
                counterFalse = imageData[y].false_time;
            }
        }
        xhttp.open("POST", "images.php", true);
        xhttp.send();
    }

    function setCookie()
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                // var imageData = JSON.parse(this.responseText);
                window.location = "c.php";
            }
        }

        xhttp.open("POST", "cookie.php", true);
        xhttp.send();
    }


    function update(number)
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                // var imageData = JSON.parse(this.responseText);
            }
        }
        xhttp.open("GET", "update.php?number="+number+"&id="+imgId, true);
        xhttp.send();
    }

    function updateTime(number)
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                // var imageData = JSON.parse(this.responseText);
            }
        }
        xhttp.open("GET", "updatetruetime.php?number="+number+"&id="+imgId, true);
        xhttp.send();
    }

    function updateTimeFalse(number)
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                // var imageData = JSON.parse(this.responseText);
            }
        }
        xhttp.open("GET", "updatefalsetime.php?number="+number+"&id="+imgId, true);
        xhttp.send();
    }

    function updatef(number)
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                // var imageData = JSON.parse(this.responseText);

            }
        }
        xhttp.open("GET", "updatef.php?number="+number+"&id="+imgId, true);
        xhttp.send();
    }

    function submit()
    {
        var data1 = document.getElementById('cap1').value;
        var data2 = document.getElementById('cap2').value;
        if(data1 == key1 && data2 == key2)
        {
            clearInterval(myCounter);
            counter = counter + parseInt(counterTrue);
            updateTime(counter);
            alert("Congratulations")
            document.getElementById('cap1').value = '';
            document.getElementById('cap2').value = '';
            T++;
            update(T);

        }
        else
        {
            alert("Your solution is wrong please try again") ;
            times++;
            F++;
            updatef(F);
            clearInterval(myCounter);
            counter = counter + parseInt(counterFalse);
            updateTimeFalse(counter);

            if(times==3)
            {
                setCookie();
                alert("Error 3 Times!!")
            }
            document.getElementById('cap1').value = '';
            document.getElementById('cap2').value = '';
            loadDoc();
        }


    }
</script>

</body>
</html>