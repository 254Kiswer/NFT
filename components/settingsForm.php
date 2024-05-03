<form method="POST" action="settings.php">
                    <div class="row mt-5 align-items-center">
                        <div class="col-md-3 text-center mb-5">
                            <div class="avatar avatar-xl">
                                <img src="<?php echo APPURL; ?>/assets/img/NFT-background.jpg" alt="..."
                                    class="avatar-img rounded-circle" />
                            </div>
                        </div>
                        <!-- <div class="col">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <h4 class="mb-1">Brown, Asher</h4>
                                    <p class="small mb-3"><span class="badge badge-dark">New York, USA</span></p>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-7">
                                    <p class="text-muted align-item-right">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl
                                        ullamcorper, rutrum metus in, congue lectus. In hac habitasse platea dictumst.
                                        Cras urna quam, malesuada vitae risus at,
                                        pretium blandit sapien.
                                    </p>
                                </div>
                                <div class="col">
                                    <p class="small mb-0 text-muted">Nec Urna Suscipit Ltd</p>
                                    <p class="small mb-0 text-muted">P.O. Box 464, 5975 Eget Avenue</p>
                                    <p class="small mb-0 text-muted">(537) 315-1481</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <hr class="my-4" />
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstname">First Name</label>
                            <input type="text" id="firstname" class="form-control" placeholder="First Name" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">last Name</label>
                            <input type="text" id="lastname" class="form-control" placeholder="Last Name" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="employee_no">Employee No.</label>
                            <input type="text" id="employee_no" class="form-control" placeholder="Employee No." />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" />
                    </div>
                    <div class="form-group">
                        <label for="inputAddress5">Username</label>
                        <input type="text" class="form-control" id="username"
                            placeholder="Username" />
                    </div>
                    <!-- <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCompany5">Company</label>
                            <input type="text" class="form-control" id="inputCompany5"
                                placeholder="Nec Urna Suscipit Ltd" />
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState5">State</label>
                            <select id="inputState5" class="form-control">
                                <option selected="">Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip5">Zip</label>
                            <input type="text" class="form-control" id="inputZip5" placeholder="98232" />
                        </div>
                    </div> -->
                    <hr class="my-4" />
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputPassword4">Old Password</label>
                                <input type="password" class="form-control" id="oldPassword" />
                            </div>
                            <div class="form-group">
                                <label for="inputPassword5">New Password</label>
                                <input type="password" class="form-control" id="newPassword" />
                            </div>
                            <div class="form-group">
                                <label for="inputPassword6">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-2">Password requirements</p>
                            <p class="small text-muted mb-2">To create a new password, you have to meet all of the
                                following requirements:</p>
                            <ul class="small text-muted pl-4 mb-0">
                                <li>Minimum 8 character</li>
                                <li>At least one special character</li>
                                <li>At least one number</li>
                                <li>Can’t be the same as a previous password</li>
                            </ul>
                        </div>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary">Save Change</button>
                </form>