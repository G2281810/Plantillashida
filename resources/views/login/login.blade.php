<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script
   src="https://kit.fontawesome.com/64d58efce2.js"
   crossorigin="anonymous"
  ></script>
  <link rel="stylesheet" href="./login_chido/styles.css" />
  <title>Iniciar Sesion</title>
 </head>

 <body>
   
  <div class="container">
    
   <div class="forms-container">
    <div class="signin-signup">
     <form action = "{{route('login')}}" method = "POST" class="sign-in-form">
      
      <h2 class="title">Iniciar Sesion
      </h2>
      <div class="input-field">
       <i class="fas fa-user"></i>
       <input type="text" placeholder="Usuario" />
      </div>
      <div class="input-field">
       <i class="fas fa-lock"></i>
       <input type="password" placeholder="Contraseña" />
      </div>
      <input class="btn solid" type="submit" value="Iniciar Sesion" />
      <p class="social-text">Inicia Sesion con nuestras redes Sociales</p>
      <div class="social-media">
       <a href="#" class="social-icon">
        <i class="fab fa-facebook-f"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-twitter"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-google"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-linkedin-in"></i>
       </a>
      </div>
     
     <form action="#" class="sign-up-form">
      <h2 class="title">Registrate</h2>
      <div class="input-field">
       <i class="fas fa-user"></i>
       <input type="text" name="usuario" placeholder="Usuario" />
      </div>
      <div class="input-field">
       <i class="fas fa-envelope"></i>
       <input type="email" name="correo" placeholder="Correo" />
      </div>
      <div class="input-field">
       <i class="fas fa-lock"></i>
       <input type="password" name="contraseña" placeholder="Contraseña" />
      </div>
        <div>
           <input type="checkbox" name="terminos"/> Acepto Terminos y Condiciones 
        </div>
        <div class="Terminos">
            <a href="#"> Leer Terminos y Condiciones</a>
        </div>
      <input type="submit" class="btn" value="Registrate" />
      <p class="social-text">Registrate con redes sociales</p>
      <div class="social-media">
       <a href="#" class="social-icon">
        <i class="fab fa-facebook-f"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-twitter"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-google"></i>
       </a>
       <a href="#" class="social-icon">
        <i class="fab fa-linkedin-in"></i>
       </a>
      </div>
     </form>
    </div>
   </div>

   <div class="panels-container">
    <div class="panel left-panel">
     <div class="content">
      <h3>¿Eres nuevo?</h3>
      <p>
       Registrate my-dentiss es el mejor sistema para controlar tu consultorio dental
      </p>
      <button class="btn transparent" id="sign-up-btn">Registrate</button>
     </div>
     <img src="./login_chido/img/log.svg" class="image" alt="" />
    </div>
    <div class="panel right-panel">
     <div class="content">
      <h3>¿Ya tienes una cuenta?</h3>
      <p>
       Inicia Sesion con My-Dentiss.
      </p>
      <button class="btn transparent" id="sign-in-btn">Iniciar Sesion</button>
     </div>
     <img src=",/login_chido/img/register.svg" class="image" alt="" />
    </div>
   </div>
  </div>
  <script src="./login_chido/app.js"></script>
 </body>

</html>
