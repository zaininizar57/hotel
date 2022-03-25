 <!-- AWAL CHEKIN DAN CHEKOUT -->
 <div class="container mt-4">
     <form action="?menu=pesan_kamar" method="POST" action="">
         <div class="row border bg-primary shadow">
             <div class="d-flex m-5 justify-content-center align-items-center">
                 <div style="width: 200px;" class="input-group mx-2">
                     <input type="date" name="chekin" class="form-control shadow" placeholder="Recipient's username"
                         aria-label="Recipient's username" aria-describedby="button-addon2">
                 </div>
                 <div style="width: 200px;" class="input-group mx-2">
                     <input type="date" name="chekout" class="form-control shadow" placeholder="Recipient's username"
                         aria-label="Recipient's username" aria-describedby="button-addon2">
                 </div>
                 <div style="width: 200px;" class="input-group mx-2">
                     <input type="number" class="form-control shadow" name="jmlkamar" placeholder="Jumlah Kamar"
                         aria-label="Recipient's username" aria-describedby="button-addon2">
                 </div>
                 <button type="submit" name="key" style="width: 200px; border: 1px solid white;"
                     class="btn text-white shadow">
                     Pesan
                 </button>
             </div>
         </div>
     </form>
 </div>
 <!-- AKHIR CHEKIN DAN CHEKOUT -->