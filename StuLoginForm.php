<!-- modal-->
<div class="modal fade" id="StuLoginModel" tabindex="-1" aria-labelledby="StuLoginModelLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="StuLoginModelLabel"> Student Login </h1>
                    <button type=" button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Start student login form -->
                    <form id="stuLoginForm">
                        <div class="mb-3">
                            <i class="fas fa-envelope"></i> <label for="stuLoginEmail"
                                class="pl-2 font-weight-bold form-label">Email
                                address</label>
                            <input type="email" class="form-control" placeholder="Email Address" name="stuLoginEmail"
                                id="stuLoginEmail" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-key"></i>
                            <label for="stuLoginPass" class="pl-2 font-weight-bold">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="stuLoginPass"
                                id="stuLoginPass">
                        </div>
                    </form>
                    <!-- End student login form -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="stuLoginBtn">Login</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>