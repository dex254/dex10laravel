<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
</div>
<!DOCTYPE html>
<html>
<head>
    <title>Yetu Details</title>
    <style>
        /* Define styles for the PDF content */
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #000;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Yetu Details</h1>
    <table>
        <tr>
            <th>ID</th>
            <td>{{ $yetu->id }}</td>
        </tr>
        <tr>
            <th>Image Name</th>
            <td>{{ $yetu->image_name }}</td>
        </tr>
        <tr>
            <th>Sender ID</th>
            <td>{{ $yetu->sender_id }}</td>
        </tr>
        <tr>
            <th>Sender Email</th>
            <td>{{ $yetu->sender_email }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $yetu->description }}</td>
        </tr>
    </table>
</body>
</html>
