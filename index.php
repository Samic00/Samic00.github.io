<html>
    <head>
        
    </head>
    <body>
        <style>
            *{
    margin: 0;
    box-sizing:border-box;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

#middle{
    display: flex;
    height: 100%;
    align-items: center;
    flex-direction: column;
    justify-content: center;
}
.naslov{
    font-size: 50px;
    margin-bottom: 20px;
}
.slika{
    width: fit-content;
}
.slika:hover{
    cursor:pointer;
}
#header{
    padding: 20px;
    height: fit-content;
    box-shadow: 0px 5px 3px rgb(86, 82, 84);
    position: fixed;
    background-color: white;
    transition: 0.3s;
    width: 100%;
}
.login{
    display: flex;
    flex-direction: column;
    width: 400px;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  
  button {
    background-color: rgb(0, 110, 255);;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 5px;
    transition: 0.3s;
  }
  .b1{
    align-items: right;
    width: max-content;
    position: absolute;
    top: 5px;
    right: 30px;
  }
  a{
    text-decoration: none;
    border-style: none; 
    color: rgb(182, 182, 182);
  }
  a:visited{
    text-decoration: none;
  }
  button:hover {
    background-color: rgb(0, 84, 194);
    cursor: pointer;
  }
  #input{
    background-color: rgb(0, 110, 255);;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 5px;
    transition: 0.3s;
  }
  #input:hover{
    background-color: rgb(0, 84, 194);
    cursor: pointer;

  }
  .poravnanje{
    display: flex;
    height: 100%;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    position: relative;
    top: 150px;
  }
  .Registracija{
    padding: 20px;
    color: white;
    background-color: rgb(86, 82, 84);
    width: fit-content;
  }
        </style>
        <div id="header"><div class="slika"><img src="Classroom_logo1.png" style="height: 31px;width:189;"></div></div>
        <div id="middle">
            <div class="naslov">Prijava</div>
            <form action="Login.php" method="post">
                <div class="login">
                  <label for="uname"><b>Korisnicko ime:</b></label>
                  <input type="text" placeholder="Unesi Korisnicko ime" name="uname" required>
              
                  <label for="psw"><b>Lozinka</b></label>
                  <input type="password" placeholder="Unesi Lozinku" name="psw" required >
              
                  <button type="submit">PRIJAVI SE</button>
                </div>
              </form>
        </div>
    </body>
</html>