<!-- modal-->
<div class="modal fade" id="adminLoginModel" tabindex="-1" aria-labelledby="adminLoginModelLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="adminLoginModelLabel"> Admin Login </h1>
                    <button type=" button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Start admin login form -->
                    <form id="adminLoginForm">
                        <div class="mb-3">
                            <i class="fas fa-envelope"></i> <label for="adminLoginEmail"
                                class="pl-2 font-weight-bold form-label">Email
                                address</label>
                            <input type="email" class="form-control" placeholder="Email Address" name="adminLoginEmail"
                                id="adminLoginEmail" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-key"></i>
                            <label for="adminLoginPass" class="pl-2 font-weight-bold">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="adminLoginPass"
                                id="adminLoginPass">
                        </div>
                    </form>
                    <!-- End student login form -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="adminLoginBtn">Login</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>