<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="description" content="Basic HTML elements"/>
      <meta name="keywords" content="HTML5, tags"/>
      <meta name="author" content="Nicholas"/>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
      <link rel="shortcut icon" href="img/fav-icon.jpg" type="image/jpg">
      <link rel="stylesheet" href="css/style.css">
      <title>ENQUIRY: Dota 2</title>
    </head>

<body id="bgimg7">

  <?php include 'navigation.php';?>

<div id="formHeader">
	<h1>Enquiries</h1>
</div>

<article id="enquiry">
<form action="enquiry_process.php" method="POST" class="enquiryform" id="enquiryform">
  <fieldset>
      <legend>Personal Details</legend>
      <table>
          <tr>
              <td><label for="first_name">First Name:</label></td>
          </tr>
          <tr>
              <td class="form-control">
                  <input type="text" name="first_name" id="first_name" maxlength="25"/>
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error Message</small>
              </td>
          </tr>
          <tr>
              <td><label for="last_name">Last Name:</label></td>
          </tr>
          <tr>
              <td class="form-control">
                  <input type="text" name="last_name" id="last_name" maxlength="25"/>
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error Message</small>
              </td>
          </tr>
          <tr>
              <td><label for="email">Email:</label></td>
          </tr>
          <tr>
              <td class="form-control">
                  <input type="text" name="email" id="email"/>
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error Message</small>
              </td>
          </tr>
          <tr>
              <td><label for="phone">Phone Number:</label></td>
          </tr>
          <tr>
              <td class="form-control">
                  <input type="text" id="phone" name="phone" placeholder="(XXX)-(XXX)-(XXXX)" maxlength="10"/>
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error Message</small>
              </td>
          </tr>
      </table>
  </fieldset>
  <fieldset>
      <legend>Address</legend>
      <table>
          <tr>
              <td><label for="street">Street Address:</label></td>
          </tr>
          <tr>
              <td class="form-control">
                  <input type="text" name="street" id="street" maxlength="40"/>
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error Message</small>
              </td>
          </tr>
          <tr>
              <td><label for="city">City / Town:</label></td>
          </tr>
          <tr>
              <td class="form-control">
                  <input type="text" name="city" id="city" maxlength="20"/>
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error Message</small>
              </td>
          </tr>
          <tr>
              <td><label for="state">State:</label></td>
          </tr>
          <tr>
              <td class="form-control">
                  <select name="state" id="state">
                      <option value="">Select</option>
                      <option value="Johor">Johor</option>
                      <option value="Kedah">Kedah</option>
                      <option value="Kelantan">Kelantan</option>
                      <option value="KualaLumpur">Kuala Lumpur</option>
                      <option value="Labuan">Labuan</option>
                      <option value="Malacca">Malacca</option>
                      <option value="Negeri Sembilan">Negeri Sembilan</option>
                      <option value="Pahang">Pahang</option>
                      <option value="Penang">Penang</option>
                      <option value="Perak">Perak</option>
                      <option value="Perlis">Perlis</option>
                      <option value="Putrajaya">Putrajaya</option>
                      <option value="Sabah">Sabah</option>
                      <option value="Sarawak">Sarawak</option>
                      <option value="Selangor">Selangor</option>
                      <option value="Terengganu">Terengganu</option>
                  </select>
                  <i class="fas fa-check-circle selection"></i>
                  <i class="fas fa-exclamation-circle selection"></i>
                  <small>Error Message</small>
              </td>
          </tr>
          <tr>
              <td><label for="postcode">Postcode:</label></td>
          </tr>
          <tr>
              <td class="form-control">
                  <input type="text" name="postcode" id="postcode" />
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error Message</small>
              </td>
          </tr>
      </table>
  </fieldset>
  <fieldset>
      <legend>Enquiries</legend>
      <table>
          <tr>
              <td><label for="subject">Subject:</label></td>
          </tr>
          <tr>
              <td class="form-control">
                  <input type="text" id="subject" name="subject" />
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error Message</small>
              </td>
          </tr>
          <tr>
              <td><label for="products">Products:</label></td>
          </tr>
          <tr>
              <td class="form-control">
                  <select name="products" id="products" size="1">
                      <option value="">Select</option>
                      <optgroup label="Introduction">
                          <option value="Trailer">Trailer</option>
                          <option value="Trailer 2">Trailer 2</option>
                          <option value="The Origin">The Origin</option>
                          <option value="Beginners Guide">Beginners Guide</option>
                      </optgroup>
                      <optgroup label="Heroes">
                          <option value="Invoker">Invoker</option>
                          <option value="Juggernaut">Juggernaut</option>
                          <option value="Morphling">Morphling</option>
                          <option value="Faceless Void">Faceless Void</option>
                      </optgroup>
                      <optgroup label="Updates">
                          <option value="Spring Cleaning Update 2022">Spring Cleaning Update 2022</option>
                          <option value="DPC Spring Tour & Fantasy Kickoff">DPC Spring Tour & Fantasy Kickoff</option>
                          <option value="Dota Plus Update Spring 2022">Dota Plus Update Spring 2022</option>
                          <option value="7.31b Gameplay Update">7.31b Gameplay Update</option>
                      </optgroup>
                      <optgroup label="Esports">
                          <option value="The International 7">The International 7</option>
                          <option value="The International 8">The International 8</option>
                          <option value="The International 9">The International 9</option>
                          <option value="The International 10">The International 10</option>
                      </optgroup>
                  </select>
                  <br/>
                  <i class="fas fa-check-circle selection"></i>
                  <i class="fas fa-exclamation-circle selection"></i>
                  <small>Error Message</small>
              </td>
          </tr>
          <tr>
              <td><label for="comments">Comments:</label></td>
          </tr>
          <tr>
              <td class="form-control">
                  <textarea name="comments" id="comments" rows="10"></textarea>
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error Message</small>
              </td>
          </tr>
      </table>
  </fieldset>
  <div class="buttons">
      <input type="submit" />
      <input type="reset" />
  </div>
</form>

</div>
</article>
<br>
<br>
<div class="clock">
    <span class="clock-time"></span>
    <span class="clock-ampm"></span>
  </div>
<br>
<br>
<br>
<br>
<button id="back-to-top-btn"><i class="fas fa-angle-double-up"></i></button>
<?php include 'footer.php';?>
<script src="https://kit.fontawesome.com/2076012a21.js" crossorigin="anonymous"></script>
<script src="script/script.js"></script>
<script src="script/transfer.js"></script>
<script src="script/buttontop.js"></script>
<script src="script/nav.js"></script>
<script src="script/clock.js"></script>
</body>
</html>
