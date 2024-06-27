 <!-- footer -->
 <footer class=" bg-dark  text-white shadow-lg p-4 ">
     <div class="container">
         <div class="row alamat">
             <div class="col-md-12">
                 <img src="<?= base_url(); ?>assets/images/logoNavbar.png" style="width:50px;" alt="pemkot cimahi">
                 <h4>DINAS KESEHATAN KOTA CIMAHI</h4>
                 <p> Komplek Perkantoran Pemkot Cimahi Gedung C Lantai 3 Jl. Demang Hardjakusumah Blok Jati Cihanjuang Cimahi</p>
             </div>
         </div>

         <div class="row map">
             <div class="col-12">
                 <a href="https://www.google.com/maps/place/Dinas+Kesehatan+Kota+Cimahi/@-6.8705042,107.5549597,21z/data=!4m12!1m6!3m5!1s0x2e68e43e51a4a20f:0x83c0447f4095215c!2sDinas+Kesehatan+Kota+Cimahi!8m2!3d-6.8704988!4d107.554865!3m4!1s0x2e68e43e51a4a20f:0x83c0447f4095215c!8m2!3d-6.8704988!4d107.554865"><img class="mode2" src="<?= base_url(); ?>assets/images/map.png" alt=""></a>
             </div>

         </div>
         <div class="row">
             <div class="col-md-12">
                 <ul class="social-links">
                     <li><a href="https://web.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="https://youtube.com/"><i class="fa fa-youtube"></i></a></li>
                     <li><a href="https://www.linkedin.com/"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                 </ul>

                 <ul class="copyright">
                     <li>Copyright &copy; 2022 | PPID Dinas Kesehatan Kota Cimahi All rights reserved &bull; <a href="https://dinkes.cimahikota.go.id/">DINAS KESEHATAN KOTA CIMAHI</a> </>
                 </ul>

             </div>

         </div>
     </div>
     <div id="go-top" onclick="scroolAtas()">
         <a class="smoothscroll" title="Back to Top" href="#"><i class="icon-up-open"></i></a>
     </div>
 </footer>

 <!-- akhir footer-->




 <!-- fungsi back to top -->
 <script>
     function scroolAtas() {
         window.scrollTo({
             top: 0,
             behavior: "smooth"
         })
     }
 </script>
 <!-- script -->
 <script src="<?= base_url(); ?>assets/js/jquery.flexslider.js"></script>
 <script src="<?= base_url(); ?>assets/js/waypoints.js"></script>
 <script src="<?= base_url(); ?>assets/js/jquery.fittext.js"></script>
 <script src="<?= base_url(); ?>assets/js/magnific-popup.js"></script>
 <script src="<?= base_url(); ?>assets/js/init.js"></script>


 <!-- js boostrap -->

 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

 </body>

 </html>