<!-- AWAL MASUK -->
<div class="container col-md-4" style="margin-top:200px; margin-bottom: 300px; ">
    <div class="row">
        <div class="card">
            <h3 class="text-center pt-3">Halaman Masuk</h3>
            <div class="card-body">
                <form action="?menu=proses_masuk" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="username" id="floatingInput"
                            placeholder="Username">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="col-auto">
                        <button type="submit" name="masuk" class="btn btn-primary" style="float: right;width:
150px; height:51px; ">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- AKHIR MASUK -->