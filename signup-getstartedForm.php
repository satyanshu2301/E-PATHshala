<!-- Modal -->
<div class="modal fade" id="StuRegModel" tabindex="-1" aria-labelledby="StuRegModelLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="StuRegModelLabel"> Student Registration </h1>
                    <button type=" button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Start registration form -->
                    <form>
                        <div class="mb-3">
                            <i class="fas fa-user"></i> <label for="stuname" class="form-label pl-2 font-weight-bold-">
                                User Name
                            </label>
                            <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-envelope"></i> <label for="stuemail"
                                class="pl-2 font-weight-bold form-label">Email
                                address</label>
                            <input type="email" class="form-control" placeholder="Email Address" name="stuemail"
                                id="stuemail" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text">We'll never share your email with anyone else.
                            </small>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-key"></i>
                            <label for="stupass" class="pl-2 font-weight-bold"> New Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="tupasss"
                                id="stupass">
                        </div>
                    </form>
                    <!-- End registration form -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Sign Up</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>