<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
</div>
<!DOCTYPE html>
<html>
<head>
    <title>Your castom request Details</title>
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
    <h1>The details to the upload</h1>
    <table>
        <tr>
            <th>ID</th>
            <td>{{ $patao->id }}</td>
        </tr>
        <tr>
            <th>document Name</th>
            <td>{{ $patao->documemt_name }}</td>
        </tr>
        <tr>
            <th>Sender ID</th>
            <td>{{ $patao->sender_id }}</td>
        </tr>
        <tr>
            <th>Sender Email</th>
            <td>{{ $patao->sender_email }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $patao->description }}</td>
        </tr>
    </table>
</body>
</html>
