<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="horizontal-menu-template-no-customizer">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Sticky Actions - Forms | Materialize - Material Design HTML Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/materialdesignicons.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
   
        
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Register Form/</span>
                New User
              </h4>
              <!-- Sticky Actions -->
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div
                      class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                      <h5 class="card-title mb-sm-0 me-2">Please fill in the form</h5>
                      <div class="action-btns">
                        <button class="btn btn-label-primary me-3" href="doc.php" type="submit">
                           Sign In
                        </button>
                        <button class="btn btn-primary" name="reg_user" type="submit">Sign Up</button>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-8 mx-auto">
                          <!-- 1. Delivery Address -->
                          <h5 class="mb-4">Do not worry about your data. We shall keep it discreet :)</h5>
                          <form class="needs-validation" method="post" action="register.php">
                            <?php include('errors.php'); ?>
                          <div class="row g-4">
                            <div class="col-md-6">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="fullname" class="form-control" placeholder="John Doe" name="username" />
                                <label for="fullname">Full Name</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-group input-group-merge">
                                <div class="form-floating form-floating-outline">
                                  <input
                                    class="form-control"
                                    type="text"
                                    id="email"
                                    name="email"
                                    placeholder="john.doe"
                                    aria-label="john.doe"
                                    aria-describedby="email3" />
                                  <label for="email">Email</label>
                                </div>
                                <span class="input-group-text" id="email3">@example.com</span>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-floating form-floating-outline">
                                <input
                                  type="text"
                                  id="phone"
                                  class="form-control phone-mask"
                                  placeholder="658 799 8941"
                                  aria-label="658 799 8941" />
                                <label for="phone">Contact Number</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-floating form-floating-outline">
                                <input
                                  type="text"
                                  id="alt-num"
                                  class="form-control phone-mask"
                                  placeholder="658 799 8941" />
                                <label for="alt-num">Alternate Number</label>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-floating form-floating-outline">
                                <textarea
                                  name="address"
                                  class="form-control"
                                  id="address"
                                  rows="2"
                                  placeholder="1456, Mall Road"
                                  style="height: 65px"></textarea>
                                <label for="address">Address</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="pincode" class="form-control" placeholder="658468" />
                                <label for="pincode">Pincode</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="landmark" class="form-control" placeholder="Nr. Wall Street" />
                                <label for="landmark">Landmark</label>
                              </div>
                            </div>
                            <div class="col-md">
                              <div class="form-floating form-floating-outline">
                                <input type="text" id="city" class="form-control" placeholder="Jackson" />
                                <label for="city">City</label>
                              </div>
                            </div>
                            <div class="col-md">
                              <div class="form-floating form-floating-outline">
                                <select id="state" class="select2 form-select" data-allow-clear="true">
                                  <option value="">Select</option>
                                  <option value="AL">Alabama</option>
                                  <option value="AK">Alaska</option>
                                  <option value="AZ">Arizona</option>
                                  <option value="AR">Arkansas</option>
                                  <option value="CA">California</option>
                                  <option value="CO">Colorado</option>
                                  <option value="CT">Connecticut</option>
                                  <option value="DE">Delaware</option>
                                  <option value="DC">District Of Columbia</option>
                                  <option value="FL">Florida</option>
                                  <option value="GA">Georgia</option>
                                  <option value="HI">Hawaii</option>
                                  <option value="ID">Idaho</option>
                                  <option value="IL">Illinois</option>
                                  <option value="IN">Indiana</option>
                                  <option value="IA">Iowa</option>
                                  <option value="KS">Kansas</option>
                                  <option value="KY">Kentucky</option>
                                  <option value="LA">Louisiana</option>
                                  <option value="ME">Maine</option>
                                  <option value="MD">Maryland</option>
                                  <option value="MA">Massachusetts</option>
                                  <option value="MI">Michigan</option>
                                  <option value="MN">Minnesota</option>
                                  <option value="MS">Mississippi</option>
                                  <option value="MO">Missouri</option>
                                  <option value="MT">Montana</option>
                                  <option value="NE">Nebraska</option>
                                  <option value="NV">Nevada</option>
                                  <option value="NH">New Hampshire</option>
                                  <option value="NJ">New Jersey</option>
                                  <option value="NM">New Mexico</option>
                                  <option value="NY">New York</option>
                                  <option value="NC">North Carolina</option>
                                  <option value="ND">North Dakota</option>
                                  <option value="OH">Ohio</option>
                                  <option value="OK">Oklahoma</option>
                                  <option value="OR">Oregon</option>
                                  <option value="PA">Pennsylvania</option>
                                  <option value="RI">Rhode Island</option>
                                  <option value="SC">South Carolina</option>
                                  <option value="SD">South Dakota</option>
                                  <option value="TN">Tennessee</option>
                                  <option value="TX">Texas</option>
                                  <option value="UT">Utah</option>
                                  <option value="VT">Vermont</option>
                                  <option value="VA">Virginia</option>
                                  <option value="WA">Washington</option>
                                  <option value="WV">West Virginia</option>
                                  <option value="WI">Wisconsin</option>
                                  <option value="WY">Wyoming</option>
                                </select>
                                <label for="state">State</label>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="deliveryAdd" checked="" />
                                <label class="form-check-label" for="deliveryAdd">
                                  Use this as default delivery address
                                </label>
                              </div>
                            </div>

                            
                          </div>
                          <hr />
                       
                          <div class="row gy-3">
                            <div class="col-md">
                              <div class="form-check custom-option custom-option-icon">
                                <label class="form-check-label custom-option-content" for="customRadioIcon1">
                                  <span class="custom-option-body">
                                    <i class="mdi mdi-briefcase-account-outline"></i>
                                    <span class="custom-option-title"> Admin </span>
                                  </span>
                                  <input
                                    name="customRadioIcon"
                                    class="form-check-input"
                                    type="radio"
                                    value=""
                                    id="customRadioIcon1"
                                    checked />
                                </label>
                              </div>
                            </div>
                            <div class="col-md">
                              <div class="form-check custom-option custom-option-icon">
                                <label class="form-check-label custom-option-content" for="customRadioIcon2">
                                  <span class="custom-option-body">
                                    <i class="mdi mdi-send-outline"></i>
                                    <span class="custom-option-title"> User </span>
                                  </span>
                                  <input
                                    name="customRadioIcon"
                                    class="form-check-input"
                                    type="radio"
                                    value=""
                                    id="customRadioIcon2" />
                                </label>
                              </div>
                            </div>
                            
                          </div>
                          <hr />
                          <!-- 3. Apply Promo code -->
                         
                          
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Sticky Actions -->
            </div>
            <!--/ Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
      </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <!--/ Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="../../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/jquery-sticky/jquery-sticky.js"></script>
    <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="../../assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="../../assets/vendor/libs/select2/select2.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/form-layouts.js"></script>
  </body>
</html>
