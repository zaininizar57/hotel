 <!-- AWAL CHEKIN DAN CHEKOUT -->
 <div class="d-flex justify-content-center mt-5">
     <form action="?menu=pesan_kamar" method="POST" class="row g-6">
         <div class="form-floating col-md-3 mb-2">
             <input type="date" class="form-control" name="chekin" id="floatingInput" placeholder="Chek
In">
             <label for="floatingInput">Chek In</label>
         </div>
         <div class="form-floating col-md-3 mb-2">
             <input type="date" class="form-control" name="chekout" id="floatingInput" placeholder="Chek
Out">
             <label for="floatingInput">Chek Out</label>
         </div>
         <div class="form-floating col-md-3 mb-2">
             <input type="number" class="form-control" name="jmlkamar" id="floatingInput" placeholder="Jumlah Kamar">
             <label for="floatingInput">Jumlah Kamar</label>
         </div>
         <div class="form-floating col-md-3">
             <button type="submit" name="key" class="btn btn-primary p-3">Pesan</button>
             <label for="floatingInput"></label>
         </div>
     </form>
 </div>
 <!-- AKHIR CHEKIN DAN CHEKOUT -->