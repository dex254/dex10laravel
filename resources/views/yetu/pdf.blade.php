
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
    {{ $yetu->nameing }}<br />
    {{ $yetu->comun }}<br />
    

    <h2 style="margin-top: 3rem">Amounts</h2>
    {{ $yetu->amount }}<br />
    {{ $yetu->due_date}}<br />

    <div style="margin-top: 3rem">
        Requesr No: #{{ $yetu->sender_id }}<br />
        Email: #{{ $yetu->sender_email }}
    </div>

    <table class="table">
        
            <tr>
                <th>Procuct Number</th>
                <td>{{ $yetu->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $yetu->nameing }}</td>
            </tr>
            <tr>
                <th>Users</th>
                <td>{{ $yetu->users }}</td>
            </tr>
            <tr>
                <th>Tasks</th>
                <td>{{ $yetu->purpose }}</td>
            </tr>
            <tr>
                <th>Amounts barget</th>
                <td>{{ $yetu->amount }}</td>
            </tr>
            <tr>
                <th>Similer to</th>
                <td>{{ $yetu->links }}</td>
            </tr>
            <tr>
                <th>Explanation</th>
                <td>{{ $yetu->explain}}</td>
            </tr>
            <tr>
                <th>Date delivery</th>
                <td>{{ $yetu->due_date }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ $yetu->description }}</td>
            </tr>
            <tr>
                <th>Image name</th>
                <td>{{ $yetu->image_name }}</td>
            </tr>
            <tr>
                <th>Modules</th>
                <td>{{ $yetu->users }}</td>
            </tr>
            <tr>
                <th>Contact info</th>
                <td>{{ $yetu->comun }}</td>
            </tr>
 
       
        

       
    </table>
    <h2>Secret key:{{ $yetu->id }}{{ $yetu->sender_email }}{{ $yetu->sender_id }}</h2>
    <h3></h3>

</body>
</html>