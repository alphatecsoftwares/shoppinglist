<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping List Manager</title>
    <link rel="shortcut icon" href="./assets/images/shopping.jpg" />
    <link rel="stylesheet" href="./assets/bootstrap/dist/css/bootstrap.min.css">
    <link
      rel="stylesheet"
      href="./assets/fontawesome/fontawesome/css/all.min.css"
    />
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
<h2 class="text-center text-success font-weight-bolder mt-3">Shopping List Manager Application</h2>
<div class="col-md-6 mx-auto border border-bottom my-2 border-success"></div>
<div class="bg-container">
    <div class="content-container">
        <div class="col-md-6 shadow-lg p-3 mb-5 bg-white rounded mx-auto">
            <div class="text-info font-weight-bold">Items</div>
            <div>
            <!-- Display added items -->
            <ol id="list-items"><span id="no-items">There are no items in the list</span></ol>
            </div>
            <hr>
            
            <!-- Add item form-->
            <div class="">
                <div class="text-info font-weight-bold my-2">Add item</div>
                <form id="add-form" method="POST" class="" autocomplete="off">
                    <div class="form-group">
                    <input type="text" class="form-control col-md-4" id="item-name" placeholder="Item name"></div>
                    <button class="btn btn-outline-success ml-5"><span class="fas fa-pen mx-1"></span>Add Item</button>
                </form>
            </div>
            
            <!-- Modify item -->
            <hr>
            <div id="edit-item">
            <div class="text-info font-weight-bold my-2">Edit Items</div>
            
                <div class="d-flex">
                <label for="items">Select item:</label>
            
                <select name="items" class="ml-2 form-control col-md-5" id="items">
                    <option value="">No items</option>
            </select>
            </div>
            
            <div class="my-2">
            <button id="edit-btn"class="btn btn-outline-info ml-5"><span class="fas fa-edit mx-1"></span>Edit Item</button>
            <button id="delete-btn" class="btn btn-outline-danger"><span class="fas fa-trash mx-1"></span>Delete</button>
            </div>
            </div>
            <div id="item-modify">
            <div class="text-info font-weight-bold my-2">Item to modify</div>
            <div class="d-flex"><label for="item-change">Item: </label>
            <input type="text" id="item-change" class="form-control col-md-4 ml-2"></div>
            
            <div class="my-2">
            <button id="save-btn"class="btn btn-outline-info ml-5"><span class="fas fa-save mx-1"></span>Save Changes</button>
            <button id="cancel-btn" class="btn btn-outline-warning"><span class="fas fa-times mx-1"></span>Cancel</button>
            </div>
            </div>
            <div class="my-2">
                <button id="sort-btn" class="btn btn-outline-warning ml-5 "><span class="fas fa-sort-alpha-down mx-1"></span>Sort</button>
                </div>
            </div>
    </div>
</div>

<script src="./assets/jquery/dist/jquery.min.js"></script>
    <script src="./assets/popper.js/dist/umd/popper.min.js"></script>
    <script src="./assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./assets/js/index.js"></script>
</body>
</html>