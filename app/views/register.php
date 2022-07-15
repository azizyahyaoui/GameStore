<h1>Register</h1>
<form action="" method="post">
    <div class="row">
        <div class="col">
            <label>First Name</label>
            <input type="text" name="firstName" class="form-control">
        </div>

        <div class="col"> <label>Last Name</label>
            <input type="text" name="lastName" class="form-control">
        </div>
    </div>
    <div class="mb-3">
        <label>Birth date</label>
        <input type="date" name="birthDate" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="mb-3">
        <label>Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="mb-3">
        <label>Tel</label>
        <input type="tel" name="tel" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input type="password" name="confirmPassword" class="form-control">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>