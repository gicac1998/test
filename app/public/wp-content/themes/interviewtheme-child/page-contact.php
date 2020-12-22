 <?php get_header(); ?>



<form class="contactContainer" action="/" method="post">
  <h2 class="contactTitle">Contact Us</h2>
  <label class="labelStyle" for="firstName" class="form-label">First Name</label>
  <input type="text" class="form-control" id="firstName" placeholder="Enter First Name..." required>

  <label class="labelStyle" for="lastName" class="form-label">Last Name</label>
  <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name..." required>

  <label class="labelStyle" for="email" class="form-label">Email</label>
  <input type="email" class="form-control" id="email" placeholder="Enter Email..." required>

  <label class="labelStyle" for="phone" class="form-label">Phone</label>
  <input type="tel" class="form-control" id="phone" placeholder="Enter Phone Number...">

  <label class="labelStyle" for="message">Message</label>
  <textarea id="message" name="name" rows="5" cols="50" placeholder="Enter Message..."></textarea>

  <input class="button" type="submit" value="Submit">
</form>
 <?php



  ?>
<?php get_footer(); ?>
