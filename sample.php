<form  class="modal-content animate" method="POST" action="adminadd.php" class="form-container">
     <div class="imgcontainer"> 
            <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span>  
      </div> 
      <div class="contain"> 
    <ol>
      <?php
         $conn = mysqli_connect("localhost","root","","crimedetect");
         $sql="select * from log where category='0'";
         $m=mysqli_query($conn,$sql);
      ?>
      <center>
      <table>
        <tr>
          <th> <div id="id03" class="modal">
    <form  class="modal-content animate" class="form-container">
     <div class="imgcontainer"> 
            <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span>  
      </div> 
      <div class="contain"> 
    <ol>
      <?php
         $conn = mysqli_connect("localhost","root","","crimedetect");
         $sql="select * from log where category='0'";
         $m=mysqli_query($conn,$sql);
      ?>
      <center>
      <table>
        <tr>
          <th>
            <h2>
              <u>
              Username
            </u>
          </h2>
        </th>
      </tr>      
      <?php
        while($row= mysqli_fetch_array($m)){
      ?>
      <tr>
      <td>
        <h3>
          <font color="black">
            <?php echo $row['usr']; ?>
          </font>
        </h3>
      </td>
      </tr>
      <?php
      }
      ?>
    </table>
  </center>
</ol>
     </div>
 </form>
</div>
         <script> 
        var modal = document.getElementById('id03'); 
        window.onclick = function(event) { 
            if (event.target == modal) { 
                modal.style.display = "none"; 
            } 
        } 
    </script> 
        <div class="container">
          <div class="buttons">
              <button id="view" class="blob-btn">
      View Admins
    <span class="blob-btn__inner">
      <span class="blob-btn__blobs">
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
        <span class="blob-btn__blob"></span>
      </span>
    </span>
  </button>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="goo">
      <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
      <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
    </filter>
  </defs>
</svg>
            <h2>
              <u>
              Username
            </u>
          </h2>
        </th>
      </tr>      
      <?php
        while($row= mysqli_fetch_array($m)){
      ?>
      <tr>
      <td>
        <h3>
          <font color="black">
            <?php echo $row['usr']; ?>
          </font>
        </h3>
      </td>
      </tr>
      <?php
      }
      ?>
    </table>
  </center>
</ol>
     </div>
 </form>