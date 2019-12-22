<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
  
  <div class="container-fluid">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#home">All</a></li>
      <li><a data-toggle="tab" href="#menu1">Open</a></li>
      <li><a data-toggle="tab" href="#menu2">Unfulfilled and partially fulfilled</a></li>
      <li><a data-toggle="tab" href="#menu3">Unpaid</a></li>
      <li><a data-toggle="tab" href="#menu4">Custom Search</a></li>
    </ul>
    
    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <h3>All</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div id="menu1" class="tab-pane fade">
        <h3>Open</h3>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div id="menu2" class="tab-pane fade">
        <h3>Unfulfilled and partially fulfilled</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      </div>
      <div id="menu3" class="tab-pane fade">
        <h3>Unpaid</h3>
        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
      <div id="menu4" class="tab-pane fade">
        <div class="btn-group btn-group-justified">
          <div class="btn-group">
            <!-- <button type="button" class="btn btn-primary">Apple</button> -->
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
              Filter <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Search Orders</a></li>
                <li><a href="#">Save Search</a></li>
              </ul>
            </div>
            <div class="btn-group form-group has-search">
              <span class="fa fa-search form-control-feedback"></span>
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-default">Save Search</button>
            </div>
          </div>
          <div class="btn-group">
            <button type="button" class="btn">Status is Open
              <span aria-hidden="true">×</span>
            </button>
          </div>
          
          <div class="table-responsive ">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                  </th>
                  <div class="btn-group">
                    <button type="button" class="btn">4  orders selected</button>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Actions <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Action 1</a></li>
                          <li><a href="#">Action 2</a></li>
                        </ul>
                      </div>
                      <button type="button" class="btn btn-link">All items in this page are selected</button>
                      
                    </div>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                    </th>
                    <td> <a href="#">#1234567890</a> </td>
                    <td>Delivered</td>
                    <td>Jude bakers</td>
                    <td><span style="background-color: #FF8C00">Pending</span></td>
                    <td> <span style="background-color: #FFFF00">Unfulfilled</span> </td>
                    <td>$123.00</td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                    </th>
                    <td> <a href="#">#1234567890</a> </td>
                    <td>Delivered</td>
                    <td>Jude bakers</td>
                    <td><span style="background-color: #FF8C00">Pending</span></td>
                    <td> <span style="background-color: #FFFF00">Unfulfilled</span> </td>
                    <td>$123.00</td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                    </th>
                    <td> <a href="#">#1234567890</a> </td>
                    <td>Delivered</td>
                    <td>Jude bakers</td>
                    <td><span style="background-color: #FF8C00">Pending</span></td>
                    <td> <span style="background-color: #FFFF00">Unfulfilled</span> </td>
                    <td>$123.00</td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                    </th>
                    <td> <a href="#">#1234567890</a> </td>
                    <td>Delivered</td>
                    <td>Jude bakers</td>
                    <td><span style="background-color: #FFFF00">Authorised</span></td>
                    <td> <span style="background-color: #FFFF00">Unfulfilled</span> </td>
                    <td>$123.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </body>
    </html>