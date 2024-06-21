<!-- 
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog  modal-sm">
        <div class="card modalcolor">
            <div class="card-img modalpic"> <img class="img-fluid" src="Pic/ML.png" style="width:auto"> </div>
          
            <div class="card-text">
        <div class="content">
        <p> Name&ensp;&ensp;:
        
        <br>Id&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;:
        <br>User&ensp;&ensp;&ensp;:
        <br>Type&ensp;&ensp;&ensp;:
    
    </p>
</div>
  
         
         
            <div class="content">
        
                <p> <?php echo $_SESSION["Nfullname"];?>
              
                <br><?php echo $_SESSION["Nuid"];?>
                <br><?php echo $_SESSION["Nuser1"];?>
                <br><?php echo $_SESSION["Ntype1"];?>
            
            </p>
            </div>
</div>

           
        </div>
    </div>
</div> -->


    



<div class="modal fade" id="myModal" role="dialog" >
  
  <div class="container">
  
  <div class="col-md-4 mb-md-0 mb-3">
  
              <div class="card d-flex flex-column align-items-center justify-content-center">
  
             
  
                  <div class="inner-content d-flex flex-column align-items-center justify-content-center">
                  
                  <a class="Bside3" href="../nursedash.php"><i class="fas fa-times"></i></a>    
                  
                  <div class="img-container rounded-circle"> <img src="Pic/nurse1.png" alt="" class="rounded-circle"> </div>
                      <div class="h3"><?php echo $_SESSION["Nfullname"];?></div>
                      <p class="designation text-muted text-uppercase"><?php echo $_SESSION["Ntype1"];?></p>
                  </div>
               
              </div>
          </div>
      
      
      
      
      </div>
             
          </div>