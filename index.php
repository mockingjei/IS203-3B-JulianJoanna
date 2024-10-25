<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #e3e3e3;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            color: #000;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 500;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #000;
        }

        .inputBox {
            margin-bottom: 15px;
        }

        .inputBox input {
            width: 100%;
            padding: 10px;
            border: 2px solid #000;
            border-radius: 5px;
            font-size: 1em;
        }

        .enter {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #000;
            color: #fff;
            font-size: 1em;
            cursor: pointer;
            transition: 0.3s;
        }

        .enter:hover {
            background-color: #444;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #e3e3e3;
        }

        .action-btn {
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 5px 10px;
            margin: 0 5px;
        }

        .edit-btn {
            background-color: #007bff;
            color: white;
        }

        .delete-btn {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="index.php">Admin Home</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="container">
        <h1>Order Management</h1>

        <div class="inputBox">
            <input type="text" id="customerName" placeholder="Customer Name" required>
        </div>
        <div class="inputBox">
            <input type="text" id="cakeName" placeholder="Cake Ordered" required>
        </div>
        <button class="enter" onclick="addOrder()">Add Order</button>

        <table id="ordersTable">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Cake Ordered</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Orders will be dynamically added here -->
            </tbody>
        </table>
    </div>

    <script>
        function addOrder() {
            const customerName = document.getElementById('customerName').value;
            const cakeName = document.getElementById('cakeName').value;

            if (customerName && cakeName) {
                const table = document.getElementById('ordersTable').getElementsByTagName('tbody')[0];
                const newRow = table.insertRow();

                const cell1 = newRow.insertCell(0);
                const cell2 = newRow.insertCell(1);
                const cell3 = newRow.insertCell(2);

                cell1.textContent = customerName;
                cell2.textContent = cakeName;

                // Create Edit button
                const editButton = document.createElement('button');
                editButton.textContent = 'Edit';
                editButton.className = 'action-btn edit-btn';
                editButton.onclick = function() {
                    editOrder(newRow, customerName, cakeName);
                };

                // Create Delete button
                const deleteButton = document.createElement('button');
                deleteButton.textContent = 'Delete';
                deleteButton.className = 'action-btn delete-btn';
                deleteButton.onclick = function() {
                    deleteOrder(newRow);
                };

                cell3.appendChild(editButton);
                cell3.appendChild(deleteButton);

                document.getElementById('customerName').value = '';
                document.getElementById('cakeName').value = '';
            } else {
                alert('Please fill in both fields.');
            }
        }

        function editOrder(row, customerName, cakeName) {
            document.getElementById('customerName').value = customerName;
            document.getElementById('cakeName').value = cakeName;
            deleteOrder(row); // Remove the existing order after editing
        }

        function deleteOrder(row) {
            const table = document.getElementById('ordersTable');
            table.deleteRow(row.rowIndex - 1); // Adjust for header row
        }
        
    </script>
 <div data-role="footer" align="center">
        <small>Programmed by: Joanna Julian 
     <br>
        Created: 2024</small>
      </div>
</body>
</html>
