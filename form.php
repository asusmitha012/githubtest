<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
</head>
<body>

<!-- <h3>Contact Form</h3> -->

<div class="container">
  <form action="val.php" method="POST">
    <fieldset>
      <legend>Contact Form</legend>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>

    <label for="country">Country</label>
    <select id="country" name="country"><br>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
    <br>
    <label for="subject">Email</label>
    <input type="Email" name="email" placeholder="Your mail id.."><br>
    </fieldset>
    <input type="submit" value="Submit">
    
  </form>
</div>

</body>
</html>
