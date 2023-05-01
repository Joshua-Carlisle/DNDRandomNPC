<!DOCTYPE html>
<html>
<head>
<style>
  html {
    font-family: "Papyrus", "Copperplate", "Monaco";
  }

  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;

  }

  .bg-img { 
  background: url(images/whitebackground.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-position: center;
  background-size: cover;
  height: 100vh;
  width: 100%;
  position: relative;
  z-index: -1;
}

.blur {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 5;
  background-color: rgba(255, 255, 255, 0.5);
  width: 100%;
  height:100%;
  backdrop-filter: blur(15px)
}

h1 {
  text-align: center;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: 2C363F;
  font-size: 300%;
}

ul { 
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  position: absolute;
  float: none;
  top: 5%;
  left: 50%;
  transform: translate(-50%, -50%);
  justify-content: space-between;
}

li {
  float: left;
  text-align: center;
  padding: 14px 16px;
}

li a {
  display: block;
  color: white;
  padding: 14px 16px;
  text-align: center;
  text-decoration: none;
  color: #2C363F;
}

li a:hover {
  background-color: #648767;
  border-radius: 25px;
}

a {
  font-size: 25px;
}

</style>
</head>
<body>
<ul>
  <li><a class="active" href="http://randomdndnpc.epizy.com/">Home</a></li>
  <li></li>
  <li><a href="DNDRandomGenerator.php">Random NPC</a></li>
  </ul>
<div class="bg-img">
  <div class="blur">
  
  <h1>
  Welcome to <br></br>
  the Random <br></br>
  DND Generator
</h1>
</div>
</div>

</div>
</body>
</html>