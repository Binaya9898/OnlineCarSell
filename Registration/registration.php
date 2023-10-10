<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../style.css" />
  </head>
  <body>
    <section class="container">
      <header>Car Seller Registration Form</header>
      <form action="registerUser.php" method ="POST" class="form">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" name="name" required />
        </div>

        <div class="input-box">
          <label>Address</label>
          <input type="text" placeholder="Enter email address" name="address" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" name="contact" required />
          </div>
          <div class="input-box">
            <label>Email address</label>
            <input type="text" placeholder="Enter your email" name="email" required />
          </div>
        </div>
       
          </div>
        </div>
        <div class="input-box">
          <label>Username</label>
       
            <input type="text" placeholder="Enter your Username" name="username" required />
          </div>
       <div class="input-box">
        <label for="">Password</label>
        <input type="text" placeholder="Enter your password" name="password" required />
       </div>
        <button>Submit</button>
      </form>
      <div class="back-button">
        <a href="index.html" class="label">back</a> 
      </div>
    </section>
  </body>
</html>