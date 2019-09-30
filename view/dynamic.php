<?php include '../partials/header.php' ?>
<body>
<div class="wrapper">
    <?php include '../partials/sidebar.php' ?>
    <div class="main-panel">
        <?php include '../partials/navbar.php' ?>
        <div class="row" style="margin: 100px;">
            <h2>Welcome to the eKomi Product Manager</h2>
        </div>

        <div class = "col-md-12" style = "margin: 25px;">
            <div>
                <button class="btn-custom" value = "Add Row" onclick = "rowAdd()">
                    <img src = "../assets/img/add.png">
                </button>
            </div>
            <div>
                <button class="btn_custom" value = "Delete Row" onclick = "rowDelete()">
                    <img src = "../assets/img/remove.png">
                </button>
            </div>
        </div>

        <div id="div1" class = "div1" style = "margin: 50px;"></div>

        <script>
            function rowAdd(){
                var mainDiv = document.getElementById("div1");
                var body = document.createElement("div");
                // body.className = 'formDiv';
                var node1 = document.createTextNode("Product Name: ");
                var input1 = document.createElement("input");
                input1.setAttribute('type', 'text');
                body.appendChild(node1);
                body.appendChild(input1);


                var node2 = document.createTextNode("Product Amount: ");
                var input2 = document.createElement("input");
                input2.setAttribute('type', 'number');
                body.appendChild(node2);
                body.appendChild(input2);


                var node3 = document.createTextNode("Product Cost: ");
                var input3 = document.createElement("input");
                var input4 = document.createElement("br");
                input3.setAttribute('type', 'number');
                body.appendChild(node3);
                body.appendChild(input3);
                body.appendChild(input4);

                mainDiv.appendChild(body);
            }


            function rowDelete(){
                var mainDiv = document.getElementById("div1");
                var body = document.getElementById("div");

                if (mainDiv.hasChildNodes()) {
                    mainDiv.removeChild(mainDiv.childNodes[0]);
                }
            }

        </script>

        <?php include '../partials/footer.php' ?>
