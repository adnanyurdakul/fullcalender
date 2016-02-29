        <html>

          <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
            <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
            <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
            rel="stylesheet" type="text/css">
            <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
            rel="stylesheet" type="text/css">
          </head>

          <body>
             <?php 
              $username = "root";
              $password = "";
              $host = "localhost";
              $connector = mysql_connect($host,$username,$password)
                or die("Unable to connect");
                echo '';
              $selected = mysql_select_db("etmaouting", $connector)
                or die("Unable to connect");
              //execute the SQL query and return records
              $result = mysql_query("SELECT * FROM brethren ORDER BY id ASC ");
              $NO =1;
              ?>


            <div class="section">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">   

                    <table class="table">
                      <thead>
                        <tr> 
                          <th>NO</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Contact</th>
                          <th>Email</th>
                        </tr>
                      </thead>
             <tbody>              
                        <?php
                        while( $row = mysql_fetch_assoc($result) ){
                              echo
                          "<tr> 
                            <td>{$NO}</td>  
                            <td>{$row['First Name']}</td>
                            <td>{$row['Last Name']}</td>
                            <td>{$row['Contact']}</td>
                            <td>{$row['email']}</td>
                           </tr>\n";
                          $NO++;
                        }
                      ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
              <?php mysql_close($connector); ?>
           </body>

        </html>
