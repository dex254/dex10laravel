
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="invoice.css"></head>
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
        border: 1px solid #59209f;
        padding: 8px;
    }
</style>
<body style="padding: 3rem">
    <h3>This document is a Dex@254 Request form </h3>
    <h1>Request Project</h1>
    {{ $patao->nameing }}<br />
    {{ $patao->comun }}<br />
    

    <h2 style="margin-top: 3rem">Amounts</h2>
    {{ $patao->amount }}<br />
    {{ $patao->due_date}}<br />

    <div style="margin-top: 3rem">
        Requesr No: #{{ $patao->sender_id }}<br />
        Email: #{{ $patao->sender_email }}
    </div>

    <table class="table">
        
            <tr>
                <th>Procuct Number</th>
                <td>{{ $patao->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $patao->nameing }}</td>
            </tr>
            <tr>
                <th>Users</th>
                <td>{{ $patao->users }}</td>
            </tr>
            <tr>
                <th>Tasks</th>
                <td>{{ $patao->purpose }}</td>
            </tr>
            <tr>
                <th>Amounts barget</th>
                <td>{{ $patao->amount }}</td>
            </tr>
            <tr>
                <th>Similer to</th>
                <td>{{ $patao->links }}</td>
            </tr>
            <tr>
                <th>Explanation</th>
                <td>{{ $patao->explain}}</td>
            </tr>
            <tr>
                <th>Date delivery</th>
                <td>{{ $patao->due_date }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ $patao->description }}</td>
            </tr>
            <tr>
                <th>Image name</th>
                <td>{{ $patao->image_name }}</td>
            </tr>
            <tr>
                <th>Modules</th>
                <td>{{ $patao->users }}</td>
            </tr>
            <tr>
                <th>Contact info</th>
                <td>{{ $patao->comun }}</td>
            </tr>
 
       
        

       
    </table>
    <h2>Secret key:{{ $patao->id }}{{ $patao->sender_email }}{{ $patao->sender_id }}</h2>
    <h3></h3>

</body>
</html>