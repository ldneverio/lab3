<!DOCTYPE html>
<html>
<head>
<title>Leleyow</title>


<style>
#myHeader {
  background-color: darkblue;
  color: white;
  font-family: Brush Script MT;
  font-size: 50px;
  padding: 10px;
  text-align: center;}
 
body {background-color:powderblue;
  background-image: url('bluethunder1.png')
}

.button1 {background-color: #008CBA;}
.button2 {background-color: #008CBA;}
.button3 {background-color: #008CBA;}
.button4 {background-color: #008CBA;} 

.yeah {
  background-color: lightblue;
  color: darkblue;
  padding: 20px;}

  table, th, td {
  border:2px solid black;
  text-align:center;
  background-color: cornflowerblue;
}
table.center {
  margin-left: auto; 
  margin-right: auto;
}
</style>
</head>
<body>
<h1 id="myHeader"><marquee> Hi! Welcome to Leleyow's Website! </marquee> </h1>
<button class="button4"; id="myBtn">Hi :)</button>
<button class="button1"; onclick="gotoLink(this)" value="https://www.facebook.com/le.neverio">Facebook</button> 
<button class="button2"; onclick="gotoLink(this)" value="https://www.instagram.com/leneverio/">Instagram</button>
<button class="button3": blue; onclick="gotoLink(this)" value="https://www.linkedin.com/in/lerrlyn-neverio-979b8821a/">LinkedIn</button>

<script>
document.getElementById("myBtn").addEventListener("click", function() {
  alert("Hi! I just wanted to say that, thank you for visiting my page :) Hope you'll like it!");
});

function gotoLink(link){
 window.location="link.value";
};
</script>





<img src="img/Leleyow.png" style="float:right;width:250px;height:260px;">
<h2> Want to know more about Lerrlyn Neverio?</h2>
<h2 class="yeah">Lele's Info</h2>
<p style="font-size:18px";>Full Name: Lerrlyn Distura Neverio <br> Nickname: Lele <br> Birthdate: February 20, 2002 <br> Age: 20 yrs old
<br> School: Asia Pacific College <br> Course: Bachelor of Science in Information Technology Specializing
 Mobile and Internet Technology</p>

<h2 class="yeah" style="text-align: center;">Things that Lele loves to do and what she loves.</h2>

<table class="center"; style="width:40%";>
  <tr> 
    <th style="width:20%"> Me</th>
    <th style="width:20%"> Things that I loves</th>
  </tr>

  <tr>
    <td > <img src="img/guitar.png" style="width:200px;height:260px; "> </td>
    <td> When I am bored, I usually play guitar and play any songs that I want. </td>
  </tr>

  <tr>
    <td > <img src="img/food.jpg" style="width:200px;height:260px; "> </td>
    <td> Fooooddss!!! I really love to eat a lot, especially when I am sad and of course, when I am hungry. </td>
  </tr>

  <tr>
    <td > <img src="img/dogs.jpg" style="width:200px;height:260px; "> </td>
    <td> The ones that I love the most right now are my dogs. They save me from my sadness, and
       I really want to take care of a dog.</td>
  </tr>

</table>
<h2 class="yeah" style="text-align: center;">&copy;Lerrlyn Neverio 2022</h2>

<script>
  function myFunction() {
    document.getElementById("demo").innerHTML = "I AM THE CUTEST HUMAN ALIVE HEHEHEHEHE";
  }
  </script

<p id="demo">DON'T YOU EVER CLICK IT, OKAY?</p>
<button type="button" onclick="myFunction()">WARNING!!!</button>


<p id="demo"></p>

<script>
class Person {
  constructor(name, year) {
    this.name = name;
    this.year = year;
  }
}

const myPerson = new Person("Lerrlyn", 2023);
document.getElementById("demo").innerHTML =
myPerson.name + " " + myPerson.year;
</script>

<script>
function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Please say something about my website so I can improve it. Thank you!");
    return false;
  }
}
</script>

<h3> Hi! Put any comment/s about my website. Thank you! </h3>
<form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
  Comment/s:  <input type="text" name="fname">
  <in

<p>Click "<3". After you put comment/s hehe.</p>

<button onclick="setTimeout(myFunction, 3000);"> <3 </button>

<script>
function myFunction() {
  alert('Really appreciated your visit in my website :)');
}
</script>



</body>
</html>
