                                     <div id="response"></div>
                                    <form id="ajaxForm" method="post">
                                        <div class="form-style1">
                                            <div class="mb25">
                                                <label class="form-label fw600 dark-color">Full Nane</label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter Full Nane" required>
                                            </div>
                                            <div class="mb25">
                                                <label class="form-label fw600 dark-color">Mobile No</label>
                                                <input type="text"  id="contact_info"name="contact_info" onkeypress="return isNumberKey(event)" maxlength="10" class="form-control" placeholder="Enter Mobile No" required>
                                                <span id="availability"></span>
                                            </div>
                                            <div class="mb25">
                                                <label class="form-label fw600 dark-color">Email</label>
                                                <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email" required>
                                                <span id="availability1"></span>
                                            </div>
                                            <div class="mb20">
                                                <label class="form-label fw600 dark-color">Password</label>
                                                <input type="password" maxlength="6" name="password" class="form-control" placeholder="Enter 6 digit Password" required>
                                            </div>
                                            <div class="d-grid mb20">
                                                <button class="ud-btn btn-thm" type="submit" id="register">Create account <i class="fal fa-arrow-right-long"></i></button>
                                            </div>
                                        </div>
                                    </form>