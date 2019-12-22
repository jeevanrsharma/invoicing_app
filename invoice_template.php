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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">        
        div.scrollBar {
            /* border: 2px solid black; */
            /* max-width: 250px; */
            max-height: 250px;
            overflow-y: scroll;
            /* overflow: scroll; */
            float: left;
        }
        hr.style1{
            border-top: 2px solid #8c8b8b;
        }
    </style>
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <p>  <span class="glyphicon glyphicon-list-alt inline"></span> Simple Invoice | Settings | Invoice Settings</p>
            </div>
            <div class="col-md-6">
                <span class="pull-right">
                    <p>By Invoiving App</p>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <button type="button" class="btn">Basic</button>
            </div>
            <div class="col-md-6">
                <span class="pull-right">
                    <button type="button" class="btn btn-primary  float-right">Primary</button>
                </span>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-4" >
                <h5>Pure Template</h5>
                <button btn style="background-color:transparent;font-size: 18px;width: -webkit-fill-available;"><i class="material-icons">format_color_fill</i> Styling </button> 
                <div class="scrollBar">
                    <div>
                        Logo Image
                        <img src = "https://cdn.dribbble.com/users/112044/screenshots/2852830/summer-icon.png" class = "img-responsive" alt = "logo" style="max-width: 30%";>
                        <p>Logo Size % 50</p>
                        <p>Header Font Settings</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Font Face Settings</p>
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="text" data-toggle="dropdown" style="background-color:transparent; font-size: 14px; width: -webkit-fill-available;">Poppins
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Poppins</a></li>
                                        <li><a href="#">Poppins</a></li>
                                        <li><a href="#">Poppins</a></li>
                                    </ul>
                                </div>
                                <p>Font Face Settings</p>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="text" data-toggle="dropdown" style="background-color:transparent; font-size: 14px; width: -webkit-fill-available;">Poppins
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Poppins</a></li>
                                            <li><a href="#">Poppins</a></li>
                                            <li><a href="#">Poppins</a></li>
                                        </ul>
                                    </div>
                                    <p>Font Face Settings</p>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="text" data-toggle="dropdown" style="background-color:transparent; font-size: 14px; width: -webkit-fill-available;">Poppins
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Poppins</a></li>
                                                <li><a href="#">Poppins</a></li>
                                                <li><a href="#">Poppins</a></li>
                                            </ul>
                                        </div>
                                        <p>Font Face Settings</p>
                                        <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle" type="text" data-toggle="dropdown" style="background-color:transparent; font-size: 14px; width: -webkit-fill-available;">Poppins
                                                <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Poppins</a></li>
                                                    <li><a href="#">Poppins</a></li>
                                                    <li><a href="#">Poppins</a></li>
                                                </ul>
                                            </div>
                                            <p>Font Face Settings</p>
                                            <div class="dropdown">
                                                <button class="btn btn-default dropdown-toggle" type="text" data-toggle="dropdown" style="background-color:transparent; font-size: 14px; width: -webkit-fill-available;">Poppins
                                                    <span class="caret"></span></button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Poppins</a></li>
                                                        <li><a href="#">Poppins</a></li>
                                                        <li><a href="#">Poppins</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>Size</p>
                                                <input class="form-control" type="number">
                                                <p>Size</p>
                                                <input class="form-control" type="number">
                                                <p>Size</p>
                                                <input class="form-control" type="number">
                                                <p>Size</p>
                                                <input class="form-control" type="number">
                                                <p>Size</p>
                                                <input class="form-control" type="number">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <button btn style="background-color:transparent;font-size: 18px;width: -webkit-fill-available;"><span class="glyphicon glyphicon-th-large"></span> Formats </button> 
                                    <button btn style="background-color:transparent;font-size: 18px;width: -webkit-fill-available;"><span class="glyphicon">&#xe019;</span> Styling </button> 
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <img src = "https://cdn.dribbble.com/users/112044/screenshots/2852830/summer-icon.png" class = "img-responsive" alt = "logo" style="max-width: 60%";>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-right">
                                                IceCream bakery <br>
                                                Adrress <br>
                                                Adrress <br>
                                                Adrress <br>
                                                Adrress
                                            </p>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h2>
                                                Invoice
                                            </h2>
                                            <p>Order Date</p>
                                            <p>2018-12-04 01:47:07</p>
                                            <p>PAYMENT METHOD</p>
                                            <p>Credit card</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <h3>Ship To</h3>
                                            <p>
                                                Check woods <br>
                                                #45 East front <br>
                                                Ever syles <br>
                                                Ever green <br>
                                                United States <br>
                                                (123) 456 - 78901
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <h3>Bill To</h3>
                                            <p>
                                                Check woods <br>
                                                #45 East front <br>
                                                Ever syles <br>
                                                Ever green <br>
                                                United States <br>
                                                (123) 456 - 78901
                                            </p>
                                        </div> 
                                    </div>
                                    <div>
                                        <table class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <th><strong> ITEM </strong></th>
                                                    <th><strong>SKU</strong></th>
                                                    <th><strong>QTTY</strong></th>
                                                    <th><strong>VAT</strong></th>
                                                    <th><strong>UNIT PRICE</strong></th>
                                                    <th><strong>TOTAL</strong></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <!-- <img src = "https://cdn.dribbble.com/users/112044/screenshots/2852830/summer-icon.png" class = "img-responsive" alt = "logo" style="max-width: 30%";> -->
                                                        <p>Product Name</p>
                                                        <p>Product Desc</p>
                                                        <p>Product Desc</p>
                                                        <p>Product Desc</p>
                                                    </td>
                                                    <td>213546987798</td>
                                                    <td>1</td>
                                                    <td>4%</td>
                                                    <td>$10.00</td>
                                                    <td>$10.00</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <!-- <img src = "https://cdn.dribbble.com/users/112044/screenshots/2852830/summer-icon.png" class = "img-responsive" alt = "logo" style="max-width: 30%";> -->
                                                        <p>Product Name</p>
                                                        <p>Product Desc</p>
                                                        <p>Product Desc</p>
                                                        <p>Product Desc</p>
                                                    </td>
                                                    <td>213546987798</td>
                                                    <td>1</td>
                                                    <td>4%</td>
                                                    <td>$10.00</td>
                                                    <td>$10.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <p> <strong>
                                                Order Note:
                                            </strong> Ship order before weekeend</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p> <strong>DISCOUNT:</strong>&nbsp;&nbsp;$100</p>
                                            <p> <strong>SUB TOTAL:</strong>&nbsp;&nbsp;$100</p>
                                            <p> <strong>SHIPPING:</strong>&nbsp;&nbsp;$100</p>
                                            <p> <strong>VAT (ex):</strong>&nbsp;&nbsp;$100</p>
                                            <p> <strong>TOTAL:</strong>&nbsp;&nbsp;$100</p>
                                        </div>
                                    </div>
                                    
                                    <hr class="style1">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p><strong>Terms & Notes</strong></p>
                                            <p>Thank you for your valued businness. We greatly value your trust and confidence and sincelerely appriciate your loyalty to our business.</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="https://img.icons8.com/android/24/000000/facebook.png">
                                            <img src="https://img.icons8.com/android/24/000000/twitter.png">
                                            <img src="https://img.icons8.com/android/24/000000/instagram.png">
                                            <img src="https://img.icons8.com/android/24/000000/pinterest .png">
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </body>
                    </html>