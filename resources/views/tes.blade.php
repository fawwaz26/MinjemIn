<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
<style>
        .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }
    
    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto;
      padding: 20px;
      width: 30%;
      height: 80%;
      border: 1px solid #888;
    }
    
    /* The Close Button */
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    .note {
      font-size: 14px;
      margin-top: 10px;
    }
    .cicil {
      color: white;
      background-color: #4ABD78;
      box-shadow: -3px -3px 8px rgba(255, 255, 255, 0.03), 3px 3px 8px rgba(0, 0, 0, 0.2); 
      width: 50%;
      top: 50%;

    }
</style>
  </head>
  <body>
<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal --> 
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">

    <form action="">
      @csrf
          {{-- <span class="close">&times;</span> --}}
      <h2 class="text-center">Detail Pembayaran</h2>
      <div class="detail lh-base">
        <p>Peminjaman &emsp; &emsp; : paket C  <br>
          Tanggal pinjam  &emsp; : paket C <br>
          batas pinjaman  &emsp; : paket C <br>
          bunga  &emsp; &emsp; &emsp; &emsp; : paket C <br>
          telat bayar&emsp; &emsp; &emsp;: paket C <br>
          total bayar&emsp; &emsp; &emsp;: paket C <br>
        </p>
      </div>
      <div class="bayar">
        <p>Bukti pembayaran :</p>
        <input class="form-control border-0" type="file" id="formFile" style="background-color:#F3FFE4">
      </div>
      <div class="note">
        <p> <span class="fw-bold">Note :</span> <br>
          Transfer pembayaran ke salah satu no rekening kami <br>
          BNI  : 12345678 (an fulan) <br>
          BCA : 12345678 (an fulan) <br>
          BRI  : 12345678 (an fulan)</p>
      </div>
      <div class="row d-flex justify-content-center align-content-center">
        <button type="submit" class="cicil col-2 py-2 border-0 rounded-1 fw-bold">
            Kirim
        </button>
    </div>
    </form>
  </div>

</div>

  </body>

<script>
    // Get the modal
var modal = document.getElementById("myModal");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("cicil")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}
// When the user clicks on submit, close the modal
span.onclick = function() {
  modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</html>