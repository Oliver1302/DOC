<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register Page</title>
</head>
<body>
     <!-- Bootstrap Validation -->
     <div class="container mt-4 col-md">
                  <div class="card">
                    <h5 class="card-header">Bootstrap Validation</h5>
                    <div class="card-body">
                      <form class="needs-validation" method="post" action="register.php">
                      <?php include('errors.php'); ?>
                        <div class="form-floating form-floating-outline mb-4">
                          <input
                            type="text"
                            class="form-control"
                            id="bs-validation-name"
                            placeholder="John Doe"
                            required name="username" />
                          <label for="bs-validation-name">Username</label>
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">Please enter your Username.</div>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                          <input
                            type="email"
                            id="bs-validation-email"
                            class="form-control"
                            placeholder="john.doe"
                            aria-label="john.doe"
                            name="email" 
                            required />
                          <label for="bs-validation-email">Email</label>
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">Please enter a valid email</div>
                        </div>
                        <div class="mb-4 form-password-toggle">
                          <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                              <input
                                type="password"
                                id="bs-validation-password"
                                class="form-control"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                type="password" name="password_1"
                                required />
                              <label for="bs-validation-password">Password</label>
                            </div>
                            <span class="input-group-text rounded-end cursor-pointer" id="basic-default-password4"
                              ><i class="mdi mdi-eye-off-outline"></i
                            ></span>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your password.</div>
                          </div>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                              <input
                                type="password"
                                id="bs-validation-password"
                                class="form-control"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                type="password" name="password_2"
                                required />
                              <label for="bs-validation-password">Confirm Password</label>
                            </div>
                            <span class="input-group-text rounded-end cursor-pointer" id="basic-default-password4"
                              ><i class="mdi mdi-eye-off-outline"></i
                            ></span>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please confirm your password.</div>
                          </div>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                          <input
                            type="text"
                            class="form-control flatpickr-validation"
                            placeholder="YYYY-MM-DD"
                            id="bs-validation-dob"
                            required />
                          <label for="bs-validation-dob">DOB</label>
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">Please Enter Your DOB</div>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                          <input type="file" class="form-control" id="bs-validation-upload-file" required />
                          <label for="bs-validation-upload-file">Profile pic</label>
                        </div>
                        <div class="mb-4">
                          <label class="d-block form-label">Gender</label>
                          <div class="form-check mb-2">
                            <input
                              type="radio"
                              id="bs-validation-radio-male"
                              name="bs-validation-radio"
                              class="form-check-input"
                              required />
                            <label class="form-check-label" for="bs-validation-radio-male">Male</label>
                          </div>
                          <div class="form-check">
                            <input
                              type="radio"
                              id="bs-validation-radio-female"
                              name="bs-validation-radio"
                              class="form-check-input"
                              required />
                            <label class="form-check-label" for="bs-validation-radio-female">Female</label>
                          </div>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                          <textarea
                            class="form-control h-px-75"
                            id="bs-validation-bio"
                            name="bs-validation-bio"
                            rows="3"
                            placeholder="My name is john"
                            required></textarea>
                          <label for="bs-validation-bio">Bio</label>
                        </div>
                        <div class="mb-3">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="bs-validation-checkbox" required />
                            <label class="form-check-label" for="bs-validation-checkbox"
                              >Agree to our terms and conditions</label
                            >
                            <div class="invalid-feedback">You must agree before submitting.</div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="switch switch-primary">
                            <input type="checkbox" class="switch-input" required />
                            <span class="switch-toggle-slider">
                              <span class="switch-on"></span>
                              <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">Send me related emails</span>
                          </label>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <button type="submit" class="btn btn-primary" name="reg_user">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /Bootstrap Validation -->
</body>
</html>