<?php include 'partials/header.php' ?>
<body>
    <div class="wrapper">
      <?php include 'partials/sidebar2.php' ?>
      <div class="main-panel">
         <?php include 'partials/navbar.php' ?>
         <div class="row" style="margin: 50px;">
            <h2>Welcome to the eKomi Product Manager</h2>
        </div>
        <div class="row" style="margin: 50px;"> </div>
        <div class="container-fluid">
            <div class="well clearfix">
                <div id="czContainer">
                    <div id="first">
                        <div class="recordset">
                            <div class="fieldRow clearfix">
                                <div class="col-md-2">
                                    <div id="div_id_stock_1_service" class="form-group">
                                        <label for="id_stock_1_product" class="control-label  requiredField">
                                            Product<span class="asteriskField">*</span>
                                        </label><div class="controls ">
                                            <input type="text" name="stock_1_product" id="id_stock_1_product" class="textinput form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div id="div_id_stock_1_unit" class="form-group">
                                        <label for="id_stock_1_unit" class="control-label  requiredField">
                                            Unit<span class="asteriskField">*</span>
                                        </label><div class="controls "><select class="select form-control" id="id_stock_1_unit" name="stock_1_unit">
                                            <option value="" selected="selected">---------</option>
                                            <option value="1">1/2liter</option></select></div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div id="div_id_stock_1_quantity" class="form-group">
                                            <label for="id_stock_1_quantity" class="control-label  requiredField">
                                                Quantity<span class="asteriskField">*</span>
                                            </label><div class="controls "><input class="numberinput form-control" id="id_stock_1_quantity" name="stock_1_quantity" step="0.01" type="number" /> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'partials/footer.php' ?>