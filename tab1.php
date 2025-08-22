                                    <form action="verify.php" method="POST">
                                        <div class="form-style1">
                                            <div class="mb25">
                                                <label class="form-label fw600 dark-color">Mobile No</label>
                                                <input type="text" name="contact_info" onkeypress="return isNumberKey(event)" maxlength="10" class="form-control" placeholder="Enter Mobile Number" required>
                                            </div>
                                            <div class="mb15">
                                                <label class="form-label fw600 dark-color">Password</label>
                                                <input type="password" class="form-control" name="password" placeholder="Enter 6 digit Password" required>
                                            </div>
                                            <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10">
                                                <label class="custom_checkbox fz14 ff-heading">Remember me
                                                  <input type="checkbox" checked="checked">
                                                  <span class="checkmark"></span>
                                                </label>
                                                <!--<a class="fz14 ff-heading" href="#">Lost your password?</a>-->
                                            </div>
                                            <div class="d-grid mb20">
                                                <button class="ud-btn btn-thm" type="submit" name="login">Sign in <i class="fal fa-arrow-right-long"></i></button>
                                            </div>
                                        </div>
                                    </form>