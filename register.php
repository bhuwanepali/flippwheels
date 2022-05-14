<?php 
  include_once('./template/header.php');
?>
<style>
.container {
    width: 40%;
    /* height:100vh; */
    background-color: #fff;
    padding: 25px 30px;
    margin-bottom:25px;
    border-radius: 10px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
    left:65%;
    transform:translate(65%);
}
.container .input-box{
    margin:1rem;
    display:block;
}
.container input[type="text"],
.container input[type="number"],
.container input[type="date"],
.container input[type="password"]{
    padding:0.5rem;
    width:100%;
    background:#ddd;
    border:none;
}
.user-details span{
  margin-bottom:5px;
}
.container input[type="submit"]{
  padding:10px;
  width:150px;
  background:green;
  border:none;
  color:#fff;
  border-radius:5px 5px 5px 5px;
}
.container input[type="submit"]:hover{
  background:gray;
  color:#fff;
  cursor:pointer;
}
</style>
  <div class="container">
    <div class="title">Registration Form</div>
    <div class="content">
      <form action="controluserdata.php" method="POST">
        <div class="user-details">
          <table style="width:100%;">
            <tr>
              <td style="width:50%;">
                <div class="input-box">
                  <span class="details">Full Name</span><br>
                  <input type="text" id="FullName" name="FullName" placeholder="Enter your name" required>
                </div>
              </td>
              <td style="width:50%;">
                <div class="input-box">
                  <span class="details">Username</span><br>
                  <input type="text" id="Username" name="Username" placeholder="Enter your username" required>
                </div>
              </td>
            </tr>
            <tr>
              <td style="width:50%;">
                <div class="input-box">
                  <span class="details">Email</span><br>
                  <input type="text" id="Email" name="Email" placeholder="Enter your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                </div>
              </td>
              <td style="width:50%;">
                <div class="input-box">
                  <span class="details">Confirm Email</span><br>
                  <input type="text" id="confim-email" name="confirm-email" placeholder="Re-enter your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                </div>
              </td>
            </tr>
            <tr>
              <td style="width:50%;">
                <div class="input-box">
                  <span class="details">Phone Number</span><br>
                  <input type="number" id="phone" name="phone" placeholder="98XXXXXXXX" pattern="[0-9]{10}" required>
                </div>
              </td>
              <td style="width:50%;">
                <div class="input-box">
                  <span class="details">Password</span><br>
                  <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
              </td>
            </tr>
            <tr>
              <td style="width:50%;">
                <div class="input-box">
                  <span class="details">Confirm Password</span><br>
                  <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm your password" required>
                </div>
              </td>
              <td style="width:50%;">
                <div class="input-box">
                  <span class="details">Address</span><br>
                  <input type="text" id="address" name="address" placeholder="Enter your address" required>
                </div>    
              </td>
            </tr>
          </table>
        </div>

        <div class="id-type">
          <input type="radio" name="idtype" id="dot-1">
          <input type="radio" name="idtype" id="dot-2">
          <input type="radio" name="idtype" id="dot-3">
          <span class="id-type">ID type</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="idtype">Seller</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="idtype">Blogwriter</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="idtype">User</span>
            </label>
          </div>
        </div>


        <div class="terms">
          <input type="checkbox" id="terms" name="terms" class="terms-icon" required>
          <span>I agree to the terms and conditions</span>
        </div>

        <div class="button">
          <input type="submit" name="register" value="Register">
        </div>
        <div class="sign_up">
          Already a member? <a href="login.html">Login</a>
        </div>
        <div class="sign_up">
          <a href="contactus.html">Contact Us</a>

      </form>
    </div>
  </div>
</div>
  <?php include_once('./template/footer.php'); ?> 